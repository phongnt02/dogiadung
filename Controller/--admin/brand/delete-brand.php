<?php
    require '../../../models/brand.php';
    require '../../../connect/database.php';
    $id_brand = $_GET['id_brand'];
    delete_brand($conn,$id_brand);
    header('location:list-brand.php');
    
?>
