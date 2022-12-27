<?php
function get_login_list($conn, $username){

    $sql = "SELECT *FROM tbl_login WHERE username = '$username'";
	$query = mysqli_query($conn, $sql);
	
    return mysqli_query($conn, $sql);
}
function get_login_admin_list($conn, $adminUser){

    $sql = "SELECT *FROM tbl_admin WHERE username = '$adminUser'";
	$query = mysqli_query($conn, $sql);
	
    return mysqli_query($conn, $sql);
}
function insert_blog($data,$conn) {
    //SQL
    $sql = "INSERT INTO tbl_login (`id_login`, `username`, `email_address`, `user_type`, `password`) 
    VALUES ('','{$data['username']}','{$data['email_address']}','{$data['user_type']}','{$data['password']}')";
  
    //Return
    return mysqli_query($conn, $sql);
}

?>