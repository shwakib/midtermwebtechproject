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
	<title>User's List</title>
</head>
<body>
	
		
		<?php
			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select * from user";
			$result = mysqli_query($con, $sql);
			
						

			
		?>

		<table border="1">
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Gender</td>
				<td>Date Of Birth</td>
				<td>Blood Group</td>
				<td>E-mail</td>
				<td>Contact Number</td>
				<td>Address</td>
				<td>Emergency Contact Person</td>
				<td>Emergency Contact Number</td>
				<td>Relation With</td>
				<td>Image</td>
				<td>Type</td>
				<td>Action</td>
				

			</tr>

		<?php
			while($row=mysqli_fetch_assoc($result))
			{
				?>

				<tr>
					<td><?=$row['id']?></td>
					<td><a href="userprofilepage.php?id=<?=$row['id']?>"><?=$row['name']?></a></td>
					<td><?=$row['gender']?></td>
					<td><?=$row['dob']?></td>
					<td><?=$row['bg']?></td>
					<td><?=$row['email']?></td>
					<td><?=$row['contactnum']?></td>
					<td><?=$row['address']?></td>
					<td><?=$row['ecp']?></td>
					<td><?=$row['ecn']?></td>
					<td><?=$row['relwadmin']?></td>

					<td><img src="upload/<?=$row['name'].".jpg"?>" width="80px" height="80px"></td>
					<td><?=$row['type']?></td>
					<td>
						<a href="edituser.php?id=<?=$row['id']?>">Edit</a>|
						<a href="deleteusers.php?id=<?=$row['id']?>">Delete</a>

						
					</td>
					
				</tr>
		<?php	} ?>

			<tr>
					<td colspan="14" align="right">
						
						

						<a href="home.php"> Back</a> | 
						<a href="logout.php"> Logout</a> 		
					

					</td>
			</tr>

		</table>
	
</body>
</html>