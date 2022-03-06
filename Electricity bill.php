<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Electricity Bill</title>
</head>
<body>
<center>
	<form method="POST">
	<table style="width:20px; margin-top: 100px;">
		<tr>
			<td><label>Name</label></td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td><label>House Name</label></td>
			<td><input type="text" name="housename"></td>
		</tr>
		<tr>
			<td><label>Place</label></td>
			<td><select name="place" style="width:20px;">
				<option value="Thodupuzha">Thodupuzha</option>
				<option value="Kalayanthani">Kalayanthani</option>
				<option value="Karinkunnam">Karinkunnam</option>
			</select></td>
		</tr>
		<tr>
			<td><label>Unit</label></td>
			<td><input type="text" name="unit"></td>
		</tr>
	</table>
	<button name="calculate">Calculate</button>
	</form>
</center>

<table style="margin-left: 30%;border: 1px solid black;">
	<th>Name</th>
	<th>House Name</th>
	<th>Place</th>
	<th>Unit</th>
	<th>Amount</th>



<?php
$db = mysqli_connect("localhost","root","","db_labexam");
if(isset($_POST['calculate'])){
	$name = $_POST['name'];
	$housename = $_POST['housename'];
	$place = $_POST['place'];
	$unit = $_POST['unit'];
	if($unit < 100){
			$bill = $unit * 5;
		}
		else if($unit>100 && $unit<200){
			$bill = $unit * 7;
		}
		else{
			$bill = $unit * 9;
		}

	$query1 = "INSERT into tbl_electricity(name,housename,place,unit)VALUES('$name','$housename','$place',$unit);";
	$result1 = mysqli_query($db,$query1);

	$query2 = "SELECT * FROM tbl_electricity where name = '$name';";
	$result2 = mysqli_query($db,$query2);

	while($res = mysqli_fetch_assoc($result2)){
		
	 ?>


		<tr>
			<td> <?php echo $res['name']?></td>
			<td> <?php echo $res['housename']?></td>
			<td> <?php echo $res['place']?></td>
			<td> <?php echo $res['unit']?></td>
			<td> <?php echo $bill ?></td>
		</tr> 

		<?php 



	}

}
?>
</table>
</body>
</html>