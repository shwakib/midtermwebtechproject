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
				<td>Maruf Ahamed</td>
				
			</tr>
			<tr>
				<td>6-03-2010</td>
				<td>Maruf Ahamed</td>
				
			</tr>
			<tr>
				<td>10-04-2010</td>
				<td>Maruf Ahamed</td>
				
			</tr>>
			<tr>
				<td>12-06-2010</td>
				<td>Maruf Ahamed</td>
				
			</tr>
			<tr>
				<td>13-08-2010</td>
				<td>Maruf Ahamed</td>
				
			</tr>
			<tr>
				<td>14-10-2010</td>
				<td>Maruf Ahamed</td>
				
			</tr>
			<tr>
				<td>1-12-2010</td>
				<td>Maruf Ahamed</td>
				
			</tr>
			<tr>
				<td>1-02-2016</td>
				<td>Maruf Ahamed</td>
				
			</tr>
				<tr>
				<td>1-03-2017</td>
				<td>Maruf Ahamed</td>
				
			</tr>
			<tr>
				<td>2-02-2018</td>
				<td>Maruf Ahamed</td>
				
			</tr>>
			<tr>
				<td>10-02-2020</td>
				<td>Maruf Ahamed</td>
				
			</tr>
			
		</table><br>
		<center><button><a href="profile.php">Back</a></button><br><br>
	</body>
</table>