<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="/fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <title>SIMS - Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo e(url('unsecured/images/icons/favicon.ico')); ?>"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('unsecured/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('unsecured/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('unsecured/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('unsecured/vendor/animate/animate.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('unsecured/vendor/css-hamburgers/hamburgers.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('unsecured/vendor/animsition/css/animsition.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('unsecured/vendor/select2/select2.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('unsecured/vendor/daterangepicker/daterangepicker.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('unsecured/css/util.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('unsecured/css/main.css')); ?>">
    <!--===============================================================================================-->

</head>
<body>
<?php echo $__env->yieldContent('content'); ?>

<!--===============================================================================================-->
<script src="<?php echo e(url('unsecured/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(url('unsecured/vendor/animsition/js/animsition.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(url('unsecured/vendor/bootstrap/js/popper.js')); ?>"></script>
<script src="<?php echo e(url('unsecured/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(url('unsecured/vendor/select2/select2.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(url('unsecured/vendor/daterangepicker/moment.min.js')); ?>"></script>
<script src="<?php echo e(url('unsecured/vendor/daterangepicker/daterangepicker.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(url('unsecured/vendor/countdowntime/countdowntime.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(url('unsecured/js/main.js')); ?>"></script>

</body>
</html>
<?php /**PATH D:\Projects\PHP\ResearchImageViewer\02.0 Code\RIM\resources\views/layout/app.blade.php ENDPATH**/ ?>