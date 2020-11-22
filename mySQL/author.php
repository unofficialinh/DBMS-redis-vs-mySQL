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
    <form class="form-horizontal" action="book.php" method="POST" enctype="multipart/form-data"
          style="margin-top: 100px">
        <div style="text-align: center">
            Choose the author
        </div><br>
        <div class="col-sm-7 col-sm-offset-2">
            <select class="form-control" id="sel1">
                <optgroup label="A">
                <option>	A. Huxley	</option>
                <option>	Abul Fazal	</option>
                <option>	Agatha Christie	</option>
                <option>	Agatha Christie	</option>
                <option>	Aldous Huxley	</option>
                <option>	Ambrose Bierce	</option>
                <option>	Ambrose Bierce	</option>
                <option>	Arthur Schopenhauer	</option>
                <option>	Arthur Schopenhauer	</option>
                <option>	Augustine of Hippo	</option>
                <optgroup label="B">
                <option>	BaburKuldip Nayar	</option>
                <option>	Banjo Paterson	</option>
                <option>	Bankim Chandra Chatterjee	</option>
                <option>	Beatrix Potter	</option>
                <option>	Bret Harte	</option>
                <optgroup label="C">
                <option>	Charles Dickens	</option>
                <option>	Clark Ashton Smith	</option>
                <option>	Clark Ashton Smith	</option>
                <optgroup label="D">
                <option>	Dr. S. Radhakrishnan	</option>
                <optgroup label="E">
                <option>	Edgar Allan Poe	</option>
                <option>	Edgar Rice Burroughs	</option>
                <option>	Edgar Rice Burroughs	</option>
                <option>	Edna St. Vincent Millay	</option>
                <option>	Emily Dickinson	</option>
                <option>	Ernest Hemingway	</option>
                <optgroup label="F">
                <option>	Franz Kafka	</option>
                <option>	Friedrich Nietzsche	</option>
                <optgroup label="G">
                <option>	Geoffrey Chaucer	</option>
                <option>	George Bernard Shaw	</option>
                <option>	George Orwell	</option>
                <option>	Gilbert Keith Chesterton	</option>
                <option>	Goods Fellow	</option>
                <optgroup label="H">
                <option>	H. G. Wells	</option>
                <option>	H. H. Matthews	</option>
                <option>	H. P. Lovecraft	</option>
                <option>	Henry Wadsworth Longfellow	</option>
                <option>	Henry Wadsworth Longfellow	</option>
                <optgroup label="I">
                <optgroup label="J">
                <option>	Jacob De Haas	</option>
                <option>	Jane Austen	</option>
                <option>	Jawaharlal Nehru	</option>
                <option>	John Clare	</option>
                <option>	John Donne	</option>
                <option>	John Masefield	</option>
                <option>	John Masefield	</option>
                <option>	John Milton	</option>
                <option>	Jules Verne	</option>
                <optgroup label="K">
                <option>	Kautilya	</option>
                <optgroup label="L">
                <option>	Leo Tolstoy	</option>
                <option>	Lewis Carroll	</option>
                <option>	Lewis Carroll	</option>
                <option>	Lewis Carroll	</option>
                <option>	Lord Byron	</option>
                <optgroup label="M">
                <option>	Maithili Sharan Gupt	</option>
                <option>	Marcus Tullius Cicero	</option>
                <option>	Marcus Tullius Cicero	</option>
                <option>	Margaret Thatcher	</option>
                <option>	Mark Twain	</option>
                <option>	Mark Twain	</option>
                <option>	Mohandas K. Gandhi	</option>
                <optgroup label="N">
                <option>	Napoleon Bonaparte	</option>
                <option>	Nikola Tesla	</option>
                <option>	Nirad C. Choudhury	</option>
                <option>	Noel Coward	</option>
                <optgroup label="O">
                <option>	O. Henry	</option>
                <optgroup label="P">
                <option>	Paulo Coelho	</option>
                <option>	Plato	</option>
                <option>	President Abraham Lincoln	</option>
                <option>	President Barack Obama	</option>
                <option>	President George W. Bush	</option>
                <option>	President Theodore Roosevelt	</option>
                <option>	President William Henry Harrison	</option>
                <optgroup label="Q">
                <optgroup label="R">
                <option>	Rabindranath Tagore	</option>
                <option>	Ralph Waldo Emerson	</option>
                <option>	Robert Burns	</option>
                <option>	Robert Burns	</option>
                <option>	Robert Ervin Howard	</option>
                <option>	Robert Frost	</option>
                <option>	Robert Louis Stevenson	</option>
                <option>	Robert Louis Stevenson	</option>
                <option>	Rudyard Kipling	</option>
                <optgroup label="S">
                <option>	Samuel Taylor Coleridge	</option>
                <option>	Sarojini Naidu	</option>
                <option>	Sir Arthur Conan Doyle	</option>
                <option>	Sir John Alexander Macdonald	</option>
                <option>	Sir Richard Burton	</option>
                <option>	Sir Walter Scott	</option>
                <option>	Sylvie d'Avigdor	</option>
                <optgroup label="T">
                <option>	T. S. Eliot	</option>
                <option>	Theodore Dreiser	</option>
                <option>	Theodore Roosevelt	</option>
                <optgroup label="U">
                <optgroup label="V">
                <option>	V.S. Naipaul	</option>
                <option>	Victor Hugo	</option>
                <optgroup label="W">
                <option>	Walt Whitman	</option>
                <option>	Walt Whitman	</option>
                <option>	William Butler Yeats	</option>
                <option>	William Shakespeare	</option>
                <option>	William Topaz McGonagall	</option>
                <option>	William Wordsworth	</option>
                <option>	William Wordsworth	</option>
                <option>	Woodrow Wilson	</option>
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