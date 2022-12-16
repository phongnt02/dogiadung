<?php
require '../../../layout/--admin/header.php';
require '../../../layout/--admin/sidebar.php';
?>
<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item">Quản lý bài viết</li>
      <li class="breadcrumb-item"><a href="#">Thêm mới</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          
          <form class="row" method="POST">
            <div class="form-group col-md-6">
              <label class="control-label">Tiêu đề</label>
              <input class="form-control" name="title" type="text">
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">Người viết</label>
              <input class="form-control" name="user" type="text">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Hình ảnh</label>
              <div id="myfileupload">
                <input type="file" id="uploadfile" name="ImageUpload" onchange="readURL(this);">
              </div>
            </div>
            <div class="form-group col-md-8">
              <label class="control-label">Mô tả ngắn</label>
              <textarea class="form-control" name="description" rows="4"></textarea>
            </div>
            <div class="form-group col-md-8">
              <label class="control-label">Nội dung</label>
              <textarea class="form-control" name="content" rows="8" col="10"></textarea>
            </div>
            <div class="form-group col-md-8">
              <button class="btn btn-save" type="submit">Lưu lại</button>
              <a class="btn btn-cancel" href="./list-blog.php">Hủy bỏ</a>
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
            <input class="form-control" class="" type="text" required>
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