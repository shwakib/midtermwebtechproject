<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<form class="box" method="POST" action="logcheck.php">
		
   
   
		<fieldset>
			<legend>
				LOGIN
			</legend>
				<center>
							User ID: <br>
							<input type="text" name="uid" value=""> <br>
							Password: <br>
							<input type="password" name="upassword"> <br> <br>
							<input type="submit" name="submit" value="Login">
							<u><a href="registration.php">Register</a></u>
				</center>
		</fieldset>
	</form>

</body>
</html>