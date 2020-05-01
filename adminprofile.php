<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}

  $id=$_SESSION['id'];
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient Profile</title>
</head>
<body>
	<form>
	<fieldset>
	
	 <table  width="100%">
  
  <tr>
    <td colspan="3" align="right" width="80%">
        <?= $_SESSION['name']; ?>
        <a href="home.php">Home</a>
      
    
    
      <a href="logout.php">Logout</a>
    </td>
    
    
      

  </tr>


  <?php
      $con =mysqli_connect('127.0.0.1','root','','webtech');
      $sql = "select * from user where id='{$id}'";
      $result = mysqli_query($con, $sql);
      $row=mysqli_fetch_assoc($result);

  ?>

  <tr>
    <td  align="right" width="30%">
      <b>ID: <br>
      Name: <br>
      Gender: <br>
      Date Of Birth: <br>
      Blood Group: <br>
      Maritual Status: <br>
      E-Mail: <br>
      Contact Number:</b> <br>

      
    </td>

    <td  align="">
      <?=$row['id']?> <br>
      <?=$row['name']?> <br>
      <?=$row['gender']?> <br>
      <?=$row['dob']?> <br>
      <?=$row['bg']?> <br>
      <?=$row['marstatus']?> <br>
      <?=$row['email']?> <br>
      <?=$row['contactnum']?> <br>

    </td>

    <td>
      <img src="upload/<?=$_SESSION['name'].".jpg"?>" width="125px" height="100px"/>
    </td>
  </tr>

  <tr>
    <td align="right" width="30%">
      <b>Address: <br>
      Emergency Contact Person: <br>
      Emergency Contact Number: <br>
      Relationship with:</b> <br>

    </td>
    <td colspan="2" align="left">
      <i><?=$row['address']?></i> <br>
      <?=$row['ecp']?> <br>
      <?=$row['ecn']?> <br>
      <?=$row['relwadmin']?> <br>
    </td>
  </tr>


  

  </table><br>

		</fieldset>
		</form>
</body>
</html>