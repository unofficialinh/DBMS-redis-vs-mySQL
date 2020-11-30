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
        style="margin-top: 100px">
        <div style="text-align: center">
            Enter the name you want to search
        </div><br>
        <div class="col-sm-7 col-sm-offset-2">
            <input type="text" class="form-control" name="book" id="book" required autocomplete="off">
        </div>
        <div class="col-sm-offset-9">
            <button id="search" type="submit" name="search" class="btn btn-primary">Search</button>
        </div>
    </form>
</div>
</body>
</html>

<?php

    if (isset($_POST['search'])){
        $book = $_POST['book'];
        $result = json_decode(file_get_contents("http://thinhtd.ddns.net:8080/book?name={$book}"), true);

        echo '<br><div class="container">';
        echo '<div style="text-align: center">
                <i>'.$result["query_rows"].' result(s) in '.$result["execute_time"].' for </i><b>'.$book.'</b>
                </div>';

        if ($result["books"] != null){
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

            foreach ($result["books"] as $row){
                echo '
                    <tr>
                      <th scope="row">'.$row['name'].'</th>
                      <td>'.$row['author'].'</td>
                      <td>'.$row['publisher'].'</td>
                      <td>'.$row['category'].'</td>
                    </tr>';
            }
            echo '</tbody></table>';
        }
    }