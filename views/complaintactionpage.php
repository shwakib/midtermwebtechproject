<?php

			$id=$_GET['id'];

			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select * from complaintlist where id=$id";
			$result = mysqli_query($con, $sql);
			$row=mysqli_fetch_assoc($result);
			
?>



<!DOCTYPE html>
<html>
<head>
	<title>
		Complaint Details
	</title>
</head>
<body>

<script type="text/javascript">
	
	function f1()
	{
		var date=document.getElementById('cdate').value;
		var complaint=document.getElementById('complaint').value;
		var complaintaction=document.getElementById('complaintaction').value;
		var creport=document.getElementById('complaintreport').value;
		//var message='<?php $message;?>';
		//document.getElementById('complaintreport').innerHTML=message;
		var uid='<?php echo $row['userid'];?>';
		var cid='<?php echo $id;?>';
		
		
		
		
		//alert(cid);
		//alert(uid);
		var xhttp = new XMLHttpRequest();
				xhttp.open("POST","../php/complaintactionsubmit.php",true);
				xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
				xhttp.send('cid='+cid+'&uid='+uid+'&date='+date+'&complaint='+complaint+'&action='+complaintaction+'&report='+creport);

				xhttp.onreadystatechange = function()
				{
					if (this.readyState == 4 && this.status == 200)
					{
						alert(this.responseText);
						window.location.href='home.php';
					}
				}
	}
</script>




	
		<fieldset>
			<legend>Complaint Details</legend>
			<table>
				<tr>
					<td>Date:</td>
					<td><input type="date" name="cdate" id="cdate" value="<?=$row['date']?>" readonly></td>
				</tr>
				<tr>
					<td>Complaint Details:</td>
					<td><textarea cols="50" rows="5" id="complaint" readonly name="complaint"><?=$row['complaint']?></textarea></td>
				</tr>
				<tr>
					<td>Action Taken:</td>
					<td>
						<select name="complaintaction" id="complaintaction">
							<option selected="selected">Choose One</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
						
					</td>

				</tr>

				<tr>
					<td>Report:</td>
					<td><textarea cols="50" rows="5" id="complaintreport">We are extremely sorry for what you have experienced from our hospital.We have investigated your complaint and we want to inform you that</textarea></td>
				</tr>

				<tr>
					<td align="left">
						<button onclick="f1()">Send</button>
					</td>
					<td align="right">
						<a href="complainthistory.php">Back</a>
					</td>
				</tr>
			</table>

		</fieldset>


		
	

	


</body>
</html>