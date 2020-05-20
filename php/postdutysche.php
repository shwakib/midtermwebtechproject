<<<<<<< HEAD
<?php
	
	if(isset($_POST['submit']))
	{
		$day=$_POST['dutyday'];
		$twelveam=$_POST['stuffsfor12'];
		$eightam=$_POST['stuffsfor8'];
		$fouram=$_POST['stuffsfor4'];

		///echo($twelveam);
		//echo($eightam);
		//echo($fouram);

		$con=mysqli_connect('127.0.0.1','root','','webtech');

			$sql = "insert into dutylist values('{$day}','{$twelveam}','{$eightam}','{$fouram}')";
			if(mysqli_query($con, $sql))
			{
				echo "Submission done!";
				header("location:../views/home.php");
			}
			else
			{
				echo "Error!";
			}
	}

=======
<?php
	
	if(isset($_POST['submit']))
	{
		$day=$_POST['dutyday'];
		$twelveam=$_POST['stuffsfor12'];
		$eightam=$_POST['stuffsfor8'];
		$fouram=$_POST['stuffsfor4'];

		///echo($twelveam);
		//echo($eightam);
		//echo($fouram);

		$con=mysqli_connect('127.0.0.1','root','','webtech');

			$sql = "insert into dutylist values('{$day}','{$twelveam}','{$eightam}','{$fouram}')";
			if(mysqli_query($con, $sql))
			{
				echo "Submission done!";
				header("location:../views/home.php");
			}
			else
			{
				echo "Error!";
			}
	}

>>>>>>> 01ac521afefbe148bd28eb75166f3ebd7f222166
?>