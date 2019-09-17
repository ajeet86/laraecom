
<?php $__env->startSection('title', $blog->meta_title); ?>
<?php $__env->startSection('description', $blog->meta_desc); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="product-wrapper dashboard-body">
    <div class="container">
        <div class="row product">
            <div class="col-lg-12 produst-right-side">
                <div class="dash-container">
                    <h3><?php echo e($blog->title); ?></h3>
                    <span>By <?php echo e($blog->created_by); ?></span>
                    <span><?php echo e(date('F d, Y', strtotime($blog->created_at))); ?></span>
                    <hr class="divider-hr">
                    <section class="gallerry" id="tag_container">
                        <?php echo $blog->content; ?>

                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="com-sec">
            <?php
                $count = count($blog->comments)
            ?>
            <div class="show_comments">
                <h5><?php echo e($count > 1 ? $count . ' Comments' : ($count > 0 ? $count. ' Comment' : 'Comment')); ?> </h5>
                <?php if($blog->comments->isNotEmpty()): ?>
                    <?php $__currentLoopData = $blog->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="<?php echo e($loop->first ? 'first' : ''); ?>">
                            <div class="commnet-p"><?php echo e($comment->comment); ?></div>
                            <div class="comment-h">
                                <h4><?php echo e($comment->name); ?>&nbsp;&nbsp;<?php echo e($comment->created_at->diffForHumans()); ?></h4>
                            </div>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="first no-cmt">There aren't any comments for this post yet.</div>
                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                    <p class="sign-in">You must <a href="<?php echo e(url('/login')); ?>">sign in</a> to leave a comment</p>
                <?php endif; ?>
            </div>
        </div>
        <?php if(auth()->guard()->check()): ?>
            <div class="comment-box">
                <div class="leave_comment">
                    <h1>Leave a comment</h1>
                    <p style="display:none;" id="message" 
                       class="alert" >
                    </p>
                    <form class="form-horizontal login_validator"
                          method="post">
                        <div class="input-group">
                            <textarea name="comment" id="comment" 
                                      cols="100" rows="6"></textarea>
                        </div>
                        <?php if($errors->has('comment')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('comment')); ?></strong>
                        </span>
                        <?php endif; ?>
                        <button class="btn btn-primary" type="submit" 
                                id="button_comment">post comment</button>
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </div>

</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagescript'); ?>
<script>
    $(document).ready(function () {
        $("#button_comment").click(function (e) {
            e.preventDefault();
            var blog_id = "<?php echo e($blog->id); ?>";
            var comment = $('#comment').val();
            $.ajax({
                url: '<?php echo e(url("/blog/comment/" . $blog->id)); ?>',
                type: 'POST',
                data: {_token: '<?php echo e(csrf_token()); ?>',
                    comment: comment
                },
                success: function (response) {
                    $("#message").css("display", "block");
                    if (response.success == 1) {
                        $("#message").removeClass("alert-danger").addClass("alert-success");
                        $('#message').html(response.message);
                        //$("<div class='first'><div class='col-lg-12'>" + response.user_name + "&nbsp;&nbsp;" + response.time + "</div><div class='col-lg-12'>" + response.comment + "</div></div>").insertBefore(".first");
                        //$('.first').eq(1).removeClass('first');
                        //$('.no-cmt').eq(0).remove();
                    } else if (response.error == 1) {
                        $("#message").removeClass("alert-success").addClass("alert-danger");
                        $('#message').html(response.message);
                    } else {
                        location.href = '<?php echo e(url("/login")); ?>';
                    }
                    $('#comment').val("");
                },
                error: function (result) {
                    $("#message").css("display", "block");
                    $("#message").removeClass("alert-success").addClass("alert-danger");
                    $('#message').html(result.responseJSON.errors.comment[0]);
                }
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/blog_details.blade.php ENDPATH**/ ?>