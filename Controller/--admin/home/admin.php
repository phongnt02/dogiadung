<?php
    require '../../../connect/database.php';
    require '../../../models/home.php';

    $countProduct = countProduct($conn);
    $countCustomer = countCustomer($conn);
    $countBrand = countBrand($conn);
    $countCategory = countCategory($conn);
    $order_list = getOrder($conn);
    require '../../../view/--admin/home/admin.php';
?>