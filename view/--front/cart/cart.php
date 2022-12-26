<?php
require '../../../layout/--front/header.php';
// echo $id_cart;
// echo "<pre>";
// print_r($cart);
?>
<div class="buttons_added">

</div>
</div>
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <!-- <td class="price">STT</td> -->
                        <td class="image">Image</td>
                        <td class="name">Name</td>
                        <!-- <td class="description"></td> -->
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($cart as $key => $value) :
                    ?>

                        <tr>
                            <form action="../../../Controller/cart.php">



                                <td class="cart_price">
                                    <a href=""><img width="110" height="120" src="../../../<?php echo $value['image'] ?>" alt=""></a>
                                </td>

                                <td class="cart_description">
                                    <h4><a href=""><?php echo $value['name'] ?></a></h4>
                                    <p>Web ID: <?php echo $value['id'] ?></p>
                                </td>

                                <td class="cart_price">
                                    <p><?php echo $value['price'] ?>.đ</p>
                                </td>

                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                                <input type="hidden" name="quantity" value="<?php echo $value['quantity'] ?>">
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">


                                        <!-- <a class="cart_quantity_up" href=""> + </a> -->
                                        <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $value['quantity'] ?>" autocomplete="off" size="2">

                                        <!-- <a class="cart_quantity_down" href=""> - </a> -->
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price"><?php echo number_format($value['price'] * $value['quantity']) ?></p>
                                </td>


                                <td class="cart_delete">
                                    <button class="btn btn-primary btn-sm edit" type="submit" title="Sửa"><i class="fa fa-edit"></i></button>
                                    <a class="cart_quantity_delete" href="../../../Controller/cart.php?id=<?php echo $value['id'] ?>&action=delete"><i class="fa fa-times"></i></a>


                                </td>
                            </form>
                        </tr>
                    <?php endforeach ?>
                    
                    <tr class="cart_menu">
                        <td class="total">Total(VNĐ):</td>
                        <td colspan="6" style="text-align:center"><?php echo number_format(total_price($cart)) ?>.đ</td>

                    </tr>
                </tbody>
            </table>
        </div>
        <form action="../checkout/checkout.php" method="POST">
            <button class="btn btn-primary btn-lg btn-block" name="checkout" type="submit">Continue to checkout</button>
        </form>

    </div>
</section>
<!--/#cart_items-->


<!--/#do_action-->
<?php
require "../../../layout/--front/footer.php"
?>