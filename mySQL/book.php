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
        style="margin-top: 100px">
        <div style="text-align: center">
            Enter the name you want to search
        </div><br>
        <div class="col-sm-7 col-sm-offset-2">
            <input type="text" class="form-control" name="book" id="book" required autocomplete="off">
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
        require_once('dbconfig.php');
        $book = $_POST['book'];
        $time = microtime(true);
        $query = mysqli_query($conn, "SELECT * FROM book WHERE name LIKE '%".$book."%'");
        $time = microtime(true)-$time;

        echo '<br><div class="container">';
        echo '<div style="text-align: center"><b><i>'.mysqli_num_rows($query).' result(s) in '.$time.' microsecond.</i></b></div>';

        if (mysqli_num_rows($query) > 0){
            echo '<br><br><table class="table table-bordered">
                  <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Author</th>
                          <th scope="col">Publisher</th>
                          <th scope="col">Category</th>
                        </tr>
                  </thead>
                  <tbody>';

            while ($row = mysqli_fetch_assoc($query)){
                echo '
                    <tr>
                      <th scope="row">'.$row['name'].'</th>
                      <td>'.$row['author_id'].'</td>
                      <td>'.$row['publisher_id'].'</td>
                      <td>'.$row['category_id'].'</td>
                    </tr>';
            }
            echo '</tbody></table>';
        }
    }