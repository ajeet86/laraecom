
<?php $__env->startSection('content'); ?>
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php echo $__env->make('layouts.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-lg-9 produst-right-side">
                <div class="dash-container">
                    <h3> Rate Your Seller </h3>
                    <hr class="divider-hr">
                    <section class="gallerry">
                        <!-- SCHOOL TOP PICKS section-->
                        <?php if($my_sellers->isNotEmpty()): ?>
                        <table id="cart" class="table table-hover table-condensed table-responsive">
                            <thead>
                                <tr>

                                    <th style="min-width: 270px;">Seller Name</th>
                                    <th>Rate Your seller</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $my_sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($seller->name); ?></td>
                                    <td>
                                        <div class="rating-star-3" data-value="<?php echo e($seller->rating); ?>">
                                            
                                        </div>
                                        <input type="hidden" class="seller_id" value="<?php echo e($seller->id); ?>" />
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" 
                                           href="<?php echo e(url('/message/'.$seller->id)); ?>">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            Message to <?php echo e($seller->name); ?></a>
											<?php if(array_key_exists($seller->id, $msg_read_status)): ?>
                                                <span class="notification"><?php echo e('1'); ?></span>
                                            <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php else: ?>
                            <p>You have not ordered any seller's book yet.</p>
                        <?php endif; ?>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagescript'); ?>
<script>
    $(document).ready(function(){
        $(document).on("click", ".rating-star-3" , function() {
            var rating = $(this).find("input[name='rating']").val();
            var seller_id = $(this).next(".seller_id").val();
            $.ajax({type:'POST',
            url: '<?php echo e(url('/post_rating')); ?>',
            data:{seller_id:seller_id, user_rating:rating, '_token': $('meta[name="csrf-token"]').attr('content') },
            success:function(data){
                alert(data.success);
            }

        });
        });
    });
</script>
<script type="text/javascript" src="<?php echo e(asset('public/sites/js/hillRate-jquery.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('public/sites/js/script.js')); ?> ">
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/user/seller_rating.blade.php ENDPATH**/ ?>