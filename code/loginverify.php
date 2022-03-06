<?php
include 'database.php';




$email=$_POST['email'];

$pass=$_POST['password'];


$query="SELECT * FROM patient where email_ID='$email';";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $password_enc=$row['password'];
    
    
    if($pass==$password_enc)
    {
        session_start();
        $_SESSION['id']=$email;
        header('Location:patient.php');
    }
    else{
       
        header('Location:login.html?error');
    }
}
?>