<?php
	
	$pos=$_GET['pos'];
 	

 			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "delete  from circularlist where pos='{$pos}'";
			if(mysqli_query($con, $sql))
			{

				header("location:../views/home.php");
				
			
			}
			else
			{
				echo "error";
			}

?>