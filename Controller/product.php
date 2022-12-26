<?php   
class giohang{ 
    public $id,$tensanpham,$gia,$soluong;  
    public function __construct($pid,$ptensanpham,$pgia) {
    $this->idmt = $pid;
    $this->ten_mt = $ptensanpham;
    $this->gia = $pgia;
    $this->soluong = null;
   }
}
     
?>

<?php
include '../connect/database.php';
session_start();

if(isset($_GET['id'])){
    $id_product=$_GET['id'];
}
$query = mysqli_query($conn,"SELECT * FROM tbl_product WHERE id_product =$id_product");
if($query){
$product=mysqli_fetch_assoc($query);
}
$id_brand=$product['id_brand'];
$brand=mysqli_query($conn,"SELECT * FROM tbl_brand WHERE id_brand=1" );
$brand=mysqli_fetch_assoc($brand);
$item =[
    'id'=>$product['id_product'],
    'name'=>$product['name'],
    'image'=>$product['image'],
    'price'=>$product['price'],
    'name_brand'=>$brand['name'],
    'description'=>$product['description'],
]; 
$_SESSION['product'] = $item;


// header('location: ../view/--front/product-detail/product-detail.php');
echo "<pre>";
print_r($_SESSION['product']);
//them moi vao gio hang

//phan trang



//cap nhat gio hang
//Xoa san pham khoi gio hang
var_dump($item);
header('location: ../view/--front/product-detail/product-detail.php');
?>