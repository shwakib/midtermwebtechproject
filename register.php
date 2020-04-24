<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>

	<form method="POST" action="registrationuser.php" enctype="multipart/form-data">
		<fieldset>
			<legend>
				Registration
			</legend>
				<table>

					
					<tr>
						<td>ID:</td>
						<td><input type="text" id="rid" name="rid"></td>
					</tr>

					<tr>
						<td>Name:</td>
						<td><input type="text" id="rname" name="rname"></td>
					</tr>

					

					

					<tr>
						<td>Gender:</td>
						<td>
							<input type="radio" id="gender" name="gender" value="Male">Male
							<input type="radio" id="gender" name="gender" value="Female">Female
							<input type="radio" name="gender" id="gender" value="Others">Others
						</td>
					</tr>

					<tr>
						<td>Date Of Birth:</td>
						<td>
							<input type="Date" id="rdate" name="rdate">
							<!-- <input type="text" size="2" name="date">/
							<input type="text" size="2" name="month">/
							<input type="text" size="2" name="year"> -->
						</td>
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
						<td><input type="Email" id="remail" name="remail"></td>
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
							Relationship with Admin:
						</td>
						<td>
							<input type="text" id="rrelastionship" name="rrelastionship">
						</td>
					</tr>

					<tr>
						<td>Password:</td>
						<td><input type="password" id="rpassword" name="rpassword"></td>
					</tr>

					<tr>
						<td>Confirm Password:</td>
						<td><input type="password" id="rconfirmpassword" name="rconfirmpassword"></td>
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
						<td colspan="2">
							
						</td>
						
					</tr>
					

					<tr>
						<td>
										<input type="submit" name="submit" value="Create Account">	
										<a href="login.php">Login</a>
						</td>
						<td align="right">
							<a href="homemain.php" align="right">Home</a>
						</td>
					</tr>	

						

						
				</table> 


			


		</fieldset>
	</form>

</body>
</html>