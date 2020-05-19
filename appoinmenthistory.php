<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<title>Appoinment History</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

			<?php
			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select * from makeappoinment";
			$result = mysqli_query($con, $sql);
			?>

   <form class="box" ><table border=1 align="center">
   <tr>
     <td colspan="3" align="center"><u><b>Upcoming Appoinments</b></u></td>
	 </tr>
	 
	 <tr>
     <td><b>Date</b></td>
	 <td><b>Time</b></td>
	 <td><b>Doctor's Name</b></td>
	 
	 </tr>
	 
	 <?php


			while($row=mysqli_fetch_assoc($result))
			{
				?>

				<tr>
					<td><?=$row['date']?></td>
					<td><?=$row['time']?></td>
					<td><a href="doctor1.php"><?=$row['name']?></a></td>
					
				</tr>
		<?php
	}
	 ?>
	 <tr>
     <td><u><a href="patienthome.php">Back</a></u></td>
	 <td></td>
	 <td><u><a href="logout.php">Logout</a></u></td>
	 </tr>
	 
	 </table>
	</form>
	 </body>
	 </html>