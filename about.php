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
    <div class="container">
            <div class="row">
                <div class="col-xs-4" style="width: 100%;">
                    <h1> About Us </h1>
    <p>Founded in December of 2020 and based in Pune, Maharashtra,India <strong>Lifestyle Store</strong> is a trusted community marketplace for people to Shop, discover, and search unique products such as watch,camera and shirts around the world - online.</p>
    <p>Whether a watch for a punctual lifestyle, a camera to capture the movements of life, or a shirt for special occasions. Lifestyle Store provides peoples with best quality product, at any price point, in more than 5,000 cities and 20 countries. And with world-class customer service and a growing community of users, Lifestyle Store is the easiest way for people to buy products that will insluence their living standards.</p>
    <h1>Our Achivements</h1>
                </div>
            </div>
        </div>
        <div class="row text-center alide" style="padding-left: 300px;">

        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/webt
                .jpg" alt="Cameras">
                <div class="caption">
                    <h3>Cameras</h3>
                    <p>Choose among the best available .</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/watch.jpg" alt="Watches">
                <div class="caption">
                    <h3>Watches</h3>
                    <p>Original watches for you.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail ">
                <img src="img/shirt.jpg" alt="Shirts">
                <div class="caption">
                    <h3>Shirts</h3>
                    <p>Our Exquisite collection of shirts</p>
                </div>
            </div>
        </div>
    </div>
<?php
    require "includes/footer.php";
?>
</body>
</html>