<?php

if(isset($_REQUEST['submit']))
{
	if(empty($_REQUEST['rname']) || empty($_REQUEST['rid']) || empty($_REQUEST['rpassword']) || empty($_REQUEST['rconfirmpassword']) || empty($_REQUEST['gender']) || empty($_REQUEST['remail'])||empty($_REQUEST['rdate'])|| empty($_REQUEST['rbloodgroup']))
		{
		echo "Field Cannot Be Empty";
		}
	else
	{
		if($_REQUEST['rpassword']==$_REQUEST['rconfirmpassword'])
		{

			$name=$_REQUEST['rname'];
			$id=$_REQUEST['rid'];
			$password=$_REQUEST['rpassword'];
			$gender=$_REQUEST['gender'];
			$email=$_REQUEST['remail'];
			$dob=$_REQUEST['rdate'];
			$bg=$_REQUEST['rbloodgroup'];
			$myfile=fopen('userregistration.txt','a');
			fwrite($myfile,"$name|$id|$password|$gender|$email|$dob|$bg\r\n");
			fclose($myfile);
			header("location:login.php");
		}
		else
		{
			echo "Password Didnt Match";
		}
	}
}
else
{
	header("location:registration.php");
}

?>