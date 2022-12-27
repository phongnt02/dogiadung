<?php
require 'header.php';
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
										<a href="../../../Controller/--front/shop/shop_category.php?san-pham=<?php
																										echo $value_category['name'];

																										?>">
											<span class="pull-right">(<?php echo mysqli_num_rows($num_product_category) ?>)</span><?php echo $value_category['name'] ?>
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
								$num_product_brand =  mysqli_query($conn, "SELECT * FROM tbl_product WHERE id_brand = $num_brand"); ?>
								<ul class="nav nav-pills nav-stacked">

									<li><a href=""> <span class="pull-right">(<?php echo mysqli_num_rows($num_product_brand) ?>)</span><?php echo $value_brand['name'] ?></a></li>
								</ul>
							<?php endforeach ?>
						</div>

					</div>
					<!--/brands_products-->


					
					<!--/price-range-->

					<div class="shipping text-center">
						<!--shipping-->


					</div>
					<!--/shipping-->

				</div>
			</div>

			<div class="col-sm-9 padding-right">
				<div class="features_items">
					<!--features_items-->
					<h2 class="title text-center">Features Items</h2>
					<?php foreach ($product_NN as $key => $value_product) : ?>
						<div class="col-sm-4">

							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="../../../<?php echo $value_product['image'] ?>" alt="" />
										<h2><?php echo $value_product['price'] ?>.đ</h2>
										<p><?php echo $value_product['name'];
											if (strlen($value_product['name']) == 44 || strlen($value_product['name']) == 33 || strlen($value_product['name']) == 36 || strlen($value_product['name']) == 43 || strlen($value_product['name']) == 48) {
												echo "<br />";
												echo "<br />";
											} ?></p>
										<!-- </br> -->
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2><?php echo $value_product['price'] ?>.đ</h2>
											<p><?php echo $value_product['name'];

												?></p>
											<a href="../../../Controller/--front/cart/cart.php?id=<?php echo $value_product['id_product'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="../../../Controller/--front/product/product.php?id=<?php echo $value_product['id_product'] ?>"><i class="fa fa-plus-square"></i>View details</a></li>
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
								if(isset($_GET["search"])){
									$search =$_GET["search"];
									if($t ==$trang){
										echo '<a href="' . "shop.php?search=$search&page=$t" . '">' . $t;
									}
									else{
										echo '<a  style="color:black;" href="' . "../../../Controller/--front/login/login.php" . '">' . $t;
									}
								}
								else{
									if($t ==$trang){
										echo '<a href="' . "shop.php?page=$t" . '">' . $t;
									}
									else{
										echo '<a  style="color:black;" href="' . "../../../Controller/--front/login/login.php" . '">' . $t;
									}
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

<?php

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