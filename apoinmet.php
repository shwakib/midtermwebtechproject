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
		<title>Apoinments</title>

	</head>
	<body>
		<table border ="1" cellspacing="0" width="100%">
			<tr>
				<td>
					<center><b>SERIAL<b>
				</td>
				<td><center><b>NAME</b></td>
				<td><center><b>Phone Number<b></td>
					<td><center><b>View Report</b></center></td>

			</tr>
			<tr>
				<td>01</td>
				<td>Maruf Ahamed</td>
				<td>01779947147</td>
				<td><center><u><a href="preport.php">View Report</u></td>
			</tr>
			<tr>
				<td>02</td>
				<td>Adnan</td>
				<td>01779893414</td>
				<td><center><u><a href="preport.php">View Report</u></td>
			</tr>
			<tr>
				<td>03</td>
				<td>Rafi Nur</td>
				<td>01949471321</td>
				<td><center><u><a href="preport.php">View Report</u></td>
			</tr>
			<tr>
				<td>04</td>
				<td>Rafsan</td>
				<td>01644713441</td>
				<td><center><u><a href="preport.php">View Report</u></td>
			</tr>
			<tr>
				<td>05</td>
				<td>Maruf Ahamed</td>
				<td>01779947147</td>
				<td><center><u><a href="preport.php">View Report</u></td>
			</tr>
			<tr>
				<td>06</td>
				<td>Adnan</td>
				<td>01779893414</td>
			<td><center><u><a href="preport.php">View Report</u></td>
			</tr>
			<tr>
				<td>07</td>
				<td>Rafi Nur</td>
				<td>01949471321</td>
				<td><center><u><a href="preport.php">View Report</u></td>
			</tr>
			<tr>
				<td>08</td>
				<td>Rafsan</td>
				<td>01644713441</td>
			</tr>
		</table>
		<br>

		<center><button><u><a href="dprofile.php">Schedule</u></button>
			<button><u><a href="profile.php">Back</u></button>
	</body>
</html>