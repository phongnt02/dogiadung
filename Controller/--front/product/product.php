

<?php


require '../../../connect/database.php';
require '../../../models/--front/shop.php';
session_start();
ob_start();
if(isset($_GET['id'])){
    $id_product=$_GET['id'];
}
$query = mysqli_query($conn,"SELECT * FROM tbl_product WHERE id_product =$id_product");
if($query){
$product_id=mysqli_fetch_assoc($query);
}
$id_brand=$product_id['id_brand'];
$brand_id=mysqli_query($conn,"SELECT * FROM tbl_brand WHERE id_brand=$id_brand" );
$brand_id=mysqli_fetch_assoc($brand_id);
$item =[
    'id'=>$product_id['id_product'],
    'name'=>$product_id['name'],
    'image'=>$product_id['image'],
    'price'=>$product_id['price'],
    'name_brand'=>$brand_id['name'],
    'description'=>$product_id['description'],
]; 
$product_detail = $item;

$product = get_shop_product($conn);
$brand = get_shop_brand($conn);
$category = get_shop_category($conn);


// header('location: ../view/--front/product-detail/product-detail.php');
// echo "<pre>";
// print_r($_SESSION['product']);
//them moi vao gio hang

//phan trang



//cap nhat gio hang
//Xoa san pham khoi gio hang
// var_dump($item);
require '../../../view/--front/product-detail/product-detail.php'; 
// header('location: ../view/--front/product-detail/product-detail.php');
?>