
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('public/sites/3/ninja-slider.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('public/sites/3/thumbnail-slider.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="product-wrapper dashboard-body">
    <div class="container-fluid">
        <div class="row product">
            <div class="col-lg-12">
                <h3> Products Details</h3></div>
            <hr class="divider-hr">
            <div class="product-descript">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">

                            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <?php $__currentLoopData = $book->bookImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookImages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="carousel-item <?php echo e($loop->first ? 'active' : ''); ?>">
                                        <img class="d-block w-100" src="<?php echo e(url('public/images/books/original/' . $bookImages->image)); ?>"
                                             alt="First slide">
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <!--/.Slides-->
                                <!--Controls-->
                                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/.Controls-->
                                <ol class="carousel-indicators">
                                    <?php $i = 0; ?>
                                    <?php $__currentLoopData = $book->bookImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookImages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li data-target="#carousel-thumb" data-slide-to="<?php echo e($i); ?>" class="<?php echo e($loop->first ? 'active' : ''); ?>">
                                        <img src="<?php echo e(url('public/images/books/original/' . $bookImages->image)); ?>" width="100">
                                    </li>
                                    <?php $i++; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ol>
                            </div>
                            <!-- #endregion Jssor Slider End -->




                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="book-description-cls">
                                <h6>Book Title:<br>
                                    <span><?php echo e($book->title); ?></span></h6>
                                <?php if(isset($book->book_desc)): ?>
                                <h6>Book Description:<br>
                                    <span><?php echo e($book->book_desc); ?></span>
                                </h6>
                                <?php endif; ?>
                                <h6>ISBN:<br>
                                    <span><?php echo e($book->isbn_no); ?></span></h6>
                                <?php if(isset($book->book_condition)): ?>
                                <h6>Book Condition:<br>
                                    <span><?php echo e($book->book_condition); ?></span></h6>
                                <?php endif; ?>
                                <h6>Author Name:<br>
                                    <?php $__currentLoopData = $book->bookAuthors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span><?php echo e($author->author); ?></span></h6>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <h6>Price:<br>
                                    <div class="numbers-text">
                                        <?php if($book->perc_org_price > $book->perc_listing_price): ?>
                                        <p class="test">$<?php echo e($book->perc_org_price); ?></p>
                                        <?php endif; ?>
                                        <p>$<?php echo e($book->perc_listing_price); ?></p>
                                    </div>
                                    <?php if(Auth::guest() || ($book->user_id != Auth::user()->id)): ?>
                                    <div class="buttons">
                                        <button type="button" class="add-to-cart">ADD TO CART</button>
                                        <button type="button" class="buy">BUY NOW</button>
                                    </div>
                                    <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div


        </div>


    </div>
</div>

</section>
<!-- SCHOOL TOP PICKS section-->
<?php if(!$related_author_books->isEmpty()): ?>
<section class="gallerry related">
    <div class="container-fluid">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="all-heading anhanger-head"> <h4> Related Author Books</h4><img src="<?php echo e(url('public/sites/images/single-img.png')); ?>"> </div>
        </div>
        <div class="row padtop">
            <?php $__currentLoopData = $related_author_books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related_author_book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="gallery-sec">
                    <figure>
                        <a href="<?php echo e(url('book_details/'.$related_author_book->id)); ?>">
                            <img 
                                src="<?php echo e(isset($related_author_book->image) ? 
                                    url('public/images/books/original/' . $related_author_book->image) : 
                                            url('public/images/books/default.gif')); ?>"
                                class="img-fluid">
                        </a>
                    </figure>
                    <div class="main-lest-items">
                        <div class="gallery-text-sec">
                            <p><a href="<?php echo e(url('book_details/'.$related_author_book->id)); ?>"><?php echo e($related_author_book->title); ?></a></p>
                        </div>
                        <div class="border-textss">
                            <hr></hr>
                            <?php if(Auth::guest() || ($book->user_id != Auth::user()->id)): ?>
                                <div class="main-outer-circle">
                                    <div class="main-inner-circle">
                                        <img src="<?php echo e(asset('public/sites/images/bucket.png')); ?>">
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="numbers-text">
                            <?php if($related_author_book->perc_org_price > $related_author_book->perc_listing_price): ?>
                            <p class="test">$<?php echo e($related_author_book->perc_org_price); ?></p>
                            <?php endif; ?>
                            <p><?php echo e($related_author_book->perc_listing_price); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-1 col-sm-1 col-xs-1"></div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <a href="<?php echo e(route('all_book_list')); ?>" class="view-buton">View All</a>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- end selbs section-->



<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagescript'); ?>
<link href="<?php echo e(asset('public/sites/3/ninja-slider.js')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('public/sites/3/thumbnail-slider.js')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolshark1/resources/views/book_details.blade.php ENDPATH**/ ?>