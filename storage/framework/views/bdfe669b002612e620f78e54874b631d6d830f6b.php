<div class="row">
    <?php if(!$books->isEmpty()): ?>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <div class="gallery-sec">
                    <div class="icon_wrapper">
                        <ul>
                            <li><a href="<?php echo e(url('edit_book/'.$book->id)); ?>" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                            <li>
                                <?php if($book->publish == 1): ?>
                                <a href="<?php echo e(url('pub_unpub_book/'.$book->id)); ?>" 
                                   title="publish" onclick="return confirm('Are you sure you want to unpublish this book?')">
                                    <i class="fa fa-cloud-upload text-success" aria-hidden="true"></i>
                                </a>
                                <?php else: ?>
                                    <a href="<?php echo e(url('pub_unpub_book/'.$book->id)); ?>"
                                       title="unpublish" onclick="return confirm('Are you sure you want to publish this book?')">
                                        <i class="fa fa-cloud-upload text-danger" aria-hidden="true"></i>
                                    </a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                    <figure><a href="<?php echo e(url('book_details/'.$book->id)); ?>">
						<img src="<?php echo e(isset($book->image) ? url('public/images/books/original/' . $book->image) : url('public/images/books/default.gif')); ?>" class="img-fluid"></a>
					</figure>
                    <div class="main-lest-items">
                        <div class="gallery-text-sec">
                            <p><a href="<?php echo e(url('book_details/'.$book->id)); ?>"><?php echo e($book->title); ?></a></p>
                        </div>
                        <div class="border-textss">
                            <hr></hr>
                        </div>
                        <div class="numbers-text">
                            <?php if($book->perc_org_price > $book->perc_listing_price): ?>
                                <p class="test">$<?php echo e($book->perc_org_price); ?></p>
                            <?php endif; ?>
                            <p>$<?php echo e($book->perc_listing_price); ?></p>
                        </div>
                    </div>
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
        No Book Found
    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/schoolsharks/resources/views/user/my_book_list_result.blade.php ENDPATH**/ ?>