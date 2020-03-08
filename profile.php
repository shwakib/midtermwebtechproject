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
	<title>User's home page</title>
	</head>
	<body>
		<fieldset>
			<center>
				<h1>Welcome Doctor!</h1>
				<u><a href="dprofile.php">Profile</a></u><br>
				<u><a href="changepassword.php">Change Password</a></u><br>
				<u><a href="apoinmet.php">Todays Appoinments</a></u><br>
				<u><a href="apoinmenthistory.php">See Apoinments History</a></u><br>
				<u><a href="stuffhome.php">My Staff</a></u><br>
				<u><a href="Login.php">Log out</a></u><br>
		</fieldset>
	</body>
</html>