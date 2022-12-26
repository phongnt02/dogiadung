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
          
          <form class="row" enctype="multipart/form-data" method="POST">
            <div class="form-group col-md-6">
              <label class="control-label">Tiêu đề</label>
              <input class="form-control" name="title" type="text">
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">Người viết</label>
              <input class="form-control" name="user" type="text">
            </div>
            <div class="form-group col-md-12">
                <label for="myfileupload" class="control-label">Hình ảnh</label>
                <div id="myfileupload">
                  <input type="file" id="uploadImage" name="uploadImage"/>
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

<?php require '../../../layout/--admin/footer.php'; ?>