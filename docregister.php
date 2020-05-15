<?php

if(isset($_REQUEST['submit']))
{
	if(empty($_REQUEST['rid']) || empty($_REQUEST['rname']) || empty($_REQUEST['gender']) || empty($_REQUEST['rdate']) || empty($_REQUEST['rbloodgroup']) || empty($_REQUEST['marstatus'])||empty($_REQUEST['remail'])|| empty($_REQUEST['rnumber'])||empty($_REQUEST['raddress'])||empty($_REQUEST['remname'])||empty($_REQUEST['remnumber'])||empty($_REQUEST['rrelastionship'])||empty($_REQUEST['rpassword'])||empty($_REQUEST['rconfirmpassword'])||empty($_REQUEST['docspecialization']))
		{
		echo "Field Cannot Be Empty";
		header("location:docregistration.php");
		}

	/*elseif (!preg_match("/^[a-zA-Z ]*$/",$_REQUEST['rname']) {
		echo "Not allowed";
	}*/
	else
	{

		if($_REQUEST['rpassword']==$_REQUEST['rconfirmpassword'])
		{
			/*$data=$_REQUEST['date'];
			$data.=$_REQUEST['month'];
			$data.=$_REQUEST['year'];*/

			$id=$_REQUEST['rid'];
			$name=$_REQUEST['rname'];
			$gender=$_REQUEST['gender'];
			$dob=$_REQUEST['rdate'];
			/*if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
			{
      			$nameErr = "Only letters and white space allowed";
    		}*/
			$bg=$_REQUEST['rbloodgroup'];
			$marstatus=$_REQUEST['marstatus'];
			$email=$_REQUEST['remail'];
			$phnumber=$_REQUEST['rnumber'];
			$address=$_REQUEST['raddress'];
			$ecp=$_REQUEST['remname'];
			$ecn=$_REQUEST['remnumber'];
			$relation=$_REQUEST['rrelastionship'];
			$password=$_REQUEST['rconfirmpassword'];
			
			
			
			

			$filename=$_FILES['userpic']['name'];
			$dest="upload/"."$name".".jpg";
			$picname=$name;
			$src = $_FILES['userpic']['tmp_name'];
			if(move_uploaded_file($src, $dest))
			{
			$_SESSION['pic'] = $filename;
			//header('location: home.php');
			}
			else
			{
			echo "Error";
			}

			$type='doctor';
			/*$myfile=fopen('userregistration.txt','a');
			fwrite($myfile,"$name|$id|$password|$gender|$email|$dob|$bg|$picname|$type\r\n");
			fclose($myfile);*/

			$stafftype=$_REQUEST['docspecialization'];

			$con=mysqli_connect('127.0.0.1','root','','webtech');

			$sql = "insert into user values('{$id}','{$name}','{$gender}','{$dob}','{$bg}','{$marstatus}','{$email}','{$phnumber}','{$address}','{$ecp}','{$ecn}','{$relation}','{$password}','{$picname}','{$type}','{$stafftype}')";
			if(mysqli_query($con, $sql))
			{
			echo "Registration done!";
			header("location:home.php");

			}
			else
			{
			echo "Error";
			}
		}
		else
		{
			echo "Password Didnt Match";
		}
	}
}
else
{
	header("location:docregistration.php");
}

?>