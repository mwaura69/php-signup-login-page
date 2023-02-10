<?php

 include('Database.php');
  session_start();

  $email = $_POST['email'];
  $password = $_POST['password'];

  // Connect to database
  $conn = new mysqli('localhost', 'root', '', 'myproject_db');

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM student WHERE emailid = '$email' and password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['user'] = $row;
    header('Location: user_details.php');
  } else {
    echo "Login failed. Invalid email or password.";
  }
?>
