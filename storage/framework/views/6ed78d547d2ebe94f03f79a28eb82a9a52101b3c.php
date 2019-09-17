
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/public/admn/css/bootstrapValidator.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="product-wrapper dashboard-body">
    <div class="container-fluid">
        <div class="checkout-info">
            <div class="row">	
                <div class="col-md-12 col-sm-12">
                    <div class="shipping">
                        <h6>Shipping Information</h6>
                        <img src="http://localhost/schoolshark/public/sites/images/single-img.png">
                    </div>
                </div>
            </div>
            <div class="row">	
                <div class="col-md-6">

                    <div class="contact-info"> 



                        <div class="shipping-add">
                            <!--messages-->
                            <?php if(count($errors)): ?>
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <br/>
                                <ul>
                                    <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <!--end messages-->
                            <div class="row">
                                <div class="col-md-12"> 
                                    <h4 class="cont-head"> Shipping address  </h4>
                                </div>
                            </div>
                            <form class="form-horizontal login_validator" id="tryitForm" method="POST">
                                <div class="row">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="col-md-12"> 
                                        <input type="email" placeholder="Email" 
                                               <?php echo e((!empty($shipping_details->email))? 'readonly' : ''); ?>

                                        name="email" class="shipping_email mobile-email-input"
                                        value="<?php echo e((!empty($shipping_details->email))? $shipping_details->email : ''); ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="First Name" 
                                               minlength="2" maxlength="50"
                                               name="firstName" value="<?php echo e((!empty($shipping_details->first_name))? $shipping_details->first_name : ''); ?>" 
                                               class="shipping_firstName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Last Name" 
                                               name="lastName"
                                               minlength="2" maxlength="50"
                                               value="<?php echo e((!empty($shipping_details->last_name))? $shipping_details->last_name : ''); ?>" 
                                               class="shipping_lastName" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Address" 
                                               name="address" 
                                               value="<?php echo e((!empty($shipping_details->address))? $shipping_details->address : ''); ?>" 
                                               class="shipping_address" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" 
                                               placeholder="Apartment, Suit, etc (optional)"
                                               name="apartment" 
                                               value="<?php echo e((!empty($shipping_details->apartment))? $shipping_details->apartment : ''); ?>"
                                               class="shipping_apartment" required="">
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="cout-reg">
                                            <label class="label-visible" for="checkout-shipy">Country/Region</label>
                                            <input type="hidden" id="countrySavedValue" value="US">
                                            <select name="country" class="countries" id="countryId">
                                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($country->iso2_code); ?>"><?php echo e($country->country_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="cout-reg">
                                            <label class="label-visible" for="checkout-shipy">State</label>
                                            <input type="hidden" id="state-saved-value" value="NY">
                                            <select name="state" class="states" id="stateId">
                                                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($state->code); ?>" <?php echo e((isset($shipping_details->state) && $shipping_details->state == $state->code)? 'selected' : ''); ?>><?php echo e($state->default_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <input type="text" placeholder="City" 
                                               class="cities" name="city"
                                               value="<?php echo e((!empty($shipping_details->city))? $shipping_details->city : ''); ?>"
                                               required="">				

                                    </div>

                                </div>  

                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="number" placeholder="Phone"
                                               class="shipping_phone" name="tele"
                                               maxlength="10"
                                               value="<?php echo e((!empty($shipping_details->phone_number))? $shipping_details->phone_number : ''); ?>"
                                               required="">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="pin-code">
                                            <input type="text" placeholder="PIN Code"
                                                   class="shipping_pinCode" name="pin_code"
                                                   maxlength="7"
                                                   value="<?php echo e((!empty($shipping_details->pin_code))? $shipping_details->pin_code : ''); ?>" required>
                                        </div>	
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="shopping-btn">
                                            <button type="submit" name="shippingInfo"> Continue to shipping method </button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
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
                                                <span class="qty-cir">1</span>
                                            </div> 
                                        </div>
                                        <div class="col-md-5 col-lg-6"> <div class="pro-det"> 
                                                <h4> <?php echo e($details['name']); ?></h4>
                                            </div> 
                                        </div>
                                        <div class="col-md-4 col-lg-3"> <div class="price-cell"> $<?php echo e($details['price'] * $details['quantity']); ?> USD </div> </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="total-code">
                                    <?php $total = 0; //echo '<pre>';print_r(session('cart'));  ?>
                                    <?php if(session('cart')): ?>
                                    <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $total += $details['price'] * $details['quantity'] ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <?php $total = 0; ?>
                                    <?php endif; ?>
                                    <ul>
                                        <li> <label class="Sub-total">Subtotal</label>   <span class="total"> $<?php echo e($total); ?> USD </span>  </li>
                                        <li> <label class="Sub-total">Shipping</label>
                                            <span class="total"> Calculated at next step  </span>  </li>
                                        <li> <label class="Sub-total-total">Total </label>  <span class="total-all">  $<?php echo e($total); ?> USD </span>  </li>
                                    </ul>
                                </div>
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
<script src="<?php echo e(URL::asset('/public/admn/js/bootstrapValidator.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/public/admn/js/pages/validation.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolshark1/resources/views/user/shipping.blade.php ENDPATH**/ ?>