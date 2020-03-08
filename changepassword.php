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
		<title>Change Password</title>

	</head>
	<body>
		<form><center>
			<fieldset>
				<legend>CHANGE PAsSWORD</legend>
				Current Password<br>
				<input type="password" name="upassword"><br>
				New Password<br>
				<input type="password" name="cupassowrd"><br>
				Re-type New Password<br>
				<input type="password" name="cupassowrd"><br>
			</fieldset>
		</form>
		<br>
		
		<button><u><a href="profile.php">update</u></button>
			<button><u><a href="profile.php">Back</u></button>
	</body>
</html>