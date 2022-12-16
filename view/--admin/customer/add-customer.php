<?php
require '../../../layout/--admin/header.php';
require '../../../layout/--admin/sidebar.php';
?>
<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item">Quản lý khách hàng</li>
      <li class="breadcrumb-item"><a href="#">Thêm mới</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <form class="row" method="POST">
            <div class="form-group col-md-9">
              <label class="control-label">Họ và tên</label>
              <input class="form-control" name="fullname" type="text">
            </div>
            <div class="form-group col-md-9">
              <label class="control-label">Email</label>
              <input class="form-control" name="email" type="text">
            </div>
            <div class="form-group col-md-9">
              <label class="control-label">Số điện thoại</label>
              <input class="form-control" name="phone" type="text">
            </div>
            <div class="form-group col-md-9">
              <label class="control-label">Địa chỉ</label>
              <input class="form-control" name="address" type="text">
            </div>
            <div class="form-group col-md-9">
              <label class="control-label">Ngày đăng ký</label>
              <input class="form-control" name="date" type="text">
            </div>
            <div class="form-group col-md-9">
              <button class="btn btn-save" type="submit">Lưu lại</button>
              <a class="btn btn-cancel" href="">Hủy bỏ</a>
            </div>
          </form>
  </div>
</main>


<!--
  MODAL
-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <div class="row">
          <div class="form-group  col-md-12">
            <span class="thong-tin-thanh-toan">
              <h5>Tạo trạng thái mới</h5>
            </span>
          </div>
          <div class="form-group col-md-12">
            <label class="control-label">Nhập tên trạng thái mới</label>
            <input class="form-control" type="text" required>
          </div>
        </div>
        <BR>
        <button class="btn btn-save" type="button">Lưu lại</button>
        <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
        <BR>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!--
MODAL
-->
<?php require '../../../layout/--admin/footer.php'; ?>