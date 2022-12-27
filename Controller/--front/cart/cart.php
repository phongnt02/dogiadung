<?php
require '../../../connect/database.php';
session_start();
ob_start();
if (isset($_GET['id'])) {
    $id_product = $_GET['id'];
}
$action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
$quantity = (isset($_GET['quantity'])) ? $_GET['quantity'] : 1;

if ($quantity <= 0) {
    $quantity = 1;
}

$query = mysqli_query($conn, "SELECT * FROM tbl_product WHERE id_product =$id_product");
if ($query) {
    $product = mysqli_fetch_assoc($query);
}
$item = [
    'id' => $product['id_product'],
    'name' => $product['name'],
    'image' => $product['image'],
    'price' => $product['price'],
    'quantity' => $quantity
];
if ($action == 'add') {
    if (isset($_SESSION['cart'][$id_product])) {
        // echo $_SESSION['cart'][$id_product]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$id_product] = $item;
    }
}




if ($action == 'update') {
    $_SESSION['cart'][$id_product]['quantity'] = $quantity;
}
if ($action == 'delete') {
    unset($_SESSION['cart'][$id_product]);
}





//them moi vao gio hang

//price range
if (isset($_POST['submit_range'])) {
    $price1 = $_POST['amount1'];
    $price2 = $_POST['amount2'];
}
//cap nhat vao gio hang
$tbl_login_update = $_SESSION['tbl_login'];
$id_login = $tbl_login_update['id_login'];



$total_num = 0;
$total_price = 0;
if (isset($_GET['id'])) {

    $cart_update = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
    foreach ($cart_update as $key => $value) {

        $total_num += $value['quantity'];
        $total_price += $value['quantity'] * $value['price'];
    }
    $check_isset_cart = mysqli_query($conn, "SELECT * FROM tbl_cart");
    $isset_num=0;
    foreach ($check_isset_cart as $key => $value_check) {
        if ($value_check['id_login'] == $id_login) {
            $isset_num++;
        }
    }
    if($isset_num==0){
        $sql = " INSERT INTO tbl_cart (id_cart,id_login,total_num,total_price)
        VALUES(' ','$id_login','$total_num','$total_price')
        ";
        $query = mysqli_query($conn, $sql);

        $query_cart = mysqli_query($conn, "SELECT * FROM tbl_cart WHERE id_login =$id_login");
        $cart = mysqli_fetch_assoc($query_cart);
        // echo $cart['id_cart'];
    }
    else{
        $update_cart = " UPDATE tbl_cart
        SET total_num= $total_num, total_price= $total_price
        WHERE id_login = $id_login ";
        $query = mysqli_query($conn, $update_cart);

        $cart_id=mysqli_query($conn, "SELECT * FROM tbl_cart WHERE id_login = $id_login");
        $cart_id=mysqli_fetch_assoc($cart_id);
        $id_cart=$cart_id['id_cart'];
    }
    // echo $total_num;
    // echo $total_price;
}
//cap nhat vao chi tiet gio hang
if (isset($_GET['id'])) {
    $check_isset_detail_cart = mysqli_query($conn, "SELECT * FROM tbl_detail_cart");
    $isset_num_id_cart=0;
    $isset_num_id_product=0;
    foreach ($check_isset_detail_cart as $key => $value_check) {
        if ($value_check['id_cart'] == $id_cart) {
            $isset_num_id_cart++;
            if($value_check['id_product']==$_GET['id'] ){
                $isset_num_id_product++;
            }
        }
    }
    // echo $isset_num_id_cart,$isset_num_id_product;
    $cart_update = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
    if($isset_num_id_cart==0){
        foreach ($cart_update as $key => $value){
            $total_num_dt=$value['quantity'];
            $total_price_dt=$value['quantity']*$value['price'];
            $sql = " INSERT INTO tbl_detail_cart (id_detail_cart,id_cart,id_product,total_num,total_price)
            VALUES(' ','$id_cart','$id_product','$total_num_dt','$total_price_dt')
            ";
            $query = mysqli_query($conn, $sql);
        }   
    }
    else{
        if($isset_num_id_product==0){
            $id_pr=$_GET['id'];
            $sql = " SELECT COUNT(*) AS isset_id_product
            FROM tbl_detail_cart
            WHERE id_product='$id_pr'
            ";
            $query = mysqli_query($conn, $sql);
            foreach ($cart_update as $key => $value){
                if($id_product==$_GET['id']){
                $total_num_dt=$value['quantity'];
                $total_price_dt=$value['quantity']*$value['price'];
                $sql = " INSERT INTO tbl_detail_cart (id_detail_cart,id_cart,id_product,total_num,total_price)
                VALUES(' ','$id_cart','$id_product','$total_num_dt','$total_price_dt')
                ";
                $query = mysqli_query($conn, $sql);
            }
            }  
        }
    }
    
}
// echo $id_cart;

// Xoa san pham khoi gio hang
require '../../../view/--front/cart/cart.php';

?>