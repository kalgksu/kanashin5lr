<?php
$servername = "localhost";
$database = "language";
$username = "root";
$password = "root";
$connection = mysqli_connect($servername, $username, $password, $database);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>