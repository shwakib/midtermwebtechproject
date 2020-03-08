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
		
			<title>Patint Report</title>
		
	</head>
	<body>
		<table border ="1" cellspacing="0" width="100%">
			<tr>
				<td width="30%"><center><b>View Profile</b></td>
				<td><center><b>REPORT</b></td>
			</tr>
			<tr>
				<td>
					<a href="pprofile.php">Maruf Ahamed</a>
				</td>
				<td><a href="viewreport.php">report</a></td>
			</tr>
			
			<tr>
				<td>
					<a href="pprofile.php">Maruf Ahamed</a>
				</td>
				<td><a href="viewreport.php">report</a></td>
			</tr>
			
			<tr>
				<td>
					<a href="pprofile.php">Maruf Ahamed</a>
				</td>
				<td><a href="viewreport.php">report</a></td>
			</tr>
			
			<tr>
				<td>
					<a href="pprofile.php">Maruf Ahamed</a>
				</td>
				<td><a href="viewreport.php">report</a></td>
			</tr>
			
			<tr>
				<td>
					<a href="pprofile.php">Maruf Ahamed</a>
				</td>
				<td><a href="viewreport.php">report</a></td>
			</tr>
			
			<tr>
				<td>
					<a href="pprofile.php">Maruf Ahamed</a>
				</td>
				<td><a href="viewreport.php">report</a></td>
			</tr>
			
			<tr>
				<td>
					<a href="pprofile.php">Maruf Ahamed</a>
				</td>
				<td><a href="viewreport.php">report</a></td>
			</tr>
			
			<tr>
				<td>
				<a href="pprofile.php">Maruf Ahamed</a>
				</td>
				<td><a href="viewreport.php">report</a></td>
			</tr>
			
			
		</table>
		<br>
		<center><button><u><a href="apoinmet.php">Back</u></button>
	</body>
</html>