
<?php
// include "../../../connect/database.php";
session_start();
require "cart_function.php";
// $tbl_login = $_SESSION['tbl_login'];
$cart_string = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];

$err = [];
if (isset($_POST['checkout'])) {
	$id_customer = "";
	$fullname = $_POST['fullname'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];


	// echo $phone;
	// //kiem tra xem nguoi dung co ton tai k
	// $sql = "SELECT *FROM tbl_login WHERE username = '$username'";
	// $query = mysqli_query($conn,$sql);
	// $data = mysqli_fetch_assoc($query);

	// if(empty($username)){
	// 	$err['username']='Bạn chưa nhập tên';
	// }
	// else{
	// 	if(mysqli_num_rows($query)>0){
	// 		$err['username']='Tài khoản đã tồn tại';
	// 	}
	// }
	// if(empty($password)){
	// 	$err['password']='Bạn chưa nhập password';
	// }
	// if(empty($email_address)){
	// 	$err['email_address']='Bạn chưa nhập email';
	// }
	// // var_dump(empty($err));
	// if(empty($err)){
	// 	$pass= password_hash($password,PASSWORD_DEFAULT);
	// 	// var_dump($pass);
	// 	// die();
	include "../connect/database.php";
	$sql = " INSERT INTO tbl_customer (id_customer,fullname,email,phone,address)
			VALUES('$id_customer','$fullname','$email','$phone','$address');
			";
	$query = mysqli_query($conn, $sql);
	$tbl_login_update = $_SESSION['tbl_login'];
	$id_login = $tbl_login_update['id_login'];
	$query_cart = mysqli_query($conn, "SELECT * FROM tbl_cart WHERE id_login =$id_login");
	$cart = mysqli_fetch_assoc($query_cart);
	$query_customer = mysqli_query($conn, "SELECT * FROM tbl_customer WHERE fullname='$fullname'");
	$customer = mysqli_fetch_assoc($query_customer);


	$id_customer = $customer['id_customer'];
	$id_cart = $cart['id_cart'];
	$total_price = $cart['total_price'];
	$total_num_product = $cart['total_num'];
	$note = $_POST['note'];


	// echo "<pre>";
	// print_r($id_customer);
	// echo "<pre>";
	// print_r($id_cart);
	// echo "<pre>";
	// print_r($total_price);
	// echo "<pre>";
	// print_r($total_num_product);
	// echo "<pre>";
	// print_r($note);
	$sql = " INSERT INTO tbl_order (id_order,id_customer  ,id_cart ,total_price,total_num_product,note,payment_method,status,time,code,date_confirm,date)
	VALUES('','$id_customer','$id_cart' ,'$total_price','$total_num_product','$note','','Chờ xác nhận',NOW(),'','',NOW());
	";
	$query = mysqli_query($conn, $sql);

	$query_order = mysqli_query($conn, "SELECT * FROM tbl_order WHERE id_customer='$id_customer'");
	$order = mysqli_fetch_assoc($query_order);
	$id_order = $order['id_order'];
	$query_detail_cart = mysqli_query($conn, "SELECT * FROM tbl_detail_cart WHERE id_cart='$id_cart'");
	$detail_cart = mysqli_fetch_assoc($query_detail_cart);



	$query_detail_order = mysqli_query($conn, "SELECT * FROM tbl_detail_order");
	$detail_order = mysqli_fetch_assoc($query_detail_order);
	$num_detail_order=0;
	foreach($cart_string as $key=> $value){
		$quantity= $value['quantity'];
        $total_price = $quantity * $value['price'];
		$id_product = $value['id'];

		echo $quantity, $total_price, $id_product;

		foreach($detail_order as $key=> $value){
			if($detail_order['id_order']==$id_order){
				$num_detail_order++;
			}
		}
		if($num_detail_order==0){
			$sql = " INSERT INTO tbl_detail_order (id_detail_order,id_order,id_product ,quantity,total_price)
			VALUES('','$id_order','$id_product','$quantity','$total_price');
			";
			$query = mysqli_query($conn, $sql);
		}
		// $query_detail_order = mysqli_query($conn, "SELECT * FROM tbl_detail_order WHERE id_order='$id_order'");
		
	}
	
	// echo $id_cart;
	// foreach($detail_cart as $key=>$value){
	// 	echo 	$detail_cart['id_product'];
	// 	echo $detail_cart['total_price'];
	// }
	$_SESSION['tbl_order'] = $order;
	echo $order['id_order'];
}

header('location: ../view/--front/cart/detail_cart.php');
?>  