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
<!-- End Search Bar -->

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

    <a class="nav-link collapsed" href="{{ route('dashboardstaff') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      <!-- End Dashboard Nav -->

   
  
        
         
    
     <!-- End Components Nav -->

     
        
        
      <!-- End Forms Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="">
        <i class="bi bi-layout-text-window-reverse"></i><span>Manage Order</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('neworder') }}">
              <i class="bi bi-circle"></i><span>New Order</span>
            </a>
          </li>
        </a>
        <li>
            <a href="{{ route('stafforders') }}">
              <i class="bi bi-circle"></i><span>Staff Order</span>
            </a>
          </li>
          <li>
            <a href="{{ route('stafforder.index') }}">
              <i class="bi bi-circle"></i><span>All Order</span>
            </a>
          </li>
</ul>
</li>
     <!-- End Tables Nav -->

      
        <a class="nav-link collapsed "  href="{{ route('staffpayment.index') }}">
          <i class="bi bi-bar-chart"></i><span>Payment</span></i>
        </a>
  <!-- End Blank Page Nav -->

  </ul>
  </aside><!-- End Sidebar-->
  <main id="main" class="main">

<div class="pagetitle">
  <h1>Manage Order</h1>
  
</div><!-- End Page Title -->  

          
        
    </div>
</div>

<div class="card">
        <div class="card-body">
          <h5 class="card-title">View Order</h5>
          <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    
        <div class="form-group">
        <table style="width:50%">

<tr>
<td><strong>Order Id:</strong></td>
<td>{{ $order->id }}</td>
</tr>
<tr>
<td><strong>Customer Id:</strong></td>
<td> {{ $order->user_id }}</td> 
</tr>
<tr>
<td><strong>Staff Id:</strong></td>
<td>  {{ $order->staff_id }}</td>
</tr>
<tr>
<td><strong>Status:</strong></td>
<td>  {{ $order->status }}</td>
</tr>
<tr>
<td><strong>Customer Name:</strong></td>
<td>    {{ $order->name }}</td>
</tr>
<tr>
<td> <strong>Address:</strong></td>
<td>    {{ $order->address}} </td>
</tr>
<tr>
<td> <strong>City:</strong></td>
<td>    {{ $order->city }} </td>
</tr>
<tr>
<td> <strong>State:</strong></td>
<td>    {{ $order->state }} </td>
</tr>
<tr>
<td> <strong>Postcode:</strong></td>
<td>    {{ $order->postcode }} </td>
</tr>
<tr>
<td>  <strong>Email:</strong></td>
<td>    {{ $order->email }} </td>
</tr>
<tr>
<td>  <strong>Phone No:</strong></td>
<td>    {{ $order->phoneno }} </td>
</tr>
<tr>
<td>  <strong>Delivery:</strong></td>
<td>     {{ $order->delivery }}</td>
</tr>
<tr>
<td>  <strong>Remarks:</strong></td>
<td>     {{ $order->remarks }}</td>
</tr>
<tr>
<td>  <strong>Payment Invoice:</strong></td>
<td>    <p> <img src="/image/{{ $order->paymentInvoice }}" width="300px"></td>
</tr>
</table>

    

    <div class="pull-left">
            <a class="btn btn-primary" href="{{ route('stafforder.index') }}" title="Go back"> <i class="fas fa-backward "></i>Back </a>
        </div>
</div>
            </div>

          </div>
        </div>
</div>
      </div>

    </div>
  </div>
</section>

</main>
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>98's cookies</span></strong>. All Rights Reserved
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

</html>