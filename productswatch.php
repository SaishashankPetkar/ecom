<?php 
session_start();
require "includes/check-if-added.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styleproducts.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
       require "includes/header.php"
    ?>
    <div class="container">
    	<div class="jumbotron">
    		<h1>Welcome to our Lifestyle Store!</h1>
    		<p>We have the best watches for you. No need to hunt around, we have all in one place.</p>
    	</div>
    	<div class="row text-center" id="watch" style="padding-left: 0px;">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/9.jpg" alt="Titan Model #301">
                    <div class="caption">
                        <h3>Titan Model #301</h3>
                        <p>Price:Rs.13000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(5))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=5" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/10.jpg" alt="Titan Model #201">
                    <div class="caption">
                        <h3>Titan Model #201</h3>
                        <p>Price:Rs.3000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(6))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=6" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/11.jpg" alt="HMT Milan">
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price:Rs.8000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(7))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=7" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/12.jpg" alt="Faber Luba #111">
                    <div class="caption">
                        <h3>Faber Luba #111</h3>
                        <p>Price:Rs.18000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(8))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=8" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="watch" style="padding-left: 0px;">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/22.jpg" alt="Titan Model #301">
                    <div class="caption">
                        <h3>Titan 1717b</h3>
                        <p>Price:Rs.8000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(21))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=21" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/21.jpg" alt="Titan Model #201">
                    <div class="caption">
                        <h3>Titan 1830k</h3>
                        <p>Price:Rs.15000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(22))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=22" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/17.jpg" alt="HMT Milan">
                    <div class="caption">
                        <h3>HMT Originals</h3>
                        <p>Price:Rs.5000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(23))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=23" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/16.jpg" alt="Faber Luba #111">
                    <div class="caption">
                        <h3>Rado Centrix</h3>
                        <p>Price:Rs.160000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(24))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=24" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="watch" style="padding-left: 0px;">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/29.jpg" alt="Titan Model #301">
                    <div class="caption">
                        <h3>Rolex Daytona</h3>
                        <p>Price:Rs.4685000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(25))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=25" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/30.jpg" alt="Titan Model #201">
                    <div class="caption">
                        <h3>TAG HEUER Carrera</h3>
                        <p>Price:Rs.1432000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(26))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=26" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/27.jpg" alt="HMT Milan">
                    <div class="caption">
                        <h3>Hublot Classic Fusion</h3>
                        <p>Price:Rs.1800000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(27))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=27" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/28.jpg" alt="Faber Luba #111">
                    <div class="caption">
                        <h3>MAD Paris Ghost</h3>
                        <p>Price:Rs.36000000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(28))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=28" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    require "includes/footer.php"
?>
</body>
</html>