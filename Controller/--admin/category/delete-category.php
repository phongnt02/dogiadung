<?php
    require '../../../connect/database.php';
    require '../../../models/category.php';
    $id = $_GET['id_category'];
    delete_category($id,$conn);
    header('location:list-category.php');
?>