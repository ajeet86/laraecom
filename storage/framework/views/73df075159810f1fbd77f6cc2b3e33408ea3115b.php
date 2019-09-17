
<?php $__env->startSection('title', 'Edit Profile'); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/public/admn/css/plugincss/jasny-bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('/public/admn/css/bootstrapValidator.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php echo $__env->make('layouts.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-lg-9">
                <div class="dash-container">
                    <?php if(session()->has('success')): ?>
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <?php echo e(session()->get('success')); ?>

                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(session()->has('error')): ?>
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <?php echo e(session()->get('error')); ?>

                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="abc">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="personal">

                                    <div class="card-block m-t-35">
                                        <div>
                                            <h4>Change Password</h4>
                                            <hr class="divider-hr">
                                        </div>
                                        <form class="form-horizontal login_validator" id="tryitForm"
                                              enctype="multipart/form-data" action="<?php echo e(url('/change_password')); ?>"
                                              method="post">
                                            <div class="row">
                                                <div class="col-12">
                                                    <?php echo e(csrf_field()); ?>

                                                


                                                <div class="form-group row m-t-25">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="u-name" class="col-form-label">
                                                            Current password *</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input type="password" name="current-password"  class="form-control" required="">
                                                        </div>
                                                        <?php if($errors->has('current-password')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('current-password')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>



                                                <div class="form-group row m-t-25">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="u-name" class="col-form-label">
                                                            New password *</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input type="password" name="password"  class="form-control" required>
                                                        </div>
                                                        <?php if($errors->has('password')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>


                                                <div class="form-group row m-t-25">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="u-name" class="col-form-label">
                                                            Confirm new password *</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input type="password" name="password_confirmation" class="form-control" required>
                                                        </div>
                                                        <?php if($errors->has('password_confirmation')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">

                                                    </div>
                                                    <div class="col-xl-6 col-lg-8 text-lg-left">
                                                        <button class="btn btn-primary all-btn-theme" type="submit">
                                                            <i class="fa fa-user"></i>
                                                            <?php echo e('Change Password'); ?>

                                                        </button>

                                                         <a class="btn btn-warning" href="<?php echo e(route('edit_profile')); ?>">
                                                            <i class="fa fa-user"></i>
                                                            <?php echo e('Cancel'); ?>

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </form>
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagescript'); ?>
<script src="<?php echo e(URL::asset('/public/admn/js/pluginjs/jasny-bootstrap.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/holder.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/bootstrapValidator.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/pages/validation.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/user/change_password.blade.php ENDPATH**/ ?>