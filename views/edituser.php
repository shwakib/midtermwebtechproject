<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}

	$id=$_GET['id'];

	$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select * from user where id=$id";
			$result = mysqli_query($con, $sql);
			$row=mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
</head>
<body>

	<form method="POST" action="../php/updateuserinfo.php">
		<fieldset>
			<legend>
				Update Profile
			</legend>
				<table>
					<tr>
						<td>ID:</td>
						<td><input type="text" value="<?=$row['id']?>" id="rid" name="rid" readonly></td>
					</tr>

					<tr>
						<td>Name:</td>
						<td><input type="text" id="rname" name="rname" value="<?=$row['name']?>" ></td>
					</tr>


					<tr>
						<td>Blood Group:</td>
						<td>
							<select name="rbloodgroup" id="rbloodgroup">
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
							</select>
						</td>
					</tr>	

					<tr>
						<td>Maritual Status:</td>
						<td>
							<input type="radio" id="marstatus" name="marstatus" value="Single">Single
							<input type="radio" id="marstatus" name="marstatus" value="Married">Married
							
						</td>
					</tr>

					<tr>
						<td>Email:</td>
						<td>
							<input type="Email" id="remail" name="remail">
							<abbr title="sample@example.com"><b>i</b></abbr>
						</td>
					</tr>

					<tr>
						<td>
							Contact Number:
						</td>

						<td>
							<input type="tel" id="rnumber" name="rnumber" maxlength="11" >
						</td>
					</tr>

					<tr>
						<td>
							Address:
						</td>

						<td>
							<textarea id="raddress" name="raddress">
								
							</textarea>
						</td>
					</tr>

					<tr>
						<td>
							Emergency Contact Person:
						</td>

						<td>
							<input type="text" id="remname" name="remname">
						</td>
					</tr>

					<tr>
						<td>
							Emergency Contact Number:
						</td>

						<td>
							<input type="tel" id="remnumber" name="remnumber" pattern="[0-9]{5}-[0-9]{6}" maxlength="12">
						</td>
					</tr>

					<tr>
						<td>
							Relationship with Emergency contacted person:
						</td>
						<td>
							<input type="text" id="rrelastionship" name="rrelastionship">
						</td>
					</tr>

					
					
					

					<tr>
						<td colspan="2">
							
						</td>
						
					</tr>

					<tr>
						<td>
										<input type="submit" name="submit" value="Update">
										
						</td>
						<td align="right">
							<a href="home.php" align="right">Home</a>
						</td>
					</tr>				
				</table> 


			


		</fieldset>
	</form>

</body>
</html>