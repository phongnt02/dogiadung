<?php
function get_customer_list($conn){
    //SQL
    $sql = "SELECT * FROM tbl_customer ORDER BY id_customer DESC";
  
    //Return
    return mysqli_query($conn, $sql);
}
?>