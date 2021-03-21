<?php
require "includes/common.php";
session_start();
$user_id=$_SESSION['id'];
$item_id=$_GET['id'];
$delete="DELETE FROM users_items WHERE user_id=$user_id and item_id=$item_id and status='Confirmed'";
mysqli_query($con,$delete);
header('location:products.php');
?>