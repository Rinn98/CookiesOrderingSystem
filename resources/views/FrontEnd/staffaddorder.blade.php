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

      
        <a class="nav-link collapsed"  href="{{ route('staffpayment.index') }}">
          <i class="bi bi-bar-chart"></i><span>Payment</span></i>
        </a>
  <!-- End Icons Nav -->

      
      <!-- End Blank Page Nav -->

      </ul>

</aside><!-- End Sidebar-->


<main id="main" class="main">

    <div class="pagetitle">
      <h1>New Order</h1>
     
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
              <h5 class="card-title">New Order</h5>

              <!-- Vertical Form -->
              <form class="row g-3"  form method="post" action="{{ route('stafforder.store') }}">
              @csrf
              <div class="col-12">
                  <label class="col-sm-2 col-form-label">Product</label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="item" name="item"value="item" >
                    @foreach($stock as $stock)
                      <option value="{{$stock->description}}">{{$stock->description}}</option>
                      @endforeach
                    </select>
                  </div>

              
				 <div class="col-12">
                  <label for="inputEmail4" class="form-label">Quantity</label>
                  <input type="text" class="form-control" name="quantity">
                </div>
            
                <div class="col-12">
                  <label class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-12">
               
                    <select class="form-select" aria-label="item" name="price"value="price" >
                    @foreach($stocks as $stocks)
                      <option value="{{$stocks->price}}">{{$stocks->price}}</option>
                      @endforeach
                    </select>
                  </div>
               
             
          
				 <div class="col-12">
         
                  <label for="inputEmail4" class="form-label">Total</label>
                  <input type="text" class="form-control" name="total" >
                 
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Customer Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
				 <div class="col-12">
                  <label for="inputEmail4" class="form-label">Address</label>
                  <input type="text" class="form-control" name="address">
                </div>
				 <div class="col-12">
                  <label for="inputEmail4" class="form-label">City</label>
                  <input type="text" class="form-control" name="city">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">State</label>
                  <input type="text" class="form-control" name="state">
                </div>
				<div class="col-12">
                  <label for="inputPassword4" class="form-label">Postcode</label>
                  <input type="text" class="form-control" name="postcode">
                </div>
				<div class="col-12">
                  <label for="inputPassword4" class="form-label">Email</label>
                  <input type="text" class="form-control" name="email">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Phone Number</label>
                  <input type="text" class="form-control" name="phoneno">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Payment Invoice</label>
                 <p> <input type="file" id="filename" name="paymentInvoice">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Phone Number</label>
                  <input type="text" class="form-control" name="phoneno">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Delivery Services</label>
                  <p><select name="delivery" id="delivery">
								<option value="Postage">Postage</option>
								<option value="COD">COD</option>
    
								</select>
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Remarks</label>
                  <textarea class="form-control" name="remarks" id="remarks" rows="1" placeholder="Note about your order"></textarea>
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Payment Method</label>
                 <p> <input type="radio" id="html" name="paymentMethod" value="Bank Transfer">
										<label for="html">Bank Transfer</label><br>
										<input type="radio" id="CDM" name="paymentMethod" value="CDM">
										<label for="css">CDM</label><br>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Add Order</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              
              </form><!-- Vertical Form -->
              <body>  

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

</html>       