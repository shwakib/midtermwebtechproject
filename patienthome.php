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
	<title>Patient Profile</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
	<form class="box">
	<fieldset>
	<u><h1>Patient Profile</h1></u>
	 <table border="1" width="100%">
  
  <tr>
  <td width="85%">
   <h1> Maruf Ahmed</h1>
   <p> <i> 55,Kamal Ataturk avenue,</i> <br> <i>Banani, Dhaka.</i> <br>
   	<b> Gender:</b> Male<br>
   	<b> Date of Birth:</b>28/09/1998<br>
   	<b> Blood group:</b>A(+ve)<br><br>
    <b> Contact No:</b> 017100000<br>
	<b> Email:</b> badhonacps@gmail.com <br>
	<b> Parent's contact:</b> 01777777322<br></p>
  </td>
  
  <td>
<img src="dr1.jpg" width="100px" height="100px"/>  
  </td>
  </tr>

  </table><br>
<button><a href="doctorlist.php">See Doctor's List</a></button><br><br>
<button><a href="appoinmenthistory.php">See Appoinment History</a></button><br><br>
<button><a href="medicalreport.php">See Medical Reports</a></button><br><br>
<button><a href="prescription.php">See Prescriptions</a></button><br><br><br>
<button><a href="searchdoctor.php">Search Doctor</a><br><br></button>
<u><a href="changepass.php">Change Password</a></u><br>
<u><a href="changecont.php">Change Contact</a></u><br><br>

<u><a href="logout.php">Logout</a></u><br>	

		</fieldset>
		</form>
</body>
</html>