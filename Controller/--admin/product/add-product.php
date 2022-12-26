<?php
    require '../../../connect/database.php';
    require '../../../models/product.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
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
        $id_category = mysqli_fetch_assoc(get_id_category($conn,$_POST['category']));
        $id_brand = mysqli_fetch_assoc(get_id_brand($conn,$_POST['brand']));
        $data = array(
            'product_code' => $_POST['product_code'],
            'name' => $_POST['name'],
            'amount' => $_POST['amount'],
            'status' => $_POST['status'],
            'category' => $id_category['id_category'],
            'brand' => $id_brand['id_brand'],
            'sale_price' => $_POST['sale_price'],
            'price' => $_POST['price'],
            'user' => $_POST['user'],
            'image' => $target_file,
            'product_description' => $_POST['product_description'],
        );
        insert_product($data,$conn);
        header('location:list-product.php');
    }
    $list_category = get_list_category($conn);
    $list_brand = get_list_brand($conn);
    require '../../../view/--admin/product/add-product.php';

?>