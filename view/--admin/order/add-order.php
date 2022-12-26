<?php
require '../../../layout/--admin/header.php';
require '../../../layout/--admin/sidebar.php';

?>
<main class="app-content">

  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item">Quản lý đơn hàng</li>
      <li class="breadcrumb-item"><a href="#">Thêm mới</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Thêm mới đơn hàng</h3>
        <div class="tile-body">
          <div class="row element-button">
            <div class="col-sm-2">
              <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                <b><i class="fas fa-folder-plus"></i> Tạo trạng thái mới</b>
              </a>
            </div>
          </div>

          <form class="row" method="POST">
            <div class="col-md-6">
              <div class="form-group col-md-12">
                <label class="control-label">Thời gian đặt</label>
                <input class="form-control" type="text" name="date">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Thời gian xác nhận</label>
                <input class="form-control" type="text" name="date_confirm">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Tên khách hàng</label>
                <select class="form-control" name="id_customer">
                <?php while ($customer = mysqli_fetch_assoc($list_customer)) : ?>
                  <option value="<?php echo $customer['id_customer']; ?>"><?php echo $customer['fullname']; ?></option>
                <?php endwhile ?>
                </select>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">ID Giỏ hàng</label>
                <select class="form-control" name="id_cart">
                <?php while ($cart = mysqli_fetch_assoc($list_cart)) : ?>
                  <option value="<?php echo $cart['id_cart']; ?>"><?php echo $cart['id_cart']; ?></option>
                <?php endwhile ?>
                </select>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Tổng số sản phẩm</label>
                <input class="form-control" type="text" name="total_num_product">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Tổng tiền</label>
                <input class="form-control" type="text" name="total_price">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Phương thức thanh toán</label>
                <select class="form-control" name="payment_method">
                  <option value="Tiền mặt">Tiền mặt</option>
                  <option value="Chuyển khoản">Chuyển khoản</option>
                </select>
              </div>
              <div class="form-group col-md-12">
                <button class="btn btn-save" type="submit">Lưu lại</button>
                <a class="btn btn-cancel" href="./list-order.php">Hủy bỏ</a>
              </div>
          </form>
        </div>
</main>

<?php require '../../../layout/--admin/footer.php'; ?>