<?php
require '../../../layout/--front/header.php';
$category =  mysqli_query($conn, "SELECT * FROM tbl_category WHERE status_category='0'");
$brand =  mysqli_query($conn, "SELECT * FROM tbl_brand WHERE status_brand='0'");
$product = mysqli_query($conn, "SELECT * FROM tbl_product WHERE status_product='0'");
// var_dump($_GET);


$name_category = $_GET['san-pham'];
$category_1 = mysqli_query($conn, "SELECT * FROM tbl_category WHERE name='$name_category'");
$cate = mysqli_fetch_assoc($category_1);
$id_cate = $cate['id_category'];


//brand



// var_dump($product_1);
if (isset($_GET['san-pham'])) {
	$sp = $_GET['san-pham'];
	if (isset($_GET['brand'])) {
		$br = $_GET['brand'];
	} else {
		$br = 1;
	}
} else {
	$sp = 1;
}
// echo $sp,$br;

// $name_brand = $br;
// $brand_1 = mysqli_query($conn, "SELECT * FROM tbl_brand WHERE name='$name_brand'");
// $brandd = mysqli_fetch_assoc($brand_1);
// var_dump($brandd);
// $id_brand = $brandd['id_brand'];
// $product_1 = mysqli_query($conn, "SELECT *FROM tbl_product WHERE id_category= '$id_cate' AND id_brand = 'id_brand'");


// echo $sp;
// echo $br;
if (isset($_GET["page"])) {
	$trang = $_GET["page"];
} else {
	$trang = 1;
}

$sotintrang = 6;


$form = ($trang - 1) * $sotintrang;
//test	
$product_num = mysqli_query($conn, "SELECT *FROM tbl_product WHERE id_category= '$id_cate' ");
$product_page = mysqli_query($conn, "SELECT *FROM tbl_product WHERE id_category= '$id_cate' LIMIT $form, $sotintrang");
//
$name_brand = $br;
if ($br != 1) {
	$name_brand = $br;
	$bra = mysqli_query($conn, "SELECT * FROM tbl_brand WHERE name='$br'");
	$brand1 = mysqli_fetch_assoc($bra);
	$id_brand = $brand1['id_brand'];
	// echo $id_brand;
	$product_num = mysqli_query($conn, "SELECT *FROM tbl_product WHERE id_brand= '$id_brand' AND id_category= '$id_cate' ");
	$product_page = mysqli_query($conn, "SELECT *FROM tbl_product WHERE id_brand= '$id_brand' AND id_category= '$id_cate' LIMIT $form, $sotintrang");
}



//loc page


$product_NN = mysqli_query($conn, "SELECT * FROM tbl_product WHERE status_product='0' ORDER BY RAND() LIMIT $form, $sotintrang");
// foreach ($product_NN as $key => $value_product) :
// 	echo $value_product['name'];
// 	echo strlen($value_product['name']);
// 	echo "<br />";
// endforeach;
// $tongsotin = mysqli_num_rows($product_NN);
// echo $sotrang =ceil($tongsotin/$sotintrang);

$tongsotin = mysqli_num_rows($product_num);
// echo $tongsotin;
$sotrang = ceil($tongsotin / $sotintrang);
//price range
$minimum_range = 1800000;
$maximum_range = 3500000;



// echo $_POST["minimum_range"];
// echo $_POST["maximum_range"];

if (isset($_POST["minimum_range"]) && isset($_POST["maximum_range"])) {
	$mimum_range_check = $_POST["minimum_range"];
	$maximum_range_check = $_POST['maximum_range'];
		// echo $br,$sp;
		if($sp!=1){
			if($br!=1){
				$query = "SELECT * FROM tbl_product WHERE id_category = '$id_cate' AND id_brand= '$id_brand' AND price BETWEEN '" . $_POST["minimum_range"] . "' AND '" . $_POST["maximum_range"] . "'  ORDER BY price ASC LIMIT $form, $sotintrang";
			}
			else{
				$query = "SELECT * FROM tbl_product WHERE id_category = '$id_cate' AND price BETWEEN '" . $_POST["minimum_range"] . "' AND '" . $_POST["maximum_range"] . "'  ORDER BY price ASC LIMIT $form, $sotintrang";
			}
		}
		

	$product_page = mysqli_query($conn, $query);
	$produ = mysqli_fetch_assoc($product_page);
	// var_dump($produ);
} else {
	$mimum_range_check = 1;
	$maximum_range_check = 1;
}

?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Category</h2>
					<div class="panel-group category-products" id="accordian">
						<!--category-productsr-->
						<?php foreach ($category as $key => $value_category) :
							$num_category = $value_category['id_category'];
							$num_product_category =  mysqli_query($conn, "SELECT * FROM tbl_product WHERE id_category = $num_category"); ?>
							<!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="../../../view/--front/shop/shop_category.php?san-pham=<?php echo $value_category['name'] ?>">
											<span class="pull-right">(<?php
																		if ($name_category == $value_category['name']) {
																			echo '<span  style="color:blue;">' . mysqli_num_rows($num_product_category) . '</span>';
																		} else {
																			echo mysqli_num_rows($num_product_category);
																		}
																		?>)
											</span>
											<?php
											if ($name_category == $value_category['name']) {
												echo '<div  style="color:blue;">' . $value_category['name'] . '</div>';
											} else {
												echo  $value_category['name'];
											}

											?>
										</a>
									</h4>
								</div>
							</div>
						<?php endforeach ?>
					</div>
					<div class="brands_products">

						<!--brands_products-->
						<h2>Brands</h2>
						<div class="brands-name">
							<?php foreach ($brand as $key => $value_brand) :
								$num_brand = $value_brand['id_brand'];
								$num_product_brand =  mysqli_query($conn, "SELECT * FROM tbl_product WHERE id_brand = $num_brand AND id_category=$id_cate"); ?>
								<ul class="nav nav-pills nav-stacked">
									<li><a href="../../../view/--front/shop/shop_category.php?san-pham=<?php echo $sp ?>&brand=<?php echo $value_brand['name'] ?>">
											<span class="pull-right">(<?php
																		if ($name_brand == $value_brand['name']) {
																			echo '<span  style="color:blue;">' . mysqli_num_rows($num_product_brand) . '</span>';
																		} else {
																			echo mysqli_num_rows($num_product_brand);
																		}
																		?>)
											</span>
											<?php
											if ($name_brand == $value_brand['name']) {
												echo '<div  style="color:blue;">' . $value_brand['name'] . '</div>';
											} else {
												echo  $value_brand['name'];
											}

											?>
										</a>
									</li>
								</ul>
							<?php endforeach ?>
						</div>

					</div>
					<!--/brands_products-->


					<div class="price-range">
						<div id="slider-range"></div>
						<form method="post" action="shop_category.php?san-pham=<?php echo $sp ?>&brand=<?php echo $br ?>">
							<h2>Price Range</h2>
							<div class="row">
								<form action="shop.php" method="post">
									<div class="col-md-2">
										<input type="text" name="minimum_range" id="minimum_range" class="form-control" value="<?php echo $minimum_range; ?>" />
									</div>
									<div class="col-md-100">
										<input type="text" name="maximum_range" id="maximum_range" class="form-control" value="<?php echo $maximum_range; ?>" />
									</div>
									<div class="col-md-8" style="padding-top:12px">
										<div id="price_range"></div>
									</div>
									<div class="col-md-loc-price"></br>
										<input type="submit" class="form-control" name="submit_range" value="choose price">
									</div>
								</form>
							</div>
							<br />
							<!-- <div id="load_product"></div> -->
						</form>
					</div>
					<!--/price-range-->

					<div class="shipping text-center">
						<!--shipping-->
						<img src="../../public/images/home/shipping.jpg" alt="" />
					</div>
					<!--/shipping-->

				</div>
			</div>

			<div class="col-sm-9 padding-right">
				<div class="features_items">
					<!--features_items-->
					<h2 class="title text-center">Features Items</h2>
					<?php foreach ($product_page as $key => $value_product) :

					?>
						<div class="col-sm-4">

							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="../../../<?php echo $value_product['image'] ?>" alt="" />
										<h2><?php echo $value_product['price'] ?>.đ</h2>
										<p><?php echo $value_product['name'] ?></p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2><?php echo $value_product['price'] ?>.đ</h2>
											<p><?php echo $value_product['name'] ?></p>
											<a href="../../../Controller/cart.php?id=<?php echo $value_product['id_product'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="../../../Controller/product.php?id=<?php echo $value_product['id_product'] ?>"><i class="fa fa-plus-square"></i>View details</a></li>
										<!-- <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li> -->
									</ul>
								</div>
							</div>

						</div>

					<?php endforeach ?>

				</div>

				<ul class="pagination">

					<li>

						<?php
						$x = mysqli_query($conn, "SELECT id_product FROM tbl_product ");
						$tongsotin = mysqli_num_rows($product);
						for ($t = 1; $t <= $sotrang; $t++) {
							if ($sotrang != 1) {
								if ($t == $trang) {
									echo '<a href="' . "shop_category.php?san-pham=$sp&brand= $br&page=$t" . '">' . $t;
								} else {
									echo '<a  style="color:black;" href="' . "shop_category.php?san-pham=$sp&brand= $br&page=$t" . '">' . $t;
								}
								// echo "<a  href='shop.php?page=$t'>$t</a>";
								// echo '<a  style="color:black;">' .$t;

							}
							if ($sotrang >= 3 && $t == $sotrang) {
								// echo "&raquo";
							}
						}
						?>


						<!-- <li><a></a></li> -->
						<!-- <li><a href="">3</a></li> -->

						<?php
						if ($sotrang >= 3) {
							echo '<a style="color:black;">&raquo</a>';
						}
						?>

					</li>
				</ul>
			</div>

			<!--features_items-->
		</div>
	</div>
	</div>
</section>
<?php
require "../../../layout/--front/footer.php"
?>
<html>

<head>
	<title>Make Price Range Slider using JQuery with PHP Ajax</title>
	<link rel="stylesheet" href="../../../public/--front/css/jquery-ui.css" />
	<link rel="stylesheet" href="../../../public/--front/css/bootstrap_min.css" />
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
	<!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>


</html>
<script>
	$(document).ready(function() {

		$("#price_range").slider({
			range: true,
			min: 100000,
			max: 5000000,
			values: [<?php echo $minimum_range; ?>, <?php echo $maximum_range; ?>],
			slide: function(event, ui) {
				$("#minimum_range").val(ui.values[0]);
				$("#maximum_range").val(ui.values[1]);
				load_product(ui.values[0], ui.values[1]);
			}
		});


		function load_product(minimum_range, maximum_range) {
			$.ajax({
				url: "fetch.php",
				method: "POST",
				data: {
					minimum_range: minimum_range,
					maximum_range: maximum_range
				},
				success: function(data) {
					$('#load_product').fadeIn('slow').html(data);
				}
			});
		}

	});
</script>
<?php

//fetch.php

?>