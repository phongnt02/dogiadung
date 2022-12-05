<?php
function get_blog_list($conn)
{
    //SQL
    $sql = "SELECT * FROM tbl_baiviet ORDER BY id_blog DESC";
  
    //Return
    return mysqli_query($conn, $sql);
}
?>