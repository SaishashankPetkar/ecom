<?php
require "includes/common.php";
session_start();
$username=mysqli_real_escape_string($con,$_POST['username']);
echo $username;
$regex_username="/^[a-zA-Z\d]+$/";
    if(!preg_match($regex_username,$username)){
        echo "Incorrect username. Redirecting you back to admin login...";
        ?>
        <meta http-equiv="refresh" content="1;url=admin.php" />
        <?php
    }
$passwords=mysqli_real_escape_string($con,$_POST['password']);
echo $passwords;
if(strlen($passwords)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to admin login...";
        ?>
        <meta http-equiv="refresh" content="1;url=admin.php" />
        <?php
    }
$login="SELECT username FROM admin WHERE username='$username' and password='$passwords' ";
$login_result=mysqli_query($con,$login) or die(mysqli_error($con));
if (mysqli_num_rows($login_result)>0) {
	?>
        <script>
            window.alert("Wrong username or password");
        </script>
        <meta http-equiv="refresh" content="1;url=admin.php" />
        <?php
}
else{
	$row=mysqli_fetch_array($login_result);
	$_SESSION['username']=$username;
	$_SESSION['password']=$passwords;
	header('location: adminhome.php');
}
?>