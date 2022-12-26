
<?php 
    include "../../../connect/database.php";
	$err=[];
	if(isset($_POST['signup'])){
		$id_login = "";
		$username = $_POST['username'];
		$email_address = $_POST['email_address'];
		$password = $_POST['password'];
		$user_type="client";

		//kiem tra xem nguoi dung co ton tai k
		$sql = "SELECT *FROM tbl_login WHERE username = '$username'";
		$query = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($query);

		if(empty($username)){
			$err['username']='Bạn chưa nhập tên';
		}
		else{
			if(mysqli_num_rows($query)>0){
				$err['username']='Tài khoản đã tồn tại';
			}
		}
		if(empty($password)){
			$err['password']='Bạn chưa nhập password';
		}
		if(empty($email_address)){
			$err['email_address']='Bạn chưa nhập email';
		}
		// var_dump(empty($err));
		if(empty($err)){
			$pass= password_hash($password,PASSWORD_DEFAULT);
			// var_dump($pass);
			// die();
			$sql = " INSERT INTO tbl_login (id_login,username,email_address,user_type,password)
			VALUES('$id_login','$username','$email_address','$user_type','$pass');
			";
			$query= mysqli_query($conn,$sql);
		}

	}
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT *FROM tbl_login WHERE username = '$username'";
		$query = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($query);
		$checkname = mysqli_num_rows($query);
		if($checkname == 1 ){
			$checkpass = password_verify($password, $data['password']);
			if($checkpass){
				$_SESSION['tbl_login'] = $data;
					header('location: ../../../view/--front/home/index.php');

			}
			else if(empty($password)){
				$error['password']='Bạn chưa nhập password';
			}
			else{
				$error['password']='Password không đúng';
			}
		}
		else if(empty($username)){
			$error['username']='Bạn chưa nhập tên';
		}
		else{
			$error['username']='Tên người dùng không tồn tại';
		}
	}
?>  