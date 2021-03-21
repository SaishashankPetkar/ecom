<?php
require "includes/common.php";
session_start();
$email_id=mysqli_real_escape_string($con,$_POST['email']);
$regex_email="/^[a-zA-Z\d][a-zA-Z\d\._-]+@[a-zA-Z\d\._-]+\.[a-zA-Z\.]{2,}$/";
    if(!preg_match($regex_email,$email_id)){
        echo "Incorrect email. Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="1;url=login.php" />
        <?php
    }
$passwords=mysqli_real_escape_string($con,$_POST['password']);
$passwords=md5($passwords);
if(strlen($passwords)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="1;url=login.php" />
        <?php
    }
$login="SELECT id, email FROM users WHERE email='$email_id' And password='$passwords'";
$login_result=mysqli_query($con,$login) or die(mysqli_error($con));
if (mysqli_num_rows($login_result)==0) {
	?>
        <script>
            window.alert("Wrong email ID or password");
        </script>
        <meta http-equiv="refresh" content="1;url=login.php" />
        <?php
}
else{
	$row=mysqli_fetch_array($login_result);
	$_SESSION['email']=$email_id;
	$_SESSION['id']=$row['id'];
	header('location: products.php');
}
?>