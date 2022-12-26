<?php
    require '../../../connect/database.php';
    require '../../../models/slider.php';

    $id_slider = $_GET['id_slider'];
    delete_slider($conn,$id_slider);
    header('location:list-slider.php');

?>  