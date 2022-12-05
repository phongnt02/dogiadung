<?php
    require '../../../connect/database.php';
    require '../../../models/category.php';

    $category_list = get_category_list($conn);
    require '../../../view/--admin/category/category.php';

?>