
<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}
?>



<script type="text/javascript" src="../js/assigndoctor.js">

</script>




<!DOCTYPE html>
<html>
<head>
<title>Doctor's list</title>
</head>
<body>
   <table border=1 align="center">
   <tr>
     <td colspan="4" align="center"><u><b>Patient's List</b></u></td>
	 </tr>

	 <tr>
     <td><b>Name</b></td>
	 <td><b>Problem</b></td>
	 <td><b>Department</b></td>
	 <td><b>Assigned Doctor</b></td>

	 </tr>

	 <?php

	 $con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select name from user where type='patient'";
			$result = mysqli_query($con, $sql);

	?>

	<tr>
		<td>
			<select name="patientname" id="patientname">
							<option selected="selected">
								Choose One
							</option>
							<?php

			while($row=mysqli_fetch_assoc($result)){

							?>
							<option value="<?=$row['name']?>"><?=$row['name']?></option>
						<?php } ?>

						</select>

		</td>

		<td>
			<input type="text" name="patientproblem" id="patientproblem" placeholder="Enter Problem">
		</td>

		<?php

			$sql = "select * from department";
			$result1 = mysqli_query($con, $sql);
		?>

		<td>
			<select name="patientdept" id="patientdept">
							<option selected="selected">
								Choose One
							</option>
							<?php

			while($row1=mysqli_fetch_assoc($result1)){

							?>
							<option onclick="f1()" value="<?=$row1['name']?>"><?=$row1['name']?></option>
						<?php } ?>

						</select>

		</td>
		<td>
			<div id="result">

			</div>
		</td>
	</tr>

	 <tr>
	 <td colspan="2" align="left"><u><a href="home.php">Go Home</a></u></td>
	 	<td colspan="2" align="right"><button onclick="f3()">Assign</button></td>

	</tr>

	 </table>
	 </body>
