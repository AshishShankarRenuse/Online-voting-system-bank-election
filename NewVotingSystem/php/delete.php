<?php
include 'db_connect.php'; 
 
$num= $_GET['num'];
 
echo $num;
 
$query1= "DELETE FROM `creg` WHERE `creg`.`id` =".$num;
 
if(mysqli_query($con,$query1))
{
    echo " Record Deleted ";
    header ('Location: http://localhost/php2/NewVotingSystem/php/display.php');
}
else{
    echo" Failed to Delete Record";
}
?>