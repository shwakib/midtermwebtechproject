<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}

			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select * from complaintlist";
			$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Complaint</title>

	<style> 
div.a {
  white-space: nowrap; 
  width: 200px; 
  overflow: hidden;
  text-overflow: ellipsis;
  /*border: 1px solid #000000;*/
}

/*div.a:hover {
  overflow: visible;
}*/


</style>
</head>
<body>

		 <table border=1 align="center">
		 	<tr>
		 		<td>
		 			Date
		 		</td>
		 		<td>
		 			Complaint
		 		</td>
		 		<td>
		 			User
		 		</td>
		 		
		 	</tr>

		 	<?php

		 		while ($row=mysqli_fetch_assoc($result)) 
		 		{
		 			?>
		 			<tr>
		 			<td><?=$row['date']?></td>
		 			<td><div class="a"><a href="complaintactionpage.php?id=<?=$row['id']?>"><?=$row['complaint']?></a></div></td>
		 			<td><?=$row['userid']?></td>
		 			</tr>
		 			
		 		<?php } ?>

		 	
		 	

		 	


		 	
		 	<tr>
		 		<td colspan="3" align="left">
		 			<a href="home.php">Home</a>
		 		</td>
		 		
		 	</tr>


		 </table>
</body>
</html>