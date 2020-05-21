 <?php
$con=mysqli_connect('127.0.0.1','root','','webtech');
      $sql = "select * from circularlist";
      $result = mysqli_query($con, $sql);
      $row=mysqli_fetch_assoc($result);

 ?>

<!DOCTYPE html>
<html>
<head>
  
	<title>Job Circular</title>
  
</head>
<body>



<fieldset>
	
	<legend><h1>Job Circular</h1></legend>
	 <table>
  
  <tr>
  <td ><b>Name of the position</b></td>
  <td><?=$row['pos']?></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td ><b>Department/Division</b></td>
  <td><?=$row['dept']?></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td ><b>Functions</b></td>
  <td><?=$row['func']?></td>
  <td></td>  
  <td></td>
</tr>

<tr>
  <td ><b>Employment Type</b></td>
  <td><?=$row['emtype']?></td>
  <td><b>Office Location</b></td>  
  <td><?=$row['officeloc']?></td>
</tr>  

<tr>
  <td ><b> Office Timing</b></td>
  <td> <?=$row['officetime']?></td>
  <td><b>Salary Range</b></td>  
  <td> <?=$row['salary']?></td>
</tr>   

<tr>
  <td ><b>Job Level</b></td>
  <td><?=$row['joblevel']?></td>
  <td><b>Age Limit</b></td>  
  <td><?=$row['agelimit']?></td>
</tr>  
<tr>
  <td ><b>Reports to</b></td>
  <td><?=$row['reports']?></td>
  <td><b></b></td>  
  <td></td>
</tr> 

<tr>
  <td ><b>Educational Requirements</b></td>
  <td colspan="3"></td>
</tr>  
<tr>
  <td colspan="3">
    <li><?=$row['edureq']?></li>
  </td>
</tr>

 <tr>
  <td ><b>Experience Requirements</b></td>
  <td colspan="3"></td>
</tr>  
<tr>
  <td colspan="3">
    <li><?=$row['expreq']?></li>
  </td>
</tr>

<tr>
  <td ><b>Job Responsibilities</b></td>
  <td colspan="3"></td>
</tr>  
<tr>
  <td colspan="3">
    <li><?=$row['jobrep1']?></li>
  </td>
</tr>

<tr>
  <td colspan="3">
    <li><?=$row['jobrep2']?></li>
  </td>
</tr>
<tr>
  <td colspan="3">
    <li><?=$row['jobrep3']?></li>
  </td>
</tr>
<tr>
  <td colspan="3">
    <li><?=$row['jobrep4']?></li>
  </td>
</tr>

<tr>
  <td ><b>Additional Job Responsibilities</b></td>
  <td colspan="3"></td>
</tr>  
<tr>
  <td colspan="3">
    <li><?=$row['adddjobrep']?></li>
  </td>
</tr>

<tr>
  <td colspan="3">
    <li><?=$row['adddjobrep2']?></li>
  </td>
</tr>
<tr>
  <td colspan="3">
    <li><?=$row['adddjobrep3']?></li>
  </td>
</tr>
<tr>
  <td colspan="3">
    <li><?=$row['adddjobrep4']?></li>
  </td>
</tr>

<tr>
  <td ><b>Technical Competencies</b></td>
  <td colspan="3"></td>
</tr>  
<tr>
  <td colspan="3">
    <li><?=$row['techcom']?></li>
  </td>
</tr>

<tr>
  <td colspan="3">
    <li><?=$row['techcom2']?></li>
  </td>
</tr>
<tr>
  <td colspan="3">
    <li><?=$row['techcom3']?></li>
  </td>
</tr>


<tr>
  <td ><b>Behavioral Competencies</b></td>
  <td colspan="3"></td>
</tr>  
<tr>
  <td colspan="3">
    <li><?=$row['behavecom']?></li>
  </td>
</tr>

<tr>
  <td colspan="3">
    <li><?=$row['behavecom2']?></li>
  </td>
</tr>
<tr>
  <td colspan="3">
    <li><?=$row['behavecom3']?></li>
  </td>
</tr>


<tr>
  <td ><b>Other Benefits</b></td>
  <td colspan="3"></td>
</tr>  
<tr>
  <td colspan="3">
    <li><?=$row['benefits']?></li>
  </td>
</tr>

<tr>
  <td ><b>Council Registration Requirements</b></td>
  <td colspan="3"></td>
</tr>  
<tr>
  <td colspan="3">
    <li><?=$row['councilreq']?></li>
  </td>
</tr>

<tr>
  <td colspan="4" align="middle">
    <a href="home.php">Home</a>
    
  </td>
</tr>





	</fieldset>

		
</body>
</html>