<?php
    require '../../../connect/database.php';
    require '../../../models/product.php';
    if($_SERVER['REQUEST_METHOD'] =='POST') {
        //handle upload Image 
        if($_FILES['uploadImage']['error'] != 0) {
            echo "Dữ liệu hình ảnh bị lỗi";
        }
        $target_dir = "public/images/"; // folder save file
        $target_file = $target_dir . basename($_FILES["uploadImage"]["name"]);
        $allowUpload = true;

        
        //Lấy phần mở rộng của file (jpg, png, ...)
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // list file allow upload
        $allowtypes = array('jpg', 'png', 'jpeg', 'gif');
        if (!in_array($imageFileType,$allowtypes))
        {
            echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
            $allowUpload = false;
        }

        if($allowUpload){
            // move file to folder public/images
            move_uploaded_file($_FILES["uploadImage"]["tmp_name"],'../../../'.$target_file);
        }

        // insert data
        $id_category = mysqli_fetch_assoc(get_id_category($conn,$_POST['category']));
        $id_brand = mysqli_fetch_assoc(get_id_brand($conn,$_POST['brand']));
        $data = array(
            'id_product' => $_POST['id_product'],
            'product_code' => $_POST['product_code'],
            'name' =>$_POST['name'],
            'amount' =>$_POST['amount'],
            'price' =>$_POST['price'],
            'status' =>$_POST['status'],
            'category' => $id_category['id_category'],
            'brand' =>$id_brand['id_brand'],
            'image' => $target_file
        );
        update_product($data,$conn);
        header('location:list-product.php');
    }
    
?>