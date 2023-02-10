<html>
<head>
  <title>Login</title>
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

		.login-container {
		background-color: #f2f2f2;
		padding: 40px;
		border-radius: 10px;
		box-shadow: 0 0 10px #bbb;
		text-align: center;
		}

		h1 {
		margin-bottom: 30px;
		}

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
		border: 1em;
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

</head>
<body class="align">
	<div class="login-container">		
	  <h1>Login</h1>
	  <form action="check_login.php" method="post" id="login">
			<div>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" required>
			</div>

			<div>
				<label for="password">Password</label>
				<input type="password" name="password" id="password" required>
			</div>
		
			<div>
				<button type="submit" value="Login">Log in</button>
			</div>
		</form>
		  <p>Don't have an account yet?</p> 
		  <a href="signup.php">Sign Up</a>
	</div>
</body>
</html>



