<?php
require "includes/common.php";
session_start();
$sum=0;
$name=mysqli_real_escape_string($con,$_POST['name']);
$r_name="/^[a-zA-z\s]+$/";
if (!preg_match($r_name, $name)) {
  echo "Incorrect Name. Redirecting you back to signup page...<br>";
  $sum=$sum+1;
}
$email=mysqli_real_escape_string($con,$_POST['email']);
$r_email="/^[a-zA-Z\d][a-zA-Z\d\._-]+@[a-zA-Z\d\._-]+\.[a-zA-Z\.]{2,}$/";
 if(!preg_match($r_email,$email)){
        echo "Incorrect email. Redirecting you back to signup page...<br>";
        $sum=$sum+1;
    }
$password=mysqli_real_escape_string($con,$_POST['password']);
$password=md5($password);
if(strlen($password)<6) {
  echo "Password should have atleast 6 characters. Redirecting you back to signup page...<br>";
        $sum=$sum+1;
}
$contact=$_POST['contact'];
$r_contact="/^[789][0-9]{9}$/";
if (!preg_match($r_contact, $contact)) {
  echo "Please enter correct contact number. Redirecting you back to signup page...<br>";
  $sum=$sum+1;
}
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);

$signup="SELECT id FROM users WHERE email='$email'";
$signup_result=mysqli_query($con,$signup) or die(mysqli_error($con));
if (mysqli_num_rows($signup_result)>0) {
  $sum=$sum+1;
  ?>
	       <script>
            window.alert("Email already exists in our system!");
        </script>
  <?php
}
if ($sum>0) {
  ?>
  <meta http-equiv="refresh" content="5;url=signup.php" />
  <?php
}
else{
	$user_registration = "INSERT INTO users(name, email, password,contact,city,address) VALUES ('$name',
    '$email','$password', '$contact','$city','$address')";
  $user_registration_done = mysqli_query($con, $user_registration) or die(mysqli_error($con));
  echo "User successfully registered";
  $id=mysqli_insert_id($con);
	$_SESSION['email']=$email;
	$_SESSION['id']=$id;
	?>
        <meta http-equiv="refresh" content="2;url=products.php" />
  <?php
}
?>