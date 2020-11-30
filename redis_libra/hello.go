package main

import (
	"bytes"
	"errors"
	"fmt"
	"github.com/gin-gonic/gin"
	"github.com/mediocregopher/radix/v3"
	"net/http"
	"os"
	"os/exec"
	"strconv"
	"strings"
	"time"
)

var (
	pool *radix.Pool
)

func getBooksByBookID(booksID []string) ([]Book, int) {
	timeExecServer := 0
	var bookOutput = "book_output.txt"
	if _, err := os.Stat(bookOutput); !os.IsNotExist(err) {
		os.Remove(bookOutput)
	}
	fileBook, err := os.OpenFile(bookOutput, os.O_APPEND|os.O_WRONLY, 0644)
	if err != nil {
		fileBook, _ = os.Create(bookOutput)
	}

	var categoryOutput = "category_output.txt"
	if _, err := os.Stat(categoryOutput); !os.IsNotExist(err) {
		os.Remove(categoryOutput)
	}
	fileCategory, err := os.OpenFile(categoryOutput, os.O_APPEND|os.O_WRONLY, 0644)
	if err != nil {
		fileCategory, _ = os.Create(categoryOutput)
	}

	var publisherOutput = "publisher_output.txt"
	if _, err := os.Stat(publisherOutput); !os.IsNotExist(err) {
		os.Remove(publisherOutput)
	}
	filePublisher, err := os.OpenFile(publisherOutput, os.O_APPEND|os.O_WRONLY, 0644)
	if err != nil {
		filePublisher, _ = os.Create(publisherOutput)
	}

	var authorOutput = "author_output.txt"
	if _, err := os.Stat(authorOutput); !os.IsNotExist(err) {
		os.Remove(authorOutput)
	}
	fileAuthor, err := os.OpenFile(authorOutput, os.O_APPEND|os.O_WRONLY, 0644)
	if err != nil {
		fileAuthor, _ = os.Create(authorOutput)
	}

	for _, v := range booksID {

		_, err := fileBook.Write([]byte("HGETALL " + v + "\n"))
		if err != nil {
			panic(err)
		}
	}

	cmd := exec.Command("/bin/sh", "book_shell.sh")
	var out bytes.Buffer
	cmd.Stdout = &out
	RLockSlowlog()
	err = cmd.Run()
	timeExecServer += RUnlockSlowlog(len(booksID))
	if err != nil {
		panic(err)
	}

	books := strings.Split(out.String(), "\n")
	for i, v := range books {
		if i%8 == 7 {
			fileCategory.Write([]byte("HMGET category " + v + "\n"))
		}
		if i%8 == 3 {
			fileAuthor.Write([]byte("HMGET author " + v + "\n"))
		}
		if i%8 == 5 {
			filePublisher.Write([]byte("HMGET publisher " + v + "\n"))
		}
	}

	cmd = exec.Command("/bin/sh", "category_shell.sh")
	out = bytes.Buffer{}
	cmd.Stdout = &out
	RLockSlowlog()
	err = cmd.Run()
	timeExecServer += RUnlockSlowlog(len(booksID))
	if err != nil {
		panic(err)
	}
	categories := strings.Split(out.String(), "\n")
	for i := 0; i < len(categories)-1; i++ {
		books[i*8+3] = categories[i]
	}

	cmd = exec.Command("/bin/sh", "author_shell.sh")
	out = bytes.Buffer{}
	cmd.Stdout = &out
	RLockSlowlog()
	err = cmd.Run()
	timeExecServer += RUnlockSlowlog(len(booksID))
	if err != nil {
		panic(err)
	}
	authors := strings.Split(out.String(), "\n")
	for i := 0; i < len(authors)-1; i++ {
		books[i*8+5] = authors[i]
	}

	cmd = exec.Command("/bin/sh", "publisher_shell.sh")
	out = bytes.Buffer{}
	cmd.Stdout = &out
	RLockSlowlog()
	err = cmd.Run()
	timeExecServer += RUnlockSlowlog(len(booksID))
	if err != nil {
		panic(err)
	}
	publishers := strings.Split(out.String(), "\n")
	for i := 0; i < len(publishers)-1; i++ {
		books[i*8+7] = publishers[i]
	}
	var bookReturn []Book
	bookId := ""
	bookName := ""
	bookAuthor := ""
	bookCategory := ""
	bookPublisher := ""
	for i, v := range books {

		if i%8 == 1 {
			fmt.Print("id " + strconv.Itoa(i/8+1) + " book name: " + v + "		")
			bookId = strconv.Itoa(i/8 + 1)
			bookName = v
		}
		if i%8 == 3 {
			fmt.Print(" category: " + v + "		")
			bookCategory = v
		}
		if i%8 == 5 {
			fmt.Print(" author: " + v + "		")
			bookAuthor = v
		}
		if i%8 == 7 {
			fmt.Print(" publisher: " + v + "\n")
			bookPublisher = v
			bookReturn = append(bookReturn, Book{
				ID:        bookId,
				Name:      bookName,
				Category:  bookCategory,
				Author:    bookAuthor,
				Publisher: bookPublisher,
			})
		}
	}
	return bookReturn, timeExecServer
}

func RLockSlowlog() {
	err := pool.Do(radix.Cmd(nil, "CONFIG", "SET", "SLOWLOG-LOG-SLOWER-THAN", "1000000"))
	if err != nil {
		panic(err)
	}
	err = pool.Do(radix.Cmd(nil, "CONFIG", "SET", "SLOWLOG-MAX-LEN", "20000001"))
	if err != nil {
		panic(err)
	}
	err = pool.Do(radix.Cmd(nil, "SLOWLOG", "RESET"))
	if err != nil {
		panic(err)
	}
	err = pool.Do(radix.Cmd(nil, "CONFIG", "SET", "SLOWLOG-LOG-SLOWER-THAN", "0"))
	if err != nil {
		panic(err)
	}
}

func RUnlockSlowlog(length int) int {
	var x []interface{}
	er := pool.Do(radix.Cmd(&x, "SLOWLOG", "GET", strconv.Itoa(length)))
	if er != nil {
		panic(er)
	}
	total := 0
	for i := 0; i < length; i++ {
		x1 := x[i].([]interface{})
		m := fmt.Sprintf("%v", x1[2])
		num, err := strconv.Atoi(m)
		if err != nil {
			panic(err)
		}
		total += num
	}
	return total
}

func getBooksByObjectName(typeOf string, object string) (bookReturn []Book, timeClient time.Duration, timeServer int, e error) {
	start := time.Now()
	timeServer = 0
	var objectID int
	var objectMap map[string]string
	RLockSlowlog()
	e = pool.Do(radix.Cmd(&objectMap, "HGETALL", typeOf))
	timeServer += RUnlockSlowlog(1)
	if e != nil {
		return
	}
	for i, v := range objectMap {
		if v == object {
			iInt, _ := strconv.Atoi(i)
			objectID = iInt
			break
		}
	}

	var booksID []string
	RLockSlowlog()
	e = pool.Do(radix.Cmd(&booksID, "SMEMBERS", typeOf+":"+strconv.Itoa(objectID)))
	timeServer += RUnlockSlowlog(1)
	if e != nil {
		return
	}
	tim := 0
	bookReturn, tim = getBooksByBookID(booksID)
	timeServer += tim
	timeClient = time.Since(start)
	return
}

func getBooksByName(name string) (bookReturn []Book, timeClient time.Duration, timeServer int, er error) {
	timeServer = 0
	start := time.Now()
	var x []interface{}
	RLockSlowlog()
	er = pool.Do(radix.Cmd(&x, "HSCAN", "book", "0", "MATCH", name+"*", "COUNT", "20000000"))
	timeServer += RUnlockSlowlog(1)
	if er != nil {
		return
	}

	scanBookName := x[1].([]interface{})
	var books []string
	for i, v := range scanBookName {
		if i%2 != 0 {
			books = append(books, fmt.Sprintf("book:%s", v))
		}
	}
	tim := 0
	bookReturn, tim = getBooksByBookID(books)
	timeServer += tim
	timeClient = time.Since(start)
	return
}

type Book struct {
	ID        string `json:"id"`
	Name      string `json:"name"`
	Category  string `json:"category"`
	Author    string `json:"author"`
	Publisher string `json:"publisher"`
}

type BookDto struct {
	Book        []Book `json:"books"`
	ExecuteTime string `json:"execute_time"`
}

func main() {
	err := errors.New("")
	pool, err = radix.NewPool("tcp", "127.0.0.1:6379", 10)
	if err != nil {
		panic(err)
	}
	//file, err := ioutil.ReadFile("input.txt")
	//if err != nil {
	//	panic(err)
	//}
	//inputs := strings.Split(string(file), "\n")
	timeExec := time.Since(time.Now())
	timeServer := 0
	var book []Book
	//if inputs[0] == "name" {
	//	fmt.Println("get book by book name " + inputs[1])
	//
	//	book, timeExec, timeServer, err = getBooksByName(inputs[1]) // name  value
	//	if err != nil {
	//		panic(err)
	//	}
	//} else {
	//	fmt.Println("get book by " + inputs[0] + " " + inputs[1])
	//	book, timeExec, timeServer, err = getBooksByObjectName(inputs[0], inputs[1]) // publisher oreily
	//	if err != nil {
	//		panic(err)
	//	}
	//}

	fmt.Println("=------------------------------------")
	fmt.Println("Client execute time ", timeExec)
	fmt.Println("Server execute time ", time.Duration(timeServer)*time.Microsecond)

	router := gin.Default()
	router.GET("/:object", func(c *gin.Context) {
		object := c.Param("object")
		value := c.Query("name")
		if object == "name" {
			book, timeExec, timeServer, err = getBooksByName(value)
			dto := &BookDto{
				Book:        book[:11],
				ExecuteTime: strconv.Itoa(timeServer)+ " micro seconds",
			}
			c.JSON(http.StatusOK, dto)
		} else {
			book, timeExec, timeServer, err = getBooksByObjectName(object, value)
			dto := &BookDto{
				Book:        book[:11],
				ExecuteTime: strconv.Itoa(timeServer)+ " micro seconds",
			}
			c.JSON(http.StatusOK, dto)
		}
	})
	router.Run(":8080")
}
