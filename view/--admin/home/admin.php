<?php 
    require '../../../layout/--admin/header.php'; 
    require '../../../layout/--admin/sidebar.php'
?>

<main class="app-content">
    <div class="row">
      <div class="col-md-12">
        <div class="app-title">
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="#"><b>Bảng điều khiển</b></a></li>
          </ul>
          <div id="clock"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="row">
       <!-- col-6 -->
       <div class="col-md-6">
        <div class="widget-small primary coloured-icon"><i class='icon bx bxs-user-account fa-3x'></i>
          <div class="info">
            <h4>Tổng khách hàng</h4>
            <p><b><?php $count = mysqli_fetch_assoc($countCustomer); echo $count['tongkhachhang']?> khách hàng</b></p>
            <p class="info-tong">Tổng số khách hàng được quản lý.</p>
          </div>
        </div>
      </div>
       <!-- col-6 -->
          <div class="col-md-6">
            <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
              <div class="info">
                <h4>Tổng sản phẩm</h4>
                <p><b><?php $count = mysqli_fetch_assoc($countProduct); echo $count['tongsp']?> sản phẩm</b></p>
                <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
              </div>
            </div>
          </div>
           <!-- col-6 -->
          <div class="col-md-6">
            <div class="widget-small warning coloured-icon"><i class='icon bx bxs-shopping-bags fa-3x'></i>
              <div class="info">
                <h4>Tổng thương hiệu</h4>
                <p><b><?php $count = mysqli_fetch_assoc($countBrand); echo $count['tongthuonghieu']?> đơn hàng</b></p>
                <p class="info-tong">Tổng số thương hiệu được quản lý.</p>
              </div>
            </div>
          </div>
           <!-- col-6 -->
          <div class="col-md-6">
            <div class="widget-small warning coloured-icon"><i class='icon bx bxs-shopping-bags fa-3x'></i>
              <div class="info">
                <h4>Tổng danh mục</h4>
                <p><b><?php $count = mysqli_fetch_assoc($countCategory); echo $count['tongdanhmuc']?> danh mục</b></p>
                <p class="info-tong">Tổng số danh mục được quản lý.</p>
              </div>
            </div>
          </div>
           <!-- col-12 -->
           <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Đặt hàng</h3>
              <div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID đơn hàng</th>
                      <th>Tên khách hàng</th>
                      <th>Tổng tiền</th>
                      <th>Trạng thái</th>
                    </tr>
                  </thead>
                  <?php  while ($order = mysqli_fetch_assoc($order_list)): ?>
                  <tbody>
                    <tr>
                      <td><?php echo $order['id_order']?></td>
                      <td><?php echo $order['fullname']?></td>
                      <td>
                      <?php echo $order['total_price']?>
                      </td>
                      <td><span class="badge bg-info"><?php echo $order['status']?></span></td>
                    </tr>
                  </tbody>
                  <?php endwhile?>
                </table>
              </div>
              <!-- / div trống-->
            </div>
           </div>
        </div>
      </div>
    </div>
<?php require '../../../layout/--admin/footer.php'; ?>
