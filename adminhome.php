<?php
    session_start();
    require "includes/common.php";
    $user_products_query="select * from users";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Lifestyle Store</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href = "adminhome.php"><span class = "glyphicon glyphicon-user"></span>Users</a></li>
          <li><a href = "item.php"><span class = "glyphicon glyphicon-shopping-cart"></span>Items</a></li>
          <li><a href = "order.php"><span class = "glyphicon glyphicon-gift"></span>Orders</a></li>
          <li><a href = "queries.php"><span class = "glyphicon glyphicon-comment"></span>Queries</a></li>
          </ul> 
      </div> 
    </div> 
  </div>
  <br><br><br>
  <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Sr.No.</th><th>Name</th><th>Email</th><th>Phone</th><th>Address</th>
                        </tr>
                        <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){ 
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th><?php echo $row['name']?></th><th><?php echo $row['email']?></th><th><?php echo $row['contact']?></th><th><?php echo $row['address']?></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                       </tbody>
                </table>
            </div>
</body>
</html>