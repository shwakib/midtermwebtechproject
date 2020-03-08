<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	Welcome <?= $_SESSION['name'] ?> <br>
	<table>
		<tr>
			<td>
				<a href="updateadmin.php">Update Profile</a>
			</td>
			<td>
				<a href="adminprofile.php"><?= $_SESSION['name'] ?></a> <br>
			</td>

			
			
		</tr>

		<tr>
			<td colspan="2">
				<a href="docpatregister.php">Register</a>
			</td>
			
		</tr>

		<tr>
			<td colspan="2">
				<a href="viewusers.php">View Users</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="assigndoctor.php">Assign Doctor</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="appointmenthistory.php">Appointment History</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="assignnurse.php">Assign Nurse</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="complainthistory.php">Complaint History</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="dutyschedule.php">Create Duty Schedule</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="searchpatient.php">Search Patient</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="changepassword.php">Change Password</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="publishjob.php">Publish Job Vacancy</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="">Log Out</a>
			</td>
		</tr>

	</table>

</body>
</html>