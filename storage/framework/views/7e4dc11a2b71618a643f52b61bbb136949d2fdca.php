<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Cake - Bakery</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linearicons/style.css" rel="stylesheet">
        <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
        <link href="vendors/stroke-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/jquery-ui/jquery-ui.min.css" rel="stylesheet">
        <link href="vendors/nice-select/css/nice-select.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Main Header Area =================-->
		<header class="main_header_area">
			<div class="top_header_area row m0">
				<div class="container">
					<div class="float-left">
						
					</div>
					<div class="float-right">
						
					<ul class="h_search list_style">
							<li class="shop_cart"><a href="<?php echo e(route('cart')); ?>"><i class="lnr lnr-cart"></i></a></li>
							<li><a class="popup-with-zoom-anim" href="#test-search"><i class="fa fa-search"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="main_menu_area">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="index.html">
						<img src="img/logo.png" alt="">
						<img src="img/logo-2.png" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="dropdown submenu active">
									<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo e(route('userdashboard')); ?>" role="button" aria-haspopup="true" aria-expanded="false">Home</a>	
								</li>
							
								<li><a href="<?php echo e(route('menu.index')); ?>">Our Cookies</a></li>
								<li><a href="<?php echo e(route('trackorder.index')); ?>">Track your Order</a></li>
							
							</ul>
							<ul class="navbar-nav justify-content-end">
								<li class="dropdown submenu">
									<a class="dropdown-toggle"  href="<?php echo e(route('signout')); ?>">Logout</a>
								
								</li>
							</ul>
							
						</div>
					</nav>
				</div>
			</div>
		</header>
        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Chekout</h3>
        			<ul>
        				<li><a href="index.html">Home</a></li>
        				<li><a href="checkout.html">Chekout</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Billing Details Area =================-->    
        <section class="billing_details_area p_100">
            <div class="container">
			<?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>  
    </div><br />
	<?php endif; ?>

	<?php if(count($errors)>0): ?>
	<div class="alert alert-danger">
		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
                <div class="row">
                	<div class="col-lg-7">
               	    	<div class="main_title">
               	    		<h2>Billing Details</h2>
               	    	</div>
                		<div class="billing_form_area">
                			<form class="billing_form row" action="<?php echo e(route('paymentcust.store')); ?>" method="POST" id="contactForm" novalidate="novalidate">
							<?php echo csrf_field(); ?>
								<div class="form-group col-md-12">
								    <label for="first"> Name *</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo e(Auth::user()->name); ?>" readonly>
								</div>
								
								<div class="form-group col-md-12">
								    <label for="address">Address *</label>
									<input type="text" class="form-control" id="address" name="address" placeholder="Street Address" value="<?php echo e(Auth::user()->address); ?>" >
								</div>
								<div class="form-group col-md-12">
								    <label for="city"> City </label>
									<input type="text" class="form-control" id="city" name="city" placeholder="City" value="<?php echo e(Auth::user()->city); ?>" >
								</div>
								<div class="form-group col-md-6">
								    <label for="state1">State </label>
									<input type="text" class="form-control" id="state" name="state" placeholder="State" value="<?php echo e(Auth::user()->state); ?>" >
								
								</div>
								<div class="form-group col-md-6">
								    <label for="zip">Postcode / Zip *</label>
									<input type="text" class="form-control" id="postcode" name="postcode" placeholder="Postcode / Zip" value="<?php echo e(Auth::user()->postcode); ?>" >
								</div>
								<div class="form-group col-md-6">
								    <label for="email">Email Address *</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="<?php echo e(Auth::user()->email); ?>" readonly>
								</div>
								<div class="form-group col-md-6">
								    <label for="phone">Phone *</label>
									<input type="text" class="form-control" id="phoneno" name="phoneno" placeholder="Select an option" value="<?php echo e(Auth::user()->phoneno); ?>" >
								</div>
								<div class="form-group col-md-12">
								 <label for="phone">Upload Payment Invoice (.Jpg/.Png only)</label>
								 <input type="file" id="filename" name="paymentInvoice">
								 </div>
								 <div class="form-group col-md-12">
								 <label for="phone">Delivery Services</label>
					
								<select name="delivery" id="delivery">
								<option value="Postage">Postage</option>
								<option value="COD">COD</option>
    
								</select>
								 
								 </div>
								<div class="form-group col-md-12">
									<label for="remarks">Remarks</label>
									<textarea class="form-control" name="remarks" id="remarks" rows="1" placeholder="Note about your order"></textarea>
								</div>
							
                		</div>
                	</div>
					
                	<div class="col-lg-5">
					
                		<div class="order_box_price">
                			<div class="main_title">
							
                				<h2>Your Order</h2>
                			</div>
							<div class="payment_list">
								<div class="price_single_cost">
								
									<h5>Product <span>Total</span></h5>
									<?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<h5><?php echo e($item->name); ?> x <?php echo e($item->qty); ?> <span>RM <?php echo e($item-> price); ?></span></h5>
									<h5>Delivery/Postage Charge <span>RM 5</span></h5>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<h3>Total <span>RM <?php echo e(Cart::total()+5); ?></span></h3>
									
								</div>
								
								<div id="accordion" class="accordion_area">
								<div class="card">
								<strong><label for="paymentMethod">Payment Method</label></strong>
										<div class="card-header" id="headingOne">
										<input type="radio" id="html" name="paymentMethod" value="Bank Transfer">
										<label for="html">Bank Transfer</label><br>
										<input type="radio" id="CDM" name="paymentMethod" value="CDM">
										<label for="css">CDM</label><br>
											</div>
										</div>
									
								</div>
								<button type="submit" value="submit" class="btn pest_btn">place order</button>
							</div>
							</form>
						</div>
                	</div>
                </div>
		
            </div>
        </section>
        <!--================End Billing Details Area =================-->   
        
        <!--================Newsletter Area =================-->
        
        <!--================End Newsletter Area =================-->
        
        <!--================Footer Area =================-->
         <footer class="footer_area">
        	<div class="footer_widgets">
        		<div class="container">
        			<div class="row footer_wd_inner">
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_about_widget">
        						
        						
        						<ul class="nav">
        							
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_link_widget">
        						<div class="f_title">
        							
        						</div>
        						<ul class="list_style">
        							
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_link_widget">
        						<div class="f_title">
        							<h3>Work Times</h3>
        						</div>
        						<ul class="list_style">
        							<li><a href="#">Mon. :  Fri.: 8 am - 4pm</a></li>
        							<li><a href="#">Sat. : 9am - 4pm</a></li>
        							<li><a href="#">Sun. : Closed</a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_contact_widget">
        						<div class="f_title">
        							<h3>Contact Info</h3>
        						</div>
        						<h4>01128413718</h4>
        						<p>98's cookies <br />JALAN ROS 1, BUKIT SENTOSA, RAWANG</p>
        						
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="footer_copyright">
        		<div class="container">
        			<div class="copyright_inner">
        				<div class="float-left">
        					
        				</div>
        				<div class="float-right">
        					
        				</div>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        <!--================Search Box Area =================-->
        <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3>Search</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
                </div>
            </div>
        </div>
        <!--================End Search Box Area =================-->
        
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- Extra plugin js -->
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/datetime-picker/js/moment.min.js"></script>
        <script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        
        
        <script src="js/theme.js"></script>
    </body>

</html><?php /**PATH C:\laragon\www\Cookies\resources\views/FrontEnd/payment.blade.php ENDPATH**/ ?>