<?php

session_start();

if(isset($_REQUEST['submit']))
{
	if(empty($_REQUEST['uid'])||empty($_REQUEST['upassword']))
	{
		echo "Field cannot be empty";
	}
	else
	{
		$id=$_REQUEST['uid'];
		$pass=$_REQUEST['upassword'];
		$myfile=fopen('user.txt', 'r');
		while(!feof($myfile)) 
		{
			$line=fgets($myfile);
			$data=explode("|", $line);
			print_r($data);
			if($id==$data[1]&&$pass==$data[2])
			{
				$_SESSION['id']=$id;
				$_SESSION['password']=$pass;
				$_SESSION['name']=$data[0];
				fclose($myfile);
				header("location:profile.php");
			}
			else
			{
				echo "Wrong Password";
			}

		}

	}

}
else
{
	header("location:login.php");
}

?>