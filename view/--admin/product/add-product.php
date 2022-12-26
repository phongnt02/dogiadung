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
            <form class="row" method="POST" enctype="multipart/form-data">
              <div class="form-group col-md-3">
                <label class="control-label" >Mã sản phẩm </label>
                <input class="form-control" type="text" name="product_code">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input class="form-control" type="text" name="name">
              </div>


              <div class="form-group  col-md-3">
                <label class="control-label">Số lượng</label>
                <input class="form-control" type="number" name="amount">
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Tình trạng</label>
                <select class="form-control" id="exampleSelect1" name="status">
                  <option>-- Chọn tình trạng --</option>
                  <option>Còn hàng</option>
                  <option>Hết hàng</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Danh mục</label>
                <select class="form-control" id="exampleSelect1" name="category">
                  <option>-- Chọn danh mục --</option>
                  <?php while($category = mysqli_fetch_assoc($list_category)) : ?>
                  <option value="<?php echo $category['name'];?>"><?php echo $category['name'];?></option>
                  <?php endwhile?>
                </select>
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label" >Thương hiệu</label>
                <select class="form-control" id="exampleSelect1" name="brand" >
                  <option>-- Chọn thương hiệu --</option>
                  <?php while($brand = mysqli_fetch_assoc($list_brand)) : ?>
                  <option value="<?php echo $brand['name'];?>"><?php echo $brand['name'];?></option>
                  <?php endwhile?>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá bán</label>
                <input class="form-control" type="text" name="sale_price" >
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá vốn</label>
                <input class="form-control" type="text" name="price" >
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá khuyến mãi</label>
                <input class="form-control" type="text" name="promotional_price" >
              </div>
              <div class="form-group col-md-3">
                <label class="control-label" >Người tạo</label>
                <input class="form-control" type="text" name="user" >
              </div>
              <div class="form-group col-md-12">
                <label class="control-label" name="image" >Ảnh sản phẩm</label>
                <div id="myfileupload">
                  <input type="file" id="uploadImage" name="uploadImage"/>
                  </div>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label" >Mô tả sản phẩm</label>
                <textarea class="form-control" name="mota" id="mota" name="product_description"></textarea>
              </div>
              <div class="form-group col-md-12">
                <button class="btn btn-save" type="submit">Lưu lại</button>
                <a class="btn btn-cancel" href="./add-product.php">Hủy bỏ</a>
              </div>
            </form>
          </div>
        </div>
  </main>


<?php require '../../../layout/--admin/footer.php'; ?>
