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
<button><a href="doctorlist.php">See Doctor's List</a></button><br><br>
<button><a href="appoinmentlist.php">See Appoinment History</a></button><br><br>
<button><a href="medicalreport.php">See Medical Reports</a></button><br><br>
<button><a href="prescription.php">See Prescriptions</a></button><br><br><br>
<button><a href="searchdoctor.php">Search Doctor</a><br><br></button>
<u><a href="changepass.php">Change Password</a></u><br>
<u><a href="changecont.php">Change Contact</a></u><br><br>

<u><a href="../php/logout.php">Logout</a></u><br>	

		</fieldset>
		</form>
</body>
</html>