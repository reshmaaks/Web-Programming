<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form style="border: 1px;border-style: solid;"method="post">

	<table>
		<tr>
			<td>
				<label>UserName</label>
			</td>
			<td>
				<input type="text" name="name">
			</td>
		</tr>
		<tr>
			<td>
				<label>Password</label>
			</td>
			<td>
				<input type="Password" name="pwd">
			</td>
		</tr>
		<tr>
			<td>
				<input type="Submit" name="">
			</td>
	</table>
</form>
</body>
</html>
<?php
echo $_POST['name'];
echo $_POST['pwd'];

?>
