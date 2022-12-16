<?php
    require '../../../connect/database.php';
    require '../../../models/brand.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $data = array(
            'name' => $_POST['name'],
            'brand_code' => $_POST['brand_code'],
            'user' => $_POST['user'],
            'image' => $_POST['image'],
            'date' => $_POST['date']
        );
        insert_brand($data,$conn);
        header('location:list-brand.php');
    }

    require '../../../view/--admin/brand/add-brand.php';
?>