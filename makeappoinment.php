<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}
	$name=$_GET['name'];
	

?>

<script type="text/javascript">
	

	function f1()
	{
		var date=document.getElementById('adate').value;
		var atime=document.getElementsByName('atime');
           
            for(i=0;i<atime.length;i++)
            {
                if(atime[i].checked)
                {
                    var time=atime[i].value;
                }
            }
            alert(time);
            var xhttp = new XMLHttpRequest();
                xhttp.open("POST","appointmentconfirm.php",true);
                xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
                xhttp.send('name='+<?=$name?>+'&date='+date+'&time='+time);
                xhttp.onreadystatechange = function()
                {
                    if (this.readyState == 4 && this.status == 200)
                    {
                   
                        alert(this.responseText);
                    }
                }

	}
</script>

<!DOCTYPE html>
<html>
<head>
	<title>Make appoinment</title>
</head>
<body>
	

	<form >
	<fieldset>
	<legend>Select Date and Time</legend>
		Date: <br><input type="Date" id="adate" name="adate" value=""> <br><br>
		Time:<br>
		 <input type="radio" name="atime" id="atime" value="7-9:30 pm">7-9:30 pm<br>
		      <input type="radio" name="atime" id="atime" value="7-10:00 pm">7-10:00 pm<br>
		      
				
               <input type="submit" name="submit" onclick="f1()">
				<u><a href="home.php">Back</a></u>
				<u><a href="logout.php">Logout</a></u>
		</fieldset>
		</form>
</body> 
</html>