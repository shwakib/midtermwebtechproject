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
	<title>Complaint</title>
</head>
<body>

		 <table border=1 align="center">
		 	<tr>
		 		<td>
		 			Date
		 		</td>
		 		<td>
		 			Complaint
		 		</td>
		 		<td>
		 			User
		 		</td>
		 		<td>
		 			Action Taken
		 		</td>
		 	</tr>

		 	<tr>
		 		<td>
		 			02-01-2020
		 		</td>
		 		<td>
		 			<a href="">Nurse was not available</a>
		 		</td>
		 		<td>
		 			User 1
		 		</td>
		 		<td>
		 			<select name="actiontaken">
		 				
		 				<option value="yes">Yes</option>
		 				<option value="no">No</option>
		 			</select>
		 		</td>
		 	</tr>

		 	<tr>
		 		<td>
		 			20-01-2020
		 		</td>
		 		<td>
		 			<a href="">Doctor did not came ..</a>
		 		</td>
		 		<td>
		 			User 1
		 		</td>
		 		<td>
		 			<select name="actiontaken">
		 				
		 				<option value="yes">Yes</option>
		 				<option value="no">No</option>
		 			</select>
		 		</td>
		 	</tr>

		 	<tr>
		 		<td>
		 			20-02-2020
		 		</td>
		 		<td>
		 			<a href="">Ward boy was not..</a>
		 		</td>
		 		<td>
		 			User 2
		 		</td>
		 		<td>
		 			<select name="actiontaken">
		 				
		 				<option value="yes">Yes</option>
		 				<option value="no">No</option>
		 			</select>
		 		</td>
		 	</tr>

		 	<tr>
		 		<td>
		 			28-02-2020
		 		</td>
		 		<td>
		 			<a href="">Nurse behaviour was not..</a>
		 		</td>
		 		<td>
		 			User 3
		 		</td>
		 		<td>
		 			<select name="actiontaken">
		 				
		 				<option value="yes">Yes</option>
		 				<option value="no">No</option>
		 			</select>
		 		</td>


		 	</tr>
		 	<tr>
		 		<td colspan="2" align="left">
		 			<a href="home.php">Home</a>
		 		</td>
		 		<td colspan="2" align="right">
		 			<a href="submitaction.php">Submit Action</a>
		 		</td>
		 	</tr>


		 </table>
</body>
</html>