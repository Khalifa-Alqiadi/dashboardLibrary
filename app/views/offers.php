
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
  <h5 class="card-header">ادارة العروض</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>عنوان العرض</th>
            <th>الخصم</th> 
            <th>تاريخ بدء العرض</th> 
            <th>تاريخ انتهاء العرض</th> 
            <th>اسم الكتاب</th> 
            <th>اسم القسم</th> 
            <th>الحالة</th>
            <th>العمليات</th>
          </tr>
        </thead>
        <tbody>
       
         
         <?php foreach($params as $offers){?>
          <tr>
            <td><?= $offers['title'];?></td>
            <td><?= $offers['discount'];?></td>
            <td><?= $offers['start_date'];?></td>
            <td><?= $offers['end_date'];?></td>
            <td><?= $offers['book_ids'];?></td>
            <td><?= $offers['category_ids'];?></td>
            <td>
              <?php if($offers['is_active']==1) {?>    
              <a href="noActive_offers/<?php echo $offers['id']?>" class="badge bg-label-success me-1">مفعل</a>
              <?php }
              else {?>
              <a href="isActive_offers/<?php echo $offers['id']?>" class="badge bg-label-danger me-1">موقف</a>
              <?php } ?>
            </td>
            <td>
              <a href="edit_offers/<?php echo $offers['id'];?>" class="btn btn-icon btn-outline-dribbble">
                <i class="tf-icons bx bx-edit-alt me-1"></i>
              </a>
              <a href="delete_offers/<?php echo $offers['id'];?>" class="btn btn-icon btn-outline-dribbble">
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