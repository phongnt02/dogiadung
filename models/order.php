<?php
function get_order_list($conn)
{
    //SQL
    $sql = "SELECT id_order,tbl_order.date,tbl_order.date_confirm,tbl_customer.fullname,total_num_product,total_price,payment_method
    FROM tbl_order JOIN tbl_customer ON tbl_order.id_customer=tbl_customer.id_customer";
  
    //Return
    return mysqli_query($conn, $sql);
}
?>