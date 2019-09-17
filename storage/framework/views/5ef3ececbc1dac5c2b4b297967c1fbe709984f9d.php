<div class="row">
    <?php if(!$books->isEmpty()): ?>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php ($flag = 1); ?>
            <?php if(isset(session('cart')[$book->id]) && (($book->quantity > 0) && session('cart')[$book->id]['quantity'] == $book->quantity)): ?>
                <?php ($flag = 2); ?>
            <?php endif; ?>
            <div class="col-md-3">
                <div class="gallery-sec">
                    <figure><a href="<?php echo e(url('book_details/'.$book->id)); ?>"><img src="<?php echo e(isset($book->image) ? url('public/images/books/original/' . $book->image) : url('public/images/books/default.gif')); ?>" class="img-fluid"></a></figure>
                    <div class="main-lest-items">
                        <div class="gallery-text-sec">
                            <p><a href="<?php echo e(url('book_details/'.$book->id)); ?>"><?php echo e($book->title); ?></a></p>
                        </div>
                        <div class="border-textss">
                            <hr></hr>
                            <?php if((Auth::guest() || ($book->user_id != Auth::user()->id)) 
                            && ($book->quantity > 0 && $flag == 1)): ?>
                                <div class="main-outer-circle">
                                    <div class="main-inner-circle">
                                        <a href="javascript:void(0)">
                                            <img src="<?php echo e(asset('public/sites/images/bucket.png')); ?>" 
                                                 onclick="return add_to_cart(<?php echo e($book->id); ?>);" 
                                                 class="add_to_cart" 
                                                 data-toggle="tooltip"
                                                 data-placement="top"
                                                 title="Add To Cart">
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
					<?php if($flag == 2): ?>
                        <div class="sold"><p>Stock Out</p></div>
                    <?php endif; ?>
                    <?php if($book->quantity == 0): ?>
                        <div class="sold"><p>Sold Out</p></div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12">
            <?php echo $books->render(); ?>

        </div>
    <?php else: ?>
    <div class="col-md-12"><p class="no-found"> No Book Found </p></div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/schoolsharks/resources/views/book_list_result.blade.php ENDPATH**/ ?>