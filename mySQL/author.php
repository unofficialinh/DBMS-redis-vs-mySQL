<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mySQL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../myStyle.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand"><img src="../image/mySQL.png"
                                         style="height: 40px; width: 40px; margin-top: -10px"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
            <ul class="nav navbar-nav">
                <li><a href="book.php">Book</a></li>
                <li class="active"><a href="author.php">Author</a></li>
                <li><a href="publisher.php">Publisher</a></li>
                <li><a href="category.php">Category</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <form class="form-horizontal" action="author.php" method="POST" enctype="multipart/form-data"
          style="margin-top: 100px">
        <div style="text-align: center">
            Choose the author
        </div><br>
        <div class="col-sm-7 col-sm-offset-2">
            <select class="form-control" id="sel1" name="author">
                <optgroup label="A">
                    <option value="A. Huxley">A. Huxley</option>
                    <option value="Abul Fazal">Abul Fazal</option>
                    <option value="Agatha Christie">Agatha Christie</option>
                    <option value="Agatha Christie">Agatha Christie</option>
                    <option value="Aldous Huxley">Aldous Huxley</option>
                    <option value="Ambrose Bierce">Ambrose Bierce</option>
                    <option value="Ambrose Bierce">Ambrose Bierce</option>
                    <option value="Arthur Schopenhauer">Arthur Schopenhauer</option>
                    <option value="Arthur Schopenhauer">Arthur Schopenhauer</option>
                    <option value="Augustine of Hippo">Augustine of Hippo</option>
                <optgroup label="B">
                    <option value="BaburKuldip Nayar">BaburKuldip Nayar</option>
                    <option value="Banjo Paterson">Banjo Paterson</option>
                    <option value="Bankim Chandra Chatterjee">Bankim Chandra Chatterjee</option>
                    <option value="Beatrix Potter">Beatrix Potter</option>
                    <option value="Bret Harte">Bret Harte</option>
                <optgroup label="C">
                    <option value="Charles Dickens">Charles Dickens</option>
                    <option value="Clark Ashton Smith">Clark Ashton Smith</option>
                    <option value="Clark Ashton Smith">Clark Ashton Smith</option>
                <optgroup label="D">
                    <option value="Dr. S. Radhakrishnan">Dr. S. Radhakrishnan</option>
                <optgroup label="E">
                    <option value="Edgar Allan Poe">Edgar Allan Poe</option>
                    <option value="Edgar Rice Burroughs">Edgar Rice Burroughs</option>
                    <option value="Edgar Rice Burroughs">Edgar Rice Burroughs</option>
                    <option value="Edna St. Vincent Millay">Edna St. Vincent Millay</option>
                    <option value="Emily Dickinson">Emily Dickinson</option>
                    <option value="Ernest Hemingway">Ernest Hemingway</option>
                <optgroup label="F">
                    <option value="Franz Kafka">Franz Kafka</option>
                    <option value="Friedrich Nietzsche">Friedrich Nietzsche</option>
                <optgroup label="G">
                    <option value="Geoffrey Chaucer">Geoffrey Chaucer</option>
                    <option value="George Bernard Shaw">George Bernard Shaw</option>
                    <option value="George Orwell">George Orwell</option>
                    <option value="Gilbert Keith Chesterton">Gilbert Keith Chesterton</option>
                    <option value="Goods Fellow">Goods Fellow</option>
                <optgroup label="H">
                    <option value="H. G. Wells">H. G. Wells</option>
                    <option value="H. H. Matthews">H. H. Matthews</option>
                    <option value="H. P. Lovecraft">H. P. Lovecraft</option>
                    <option value="Henry Wadsworth Longfellow">Henry Wadsworth Longfellow</option>
                    <option value="Henry Wadsworth Longfellow">Henry Wadsworth Longfellow</option>
                <optgroup label="I">
                <optgroup label="J">
                    <option value="Jacob De Haas">Jacob De Haas</option>
                    <option value="Jane Austen">Jane Austen</option>
                    <option value="Jawaharlal Nehru">Jawaharlal Nehru</option>
                    <option value="John Clare">John Clare</option>
                    <option value="John Donne">John Donne</option>
                    <option value="John Masefield">John Masefield</option>
                    <option value="John Masefield">John Masefield</option>
                    <option value="John Milton">John Milton</option>
                    <option value="Jules Verne">Jules Verne</option>
                <optgroup label="K">
                    <option value="Kautilya">Kautilya</option>
                <optgroup label="L">
                    <option value="Leo Tolstoy">Leo Tolstoy</option>
                    <option value="Lewis Carroll">Lewis Carroll</option>
                    <option value="Lewis Carroll">Lewis Carroll</option>
                    <option value="Lewis Carroll">Lewis Carroll</option>
                    <option value="Lord Byron">Lord Byron</option>
                <optgroup label="M">
                    <option value="Maithili Sharan Gupt">Maithili Sharan Gupt</option>
                    <option value="Marcus Tullius Cicero">Marcus Tullius Cicero</option>
                    <option value="Marcus Tullius Cicero">Marcus Tullius Cicero</option>
                    <option value="Margaret Thatcher">Margaret Thatcher</option>
                    <option value="Mark Twain">Mark Twain</option>
                    <option value="Mark Twain">Mark Twain</option>
                    <option value="Mohandas K. Gandhi">Mohandas K. Gandhi</option>
                <optgroup label="N">
                    <option value="Napoleon Bonaparte">Napoleon Bonaparte</option>
                    <option value="Nikola Tesla">Nikola Tesla</option>
                    <option value="Nirad C. Choudhury">Nirad C. Choudhury</option>
                    <option value="Noel Coward">Noel Coward</option>
                <optgroup label="O">
                    <option value="O. Henry">O. Henry</option>
                <optgroup label="P">
                    <option value="Paulo Coelho">Paulo Coelho</option>
                    <option value="Plato">Plato</option>
                    <option value="President Abraham Lincoln">President Abraham Lincoln</option>
                    <option value="President Barack Obama">President Barack Obama</option>
                    <option value="President George W. Bush">President George W. Bush</option>
                    <option value="President Theodore Roosevelt">President Theodore Roosevelt</option>
                    <option value="President William Henry Harrison">President William Henry Harrison</option>
                <optgroup label="Q">
                <optgroup label="R">
                    <option value="Rabindranath Tagore">Rabindranath Tagore</option>
                    <option value="Ralph Waldo Emerson">Ralph Waldo Emerson</option>
                    <option value="Robert Burns">Robert Burns</option>
                    <option value="Robert Burns">Robert Burns</option>
                    <option value="Robert Ervin Howard">Robert Ervin Howard</option>
                    <option value="Robert Frost">Robert Frost</option>
                    <option value="Robert Louis Stevenson">Robert Louis Stevenson</option>
                    <option value="Robert Louis Stevenson">Robert Louis Stevenson</option>
                    <option value="Rudyard Kipling">Rudyard Kipling</option>
                <optgroup label="S">
                    <option value="Samuel Taylor Coleridge">Samuel Taylor Coleridge</option>
                    <option value="Sarojini Naidu">Sarojini Naidu</option>
                    <option value="Sir Arthur Conan Doyle">Sir Arthur Conan Doyle</option>
                    <option value="Sir John Alexander Macdonald">Sir John Alexander Macdonald</option>
                    <option value="Sir Richard Burton">Sir Richard Burton</option>
                    <option value="Sir Walter Scott">Sir Walter Scott</option>
                    <option value="Sylvie d'Avigdor">Sylvie d'Avigdor</option>
                <optgroup label="T">
                    <option value="T. S. Eliot">T. S. Eliot</option>
                    <option value="Theodore Dreiser">Theodore Dreiser</option>
                    <option value="Theodore Roosevelt">Theodore Roosevelt</option>
                <optgroup label="U">
                <optgroup label="V">
                    <option value="V.S. Naipaul">V.S. Naipaul</option>
                    <option value="Victor Hugo">Victor Hugo</option>
                <optgroup label="W">
                    <option value="Walt Whitman">Walt Whitman</option>
                    <option value="Walt Whitman">Walt Whitman</option>
                    <option value="William Butler Yeats">William Butler Yeats</option>
                    <option value="William Shakespeare">William Shakespeare</option>
                    <option value="William Topaz McGonagall">William Topaz McGonagall</option>
                    <option value="William Wordsworth">William Wordsworth</option>
                    <option value="William Wordsworth">William Wordsworth</option>
                    <option value="Woodrow Wilson">Woodrow Wilson</option>
                <optgroup label="X">
                <optgroup label="Y">
                <optgroup label="Z">

            </select>
        </div>
        <div class="col-sm-offset-9">
            <button type="submit" name="search" class="btn btn-primary">Search</button>
        </div>
    </form>
</div>
</body>
</html>

<?php
    if (isset($_POST['search'])){
        require_once ('dbconfig.php');
        $author = $_POST['author'];

        $time = microtime(true);
        $query = mysqli_query($conn,
        "SELECT books.name, p.name as publisher, c.name AS category FROM
                (SELECT * FROM book WHERE author_id IN (SELECT id FROM author WHERE NAME = '".$author."')) AS books
                    JOIN publisher p ON books.publisher_id = p.id
                    JOIN category c ON books.category_id = c.id");
        $time = microtime(true) - $time;

        echo '<br><div class="container">';
        echo '<div style="text-align: center">
                <i>'.mysqli_num_rows($query).' result(s) in '.$time.' second for </i><b>'.$author.'</b>
                </div>';

        if (mysqli_num_rows($query) > 0){
            echo '<br><br><table class="table table-bordered">
                  <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Publisher</th>
                          <th scope="col">Category</th>
                        </tr>
                  </thead>
                  <tbody>';

            while ($row = mysqli_fetch_assoc($query)){
                echo '
                    <tr>
                      <th scope="row">'.$row['name'].'</th>
                      <td>'.$row['publisher'].'</td>
                      <td>'.$row['category'].'</td>
                    </tr>';
            }
            echo '</tbody></table>';
        }
    }