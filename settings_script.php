<?php
require "includes/common.php";
session_start();
$email_id=mysqli_real_escape_string($con,$_POST['email']);
$regex_email="/^[a-zA-Z\d][a-zA-Z\d\._-]+@[a-zA-Z\d\._-]+\.[a-zA-Z\.]{2,}$/";
    if(!preg_match($regex_email,$email_id)){
        echo "Incorrect email. Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="1;url=settings.php" />
        <?php
    }
$n_passwords=mysqli_real_escape_string($con,$_POST['password']);
$n_passwords=md5($n_passwords);
if(strlen($n_passwords)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="1;url=settings.php" />
        <?php
    }
$sle="SELECT * FROM users where email='$email_id'";
$sle_result=mysqli_query($con,$sle) or die(mysqli_error($con));
$row=mysqli_fetch_array($sle_result);
$id=$row['id'];
if (mysqli_num_rows($sle_result)>0) {
	$update="UPDATE users SET password='$n_passwords' where id='$id'";
	$user_registration_done = mysqli_query($con, $update) or die(mysqli_error($con));
    header('location: login.php');
}
?>