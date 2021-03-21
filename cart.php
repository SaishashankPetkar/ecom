<?php
    session_start();
    require "includes/common.php";
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.itname,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $user_conf_empt="select it.id,it.itname,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id' and status='Confirmed'";
    $user_conf_result=mysqli_query($con,$user_conf_empt) or die(mysqli_error($con));
    $no_of_user_conf= mysqli_num_rows($user_conf_result);
    $sum=0;
    if($no_of_user_products==0){
        //echo "Add items to cart first.";
    ?>
        <script>
        window.alert("No items in the cart!!");
        </script>
        <meta http-equiv="refresh" content="0;url=products.php" />
    <?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['price']; 
       }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/stylecart.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	 <?php
     require "includes/header.php";
    ?>
    <br>
            <div class="container">
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
                            <th><a href='cart-remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
                            <th></th><th>Total</th><th>Rs <?php echo $sum;?>/-</th><th><a href="sucess.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php         
     require "includes/footer.php";
    ?>
</body>
</html>