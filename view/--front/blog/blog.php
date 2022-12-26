<?php
require '../../../layout/--front/header.php';
include '../../../models/Homee.php';
include '../../../Controller/blog.php';
// var_dump($blog);
// foreach ($blog as $key => $value_blog) {
// 	echo $value_blog['date'];
// }
if (isset($_GET["page"])) {
	$trang = $_GET["page"];
} else {
	$trang = 1;
}

$sotintrang = 2;


$form = ($trang - 1) * $sotintrang;
$blog_NN = mysqli_query($conn, "SELECT * FROM tbl_baiviet  LIMIT $form, $sotintrang");
$tongsotin = mysqli_num_rows($blog);
$sotrang = ceil($tongsotin / $sotintrang);
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

					<div class="price-range">
						<!--price-range-->
						<h2>Price Range</h2>
						<div class="well">
							<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
							<b>$ 0</b> <b class="pull-right">$ 600</b>
						</div>
					</div>
					<!--/price-range-->

					<div class="shipping text-center">
						<!--shipping-->
						<img src="../../../public/--front/images/home/shipping.jpg" alt="" />
					</div>
					<!--/shipping-->
				</div>
			</div>
			<div class="col-sm-9">
				<div class="blog-post-area">
					<h2 class="title text-center">Latest From our Blog</h2>
					<?php foreach ($blog_NN as $key => $value_blog) :
					?>

						<div class="single-blog-post">
							<h3><?php echo $value_blog['title'] ?></h3>
							<div class="post-meta">
								<ul>
									<!-- <li><i class="fa fa-user"></i> Mac Doe</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li> -->
									<li><i class="fa fa-calendar"></i><?php echo $value_blog['date'] ?></li>
								</ul>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="">
								<img width="200" height="550" src="../../../<?php echo $value_blog['image'] ?>" alt="">
							</a>
							<p><?php echo $value_blog['description'] ?></p>
							<!-- <a class="btn btn-primary" href="">Read More</a> -->
						</div>
						<!-- <div class="single-blog-post">
							<h3>Girls Pink T Shirt arrived in store</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> Mac Doe</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
									<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
								</ul>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="">
								<img src="../../../public/--front/images/blog/blog-two.jpg" alt="">
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<a class="btn btn-primary" href="">Read More</a>
						</div>
						<div class="single-blog-post">
							<h3>Girls Pink T Shirt arrived in store</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> Mac Doe</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
									<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
								</ul>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="">
								<img src="../../../public/--front/images/blog/blog-three.jpg" alt="">
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<a class="btn btn-primary" href="">Read More</a>
						</div>-->

					<?php endforeach ?>
					<div class="pagination-area">
						<ul class="pagination">
							<li>
								<?php
								$tongsotin = mysqli_num_rows($blog);
								for ($t = 1; $t <= $sotrang; $t++) {
									if ($sotrang != 1) {
										if ($t == $trang) {
											echo '<a href="' . "blog.php?page=$t" . '">' . $t;
										} else {
											echo '<a  style="color:black;" href="' . "blog.php?page=$t" . '">' . $t;
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
				</div>
			</div>
		</div>
	</div>
</section>
<?php
require "../../../layout/--front/footer.php"
?>