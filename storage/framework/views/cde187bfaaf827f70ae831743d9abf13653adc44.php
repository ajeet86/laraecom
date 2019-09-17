
<?php $__env->startSection('title', 'Add New Podcast'); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/public/admn/css/plugincss/jasny-bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('/public/css/chosen.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('/public/css/multi-select.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-6">
                    <h4 class="m-t-5">
                        <i class="fa fa-file-powerpoint-o"></i>
                        <?php echo e(isset($pod->id) ? 'Edit PodCast' : 'Add PodCast'); ?>

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
                          enctype="multipart/form-data" action="<?php echo e(isset($pod->id) ? url('/admin/edit_pod/' . $pod->id) : url('/admin/add_pod')); ?>"
                          method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-center text-lg-right">
                                        <label class="col-form-label">Upload Feature Image</label>
                                    </div>
                                    <div class="col-lg-6 text-center text-lg-left">
                                        <div class="fileinput fileinput-new" 
                                             data-provides="fileinput">
                                            <div class="fileinput-new img-thumbnail text-center">
                                                <?php if(isset($pod->feature_image)): ?>
                                                    <img src="<?php echo e(url('public/images/pod/' . $pod->feature_image)); ?>"></div>
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
                                                <input type="file" name="feature_image"></span>
                                            <a href="#" class="btn btn-warning fileinput-exists"
                                               data-dismiss="fileinput">Remove</a>
                                        </div>
                                        <?php if($errors->has('feature_image')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('feature_image')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">
                                        Meta title *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <input type="text" name="meta_title"
                                               class="form-control" value="<?php echo e(isset($pod->meta_title) ? $pod->meta_title : old('meta_title')); ?>">
                                    </div>
                                    <?php if($errors->has('meta_title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('meta_title')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">Meta Description *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <textarea class="form-control" name="meta_desc" rows="5" cols="50"><?php echo e(isset($pod->meta_desc) ? $pod->meta_desc : old('meta_desc')); ?></textarea>
                                    </div>
                                    <?php if($errors->has('meta_desc')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('meta_desc')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">
                                        Pod title *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <input type="text" name="title"
                                               class="form-control" value="<?php echo e(isset($pod->title) ? $pod->title : old('title')); ?>">
                                    </div>
                                    <?php if($errors->has('title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('title')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-center text-lg-right">
                                        <label class="col-form-label">Upload Audio</label>
                                    </div>
                                    <div class="col-lg-3 text-center text-lg-left">
                                        <div class="fileinput fileinput-new" 
                                             data-provides="fileinput">
                                            <div class="fileinput-new img-thumbnail text-center">
                                            
                                            <img src="" 
                                                 data-src="holder.js/100%x100%"  
                                                 alt="not found"></div>
                                        
                                        <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                        <div class="m-t-20 text-center">
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">Select Audio</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="audio"></span>
                                            <a href="#" class="btn btn-warning fileinput-exists"
                                               data-dismiss="fileinput">Remove</a>
                                        </div>
                                        <?php if($errors->has('audio')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('audio')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 text-center text-lg-left">
                                        <?php if(isset($pod->id)): ?>
                                            <audio controls>
                                                <source src="<?php echo e(url('public/storage/upload/files/audio') . '/'. $pod->audio); ?>" type="audio/ogg">
                                                Your browser does not support the audio element.
                                            </audio>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">Content *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <textarea class="editor" name="content" 
                                                  cols="50" rows="6"><?php echo e(isset($pod->content) ? $pod->content : old('content')); ?></textarea>                                            
                                    </div>
                                    <?php if($errors->has('content')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('content')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">Created By *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <input type="text" name="created_by"
                                               class="form-control" 
                                               value="<?php echo e(isset($pod->created_by) ? $pod->created_by : old('created_by')); ?>">
                                    </div>
                                    <?php if($errors->has('created_by')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('created_by')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                                $pod_tag = array();
                            ?>
                            <?php if(isset($pod->id) && $pod->podtags->isNotEmpty()): ?>
                                <?php $__currentLoopData = $pod->podtags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $podtag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $pod_tag[] = $podtag->tag_id
                                    ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">Tag *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <select name="tags[]" size="3" multiple class="form-control chzn-select" tabindex="8">
                                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $tag_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($id); ?>" 
                                                    <?php echo e((isset($pod->id) && in_array($id, $pod_tag)) ? 'selected' : ''); ?>><?php echo e($tag_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <?php if($errors->has('tag')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('tag')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-9 push-lg-3">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-user"></i>
                                        <?php echo e(isset($pod->id) ? 'Edit Page' : 'Add Page'); ?>

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
// Normal ckEditor example code
CKEDITOR.config.extraPlugins = 'iframe';
CKEDITOR.config.filebrowserUploadMethod = 'form';
var elements = CKEDITOR.document.find( '.editor' ),
    i = 0,
    element;
while (( element = elements.getItem( i++ ) )) {
    CKEDITOR.replace(element, {
        filebrowserUploadUrl: '<?php echo e(route('admin.pod_upload',['_token' => csrf_token() ])); ?>'
    });
}
</script>


<script src="<?php echo e(URL::asset('/public/admn/js/pluginjs/jasny-bootstrap.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/holder.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/js/chosen.jquery.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/js/jquery.multi-select.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/pages/form_elements.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/admin/add_pod.blade.php ENDPATH**/ ?>