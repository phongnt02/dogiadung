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
          <form class="row">
            <div class="form-group col-md-3">
              <label class="control-label">Họ và tên</label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group col-md-3">
              <label for="exampleSelect1" class="control-label">Giới tính</label>
              <select class="form-control" id="exampleSelect1">
                <option>-- Chọn giới tính --</option>
                <option>Nam</option>
                <option>Nữ</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Tên đăng nhập</label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Mật khẩu</label>
              <input class="form-control" type="password">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Email</label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Số điện thoại</label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Địa chỉ</label>
              <input class="form-control" type="text">
            </div>
        </div>
        <button class="btn btn-save" type="button">Lưu lại</button>
        <a class="btn btn-cancel" href="">Hủy bỏ</a>
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