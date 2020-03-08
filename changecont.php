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
		Current Contact: <input type="passsword" name="upassword" value=""> <br>
		New Contact: <input type="password" name="nupassword" value=""><br>
		-----------------------------------------------------<br>
		<input type="button" name="Change" value="Change">
		<u><a href="patienthome.php">Home</a></u>
		</fieldset>
		</form>
</body>
</html>