<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group">
            <div class="card p-4">
                <div class="card-header">
                    <img class="img-fluid" src="<?php echo asset('images/octru-logo-sm.png'); ?>" alt="OCTRU logo"/>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <h2><?php echo e(env('APP_NAME', 'Permissions Manager')); ?></h2>
                        <p class="text-muted">Enter E-Mail for password reset link</p>
                        <div>
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group has-feedback">
                                <input type="email" name="email" class="form-control" required="autofocus" placeholder="Email">
                                <?php if($errors->has('email')): ?>
                                    <em class="invalid-feedback">
                                        <?php echo e($errors->first('email')); ?>

                                    </em>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\PHP\laravel-roles-permissions-manager-master\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>