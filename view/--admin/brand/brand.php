<?php 
    require '../../../layout/--admin/header.php'; 
    require '../../../layout/--admin/sidebar.php';
?>

<main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Quản lý thương hiệu</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
                <!-- Các button chức năng thêm xóa sửa ... -->
              <div class="row element-button">
                <div class="col-sm-2">
  
                  <a class="btn btn-add btn-sm" href="./add-brand.php" title="Thêm"><i class="fas fa-plus"></i>
                    Tạo mới</a>
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
                                    <th>ID thương hiệu</th>
                                    <th>Mã thương hiệu</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên Thương Hiệu</th>
                                    <th>Người tạo</th>
                                    <th>Thời gian</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <?php  while ($brand = mysqli_fetch_assoc($brand_list)): ?>
                            <tbody>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td class="id_brand"><?php echo $brand['id_brand']; ?></td>
                                    <td class="brand_code"><?php echo $brand['brand_code']; ?></td>
                                    <td>
                                      <img class="img-card-person" src="../../../<?php echo $brand['image'] ?>" alt="">
                                    </td>
                                    <td class="name_brand"><?php echo $brand['name']; ?></td>
                                    <td class="user"><?php echo $brand['user']; ?></td>
                                    <td class="date"><?php echo $brand['date']; ?></td>
                                    <td>
                                        <a href="./delete-brand.php?id_brand=<?php echo $brand['id_brand']; ?>">
                                          <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                                        </a>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button></td>
                                </tr>
                            </tbody>
                            <?php endwhile; ?>
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

        <form method="POST" enctype="multipart/form-data" action="../../../Controller/--admin/brand/update-brand.php" class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Chỉnh sửa thông tin thương hiệu</h5>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="control-label">ID thương hiệu</label>
              <input class="form-control" type="text" name="id_brand" required value="#CD2187">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Mã thương hiệu</label>
              <input class="form-control" type="text" name="code_brand" required value="##SunHouse">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Tên thương hiệu</label>
              <input class="form-control" type="text" name="name_brand" required value="Sun House">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Thời gian</label>
              <input class="form-control" type="text" name="date" required value="Sun House">
            </div>
            <div class="form-group col-md-12">
                <label for="myfileupload" class="control-label">Hình ảnh</label>
                <div id="myfileupload">
                  <input type="file" id="uploadImage" name="uploadImage"/>
                </div>
            </div>
          </div>
          <BR>
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
          <BR>
        </form>
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
        let elementIdBrand = $(this).parent().parent().find('.id_brand')[0]
        let elementBrandCode = $(this).parent().parent().find('.brand_code')[0]
        let elementName = $(this).parent().parent().find('.name_brand')[0]
        let elementDate = $(this).parent().parent().find('.date')[0]
    
        // render Value edit
        $('input[name="id_brand"]').val(elementIdBrand.innerText)
        $('input[name="code_brand"]').val(elementBrandCode.innerText)
        $('input[name="name_brand"]').val(elementName.innerText)
        $('input[name="date"]').val(elementDate.innerText)
        });
  });
</script>
<?php require '../../../layout/--admin/footer.php'; ?>