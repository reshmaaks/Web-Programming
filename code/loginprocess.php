<?php  
 require('database.php');

if (isset($_POST['name']) and isset($_POST['pwd'])){
	
// Assigning POST values to variables.
$username = $_POST['name'];
$password = $_POST['pwd'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user` WHERE email='$username' and pwd='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1){

    //echo "Login Credentials verified";
    echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
    header( "refresh:3;url=adminhomepage.html" );  
   }
else{
    echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
    //echo "Invalid Login Credentials";
    }
    }
    ?>