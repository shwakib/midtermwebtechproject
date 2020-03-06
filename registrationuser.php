<?php

if(isset($_REQUEST['submit']))
{
	if(empty($_REQUEST['rname']) || empty($_REQUEST['rid']) || empty($_REQUEST['rpassword']) || empty($_REQUEST['rconfirmpassword']) || empty($_REQUEST['Gender']) || empty($_REQUEST['reamail']) || empty($_REQUEST['date']) || empty($_REQUEST['month']) || empty($_REQUEST['year']) || empty($_REQUEST['rbloodgroup']) || empty($_REQUEST['utype']))
	{
		echo "Field Cannot Be Empty";
	}
	else
	{
		if($_REQUEST['rpassword']==$_REQUEST['rconfirmpassword'])
		{
			$data=$_REQUEST['date'];
			$data.=$_REQUEST['month'];
			$data.=$_REQUEST['year'];

			$name=$_REQUEST['rname'];
			$id=$_REQUEST['rid'];
			$password=$_REQUEST['rpassword'];
			$gender=$_REQUEST['Gender'];
			$email=$_REQUEST['reamil'];
			$dob=$data;
			$bg=$_REQUEST['rbloodgroup'];
			$type=$_REQUEST['utype'];
			$myfile=fopen('userregistration.txt','a');
			fwrite($myfile,"$name|$id|$password|$gender|$email|$dob|$bg|$type\r\n");
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
	header("location:register.php");
}

?>