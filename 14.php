<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Document</title> 
</head> 
<body> 
<?php 
echo "Default Order"."<br>"; 
$s=array("Don","Adharsh","Vyshnav","Arun","Binoy","Shibli","Afeef"); 
print_r($s); 
asort($s); 
echo "<br><br>"."Ascending Order"."<br>"; 
print_r($s); 
arsort($s); 
echo "<br><br>"."Decending Order"."<br>"; 
print_r($s); 
?> 
</body> 
</html>