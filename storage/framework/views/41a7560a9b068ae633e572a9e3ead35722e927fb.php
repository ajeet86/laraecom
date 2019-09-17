
<?php $__env->startSection('title', 'Change Password'); ?>
<?php $__env->startSection('content'); ?>
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-6">
                    <h4 class="m-t-5">
                        <i class="fa fa-home"></i>
                        Change Password
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <?php if(session()->has('error')): ?>
    <div class="col-md-12">
        <div class="alert alert-danger">
            <?php echo e(session()->get('error')); ?>

        </div>
    </div>
    <?php endif; ?>
    <?php if(session()->has('success')): ?>
    <div class="col-md-12">
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

        </div>
    </div>
    <?php endif; ?>
    <div class="outer">
        <div class="inner bg-container">
            <!--top section widgets-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header bg-white">
                            <i class="fa fa-file-text-o"></i>
                            Settings
                        </div>
                        <div class="card-block m-t-35">
                            <form class="form-horizontal  login_validator"
                                  action="<?php echo e(url('/admin/change_password')); ?>" 
                                  method="post">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group row">
                                    <div class="col-lg-4  text-lg-right">
                                        <label for="required2" 
                                               class="col-form-label">
                                            Current Password *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="password" 
                                               name="current-password" 
                                               class="form-control pwd" 
                                               value="<?php echo e(old('current-password')); ?>" 
                                               >
                                        <?php if($errors->has('current-password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('current-password')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4  text-lg-right">
                                        <label for="required2"
                                               class="col-form-label">New Password *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="password"
                                               name="password" class="form-control pwd" 
                                               value="<?php echo e(old('password')); ?>">
                                        <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="email2" class="col-form-label">Confirm New Password *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="password"
                                               name="password_confirmation" class="form-control pwd"
                                               value="<?php echo e(old('password_confirmation')); ?>">
                                        <?php if($errors->has('password_confirmation')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-actions form-group row">
                                    <div class="col-lg-4 push-lg-4">
                                        <input type="submit" value="Save" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div
        </div>
    </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('pagescript'); ?>
    <script>
        $(document).on('keydown', '.pwd', function (e) {
            if (e.keyCode == 32)
                return false;
        });

    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/user/change_pwd.blade.php ENDPATH**/ ?>