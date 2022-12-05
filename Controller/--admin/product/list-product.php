<?php
    require '../../../connect/database.php';
    require '../../../models/product.php';

    $product_list = get_product_category($conn);
    require '../../../view/--admin/product/product.php';

?>