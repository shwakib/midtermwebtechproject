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
		var selecteddept=document.getElementById('doc').value;
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


			var xhttp = new XMLHttpRequest();
				xhttp.open("GET","../php/nursebydept.php?dept="+selecteddept,true);
				/*xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');*/
				xhttp.send();

				xhttp.onreadystatechange = function()
				{
					if (this.readyState == 4 && this.status == 200)
					{
						document.getElementById('result1').innerHTML=this.responseText;
					}
				}
	}

	function f2()
	{
		var nursename=document.getElementById('selectednurse');
		var nursename=nursename.options[nursename.selectedIndex].text;
	}

	function f3()
	{
		var nursename=document.getElementById('selectednurse');
		var nurse=nursename.options[nursename.selectedIndex].text;
		var selecteddept=document.getElementById('doc').value;
		var docname=document.getElementById('selecteddoc');
		var doctorname=docname.options[docname.selectedIndex].text;
		/*alert(nurse);
		alert(selecteddept);
		alert(doctorname);*/
		/*var doctorname=document.getElementById('selecteddoc');
		var docname=doctorname.options[docname.selectedIndex].text;
		alert(docname);*/
		//alert(doctorname);
		/*var patientname=document.getElementById('patientname').value;
		//alert(patientname);
		var patientproblem=document.getElementById('patientproblem').value;
		var selecteddept=document.getElementById('patientdept').value;*/

		var xhttp = new XMLHttpRequest();
				xhttp.open("POST","../php/assignnurseconfirm.php",true);
				xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
				xhttp.send('name='+nurse+'&dept='+selecteddept+'&doc='+doctorname);
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
	 </html>