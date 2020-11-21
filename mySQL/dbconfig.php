<?php
$conn = mysqli_connect('localhost:3307', 'root', '', "library");
if (!$conn) {
    die("Cannot connect: " . mysqli_error($conn));
    exit();
}
