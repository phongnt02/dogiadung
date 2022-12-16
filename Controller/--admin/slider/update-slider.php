<?php
    require '../../../connect/database.php';
    require '../../../models/slider.php';
    // update data
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $data = array(
            'id_slider' => $_POST['id_slider'],
            'user' => $_POST['user'],
            'type' => $_POST['type'],
            'image' => $_POST['ImageUpload'],
        );
        update_slider($data,$conn);
        header('location:list-slider.php');
    }
?>