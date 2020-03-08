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
<title>Duty Schedule</title>
</head>
<body>
   <table border=1 align="center">
   <tr>
     <td colspan="5" align="center"><u><b>Duty Schedule</b></u></td>
	 </tr>
	 
	 <tr>
     <td><b>Day</b></td>
	 <td><b>12 am- 6am</b></td>
	 <td><b>6 am- 12pm</b></td>
	 <td><b>12pm- 6pm</b></td>
	 <td><b>6 pm- 12am</b></td>	 
	 </tr>
	 
	 <tr>
     <td><b>Saturday</b></td>
	 <td><b>Doctor1, Doctor2, Nurse1, Nurse2, Nurse3, Receptionist1</b></td>
	 <td><b>Doctor3, Doctor4, Nurse4, Nurse5, Nurse6, Receptionist2, Receptionist3 </b></td>
	 <td><b>Doctor5, Doctor5, Nurse7, Nurse8, Nurse9, Receptionist4, Receptionist5 </b></td>
	 <td><b>Doctor6, Doctor7, Nurse10, Nurse11, Nurse12, Receptionist6, Receptionist7 </b></td>
	 </tr>
	 
	 <tr>
     <td><b>Sunday</b></td>
	 <td><b>Doctor1, Doctor2, Nurse1, Nurse2, Nurse3, Receptionist1</b></td>
	 <td><b>Doctor3, Doctor4, Nurse4, Nurse5, Nurse6, Receptionist2, Receptionist3 </b></td>
	 <td><b>Doctor5, Doctor5, Nurse7, Nurse8, Nurse9, Receptionist4, Receptionist5 </b></td>
	 <td><b>Doctor6, Doctor7, Nurse10, Nurse11, Nurse12, Receptionist6, Receptionist7 </b></td>
	 </tr>

	 <tr>
     <td><b>Monday</b></td>
	 <td><b>Doctor1, Doctor2, Nurse1, Nurse2, Nurse3, Receptionist1</b></td>
	 <td><b>Doctor3, Doctor4, Nurse4, Nurse5, Nurse6, Receptionist2, Receptionist3 </b></td>
	 <td><b>Doctor5, Doctor5, Nurse7, Nurse8, Nurse9, Receptionist4, Receptionist5 </b></td>
	 <td><b>Doctor6, Doctor7, Nurse10, Nurse11, Nurse12, Receptionist6, Receptionist7 </b></td>
	 </tr>
	 
	 <tr>
     <td><b>Tuesday</b></td>
	 <td><b>Doctor1, Doctor2, Nurse1, Nurse2, Nurse3, Receptionist1</b></td>
	 <td><b>Doctor3, Doctor4, Nurse4, Nurse5, Nurse6, Receptionist2, Receptionist3 </b></td>
	 <td><b>Doctor5, Doctor5, Nurse7, Nurse8, Nurse9, Receptionist4, Receptionist5 </b></td>
	 <td><b>Doctor6, Doctor7, Nurse10, Nurse11, Nurse12, Receptionist6, Receptionist7 </b></td>
	 </tr>

	 <tr>
     <td><b>Wednesday</b></td>
	 <td><b>Doctor1, Doctor2, Nurse1, Nurse2, Nurse3, Receptionist1</b></td>
	 <td><b>Doctor3, Doctor4, Nurse4, Nurse5, Nurse6, Receptionist2, Receptionist3 </b></td>
	 <td><b>Doctor5, Doctor5, Nurse7, Nurse8, Nurse9, Receptionist4, Receptionist5 </b></td>
	 <td><b>Doctor6, Doctor7, Nurse10, Nurse11, Nurse12, Receptionist6, Receptionist7 </b></td>
	 </tr>

	 <tr>
     <td><b>Thursday</b></td>
	 <td><b>Doctor1, Doctor2, Nurse1, Nurse2, Nurse3, Receptionist1</b></td>
	 <td><b>Doctor3, Doctor4, Nurse4, Nurse5, Nurse6, Receptionist2, Receptionist3 </b></td>
	 <td><b>Doctor5, Doctor5, Nurse7, Nurse8, Nurse9, Receptionist4, Receptionist5 </b></td>
	 <td><b>Doctor6, Doctor7, Nurse10, Nurse11, Nurse12, Receptionist6, Receptionist7 </b></td>
	 </tr>

	 <tr>
     <td><b>Friday</b></td>
	 <td><b>Doctor1, Doctor2, Nurse1, Nurse2, Nurse3, Receptionist1</b></td>
	 <td><b>Doctor3, Doctor4, Nurse4, Nurse5, Nurse6, Receptionist2, Receptionist3 </b></td>
	 <td><b>Doctor5, Doctor5, Nurse7, Nurse8, Nurse9, Receptionist4, Receptionist5 </b></td>
	 <td><b>Doctor6, Doctor7, Nurse10, Nurse11, Nurse12, Receptionist6, Receptionist7 </b></td>
	 </tr>
	 </table><br>

	 <u><a href="home.php">Go Home</a></u>
     <button><u><a href="logout.php">Logout</a></u></button>

	 </body>
	 </html>