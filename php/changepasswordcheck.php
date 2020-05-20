<<<<<<< HEAD
<?php

session_start();

$id=$_SESSION['id'];
$pass=$_POST['pass'];

			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select password from user where id=$id";
			$result = mysqli_query($con, $sql);
			$row=mysqli_fetch_assoc($result);

			

			if($pass==$row['password'])
			{
				echo"matched";
			}
			else
			{
				echo "not matched";
			}

=======
<?php

session_start();

$id=$_SESSION['id'];
$pass=$_POST['pass'];

			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select password from user where id=$id";
			$result = mysqli_query($con, $sql);
			$row=mysqli_fetch_assoc($result);

			

			if($pass==$row['password'])
			{
				echo"matched";
			}
			else
			{
				echo "not matched";
			}

>>>>>>> 01ac521afefbe148bd28eb75166f3ebd7f222166
?>