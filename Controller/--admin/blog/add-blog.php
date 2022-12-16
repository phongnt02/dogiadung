<?php
    require '../../../connect/database.php';
    require '../../../models/blog.php';
    // insert data
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $data = array(
            'title' => $_POST['title'],
            'user' => $_POST['user'],
            'image' => $_POST['ImageUpload'],
            'description' => $_POST['description'],
            'content' => $_POST['content']
        );
        insert_blog($data,$conn);
        header('location:list-blog.php');
    }
    require '../../../view/--admin/blog/add-blog.php';

?>