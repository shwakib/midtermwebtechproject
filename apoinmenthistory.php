<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<table>
	<head>
		<title>Apoinment History</title>
	</head>
	<body>
		<center><table border="1" width="100%">
			<tr>
				<td>Date</td>
				<td>Patient Name</td>
				
			</tr>
			<tr>
				<td>1-02-2010</td>
				<td>Maruf Ahamed</td>
				
			</tr>
			<tr>
				<td>1-02-2010</td>
				<td>Naem Ahamed</td>
				
			</tr>
			<tr>
				<td>1-02-2010</td>
				<td>Rafi Ahamed</td>
				
			</tr>
			<tr>
				<td>1-02-2010</td>
				<td>Rafsan bashar</td>
				
			</tr>
			<tr>
				<td>1-02-2010</td>
				<td>Maruf rahman</td>
				
			</tr>
			<tr>
				<td>1-02-2010</td>
				<td>Naem Hasan</td>
				
			</tr>
			<tr>
				<td>1-02-2010</td>
				<td>Wakib </td>
				
			</tr>
			<tr>
				<td>1-02-2010</td>
				<td>Rayhan </td>
				
			</tr>
			<tr>
				<td>1-02-2010</td>
				<td>Maruf Ahamed</td>
				
			</tr>
			<tr>
				<td>2-02-2010</td>
				<td>Naem Ahamed</td>
				
			</tr>
			<tr>
				<td>2-02-2010</td>
				<td>Rafi Ahamed</td>
				
			</tr>
			<tr>
				<td>2-02-2010</td>
				<td>Rafsan bashar</td>
				
			</tr>
			<tr>
				<td>2-02-2010</td>
				<td>Maruf rahman</td>
				
			</tr>
			<tr>
				<td>2-02-2010</td>
				<td>Naem Hasan</td>
				
			</tr>
			<tr>
				<td>2-02-2010</td>
				<td>Wakib </td>
				
			</tr>
			<tr>
				<td>2-02-2010</td>
				<td>Rayhan </td>
				
			</tr>
		</table><br>
		<center><button><a href="profile.php">Back</a></button><br><br>
	</body>
</table>