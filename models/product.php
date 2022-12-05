<?php
function get_product_category($conn) {
    // sql
    $sql = "SELECT id_product,tbl_product.name,product_code,amount,tbl_product.status,
    tbl_category.name as name_category ,price,tbl_product.user,tbl_product.image,tbl_brand.name as name_brand
    FROM tbl_product JOIN tbl_category ON tbl_product.id_category=tbl_category.id_category 
    JOIN tbl_brand ON tbl_product.id_brand=tbl_brand.id_brand";
    // result
    return mysqli_query($conn,$sql);
}
?>