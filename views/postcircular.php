<?php
  session_start();

  if(!isset($_SESSION['name']))
  {
    header("location:login.php");
  }
 ?><!DOCTYPE html>
<html>
<head>
	<title>Circular List</title>
</head>
<body>

	<fieldset>
		<legend>Circular List</legend>

		<table border="1">
			<tr>
				<td>
					Job Position
				</td>
				<td>
					Department
				</td>
				<td>
					Action Taken				</td>
			</tr>

			<?php
			$con=mysqli_connect('127.0.0.1','root','','webtech');
      $sql = "select * from circularlist";
      $result = mysqli_query($con, $sql);
      while($row=mysqli_fetch_assoc($result))
      {

      ?>
      <tr>
      	<td><?=$row['pos']?></td>
      	<td><?=$row['dept']?></td>
      	<td>
      		<a href="circularpage.php?pos=<?=$row['pos']?>">Post</a>|
					<a href="../php/deletecircular.php?pos=<?=$row['pos']?>">Delete</a>

				<?php } ?>

      	</td>
      </tr>
		</table>


	</fieldset>




</body>
</html>