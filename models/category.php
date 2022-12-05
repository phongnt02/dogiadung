<?php
function get_category_list($conn)
{
    //SQL
    $sql = "SELECT * FROM tbl_category ORDER BY id_category DESC";
  
    //Return
    return mysqli_query($conn, $sql);
}
?>