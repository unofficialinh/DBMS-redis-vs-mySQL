<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>redis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../myStyle.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand"><img src="../image/redis.png"
                                         style="height: 40px; width: 40px; margin-top: -10px"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
            <ul class="nav navbar-nav">
                <li class="active"><a href="book.php">Book</a></li>
                <li><a href="author.php">Author</a></li>
                <li><a href="publisher.php">Publisher</a></li>
                <li><a href="category.php">Category</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <form class="form-horizontal" action="book.php" method="POST" enctype="multipart/form-data"
        style="margin-top: 200px">
        <div style="text-align: center">
            Enter the name you want to search
        </div><br>
        <div class="col-sm-7 col-sm-offset-2">
            <input type="text" class="form-control" name="book" id="book" required>
        </div>
        <div class="col-sm-offset-9">
            <button type="submit" name="search" class="btn btn-primary">Search</button>
        </div>
    </form>
</div>
</body>
</html>