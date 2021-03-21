<?php
require "includes/common.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
require "includes/header.php"
?>
    <div class="container center_div">
            <div class="row" style="margin-left: 300px;">
                <div class="col-xs-4">
                    <h1> Contact Us </h1>
                    <form method="post" action="contact_script.php">
                        <center>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="name"  placeholder="Name" required="true">
                        </div>
                        <div class="form-group">
                            <input type="email"  class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true">
                        </div>
                        <div class="form-group">
                            <input type="number"  class="form-control" name="contact" placeholder="Contact"  pattern="[789][0-9]{9}" required="true">
                        </div>
                        <div class="form-group">
                            <textarea name="msg" placeholder="Your Query" required="true" rows="10" cols="28"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary ">Submit</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br>
<?php
    require "includes/footer.php";
?>
</body>
</html>