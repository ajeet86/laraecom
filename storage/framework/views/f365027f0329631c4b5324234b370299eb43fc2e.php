<?php $__currentLoopData = $pods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4 col-md-6">
       <!-- Single Blog -->
        <div class="single-blog">
            <div class="blog-img">
                <a href="<?php echo e(url('podcast/' . $pod->slug)); ?>">
                    <img src="<?php echo e((isset($pod->feature_image) 
                                ? url('public/images/pod/' . $pod->feature_image) 
                                : url('public/images/pod/default.png'))); ?>" alt="">
                </a>
                
                <div class="music"><img src="<?php echo e(url('public/sites/images/music-icon.png')); ?>" alt=""></div>
            </div>
            <div class="blog-content">
               <div class="blog-title">
                  <h4><a href="<?php echo e(url('podcast/' . $pod->slug)); ?>"><?php echo e($pod->title); ?></a></h4>
                  <span>by <?php echo e($pod->created_by); ?></span>
                  <div class="meta">
                     <ul>
                        <li><?php echo e(date('F d, Y', strtotime($pod->created_at))); ?></li>
                     </ul>
                  </div>
               </div>
               <p><?php echo str_limit(strip_tags($pod->content), 90); ?></p>
                <ul class="co-words">
                    <?php $__currentLoopData = $pod->podtags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li value="<?php echo e($tag->tag_id); ?>"><?php echo e($tag->name); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
               
                <p class="read-more"> <a href="<?php echo e(url('podcast/' . $pod->slug)); ?>" class="box_btn">read more</a>
                    <?php if(isset($pod->cmt_count)): ?>
                        <span><i class="fa fa-comment" aria-hidden="true"></i> <?php echo e($pod->cmt_count); ?></span>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-12">
<?php echo $pods->render(); ?>

</div><?php /**PATH /var/www/html/schoolsharks/resources/views/podcasts.blade.php ENDPATH**/ ?>