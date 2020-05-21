<?php
	
	$id=$_GET['id'];
	//echo($id);

	$con=mysqli_connect('127.0.0.1','root','','webtech');
	$sql="select id from user where id=$id";
	$result=mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);
	
	
	if($count>0)
	{
		echo "Already used";
	}
	else
	{
		echo "You are ready to go";
	}


?>