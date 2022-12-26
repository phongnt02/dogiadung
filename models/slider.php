<?php
function get_slider_list($conn)
{
    //SQL
    $sql = "SELECT * FROM tbl_slider ORDER BY id_slider DESC";
  
    //Return
    return mysqli_query($conn, $sql);
}
function  insert_slider($data,$conn){
    //SQL
    $sql = "INSERT INTO tbl_slider (type,user,image) 
     VALUES ('{$data['type']}','{$data['user']}','{$data['image']}')";

    //Return
    return mysqli_query($conn, $sql);
}
function delete_slider($conn,$id_slider) {
    //sql
    $sql = "DELETE FROM `tbl_slider` WHERE id_slider = $id_slider";
    // return 
    return mysqli_query($conn,$sql);
}
function update_slider($data,$conn) {
    //SQL
    $sql = "UPDATE tbl_slider SET user='{$data['user']}',type='{$data['type']}',image='{$data['image']}'
   WHERE id_slider={$data['id_slider']}";
  
    //Return
    return mysqli_query($conn, $sql);
}
?>