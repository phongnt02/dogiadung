
<?php
require '../../../connect/database.php';
// require '../../../models/--front/checkout.php';
session_start();
ob_start();
// $tbl_login = $_SESSION['tbl_login'];



require '../../../view/--front/checkout/checkout.php';
?>  