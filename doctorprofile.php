
<!DOCTYPE html>
<html>
<head>

	<?php
      $con =mysqli_connect('127.0.0.1','root','','webtech');
      $sql = "select * from user where id=123";
      $result = mysqli_query($con, $sql);
      $row=mysqli_fetch_assoc($result);

  ?>
	<meta charset="utf-8">
	<title>User Profile</title>
	<link rel="stylesheet" href="dpstyle.css">
</head>
<body>
<style type="text/css">
	div.a {
  text-transform: uppercase;
}
</style>
	<div class="profile">
		<img src="upload/<?=$row['name'].".jpg"?>" alt="Avatar" class="pp">
		<h1 class="name"><?=$row['name']?></h1>
		<h4 class="tags"><p><i><?=$row['id']?></i><br><br><b>Contact No:</b><?=$row['contactnum']?><br>
<b>Email:</b><?=$row['email']?><br></h4>
<h4 class="location"><i class="fas fa-map-marker-alter"></i><?=$row['address']?></h4>

<p class="intro">
	<div class="a"><?=$row['type']?>,<?=$row['usertype']?></div>
</p>
<div class="edu">
	<h1>Information</h1>
</div>
<div class="details">
	<div class="info">
		
 
 <i><b>Date Of Birth:<?=$row['dob']?></b><br><b>Gender:</b><?=$row['gender']?><br>
 <b>Blood Group</b><?=$row['bg']?><br>
<b>Maritual Status</b><?=$row['marstatus']?><br>
<b>Gender:</b><?=$row['gender']?><br></i>
	</div>
	<div class="info">
		<li><b>Emergency Contact information</b></li>
 <i>Emergency Contact Person :<?=$row['ecp']?><br><b>Emergency Contact Number:</b><?=$row['ecn']?><br>
 </div>

	</div> 
	<div class="education">
		<div class="info">
 	<b>Relation With Emergency Contact Person: <?=$row['relwadmin']?></b>

</div>
	</div>
 
 


	
<div class="c2a">
	
	<a href="viewusers.php" class="see"><i class="fas fa-envelope"></i>See Users</a>
	<a href="home.php" class="back"><i class="fas fa-envelope"></i>Back</a>
	<a href="../php/logout.php" class="Contact"><i class="fas fa-envelope"></i>Log Out</a>

	
</div>

	</div>
</body>
</html>