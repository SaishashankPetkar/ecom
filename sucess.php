<?php
require "includes/common.php";
session_start();
if(!isset($_SESSION['email']))
{
  header('location: index.php');
}
else{
    $user_id=$_GET['id'];
    $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
    $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
}
$id=$_SESSION['id'];
$uname_script="select name from users where id=$id";
$uname_query_result=mysqli_query($con,$uname_script) or die(mysqli_error($con));
$uname=mysqli_fetch_assoc($uname_query_result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/stylesucess.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
	    <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Lifestyle Store</a>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="container center_div">
    	<h1>Hello, <?php echo $uname['name']; ?><br>Your order is confirmed. <br>Thank you for shopping with us. <br>
    		<a href="products.php">Click here</a> to purchase any other item
    	</h1>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div style="background: black;">
    <?php
    require "includes/footer.php"
    ?>
    </div>
</body>
</html>
