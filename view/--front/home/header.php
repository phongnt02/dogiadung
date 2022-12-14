<?php

require "../../../Controller/cart_function.php";
// $tbl_login = $_SESSION['tbl_login'];
// $cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
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
	<link rel="stylesheet" href="../../../public/--front/css/jquery-ui.css" />
	<link rel="stylesheet" href="../../../public/--front/css/bootstrap_min.css" />
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
	<!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<!--/head-->

<body>
	<header id="header">
		<!--header-->
		<div class="header_top">
			<!--header_top-->
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
		</div>
		<!--/header_top-->

		<div class="header-middle">
			<!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="../../../public/--front/images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<!-- <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> -->
								<li><a href="../../../Controller/--front/checkout/checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="../../../Controller/--front/cart/view_cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<!-- <li><a href="../login/login.php"><i class="fa fa-lock"></i> Login</a></li> -->
								<li class="navbar-nav__logged">
									<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="img" class="navbar-nav__logged-img">
									<span class="navbar-nav__logged-username"></span>
									<form action="../../../Controller/--front/home/home.php" method="">
	
									<button type="submit" class="navbar-nav__logout">Logout</button>
									</form>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-middle-->

		<div class="header-bottom">
			<!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="../home/index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="../../../Controller/--front/login/login.php">Products</a></li>
										<!-- <li><a href="../product-detail/product-detail.php">Product Details</a></li>  -->
										<li><a href="../../../Controller/--front/login/login.php">Checkout</a></li>
										<li><a href="../../../Controller/--front/login/login.php">Cart</a></li>
										<li><a href="../../../Controller/--front/login/login.php">Login</a></li>
									</ul>
								</li>
								<li><a href="../../../Controller/--front/login/login.php">Blog</a></li>
								<li><a href="../../../Controller/--front/login/login.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<form action="../../../Controller/--front/login/login.php" method="get">
							<div  class="search_box pull-right">
								<input type="text" name ="search" placeholder="Search" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--/header-bottom-->
	</header>
	<!--/header-->