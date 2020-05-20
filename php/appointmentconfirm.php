<?php
if(isset($_POST['name']))

 

{
    $id=$_POST['name'];
    $pass=$_POST['date'];
     $time=$_POST['time'];

     if(empty($id)||empty($pass)||empty($time))
    {
        echo "null";
    }
    else
    {
        $con =mysqli_connect('127.0.0.1','root','','webtech');
    
$sql = "insert into makeappoinment values('{$id}','{$pass}','{$time}')";
            if(mysqli_query($con, $sql))
            {
            echo "Appointment done!";
           


            }
            else
            {
            echo "Error";
            }




    }
}

 




 ?>