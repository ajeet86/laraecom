
<?php $__env->startSection('title', 'Edit Profile | abc'); ?>
<?php $__env->startSection('description', 'Edit Profile'); ?>
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
                    <div class="row">
                            <?php if(session()->has('success')): ?>
                            <div class="col-md-12">
                                    <div class="alert alert-success">
                                            <?php echo e(session()->get('success')); ?>

                                    </div>
                            </div>
                            <?php endif; ?>
                            <?php if(session()->has('error')): ?>
                            <div class="col-md-12">
                                    <div class="alert alert-danger">
                                            <?php echo e(session()->get('error')); ?>

                                    </div>
                            </div>
                            <?php endif; ?>
                    </div>
                    <div class="abc">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="personal">

                                    <div class="card-block m-t-35">
                                        <div>
                                            <h4>Personal Information</h4>
                                            <hr class="divider-hr">
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
                                                                   class="form-control" value="<?php echo e(isset($user->name) ? $user->name : old('name')); ?>" required>
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
                                                            <input type="email" value="<?php echo e(isset($user->email) ? $user->email : old('email')); ?>" name="email"
                                                                   class="form-control" required>
                                                        </div>
                                                        <?php if($errors->has('email')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group gender_message row">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label class="col-form-label">Gender</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio"
                                                                          name="gender_m_f"
                                                                          value="Male"
                                                                          <?php echo e((isset($user->gender) ? $user->gender : old('gender')) == 'Male' ? 'checked' : ''); ?>>
                                                                Male</label>
                                                        </div>
                                                        <div class="radio">
                                                            <label><input type="radio"
                                                                          name="gender_m_f"
                                                                          value="Female"
                                                                          <?php echo e((isset($user->gender) ? $user->gender : old('gender')) == 'Female' ? 'checked' : ''); ?>>
                                                                Female</label>
                                                        </div>
                                                            <?php if($errors->has('gender')): ?>
                                                                    <span class="help-block">
                                                                            <strong><?php echo e($errors->first('gender')); ?></strong>
                                                                    </span>
                                                            <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="phone" class="col-form-label">Phone *
                                                        </label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input name="phone"
                                                                   type="number"
                                                                   minlength="10"
                                                                   maxlength="20"
                                                                   value="<?php echo e(isset($user->phone) ? $user->phone : old('phone')); ?>" 
                                                                   class="form-control number_validation" required="">
                                                        </div>
                                                        <?php if($errors->has('phone')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('phone')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="street_line" class="col-form-label">Street Line *
                                                        </label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input name="street_line"
                                                                   type="text"
                                                                   value="<?php echo e(isset($user->street_line) ? $user->street_line : old('street_line')); ?>" 
                                                                   class="form-control" required="">
                                                        </div>
                                                        <?php if($errors->has('street_line')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('street_line')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="city" class="col-form-label">City *
                                                        </label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input name="city"
                                                                   type="text"
                                                                   value="<?php echo e(isset($user->city) ? $user->city : old('city')); ?>" 
                                                                   class="form-control" required>
                                                        </div>
                                                        <?php if($errors->has('city')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('city')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="country" class="col-form-label">Country *
                                                        </label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <select class="form-control chzn-select" tabindex="2" name="country" required>
                                                                <?php if($countries): ?>
                                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($country->iso2_code); ?>">
                                                                            <?php echo e($country->country_name); ?>

                                                                    </option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                        <?php if($errors->has('country')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('country')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="city" class="col-form-label">State *
                                                        </label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <select class="form-control chzn-select" tabindex="2" name="state" required>
                                                                    <?php if($states): ?>
                                                                    <option value="">Select</option>
                                                                    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($state->code); ?>"
                                                                            <?php echo e((isset($user->state) && $user->state == $state->code)? 'selected' : ''); ?>>
                                                                            <?php echo e($state->default_name); ?>

                                                                    </option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                        <?php if($errors->has('state')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('state')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="postal_code" class="col-form-label">Postal Code *
                                                        </label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input name="postal_code"
                                                                   type="number"
                                                                   value="<?php echo e(isset($user->postal_code) ? $user->postal_code : old('postal_code')); ?>" 
                                                                   class="form-control number_validation" required="">
                                                        </div>
                                                        <?php if($errors->has('postal_code')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('postal_code')); ?></strong>
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
                                                            <?php echo e('Save Profile'); ?>

                                                        </button>
   
                                                        <a class="btn btn-primary all-btn-theme" href="<?php echo e(url('/change_password')); ?>">
                                                            <i class="fa fa-user"></i>
                                                            <?php echo e('Change Password'); ?>

                                                        </a>
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
<script>
    $(".number_validation").keydown(function(e){
            if(!((e.keyCode > 95 && e.keyCode < 106)
                  || (e.keyCode > 47 && e.keyCode < 58) 
                  || e.keyCode == 8)) {
                return false;
            }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/user/edit_profile.blade.php ENDPATH**/ ?>