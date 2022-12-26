<?php
$category =  mysqli_query($conn, "SELECT * FROM tbl_category WHERE status_category='0'");
$brand =  mysqli_query($conn, "SELECT * FROM tbl_brand WHERE status_brand='0'");
$product = mysqli_query($conn, "SELECT * FROM tbl_product WHERE status_product='0'");


// SELECT * FROM tên_bảng ORDER BY RAND()  LIMIT N;
