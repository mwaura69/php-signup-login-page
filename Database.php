<?php
// Define database connection constants
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "myproject_db";


if(!$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname))
 {
die("Failed to connect!");
 }
?>
