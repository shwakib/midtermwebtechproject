<!DOCTYPE html>
<html>
<head>
<title>Duty Schedule</title>
</head>
<body>
   <table border=1 align="center">
   <tr>
     <td colspan="5" align="center"><u><b>Duty Schedule</b></u></td>
	 </tr>
	 
	 <tr>
     <td><b>Day</b></td>
	 <td><b>12 AM- 8AM</b></td>

	 <td><b>8AM-4PM</b></td>
	 <td><b>4PM- 12AM</b></td>	 
	 </tr>

	 

	 <?php
			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select * from dutylist";
			$result = mysqli_query($con, $sql);
			
						
			while($row=mysqli_fetch_assoc($result))
			{


			
	?>

			<tr>
				<td><?=$row['day']?></td>
				<td><?=$row['12am']?></td>
				<td><?=$row['8am']?></td>
				<td><?=$row['4am']?></td>

			</tr>

		<?php } ?>
	 
	 <tr>
	 	<td colspan="2"><u><a href="home.php">Go Home</a></u>
     </td>
     <td colspan="2" align="right">
     	<button><u><a href="logout.php">Logout</a></u></button>
     </td>
	 </tr>
	 </table><br>

	 

	 </body>
</html>