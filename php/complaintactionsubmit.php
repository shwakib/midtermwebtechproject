<<<<<<< HEAD
<?php

	$cid=$_POST['cid'];
	$uid=$_POST['uid'];
	$date=$_POST['date'];
	$complaint=$_POST['complaint'];
	$action=$_POST['action'];
	$report=$_POST['report'];

	$con=mysqli_connect('127.0.0.1','root','','webtech');

			$sql = "insert into solvedcomplaintlist values('{$cid}','{$uid}','{$date}','{$complaint}','{$action}','{$report}')";
			
			if(mysqli_query($con, $sql))
			{
				echo "Report sent";
			}
			else
			{
				echo "Server Error";
			}

			//echo "Data sent";

=======
<?php

	$cid=$_POST['cid'];
	$uid=$_POST['uid'];
	$date=$_POST['date'];
	$complaint=$_POST['complaint'];
	$action=$_POST['action'];
	$report=$_POST['report'];

	$con=mysqli_connect('127.0.0.1','root','','webtech');

			$sql = "insert into solvedcomplaintlist values('{$cid}','{$uid}','{$date}','{$complaint}','{$action}','{$report}')";
			
			if(mysqli_query($con, $sql))
			{
				echo "Report sent";
			}
			else
			{
				echo "Server Error";
			}

			//echo "Data sent";

>>>>>>> 01ac521afefbe148bd28eb75166f3ebd7f222166
?>