<?php 
    require '../../../layout/--admin/header.php'; 
    require '../../../layout/--admin/sidebar.php';
?>

<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
              
                              <a class="btn btn-add btn-sm" href="./add-product.php" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
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
                                    <th>Mã sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá tiền</th>
                                    <th>Số lượng</th>
                                    <th>Tình trạng</th>
                                    <th>Danh mục</th>
                                    <th>Thương hiệu</th>
                                    <th>Người tạo</th>
                                    <th>Thời gian</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>71309005</td>
                                    <td>Bàn ăn gỗ Theresa</td>
                                    <td><img src="/img-sanpham/theresa.jpg" alt="" width="100px;"></td>
                                    <td>5.600.000 đ</td>
                                    <td>40</td>
                                    <td><span class="badge bg-success">Còn hàng</span></td>
                                    <td>Bàn ăn</td>
                                    <td>Dienmayxanh</td>
                                    <td>Admin</td>
                                    <td>14/11/2022</td>
                                    <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                      <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button></td>
                                </tr>
                            </tbody>
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
                <h5>Chỉnh sửa thông tin sản phẩm</h5>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label class="control-label">Mã sản phẩm</label>
              <input class="form-control" type="text" required value="#CD2187" disabled>
            </div>
            <div class="form-group col-md-12">
                <label class="control-label"name="name">Tên sản phẩm</label>
                <input class="form-control" type="text">
              </div>


              <div class="form-group col-md-12">
                <label class="control-label"name="amount">Số lượng</label>
                <input class="form-control" type="number">
              </div>
              <div class="form-group col-md-12 ">
                <label for="exampleSelect1" class="control-label"name="status">Tình trạng</label>
                <select class="form-control" id="exampleSelect1">
                  <option>-- Chọn tình trạng --</option>
                  <option>Còn hàng</option>
                  <option>Hết hàng</option>
                </select>
              </div>
              <div class="form-group col-md-12">
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
              <div class="form-group col-md-12">
                <label for="exampleSelect1" class="control-label" name="brand" >Thương hiệu</label>
                <select class="form-control" id="exampleSelect1">
                  <option>-- Chọn thương hiệu --</option>
                  <option>Điện máy xanh</option>
                  <option>Thế giới di động</option>
                  <option>FPT</option>
                  <option>Bách hóa xanh</option>
                </select>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label"name="sale_price" >Giá bán</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label"name="price" >Giá vốn</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label"name="promotional_price" >Giá khuyến mãi</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label" name="image" >Ảnh sản phẩm</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="ImageUpload" onchange="readURL(this);" />
                </div>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label" name="product_code" >Mô tả sản phẩm</label>
                <textarea class="form-control" name="mota" id="mota"></textarea>
              </div>
          </div>
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
<script>
  //Modal edit form
  $(document).ready(function(){
    $(".btn-sm.edit").on("click", function () {
        $("#ModalUP").modal({ backdrop: false, keyboard: false })
      });
  });
</script>
<?php require '../../../layout/--admin/footer.php'; ?>
