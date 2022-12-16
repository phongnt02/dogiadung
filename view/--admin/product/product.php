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
              <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> Xóa tất cả </a>
            </div>
          </div>
          <table class="table table-hover table-bordered" id="sampleTable" style="margin-left:-16px;">
            <thead>
              <tr>
                <th width="10"><input type="checkbox" id="all"></th>
                <th>ID </th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá tiền</th>
                <th>Số lượng</th>
                <th>Tình trạng</th>
                <th>Danh mục</th>
                <th>Thương hiệu</th>
                <th>Người tạo</th>
                <th>Chức năng</th>
              </tr>
            </thead>
            <?php while ($product = mysqli_fetch_assoc($product_list)) : ?>
              <tbody>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td class="id_product"><?php echo $product['id_product'] ?></td>
                  <td class="product_code"><?php echo $product['product_code'] ?></td>
                  <td class="name"><?php echo $product['name'] ?></td>
                  <td><img src="../../../<?php echo $product['image'] ?>" alt="" width="100px;"></td>
                  <td class="price"><?php echo $product['price'] ?></td>
                  <td class="amount"><?php echo $product['amount'] ?></td>
                  <td class="status"><span class="badge <?php echo ($product['status'] == 'còn hàng') ? "bg-success" : "bg-danger" ?>"><?php echo $product['status'] ?></span></td>
                  <td class="name_category"><?php echo $product['name_category'] ?></td>
                  <td class="name_brand"><?php echo $product['name_brand'] ?></td>
                  <td><?php echo $product['user'] ?></td>
                  <td>
                    <a href="./delete-product.php?id_product=<?php echo $product['id_product'] ?>">
                      <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                    </a>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button>
                  </td>
                </tr>
              </tbody>
            <?php endwhile ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>

<!--
  MODAL
-->
<div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <form method="POST" action="../../../Controller/--admin/product/update-product.php" class="modal-body">
        <div class="row">
          <div class="form-group  col-md-12">
            <span class="thong-tin-thanh-toan">
              <h5>Chỉnh sửa thông tin sản phẩm</h5>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label class="control-label">ID sản phẩm</label>
            <input class="form-control" type="text" name="id_product" required value="#CD2187">
          </div>
          <div class="form-group col-md-12">
            <label class="control-label">Mã sản phẩm</label>
            <input class="form-control" type="text" name="product_code" required value="#CD2187">
          </div>
          <div class="form-group col-md-12">
            <label class="control-label">Tên sản phẩm</label>
            <input class="form-control" value="" name="name" type="text">
          </div>
          <div class="form-group col-md-12">
            <label class="control-label" >Số lượng</label>
            <input class="form-control" type="number" name="amount" value="">
          </div>
          <div class="form-group col-md-12">
            <label class="control-label">Giá tiền</label>
            <input class="form-control" value="" name="price" type="text">
          </div>
          <div class="form-group col-md-12 ">
            <label for="exampleSelect1" class="control-label">Tình trạng</label>
            <select class="form-control" id="exampleSelect1" name="status">
              <option>-- Chọn tình trạng --</option>
              <option value="">Còn hàng</option>
              <option value="">Hết hàng</option>
            </select>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleSelect1" class="control-label">Danh mục</label>
            <select class="form-control" id="exampleSelect1" name="category">
              <option>-- Chọn danh mục --</option>
              <?php while ($category = mysqli_fetch_assoc($list_category)) : ?>
                <option value="<?php echo $category['name']; ?>"><?php echo $category['name']; ?></option>
              <?php endwhile ?>
            </select>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleSelect1" class="control-label">Thương hiệu</label>
            <select class="form-control" id="exampleSelect1" name="brand">
              <option>-- Chọn thương hiệu --</option>
              <?php while($brand = mysqli_fetch_assoc($list_brand)) : ?>
                <option value="<?php echo $brand['name'];?>"><?php echo $brand['name'];?></option>
              <?php endwhile?>
            </select>
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
  $(document).ready(function() {
    $(".btn-sm.edit").on("click", function() {
      $("#ModalUP").modal({
        backdrop: false,
        keyboard: false
      })
      let elementIdProduct = $(this).parent().parent().find('.id_product')[0]
      let elementProductCode = $(this).parent().parent().find('.product_code')[0]
      let elementName = $(this).parent().parent().find('.name')[0]
      let elementAmount = $(this).parent().parent().find('.amount')[0]
      let elementPrice = $(this).parent().parent().find('.price')[0]
      let elementStatus = $(this).parent().parent().find('.status')[0]
  
      // render Value edit
      $('input[name="id_product"]').val(elementIdProduct.innerText)
      $('input[name="product_code"]').val(elementProductCode.innerText)
      $('input[name="name"]').val(elementName.innerText)
      $('input[name="amount"]').val(elementAmount.innerText)
      $('input[name="price"]').val(elementPrice.innerText)
      
    });
  });
</script>
<?php require '../../../layout/--admin/footer.php'; ?>