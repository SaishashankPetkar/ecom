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
    		<p>We have the best shirts for you. No need to hunt around, we have all in one place.</p>
    	</div>
        <div class="row text-center" id="shirt" style="padding-left: 0px;">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/8.jpg" alt="H&W">
                    <div class="caption">
                        <h3>H&W</h3>
                        <p>Price:Rs.800.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(9))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=9" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/6.jpg" alt="Luis Phil">
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>Price:Rs.1000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(10))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=10" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/13.jpg" alt="Jhon Zok">
                    <div class="caption">
                        <h3>Jhon Zok</h3>
                        <p>Price:Rs.1500.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(11))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=11" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/14.jpg" alt="Jhalsain">
                    <div class="caption">
                        <h3>Jhalsain</h3>
                        <p>Price:Rs.1300.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(12))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=12" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
                <div class="row text-center" id="shirt" style="padding-left: 0px;">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/31.jpg" alt="H&W">
                    <div class="caption">
                        <h3>GIORGIO ARMANI</h3>
                        <p>Price:Rs.60000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(29))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=29" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/32.jpg" alt="Luis Phil">
                    <div class="caption">
                        <h3>Gucci</h3>
                        <p>Price:Rs.65000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(30))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=30" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/33.jpg" alt="Jhon Zok">
                    <div class="caption">
                        <h3>Versace</h3>
                        <p>Price:Rs.38000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(31))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=31" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/34.jpg" alt="Jhalsain">
                    <div class="caption">
                        <h3>Philipp Plein</h3>
                        <p>Price:Rs.51000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(32))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=32" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
                <div class="row text-center" id="shirt" style="padding-left: 0px;">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/35.jpg" alt="H&W">
                    <div class="caption">
                        <h3>LOUIS VUITTON</h3>
                        <p>Price:Rs.70000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(33))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=33" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/36.jpg" alt="Luis Phil">
                    <div class="caption">
                        <h3>Burberry</h3>
                        <p>Price:Rs.55000.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(34))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=34" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/37.jpg" alt="Jhon Zok">
                    <div class="caption">
                        <h3>Tommy Hilfiger</h3>
                        <p>Price:Rs.6500.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(35))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=35" name="add" value="add" class="btn 
                                    btn-block btn-primary">Add to cart</a> <?php 
                                }
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/38.jpg" alt="Jhalsain">
                    <div class="caption">
                        <h3>Polo Ralph Lauren</h3>
                        <p>Price:Rs.10500.00</p>
                        <?php
                           if (!isset($_SESSION['email'])) 
                            { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                            } 
                           else { 
                               if (check_if_added_to_cart(36))
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart
                                    </a><?php
                                } 
                                else 
                                { ?><a href="cart-add.php?id=36" name="add" value="add" class="btn 
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