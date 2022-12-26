<?php
    require '../../../connect/database.php';
    require '../../../models/customer.php';
    if($_SERVER['REQUEST_METHOD'] =='POST') {
        $data = array(
            'id_customer' => $_POST['id_customer'],
            'fullname' => $_POST['fullname'],
            'email' =>$_POST['email'],
            'phone' =>$_POST['phone'],
            'address' =>$_POST['address']
        );
        update_customer($data,$conn);
        header('location:list-customer.php');
    }
    
?>