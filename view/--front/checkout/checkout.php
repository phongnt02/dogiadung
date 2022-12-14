<?php
require '../../../layout/--front/header.php';

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

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">

      
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation"  action="../../../Controller/--front/cart/detail_cart.php" method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Full name</label>
            <input type="text" class="form-control" id="firstName" name ="fullname" placeholder="" value="" required>
            <div class="invalid-feedback">
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Phone</label>
            <input type="text" class="form-control" id="lastName" name ="phone" placeholder="" value="" required>
            <div class="invalid-feedback">
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" name ="email" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
          </div>
        </div>
<!-- 
        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>  -->

         <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" required>
              <option value="">Choose...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
            </div>
          </div>
          <!-- <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
            </div>
          </div> -->
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <hr class="mb-4">

        <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
   
      <ul class="list-group mb-3">
      <?php foreach ($cart as $key => $value) :?>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted"><?php echo $value['name']?>   (<?php echo $value['quantity']?>)</small>
          </div>
          <span class="text-muted"><?php echo number_format($value['price'] * $value['quantity']) ?>.đ</span>
        </li>
        <?php endforeach ?>

        <li class="list-group-item d-flex justify-content-between">
          <span>Total (VNĐ):</span>
          <strong><?php echo number_format(total_price($cart))?>.đ</strong>
        </li>
      </ul>

    </div>


        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Note</label>
            <input type="text" class="form-control" name="note"id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
            </div>
          </div>

        </div> 
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" name="checkout" type="submit">Continue to checkout</button>
        </br>
        </br>
      </form>
    </div>
  </div>
  

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script></body>
</html>

<?php
require "../../../layout/--front/footer.php"
?>
