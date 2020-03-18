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
	
	 <table border="1" width="100%">
  
  <tr>
  <td width="85%">
   <h1> <?= $_SESSION['name']?></h1>
   <p> <i> 55,Kamal Ataturk avenue,</i> <br> <i>Banani, Dhaka.</i> <br>
   	<b> Gender:</b> Male<br>
   	<b> Date of Birth:</b>28/09/1998<br>
   	<b> Blood group:</b>A(+ve)<br><br>
    <b> Contact No:</b> 017100000<br>
	<b> Email:</b> xyz@gmail.com <br>
	<b> Parent's contact:</b> 01777777322<br></p>
  </td>
  
  <td>
<img src="upload/<?=$_SESSION['name'].".jpg"?>" width="100px" height="100px"/>  
  </td>
  </tr>

  <tr>
  	<td align="left">
  		<a href="home.php">Home</a>
  		
  	</td>
  	<td align="right">
  		<a href="logout.php">Logout</a>
  	</td>
  </tr>

  </table><br>

		</fieldset>
		</form>
</body>
</html>