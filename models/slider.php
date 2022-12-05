<?php
function get_slider_list($conn)
{
    //SQL
    $sql = "SELECT * FROM tbl_slider ORDER BY id_slider DESC";
  
    //Return
    return mysqli_query($conn, $sql);
}
?>