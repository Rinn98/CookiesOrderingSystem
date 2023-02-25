
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
	
			<div class="wrap-login100">
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
				<form class="login100-form validate-form"form action="<?php echo e(url('post-registration')); ?>" method="POST">
				<?php echo e(csrf_field()); ?>

					<span class="login100-form-title p-b-26">
						Register
					</span>
					<span class="login100-form-title p-b-48">
						
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter Name">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Enter Name"></span>
                        <?php if($errors->has('name')): ?>
                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                        <?php endif; ?>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
                        <?php if($errors->has('password')): ?>
                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                         <?php endif; ?>
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<div class="wrap-input100 validate-input" required>
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Enter Username"></span>
                        <?php if($errors->has('username')): ?>
                        <span class="text-danger"><?php echo e($errors->first('username')); ?></span>
                        <?php endif; ?>
					</div>
					<div class="wrap-input100 validate-input" required>
						<input class="input100" type="text" name="address">
						<span class="focus-input100" data-placeholder="Enter Address"></span>
                        <?php if($errors->has('address')): ?>
                        <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                         <?php endif; ?>
					</div>
					<div class="wrap-input100 validate-input" required>
						<input class="input100" type="text" name="city">
						<span class="focus-input100" data-placeholder="Enter City"></span>
                        <?php if($errors->has('city')): ?>
                        <span class="text-danger"><?php echo e($errors->first('city')); ?></span>
                        <?php endif; ?>
					</div>
					<div class="wrap-input100 validate-input" required>
						<input class="input100" type="number" name="postcode">
						<span class="focus-input100" data-placeholder="Enter Postcode"></span>
                        <?php if($errors->has('postcode')): ?>
                        <span class="text-danger"><?php echo e($errors->first('postcode')); ?></span>
                        <?php endif; ?>
					</div>
					<div class="wrap-input100 validate-input" required>
						<input class="input100" type="number" name="phoneno">
						<span class="focus-input100" data-placeholder="Enter Phone Number"></span>
                        <?php if($errors->has('phoneno')): ?>
                        <span class="text-danger"><?php echo e($errors->first('phoneno')); ?></span>
                        <?php endif; ?>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Register
							</button>
						</div>
					</div>
					<div class="text-center p-t-115">
						<span class="txt1">
							Already have an account?
						</span>

						<a class="txt2" href="<?php echo e(url('stafflogin')); ?>">
							Login
						</a>
					</div>
				
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html><?php /**PATH C:\laragon\www\Cookies\resources\views/FrontEnd/staffregistration.blade.php ENDPATH**/ ?>