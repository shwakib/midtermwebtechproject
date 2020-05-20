<<<<<<< HEAD
<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}
?>



<script type="text/javascript">
	function f1()
	{
			var selecteddept=document.getElementById('patientdept').value;
			//alert(selecteddept);

			var xhttp = new XMLHttpRequest();
				xhttp.open("GET","../php/doctorbydept.php?dept="+selecteddept,true);
				/*xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');*/
				xhttp.send();

				xhttp.onreadystatechange = function()
				{
					if (this.readyState == 4 && this.status == 200)
					{
						document.getElementById('result').innerHTML=this.responseText;
					}
				}
	}

	function f2()
	{
		var docname=document.getElementById('selecteddoc');
		var doctorname=docname.options[docname.selectedIndex].text;
		//alert(doctorname);
		

				
	}
	

	function f3()
	{
		var docname=document.getElementById('selecteddoc');
		var doctorname=docname.options[docname.selectedIndex].text;
		/*var doctorname=document.getElementById('selecteddoc');
		var docname=doctorname.options[docname.selectedIndex].text;
		alert(docname);*/
		//alert(doctorname);
		var patientname=document.getElementById('patientname').value;
		//alert(patientname);
		var patientproblem=document.getElementById('patientproblem').value;
		var selecteddept=document.getElementById('patientdept').value;

		var xhttp = new XMLHttpRequest();
				xhttp.open("POST","../php/admitpatient.php",true);
				xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
				xhttp.send('name='+patientname+'&prob='+patientproblem+'&dept='+selecteddept+'&doc='+doctorname);
				xhttp.onreadystatechange = function()
				{
					if (this.readyState == 4 && this.status == 200)
					{
						alert(this.responseText);
						window.location.href="../views/home.php";
					}
				}
	}
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
=======
<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}
?>



<script type="text/javascript">
	function f1()
	{
			var selecteddept=document.getElementById('patientdept').value;
			//alert(selecteddept);

			var xhttp = new XMLHttpRequest();
				xhttp.open("GET","../php/doctorbydept.php?dept="+selecteddept,true);
				/*xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');*/
				xhttp.send();

				xhttp.onreadystatechange = function()
				{
					if (this.readyState == 4 && this.status == 200)
					{
						document.getElementById('result').innerHTML=this.responseText;
					}
				}
	}

	function f2()
	{
		var docname=document.getElementById('selecteddoc');
		var doctorname=docname.options[docname.selectedIndex].text;
		//alert(doctorname);
		

				
	}
	

	function f3()
	{
		var docname=document.getElementById('selecteddoc');
		var doctorname=docname.options[docname.selectedIndex].text;
		/*var doctorname=document.getElementById('selecteddoc');
		var docname=doctorname.options[docname.selectedIndex].text;
		alert(docname);*/
		//alert(doctorname);
		var patientname=document.getElementById('patientname').value;
		//alert(patientname);
		var patientproblem=document.getElementById('patientproblem').value;
		var selecteddept=document.getElementById('patientdept').value;

		var xhttp = new XMLHttpRequest();
				xhttp.open("POST","../php/admitpatient.php",true);
				xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
				xhttp.send('name='+patientname+'&prob='+patientproblem+'&dept='+selecteddept+'&doc='+doctorname);
				xhttp.onreadystatechange = function()
				{
					if (this.readyState == 4 && this.status == 200)
					{
						alert(this.responseText);
						window.location.href="../views/home.php";
					}
				}
	}
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
>>>>>>> 01ac521afefbe148bd28eb75166f3ebd7f222166
	 </html>