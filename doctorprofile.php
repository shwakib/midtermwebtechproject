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
<title>Doctor Profile</title>
</head>
<body>
<table border ="1" cellspacing="0" width="100%">


<tr>
<td width="90%">
<b><h1>Dr. AGARKHEDKAR SHARAD RAMKRISHNA</h1></b>
<p><i>police stuff college,</i><br><i>6/29Mirpur 14,Dhaka.</i><br><b>Contact No:</b>01777777777<br>
<b>Email:</b>dragarkhedkarshard@gmail.com<br>
</td>
<td><img src="dr1.jpg" width="200px" height="200px"/></td>
</tr>
<tr>
 <td colspan="2"></td>
 
</tr>
<tr>
 <td colspan="2">
 <h1><b>BIO<u></b></u></h1>
 <p>Brigham-trained internal medicine specialist, Weill Cornell medicine attending, co-founder of Nomad</p>
 </td>
</tr>


<tr>
 <td colspan="2">
 <h1><b><u>Education</b></u></h1>
 <li><b>MBBS</b></li>
 <p><i><b>Dhaka Medical College and Hospital(DMC)</b><br><b>Year:</b>2001<br>
 
 <li><b>FCPS</b></li>
 <p><i>Armed Forces Medical College and Hospital<br><b>Year:</b>2005<br>
 	<li><b>MS (General Surgery) M Ch (Plastic Surgery) Fellowship in Microsurgery and Cosmetic Surgery</b></li>
 <p><i>Australia<br>
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
			<button><u><a href="viewusers.php">Update</a></u></button>
				
				<button><u><a href="viewusers.php">Back</a></u></button>
				<button><u><a href="">Log Out</a></u></button>
			</td>
	</tr>
	
</table>



</table>
</body>

</html>