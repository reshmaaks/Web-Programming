<?php 
$name="Susan Sebastian";
$email="susansebastian@gmail.com";
$address="Ooralikunnel(H),Kalayanthani P.O,Thodupuzha";
$contact="+91 9526124241";
?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RESUME</title>
	<style>
		.row
	{
	width: 90%;
	margin-left: 70px;
	}
	.column
	{
		width: 20%;
		height: 200px;
		float: left;
	}
</style>
</head>
<body>

<form style="border: solid;">
	<center ><label style="font-size:40px;color:red;">RESUME</label></center>
	<br>
	<br>

<table style="width: 90%;margin-left: 70px;">
	<tr>
		<td><label>Name</label></td>
		<td><label>:</label></td>
		<td><label><?php echo $name;?></label></td>
		<td><label>Email</label></td>
		<td><label>:</label></td>
		<td><label><?php echo $email;?></label></td>
	</tr>

	<tr>
		<td><label>Address</label></td>
		<td><label>:</label></td>
		<td><label><?php echo $address;?></label></td>
		<td><label>Contact</label></td>
		<td><label>:</label></td>
		<td><label><?php echo $contact;?></label></td>
		
	</tr>
</table>

<br>

<hr style="width:90%">

<div style="margin-left: 70px;margin-right: 70px;">
	<label style="font-size:20px"><b>CAREER OBJECTIVE</b></label>
	<p>Looking for a challenging role in a reputable organization to utilize my technical, 
                database, and management skills for the growth of the organization as well as to enhance 
                my knowledge about new and emerging trends in the IT sector. An excellent academic record, 
                ability to understand and test software, working knowledge of Azure, and a strong understanding of 
                core internet technologies. I seek to work as a System Engineer to further my knowledge in the IT domain 
                and utilize my skills.</p>
</div>

<br>
<hr style="width:90%">

<label style="font-size:20px;margin-left:70px;margin-right: 70px;"><b>ACADEMIC OVERVIEW</b></label>
<br>
<br>

<table style="width: 90%;margin-left: 70px;border: 1px solid;">
	<th style="border:1px solid;"><b>COURSE</b></th>
	<th style="border:1px solid;"><b>INSTITUTION</b></th>
	<th style="border:1px solid;"><b>YEAR OF PASSING</b></th>
	<th style="border:1px solid;"><b>PERCENTAGE</b></th>
<tr>
	<td style="border:1px solid;"><center><label>BCA</label></center></td>
	<td style="border:1px solid;"><center><label>Santhigiri College of Computer Science,Thodupuzha</label></center></td>
	<td style="border:1px solid;"><center><label>2018</label></center></td>
	<td style="border:1px solid;"><center><label>78%</label></center></td>
</tr>
<tr>
	<td style="border:1px solid;"><center><label>Higher Secondary</label></center></td>
	<td style="border:1px solid;"><center><label>St George's Higher Secondary School,Muthalakodam</label></center></td>
	<td style="border:1px solid;"><center><label>2015</label></center></td>
	<td style="border:1px solid;"><center><label>80%</label></center></td>
</tr>
<tr>
	<td style="border:1px solid;"><center><label>High School</label></center></td>
	<td style="border:1px solid;"><center><label>De Paul HSS,Thodupuzha</label></center></td>
	<td style="border:1px solid;"><center><label>2013</label></center></td>
	<td style="border:1px solid;"><center><label>90%</label></center></td>
</tr>
	
</table>

<br>
<div class="row">
        <div class="column">
            <label style="font-size: 20px;"><b>Skill</b></label></br>
            <ul>
                <li>Creativity</li>
                <li>Critical Thinking</li>
                <li>Teamwork Skill</li>
                <li>Active Listening</li>
                <li>Conflict Resolution</li>
            </ul>
        </div>
        <div class="column">
            <label style="font-size: 20px;"><b>Interests</b></label></br>
            <ul>
                <li>Singing</li>
                <li>Traveling</li>
                <li>Dancing</li>
                <li>Cooking</li>
            </ul>
        </div>
        <div class="column">
            <label style="font-size: 20px;"><b>Acheivements</b></label></br>
            <ul>
                <li>Became the lead member of an NSS team in 2016</li>
                <li>College project was selected as Best Project of the year</li>
                <li>Selected as the best performer of the year in the previous company</li>
            </ul>
        </div>
        <div class="column" style="margin-left: 90px;">
            <label style="font-size: 20px;"><b>Languages</b></label></br>
            <ul>
                <li>Malayalam</li>
                <li>English</li>
                <li>Tamil</li>
            </ul>
        </div>
    </div>
<hr style="width:90%">
	</form>
	
</form>
</body>
</html>

