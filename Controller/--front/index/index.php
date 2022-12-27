<?php
require '../../../connect/database.php';
require '../../../models/--front/shop.php';

session_start();
ob_start();


$product = get_shop_product($conn);
$brand = get_shop_brand($conn);
$category = get_shop_category($conn);

if (isset($_GET["page"])) {
	$trang = $_GET["page"];
} else {
	$trang = 1;
}

$sotintrang = 6;


$form = ($trang - 1) * $sotintrang;
if(isset($_GET["search"]) && !empty([$_GET["search"]])){
	$name_search = $_GET["search"];
	$product_NN = get_shop_product_page_search($conn,$name_search,$form,$sotintrang);
	$product_search=get_shop_product_search($conn,$name_search);    
	$product_sch = mysqli_fetch_assoc($product);
}
else{
	$product_NN = get_shop_product_page($conn,$form,$sotintrang);
}
if(isset($_GET["search"]) && !empty([$_GET["search"]])){
	$tongsotin = mysqli_num_rows($product_search);
}
else{
	$tongsotin = mysqli_num_rows($product);
}
$sotrang = ceil($tongsotin / $sotintrang);


//price range
$minimum_range = 1800000;
$maximum_range = 3500000;



// echo $_POST["minimum_range"];
// echo $_POST["maximum_range"];

if (isset($_POST["minimum_range"]) && isset($_POST["maximum_range"])) {
	$mimum_range_check = $_POST["minimum_range"];
	$maximum_range_check = $_POST['maximum_range'];
	$product_NN = get_shop_product_price_page($conn,$mimum_range_check,$maximum_range_check,$form,$sotintrang);
	$produ = mysqli_fetch_assoc($product_NN);
    $product=get_shop_product_price($conn,$mimum_range_check,$maximum_range_check);

} else {
	$mimum_range_check = 1;
	$maximum_range_check = 1;
}

require '../../../view/--front/home/index.php'; 
?>
<!--  -->



?>