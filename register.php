<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>

	<form method="POST" action="registrationuser.php">
		<fieldset>
			<legend>
				Registration
			</legend>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="rname"></td>
					</tr>

					<tr>
						<td>ID</td>
						<td><input type="text" name="rid"></td>
					</tr>

					<tr>
						<td>Password</td>
						<td><input type="password" name="rpassword"></td>
					</tr>

					<tr>
						<td>Confirm Password</td>
						<td><input type="password" name="rconfirmpassword"></td>
					</tr>

					<tr>
						<td>Gender</td>
						<td>
							<input type="radio" name="Gender" value="Male">Male
							<input type="radio" name="Gender">Female
							<input type="radio" name="Gender">Others
						</td>
					</tr>

					<tr>
						<td>Email</td>
						<td><input type="Email" name="remail"></td>
					</tr>

					<tr>
						<td>Date Of Birth</td>
						<td><!-- <input type="Date" name="rdate"> -->
							<input type="text" size="2" name="date">/
							<input type="text" size="2" name="month">/
							<input type="text" size="2" name="year">
						</td>
					</tr>

					<tr>
						<td>Blood Group</td>
						<td>
							<select name="rbloodgroup">
								<option value="A+">A+</option>
								<option>A-</option>
								<option>B+</option>
								<option>B-</option>
								<option>O+</option>
								<option>O-</option>
							</select>
						</td>
					</tr>	

					<tr>
						<td>
							User Type
						</td>
						<td>
							<input type="radio" name="utype" value="Doctor">Doctor
							<input type="radio" name="utype">Patient
							<input type="radio" name="utype">Staff
						</td>
					</tr>

					<tr>
						<td>
										<input type="submit" name="submit" value="Create Account">	
										<a href="login.php">Login</a>
						</td>
						<td align="right">
							<a href="" align="right">Home</a>
						</td>
					</tr>				
				</table> 


			


		</fieldset>
	</form>

</body>
</html>