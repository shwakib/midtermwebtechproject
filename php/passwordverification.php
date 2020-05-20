<<<<<<< HEAD
<?php

		session_start();
		$id=$_SESSION['id'];


	if(isset($_POST['newpass']))
	{
		$newpass=$_POST['newpass'];
		$renewpass=$_POST['renewpass'];

		if($newpass==$renewpass)
		{
				$con=mysqli_connect('127.0.0.1','root','','webtech');

				$sql = "update user SET password='{$renewpass}' WHERE id='$id'";
				if(mysqli_query($con, $sql))
				{
				echo "Password Changed Successfully";
				
				}
				else
				{
				echo "Error";
				}
		}
		else
		{
			echo "Password is not same";
		}
	}





=======
<?php

		session_start();
		$id=$_SESSION['id'];


	if(isset($_POST['newpass']))
	{
		$newpass=$_POST['newpass'];
		$renewpass=$_POST['renewpass'];

		if($newpass==$renewpass)
		{
				$con=mysqli_connect('127.0.0.1','root','','webtech');

				$sql = "update user SET password='{$renewpass}' WHERE id='$id'";
				if(mysqli_query($con, $sql))
				{
				echo "Password Changed Successfully";
				
				}
				else
				{
				echo "Error";
				}
		}
		else
		{
			echo "Password is not same";
		}
	}





>>>>>>> 01ac521afefbe148bd28eb75166f3ebd7f222166
?>