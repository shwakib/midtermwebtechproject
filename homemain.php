<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Main Home Page</title>
</head>
<body>

	<a href="login.php">Login</a> <br>
	<a href="register.php">Register</a>

</body>
</html>