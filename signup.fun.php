
<?php

// Include the config and functions files
include ('Database.php');



if (empty($_POST["uid"])) {
	die("Name is required");
}
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	die("valid email is required");
}
if(strlen($_POST["pwd"]) < 8) {
	die("password length must be 8 charaters long");
}
if(!preg_match("/[a-z]/i", $_POST["pwd"])) {
	die("password must contain at least one letter");
}//password check for containing atleast a letter

if(!preg_match("/[0-9]/i", $_POST["pwd"])) {
die("password must contain at least one number");}
	//password check for containing atleast a number

if($_POST["pwd"] !== $_POST["pwdrepeat"]) {
	die("Passwords dont match");
}




if($_SERVER['REQUEST_METHOD'] == "POST") {
	$password_hash = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
	$uid = $_POST['uid'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	
	$query = "insert into student (emailid, sname, password) values ('$email','$uid', '$pwd')";
	mysqli_query($conn, $query);




	echo "SignUp successful";
	header("Location: index.php");
	exit();

}	
	