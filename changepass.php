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
	<title>Change Password</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form class="box">
	<fieldset>
	
		Current Password: <input type="passsword" name="upassword" value=""> <br>
		New Password: <input type="password" name="nupassword" value=""><br>
		Rewrite New Password: <input type="password" name="rnupassword" value=""><br>
		<button><a href="login.php">Change password</a></button>
        <u><a href="patienthome.php">Home</a></u>
		
		</form>
</body>
</html>