<?php
include 'database.php';

$id=rand();


$sname=$_POST['sname'];
$fees=$_POST['fees'];

$sql="insert into service values('$id','$sname','$fees')";

if(mysqli_query($con,$sql))
{
    echo "Service inserted ";
   
    header("refresh:0 url=viewservice.php");

}
else{
    echo "Service insertion failed ";
    header("refresh:0 url=viewservice.php");

}
?>