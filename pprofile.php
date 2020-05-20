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
	<title>Patient Profile</title>
</head>
<body>
	<form>
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
  <button><a href="apointmenthistory02.php">see Patients Apoinment History</a></button><br><br>
<button><a href="viewreport.php">see prescription</a></button><br><br>

		</fieldset>
		</form>
</body>
</html>