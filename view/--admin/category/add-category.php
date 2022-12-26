<?php
require '../../../layout/--admin/header.php';
require '../../../layout/--admin/sidebar.php';

?>
<main class="app-content">

  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item">Quản lý danh mục</li>
      <li class="breadcrumb-item"><a href="#">Thêm mới</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Thêm mới danh mục</h3>
        <div class="tile-body">
          <div class="row element-button">
            <div class="col-sm-2">
              <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i class="fas fa-folder-plus"></i> Tạo trạng thái mới</b></a>
            </div>

          </div>
            <form class="row" method="post" enctype="multipart/form-data">
              <div class="col-md-6">
                <div class="form-group col-md-12">
                  <label class="control-label">Tên danh mục</label>
                  <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group col-md-12">
                  <label class="control-label">Mã code</label>
                  <input class="form-control" type="text" name="category_code">
                </div>
                <div class="form-group col-md-12">
                  <label class="control-label">Người tạo</label>
                  <input class="form-control" type="text" name="user">
                </div>
              </div>
              <div class="form-group col-md-6">
                <div class="form-group col-md-12">
                  <label class="control-label">Hình ảnh</label>
                  <div id="myfileupload">
                    <input type="file" name="uploadImage" id="uploadImage">
                  </div>
                  <div id="thumbbox">
                    <img height="300" width="300" alt="Thumb image" id="thumbimage" style="display: none">
                    <a class="removeimg" href="javascript:"></a>
                  </div>
                </div>
              </div>
              </div>
              <button class="btn btn-save" type="submit" name="add_category">Lưu lại</button>
              <a class="btn btn-cancel" href="./list-category.php">Hủy bỏ</a>
              </div>
            </form>
</main>

<?php require '../../../layout/--admin/footer.php'; ?>