<?php
session_start();
ob_start();

include "../../../connect/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>
    <link href="../../../public/--front/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/--front/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../../public/--front/css/prettyPhoto.css" rel="stylesheet">
    <link href="../../../public/--front/css/price-range.css" rel="stylesheet">
    <link href="../../../public/--front/css/animate.css" rel="stylesheet">
	<link href="../../../public/--front/css/main.css" rel="stylesheet">
	<link href="../../../public/--front/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../../public/--front/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../../public/--front/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../../public/--front/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../../public/--front/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="../../../public/--front/images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<!-- <ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="../checkout/checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="../cart/cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="../login/login.php"><i class="fa fa-lock"></i> Login</a></li>
								<li class="navbar-nav__logged">
									<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="img" class="navbar-nav__logged-img">
									<span class="navbar-nav__logged-username">Admin</span>
									<div class="navbar-nav__logout">Logout</div>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
	</header><!--/header-->
	

