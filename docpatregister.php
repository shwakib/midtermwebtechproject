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

	<form method="POST" action="patientregistration.php">
		<fieldset>
			<legend>
				Patient Registration
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
							<input type="radio" name="gender" value="Male">Male
							<input type="radio" name="gender" value="Female">Female
							<input type="radio" name="gender" value="Others">Others
						</td>
					</tr>

					<tr>
						<td>Email</td>
						<td><input type="Email" name="remail"></td>
					</tr>

					<tr>
						<td>Date Of Birth</td>
						<td>
							<input type="Date" name="rdate">
							<!-- <input type="text" size="2" name="date">/
							<input type="text" size="2" name="month">/
							<input type="text" size="2" name="year"> -->
						</td>
					</tr>

					<tr>
						<td>Blood Group</td>
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
						<td>
							
						</td>
						<td>
							
							
							
						</td>
					</tr>

					<tr>
						<td>
										<input type="submit" name="submit" value="Create Account">	
										
						</td>
						<td align="right">
							<a href="home.php" align="right">Home</a>
							<button><a href="staffregistration.php">Staff Registration</a></button>
							<button><a href="docregistration.php">Doctor Registration</a></button>
						</td>
					</tr>				
				</table> 


			


		</fieldset>
	</form>

</body>
</html>