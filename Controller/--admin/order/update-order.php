<?php
    require '../../../connect/database.php';
    require '../../../models/order.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = array(
            'id_order' =>$_POST['id_order'],
            'date'=>$_POST['date'],
            'date_confirm' => $_POST['date_confirm'],
            'name_customer' => $_POST['name_customer'],
            'total_num_product' => $_POST['total_num_product'],
            'total_price' => $_POST['total_price'],
            'payment_method' => $_POST['payment_method']
        );
        update_order($conn,$data);
        header('location:list-order.php');
    }
?>