<?php
    require '../../../connect/database.php';
    require '../../../models/slider.php';
    // insert data
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $data = array(
            'user' => $_POST['user'],
            'type' => $_POST['type'],
            'image' => $_POST['ImageUpload'],
        );
        insert_slider($data,$conn);
        header('location:list-slider.php');
    }
    require '../../../view/--admin/slider/add-slider.php';

?>