
<?php $__env->startSection('title', 'Add Categories'); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/public/admn/css/plugincss/jasny-bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('/public/admn/css/bootstrapValidator.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-6">
                    <h4 class="m-t-5">
                        <i class="fa fa-bars"></i>
                        <?php echo e(isset($category->id) ? 'Edit Category' : 'Add Categories'); ?>

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
            <div class="card">

                <div class="card-block m-t-35">
                    <div>
                        <h4>Category Information</h4>
                    </div>
                    <form class="form-horizontal login_validator" id="tryitForm"
                          enctype="multipart/form-data" action="<?php echo e(isset($category->id) ? url('/admin/edit_category/' . $category->id) : url('/admin/add_category')); ?>"
                          method="post">
                        <div class="row">
                            <div class="col-12">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-center text-lg-right">
                                        <label class="col-form-label">Category Image</label>
                                    </div>
                                    <div class="col-lg-6 text-center text-lg-left">
                                        <div class="fileinput fileinput-new" 
                                             data-provides="fileinput">
                                            <div class="fileinput-new img-thumbnail text-center">
                                                <?php if(isset($category->cat_image)): ?>
                                                <img src="<?php echo e(url('public/images/categories/original/' . $category->cat_image)); ?>"></div>
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
                                                <input type="file" name="cat_image"></span>
                                            <a href="#" class="btn btn-warning fileinput-exists"
                                               data-dismiss="fileinput">Remove</a>
                                        </div>
										<?php if($errors->has('cat_image')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('cat_image')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">
                                        Category Name *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <input type="text" name="name"
                                               class="form-control" value="<?php echo e(isset($category->name) ? $category->name : old('name')); ?>">
                                    </div>
                                    <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">Description </label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <textarea class="form-control" name="cat_desc"
                                                  cols="50" rows="5"><?php echo e(isset($category->cat_desc) ? $category->cat_desc : old('cat_desc')); ?></textarea>                                            
                                    </div>
                                    <?php if($errors->has('cat_desc')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('cat_desc')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">Feature </label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <label class="custom-control custom-checkbox error_color">
                                        <input type="checkbox" class="custom-control-input" name="feature" value="1" <?php echo e((isset($category->feature) ? $category['feature'] : old('feature')) == 1 ? 'checked' : ''); ?>>
                                        <span class="custom-control-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-9 push-lg-3">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-user"></i>
                                        <?php echo e(isset($category->id) ? 'Edit Category' : 'Add Category'); ?>

                                    </button>
                                    <?php if(!isset($category->id)): ?>
                                    <button class="btn btn-warning" type="reset" id="clear">
                                        <i class="fa fa-refresh"></i>
                                        Reset
                                    </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagescript'); ?>
<script src="<?php echo e(URL::asset('/public/admn/js/pluginjs/jasny-bootstrap.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/holder.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/bootstrapValidator.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/pages/validation.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/admin/add_category.blade.php ENDPATH**/ ?>