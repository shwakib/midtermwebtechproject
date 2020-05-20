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
	<title>Registration Dashboard</title>
</head>
<body>

	<form method="POST" action="../php/docregister.php" enctype="multipart/form-data">
		<fieldset>
			<legend>
				Doctor Registration
			</legend>
				<table>
					<tr>
						<td>ID:</td>
						<td><input type="text" name="rid"></td>
					</tr>

					<tr>
						<td>Name:</td>
						<td><input type="text" name="rname"></td>
					</tr>

					

					

					<tr>
						<td>Gender:</td>
						<td>
							<input type="radio" name="gender" value="Male">Male
							<input type="radio" name="gender" value="Female">Female
							<input type="radio" name="gender" value="Others">Others
						</td>
					</tr>

					<tr>
						<td>Date Of Birth:</td>
						<td>
							<input type="Date" name="rdate">
							<!-- <input type="text" size="2" name="date">/
							<input type="text" size="2" name="month">/
							<input type="text" size="2" name="year"> -->
						</td>
					</tr>

					<tr>
						<td>Blood Group:</td>
						<td>
							<select name="rbloodgroup">
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
							<input type="radio" name="marstatus" value="Single">Single
							<input type="radio" name="marstatus" value="Married">Married
							
						</td>
					</tr>

					<tr>
						<td>Email:</td>
						<td><input type="Email" name="remail"></td>
					</tr>

					<tr>
						<td>
							Contact Number:
						</td>

						<td>
							<input type="number" name="rnumber">
						</td>
					</tr>

					<tr>
						<td>
							Address:
						</td>

						<td>
							<textarea name="raddress">
								
							</textarea>
						</td>
					</tr>

					<tr>
						<td>
							Emergency Contact Person:
						</td>

						<td>
							<input type="text" name="remname">
						</td>
					</tr>

					<tr>
						<td>
							Emergency Contact Number:
						</td>

						<td>
							<input type="tel" id="phone" name="remnumber" pattern="[0-9]{5}-[0-9]{6}" maxlength="12">
						</td>
					</tr>

					<tr>
						<td>
							Relationship with Admin:
						</td>
						<td>
							<input type="text" name="rrelastionship">
						</td>
					</tr>

					<tr>
						<td>Password:</td>
						<td><input type="password" name="rpassword"></td>
					</tr>

					<tr>
						<td>Confirm Password:</td>
						<td><input type="password" name="rconfirmpassword"></td>
					</tr>
					
					<tr>
						<td>
							Image: 
						</td>
						<td>
							<input type="file" name="userpic">
						</td>
					</tr>	

										<tr>
						<td>
							Doctor Specialization:
						</td>
						<td>
							<select name="docspecialization">
								<option value="Pediatrician">Pediatrician</option>
								<option value="Obstetrician">Obstetrician</option>
								<option value="Surgeon">Surgeon</option>
								<option value="Cardiologist">Cardiologist</option>
							</select>
							
						</td>
					</tr>

					<tr>
						<td>
										<input type="submit" name="submit" value="Create Account">	
										
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