<?php
$conn = mysqli_connect('localhost:3306', 'dbms', '123456', "library");
if (!$conn) {
    die("Cannot connect: " . mysqli_error($conn));
    exit();
}
