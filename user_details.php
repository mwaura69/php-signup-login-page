<?php
include('Database.php');
  session_start();

  if (!isset($_SESSION['user'])) {
    header('Location: index.php');
  }

  $user = $_SESSION['user'];
?>

<html>

<head>
  <title>Your Profile</title>
  <style>
	.card {
	box-shadow: 0 4px 8px 0 rgb(0, 0, 0, 0.2);
	max-width: 300px;
	margin: auto;
	text-align: center;
	background-color: ;
	}
	
	.title {
		color: black;
		font-size: 18px;
	}
	
	button {
		border: none;
		outline: 0;
		display: inline-block;
		padding: 8px;
		color: white;
		background-color: #000;
		text-align: left;
		cursor: pointer;
		width: 100%;
		font-size: 18px;
	}
	
	button:hover {
		opacity: 0.7s;
	}
  
  </style>

</head>
<body>
		
	<div class="card">	
		<img src="./images/image-place-holder.png" style="width:100%">
		<div><h1>Profile</h1></div>
			<h2><?php echo $user['sname']; ?></h2>
			<div>
			  <p class="title">Email address: <?php echo $user['emailid']; ?></p>
			  <p>Grade: <?php echo $user['grade']; ?></p>
			  <p>Paid: Ksh<?php echo $user['balance']; ?></p>
			  <p>Your pending fees is: Ksh<?php echo $user['fees']; ?></p>
			</div>
			<div><a href="logout.php">Logout</div>
	</div>
	

</body>
</html>
