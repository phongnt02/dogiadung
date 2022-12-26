<?php
require '../../../layout/--front/header.php';
$product_detail = (isset($_SESSION['product'])) ? $_SESSION['product'] : [];
include '../../../models/Homee.php';

// echo "<pre>";
// print_r($_SESSION['product']);

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
										<a href="../../../view/--front/shop/shop_category.php?san-pham=<?php
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
					<!--/price-range-->

					<div class="shipping text-center">
						<!--shipping-->
						<img src="../../public/images/home/shipping.jpg" alt="" />
					</div>
					<!--/shipping-->

				</div>
			</div>

			<div class="col-sm-9 padding-right">
				<div class="product-details">
					<!--product-details-->
					<div class="col-sm-5">
						<div class="view-product">
							<img src="../../../<?php echo $product_detail['image']; ?>" alt="" />
							<!-- <h3>ZOOM</h3> -->
						</div>
						<div id="similar-product" class="carousel slide" data-ride="carousel">

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<a href=""><img src="../../public/images/product-details/similar1.jpg" alt=""></a>
									<a href=""><img src="../../public/images/product-details/similar2.jpg" alt=""></a>
									<a href=""><img src="../../public/images/product-details/similar3.jpg" alt=""></a>
								</div>
								<div class="item">
									<a href=""><img src="../../public/images/product-details/similar1.jpg" alt=""></a>
									<a href=""><img src="../../public/images/product-details/similar2.jpg" alt=""></a>
									<a href=""><img src="../../public/images/product-details/similar3.jpg" alt=""></a>
								</div>
								<div class="item">
									<a href=""><img src="../../public/images/product-details/similar1.jpg" alt=""></a>
									<a href=""><img src="../../public/images/product-details/similar2.jpg" alt=""></a>
									<a href=""><img src="../../public/images/product-details/similar3.jpg" alt=""></a>
								</div>

							</div>

							<!-- Controls -->
							<a class="left item-control" href="#similar-product" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a class="right item-control" href="#similar-product" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>

					</div>
					<div class="col-sm-7">
						<div class="product-information">
							<form method="GET" action="../../../Controller/cart.php">
								<!--/product-information-->
								<img src="../../<?php echo $product_detail ['image']; ?>" class="newarrival" alt="" />
								<h2><?php echo $product_detail ['name']; ?></h2>
								<p>Web ID: <?php echo $product_detail ['id']; ?></p>
								<img src="../../public/images/product-details/rating.png" alt="" />
								<span>

									<span><?php echo $product_detail ['price']; ?> đ</span>
									<label>Quantity:</label>
									<input type="text"name="quantity" value="1" />
									<input type="hidden" name="id" value="<?php echo $product_detail ['id'] ?>">
									<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
								<!-- <p><b>Availability:</b> In Stock</p>
							<p><b>Condition:</b> New</p> -->
								<p><b>Brand:</b> <?php echo $product_detail ['name_brand']; ?></p>
								<p><b>Description:</b> <?php echo $product_detail ['description']; ?></p>
								<a href=""><img src="../../public/images/product-details/share.png" class="share img-responsive" alt="" /></a>
							</form>
						</div>
						<!--/product-information-->
					</div>
				</div>
				<!--/product-details-->

				<div class="category-tab shop-details-tab">
					<!--category-tab-->
					<div class="col-sm-12">
						<ul class="nav nav-tabs">
							<li><a href="#details" data-toggle="tab">Details</a></li>
							<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
							<li><a href="#tag" data-toggle="tab">Tag</a></li>
							<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane fade" id="details">
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="../../public/images/home/gallery1.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="../../public/images/home/gallery2.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="../../public/images/home/gallery3.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="../../public/images/home/gallery4.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="companyprofile">
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="../../public/images/home/gallery1.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="../../public/images/home/gallery3.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="../../public/images/home/gallery2.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="../../public/images/home/gallery4.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="tag">
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="../../public/images/home/gallery1.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="../../public/images/home/gallery2.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="../../public/images/home/gallery3.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="../../public/images/home/gallery4.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade active in" id="reviews">
							<div class="col-sm-12">
								<ul>
									<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
									<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
									<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								<p><b>Write Your Review</b></p>

								<form action="#">
									<span>
										<input type="text" placeholder="Your Name" />
										<input type="email" placeholder="Email Address" />
									</span>
									<textarea name=""></textarea>
									<b>Rating: </b> <img src="../../public/images/product-details/rating.png" alt="" />
									<button type="button" class="btn btn-default pull-right">
										Submit
									</button>
								</form>
							</div>
						</div>

					</div>
				</div>
				<!--/category-tab-->

				<div class="recommended_items">
					<!--recommended_items-->
					<h2 class="title text-center">recommended items</h2>

					<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="../../public/images/home/recommend1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="../../public/images/home/recommend2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="../../public/images/home/recommend3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="../../public/images/home/recommend1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="../../public/images/home/recommend2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="../../public/images/home/recommend3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
				<!--/recommended_items-->

			</div>
		</div>
	</div>
</section>
<?php
require "../../../layout/--front/footer.php"
?>