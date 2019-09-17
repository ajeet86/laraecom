<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4 col-md-6">
       <!-- Single Blog -->
        <div class="single-blog">
            <div class="blog-img">
                <a href="<?php echo e(url('blog/' . $blog->slug)); ?>">
                    <img src="<?php echo e((isset($blog->feature_image) 
                                ? url('public/images/blog/' . $blog->feature_image) 
                                : url('public/images/blog/default.png'))); ?>" alt="">
                </a>
            </div>
            <div class="blog-content">
               <div class="blog-title">
                  <h4><a href="<?php echo e(url('blog/' . $blog->slug)); ?>"><?php echo e($blog->title); ?></a></h4>
                  <span>by <?php echo e($blog->created_by); ?></span>
                  <div class="meta">
                     <ul>
                        <li><?php echo e(date('F d, Y', strtotime($blog->created_at))); ?></li>
                     </ul>
                  </div>
               </div>
               <p><?php echo str_limit(strip_tags($blog->content), 90); ?></p>
                <ul class="co-words">
                    <?php $__currentLoopData = $blog->blogtags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li value="<?php echo e($tag->tag_id); ?>"><?php echo e($tag->name); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <p class="read-more"> <a href="<?php echo e(url('blog/' . $blog->slug)); ?>" class="box_btn">read more</a>
                    <?php if(isset($blog->cmt_count)): ?>
                        <span><i class="fa fa-comment" aria-hidden="true"></i><?php echo e($blog->cmt_count); ?></span>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-12">
<?php echo $blogs->render(); ?>

</div>
<?php /**PATH /var/www/html/schoolsharks/resources/views/blogs.blade.php ENDPATH**/ ?>