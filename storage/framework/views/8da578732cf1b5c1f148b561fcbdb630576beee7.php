<div class="row">
    <?php if(!$books->isEmpty()): ?>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <div class="gallery-sec">
                    <figure><a href="<?php echo e(url('book_details/'.$book->id)); ?>"><img src="<?php echo e(isset($book->image) ? url('public/images/books/original/' . $book->image) : url('public/images/books/default.gif')); ?>" class="img-fluid"></a></figure>
                    <div class="main-lest-items">
                        <div class="gallery-text-sec">
                            <p><a href="<?php echo e(url('book_details/'.$book->id)); ?>"><?php echo e($book->title); ?></a></p>
                        </div>
                        <div class="border-textss">
                            <hr></hr>
                            <?php if(Auth::guest() || ($book->user_id != Auth::user()->id)): ?>
                                <div class="main-outer-circle">
                                    <div class="main-inner-circle">
                                        <a href="<?php echo e(url('add-to-cart/'.$book->id )); ?>">
                                            <img src="<?php echo e(asset('public/sites/images/bucket.png')); ?>">
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="numbers-text">
                            <?php if($book->perc_org_price > $book->perc_listing_price): ?>
                            <p class="test">$<?php echo e($book->perc_org_price); ?></p>
                            <?php endif; ?>
                            <p>$<?php echo e($book->perc_listing_price); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12">
            <?php echo $books->render(); ?>

        </div>
    <?php else: ?>
        No Book Found
    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/schoolshark1/resources/views/book_list_result.blade.php ENDPATH**/ ?>