<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">98's Cookies</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        
          <!-- End Notification Dropdown Items -->

       <!-- End Notification Nav -->

        

          <!-- End Messages Dropdown Items -->

        <!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" >
            
            <span class="d-none d-md-block ">Logout</span>
          </a><!-- End Profile Iamge Icon -->

         

         <!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

<li class="nav-item"> 
<a class="nav-link collapsed " href="<?php echo e(route('admin')); ?>">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
</li>
  <!-- End Dashboard Nav -->


  <li class="nav-item">
  <a class="nav-link collapsed"  href="<?php echo e(route('adminstock.index')); ?>">
      <i class="bi bi-menu-button-wide"></i><span>Register Cookies</span></i>
    </a>
</li>
     

 <!-- End Components Nav -->

 
    
    
  <!-- End Forms Nav -->


<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="">
      <i class="bi bi-gem"></i><span>New Order</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
        <a href="<?php echo e(route('neworder')); ?>">
          <i class="bi bi-circle"></i><span>New Order</span>
        </a>
      </li>
    </a>
    <li>
        <a href="<?php echo e(route('stafforders')); ?>">
          <i class="bi bi-circle"></i><span>Staff Order</span>
        </a>
      </li>
      <li>
        <a href="<?php echo e(route('adminorder.index')); ?>">
          <i class="bi bi-circle"></i><span>All Order</span>
        </a>
      </li>
</ul>
</li>
 <!-- End Tables Nav -->

 <li class="nav-item">
    <a class="nav-link collapsed"  href="<?php echo e(route('adminpayment.index')); ?>">
      <i class="bi bi-bar-chart"></i><span>Payment</span></i>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed"  href="<?php echo e(url('staff')); ?>">
      <i class="bi bi-journal-text"></i><span>Manage Staff</span></i>
    </a>
</li>
  <!-- End Charts Nav -->
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-gem"></i><span>Report</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
        <a href="<?php echo e(route('dailyreport')); ?>">
          <i class="bi bi-circle"></i><span>Sales Report</span>
        </a>
      </li>
    </a>
      <li>
        <a href="<?php echo e(route('profitreport.index')); ?>">
          <i class="bi bi-circle"></i><span>Profit Report</span>
        </a>
      </li>

   
  <!-- End Icons Nav -->

  
  <!-- End Blank Page Nav -->

</ul>

</aside><!-- End Sidebar-->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage Staff</h1>
     
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <!-- End Horizontal Form -->

            </div>
          </div>

         <!-- End Multi Columns Form -->

            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Staff Information</h5>

              <!-- Vertical Form -->
              <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                </div>
    <?php endif; ?>
              <form class="row g-3" method="post" action="<?php echo e(route('staff.update', $staff->id)); ?>">
                <div class="col-12">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" value="<?php echo e($staff->name); ?>">
                </div>
                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" name="price" value="<?php echo e($staff->address); ?>">
                </div>
                <div class="col-12">
                  <label for="city" class="form-label">City</label>
                  <input type="text" class="form-control" name="city" value="<?php echo e($staff->city); ?>">
                </div>
                <div class="col-12">
                  <label for="postcode" class="form-label">Postcode</label>
                  <input type="text" class="form-control" name="postcode" value="<?php echo e($staff->postcode); ?>">
                </div>
                <div class="col-12">
                  <label for="phoneno" class="form-label">Phone No</label>
                  <input type="text" class="form-control" name="phoneno" value="<?php echo e($staff->phoneno); ?>">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Update Staff</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

          <!-- End floating Labels Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>98's Cookies</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html><?php /**PATH C:\laragon\www\Cookies\resources\views/FrontEnd/editstaff.blade.php ENDPATH**/ ?>