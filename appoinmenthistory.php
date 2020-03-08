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
<title>Doctor's list</title>
</head>
<body>
   <table border=1 align="center">
   <tr>
     <td colspan="3" align="center"><u><b>Upcoming Appoinments</b></u></td>
	 </tr>
	 
	 <tr>
     <td><b>Date</b></td>
	 <td><b>Time</b></td>
	 <td><b>Doctor's Name</b></td>
	 
	 </tr>
	 
	 <tr>
     <td>10/03/2020</td>
	 <td>7 pm</td>
	 <td><a href="doctor1.php">Dr. AGARKHEDKAR SHARAD</a></td>
	 </tr>
	 
	 <tr>
     <td>13/03/2020</td>
	 <td>8 pm</td>
	 <td>Doctor 2</td>
	 </tr>

	 <tr>
     <td><u><a href="patienthome.php">Back</a></u></td>
	 <td></td>
	 <td><u><a href="logout.php">Logout</a></u></td>
	 </tr>
	 
	 </table>
	 </body>
	 </html>