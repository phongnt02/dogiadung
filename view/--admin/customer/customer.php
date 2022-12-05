<?php 
    require '../../../layout/--admin/header.php'; 
    require '../../../layout/--admin/sidebar.php';
?>

<main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Danh sách khách hàng</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
                <div class="col-sm-2">
  
                  <a class="btn btn-add btn-sm" href="./add-customer.php" title="Thêm"><i class="fas fa-plus"></i>
                    Tạo mới khách hàng</a>
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
                    <th>STT</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Ngày đăng ký</th>
                    <th>Tính năng</th>
                  </tr>
                </thead>
                <?php $i=0?>
                <?php while ($customer = mysqli_fetch_assoc($customer_list)): ?>
                <?php $i++?>
                <tbody>
                  <tr>
                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                    <td><?php echo $i?></td>
                    <td><?php echo $customer['fullname']?></td>
                    <td><?php echo $customer['email']?></td>
                    <td><?php echo $customer['phone']?></td>
                    <td><?php echo $customer['address']?></td>
                    <td><?php echo $customer['date']?></td>
                    <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button>
                      <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button></td>
                  </tr>
                </tbody>
                <?php endwhile?>
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
                <h5>Chỉnh sửa thông tin khách hàng</h5>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label class="control-label">ID khách hàng</label>
              <input class="form-control" type="text" required value="#CD2187" disabled>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Họ và tên</label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group col-md-12">
              <label for="exampleSelect1" class="control-label">Giới tính</label>
              <select class="form-control" id="exampleSelect1">
                <option>-- Chọn giới tính --</option>
                <option>Nam</option>
                <option>Nữ</option>
              </select>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Tên đăng nhập</label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Mật khẩu</label>
              <input class="form-control" type="password">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Email</label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Số điện thoại</label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Địa chỉ</label>
              <input class="form-control" type="text">
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