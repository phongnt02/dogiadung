<?php
	$filepath = realpath(dirname(__FILE__));
	include ($filepath.'/../lib/session.php');
	Session::checkLogin();
	include_once($filepath.'/../../models/database.php');	
	include_once($filepath.'/../helpers/format.php');
	include_once($filepath.'/../../connect/database.php');
?>
<?php
	class adminlogin
	{
		private $db;
		private $fm;
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		public function login_admin($adminUser,$adminPass){
			$adminUser = $this->fm->validation($adminUser);
			$adminPass = $this->fm->validation($adminPass);


			if(empty($adminUser) || empty($adminPass)){
				$alert = "User and Pass must be not empty";
				return $alert;
			}else{
				$query = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser' AND adminPass = '$adminPass'";
				$result = $this->db->select($query);

				if($result != false){

					$value = $result->fetch_assoc();

					Session::set('adminlogin', true);

					Session::set('id_admin', $value['id_admin']);
					Session::set('adminUser', $value['adminUser']);
					Session::set('adminName', $value['adminName']);
					
					header('location: ../../../Controller/--admin/home/admin.php');
				}else{
					$alert = "User and Pass not match";
					return $alert;
				}
			}
		}
	}
?>