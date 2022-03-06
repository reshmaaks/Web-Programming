<?php 


include 'database.php';

$id=$_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="home.css">
</head>
<style>
    .container{
        margin-top : 100px;
    }
</style>
<body>
<form action="updateservice.php?id=<?php echo $id; ?>" method="post">
<div class="container">
    <?php
    
    $sql = "SELECT * FROM service where sid = '$id' ";
    $res=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($res);
    ?>
        
        <div class="col-md-4">
                            <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow-lg">
                            <div class="card-body">
                            <div class="filter-sidebar ">
                                <h3>Add a Service</h3>
                <div class="form-group">
                    <input type="text" name="sname" class="form-control" value="<?php echo $row['sername'];?>" placeholder="Service Name" required>
                </div>
                <div class="form-group">
                    <input type="number" name="fees" min="0" class="form-control"  value="<?php echo $row['serprize'];?>" placeholder="Fees" required>
                </div>
               
                
                <hr>
                <button type="submit" class="btn btn-danger">Submit</button>
                <button type="reset" class="btn btn-dark">Clear</button>
                <div class="pb-3"></div>
              </div>
            </div>
        </div>
    
        </div>
</form>

    
 
</body>
</html>