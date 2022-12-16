<?php
    require '../../../connect/database.php';
    require '../../../models/blog.php';
    if($_SERVER['REQUEST_METHOD'] =='POST') {
        $data = array(
            'id_blog' => $_POST['id_blog'],
            'title' => $_POST['title'],
            'description' =>$_POST['description'],
            'content' =>$_POST['content'],
            'image' =>$_POST['ImageUpload']
        );
        update_blog($data,$conn);
        header('location:list-blog.php');
    }
    
?>