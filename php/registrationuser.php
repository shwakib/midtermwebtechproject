<?php

if(isset($_REQUEST['submit']))
{
	if(empty($_REQUEST['rid']) || empty($_REQUEST['rname']) || empty($_REQUEST['gender']) || empty($_REQUEST['rdate']) || empty($_REQUEST['rbloodgroup']) || empty($_REQUEST['marstatus'])||empty($_REQUEST['remail'])|| empty($_REQUEST['rnumber'])||empty($_REQUEST['raddress'])||empty($_REQUEST['remname'])||empty($_REQUEST['remnumber'])||empty($_REQUEST['rrelastionship'])||empty($_REQUEST['rpassword'])||empty($_REQUEST['rconfirmpassword']))
		{
		echo "Field Cannot Be Empty";
		}

	/*elseif (!preg_match("/^[a-zA-Z ]*$/",$_REQUEST['rname']) {
		echo "Not allowed";
	}*/
	else
	{
		$id=$_REQUEST['rid'];

		$con=mysqli_connect('127.0.0.1','root','','webtech');
		$sql="select id from user where id=$id";
		$result=mysqli_query($con, $sql);
		$count =mysqli_num_rows($result);
	
	
		if($count>0)
		{
		echo "Already used";
		header("location:../views/register.php");
		}
		else
		{
		echo "You are ready to go";
		}

		if($_REQUEST['rpassword']==$_REQUEST['rconfirmpassword'])
		{
			/*$data=$_REQUEST['date'];
			$data.=$_REQUEST['month'];
			$data.=$_REQUEST['year'];*/

			
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
			$dest="../upload/"."$name".".jpg";
			$picname=$name;
			$src = $_FILES['userpic']['tmp_name'];
			if(move_uploaded_file($src, $dest))
			{
			$_SESSION['pic'] = $filename;
			//header('location: home.php');
			}
			else
			{
			echo "Image Error";
			}

			$type='admin';
			/*$myfile=fopen('userregistration.txt','a');
			fwrite($myfile,"$name|$id|$password|$gender|$email|$dob|$bg|$picname|$type\r\n");
			fclose($myfile);*/

			$admintype='operations';
			//echo($admintype);

			if(!preg_match("/^[a-zA-Z ]*$/",$name))
			{
				echo "Only letters and white spaces allowed";
			}
			else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				echo "Invalid Email";
			}
			else if(!strlen($phnumber)==11)

			{
				echo "Invalid Phone number";
			}
			else
			{
				$con=mysqli_connect('127.0.0.1','root','','webtech');

			$sql1= "insert into user values('{$id}','{$name}','{$gender}','{$dob}','{$bg}','{$marstatus}','{$email}','{$phnumber}','{$address}','{$ecp}','{$ecn}','{$relation}','{$password}','{$picname}','{$type}','{$admintype}')";
			if(mysqli_query($con, $sql1))
			{
			echo "Registration done!";
			header("location:../views/login.php");

			}
			else
			{
			echo "DB Error";
			}
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
	header("location:../views/register.php");
}
?>