<?php

if(isset($_REQUEST['submit']))
{
	if(empty($_REQUEST['rname']) || empty($_REQUEST['rid']) || empty($_REQUEST['rpassword']) || empty($_REQUEST['rconfirmpassword']) || empty($_REQUEST['gender']) || empty($_REQUEST['remail'])||empty($_REQUEST['rdate'])|| empty($_REQUEST['rbloodgroup']))
		{
		echo "Field Cannot Be Empty";
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

			$name=$_REQUEST['rname'];
			/*if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
			{
      			$nameErr = "Only letters and white space allowed";
    		}*/
			$id=$_REQUEST['rid'];
			$password=$_REQUEST['rpassword'];
			$gender=$_REQUEST['gender'];
			$email=$_REQUEST['remail'];
			$dob=$_REQUEST['rdate'];
			$bg=$_REQUEST['rbloodgroup'];

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

			$type='patient';
			$myfile=fopen('userregistration.txt','a');
			fwrite($myfile,"$name|$id|$password|$gender|$email|$dob|$bg|$picname|$type\r\n");
			fclose($myfile);

			//header("location:home.php");

			$con=mysqli_connect('127.0.0.1','root','','webtech');

			$sql = "insert into user values('{$name}','{$id}','{$password}','{$gender}','{$email}','{$dob}','{$bg}','{$picname}','{$type}')";
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
	header("location:register.php");
}

?>