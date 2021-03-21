<?php
require "includes/common.php";
session_start();
if (!isset($_SESSION['email'])) 
{ header('location: index.php'); }
$id=$_SESSION['id'];
$uname_script="select name from users where id=$id";
$uname_query_result=mysqli_query($con,$uname_script) or die(mysqli_error($con));
$uname=mysqli_fetch_assoc($uname_query_result);
$user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.itname,it.price from users_items ut inner join items it on it.id=ut.item_id where status='Confirmed' and ut.user_id='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/stylesetting.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php
       require "includes/header.php"
    ?>
    <div class="container center_div">
            <div class="row">
                <div class="col-xs-4" style="width: 50%;">
                    <h1> Hello, <?php echo $uname['name']; ?> <br> Your Orders Are:</h1>
                    <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Item Number</th><th>Item Name</th><th>Price</th><th></th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th><?php echo $row['itname']?></th><th><?php echo $row['price']?></th>
                            <th><a href='cancle-order.php?id=<?php echo $row['id'] ?>'>Cancle</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php
    require "includes/footer.php"
    ?>
</body>
</html>