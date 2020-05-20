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
<title>Staff Profile</title>
</head>
<body>

<table border ="1" cellspacing="0" width="100%">

<tr>
<td width="90%">
<b><h1>Farzana Yasmin</h1></b>
<p><i>Japan Garden City,</i><br><i>6/29Mohammadpur,Dhaka.</i><br><b>Contact No:</b>01779595471<br>
<b>Email:</b>farzana@gmail.com<br>
</td>
<td><img src="nurse.jpg" width="200px" height="200px"/></td>
</tr>

<tr>
 <td colspan="2"></td> 
</tr>

<tr>
 <td colspan="2">
 <h1><b>Working Experience<u></b></u></h1>
 <p>Nurse Practinioner, Labaid Specialized Hospital.<br>Registred Nurse, Popular Diagnostic Centre Ltd.</p>
 </td>
</tr>


<tr>
 <td colspan="2">
 <h1><b><u>Education</b></u></h1>
 <li><b> Bachelor of Science in Nursing (BSN)</b></li>
 <p><i>Dhaka Nursing College, Dhaka</i><br><b>Year:</b>2001<br> 
 <li><b>Associate Degree in Nursing (ADN)</b></li>
 <p><i>College of Nursing, Fauzderhat, Chittagong<br></i>Year:</b>2005<br>
 </td>
</tr>

<tr>
<td colspan="2">
<h1><b><u>Schedule</b></u></h1>
<table border ="1" cellspacing="0" width="100%">
	<tr>
		<td colspan="8"><center>DAY</td> 
	</tr>
	
	<tr>
		<td rowspan="2">TIME</td>
		<td><Center>Saturday</td>
		<td><Center>Sunday</td>
		<td><Center>Monday</td>
		<td><Center>Tuesday</td>
		<td><Center>Wednesday</td>
		<td><Center>Thursday</td>
		<td><Center>Friday</td>
	</tr>
	<tr>
		<td></td>
		<td><Center>7:00pm-9:30pm</td>
		<td><Center></td>
		<td><Center>7:00pm-9:30pm</td>
		<td><Center></td>
		<td><Center>7:00pm-9:30pm</td>
		<td><Center><br>7:00-10:00pm</td>
	</tr>
</table>
	<tr>
		<td colspan="2">
			
			<br>

				<center><u><a href="pprofile.php">Assigned Patients</a></u> 
				<br>
				<br>
			
			<center><button><a href="stuffhome.php">Back</a></button><br><br>
            
			
			

		</td>
	</tr>
	
</table>

</table>
</body>

</html>