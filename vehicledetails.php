<?php
$db = mysqli_connect("localhost","root","","db_labexam");
$query = "SELECT * from tbl_vehicle";
$result = mysqli_query($db,$query);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		table,td,th{
			border: 1px solid black;
			border-collapse: collapse;
			padding: 20px;
		}
	</style>
</head>
<body>
	<center>
		<h2 style="margin-top: 20px;">Vehicle Details</h2>
		<table style="width:70%">
			<?php
				while ($res = mysqli_fetch_assoc($result)) { ?>
					<tr> 
						<td><?php echo $res['name'] ?></td>
						<td><?php echo $res['address'] ?></td>
						<td><?php echo $res['contact'] ?></td>
						<td><?php echo $res['model'] ?></td>
						<td><?php echo $res['price'] ?></td>
					</tr>
					
				<?php } ?>
		</table>

	</center>

</body>
</html>