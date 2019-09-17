
<?php $__env->startSection('content'); ?>
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php echo $__env->make('layouts.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-lg-9 produst-right-side">
                <div class="dash-container">
                    <h3> Order Details </h3>
                    <hr class="divider-hr">
                    <section class="gallerry">
                        <!-- SCHOOL TOP PICKS section-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Elements -->
                                <div class="order-header">
                                    <span>Ordered on <?php echo e(date('d M Y', strtotime($order_details->orders[0]->created_at))); ?></span>&nbsp;
                                    <?php if($order_details->orders[0]->status == 'success'): ?><span><b>Order#</b> <?php echo e($order_details->orders[0]->order_no); ?></span>
                                    <?php $__currentLoopData = $order_details->orders[0]->shippingDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipping_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span><b>Package Tracking Id#</b> <?php echo e($order_details->orders[0]->order_no); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>

                                </div>
                                <table id="cart" class="table table-hover table-condensed table-responsive">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 250px">Item details</th>
                                            <th>Quantity</th>
                                            <th>Seller Name</th>
                                            <th>Payment Status</th>
                                            <th style="text-align: right;">Paid Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php ($subtotal = 0); ?>
                                        <?php $__currentLoopData = $order_details->orders[0]->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td data-th="Product">
                                                <div class="row">
                                                    <div class="col-sm-3 col-3 hidden-xs"><img 
                                                            src="<?php echo e(!empty($order_detail->image) 
                                                        ? url('public/images/books/original/' . $order_detail->image) 
                                                        : url('public/images/books/default.gif')); ?>" class=""/></div>
                                                    <div class="col-sm-9 col-9">
                                                        <h4 class="nomargin"><?php echo e($order_detail->item_name); ?></h4>
                                                        <input type="hidden" name="order_id" value="<?php echo e($order_detail->order_id); ?>" />
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo e($order_detail->quantity); ?></td>
                                            <td><?php echo e($order_detail->name); ?></td>
                                            <td><?php echo e($order_details->orders[0]->status); ?></td>
                                            <td data-th="Subtotal" align="right">
                                                $<?php echo e($total = number_format($order_detail->amount * $order_detail->quantity,2)); ?>

                                            </td>
                                            <?php ($subtotal = $subtotal + $total); ?>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div class="order-detail-sec">
                                    <table class="table table-striped table-condensed table-responsive" id="order-detail-shipping-wrap">
                                        <thead>
                                            <tr>
                                                <th style="min-width: 230px">Shipping address </th>
                                                <th style="min-width: 230px">Payment Mode</th>
                                                <th>&nbsp;</th>
                                                <th class="text-right" style="min-width: 150px">Order Summary </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <?php echo e($order_details->first_name); ?> <?php echo e($order_details->last_name); ?>

                                                    <?php echo e($order_details->apartment.','); ?>  <?php echo e($order_details->address.','); ?>

                                                    <?php echo e($order_details->city.','); ?> <?php echo e($order_details->state.','); ?> 
                                                    <?php echo e($order_details->country.','); ?> <?php echo e($order_details->pin_code); ?>

                                                </td>
                                                <td>Paypal</td>
                                                <td class="text-right">Item(s) Subtotal:</td>
                                                <td class="text-right"> $<?php echo e(number_format($subtotal, 2)); ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td class="text-right" align="right">Shipping Charge:</td>
                                                <td class="text-right" align="right">$<?php echo e(number_format($order_details->orders[0]->shipping_rate, 2)); ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td class="text-right" align="right">Total:</td>
                                                <td class="text-right" align="right">$<?php echo e(number_format($order_details->orders[0]->amount,2)); ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td class="text-right" align="right" style="min-width: 300px"><strong>Paid Amount:</strong></td>
                                                <td  class="text-right"align="right"><strong>$<?php echo e(number_format($order_details->orders[0]->paid_amount,2)); ?></strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/user/order_details.blade.php ENDPATH**/ ?>