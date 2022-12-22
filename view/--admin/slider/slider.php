<?php 
    require '../../../layout/--admin/header.php'; 
    require '../../../layout/--admin/sidebar.php';
?>

<main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Quản lý slider</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
                <div class="col-sm-2">
  
                  <a class="btn btn-add btn-sm" href="./add-slider.php" title="Thêm"><i class="fas fa-plus"></i>
                    Tạo mới slide</a>
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
                    <th>ID Slide</th>
                    <th>Hình ảnh</th>
                    <th>Người tạo</th>
                    <th>Kiểu</th>
                    <th>Thời gian</th>
                    <th>Tính năng</th>
                  </tr>
                </thead>
                <?php while ($slider = mysqli_fetch_assoc($slider_list)): ?>
                <tbody>
                  <tr>
                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                    <td class="id_slider"><?php echo $slider['id_slider'] ?></td>
                    <td><img class="img-card-person" src="../../../<?php echo $slider['image'] ?>" alt=""></td>
                    <td class="user"><?php echo $slider['user'] ?></td>
                    <td class="type"><?php echo $slider['type'] ?></td>
                    <td class="date"><?php echo $slider['date'] ?></td>
                    <td>
                      <a href="./delete-slider.php?id_slider=<?php echo $slider['id_slider'] ?>">
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

        <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Chỉnh sửa thông tin slider</h5>
              </span>
            </div>
          </div>
          <form class="row" method="POST" enctype="multipart/form-data" action="../../../Controller/--admin/slider/update-slider.php">
            <div class="form-group col-md-12">
              <label class="control-label">ID slider</label>
              <input class="form-control" name="id_slider" type="text" required value="#CD2187">
              <span class="error" style="color: red; margin-top:6px;display: none;">ID không được phép sửa</span>
            </div>
            <div class="form-group col-md-12">
                  <label class="control-label">Người tạo</label>
                  <input class="form-control" name="user" type="text">
            </div>
            <div class="form-group col-md-12">
                  <label class="control-label">Kiểu</label>
                  <input class="form-control" name="type" type="text">
            </div>
            <div class="form-group col-md-12">
                <label for="myfileupload" class="control-label">Hình ảnh</label>
                <div id="myfileupload">
                  <input type="file" id="uploadImage" name="uploadImage"/>
                </div>
            </div>
            <div class="form-group col-md-12">
              <button class="btn btn-save" type="submit">Lưu lại</button>
              <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
            </div>
          </form>
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
        let elementID = $(this).parent().parent().find('.id_slider')[0]
        let elementUser = $(this).parent().parent().find('.user')[0]
        let elementType = $(this).parent().parent().find('.type')[0]
        
        // render Value edit
        $('input[name="id_slider"]').val(elementID.innerText)
        $('input[name="user"]').val(elementUser.innerText)
        $('input[name="type"]').val(elementType.innerText)

        //focus error
        let inputID = $('input[name="id_slider" ]')[0]
        inputID.onfocus = function () {
          let error = $('.error')[0]
          error.style.display = 'inline-block'
        }
      });
  });
</script>
<?php require '../../../layout/--admin/footer.php'; ?>
