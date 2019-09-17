
<?php $__env->startSection('title', 'Add Books'); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/public/admn/css/plugincss/jasny-bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('/public/admn/css/bootstrapValidator.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('/public/css/multi-select.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php //echo "<pre>"; print_r($book); die();?>
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-6">
                    <h4 class="m-t-5">
                        <i class="fa fa-home"></i>
                        <?php echo e(isset($book->id) ? 'Edit Book' : 'Add Books'); ?>

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
                        <h4>Book Information</h4>
                    </div>
                    <form class="form-horizontal login_validator" id="tryitForm"
                          enctype="multipart/form-data" action="<?php echo e(isset($book->id) ? url('/admin/edit_book/' . $book->id) : url('/admin/add_book')); ?>"
                          method="post">
                        <div class="row">
                            <div class="col-12">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="category" class="col-form-label">
                                            Category *</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <select class="form-control chzn-select" tabindex="2" name="category" required>
                                                <option value="">Choose a Category</option>
                                                <?php if($categories): ?>
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($id); ?>"
                                                        <?php echo e((isset($book->id) ? $book['cat_id'] : old('category')) == $id ? 'selected' : ''); ?>>
                                                    <?php echo e($category); ?>

                                                </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <?php if($errors->has('category')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('category')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="user" class="col-form-label">
                                            User </label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <select name="user" class="form-control chzn-select" tabindex="2">
                                                <option value="0">Choose a User</option>
                                                <?php if($categories): ?>
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($id); ?>" <?php echo e(isset($book->id) ? ($book['user_id']) == $id ? 'selected' : '' : ''); ?>><?php echo e($user); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <?php if($errors->has('user')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('user')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="isbn" class="col-form-label">
                                            ISBN *</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <input type="text" name="isbn"
                                                   class="form-control" value="<?php echo e(isset($book->isbn_no) ? $book->isbn_no : old('isbn')); ?>" required="">
                                        </div>
                                        <?php if($errors->has('isbn')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('isbn')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="title" class="col-form-label">
                                            Book Condition </label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <input type="text" name="book_condition"
                                                   class="form-control" value="<?php echo e(isset($book->book_condition) ? $book->book_condition : old('book_condition')); ?>">
                                        </div>
                                        <?php if($errors->has('book_condition')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('book_condition')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="title" class="col-form-label">
                                            Title *</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <input type="text" name="title"
                                                   class="form-control" value="<?php echo e(isset($book->title) ? $book->title : old('title')); ?>" required="">
                                        </div>
                                        <?php if($errors->has('title')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('title')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="book_desc" class="col-form-label">Description </label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <textarea class="form-control" name="book_desc"
                                                      cols="50" rows="5"><?php echo e(isset($book->book_desc) ? $book->book_desc : old('book_desc')); ?></textarea>                                            
                                        </div>
                                        <?php if($errors->has('book_desc')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('book_desc')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="image" class="col-form-label">Upload Image </label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div id="coba" class="chk">
                                            <?php if(!empty($book->bookImages)): ?>
                                            <?php $__currentLoopData = $book->bookImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookImages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div id="<?php echo e($bookImages->id); ?>">
                                                <i class="fa fa-times red-cls delete-image" aria-hidden="true"></i>
                                                <img src="<?php echo e(url('public/images/books/original/' . $bookImages->image)); ?>"
                                                     height="200px"
                                                     width="150px"/>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="u-name" class="col-form-label">Author* </label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div>
                                            <input type="text" <?php if(!empty($book->bookAuthors)): ?> name="author[<?php echo e($book->id); ?>][<?php echo e($book->bookAuthors['0']->id); ?>]" <?php else: ?> name="author[]" <?php endif; ?> value="<?php echo e((!empty($book->bookAuthors)) ? $book->bookAuthors['0']->author : old('author.0')); ?>"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 text-lg-left"><button class="add_field_button">Add More</button></div>
                                </div>
                                <div class="input_fields_wrap">
                                    <?php if(!empty($book->bookAuthors)): ?> 
                                    <?php $__currentLoopData = $book->bookAuthors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->first) continue; ?>
                                    <div class="form-group row m-t-25">
                                        <div class="col-lg-3 text-lg-right"></div>
                                        <div class="col-xl-6 col-lg-8">
                                            <div>
                                                <input type="text" 
                                                       name="author[<?php echo e($book->id); ?>][<?php echo e($author->id); ?>]"
                                                       value="<?php echo e($author->author); ?>" 
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-lg-left">
                                            <a href="#" class="remove_field" id="<?php echo e($author->id); ?>">Remove</a>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="org_price" class="col-form-label">
                                            Original Price *</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group input_top_align">
                                            <span class="input-group-addon">$</span>
                                            <input type="number" 
                                                   name="org_price"
                                                   id="org_price"
                                                   class="form-control"
                                                   value="<?php echo e(isset($book->org_price) ? $book->org_price : old('org_price')); ?>" required>
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <?php if($errors->has('org_price')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('org_price')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="listing_price" class="col-form-label">
                                            Listing Price *</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group input_top_align">
                                            <span class="input-group-addon">$</span>
                                            <input type="number"
                                                   name="listing_price"
                                                   id="listing_price"
                                                   class="form-control"
                                                   value="<?php echo e(isset($book->listing_price) ? $book->listing_price : old('listing_price')); ?>" required>
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <span id="listing_price_err" style="color: red;"></span>
                                        <?php if($errors->has('listing_price')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('listing_price')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-9 push-lg-3">
                                        <button class="btn btn-primary" type="submit" id="button_book">
                                            <i class="fa fa-user"></i>
                                            <?php echo e(isset($book->id) ? 'Edit Category' : 'Add New'); ?>

                                        </button>
                                        <?php if(!isset($book->id)): ?>
                                        <button class="btn btn-warning" type="reset" id="clear">
                                            <i class="fa fa-refresh"></i>
                                            Reset
                                        </button>
                                        <?php endif; ?>
                                    </div>
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
<script>
    $(document).ready(function () {
        var base_url = "<?php echo e(asset('/')); ?>";
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var add_button = $(".add_field_button"); //Add button ID
        var x = 1; //initlal text box count
        $(add_button).click(function (e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="form-group row m-t-25"><div class="col-lg-3 text-lg-right"></div><div class="col-xl-6 col-lg-8"><div><input type="text" name="author[]" class="form-control" value=""/></div></div><div class="col-lg-3 text-lg-left"><a href="#" class="remove_field">Remove</a></div></div>'); //add input box
            }
        });

        $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
            e.preventDefault();
            var id = this.id;
            if (id) {
                $.ajax({
                    url: base_url + 'admin/author/delete/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data, status) {
                        $('#' + id).parent('div').parent('div').remove();
                        x--;
                    },
                    error: function (result) {
                        alert("Some error occur");
                    }
                });
            } else {
                $(this).parent('div').parent('div').remove();
                x--;
            }

        })
        $(".delete-image").click(function (e) {
            var didConfirm = confirm("Are you sure you want to delete this image?");
            if (didConfirm == true) {
                var imageId = $(this).parent().attr('id');
                $.ajax({
                    url: base_url + 'admin/book_image/delete/' + imageId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data, status) {
                        $('#' + imageId).remove();
                    },
                    error: function (result) {
                        alert("Some error occur! Please try again.");
                    }
                });
            } else {
                return false;
            }

        });
        $("#coba").spartanMultiImagePicker({
            fieldName: 'bookImage[]',
            maxCount: 6,
            rowHeight: '200px',
            groupClassName: 'col-md-4 col-sm-4 col-xs-6',
            allowedExt: 'png|jpg|jpeg|gif',
            maxFileSize: '',
            placeholderImage: {
                image: base_url + 'public/images/placeholder.png',
                width: '100%'
            },
            dropFileLabel: "Drop Here",
            onAddRow: function (index) {
                console.log(index);
                console.log('add new row');
            },
            onRenderedPreview: function (index) {
                console.log(index);
                console.log('preview rendered');
            },
            onRemoveRow: function (index) {
                console.log(index);
            },
            onExtensionErr: function (index, file) {
                console.log(index, file, 'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr: function (index, file) {
                console.log(index, file, 'file size too big');
                alert('File size too big');
            }
        });
        // validate listing price
        $("#listing_price").keyup(function (e) {
            $('#listing_price_err').html('');
            var original_price = $('#org_price').val();
            original_price =  parseFloat(original_price);
            var listing_price = $('#listing_price').val();
            listing_price =  parseFloat(listing_price);
             
            
            if(listing_price <= 0){
                
                $('#listing_price_err').html('Listing Price cannot be less than 1');
                return false;
            }
            if(listing_price > original_price){
                $('#listing_price_err').html('Listing Price cannot be greater than original price');
                return false;
            }
        });

    });
</script>
<script src="<?php echo e(URL::asset('/public/admn/js/pluginjs/jasny-bootstrap.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/holder.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/bootstrapValidator.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/pages/validation.js')); ?>"></script>

<script src="<?php echo e(URL::asset('/public/js/spartan-multi-image-picker.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/js/jquery.multi-select.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolshark1/resources/views/admin/add_book.blade.php ENDPATH**/ ?>