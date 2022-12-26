<?php
function countProduct($conn) {
    //sql
    $sql = "SELECT COUNT(*) as tongsp FROM tbl_product";
    // return
    return mysqli_query($conn,$sql);
}
function countCustomer($conn) {
    //sql
    $sql = "SELECT COUNT(*) as tongkhachhang FROM tbl_customer";
    //return 
    return mysqli_query($conn,$sql);
}
function countBrand($conn){
    //sql
    $sql = "SELECT COUNT(*) as tongthuonghieu FROM tbl_brand";
    //return 
    return mysqli_query($conn,$sql);
}
function countCategory($conn){
    //sql
    $sql = "SELECT COUNT(*) as tongdanhmuc FROM tbl_category";
    //return 
    return mysqli_query($conn,$sql);
}
function getOrder($conn){
    //sql
    $sql = "SELECT tbl_order.id_order,tbl_customer.fullname,tbl_order.total_price,tbl_order.status FROM tbl_order JOIN tbl_customer ON tbl_order.id_customer= tbl_customer.id_customer";
    //return 
    return mysqli_query($conn,$sql);
}
?>