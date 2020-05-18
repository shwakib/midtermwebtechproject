<?php

	session_start();

 	$id=$_GET['id'];
 	$loginid=$_SESSION['id'];

 			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "delete  from user where id=$id";
			if(mysqli_query($con, $sql))
			{

				//header("location:viewusers.php");
				if($id==$loginid)
				{
					header("location:login.php");
					session_destroy();
				}
				else
				{
					header("location:viewusers.php");
				}
			
			}
			else
			{
				echo "error";
			}

			?>

 	
