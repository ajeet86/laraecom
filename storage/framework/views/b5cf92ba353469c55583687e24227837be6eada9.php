
<?php $__env->startSection('title', $pod->meta_title); ?>
<?php $__env->startSection('description', $pod->meta_desc); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/public/sites/css/musicplayer.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="product-wrapper dashboard-body">
    <div class="container">
        <div class="row product">
            <div class="col-lg-12 produst-right-side">
                <div class="dash-container">
                    <h3><?php echo e($pod->title); ?></h3>
                    <span>By <?php echo e($pod->created_by); ?></span>
                    <span><?php echo e(date('F d, Y', strtotime($pod->created_at))); ?></span>
                    <hr class="divider-hr">
                    <section class="" id="tag_container">
                        <div class="audio_player" >
                            <ul class="playlist" >
                                <li data-cover="<?php echo e(url('public/images/pod/' . $pod->feature_image)); ?>" data-artist="<?php echo e($pod->created_by); ?>"><a
                                        href="<?php echo e(url('public/storage/upload/files/audio') . '/'. $pod->audio); ?>"><?php echo e($pod->title); ?></a></li>
                            </ul>
                        </div>
                        <?php echo $pod->content; ?>

                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="com-sec">
            <?php
                $count = count($pod->comments)
            ?>
            <div class="show_comments">
                <h5><?php echo e($count > 1 ? $count . ' Comments' : ($count > 0 ? $count. ' Comment' : 'Comment')); ?> </h5>
                <?php if($pod->comments->isNotEmpty()): ?>
                    <?php $__currentLoopData = $pod->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            var blog_id = "<?php echo e($pod->id); ?>";
            var comment = $('#comment').val();
            $.ajax({
                url: '<?php echo e(url("/pod/comment/" . $pod->id)); ?>',
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
                    } else if(response.error == 1) {
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
        $(".audio_player").musicPlayer({
            controlElements: ["play"],
            playlist: true,
        });
    });
</script>
<script src="<?php echo e(URL::asset('/public/sites/js/musicplayer.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/pod_details.blade.php ENDPATH**/ ?>