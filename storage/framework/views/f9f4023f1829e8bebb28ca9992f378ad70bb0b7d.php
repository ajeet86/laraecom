
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/sites/css/slider.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="product-wrapper dashboard-body">
    <div class="container-fluid">
        <?php if($message = Session::get('success')): ?>
        <div class="w3-panel w3-green w3-display-container">
            <span onclick="this.parentElement.style.display = 'none'"
                  class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            <p><?php echo $message; ?></p>
        </div>
        <?php Session::forget('success'); ?>
        <?php endif; ?>
        <?php if($message = Session::get('error')): ?>
        <div class="w3-panel w3-red w3-display-container">
            <span onclick="this.parentElement.style.display = 'none'"
                  class="w3-button w3-red w3-large w3-display-topright">&times;</span>
            <p><?php echo $message; ?></p>
        </div>
        <?php Session::forget('error'); ?>
        <?php endif; ?>
        <div class="checkout-info">
            <div class="row">	
                <div class="col-md-12 col-sm-12">
                    <div class="shipping">
                        <h6>Checkout</h6>
                        <img src="http://localhost/schoolshark/public/sites/images/single-img.png">
                    </div>
                </div>
            </div>
            <div class="row">	

                <div class="col-md-6">

                    <div class="contact-info">
                        <div class="cont-info">
                            <div class="row">
                                <div class="col-md-6"> <h4 class="cont-head"> Contact information </h4>  </div>
                                <div class="col-md-12 contact_email"> 
                                    <?php echo e($shipping_info['email']); ?>

                                </div>

                                <div class="col-md-12 shipping">
                                    <b>Shipping address</b>
                                    <div clas="address">
                                        <?php echo e($shipping_info['first_name']); ?> <?php echo e($shipping_info['last_name']); ?>

                                        <?php echo e($shipping_info['apartment'].','); ?>  <?php echo e($shipping_info['address'].','); ?> <?php echo e($shipping_info['city'].','); ?> <?php echo e($shipping_info['state'].','); ?> <?php echo e($shipping_info['country'].','); ?> <?php echo e($shipping_info['pin_code']); ?>

                                    </div>
                                </div>
                                <div class="col-md-12 shipping">
                                    <b>Contact number  </b>
                                    <div class="phone_number">
                                        <?php echo e($shipping_info['phone_number']); ?>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="note shipping"><strong>Note:</strong>Please note that your chosen PayPal account is charged shortly after you have submitted your order including all duties and taxes. If you wish to modify or cancel you placed order, please email us immediately (within 24 hours) at customerservice@thecoatdesign.com as your order may be processed and shippped soon after we have received it. You may be charged a cancelation fee if you wish to change or cancel your order wich has already been shipped.	</div>

                </div>
                <div class="col-md-6">
                    <div class="payment-info">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="add-product">

                                    <!-- product row -->
                                    <?php if(session('cart')): ?>
                                    <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3">
                                            <div class="pro-img"> 
                                                <img src="<?php echo e(!empty($details['photo']) ?
                                                                url('public/images/books/original/' . $details['photo']) :
                                                                        url('public/images/books/default.gif')); ?>"> 
                                                <span class="qty-cir"><?php echo e($details['quantity']); ?></span>
                                            </div> </div>

                                        <div class="col-md-5 col-lg-6"> <div class="pro-det"> 
                                                <h4> <?php echo e($details['name']); ?> </h4>
                                            </div> 
                                        </div>

                                        <div class="col-md-4 col-lg-3"> <div class="price-cell"> $<?php echo e($details['price']); ?> USD </div> </div>

                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="total-code">
                                    <ul>
                                        <?php 
                                        $total = 0 ;//echo '<pre>';print_r(session('cart'));?>
                                        <?php if(session('cart')): ?>
                                            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $total += $details['price'] * $details['quantity'] ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <?php $total = 0 ; ?>
                                        <?php endif; ?>
                                        <li> <label class="Sub-total">Subtotal</label>   <span class="total" id="sub_total"> $<?php echo e($total); ?> USD </span>  </li>
                                        
                                            <!--<li> <label class="Sub-total">Shipping</label>
                                                <span class="total fedx-option-list">
                                                    <ul class="international-eco">
                                                        <li><input required="" type="radio" class="fedex_rate" name="fedratetype" value="INTERNATIONAL_ECONOMY**140.38"><p>International Economy<span>$140.38 USD</span></p></li>
                                                    </ul>
                                                </span>
                                            </li>-->
                                            <li> <label class="Sub-total-total">Total </label>  <span class="total-all"> $<span id="total"><?php echo e($total); ?> USD</span> </span>  </li>
                                        </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST" id="payment-form"
                                          action="<?php echo e(url('/paypal')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="express-paypal">
                                    <div class="payment-checkbox">
                                        <!--model start-->
                                        <small> <a hre="#" data-toggle="modal" data-target="#myModal"> Terms and conditions </a> </small> 
                                        <div class="modal fade" id="myModal">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Terms and Conditions</h4>
                                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <table id="size-chart-table-1" class="a-bordered">
                                                            <tbody><tr>
                                                                    <th class="a-align-center">
                                                                        &nbsp;
                                                                        <br>
                                                                    </th>
                                                                    <th class="a-align-center">
                                                                        S 
                                                                    </th>
                                                                    <th class="a-align-center">
                                                                        M
                                                                    </th>
                                                                    <th class="a-align-center">
                                                                        L
                                                                    </th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>THIS MEASUREMENTS ARE TAKEN FROM COAT LAYING FLAT.					
                                                            IF YOU NEED FURTHER INFORMATION OR ASSISTANCE PLEASE CONTACT					
                                                            TO  COSTUMERSERVICE@THECOATDESIGN.COM 					
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--model end-->
                                        <input type="checkbox" id="terms" name="terms" required="">
                                    </div>
                                    <input class="w3-input w3-border" id="amount" type="text" name="amount" value="<?php echo e($total); ?>" hidden="">
                                    <input class="w3-input w3-border" id="user_id" type="text" name="user_id" value="<?php echo e($shipping_info['user_id']); ?>" hidden="">
                                    <input class="w3-input w3-border" id="shipping_id" type="text" name="shipping_id" value="<?php echo e($shipping_info['shipping_info_id']); ?>" hidden="">
                                    <label class="exp-chekout">Express Checkout</label>
                                    <button class="w3-btn w3-blue" style="display:block;">Pay with PayPal</button>
                                    
                                </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>

            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagescript'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolshark1/resources/views/user/checkout.blade.php ENDPATH**/ ?>