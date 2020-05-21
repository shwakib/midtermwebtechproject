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
			//include('../services/db.php');
			$con=mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select * from admittedpatient";
			$result = mysqli_query($con, $sql);
			
						

			
		?>

		<table border="1">
			<tr>
				
				<td>Patient Name</td>
				<td>Patient Problem</td>
				<td>Admitted Department</td>
				<td>Referred Doctor</td>
				
				

			</tr>

		<?php
			while($row=mysqli_fetch_assoc($result))
			{
				?>

				<tr>
					<td><?=$row['name']?></td>
					
					<td><?=$row['problem']?></td>
					<td><?=$row['department']?></td>
					<td><?=$row['referredddoc']?></td>
					

					

						
					
					
				</tr>
		<?php	} ?>

			<tr>
					<td colspan="4" align="right">
						
						

						<a href="home.php"> Back</a> | 
						<a href="logout.php"> Logout</a> 		
					

					</td>
			</tr>

		</table>
	
</body>
</html>


