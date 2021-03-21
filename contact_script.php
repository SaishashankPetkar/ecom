<?php
require "includes/common.php";
session_start();
$sum=0;
$name=mysqli_real_escape_string($con,$_POST['name']);
$r_name="/^[a-zA-z\s]+$/";
if (!preg_match($r_name, $name)) {
  echo "Incorrect Name. Redirecting you back to contact page...<br>";
  $sum=$sum+1;
}
$email=mysqli_real_escape_string($con,$_POST['email']);
$r_email="/^[a-zA-Z\d][a-zA-Z\d\._-]+@[a-zA-Z\d\._-]+\.[a-zA-Z\.]{2,}$/";
 if(!preg_match($r_email,$email)){
        echo "Incorrect email. Redirecting you back to contact page...<br>";
        $sum=$sum+1;
    }
$contact=$_POST['contact'];
$r_contact="/^[789][0-9]{9}$/";
if (!preg_match($r_contact, $contact)) {
  echo "Please enter correct contact number. Redirecting you back to contact page...<br>";
  $sum=$sum+1;
}
$message=mysqli_real_escape_string($con,$_POST['msg']);
if ($sum>0) {
  ?>
  <meta http-equiv="refresh" content="2;url=contact.php" />
  <?php
}
else{
	$query_registration = "INSERT INTO contact(name, email, contact, msg) VALUES ('$name',
    '$email', '$contact', '$message')";
  $query_registration_done = mysqli_query($con, $query_registration) or die(mysqli_error($con));
	?>
         <script>
            window.alert("Your Query Has Been Submitted , We Will Contact You As Soon As Possible");
        </script>
        <meta http-equiv="refresh" content="2;url=index.php" />
  <?php
}
?>