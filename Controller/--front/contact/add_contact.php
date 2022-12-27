<?php
require '../../../connect/database.php';
require '../../../models/--front/contact.php';

    $data = array(
        'email' => $_POST['email'],
        'subject' => $_POST['subject'],
        'message' => $_POST['message'],
        'name' => $_POST['name'],
    );
    // var_dump($data) ;
    insert_contact($data,$conn);

?>