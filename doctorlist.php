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
     <td colspan="3" align="center"><u><b>Doctor's List</b></u>(click on names to view profile)</td>
	 </tr>
	 
	 <tr>
     <td><b>Name</b></td>
	 <td><b>Specification</b></td>
	 
	 </tr>
	 
	 <tr>
     <td><a href="doctor1.php">Dr. AGARKHEDKAR SHARAD</a></td>
	 <td>Plastic Sergon</td>
	 
	 </tr>
	 
	 <tr>
     <td><a href="doctor1.php">Doctor 2</a></td>
	 <td>Medicine</td>
	 </tr>
	 
	 <tr>
     <td><a href="doctor1.php">Doctor 3</a></td>
	 <td>Arthopadic</td>
	 </tr>
	 <tr>
	 
	 <tr>
     <td><a href="doctor1.php">Doctor 4</a></td>
	 <td>Cardiology</td>
	 </tr>
	 
	 <td colspan="2" align="center"><u><a href="patienthome.php">Go Home</a></u></td>
	 </tr>
	 
	 </table>
	 </body>
	 </html>