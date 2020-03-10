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
	<title>Patient Search</title>
</head>
<body>
		<table align="center">
			<tr>
				<td colspan="2">
					Patient Search 
				</td> 
			</tr>
			<tr>
				<td>
					<input type="text" name="ptsearch">
				</td>
				<td>
					<input type="submit" name="submit" value="Search">
				</td>
			</tr>

			<tr>
				<td colspan="2">
					Search Results:
				</td>
			</tr>

			<tr>
				<td>
					Patient ID
				</td>
				<td>
					Patient Name
				</td>
			</tr>

			<tr>
				<td>
					17-33789-1
				</td>
				<td>
					<a href="viewusers.php">Nishat Tasnim Haque</a>
				</td>
			</tr>

			<tr>
				<td colspan="2" align="center">
					<a href="home.php">Home</a>
				</td>
			</tr>
		</table>
</body>
</html>