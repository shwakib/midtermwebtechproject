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
	<meta charset="utf-8">
	<title>Patient Search</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form class="box">
		<table align="center">
			<tr>
				<td colspan="2">
					Doctor Search 
				</td> 
			</tr>
			<tr>
				<td>
					<input type="text" name="ptsearch">
				</td>
				<td>
					<button><a href="doctor1.php">Search</a></button>
				</td>
			</tr>

			<tr>
				<td colspan="2" align="center">
					<a href="patienthome.php">Home</a>
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>