<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Staff home page</title>
</head>
<body>
	<center>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<u><a href="staff.php">See Apointed Nurse Profile</a></u><br>
		<u><a href="staff02.php">See Apointed Assistant</a></u><br>
	</center>

				<br>
				<br>
			
			<center><button><a href="profile.php">Back</a></button><br><br>
            
			

</body>
</html>