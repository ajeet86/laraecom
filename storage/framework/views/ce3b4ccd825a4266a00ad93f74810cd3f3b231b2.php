<?php $__env->startSection('title', 'Add Books'); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php echo $__env->make('layouts.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-lg-9">
                <div class="dash-container">
                    <div class="abc">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="personal">
                                    <div class="card-block m-t-35">
                                        <div>
                                            <h4>Messages</h4>
                                            <hr class="divider-hr">
                                        </div>
                                        <div class="chat-history">
                                            <ul>
                                                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <?php if($message->sender_name == 'Me'): ?>
                                                <li class="clearfix">
                                                    <div class="message-data align-right">
                                                        <span class="message-data-time">
                                                            <?php echo e($message->created_at->format('d-m-Y H:i')); ?>

                                                            <?php echo e(Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $message->created_at, 'UTC')
                                                                        ->setTimezone('America/Chicago')
                                                                        ->format('F d, Y @ h:i A T')); ?>

                                                        </span> &nbsp; &nbsp;
                                                        <span class="message-data-name"><?php echo e($message->sender_name); ?></span> <i class="fa fa-circle me"></i>
                                                    </div>
                                                    <div class="message other-message float-right">
                                                        <?php echo e($message->message); ?>

                                                    </div>
                                                </li>
                                                <?php else: ?>
                                                <li>
                                                    <div class="message-data">
                                                        <span class="message-data-name"><i class="fa fa-circle online"></i><?php echo e($message->sender_name); ?></span>
                                                        <span class="message-data-time">
                                                            <?php echo e(Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $message->created_at, 'UTC')
															->setTimezone('America/Chicago')
															->format('F d, Y @ h:i A T')); ?>

                                                        </span>
                                                    </div>
                                                    <div class="message my-message">
                                                        <?php echo e($message->message); ?>

                                                    </div>
                                                </li>
                                                <?php endif; ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                        <form class="form-horizontal login_validator" id="mymessage"
                                              action="<?php echo e(url('/message/' . $seller_id . '#mymessage')); ?>"
                                              method="post">
                                            <?php echo e(csrf_field()); ?>

                                            <textarea class="form-control" name="message"
                                                      cols="20" rows="5"></textarea>
                                            <?php if($errors->has('message')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('message')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                            <button class="btn btn-primary" type="submit" id="button_book">
                                                Send
                                            </button>
                                        </form>
                                    </div>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/user/messages.blade.php ENDPATH**/ ?>