<?php
    require '../../../connect/database.php';
    require '../../../models/order.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = array(
            'date'=>$_POST['date'],
            'date_confirm' => $_POST['date_confirm'],
            'id_customer' => $_POST['id_customer'],
            'id_cart' => $_POST['id_cart'],
            'total_num_product' => $_POST['total_num_product'],
            'total_price' => $_POST['total_price'],
            'payment_method' => $_POST['payment_method']
        );
        insert_order($conn,$data);
        header('location:list-order.php');
    }
    $list_customer = name_customer($conn);
    $list_cart = id_cart($conn);
    require '../../../view/--admin/order/add-order.php';

?>