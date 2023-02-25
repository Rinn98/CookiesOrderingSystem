<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Laravel 8|7|6 CRUD App Example</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <style>
  .push-top {
    margin-top: 50px;
  }
</style>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
   </head>
   <body>
    
   <div class="pull-right mb-2">
<a class="btn btn-success" href="<?php echo e(route('stock.create')); ?>"> Create stock</a>
</div>
    
      <div class="container">
     
    
  

<div class="push-top">
  <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>  
    </div><br />
  <?php endif; ?>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name of cookies</td>
          <td>Quantity of stock</td>
          
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $stock; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($stock->id); ?></td>
            <td><?php echo e($stock->nameofcookies); ?></td>
            <td><?php echo e($stock->quantityofstock); ?></td>
        
            <td class="text-center">
                <a href="<?php echo e(route('stock.edit', $stock->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                <form action="<?php echo e(route('stock.destroy', $stock->id)); ?>" method="post" style="display: inline-block">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<div>
</div>
</body>
    </html>
<?php /**PATH C:\laragon\www\Cookies\resources\views/FrontEnd/stock.blade.php ENDPATH**/ ?>