<?php
session_start();
ob_start();

include "../../../connect/database.php";
require "../../../Controller/cart_function.php";
$tbl_login = $_SESSION['tbl_login'];
$cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];

$tbl_order = $_SESSION['tbl_order'];
// echo $tbl_order['id_order'];

// echo "<pre>";
// print_r($cart);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example · Bootstrap</title>
    <link href="../../../public/--front/css/order.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->

    <div class="card">
        <div class="title">Thank you for your order, <?php echo $tbl_login['username']    ?></div>
        <div class="info">
            <div class="row">
                <div class="col-7">
                    <span id="heading">Date</span><br>
                    <span id="details"><?php echo $tbl_order['date'] ?></span>
                </div>
                <div class="col-5 pull-right">
                    <span id="heading">Order No.</span><br>
                    <span id="details"><?php echo $tbl_order['id_order'] ?></span>
                </div>
            </div>
        </div>
        <div class="pricing">

            <?php foreach ($cart as $key => $value) : ?>
                <table style="background:white">
                    <div class="row">
                        <tr>
                            <td style="width:100%;height:100px">
                                <div class="col-9">
                                    <span id="name"><?php echo $value['name'] ?> x <?php echo $value['quantity'] ?></span>
                                </div>
                                <div class="col-3">
                                    <span id="price"><?php echo number_format($value['price'] * $value['quantity']) ?>.đ</span>
                                </div>
                            </td>
                            <td rowspan=2>
                                <div class="col-3">
                                    <spa href=""><img width="110" height="110" src="../../../<?php echo $value['image'] ?>" alt=""></spa>
                                </div>
                            </td>
                        </tr>
                    </div>
                </table>
            <?php endforeach ?>

        </div>

        <div class="total">
            <div class="row">
                <div class="col-9"></div>   
                <div class="col-3"><big>&pound; <?php echo number_format(total_price($cart)) ?>.đ</big></div>
            </div>
        </div>
        <form action="../shop/shop.php">
            <div class="tracking">
                <button style="text-align:center" type="submit" class="backhome">Back Home</button>
            </div>
        </form>



    </div>
    </div>
    </section>
    <!--/#cart_items-->


    <!--/#do_action-->