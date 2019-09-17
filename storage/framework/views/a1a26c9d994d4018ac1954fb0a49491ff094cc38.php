<?php $__env->startSection('title', 'Edit Profile'); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/public/admn/css/plugincss/jasny-bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('/public/admn/css/bootstrapValidator.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                <div class="col-md-9">
                    <div class="personal">

                        <div class="card-block m-t-35">
                            <div>
                                <h4>Personal Information</h4>
                            </div>
                            <form class="form-horizontal login_validator" id="tryitForm"
                                  enctype="multipart/form-data" action="<?php echo e(url('/edit_profile')); ?>"
                                  method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-center text-lg-right">
                                                <label class="col-form-label">Profile Picture</label>
                                            </div>
                                            <div class="col-lg-6 text-center text-lg-left">
                                                <div class="fileinput fileinput-new" 
                                                     data-provides="fileinput">
                                                    <div class="fileinput-new img-thumbnail text-center">
                                                        <?php if(isset($user->avatar)): ?>
                                                        <img src="<?php echo e(url('public/images/users/' . $user->avatar)); ?>"></div>
                                                    <?php else: ?>
                                                    <img src="" 
                                                         data-src="holder.js/100%x100%"  
                                                         alt="not found"></div>
                                                <?php endif; ?>
                                                <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                <div class="m-t-20 text-center">
                                                    <span class="btn btn-primary btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="avatar"></span>
                                                    <a href="#" class="btn btn-warning fileinput-exists"
                                                       data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row m-t-25">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="u-name" class="col-form-label">
                                                Name *</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <input type="text" name="name"
                                                       class="form-control" value="<?php echo e(isset($user->name) ? $user->name : old('name')); ?>">
                                            </div>
                                            <?php if($errors->has('name')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <!--<div class="form-group row m-t-25">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="u-name" class="col-form-label">User
                                                Name *</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <input type="text" name="userName"
                                                       value="<?php echo e(isset($user->username) ? $user->username : old('userName')); ?>"
                                                       autocomplete="user-name"
                                                       class="form-control">
                                            </div>
                                            <?php if($errors->has('userName')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('userName')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>-->
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="email" class="col-form-label">Email
                                                *</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <input type="text" value="<?php echo e(isset($user->email) ? $user->email : old('email')); ?>" name="email"
                                                       class="form-control">
                                            </div>
                                            <?php if($errors->has('email')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label for="phone" class="col-form-label">Phone
                                            </label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="input-group">
                                                <input name="phone"
                                                       type="number"
                                                       minlength="10"
                                                       maxlength="20"
                                                       value="<?php echo e(isset($user->phone) ? $user->phone : old('phone')); ?>" 
                                                       class="form-control">
                                            </div>
                                            <?php if($errors->has('phone')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('phone')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group gender_message row">
                                        <div class="col-lg-3 text-lg-right">
                                            <label class="col-form-label">Gender *</label>
                                        </div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div class="radio">
                                                <label><input type="radio"
                                                              name="gender"
                                                              value="Male"
                                                              <?php echo e((isset($user->gender) ? $user->gender : old('gender')) == 'Male' ? 'checked' : ''); ?>>
                                                    Male</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio"
                                                              name="gender"
                                                              value="Female"
                                                              <?php echo e((isset($user->gender) ? $user->gender : old('gender')) == 'Female' ? 'checked' : ''); ?>>
                                                    Female</label>
                                            </div>
                                        </div>
                                        <?php if($errors->has('gender')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('gender')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3 text-lg-right">

                                        </div>
                                        <div class="col-xl-6 col-lg-8 text-lg-left">
                                            <button class="btn btn-primary blue-buton" type="submit">
                                                <i class="fa fa-user"></i>
                                                <?php echo e('Edit Profile'); ?>

                                            </button>
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


<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagescript'); ?>
<script src="<?php echo e(URL::asset('/public/admn/js/pluginjs/jasny-bootstrap.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/holder.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/bootstrapValidator.min.js')); ?>"></script>
<!--<script src="<?php echo e(URL::asset('/public/admn/js/pages/validation.js')); ?>"></script>-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\schoolshark\resources\views/user/edit_profile.blade.php ENDPATH**/ ?>