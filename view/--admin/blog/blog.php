<?php 
    require '../../../layout/--admin/header.php'; 
    require '../../../layout/--admin/sidebar.php';
?>
<main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Quản lý bài viết</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
                <div class="col-sm-2">
                  <a class="btn btn-add btn-sm" href="./add-blog.php" title="Thêm"><i class="fas fa-plus"></i>
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
                    <th>ID Bài viết</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Người viết</th>
                    <th>Mô tả</th>
                    <th>Thời gian</th>
                    <th>Ảnh</th>
                    <th>Chức năng</th>
                  </tr>
                </thead>
                <?php  while ($blog = mysqli_fetch_assoc($blog_list)): ?>
                <tbody>
                  <tr>
                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                    <td class="id_blog"><?php echo $blog['id_blog']?></td>
                    <td class="title"><?php echo $blog['title']?></td>
                    <td class="content"><?php echo $blog['content']?></td>
                    <td class="user"><?php echo $blog['user']?></td>
                    <td class="description"><?php echo $blog['description']?></td>
                    <td class="date"><?php echo $blog['date']?></td>
                    <td><img class="img-card-person" src="../../../<?php echo $blog['image']?>" alt=""></td>
                    <td>
                      <a href="./delete-blog.php?id_blog=<?php echo $blog['id_blog']?>">
                        <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button>
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

        <form class="modal-body" method="POST" action="../../../Controller/--admin/blog/update-blog.php">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Chỉnh sửa thông tin bài viết</h5>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label class="control-label">ID bài viết</label>
              <input class="form-control" name="id_blog" type="text" required value="#CD2187">
              <span class="error" style="color: red; margin-top:6px;display: none;">ID không được phép sửa</span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Tiêu đề</label>
              <input class="form-control" name="title" type="text" required value="Content">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Mô tả ngắn</label>
              <textarea class="form-control" name="description" rows="4"></textarea>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Nội dung</label>
              <textarea class="form-control" name="content" rows="8" col="10"></textarea>
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Hình ảnh</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="ImageUpload" onchange="readURL(this);" />
                </div>
            </div>
          </div>
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
        let elementID = $(this).parent().parent().find('.id_blog')[0]
        let elementTitle = $(this).parent().parent().find('.title')[0]
        let elementUser = $(this).parent().parent().find('.user')[0]
        let elementContent = $(this).parent().parent().find('.content')[0]
        let elementDescription = $(this).parent().parent().find('.description')[0]

        
        // render Value edit
        $('input[name="id_blog"]').val(elementID.innerText)
        $('input[name="title"]').val(elementTitle.innerText)
        $('input[name="user"]').val(elementUser.innerText)
        $('textarea[name="content"]').val(elementContent.innerText)
        $('textarea[name="description"]').val(elementDescription.innerText)

        //focus error
        let inputID = $('input[name="id_blog" ]')[0]
        inputID.onfocus = function () {
          let error = $('.error')[0]
          error.style.display = 'inline-block'
        }
      });
  });
</script>
<?php require '../../../layout/--admin/footer.php'; ?>
