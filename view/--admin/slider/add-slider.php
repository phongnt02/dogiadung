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
              <form class="row">
                <div class="form-group col-md-3">
                  <label class="control-label">Người tạo</label>
                  <input class="form-control" type="text">
                </div>
                <div class="form-group col-md-12">
                <label class="control-label">Hình ảnh</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="ImageUpload" onchange="readURL(this);" />
                </div>
                <div id="thumbbox">
                  <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
              </div>
          </div>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" href="/doc/table-data-oder.html">Hủy bỏ</a>
        </div>
    </main>
<?php require '../../../layout/--admin/footer.php'; ?>
