<?php
	session_start();

	//echo $_SESSION['type'];

	if(!($_SESSION['type']=='admin'))
	{
		header("location:login.php");
		session_destroy();
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

Welcome <?= $_SESSION['name']?>

	
	
	<table border="1" align="center" width="100">
		<tr>
			<td colspan="3" align="center">
				Welcome <?= $_SESSION['name'] ?> 
			</td>
		</tr>
		<tr>
			<td>
				<a href="updateadmin.php">Update Profile</a>
			</td>
			<td colspan="2" align="right">
				<a href="adminprofile.php"><?= $_SESSION['name'] ?></a> <br>
			</td>
			

			
			
		</tr>

		<tr>
			<td>
				<a href="docpatregister.php">Register</a>
			</td>
			<td>
				<a href="viewusers.php">View Users</a>
			</td>
			<td align="right">
				<a href="assigndoctor.php">Assign Doctor</a>
			</td>
			
		</tr>

		<tr>
			<td >
				<a href="appointmenthistory.php">Appointment History</a>
			</td>
			<td >
				<a href="assignnurse.php">Assign Nurse</a>
			</td>
			<td>
				<a href="complainthistory.php">Complaint History</a>
			</td>
		</tr>

		

		<tr>
			<td >
				<a href="dutyschedule.php">Create Duty Schedule</a>
			</td>
			<td >
				<a href="searchpatient.php">Search Patient</a>
			</td>
			<td >
				<a href="changepassword.php">Change Password</a>
			</td>
		</tr>

		

		<tr>
			<td>
				<a href="publishjob.php">Publish Job Vacancy</a>
			</td>
			<td colspan="2" align="right">
				<a href="logout.php">Log Out</a>
			</td>
		</tr>

		

	</table>

</body>
</html>