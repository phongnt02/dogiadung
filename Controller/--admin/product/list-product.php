<?php
    require '../../../connect/database.php';
    require '../../../models/product.php';
    
    $list_category = get_list_category($conn);
    $list_brand = get_list_brand($conn);
    $product_list = get_product_category($conn);
    require '../../../view/--admin/product/product.php';

?>