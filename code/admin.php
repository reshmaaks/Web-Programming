<!DOCTYPE html>
<html>
<head>
    <style>
      ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn ,.active {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
        </style>
    <body>
    <title>
        Home
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="home.css">
</head>
   
    <div class="home">
        <ul class="navarea">
            <li><a href="home.html">Home</a></li>
            <li ><a href="viewservice.php">View Service</a></li>
            <li><a href="viewequipment.html">View Equipments</a></li>
            <li><a href="appoinments.php">View Appoinments</a></li>
           
            <!-- <li><a href="about.html">About</a></li> -->
            
        
            
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Duty</a>
                <div class="dropdown-content">
                  <a href="addservice.php">Add Services</a>
                  <a href="addequipment.php">Add Equpiments</a>
                  <!-- <a href="doctor.php">Doctor</a> -->
                </div>
              </li>
              <li style="float:right;"><a href="logout.php">Logout</a></li>
        </ul>
</div>

</body>

</html>