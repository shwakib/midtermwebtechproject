<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}
			$id=$_GET['id'];
			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select * from doctorlist where id='$id'";
			$result = mysqli_query($con, $sql);
			$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">	
<title>Doctor Profile</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<form class="box">
		<u><h1>Doctor's Profile</h1></u>
<table border ="1" cellspacing="0" width="100%">


<tr>
<td width="90%">
<b><h1><?=$row['name']?></h1></b>
<p><i>police stuff college,</i><br><i>6/29Mirpur 14,Dhaka.</i><br><b>Contact No:</b>01779595471<br>
<b>Email:</b>dragarkhedkarshard@gmail.com<br>
</td>
<td><img src="dr1.jpg" width="200px" height="200px"/></td>
</tr>
<tr>
 <td colspan="2"></td>
 
</tr>

<tr>
 <td colspan="2">
 <h2><b><u>Education</b></u></h2>
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
<h2><b><u>Schedule</b></u></h2>
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
</table><br><br>
	
	<button><a href="makeappoinment.php?name=<?=$row['name']?>">Make Appoinment</a></button><br><br>
	<a href="doctorlist.php">Back</a>
	<a href="logout.php">Logout</a>
</table><br><br>



</table>
</form>
</body>

</html>

