<?php
function get_brand_list($conn)
{
    //SQL
    $sql = "SELECT * FROM tbl_brand ORDER BY id_brand DESC";
  
    //Return
    return mysqli_query($conn, $sql);
}
?>