
<?php

/*session_start();

if(isset($_REQUEST['submit']))
{
	if(empty($_REQUEST['uid'])||empty($_REQUEST['upassword']))
	{
		echo "Field cannot be empty";
		header("location:login.php");
	}
	else
	{
		$id=$_REQUEST['uid'];
		$pass=$_REQUEST['upassword'];
		$myfile=fopen('userregistration.txt', 'r');
		while(!feof($myfile))
		{
			$line=fgets($myfile);
			$data=explode("|", $line);
			//print_r($data);
			if($id==$data[1]&&$pass==$data[2])
			{
				$_SESSION['id']=$id;
				$_SESSION['password']=$pass;
				$_SESSION['name']=$data[0];
				fclose($myfile);
				header("location:home.php");
			}
			else
			{
				echo "Wrong Password";
			}

		}
		$con =mysqli_connect('127.0.0.1','root','','webtech');
		$sql = "select * from user where id='{$id}' and password='{$pass}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 ){
			$_SESSION['name'] = $user['name'];
			//print_r($user);
			//echo "test";
			header("location:home.php");
		}else{
			echo "invalid username/password";
		}

	}

}
else
{
	header("location:login.php");
}*/


session_start();
if(isset($_POST['uid']))

{
	$id=$_POST['uid'];
	$pass=$_POST['pass'];

	if(empty($id)||empty($pass))
	{
		echo "null";
	}
	else
	{
		$con =mysqli_connect('127.0.0.1','root','','webtech');
		$sql = "select * from user where id='{$id}' and password='{$pass}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user)>0)
		{
			//sleep(2);
			setcookie('id',$id, time()+3600, '/');
			echo trim($user['type']);
			$_SESSION['id']= $id;
			$_SESSION['pass']= $pass;
			$_SESSION['type']= $user['type'];
			$_SESSION['name']= $user['name'];


		}
		else
		{
			echo "false";
		}
	}

}

?>
