<?php
require '../../../connect/database.php';
require '../../../models/--front/login.php';
session_start();
ob_start();
$err = [];
if (isset($_POST['signup'])) {
    $data = array(
        'username' => $_POST['username'],
        'email_address' => $_POST['email_address'],
        'password' => $_POST['password'],
        'user_type' => 'client'
    );

    // echo $password;
    //kiem tra xem nguoi dung co ton tai k
    $list_login = get_login_list($conn, $data['username']);
    $data_list = mysqli_fetch_assoc($list_login);

    if (empty($data['username'])) {
        $err['username'] = 'Bạn chưa nhập tên';
    } else {
        if (mysqli_num_rows($list_login) > 0) {
            $err['username'] = 'Tài khoản đã tồn tại';
        }
    }
    if (empty($data['password'])) {
        $err['password'] = 'Bạn chưa nhập password';
    }
    if (empty($data['email_address'])) {
        $err['email_address'] = 'Bạn chưa nhập email';
    }
    // var_dump(empty($err));
    if (empty($err)) {
        $data['password'] =    password_hash($data['password'], PASSWORD_DEFAULT);
        insert_blog($data, $conn);
        $err['password']= 'Đăng ký thành công';
    }
}   
if (isset($_POST['login'])) {
    $data = array(
        'username' => $_POST['username'],
        'password' => $_POST['password']
    );
    $list_login = get_login_list($conn, $data['username']);
    $data_list = mysqli_fetch_assoc($list_login);
    $checkname = mysqli_num_rows($list_login);
    if ($checkname == 1) {
        $checkpass = password_verify($data['password'], $data_list['password']);
        if ($checkpass) {
            $_SESSION['tbl_login'] = $data_list;
            
            // echo $tbl_login['id_login'];
            header('location:../shop/shop.php');
        } else if (empty($password)) {
            $error['password'] = 'Bạn chưa nhập password';
        } else {
            $error['password'] = 'Password không đúng';
        }
    } else if (empty($username)) {
        $error['username'] = 'Bạn chưa nhập tên';
    } else {
        $error['username'] = 'Tên người dùng không tồn tại';
    }
}

require '../../../view/--front/login/LoginUser.php';

?>
<!-- require '../../../view/--front/login/LoginUser.php';

?> -->