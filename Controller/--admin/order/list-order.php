<?php
    require '../../../connect/database.php';
    require '../../../models/order.php';

    $order_list = get_order_list($conn);
    $list_customer = name_customer($conn);
    require '../../../view/--admin/order/order.php';

?>