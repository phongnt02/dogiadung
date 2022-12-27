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
function get_shop_product_search($conn, $name_search){

    $product_search = mysqli_query($conn, "SELECT * FROM tbl_product WHERE name LIKE '%$name_search%'");

    return $product_search;
}
function get_shop_product_page_search($conn, $name_search,$form,$sotintrang){

    $product_search = mysqli_query($conn, "SELECT * FROM tbl_product WHERE name LIKE '%$name_search%'LIMIT $form, $sotintrang");

    return $product_search;
}
function get_shop_product_page($conn,$form,$sotintrang){

    $product_page = mysqli_query($conn, "SELECT * FROM tbl_product  ORDER BY RAND() LIMIT $form, $sotintrang");

    return $product_page;
}
function get_shop_product_price_page($conn,$minimum_range,$maximum_range,$form,$sotintrang){

    $product_price = mysqli_query($conn, "SELECT * FROM tbl_product WHERE price BETWEEN '" . $minimum_range . "' AND '" . $maximum_range . "'  ORDER BY price ASC LIMIT $form, $sotintrang");

    return $product_price;
}
function get_shop_product_price($conn,$minimum_range,$maximum_range){

    $product_price = mysqli_query($conn, "SELECT * FROM tbl_product WHERE price BETWEEN '" . $minimum_range . "' AND '" . $maximum_range . "'  ORDER BY price ASC ");

    return $product_price;
}
?>