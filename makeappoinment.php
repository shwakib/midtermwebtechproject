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
	<title>Make appoinment</title>
</head>
<body>
	<form>
	<fieldset>
	<legend>Select Date and Time</legend>
		Date: <br><input type="Date" name="uname" value=""> <br><br>
		Time:<br>
		 <input type="radio" name="radio" value="">7-9:30 pm<br>
		      <input type="radio" name="radio" value="">7-10:00 pm<br>
		      
				
<button><a href="doctor1.php">Submit</a></button>
				<u><a href="doctor1.php">Back</a></u>
				<u><a href="logout.php">Logout</a></u>
		</fieldset>
		</form>
</body> 
</html>