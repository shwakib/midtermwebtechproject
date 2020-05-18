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
	<title>Login Page</title>
</head>
<body>
	<form>
	<fieldset>
	<legend>LOGIN</legend>
		Current Password: <input type="passsword" name="upassword" value=""> <br>
		New Password: <input type="password" name="nupassword" value=""><br>
		Rewrite New Password: <input type="password" name="rnupassword" value=""><br>
		-----------------------------------------------------<br>
		<button><a href="login.php">Change password</a></button>
        <u><a href="patienthome.php">Home</a></u>
		</fieldset>
		</form>
</body>
</html>