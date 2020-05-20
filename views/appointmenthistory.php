<<<<<<< HEAD
<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}

			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select * from appointmentlist";
			$result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<table>
	<head>
		<title>Apoinment History</title>

		
	</head>
	<body>
		<center><table border="1" width="100%">
			<tr>
				<td>Date</td>
				<td>Time</td>
				<td>Doctor Name</td>
				<td>Patient Name</td>
				
				<td>Reason Of visit</td>

				<!-- <textarea></textarea> -->
				
			</tr>
		<?php	
			while($row=mysqli_fetch_assoc($result))

			{
				?>

				<tr>
				<td><?=$row['date']?></td>
				<td><?=$row['time']?></td>
				<td><?=$row['docname']?></td>
				<td><?=$row['patientname']?></td>
				
				<td><textarea readonly><?=$row['visitreason']?></textarea></td>

				<!-- <textarea></textarea> -->
				
				</tr>
<?php
			} ?>
			
		</table><br>
		<center><button><a href="home.php">Back</a></button><br><br>
	</body>
=======
<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}

			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select * from appointmentlist";
			$result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<table>
	<head>
		<title>Apoinment History</title>

		
	</head>
	<body>
		<center><table border="1" width="100%">
			<tr>
				<td>Date</td>
				<td>Time</td>
				<td>Doctor Name</td>
				<td>Patient Name</td>
				
				<td>Reason Of visit</td>

				<!-- <textarea></textarea> -->
				
			</tr>
		<?php	
			while($row=mysqli_fetch_assoc($result))

			{
				?>

				<tr>
				<td><?=$row['date']?></td>
				<td><?=$row['time']?></td>
				<td><?=$row['docname']?></td>
				<td><?=$row['patientname']?></td>
				
				<td><textarea readonly><?=$row['visitreason']?></textarea></td>

				<!-- <textarea></textarea> -->
				
				</tr>
<?php
			} ?>
			
		</table><br>
		<center><button><a href="home.php">Back</a></button><br><br>
	</body>
>>>>>>> 01ac521afefbe148bd28eb75166f3ebd7f222166
</table>