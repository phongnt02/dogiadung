<?php 
    require '../../../layout/--admin/header.php'; 
    require '../../../layout/--admin/sidebar.php';
?>

<main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Quản lý danh mục</b></a></li>
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
  
                  <a class="btn btn-add btn-sm" href="./add-category.php" title="Thêm"><i class="fas fa-plus"></i>
                    Tạo mới</a>
                </div>
              </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th>STT</th>
                                    <th>ID danh mục</th>
                                    <th>Mã danh mục</th>
                                    <th>Tên danh mục</th>
                                    <th>Hình ảnh</th>
                                    <th>Người tạo</th>
                                    <th>Thời gian</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <?php $i=0;?>
                            <?php while ($category = mysqli_fetch_assoc($category_list)): ?>
                            <?php $i++?>
                            <tbody>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td><?php echo $i;?></td>
                                    <td class="id_category"><?php echo $category['id_category']; ?></td>
                                    <td class="category_code"><?php echo $category['category_code']; ?></td>
                                    <td class="name"><?php echo $category['name']; ?></td>
                                    <td>
                                      <img class="img-card-person" src="<?php echo $category['image'] ?>" alt="">
                                    </td>
                                    <td><?php echo $category['user']; ?></td>
                                    <td><?php echo $category['create_date']; ?></td>
                                    <td>
                                      <a href="./delete-category.php?id_category=<?php echo $category['id_category']?>">
                                        <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                                      </a>
                                      <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button>
                                    </td>
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

        <form method="POST" enctype="multipart/form-data" action="../../../Controller/--admin/category/update-category.php" class="modal-body">
          <div class="row">
            <div class="form-group col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Chỉnh sửa thông tin danh mục</h5>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="control-label">ID danh mục</label>
              <input class="form-control" type="text" name="id_category" required value="#CD2187">
              <span class="error" style="color: red; margin-top:6px;display: none;">ID không được phép sửa</span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Mã danh mục</label>
              <input class="form-control" type="text" name="code_category" required value="##SunHouse">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Tên danh mục</label>
              <input class="form-control" type="text" name="name_category" required value="##SunHouse">
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Hình ảnh</label>
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
        let elementID = $(this).parent().parent().find('.id_category')[0]
        let elementName = $(this).parent().parent().find('.name')[0]
        let elementCode = $(this).parent().parent().find('.category_code')[0]
        
        // render Value edit
        $('input[name="id_category"]').val(elementID.innerText)
        $('input[name="name_category"]').val(elementName.innerText)
        $('input[name="code_category"]').val(elementCode.innerText)

        //focus error
        let inputID = $('input[name="id_category" ]')[0]
        inputID.onfocus = function () {
          let error = $('.error')[0]
          error.style.display = 'inline-block'
        }
      });
  });
</script>
<?php require '../../../layout/--admin/footer.php'; ?>