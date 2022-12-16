<?php
    require '../../../connect/database.php';
    require '../../../models/brand.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = array(
            'id_brand' => $_POST['id_brand'],
            'code_brand' => $_POST['code_brand'],
            'name_brand' =>$_POST['name_brand'],
            'date' =>$_POST['date'],
            'image' =>$_POST['ImageUpload']
        );
        update_brand($conn,$data);
        header('location:list-brand.php');
    }
?>