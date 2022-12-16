<?php
function get_category_list($conn)
{
    //SQL
    $sql = "SELECT * FROM tbl_category ORDER BY id_category DESC";
  
    //Return
    return mysqli_query($conn, $sql);
}
function insert_category($data,$conn){
    //SQL
    $sql = "INSERT INTO tbl_category(name, category_code, user,image) 
    VALUES ('{$data['name']}', '{$data['category_code']}','{$data['user']}','{$data['image']}')";
    //Return
    return mysqli_query($conn, $sql);
}
function delete_category($id,$conn) {
    //SQL
    $sql = "DELETE FROM `tbl_category` WHERE id_category=$id";
    //Return
    return mysqli_query($conn,$sql);
}
function update_category($data,$conn) {
    //SQL
    $sql="UPDATE tbl_category SET name='{$data['name']}',category_code='{$data['category_code']}',image='{$data['image']}' WHERE id_category={$data['id_category']}";
    //Return
    return mysqli_query($conn,$sql);
}
?>