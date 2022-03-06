<?php
include 'database.php';

$id=$_GET['id'];



$sql="DELETE from service WHERE sid = '$id' ";

if(mysqli_query($con,$sql))
{
    echo "deleted ";
    header("refresh:0 url=viewservice.php");
}
else{
    echo "Service deletion failed".mysqli_error($con);
    header("refresh:0 url=viewservice.php");

}
?>