<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Patient Search</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
 
 <form class="box" action="" method="POST">
		<table align="center">
			<tr>
				<td colspan="2">
					Doctor Search 
				</td> 
			</tr>
			<tr>

				<td>
					<input type="text" name="name" placeholder="Enter name to search">
				</td>
				<td>
					<input type="submit" name="search" value="Search Doctor">
				</td>
			</tr>

			<tr>
				<td colspan="2" align="center">
					<a href="patienthome.php">Home</a>
				</td>
			</tr>
		</table>
		</form>

		<?php
			$connection =mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection, 'webtech');

          if(isset($_POST['search']))
          { 
          	$name=$_POST['name'];
          	$query="select * from doctorlist where name='$name'";
          	$query_run=mysqli_query($connection, $query);

           while($row=mysqli_fetch_array($query_run))
			{
				?>
				<table class="box" border="1">
				<tr>
					<td>Name</td>
					<td>Specialization</td>
				</tr>
				<tr>
					<td><a href="doctor1.php?id=<?=$row['id']?>"><?=$row['name']?></td>
					<td><?=$row['specialization']?></td>
				</tr>
				<tr>
					<td><button><a href="patienthome.php">Back</a></td></button>
					<td><button><a href="logout.php">Logout</a></td></button>
				</tr>

					</table>
				<!--<form action="" method="POST">
					<input type="hidden" name="id" value="<?php echo $row=['id']?>"/>
					<input type="text" name="name" value="<?php echo $row=['name']?>"/>
					<input type="text" name="specialization" value="<?php echo $row=['specialization']?>"/>
					
				</form>-->
				<?php		}
		}
			
	?>
	</body>
</html>