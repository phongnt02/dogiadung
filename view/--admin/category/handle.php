<?php
include "../../../connect/database.php";
if (isset($_POST['add_category'])) {
    $id_category = "";
    $name = $_POST['name'];
    $category_code = $_POST['category_code'];
    $user = $_POST['user'];
    $description = $_POST['description'];
    // $create_date = $_POST['create_date'];
    // $image=$_POST['image'];
  
    
    $sql = " INSERT INTO tbl_category (id_category,name,category_code,user,description)
    VALUES('$id_category','$name','$category_code', '$user', '$description')";
    $query = mysqli_query($conn, $sql);
}
    if(isset($_POST['add_category']) && isset($_FILES['image'])){
        echo "<pre>";
        print_r($FILES['image']);
        echo "</pre>";
        // $img_name=$_FILES['image'][];
    }

?>