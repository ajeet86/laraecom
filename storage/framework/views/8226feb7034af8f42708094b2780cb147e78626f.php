
<?php $__env->startSection('title','Settings'); ?>
<?php $__env->startSection('css'); ?>

<!--<link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('/public/admn/css/validationEngine.jquery.css')); ?>" />
<link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('/public/admn/css/bootstrapValidator.min.css')); ?>" />
<link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('/public/admn/css/pages/form_validations.css')); ?>" />-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-6">
                    <h4 class="m-t-5">
                        <i class="fa fa-home"></i>
                        Profile
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <?php if(session()->has('message')): ?>
    <div class="col-md-12">
        <div class="alert alert-success">
            <?php echo e(session()->get('message')); ?>

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
                                  id="form_block_validator" 
                                  action="<?php echo e(url('/admin/settings')); ?>"
                                  enctype="multipart/form-data" method="post">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group row">
                                    <div class="col-lg-4  text-lg-right">
                                        <label for="required2" class="col-form-label">Name *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" id="required2" 
                                               name="name" class="form-control" 
                                               value="<?php echo e(($data->name != '') ? $data->name : ''); ?>" required>
                                        <?php if($errors->has('name')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4  text-lg-right">
                                        <label for="required2" class="col-form-label">Username *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" id="required2" 
                                               name="username" class="form-control" 
                                               value="<?php echo e(($data->username != '') ? $data->username : ''); ?>" required>
                                        <?php if($errors->has('username')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('username')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="email2" class="col-form-label">E-mail *</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="email" id="email2" 
                                               name="email" class="form-control"
                                               value="<?php echo e(($data->email != '') ? $data->email : ''); ?>" required>
                                        <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="url2" class="col-form-label">Avatar</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="file" id="url2" name="avatar" class="form-control">
                                    </div>
                                    <div class="col-lg-4 text-lg-left">
                                        <?php if(file_exists(public_path().'/images/users/' . $data->avatar)): ?>
                                            <img src="<?php echo e(url('public/images/users/' . $data->avatar)); ?>" height="30px" width="30px"
                                             alt="avatar">
                                        <?php else: ?>
                                            <img src="<?php echo e(url('public/images/users/default.png')); ?>" height="30px" width="30px"
                                             alt="avatar">
                                        <?php endif; ?>
                                        <input type="hidden" class="form-control"
                                               name="hd_avatar" value="<?php echo e(($data->avatar != '') ? $data->avatar : ''); ?>"/></div>
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
    <!--<script src="<?php echo e(URL::asset('/public/admn/js/jquery.validationEngine.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/public/admn/js/jquery.validationEngine-en.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/public/admn/js/jquery.validate.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/public/admn/js/jquery.validate.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/public/admn/js/bootstrapValidator.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/public/admn/js/form.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/public/admn/js/pages/form_validation.js')); ?>"></script>-->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/admin/setting.blade.php ENDPATH**/ ?>