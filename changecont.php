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
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form class="box">
	<fieldset>
	<legend>LOGIN</legend>
		Current Contact: <input type="text" name="" value=""> <br>
		New Contact: <input type="text" name="" value=""><br>
		<button><a href="patienthome.php">Change Contact</a></button>
        <u><a href="patienthome.php">Home</a></u>
		</fieldset>
		</form>
</body>
</html>