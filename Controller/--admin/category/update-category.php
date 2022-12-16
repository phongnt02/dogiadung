<?php
    require '../../../connect/database.php';
    require '../../../models/category.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $data = array(
            'id_category' => $_POST['id_category'],
            'name' => $_POST['name_category'],
            'category_code' => $_POST['code_category'],
            'image' => $_POST['ImageUpload']
        );
        update_category($data,$conn);
        header('location:list-category.php');
    }
?>