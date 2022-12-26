<?php
    require '../../../connect/database.php';
    require '../../../models/product.php';
    $id = $_GET['id_product'];
    delete_product($id,$conn);
    header('location:list-product.php');
?>