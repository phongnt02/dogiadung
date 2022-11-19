<?php

//Kết nối
$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

//Yêu cầu lưu trữ UTF8 (Tiếng Việt)
if($connect){
    mysqli_query($connect,"SET NAMES 'utf8'");
}
else {
    echo "Kết nối thất bại". mysqli_connect_error();
}
?>