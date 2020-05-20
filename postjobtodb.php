<?php


$pos=$_POST['position'];
$dept=$_POST['dept'];
$func=$_POST['functions'];
$emtype=$_POST['emtype'];
$officetime=$_POST['officetime'];
$joblevel=$_POST['joblevel'];
$reports=$_POST['reports'];
$officeloc=$_POST['officeloc'];
$salary=$_POST['salary'];
$agelimit=$_POST['agelimit'];
$edureq=$_POST['edureq'];
$expreq=$_POST['expreq'];
$jobrep1=$_POST['jobrep1'];
$jobrep2=$_POST['jobrep2'];
$jobrep3=$_POST['jobrep3'];
$jobrep4=$_POST['jobrep4'];
$adddjobrep=$_POST['adddjobrep'];
$adddjobrep2=$_POST['adddjobrep2'];
$adddjobrep3=$_POST['adddjobrep3'];
$adddjobrep4=$_POST['adddjobrep4'];
$techcom=$_POST['techcom'];
$techcom2=$_POST['techcom2'];
$techcom3=$_POST['techcom3'];
$behavecom=$_POST['behavecom'];
$behavecom2=$_POST['behavecom2'];
$behavecom3=$_POST['behavecom3'];
$benefits=$_POST['benefits'];
$councilreq=$_POST['councilreq'];
$row1="NULL";

echo($pos);
echo($councilreq);

	$con =mysqli_connect('127.0.0.1','root','','webtech');
	$sql="insert into jobcircular values('1','{$pos}','{$dept}','{$func}','{$emtype}','{$officetime}','{$joblevel}','{$reports}','{$officeloc}','{$salary}','{$agelimit}','{$edureq}','{$expreq}','{$jobrep1}','{$jobrep2}','{$jobrep3}','{$jobrep4}','{$adddjobrep}','{$adddjobrep2}','{$adddjobrep3}','{$adddjobrep4}','{$techcom}','{$techcom2}','{$techcom3}','{$behavecom}','{$behavecom2}','{$behavecom3}','{$benefits}','{$councilreq}')";





	//$sql1="insert into circularlist values(1,'{$pos}','{$dept}')";
	//mysqli_query($con, $sql);

		/*if(mysqli_query($con, $sql1))
			{
			echo "Registration done!";
			header("location:login.php");

			}
			else
			{
			echo "Error";
			}*/

?>
