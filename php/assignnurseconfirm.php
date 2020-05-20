<<<<<<< HEAD
<?php

	$name=$_POST['name'];
	
	$dept=$_POST['dept'];
	$doc=$_POST['doc'];	



	$con=mysqli_connect('127.0.0.1','root','','webtech');

			$sql = "insert into assignednurse values('{$name}','{$dept}','{$doc}')";
			if(mysqli_query($con, $sql))
			{
			echo "Admission done!";
			

			}
			else
			{
			echo "Error";
			}


=======
<?php

	$name=$_POST['name'];
	
	$dept=$_POST['dept'];
	$doc=$_POST['doc'];	



	$con=mysqli_connect('127.0.0.1','root','','webtech');

			$sql = "insert into assignednurse values('{$name}','{$dept}','{$doc}')";
			if(mysqli_query($con, $sql))
			{
			echo "Admission done!";
			

			}
			else
			{
			echo "Error";
			}


>>>>>>> 01ac521afefbe148bd28eb75166f3ebd7f222166
			?>