<?php 
    require '../../../layout/--admin/header.php'; 
    require '../../../layout/--admin/sidebar.php';
    include "../../../connect/database.php";



?>
    <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới sản phẩm</h3>
          <div class="tile-body">
            <form class="row" method="post">
              <div class="form-group col-md-3">
                <label class="control-label" name="product_code">Mã sản phẩm </label>
                <input class="form-control" type="number" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label"name="name">Tên sản phẩm</label>
                <input class="form-control" type="text">
              </div>


              <div class="form-group  col-md-3">
                <label class="control-label"name="amount">Số lượng</label>
                <input class="form-control" type="number">
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label"name="status">Tình trạng</label>
                <select class="form-control" id="exampleSelect1">
                  <option>-- Chọn tình trạng --</option>
                  <option>Còn hàng</option>
                  <option>Hết hàng</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label"name="category" >Danh mục</label>
                <select class="form-control" id="exampleSelect1">
                  <option>-- Chọn danh mục --</option>
                  <option>Bàn ăn</option>
                  <option>Bàn thông minh</option>
                  <option>Tủ</option>
                  <option>Ghế gỗ</option>
                  <option>Ghế sắt</option>
                  <option>Giường người lớn</option>
                  <option>Giường trẻ em</option>
                  <option>Bàn trang điểm</option>
                  <option>Giá đỡ</option>
                </select>
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label" name="brand" >Thương hiệu</label>
                <select class="form-control" id="exampleSelect1">
                  <option>-- Chọn thương hiệu --</option>
                  <option>Điện máy xanh</option>
                  <option>Thế giới di động</option>
                  <option>FPT</option>
                  <option>Bách hóa xanh</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label"name="sale_price" >Giá bán</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label"name="price" >Giá vốn</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label"name="promotional_price" >Giá khuyến mãi</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label" name="user" >Người tạo</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label" name="image" >Ảnh sản phẩm</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="ImageUpload" onchange="readURL(this);" />
                </div>
                <div id="thumbbox">
                  <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
                <div id="boxchoice">
                  <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a>
                  <p style="clear:both"></p>
                </div>

              </div>
              <div class="form-group col-md-12">
                <label class="control-label" name="product_code" >Mô tả sản phẩm</label>
                <textarea class="form-control" name="mota" id="mota"></textarea>
              </div>
            </form>

          </div>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" href="table-data-product.html">Hủy bỏ</a>
        </div>
  </main>


<?php require '../../../layout/--admin/footer.php'; ?>
