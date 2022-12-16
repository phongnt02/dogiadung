<?php
require '../../../layout/--admin/header.php';
require '../../../layout/--admin/sidebar.php';
?>
<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item">Quản lý slider</li>
      <li class="breadcrumb-item"><a href="#">Thêm mới</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Tạo mới slider</h3>
        <div class="tile-body">
          <form class="row" method="POST">
            <div class="form-group col-md-9">
              <label class="control-label">Người tạo</label>
              <input class="form-control" name="user" type="text">
            </div>
            <div class="form-group col-md-9">
              <label class="control-label">Kiểu</label>
              <input class="form-control" name="type" type="text">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Hình ảnh</label>
              <div id="myfileupload">
                <input type="file" id="uploadfile" name="ImageUpload" onchange="readURL(this);" />
              </div>
            </div>
            <div class="form-group col-md-3">
              <button class="btn btn-save" type="submit">Lưu lại</button>
              <a class="btn btn-cancel" href="./list-slider.php">Hủy bỏ</a>
            </div>
          </form>
      </div>
</main>
<?php require '../../../layout/--admin/footer.php'; ?>