<?php
    require '../../../connect/database.php';
    require '../../../models/blog.php';

    $id_blog = $_GET['id_blog'];
    delete_blog($conn,$id_blog);
    header('location:list-blog.php');
?>