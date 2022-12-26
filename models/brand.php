<?php
function get_brand_list($conn)
{
    //SQL
    $sql = "SELECT * FROM tbl_brand ORDER BY id_brand DESC";
  
    //Return
    return mysqli_query($conn, $sql);
}
function insert_brand($data,$conn){
    //SQL
    $sql = "INSERT INTO `tbl_brand`(`brand_code`, `name`,`image`, `user`,`date`) 
    VALUES ('{$data['name']}','{$data['brand_code']}','{$data['image']}','{$data['user']}','{$data['date']}')";
    
    //Return
    return mysqli_query($conn, $sql);
}
function delete_brand($conn,$id_brand){
    //SQL
    $sql = "DELETE FROM tbl_brand WHERE id_brand = $id_brand";
    //Return
    return mysqli_query($conn, $sql);
}
function update_brand($conn,$data){
    //SQL
    $sql = "UPDATE tbl_brand SET brand_code='{$data['code_brand']}',name='{$data['name_brand']}',
    image='{$data['image']}', date='{$data['date']}' WHERE id_brand={$data['id_brand']}";
    //Return
    return mysqli_query($conn, $sql);

}
?>
