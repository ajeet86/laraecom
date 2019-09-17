<?php $__env->startSection('title', 'SCHOOL SHARK | Sell Textbooks'); ?>
<?php $__env->startSection('description', 'Sell Textbooks Welcome to the SCHOOL SHARK selling page! To sell your textbook, please copy paste this template and send us an email at sell.schoolsharkllc@gmail.com! For your listing price, we recommend checking what your book is selling for and discount it to give both you and the buyer the best deal possible!'); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/public/admn/css/plugincss/jasny-bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('/public/admn/css/bootstrapValidator.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('/public/css/multi-select.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php echo $__env->make('layouts.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-lg-9">
                <div class="dash-container">
                    <div class="abc">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="personal">
                                    <div class="card-block m-t-35">
                                        <div>
                                            <h4><?php echo e(isset($book->id) ? 'Edit Book' : 'Add Book'); ?></h4>
                                            <hr class="divider-hr">
                                            <?php if($flag == 0): ?>
                                                <i class="note">Note: You have to first fill up address on <a href="<?php echo e(route('edit_profile')); ?>">Edit Profile</a> section. As seller address is important for the shipping.</i>
                                            <?php endif; ?>
                                        </div>
                                        <?php if($flag == 1): ?>
                                        <form class="form-horizontal login_validator" id="tryitForm"
                                              enctype="multipart/form-data" action="<?php echo e(isset($book->id) ? url('/edit_book/' . $book->id) : url('/add_book')); ?>"
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
                                                                            <?php echo e(isset($book->id) ? ($book['cat_id']) == $id ? 'selected' : '' : ''); ?>>
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
                                                        <label for="isbn" class="col-form-label">
                                                            ISBN *</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input type="text" name="isbn"
                                                                   class="form-control" 
                                                                   value="<?php echo e(isset($book->isbn_no) ? $book->isbn_no : old('isbn')); ?>"
                                                                   required>
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
                                                            School Name *</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input type="text" name="school_name"
                                                                   class="form-control" value="<?php echo e(isset($book->school_name) ? $book->school_name : old('school_name')); ?>" required>
                                                        </div>
                                                        <?php if($errors->has('school_name')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('school_name')); ?></strong>
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
                                                                   class="form-control" 
                                                                   value="<?php echo e(isset($book->title) ? $book->title : old('title')); ?>"
                                                                   required>
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
                                                            <textarea class="editor" name="book_desc"
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
                                                        <div id="coba" class="chk row">
                                                            <?php if(!empty($book->bookImages)): ?>
                                                                <?php $__currentLoopData = $book->bookImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookImages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div id="<?php echo e($bookImages->id); ?>" class="col-md-4 col-sm-4 col-xs-6 book-image">
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
                                                    <div class="col-lg-3 col-sm-3 text-lg-right">
                                                        <label for="u-name" class="col-form-label">Author* </label>
                                                    </div>
                                                    <div class="col-xl-6 col-sm-6 col-lg-6">
                                                        <div>
                                                            <input type="text" <?php if(!empty($book->bookAuthors)): ?> name="author[<?php echo e($book->id); ?>][<?php echo e($book->bookAuthors['0']->id); ?>]" <?php else: ?> name="author[]" <?php endif; ?> value="<?php echo e((!empty($book->bookAuthors)) ? $book->bookAuthors['0']->author : ''); ?>"
                                                                   class="form-control" required>
                                                        </div>
                                                        <?php if($errors->has('author.0')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('author.0')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-3 text-lg-left"><button class="add_field_button btn-primary">Add More</button></div>
                                                </div>
                                                <div class="input_fields_wrap">
                                                    <?php if(!empty($book->bookAuthors)): ?> 
                                                    <?php $__currentLoopData = $book->bookAuthors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($loop->first) continue; ?>
                                                    <div class="form-group row m-t-25">
                                                        <div class="col-lg-3 col-sm-3 text-lg-right"></div>
                                                        <div class="col-xl-6 col-sm-6 col-lg-6">
                                                            <div>
                                                                <input type="text" 
                                                                       name="author[<?php echo e($book->id); ?>][<?php echo e($author->id); ?>]"
                                                                       value="<?php echo e($author->author); ?>" 
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-3 text-lg-left">
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
                                                            <input type="text" 
                                                                   name="org_price"
                                                                   id="org_price"
                                                                   class="form-control valid_float_type"
                                                                   min="1"
                                                                   value="<?php echo e(isset($book->org_price) ? $book->org_price : old('org_price')); ?>"
                                                                   required>
                                                        </div>
                                                        <?php if($errors->has('org_price')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('org_price')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <?php if(isset($book->perc_org_price)): ?>
                                                <div class="form-group row m-t-25">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="org_price_25" class="col-form-label">
                                                            Original Price with 25% commission </label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group input_top_align">
                                                            <span class="calc_commission">$</span>
                                                            <?php echo e($book->perc_org_price); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <div class="form-group row m-t-25">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="listing_price" class="col-form-label">
                                                            Listing Price *</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group input_top_align">
                                                            <span class="input-group-addon">$</span>
                                                            <input type="text"
                                                                   name="listing_price"
                                                                   id="listing_price"
                                                                   min="1"
                                                                   class="form-control valid_float_type"
                                                                   value="<?php echo e(isset($book->listing_price) ? $book->listing_price : old('listing_price')); ?>" 
                                                                   required>
                                                        </div>
                                                        <span id="listing_price_err" style="color: red;"></span>
                                                        <?php if($errors->has('listing_price')): ?>
                                                            <span class="help-block">
                                                                <strong><?php echo e($errors->first('listing_price')); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <?php if(isset($book->perc_listing_price)): ?>
                                                <div class="form-group row m-t-25">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="listing_price" class="col-form-label">
                                                            Listing Price with 25% commission </label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group input_top_align">
                                                            <span class="calc_commission">$</span>
                                                            <?php echo e($book->perc_listing_price); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <div class="form-group row m-t-25">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="quantity" class="col-form-label">
                                                            Quantity *</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                   name="quantity"
                                                                   min="1"
                                                                   class="form-control valid_int_type"
                                                                   value="<?php echo e(isset($book->quantity) ? $book->quantity : old('quantity')); ?>" required>
                                                        </div>
                                                        <span id="listing_price_err" style="color: red;"></span>
                                                        <?php if($errors->has('quantity')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('quantity')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row m-t-25">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="quantity" class="col-form-label">
                                                            Weight *</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group input_top_align">
                                                            <span class="input-group-addon">lb</span>
                                                            <input type="text"
                                                                   name="weight"
                                                                   class="form-control"
                                                                   value="<?php echo e(isset($book->weight) ? $book->weight : old('weight')); ?>" required>
                                                        </div>
                                                        <span id="listing_price_err" style="color: red;"></span>
                                                        <?php if($errors->has('weight')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('weight')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8 text-lg-left">
                                                        <button class="btn btn-primary all-btn-theme check-out-btn" type="submit">
                                                            <i class="fa fa-user"></i>
                                                            <?php echo e(isset($book->id) ? 'Edit Category' : 'Add New'); ?>

                                                        </button>
                                                        <?php if(!isset($book->id)): ?>
                                                        <button class="btn btn-warning all-btn-theme" type="reset" id="clear">
                                                            <i class="fa fa-refresh"></i>
                                                            Reset
                                                        </button>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php endif; ?>
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
<script>
    $(document).ready(function () {
        // Prevent number input field to take negative value
        $(".valid_float_type").keydown(function(e){
            if(!((e.keyCode > 95 && e.keyCode < 106)
                  || (e.keyCode > 47 && e.keyCode < 58) 
                  || e.keyCode == 8 || e.keyCode == 110)) {
                return false;
            }
        });
        $(".valid_int_type").keydown(function(e){
            if(!((e.keyCode > 95 && e.keyCode < 106)
                  || (e.keyCode > 47 && e.keyCode < 58) 
                  || e.keyCode == 8)) {
                return false;
            }
        });
        var base_url = "<?php echo e(asset('/')); ?>";
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var add_button = $(".add_field_button"); //Add button ID
        var x = 1; //initlal text box count
        $(add_button).click(function (e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="form-group row m-t-25"><div class="col-lg-3 col-sm-3 text-lg-right"></div><div class="col-xl-6 col-sm-6 col-lg-6"><div><input type="text" name="author[]" class="form-control" value=""/></div></div><div class="col-lg-3 col-sm-3 text-lg-left"><a href="#" class="remove_field">Remove</a></div></div>'); //add input box
            }
        });

        $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
            e.preventDefault();
            var id = this.id;
            if (id) {
                $.ajax({
                    url: base_url + '/author/delete/' + id,
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
                    url: base_url + '/book_image/delete/' + imageId,
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
                //console.log(index);
                //console.log('add new row');
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
            original_price = parseFloat(original_price);
            var listing_price = $('#listing_price').val();
            listing_price = parseFloat(listing_price);
            if (listing_price <= 0) {
                $('#listing_price_err').html('Listing Price cannot be less than 1');
                return false;
            }
            if (listing_price > original_price) {
                $('#listing_price_err').html('Listing Price should not be greater than original price');
                return false;
            }
        });

    });
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.11.3/ckeditor.js'></script>
<script>
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

<script src="<?php echo e(URL::asset('/public/js/spartan-multi-image-picker.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/js/jquery.multi-select.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/user/add_book.blade.php ENDPATH**/ ?>