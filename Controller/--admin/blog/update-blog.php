<?php
    require '../../../connect/database.php';
    require '../../../models/blog.php';
    if($_SERVER['REQUEST_METHOD'] =='POST') {
        //handle upload Image 
        if ($_FILES['uploadImage']['error'] != 0) {
            echo "Dữ liệu hình ảnh bị lỗi";
        }
        $target_dir = "public/images/"; // folder save file
        $target_file = $target_dir . basename($_FILES["uploadImage"]["name"]);
        $allowUpload = true;


        //Lấy phần mở rộng của file (jpg, png, ...)
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        // list file allow upload
        $allowtypes = array('jpg', 'png', 'jpeg', 'gif');
        if (!in_array($imageFileType, $allowtypes)) {
            echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
            $allowUpload = false;
        }

        if ($allowUpload) {
            // move file to folder public/images
            move_uploaded_file($_FILES["uploadImage"]["tmp_name"], '../../../' . $target_file);
        }

        // insert data
        $data = array(
            'id_blog' => $_POST['id_blog'],
            'title' => $_POST['title'],
            'description' =>$_POST['description'],
            'content' =>$_POST['content'],
            'image' =>$target_file
        );
        update_blog($data,$conn);
        header('location:list-blog.php');
    }
    
?>