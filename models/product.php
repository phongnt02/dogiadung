<?php
function get_product_category($conn) {
    // sql
    $sql = "SELECT id_product,tbl_product.name,product_code,amount,tbl_product.status,
    tbl_category.name as name_category ,price,tbl_product.user,tbl_product.image,tbl_brand.name as name_brand
    FROM tbl_product JOIN tbl_category ON tbl_product.id_category=tbl_category.id_category 
    JOIN tbl_brand ON tbl_product.id_brand=tbl_brand.id_brand";
    // return
    return mysqli_query($conn,$sql);
}
function insert_product($data,$conn){
    //sql
    $sql = "INSERT INTO tbl_product(name, product_code, amount, status, id_category, id_brand, sale_price, price, user
    , image, description) 
    VALUES ('{$data['name']}','{$data['product_code']}','{$data['amount']}','{$data['status']}','{$data['category']}',
    '{$data['brand']}','{$data['sale_price']}','{$data['price']}','{$data['user']}','{$data['image']}',
    '{$data['product_description']}')";
    // return
    return mysqli_query($conn,$sql);
}
function get_list_category($conn) {
    //sql
    $sql = "SELECT name FROM tbl_category";
    // return 
    return mysqli_query($conn,$sql);
}
function get_id_category($conn,$name) {
    //sql
    $sql = "SELECT id_category FROM tbl_category WHERE name='$name'";
    // return 
    return mysqli_query($conn,$sql);
}
function get_list_brand($conn){
    // sql
    $sql = "SELECT name FROM tbl_brand";
    //return 
    return mysqli_query($conn,$sql);
}
function get_id_brand($conn,$name) {
    //sql
    $sql = "SELECT id_brand FROM tbl_brand WHERE name='$name'";
    // return 
    return mysqli_query($conn,$sql);
}
function delete_product($id,$conn) {
    //sql
    $sql = "DELETE FROM `tbl_product` WHERE id_product = $id";
    // return 
    return mysqli_query($conn,$sql);
}
function update_product($data,$conn) {
     //sql
     $sql = "UPDATE `tbl_product` SET name='{$data['name']}',product_code='{$data['product_code']}',
     amount='{$data['amount']}' , price='{$data['price']}',status='{$data['status']}',
     id_category='{$data['category']}',id_brand='{$data['brand']}'
     WHERE id_product = {$data['id_product']}";
     // return 
     return mysqli_query($conn,$sql);
}
?>