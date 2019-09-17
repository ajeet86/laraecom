
<?php $__env->startSection('title', 'Add Home Cms Page'); ?>
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
                        <i class="fa fa-vcard-o"></i>
                        Homepage CMS
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
                        <h4>Page Information</h4>
                    </div>
                    <form class="form-horizontal login_validator" id="tryitForm"
                          enctype="multipart/form-data" action="<?php echo e(url('/admin/homecms')); ?>"
                          method="post">
                        <div class="row">
                            <div class="col-12">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-center text-lg-right">
                                        <label class="col-form-label">Top Left Image </label>
                                    </div>
                                    <div class="col-lg-6 text-center text-lg-left">
                                        <div class="fileinput fileinput-new" 
                                             data-provides="fileinput">
                                            <div class="fileinput-new img-thumbnail text-center">
                                                <?php if(isset($homecms->top_left_image)): ?>
                                                <img src="<?php echo e(url('public/images/categories/original/' . $homecms->top_left_image)); ?>">
                                            </div>
                                            <?php else: ?>
                                            <img src="" 
                                                 data-src="holder.js/100%x100%"  
                                                 alt="not found"></div>
                                        <?php endif; ?>
                                        <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
										<p>Dimensions: Min Width=621px & Min Height=822px</p>
                                        <div class="m-t-20 text-center">
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="top_left_image"></span>
                                            <a href="#" class="btn btn-warning fileinput-exists"
                                               data-dismiss="fileinput">Remove</a>
                                        </div>
                                        <?php if($errors->has('top_left_image')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('top_left_image')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">Top Description *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <textarea class="editor" name="top_desc" 
                                                  cols="50" rows="6"><?php echo e(isset($homecms->top_desc) ? $homecms->top_desc : old('top_desc')); ?></textarea>                                            
                                    </div>
                                    <?php if($errors->has('top_desc')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('top_desc')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-center text-lg-right">
                                        <label class="col-form-label">Top Right Image </label>
                                    </div>
                                    <div class="col-lg-6 text-center text-lg-left">
                                        <div class="fileinput fileinput-new" 
                                             data-provides="fileinput">
                                            <div class="fileinput-new img-thumbnail text-center">
                                                <?php if(isset($homecms->top_right_image)): ?>
                                                <img src="<?php echo e(url('public/images/categories/original/' . $homecms->top_right_image)); ?>"></div>
                                            <?php else: ?>
                                            <img src="" 
                                                 data-src="holder.js/100%x100%"
                                                 alt="not found"></div>
                                        <?php endif; ?>
                                        <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
										<p>Dimensions: Min Width=522px & Min Height=570px</p>
                                        <div class="m-t-20 text-center">
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="top_right_image"></span>
                                            <a href="#" class="btn btn-warning fileinput-exists"
                                               data-dismiss="fileinput">Remove</a>
                                        </div>
                                        <?php if($errors->has('top_right_image')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('top_right_image')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-center text-lg-right">
                                        <label class="col-form-label">About Us Image </label>
                                    </div>
                                    <div class="col-lg-6 text-center text-lg-left">
                                        <div class="fileinput fileinput-new" 
                                             data-provides="fileinput">
                                            <div class="fileinput-new img-thumbnail text-center">
                                                <?php if(isset($homecms->about_us_image)): ?>
                                                <img src="<?php echo e(url('public/images/categories/original/' . $homecms->about_us_image)); ?>"></div>
                                            <?php else: ?>
                                            <img src="" 
                                                 data-src="holder.js/100%x100%"
                                                 alt="not found"></div>
                                        <?php endif; ?>
                                        <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
										<p>Dimensions: Min Width=758px & Min Height=520px</p>
                                        <div class="m-t-20 text-center">
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="about_us_image"></span>
                                            <a href="#" class="btn btn-warning fileinput-exists"
                                               data-dismiss="fileinput">Remove</a>
                                        </div>
                                        <?php if($errors->has('about_us_image')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('about_us_image')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">About Us Description *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <textarea class="editor" name="about_us_desc" 
                                                  cols="50" rows="6"><?php echo e(isset($homecms->about_us_desc) ? $homecms->about_us_desc : old('about_us_desc')); ?></textarea>                                            
                                    </div>
                                    <?php if($errors->has('about_us_desc')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('about_us_desc')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">What We Do *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <textarea class="editor" name="what_we_do" 
                                                  cols="50" rows="6"><?php echo e(isset($homecms->what_we_do) ? $homecms->what_we_do : old('what_we_do')); ?></textarea>                                            
                                    </div>
                                    <?php if($errors->has('what_we_do')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('what_we_do')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">Banner Content *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <textarea class="editor" name="banner_text" 
                                                  cols="50" rows="6"><?php echo e(isset($homecms->banner_text) ? $homecms->banner_text : old('banner_text')); ?></textarea>                                            
                                    </div>
                                    <?php if($errors->has('banner_text')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('banner_text')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-9 push-lg-3">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-user"></i>
                                        Save Page
                                    </button>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.11.3/ckeditor.js'></script>
<script>
    CKEDITOR.config.allowedContent = true;
// Normal ckEditor example code
var elements = CKEDITOR.document.find( '.editor' ),
    i = 0,
    element;
while (( element = elements.getItem( i++ ) )) {
    CKEDITOR.replace( element );
}
</script>

<script src="<?php echo e(URL::asset('/public/admn/js/pluginjs/jasny-bootstrap.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/holder.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/bootstrapValidator.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/pages/validation.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/admin/add_home_cms.blade.php ENDPATH**/ ?>