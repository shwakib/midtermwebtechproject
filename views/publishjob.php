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
	<title>Job Vacancy</title>
</head>
<body>

		<table border="1" width="100%">
			<tr>
				<td>Vacancy</td>
			</tr>
		</table>

		
			<fieldset>
				<legend>Current Jobs</legend>
				<table border="1">
				<tr>
					<td>
						
						Job Position
					</td>
					<td>
							Department
					</td>
					<td>
							Functions
					</td>
					<td>
						Start Date
					</td>
					<td>
						End Date
					</td>
				</tr>
				<tr>
					<td>
						<a href="">Assistant Manager</a>
					</td>
					<td>
						Hospitality Manager
					</td>
					<td>
						Food & Beverage Production
					</td>
					<td>
						8/3/2020
					</td>
					<td>
						16/3/2020
					</td>
				</tr>
				</table>
			</fieldset>

			<fieldset>
				<legend>
					Frequent Jobs
				</legend>
We frequently hire people on followings job role/Functions. If you are interested to apply for the following position please do create a profile in job portal and mention your Preferred Job Role/Functions under  “Other Information” section.
				<table border="1">
					<tr>
						<td>
							Clinical Area
						</td>
						<td>
							Nursing Area
						</td>
						<td>
							Non Clinical Area
						</td>
					</tr>
					<tr>
						<td>
							Registrar - Gastroentrology
						</td>
						<td>
							<a href="">Staff Nurse – Nursing</a>
						</td>
						<td>
							<a href="">Customer Care Officer – Operations</a>
						</td>
					</tr>
					<tr>
						<td>
							Registrar - Orthopedics
						</td>
						<td>
							<a href="">Charge Nurse – Nursing</a>
						</td>
						<td>
							<a href="">Medical Transcriptionist – Operations</a>
						</td>
					</tr>


				</table>

				<table>
					<tr>
						<td colspan="2">
							<a href="home.php">Go Back</a>
						</td>
					</tr>
				</table>
			</fieldset>
		
</body>
</html>