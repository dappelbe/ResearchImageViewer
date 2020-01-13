<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
 <head>
  <?php echo $__env->make('layout.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </head>
 <body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
   <?php echo $__env->make('layout.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
     <!-- Main Content -->
     <div id="content">
      <?php echo $__env->make('layout.partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Begin Page Content -->
       <div class="container-fluid">
        <?php echo $__env->yieldContent('content'); ?>
       </div>
       <!-- /.container-fluid -->
     </div>
     <!-- End of Main Content -->
     <?php echo $__env->make('layout.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
   <i class="fas fa-angle-up"></i>
  </a>
  <?php echo $__env->make('layout.partials.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('layout.partials.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('pagejs'); ?>
  <?php echo $__env->yieldContent('template_scripts'); ?>
 </body>
</html>
<?php /**PATH D:\Projects\PHP\ResearchImageViewer\02.0 Code\RIM\resources\views/layout/mainlayout.blade.php ENDPATH**/ ?>