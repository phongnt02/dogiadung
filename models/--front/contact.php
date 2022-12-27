<?php

function insert_contact($data,$conn) {
    //SQL
    $sql = "INSERT INTO tbl_ykien(`id_ykien`, `email`, `subject`, `message`,`name`) 
    VALUES ('','{$data['email']}','{$data['subject']}','{$data['message']}','{$data['name']}')";
  
    //Return
    return mysqli_query($conn, $sql);
}

?>