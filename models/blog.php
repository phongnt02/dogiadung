<?php
function get_blog_list($conn)
{
    //SQL
    $sql = "SELECT * FROM tbl_baiviet ORDER BY id_blog DESC";
  
    //Return
    return mysqli_query($conn, $sql);
}
function insert_blog($data,$conn) {
    //SQL
    $sql = "INSERT INTO tbl_baiviet (`title`, `content`, `user`, `description`, `image`) 
    VALUES ('{$data['title']}','{$data['content']}','{$data['user']}','{$data['description']}','{$data['image']}')";
  
    //Return
    return mysqli_query($conn, $sql);
}
function delete_blog($conn,$id) {
    //SQL
    $sql = "DELETE FROM tbl_baiviet WHERE id_blog=$id";
  
    //Return
    return mysqli_query($conn, $sql);
}
function update_blog($data,$conn){
    //SQL
    $sql = "UPDATE tbl_baiviet SET title='{$data['title']}',description='{$data['description']}',content='{$data['content']}',
     image='{$data['image']}' WHERE id_blog={$data['id_blog']}";

    //Return
    return mysqli_query($conn, $sql);
}
?>