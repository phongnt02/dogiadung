<?php require '../../../connect/database.php';
require '../../../models/--front/login.php';
session_start();
ob_start();

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
            header('location:../home/admin.php');
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

require '../../../view/--admin/login/LoginAdmin.php';
?>