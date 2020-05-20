<!DOCTYPE html>
<html>
<head>
	<title>Duty Schedule</title>
</head>
<body>
	<form method="POST" action="postdutysche.php">

	<fieldset>

		<legend>Duty Schedule</legend>
		<table>
			<tr>

			<td>Select Day:</td>
			<td>
				<select name="dutyday">
					<option selected="selected">Choose</option>
					<option value="Saturday">Saturday</option>
					<option value="Sunday">Sunday</option>
					<option value="Monday">Monday</option>
					<option value="Tuesday">Tuesday</option>
					<option value="Wednesday">Wednesday</option>
					<option value="Thursday">Thursday</option>
					<option value="Friday">Friday</option>
				</select>
			</td>

				

			</tr>
			<tr>
				<td>
					Enter name of stuffs for [12AM-8AM]:
				</td>
				<td>
					<input type="text" name="stuffsfor12" size="50">
				</td>
			</tr>
			<tr>
				<td>
					Enter name of stuffs for [8AM-4PM]:
				</td>
				<td>
					<input type="text" name="stuffsfor8" size="50">
				</td>
			</tr>
			<tr>
				<td>
					Enter name of stuffs for [4PM-12AM]:
				</td>
				<td>
					<input type="text" name="stuffsfor4" size="50">
				</td>
			</tr>

			<tr>
				<td align="left">
					<input type="submit" name="submit" value="Submit">
				</td>
				<td align="right">
					<a href="home.php">Back</a>
				</td>
			</tr>

		</table>
		

	</fieldset>

	</form>

</body>
</html>