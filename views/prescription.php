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
  <meta charset="utf-8">
<title>Prescription</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <form class="box">
<table  border ="1" cellspacing="0" width="100%">


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
     <td colspan="3" align="center"><u><b>Prescription</b></u></td>
   </tr>
   
   <tr>
     <td><b>Medicine</b></td>
   <td><b>Dose</b></td>
   
   </tr>
   
   <tr>
     <td>Tylenol</td>
   <td>1+0+1</td>
   
   </tr>
   
   <tr>
     <td>Advil</td>
   <td>1+1+1</td>
   </tr>
   
   <tr>
     <td>Motrin IB</td>
   <td>0+0+1</td>
   </tr>
   <tr>
   
   <tr>
     <td>Next Visit</td>
   <td>15/03/2020</td>
   </tr>

</table><br><br>
<button><u><a href="patienthome.php">Go Home</a></u></button>
<button><u><a href="../php/logout.php">Logout</a></u></button>
</form>
</body>

</html>

