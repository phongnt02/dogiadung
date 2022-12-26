<?php
    require '../../../connect/database.php';
    require '../../../models/brand.php';

    $brand_list = get_brand_list($conn);
    
    require '../../../view/--admin/brand/brand.php';

?>