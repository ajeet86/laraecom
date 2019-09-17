
<?php $__env->startSection('content'); ?>
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php echo $__env->make('layouts.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-lg-9 produst-right-side">
                <div class="dash-container">
                    <h3> My buyer Messages </h3>
                    <hr class="divider-hr">
                    <section class="gallerry">
                        <!-- SCHOOL TOP PICKS section-->
                        <?php if($my_buyers->isNotEmpty()): ?>
                            <table id="cart" class="table table-hover table-condensed table-responsive">
                                <thead>
                                    <tr>
                                        <th style="min-width: 150px;">Buyer Name</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $my_buyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buyer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($buyer->name); ?></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" 
                                               href="<?php echo e(url('/message/'.$buyer->id)); ?>">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                Message to <?php echo e($buyer->name); ?></a>
												<?php if(array_key_exists($buyer->id, $msg_read_status)): ?>
													<span class="notification"><?php echo e('1'); ?></span>
												<?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        <?php else: ?>
                            <p>You have no any buyer yet.</p>
                        <?php endif; ?>   
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagescript'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/user/my_buyer_list.blade.php ENDPATH**/ ?>