<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}


?>

<script type="text/javascript">
	function f2()
	{
		var password=document.getElementById('upassword').value;
		//alert(password);
		
		var newpassword=document.getElementById('cupassword').value;
		var renewpassword=document.getElementById('creupassword').value;
		//alert(newpassword);
		//alert(renewpassword);
		/*if(newpassword != renewpassword)
		{
			newpassword.setCustomValidity("Passwords Don't Match");
		}*/
		/*if(newpass.localeCompare(renewpassword))
		{
			alert("matched");
		}
		else
		{
			alert("not matched");
		}*/
		

				var xhttp = new XMLHttpRequest();
				xhttp.open("POST","changepasswordcheck.php",true);
				xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
				xhttp.send('pass='+password);

				xhttp.onreadystatechange = function()
				{
					if (this.readyState == 4 && this.status == 200)
					{
						if(this.responseText.match("matched"))
						{
							//alert("Okay ");
							var xhttp = new XMLHttpRequest();
							xhttp.open("POST","passwordverification.php",true);
							xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
				xhttp.send('newpass='+newpassword+'&renewpass='+renewpassword);
							xhttp.onreadystatechange = function()
							{
								if (this.readyState == 4 && this.status == 200)
									{
								alert(this.responseText);
								window.location.href='home.php';
									}
							}
						}
					}
				}


	}
</script>

<!DOCTYPE html>
<html>
	<head>
		<title>Change Password</title>

	</head>
	<body>
		<form><center>
			<fieldset>
				<legend>CHANGE PASSWORD</legend>
				Current Password<br>
				<input type="password" name="upassword" maxlength="8" id="upassword"><br>
				New Password<br>
				<input type="password" name="cupassword" id="cupassword" maxlength="8"><br>
				Re-type New Password<br>
				<input type="password" name="creupassword" id="creupassword" maxlength="8"><br>
			</fieldset>
		</form>
		<br>
		
		<input type="button" name="submit" value="Update" onclick="f2()">
			<button><u><a href="patienthome.php">Back</u></button>
	</body>
</html>