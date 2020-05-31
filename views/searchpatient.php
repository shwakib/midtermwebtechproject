
<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}
?>


<script type="text/javascript" src="../js/searchpatient.js">


</script>

<!DOCTYPE html>
<html>
<head>
	<title>Patient Search</title>
</head>
<body>
		<table align="center" >
			<tr>
				<td colspan="2">
					User Search
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="ptsearch" id="ptsearch" onkeyup="f2()">
				</td>
				<td>
					<input type="submit" name="submit" value="Search" onclick="f2()">
				</td>
			</tr>

			<tr>
				<td colspan="2">
					Search Results:
				</td>
			</tr>

		</table>

		<div id="searchresult"  align="center">

		</div>

		<table align="center">
			<tr>
				<td colspan=2 align=center >
					<a href=home.php>Home</a>
				</td>
			</tr>
		</table>
</body>
