<?php

function get_shop_category($conn){

    $category =  mysqli_query($conn, "SELECT * FROM tbl_category WHERE status_category='0'");
	
    return $category;
}
function get_shop_brand($conn){

    $brand =  mysqli_query($conn, "SELECT * FROM tbl_brand WHERE status_brand='0'");
	
    return $brand;
}
function get_shop_product($conn){

    $product = mysqli_query($conn, "SELECT * FROM tbl_product WHERE status_product='0'");

    return $product;
}
?>