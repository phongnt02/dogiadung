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

function get_shop_categoryname($conn, $name_category){

    $category = mysqli_query($conn, "SELECT * FROM tbl_category WHERE name='$name_category'");

    return $category;
}
function get_shop_product_num($conn,$id_cate){

    $product_num = mysqli_query($conn, "SELECT *FROM tbl_product WHERE id_category= '$id_cate' ");

    return $product_num;
}
function get_shop_product_brand_page($conn, $id_cate,$id_brand, $form, $sotintrang){

    $product_page = mysqli_query($conn, "SELECT *FROM tbl_product WHERE id_brand= '$id_brand' AND id_category= '$id_cate' LIMIT $form, $sotintrang");

    return $product_page;   
}
function get_shop_product_brand_num($conn,$id_cate,$id_brand){

    $product_num = mysqli_query($conn, "SELECT *FROM tbl_product WHERE id_brand= '$id_brand' AND id_category= '$id_cate' ");

    return $product_num;
}
function get_shop_product_page($conn, $id_cate, $form, $sotintrang){

    $product_page = mysqli_query($conn, "SELECT *FROM tbl_product WHERE id_category= '$id_cate' LIMIT $form, $sotintrang");

    return $product_page;   
}
function get_shop_product_brand_page_price($conn, $id_cate,$id_brand, $minimum_range,$maximum_range,$form, $sotintrang){

    $query = "SELECT * FROM tbl_product WHERE id_category = '$id_cate' AND id_brand= '$id_brand' AND price BETWEEN '" . $minimum_range . "' AND '" . $maximum_range . "'  ORDER BY price ASC LIMIT $form, $sotintrang";

    return mysqli_query($conn, $query);
}
function get_shop_product_nobrand_page_price($conn, $id_cate, $minimum_range,$maximum_range,$form, $sotintrang){

    $query = "SELECT * FROM tbl_product WHERE id_category = '$id_cate' AND price BETWEEN '" . $minimum_range . "' AND '" . $maximum_range . "'  ORDER BY price ASC LIMIT $form, $sotintrang";

    return mysqli_query($conn, $query);
}
