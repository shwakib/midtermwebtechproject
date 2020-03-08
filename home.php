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
				<a href="">Assign Doctor</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="">Appointment History</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="">Assign Nurse</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="">Complaint History</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="">Create Duty Schedule</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="">Search Patient</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="">Change Password</a>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<a href="">Publish Job Vacancy</a>
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