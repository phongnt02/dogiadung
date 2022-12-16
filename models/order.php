<?php
function get_order_list($conn)
{
    //SQL
    $sql = "SELECT id_order,tbl_order.date,tbl_order.date_confirm,tbl_customer.fullname,total_num_product,total_price,payment_method
    FROM tbl_order JOIN tbl_customer ON tbl_order.id_customer=tbl_customer.id_customer";
  
    //Return
    return mysqli_query($conn, $sql);
}
function name_customer($conn){
     //SQL
     $sql = "SELECT fullname,id_customer FROM tbl_customer";
   
     //Return
     return mysqli_query($conn, $sql);
}
function id_cart($conn){
    //SQL
    $sql = "SELECT id_cart FROM tbl_cart";
   
    //Return
    return mysqli_query($conn, $sql);
}
function insert_order($conn,$data) {
     //SQL
     $sql = "INSERT INTO tbl_order (date,date_confirm,id_customer,id_cart,total_num_product,total_price,payment_method) 
     VALUES ('{$data['date']}','{$data['date_confirm']}','{$data['id_customer']}','{$data['id_cart']}',
     '{$data['total_num_product']}','{$data['total_price']}','{$data['payment_method']}')";

    //Return
    return mysqli_query($conn, $sql);
}
function delete_order($conn,$id_order) {
    //sql
    $sql = "DELETE FROM `tbl_order` WHERE id_order = $id_order";
    // return 
    return mysqli_query($conn,$sql);
}
function update_order($conn,$data) {
    //SQL
    $sql = "UPDATE tbl_order SET date='{$data['date']}',date_confirm='{$data['date_confirm']}',
    total_num_product='{$data['total_num_product']}',total_price='{$data['total_price']}',payment_method='{$data['payment_method']}'
   WHERE id_order={$data['id_order']}";
  
    //Return
    return mysqli_query($conn, $sql);
}
?>