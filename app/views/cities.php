
<?php include ("include/head.php");?>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">







      <!-- Menu -->

      <?php include("include/aside.php");?>
      <!-- / Menu -->



      <!-- Layout container -->
      <div class="layout-page">



        <!-- Navbar -->


        <?php include("include/nav.php");?>




        <!-- / Navbar -->



        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>

<div class="card">
  <h5 class="card-header">ادارة المدن</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>اسم المدينة</th>
            <th>الحالة</th>
            <th>العمليات</th>
          </tr>
        </thead>
        <tbody>
       
         
         <?php foreach($params as $cities){?>
          <tr>
            <td><?= $cities['name'];?></td>
            <td>
              <?php if($cities['is_active']==1) {?>    
              <a href="noActive_city/<?php echo $cities['id']?>" class="badge bg-label-success me-1">مفعل</a>
              <?php }
              else {?>
              <a href="isActive_city/<?php echo $cities['id']?>" class="badge bg-label-danger me-1">موقف</a>
              <?php } ?>
            </td>
            <td>
              <a href="edit_city/<?php echo $cities['id'];?>" class="btn btn-icon btn-outline-dribbble">
                <i class="tf-icons bx bx-edit-alt me-1"></i>
              </a>
              <a href="delete_user/<?php echo $cities['id'];?>" class="btn btn-icon btn-outline-dribbble">
                <i class="tf-icons bx bx-trash me-1"></i>
              </a>
              
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--/ Bordered Table -->
          </div>
          <!-- / Content -->



<?php include "include/footer.php"; ?>