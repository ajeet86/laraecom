
<?php $__env->startSection('content'); ?>
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php echo $__env->make('layouts.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-lg-9 produst-right-side">
                <div class="dash-container">
                    <h3> My Sells </h3>
                    <hr class="divider-hr">
                    <section class="gallerry" id="sell_list">
                        <!-- SCHOOL TOP PICKS section-->
                        <?php if($orders->isEmpty()): ?>
                        <p class="no-found">No sell found</p>
                        <?php endif; ?>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <table id="cart" class="table table-hover table-condensed table-responsive">
                            <thead>
                                <tr>

                                    <th style="min-width: 270px;">Order Placed <span> <?php echo e(date('d M Y', strtotime( $order->created_at ))); ?></span></th>
                                    <th>Quantity</th>
									<th>Buyer Name</th>
                                    <th style="min-width: 270px;" class="text-center">Paid amount</th>
                                    <th style="min-width: 270px">Status</th>


                                    <th style="min-width: 270px;">Order #<?php echo e($order->order_no); ?><br/>
                                        <a class="btn btn-primary btn-sm" href="<?php echo e(url('/sells_detail/'.$order->id)); ?>">Order detail</a>
                                        <?php if($order->status == 'success'): ?>
                                            <!--<a class="btn btn-info btn-sm" target="_blank" href="<?php echo e(url('/generate_seller_pdf/'.$order->id)); ?>">Invoice</a>-->
                                        <?php endif; ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td data-th="Product" style="min-width: 270px;">
                                        <div class="row">
                                            <div class="col-sm-3 col-3 hidden-xs"><img 
                                                    src="<?php echo e(!empty($orderItem->image) 
                                                        ? url('public/images/books/original/' . $orderItem->image) 
                                                        : url('public/images/books/default.gif')); ?>"
                                                    width="100" height="100" 
                                                    class="img-responsive"/>
                                            </div>
                                            <div class="col-sm-9 col-9">							
                                                <h4 class="nomargin"> <?php echo e($orderItem->item_name); ?> </h4>
                                                <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>" />
                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo e($orderItem->quantity); ?></td>
									<td><?php echo e($order->buyer_name); ?></td>
                                    <td data-th="Subtotal" class="text-center" style="min-width: 270px;">$<?php echo e(number_format($orderItem->amount * $orderItem->quantity,2)); ?></td>
                                    <td class="actions" data-th="" style="min-width: 270px;">
                                        <?php echo e($order->status); ?>

                                    </td>
                                    <td></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                        </table>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12">
                            <?php echo $orders->render(); ?>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagescript'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/user/my_sell_list.blade.php ENDPATH**/ ?>