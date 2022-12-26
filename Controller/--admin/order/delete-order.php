<?php
    require '../../../connect/database.php';
    require '../../../models/order.php';

    $id_order = $_GET['id_order'];
    delete_order($conn,$id_order);
    header('location:list-order.php');
    require '../../../view/--admin/order/add-order.php';

?>