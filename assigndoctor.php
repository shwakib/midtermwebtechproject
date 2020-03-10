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
     <td colspan="3" align="center"><u><b>Patient's List</b></u>(click on names to view profile)</td>
	 </tr>
	 
	 <tr>
     <td><b>Name</b></td>
	 <td><b>Problem</b></td>
	 <td></td>
	 
	 </tr>
	 
	 <tr>
     <td>Maruf</td>
	 <td>Broken Knee</td>
	 <td>
	 	<select name="assign type">
	 		<option value="Dr. M. Ali">DR. M. Ali</option>
	 		<option value="Dr. M. A. Borno">DR. M. A. Borno</option>
	 		<option value="Dr. Lotif M>">DR. Lotif M.</option>
	 	</select>
	 </td>
	 
	 </tr>
	 
	 <tr>
     <td>Patient 2</td>
	 <td>Medicine</td>
	 <td><select name="assign type">
	 		<option value="Dr. M. Ali">DR. M. Ali</option>
	 		<option value="Dr. M. A. Borno">DR. M. A. Borno</option>
	 		<option value="Dr. Lotif M>">DR. Lotif M.</option>
	 	</select></td>
	 </tr>
	 
	 <tr>
     <td>Patient 3</td>
	 <td>Arthopadic</td>
	 <td><select name="assign type">
	 		<option value="Dr. M. Ali">DR. M. Ali</option>
	 		<option value="Dr. M. A. Borno">DR. M. A. Borno</option>
	 		<option value="Dr. Lotif M>">DR. Lotif M.</option>
	 	</select></td>
	 </tr>
	 <tr>
	 
	 <tr>
     <td>Patient 4</td>
	 <td>Cardiology</td>
	 <td><select name="assign type">
	 		<option value="Dr. M. Ali">DR. M. Ali</option>
	 		<option value="Dr. M. A. Borno">DR. M. A. Borno</option>
	 		<option value="Dr. Lotif M>">DR. Lotif M.</option>
	 	</select></td>
	 </tr>
	 
	 <td colspan="2" align="left"><u><a href="home.php">Go Home</a></u>
	 	<td colspan="1" align="right"><u><a href="home.php">Assign</a></u></td>
	 </td>
	 </tr>
	 
	 </table>
	 </body>
	 </html>