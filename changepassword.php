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
				<legend>CHANGE PASSWORD</legend>
				Current Password<br>
				<input type="password" name="upassword" minlength="8"><br>
				New Password<br>
				<input type="password" name="cupassowrd" minlength="8"><br>
				Re-type New Password<br>
				<input type="password" name="cupassowrd" minlength="8" pattern="[a-z][0-9][/*][A-Z]"><br>
			</fieldset>
		</form>
		<br>
		
		<button><a href="adminprofile.php">Update</a></button>
			<button><u><a href="home.php">Back</u></button>
	</body>
</html>
