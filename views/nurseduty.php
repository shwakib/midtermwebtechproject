<?php

$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select admittedpatient.name,admittedpatient.department,admittedpatient.referredddoc,assignednurse.nursename from admittedpatient inner join assignednurse ON admittedpatient.referredddoc=assignednurse.docname";
			$result = mysqli_query($con, $sql);
			



			?>

			<!DOCTYPE html>
			<html>
			<head>
				<title>Nurse Duty</title>
			</head>
			<body>
				<fieldset>
					<legend>Nurse Duty Check</legend>
				

				<table border="1">
					<tr>
						<td>Patient Name</td>
						<td>Patient Department</td>
						<td>Referred Doctor</td>
						<td>Nurse Name</td>
					</tr>

					<?php
					while($row=mysqli_fetch_assoc($result))
					{
						?>
						<tr>
							
							<td><?=$row['name']?></td>
							<td><?=$row['department']?></td>
							<td><?=$row['referredddoc']?></td>
							<td><?=$row['nursename']?></td>
						</tr>

					<?php } ?>

					<tr>
						<td colspan="4" align="center">
							<a href="home.php">Back</a>
						</td>
					</tr>
				</table>

				</fieldset>
			
			</body>
			</html>