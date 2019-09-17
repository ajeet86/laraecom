
<?php $__env->startSection('content'); ?>

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
        <h3> My Books </h3>
        <hr class="divider-hr">
        <section class="gallerry" id="tag_container">
            <!-- SCHOOL TOP PICKS section-->
            <?php echo $__env->make('user.my_book_list_result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagescript'); ?>
<script>
    $(window).on('hashchange', function () {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            } else {
                getData(page);
            }
        }
    });

    $(document).ready(function ()
    {
    $(document).on('click', '.pagination a', function (event)
    {
    event.preventDefault();
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
            var myurl = $(this).attr('href');
            var page = $(this).attr('href').split('page=')[1];
            $('#hidden_page').val(page);
            getData();
    });
            function getData() {
            var page = $('#hidden_page').val();
                    var category = $('#hidden_category').val();
                    if (category != '')
                    category = category.split(',');
                    var priceRange = $('#hidden_price').val();
                    if (priceRange != '')
                    priceRange = priceRange.split(',');
                    var author = $('#hidden_author').val();
                    if (author != '')
                    author = author.split(',');
                    var availability = $('#hidden_availability').val();
                    $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });
                    $.ajax({
                    url: 'fetchBooks',
                            method: "POST",
                            data: {priceRange: priceRange, category: category, author: author,
                                    availability: availability, page: page},
                    }).done(function (data) {
            $("#tag_container").empty().html(data);
                    location.hash = page;
            }).fail(function (jqXHR, ajaxOptions, thrownError) {
            alert('No response from server');
            });
            }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolshark1/resources/views/user/my_book_list.blade.php ENDPATH**/ ?>