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
    		<p>We have the best cameras for you. No need to hunt around, we have all in one place.</p>
    	</div>
    	<div class="row text-center" id="camera" style="padding-left: 0px;">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/5.jpg" alt="Cannon EOS">
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>Price:Rs.36000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(1))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=1" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/2.jpg" alt="Nikon DSLR">
                    <div class="caption">
                        <h3>Nikon DSLR</h3>
                        <p>Price:Rs.40000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(2))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=2" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/3.jpg" alt="Sony DSLR">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs.50000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(3))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=3" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/4.jpg" alt="Olympus DSLR">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price:Rs.80000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(4))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=4" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
                <div class="row text-center" id="camera" style="padding-left: 0px;">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/15.jpg" alt="Cannon 500D">
                    <div class="caption">
                        <h3>Cannon 500D</h3>
                        <p>Price:Rs.200000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(13))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=13" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/19.jpeg" alt="Sony Alpha A68">
                    <div class="caption">
                        <h3>Sony Alpha A68</h3>
                        <p>Price:Rs.60000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(14))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=14" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/20.jpeg" alt="Sony HXR-NX80">
                    <div class="caption">
                        <h3>Sony HXR-NX80</h3>
                        <p>Price:Rs.110000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(15))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=15" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/18.jpg" alt="Olympus OM-D">
                    <div class="caption">
                        <h3>Olympus OM-D</h3>
                        <p>Price:Rs.45000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(16))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=16" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="camera" style="padding-left: 0px;">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/23.jpg" alt="Cannon EOS">
                    <div class="caption">
                        <h3>Canon EOS 6D</h3>
                        <p>Price:Rs.300000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(17))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=17" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/24.jpg" alt="Nikon DSLR">
                    <div class="caption">
                        <h3>Nikon D750</h3>
                        <p>Price:Rs.260000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(18))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=18" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/25.jpeg" alt="Sony DSLR">
                    <div class="caption">
                        <h3>FUJIFILM GFX 50S</h3>
                        <p>Price:Rs.390000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(19))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=19" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/26.jpg" alt="Olympus DSLR">
                    <div class="caption">
                        <h3>Panasonic Lumix</h3>
                        <p>Price:Rs.170000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(20))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=20" name="add" value="add" class="btn 
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