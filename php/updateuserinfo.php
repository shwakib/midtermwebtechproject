<<<<<<< HEAD
<?php
	session_start();
	$id=$_POST['rid'];

	if(isset($_REQUEST['submit']))
	{
			
			$bg=$_REQUEST['rbloodgroup'];
			$marstatus=$_REQUEST['marstatus'];
			$email=$_REQUEST['remail'];
			$phnumber=$_REQUEST['rnumber'];
			$address=$_REQUEST['raddress'];
			$ecp=$_REQUEST['remname'];
			$ecn=$_REQUEST['remnumber'];
			$relation=$_REQUEST['rrelastionship'];
			
			$con=mysqli_connect('127.0.0.1','root','','webtech');

			$sql = "update user SET bg='{$bg}',marstatus='{$marstatus}',email='{$email}',contactnum='{$phnumber}',address='{$address}',ecp='{$ecp}',ecn='{$ecn}',relwadmin='{$relation}' WHERE id=$id";
				if(mysqli_query($con, $sql))
				{
				echo "Update Done!";
				header("location:../views/home.php");
				}
				else
				{
				echo "Error";
				}
	}
	else
	{
		echo"Null submission found!";
		header("location:../views/updateadmin.php");
	}

=======
<?php
	session_start();
	$id=$_POST['rid'];

	if(isset($_REQUEST['submit']))
	{
			
			$bg=$_REQUEST['rbloodgroup'];
			$marstatus=$_REQUEST['marstatus'];
			$email=$_REQUEST['remail'];
			$phnumber=$_REQUEST['rnumber'];
			$address=$_REQUEST['raddress'];
			$ecp=$_REQUEST['remname'];
			$ecn=$_REQUEST['remnumber'];
			$relation=$_REQUEST['rrelastionship'];
			
			$con=mysqli_connect('127.0.0.1','root','','webtech');

			$sql = "update user SET bg='{$bg}',marstatus='{$marstatus}',email='{$email}',contactnum='{$phnumber}',address='{$address}',ecp='{$ecp}',ecn='{$ecn}',relwadmin='{$relation}' WHERE id=$id";
				if(mysqli_query($con, $sql))
				{
				echo "Update Done!";
				header("location:../views/home.php");
				}
				else
				{
				echo "Error";
				}
	}
	else
	{
		echo"Null submission found!";
		header("location:../views/updateadmin.php");
	}

>>>>>>> 01ac521afefbe148bd28eb75166f3ebd7f222166
?>