
<?php $__env->startSection('content'); ?>
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php echo $__env->make('layouts.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-lg-9 produst-right-side">
                <div class="dash-container">
                    <?php if(session()->has('success')): ?>
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <?php echo e(session()->get('success')); ?>

                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(session()->has('error')): ?>
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <?php echo e(session()->get('error')); ?>

                        </div>
                    </div>
                    <?php endif; ?>
                    <h3> My Orders </h3>
                    <hr class="divider-hr">
                    <section class="gallerry">
                        <!-- SCHOOL TOP PICKS section-->
                        <?php if($orders->isEmpty()): ?>
                        <p class="no-found">No order found</p>
                        <?php endif; ?>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <table id="cart" class="table table-hover table-condensed table-responsive">
                            <thead>
                                <tr>

                                    <th style="min-width: 270px;">Order Placed <span> <?php echo e(date('d M Y', strtotime( $order->created_at ))); ?></span></th>
                                    <th>Seller Name</th>
                                    <th>Quantity</th>
                                    <th style="min-width: 270px;" class="text-center">Total paid amount<span> $<?php echo e(number_format($order->paid_amount,2)); ?></span></th>
                                    <th style="min-width: 50px">Payment Status</th>


                                    <th style="min-width: 270px;"><?php if($order->status == 'success'): ?> Order #<?php echo e($order->order_no); ?> <?php endif; ?><br/>
                                        <a class="btn btn-primary btn-sm" href="<?php echo e(url('/order_details/'.$order->id)); ?>">Order detail</a>
                                        <?php if($order->status == 'success'): ?>
                                        <a class="btn all-btn-theme btn-sm" target="_blank" href="<?php echo e(url('/generate_pdf/'.$order->id)); ?>">Invoice</a>
                                        <?php endif; ?>	
                                        <?php if($order->status == 'success'): ?>
                                        <a class="btn btn-danger btn-sm" hre="#"  data-toggle="modal" data-target="#myModal_<?php echo e($order->id); ?>"> Cancel </a> 
                                        <?php endif; ?>
                                        <!--model start-->
                            <div class="modal fade" id="myModal_<?php echo e($order->id); ?>">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Cancel Order</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="<?php echo e(url('/cancel-form')); ?>" method="POST">
                                                <?php echo e(csrf_field()); ?>

                                                <input type="hidden" readonly value="<?php echo e($order->id); ?>" name="order-id">
                                                <input type="hidden" readonly value="<?php echo e(Auth::user()->id); ?>" name="user-id" class=""> 
                                                <input type="text" readonly value="<?php echo e(Auth::user()->email); ?>" name="user-email">
                                                <input type="hidden" readonly value="<?php echo e($order->amount-$order->shipping_rate); ?>" name="product-total">
                                                <input type="hidden" readonly value="<?php echo e($order->shipping_rate); ?>" name="shipping-amount">

                                                <input type="text" readonly value="Cancel product" name="subject">
                                                <textarea class="editor" cols="80" name="cancelreason" ></textarea>
                                                <?php if($order->status == 'success'): ?>
                                                <button class="w3-btn w3-blue" data-dismiss="modal" >Cancel</button>
                                                <button class="w3-btn w3-blue cancelproduct" >Submit</button>
                                                <?php endif; ?>
                                            </form>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!--model end-->
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
                                            <div class="col-sm-9 col-3">							
                                                <h4 class="nomargin"> <?php echo e($orderItem->item_name); ?> </h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo e($orderItem->name); ?></td>
                                    <td><?php echo e($orderItem->quantity); ?></td>
                                    <td data-th="Subtotal" class="text-center" style="min-width: 270px;">$<?php echo e(number_format($orderItem->amount * $orderItem->quantity,2)); ?></td>
                                    <td class="actions" data-th="" style="min-width: 270px;">
                                        <?php echo e($order->status); ?>

                                    </td>
                                    <td>
                                        <!--<div class="rating-star-3"><input type="text" name="sell_id" class="seller_id" value="<?php echo e($orderItem->user_id); ?>" /></div>-->

                                        <!--<a class="btn btn-primary btn-sm" href="<?php echo e(url('/seller_rating/'.$orderItem->user_id)); ?>">Rate Your Seller</a>-->
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                        </table>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagescript'); ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.11.3/ckeditor.js'></script>
<script>
// Normal ckEditor example code
var elements = CKEDITOR.document.find('.editor'),
        i = 0,
        element;
while ((element = elements.getItem(i++))) {
    CKEDITOR.replace(element);
}

$('.cancelproduct').on('click',function(event){
    var cancel_msg = CKEDITOR.instances['cancelreason'].getData();
    if (cancel_msg === "" || cancel_msg === null) {
        alert("Please enter your cancellation reason");
        return false;
    }
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/user/orders.blade.php ENDPATH**/ ?>