<?php
$conn = mysqli_connect('localhost:3306', 'root', '', "library");
if (!$conn) {
    die("Cannot connect: " . mysqli_error($conn));
    exit();
}
