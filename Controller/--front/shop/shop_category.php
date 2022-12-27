<?php
require '../../../connect/database.php';
require '../../../models/--front/shop_category.php';
session_start();
ob_start();

$product = get_shop_product($conn);
$brand = get_shop_brand($conn);
$category = get_shop_category($conn);


$name_category = $_GET['san-pham'];
$category_1 = get_shop_categoryname($conn, $name_category);
$cate = mysqli_fetch_assoc($category_1);
$id_cate = $cate['id_category'];



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
if (isset($_GET["page"])) {
	$trang = $_GET["page"];
} else {
	$trang = 1;
}

$sotintrang = 6;


$form = ($trang - 1) * $sotintrang;
//test	
$product_num = get_shop_product_num($conn,$id_cate);
$product_page = get_shop_product_page($conn,$id_cate,$form,$sotintrang);
//
$name_brand = $br;
if ($br != 1) {
	$name_brand = $br;
	$bra = mysqli_query($conn, "SELECT * FROM tbl_brand WHERE name='$br'");
	$brand1 = mysqli_fetch_assoc($bra);
	$id_brand = $brand1['id_brand'];
	// echo $id_brand;
	$product_num = get_shop_product_brand_num($conn, $id_cate,$id_brand);
	$product_page = get_shop_product_brand_page($conn, $id_cate,$id_brand, $form, $sotintrang);
 

}

//loc page


// $product_NN = mysqli_query($conn, "SELECT * FROM tbl_product WHERE status_product='0' ORDER BY RAND() LIMIT $form, $sotintrang");

$tongsotin = mysqli_num_rows($product_num);
$sotrang = ceil($tongsotin / $sotintrang);
//price range
$minimum_range = 1800000;
$maximum_range = 3500000;




if (isset($_POST["minimum_range"]) && isset($_POST["maximum_range"])) {
	$mimum_range_check = $_POST["minimum_range"];
	$maximum_range_check = $_POST['maximum_range'];
		if($sp!=1){
			if($br!=1){
                $product_page = get_shop_product_brand_page_price($conn, $id_cate,$id_brand, $mimum_range_check,$maximum_range_check,$form, $sotintrang);
			}
			else{
                $product_page = get_shop_product_nobrand_page_price($conn, $id_cate, $mimum_range_check,$maximum_range_check,$form, $sotintrang);
			}
		}
		

	
	$produ = mysqli_fetch_assoc($product_page);
} else {
	$mimum_range_check = 1;
	$maximum_range_check = 1;
}
require '../../../view/--front/shop/shop_category.php'; 

?>