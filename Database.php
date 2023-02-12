<?php
// Define database connection constants
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = #yourDataBaseGoesHere ;


if(!$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname))
 {
die("Failed to connect!");
 }
?>
