<?php
function get_customer_list($conn){
    //SQL
    $sql = "SELECT * FROM tbl_customer ORDER BY id_customer DESC";
  
    //Return
    return mysqli_query($conn, $sql);
}
function insert_customer($data,$conn) {
    //SQL
    $sql = "INSERT INTO tbl_customer (fullname,email,phone,address,date) 
    VALUES ('{$data['fullname']}','{$data['fullname']}','{$data['phone']}','{$data['address']}','{$data['date']}')";
  
    //Return
    return mysqli_query($conn, $sql);
}
function delete_customer($conn,$id) {
     //SQL
     $sql = "DELETE FROM tbl_customer where id_customer=$id";
  
     //Return
     return mysqli_query($conn, $sql);
}
function update_customer($data,$conn) {
    //SQL
    $sql = "UPDATE tbl_customer SET fullname='{$data['fullname']}',email='{$data['email']}',phone='{$data['phone']}',
    address='{$data['address']}' WHERE id_customer={$data['id_customer']}";
  
    //Return
    return mysqli_query($conn, $sql);
}
?>