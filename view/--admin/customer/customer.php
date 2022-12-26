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
                    <th>ID Khách hàng</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Tính năng</th>
                  </tr>
                </thead>
                <?php while ($customer = mysqli_fetch_assoc($customer_list)): ?>
                <tbody>
                  <tr>
                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                    <td class="id_customer" ><?php echo $customer['id_customer']?></td>
                    <td class="fullname" ><?php echo $customer['fullname']?></td>
                    <td class="email" ><?php echo $customer['email']?></td>
                    <td class="phone" ><?php echo $customer['phone']?></td>
                    <td class="address" ><?php echo $customer['address']?></td>
<<<<<<< HEAD
=======
                    <td class="date" ><?php echo $customer['date']?></td>
>>>>>>> d79df755514f5f7e1b8a9190866cd5d9526b6560
                    <td>
                      <a href="./delete-customer.php?id_customer=<?php echo $customer['id_customer']?>">
                        <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button>
                      </a>
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

        <form class="modal-body" method="POST" action="../../../Controller/--admin/customer/update-customer.php">
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
              <input class="form-control" name="id_customer" type="text" required value="#CD2187">
              <span class="error" style="color: red; margin-top:6px;display: none;">ID không được phép sửa</span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Họ và tên</label>
              <input class="form-control" name="fullname" type="text">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Email</label>
              <input class="form-control" name="email" type="text">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Số điện thoại</label>
              <input class="form-control" name="phone" type="text">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Địa chỉ</label>
              <input class="form-control" name="address" type="text">
            </div>
          </div>
          <button class="btn btn-save" type="submit">Lưu lại</button>
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
        let elementIdCustomer = $(this).parent().parent().find('.id_customer')[0]
        let elementFullName = $(this).parent().parent().find('.fullname')[0]
        let elementEmail = $(this).parent().parent().find('.email')[0]
        let elementPhone = $(this).parent().parent().find('.phone')[0]
        let elementAddress = $(this).parent().parent().find('.address')[0]
    
        // render Value edit
        $('input[name="id_customer"]').val(elementIdCustomer.innerText)
        $('input[name="fullname"]').val(elementFullName.innerText)
        $('input[name="email"]').val(elementEmail.innerText)
        $('input[name="phone"]').val(elementPhone.innerText)
        $('input[name="address"]').val(elementAddress.innerText)
         //focus error
         let inputID = $('input[name="id_customer"]')[0]
        inputID.onfocus = function () {
          let error = $('.error')[0]
          error.style.display = 'inline-block'
        } 
    });
  });
</script>
<?php require '../../../layout/--admin/footer.php'; ?>