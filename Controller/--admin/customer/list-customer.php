<?php
    require '../../../connect/database.php';
    require '../../../models/customer.php';

    $customer_list = get_customer_list($conn);
    require '../../../view/--admin/customer/customer.php';

?>