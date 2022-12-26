<?php
    require '../../../connect/database.php';
    require '../../../models/customer.php';
    // insert data
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $data = array(
            'fullname' => $_POST['fullname'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'address' => $_POST['address'],
            'date' => $id_category['date']
        );
        insert_customer($data,$conn);
        header('location:list-customer.php');
    }
    require '../../../view/--admin/customer/add-customer.php';

?>