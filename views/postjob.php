<?php
  session_start();

  if(!isset($_SESSION['name']))
  {
    header("location:login.php");
  }
 ?><!DOCTYPE html>
<html>
<head>
	<title>Post Job</title>
</head>
<body>

	<fieldset>
		<legend>Careers</legend>

		<a href="entercircular.php">Enter  circular</a> <br>
		<a href="postcircular.php">Post Circular</a><br>
		
		<a href="circularpage.php">Check Career Page</a><br>
		<a href="home.php">Home</a>
	</fieldset>



</body>
</html>
