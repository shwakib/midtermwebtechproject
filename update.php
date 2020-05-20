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
	<title>UPDATE SChedule</title>
</head>
	<body>
		<table border ="1" cellspacing="0" width="100%">
	<tr>
		<td colspan="8"><center>DAY</td> 
	</tr>
	<tr>
		<td rowspan="2">TIME</td>
		<td><Center>Saturday</td>
		<td><Center>Sunday</td>
		<td><Center>Monday</td>
		<td><Center>Tuesday</td>
		<td><Center>Wednesday</td>
		<td><Center>Thursday</td>
		<td><Center>Friday</td>
	</tr>
	<tr>
		<td><center><input type="text" name="" value=""></td>
		<td><center><input type="text" name="" value=""></td>
		<td><center><input type="text" name="" value=""></td>
		<td><center><input type="text" name="" value=""></td>
		<td><center><input type="text" name="" value=""></td>
		<td><center><input type="text" name="" value=""></td>
		<td><center><input type="text" name="" value=""></td>
	</tr>
</table><br>
<center><button><u><a href="dprofile.php">Submit</a></u></button>
<button><u><a href="dprofile.php">Back</a></u></button>
	</body>
</html>