<?php
    require '../../../connect/database.php';
    require '../../../models/category.php';
    // insert data
    if(isset($_POST['add_category']) && $_SERVER['REQUEST_METHOD'] == "POST"){
        $data = array(
            'name' => $_POST['name'],
            'category_code' => $_POST['category_code'],
            'user' => $_POST['user'],
            'image' => $_POST['image']
        );
        insert_category($data,$conn);
        header('location:list-category.php');
    }
    require '../../../view/--admin/category/add-category.php';

?>