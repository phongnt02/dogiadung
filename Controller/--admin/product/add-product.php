<?php
    require '../../../connect/database.php';
    require '../../../models/product.php';
    // insert data
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id_category = mysqli_fetch_assoc(get_id_category($conn,$_POST['category']));
        $id_brand = mysqli_fetch_assoc(get_id_brand($conn,$_POST['brand']));
        $data = array(
            'product_code' => $_POST['product_code'],
            'name' => $_POST['name'],
            'amount' => $_POST['amount'],
            'status' => $_POST['status'],
            'category' => $id_category['id_category'],
            'brand' => $id_brand['id_brand'],
            'sale_price' => $_POST['sale_price'],
            'price' => $_POST['price'],
            'user' => $_POST['user'],
            'image' => $_POST['image'],
            'product_description' => $_POST['product_description'],
        );
        insert_product($data,$conn);
        header('location:list-product.php');
    }
    $list_category = get_list_category($conn);
    $list_brand = get_list_brand($conn);
    require '../../../view/--admin/product/add-product.php';

?>