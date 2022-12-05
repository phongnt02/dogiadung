<?php
    require '../../../connect/database.php';
    require '../../../models/order.php';

    $order_list = get_order_list($conn);
    require '../../../view/--admin/order/order.php';

?>