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
	<title>Profile Page</title>
</head>
<body>
	
		<!-- <table border="1px" align="center" border-spacing='5px's>
			<tr>
				<td colspan="3" align="center">Users
			</tr>
			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>USER TYPE</td>
			</tr>
			<tr>
				<td>15-10101-1</td>
				<td>Bob</td>
				<td>Admin</td>
			</tr>
			<tr>
				<td>16-10102-1</td>
				<td>Anne</td>
				<td>Patient</td>
			</tr>
			<tr>
				<td>16-10103-2</td>
				<td><a href="doctorprofile.php">Dr. AGARKHEDKAR SHARAD RAMKRISHNA</a></td>
				<td>Doctor</td>
			</tr>
			<tr>
				<td>16-10104-3</td>
				<td>James</td>
				<td>Staff</td>
			</tr>
			<tr>
				<td colspan="3" align="right"><u><a href="home.php">Go Home</a></u></td>
			</tr>
			
		</table> -->

			



		<?php
			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select * from user";
			$result = mysqli_query($con, $sql);

		?>

		<table border="1">
			<tr>
				<td>Name</td>
				<td>ID</td>
				<td>Gender</td>
				<td>E-mail</td>
				<td>Date Of Birth</td>
				<td>Blood Group</td>
				<td>Image</td>
				<td>Usertype</td>
				<td>Action</td>
				

			</tr>

		<?php
			while($row=mysqli_fetch_assoc($result))
			{
				?>

				<tr>
					<td><a href=""><?=$row['name']?></a></td>
					<td><?=$row['id']?></td>
					<td><?=$row['gender']?></td>
					<td><?=$row['email']?></td>
					<td><?=$row['dob']?></td>
					<td><?=$row['bg']?></td>
					<td><img src="upload/<?=$row['name'].".jpg"?>" width="80px" height="80px"></td>
					<td><?=$row['usertype']?></td>
					<td>
						<a href="">Edit</a>|
						<a href="">Delete</a>
					</td>
					
				</tr>
		<?php	} ?>

			<tr>
					<td colspan="9" align="right">
						<a href="home.php"> Back</a> | 
						<a href="logout.php"> Logout</a> 
					</td>
			</tr>

		</table>
	
</body>
</html>