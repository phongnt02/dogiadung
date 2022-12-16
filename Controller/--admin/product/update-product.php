<?php
    require '../../../connect/database.php';
    require '../../../models/product.php';
    if($_SERVER['REQUEST_METHOD'] =='POST') {
        $id_category = mysqli_fetch_assoc(get_id_category($conn,$_POST['category']));
        $id_brand = mysqli_fetch_assoc(get_id_brand($conn,$_POST['brand']));
        $data = array(
            'id_product' => $_POST['id_product'],
            'product_code' => $_POST['product_code'],
            'name' =>$_POST['name'],
            'amount' =>$_POST['amount'],
            'price' =>$_POST['price'],
            'status' =>$_POST['status'],
            'category' => $id_category['id_category'],
            'brand' =>$id_brand['id_brand']
        );
        update_product($data,$conn);
        header('location:list-product.php');
    }
    
?>