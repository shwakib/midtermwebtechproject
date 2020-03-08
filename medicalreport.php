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
<title>Medical Report</title>
</head>
<body>
<table border ="1" cellspacing="0" width="100%">


<tr>
<td width="90%">
<b><h1>Patient Name</h1></b>
<p><i>police stuff college,</i><br><i>6/29Mirpur 14,Dhaka.</i><br><b>Contact No:</b>01779595471<br>
<b>Email:</b>dragarkhedkarshard@gmail.com<br>
</td>
<td><img src="dr1.jpg" width="200px" height="200px"/></td>
</tr>
<table border=1 align="center">
   <tr>
     <td colspan="3" align="center"><u><b>Medical Incident Report</b></u></td>
   </tr>
   
   <tr>
     <td><b>Nature of Injury</b></td>
   <td>Broken leg with bleeding</td>
   
   </tr>
   
   <tr>
     <td><b>Conscious</b></td>
   <td>Yes</td>
   
   </tr>
   
   <tr>
     <td><b>Cause of injury</b></td>
   <td>Accident</td>
   </tr>
   
   <tr>
     <td><b>Temperture</b></td>
   <td>98 degree</td>
   </tr>
   <tr>
   
   <tr>
     <td><b>Action Taken</td>
   <td>Surgery</td>
   </tr>

</table><br><br>
<u><a href="patienthome.php">Go Home</a></u>
<button><u><a href="logout.php">Logout</a></u></button>
</body>

</html>

