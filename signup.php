<?php
session_start();
   include('Database.php');

?>
    <!DOCTYPE html>
<html>
<head>
<script src="validation.js" defer></script>
<style>
  body {
    font-family: Arial, sans-serif;
  }
  
  .align {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }
  
  .signup-container {
    background-color: #f2f2f2;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 10px #bbb;
    text-align: center;
  }
  
  h4 {
    margin-bottom: 30px;
  }
  
  input[type="text"],
  input[type="email"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
  }
  
  button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  p {
    margin-top: 20px;
    font-size: 14px;
  }
  
  a {
    color: #333;
    text-decoration: none;
  }
</style>

<body class="align">
  <div class="signup-container">
		<h1>SIGN UP</h1>
		<form action="signup.fun.php" method="post" id="signup">
		  <div>
			<input type="text" name="uid" placeholder="Username" id="username">
		  </div><br>
		  <div>
			<input type="email" name="email" placeholder="Email" id="email">
		  </div><br>
		  <div>
			<input type="password" name="pwd" placeholder="Password" id="password">
		  </div><br>
		  <div>
			<input type="password" name="pwdrepeat" placeholder="Repeat Password" id="repeatpassword">
		  </div><br>
		  <div>
			<button type="submit" name="submit">SIGN UP</button>
		  </div>
		</form>
		<p>Already have an accout? <a href="index.php">Log in</a></p>
  </div>
</body>
