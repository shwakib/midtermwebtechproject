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

    var name='<?php echo $name;?>';
    //alert(name);
		var date=document.getElementById('adate').value;
    //alert(date);
		var atime=document.getElementsByName('atime');
           
            for(i=0;i<atime.length;i++)
            {
                if(atime[i].checked)
                {
                    var time=atime[i].value;
                }
            }
           // alert(time);
            var xhttp = new XMLHttpRequest();
                xhttp.open("POST","appointmentconfirm.php",true);
                xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
                xhttp.send('name='+name+'&date='+date+'&time='+time);
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
  <meta charset="utf-8">
	<title>Make appoinment</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form class="box" method="post">
	<fieldset>
	<legend>Select Date and Time</legend>
		Date: <br><input type="Date" id="adate"  name="adate" required placeholder=""> <br><br>
		Time:<br>
		 <input type="radio" name="atime" id="atime" value="7-9:30 pm" required placeholder="">7-9:30 pm<br>
		     <!-- <input type="radio" name="atime"  value="7-10:00 pm" required placeholder="">7-10:00 pm<br>
		      <input type="time" id="appt" name="appt"
       min="09:00" max="18:00" required>-->
				
              <!-- <input type="submit" name="insert" required placeholder="makeappoinment" > -->
              <!-- <input type="submit" name="submit" onclick="f1()" >--><button onclick="f1()">Submit</button>
				<u><a href="patienthome.php">Back</a></u>
				<u><a href="logout.php">Logout</a></u>
		</fieldset>
		</form>
</body> 

</html>