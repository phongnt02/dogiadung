<?php 
    require '../../../layout/--admin/header.php'; 
    require '../../../layout/--admin/sidebar.php';
?>
<main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Quản lý đơn hàng</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
                <div class="col-sm-2">
                  <a class="btn btn-add btn-sm" href="./add-order.php" title="Thêm"><i class="fas fa-plus"></i>
                    Tạo mới</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                      class="fas fa-trash-alt"></i> Xóa tất cả </a>
                </div>
              </div>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th width="10"><input type="checkbox" id="all"></th>
                    <th>ID đơn hàng</th>
                    <th>Thời gian đặt</th>
                    <th>Thời gian xác nhận</th>
                    <th>Tên khách hàng</th>
                    <th>Tổng số sản phẩm</th>
                    <th>Tổng tiền</th>
                    <th>Phương thức thanh toán</th>
                    <th>Chức năng</th>
                  </tr>
                </thead>
                <?php  while ($order = mysqli_fetch_assoc($order_list)): ?>
                <tbody>
                  <tr>
                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                    <td class="id_order"><?php echo $order['id_order']?></td>
                    <td class="date"><?php echo $order['date']?></td>
                    <td class="date_confirm"><?php echo $order['date_confirm']?></td>
                    <td class="fullname"><?php echo $order['fullname']?></td>
                    <td class="total_num_product"><?php echo $order['total_num_product']?></td>
                    <td class="total_price"><?php echo $order['total_price']?></td>
                    <td class="payment_method"><?php echo $order['payment_method']?></td>
                    <td>
                      <a href="./delete-order.php?id_order=<?php echo $order['id_order']?>">
                        <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                      </a>
                      <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button></td>
                  </tr>
                </tbody>
                <?php endwhile?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
     <!--
  MODAL
-->
<div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
    data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Chỉnh sửa thông tin đơn hàng</h5>
              </span>
            </div>
          </div>
          <form method="POST" action="../../../Controller/--admin/order/update-order.php" class="row">
              <div class="form-group col-md-12">
                <label class="control-label">ID đơn hàng</label>
                <input class="form-control" type="text" name="id_order">
                <span span class="error" style="color: red; margin-top:6px;display: none;">ID không được phép sửa</span>
              </div>
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
                <input class="form-control" type="text" name="name_customer">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">ID Giỏ hàng</label>
                <input class="form-control" type="text" name="id_cart">
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
                <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
              </div>
        </form>
      </div>
    </div>
  </div>
  <!--
  MODAL
-->
<script>
  //Modal edit form
  $(document).ready(function(){
    $(".btn-sm.edit").on("click", function () {
        $("#ModalUP").modal({ backdrop: false, keyboard: false })
        let elementIdOrder = $(this).parent().parent().find('.id_order')[0]
        let elementDate = $(this).parent().parent().find('.date')[0]
        let elementConfirmDate = $(this).parent().parent().find('.date_confirm')[0]
        let elementFullName = $(this).parent().parent().find('.fullname')[0]
        let elementNumberProduct = $(this).parent().parent().find('.total_num_product')[0]
        let elementTotalPrice = $(this).parent().parent().find('.total_price')[0]
        let elementPaymentMethod = $(this).parent().parent().find('.payment_method')[0]

    
        // render Value edit
        $('input[name="id_order"]').val(elementIdOrder.innerText)
        $('input[name="date"]').val(elementDate.innerText)
        $('input[name="date_confirm"]').val(elementConfirmDate.innerText)
        $('input[name="name_customer"]').val(elementFullName.innerText)
        $('input[name="total_num_product"]').val(elementNumberProduct.innerText)
        $('input[name="total_price"]').val(elementTotalPrice.innerText)
        $('input[name="payment_method"]').val(elementPaymentMethod.innerText)
         //focus error
         let inputID = $('input[name="id_order"]')[0]
        inputID.onfocus = function () {
          let error = $('.error')[0]
          error.style.display = 'inline-block'
        } 
      });
  });
</script>
<?php require '../../../layout/--admin/footer.php'; ?>
