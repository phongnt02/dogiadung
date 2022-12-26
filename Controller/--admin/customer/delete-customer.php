<?php
    require '../../../connect/database.php';
    require '../../../models/customer.php';

    $id_customer = $_GET['id_customer'];
    delete_customer($conn,$id_customer);
    header('location:list-customer.php');
?>