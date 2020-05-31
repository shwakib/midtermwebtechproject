
<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}
?>

<script type="text/javascript" src="../js/assignnurse.js">


</script>

<!DOCTYPE html>
<html>
<head>
<title>Doctor's list</title>
</head>
<body>
   <table border=1 align="center">
   <tr>
     <td colspan="3" align="center"><u><b>Assign nurse</b></u></td>
	 </tr>

	 <tr>
     <td><b>Department Name</b></td>
	 <td><b>Doctor Name</b></td>

	 <td><b>Nurse</b></td>

	 </tr>

	 <?php

	 $con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select name from department";
			$result = mysqli_query($con, $sql);

	?>

	<tr>
		<td>
			<select name="docname" id="doc">
							<option selected="selected">
								Choose One
							</option>
							<?php

			while($row=mysqli_fetch_assoc($result)){

							?>
							<option onclick="f1()" value="<?=$row['name']?>"><?=$row['name']?></option>
						<?php } ?>

						</select>

		</td>





		<td>
			<div id="result">

			</div>

		</td>
		<td>
			<div id="result1">

			</div>
		</td>
	</tr>

	 <tr>
	 <td colspan="2" align="left"><u><a href="home.php">Go Home</a></u></td>
	 	<td colspan="2" align="right"><button onclick="f3()">Assign</button></td>

	</tr>

	 </table>
	 </body>
