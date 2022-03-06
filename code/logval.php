<?php
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($conn,"select * from user where userid='$name' and pwd='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$name;
	}
}
if (isset($_SESSION["login"]))
{
echo "<h1 align=center>Hi you are sucessfully login!!!</h1>";
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<div class="floating-box">

<form name="form1" method="post">


   <label for="uname">Username</label>
   <input type="text" id="loginid2" name="username"><br><br>

   <label for="pwd">Password</label>
   <input type="password" id="pass2" name="pwd"><br><br>
   <input name="submit" type="submit" id="submit" value="Login"><br>

<p>New User <a href="signup.php">Register Here</a></p>
<?php
		  if(isset($found))
		  {
		  	echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="index.php">Please try again</p>';
		  }
		  ?>
 </center>
</form>

</div>
<center>
</body>
</html>



