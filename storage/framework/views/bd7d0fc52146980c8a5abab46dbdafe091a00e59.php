<?php $__env->startSection('title', 'Contact Us'); ?>
<?php $__env->startSection('description', 'Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.'); ?>
<?php $__env->startSection('content'); ?>
<section class="product-wrapper dashboard-body">
  <div class="container">
        <div class="contact-form-main">
            <h3> Contact Us </h3>
            <hr class="divider-hr">
            <!--Section description-->
            <p class="w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                a matter of hours to help you.</p>

            <div class="row">
                <div class="col-md-8 mb-md-0 mb-5">
                    <?php if(Session::has('message')): ?>
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?php echo e(Session::get('message')); ?>

                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(url('/contactus-form')); ?>" id="contact-form" name="contact-form" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="name" class="">Your name</label>
                                    <input type="text" id="name" name="name" class="form-control" required value="<?php echo e(old('name')); ?>">
                                    <?php if($errors->has('name')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="email" class="">Your email</label>
                                    <input type="text" id="email" name="email" class="form-control" required value="<?php echo e(old('email')); ?>">
                                    <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="phonenumber" class="">Phone</label>
                                    <input type="text" id="phonenumber" name="phone_number" class="form-control" required value="<?php echo e(old('phonenumber')); ?>">
                                    <?php if($errors->has('phone_number')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('phone_number')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <label for="message">Your message</label>
                                    <textarea type="text" id="message" name="message" rows="6" class="form-control md-textarea"required><?php echo e(old('message')); ?></textarea>
                                    <?php if($errors->has('message')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('message')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class="text-center text-md-left">
                        <a class="btn btn-primary all-btn-theme" onclick="document.getElementById('contact-form').submit();">Send</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/contact_us.blade.php ENDPATH**/ ?>