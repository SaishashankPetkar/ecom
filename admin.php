<?php
require "includes/common.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container containerlo">
            <div class="row row_style" style="padding-top: 100px; margin-left: 300px;">
                <div class="col-xs-6">
                <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Admin Login</h4>
                        </div>
                 <div class="panel-body">
                            <p class="text-warning">Login To Get Access To Admin Panle</p>
                    <form method="post" action="admin_submit.php">
                        <div class="form-group">
                            <input type="username"  class="form-control" name="username"  placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="password" placeholder="Password">
                        </div>
                        <button class="btn btn-primary">Login</button>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>