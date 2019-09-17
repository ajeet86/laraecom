
<?php $__env->startSection('content'); ?>
<section class="product-wrapper dashboard-body">
    <div class="container-fluid">
        <div class="row product">
            <?php echo $__env->make('layouts.left_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-lg-9 produst-right-side">
                <div class="dash-container">
                    <h3> Books </h3>
                    <hr class="divider-hr">
                    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                    <input type="hidden" name="hidden_category" id="hidden_category" value="" />
                    <input type="hidden" name="hidden_price" id="hidden_price" value="" />
                    <input type="hidden" name="hidden_author" id="hidden_author" value="" />
                    <input type="hidden" name="hidden_availability" id="hidden_availability" value="" />
                    <section class="gallerry" id="tag_container">
                        <!-- SCHOOL TOP PICKS section-->
                        <?php echo $__env->make('book_list_result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </section>
                </div>
            </div>

        </div>

    </div>


</section>
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
        $(document).on('click', '.filter li', function () {
            var priceRange = get_filter('price_range');
            var category = get_filter('category');
            var author = get_filter('author');
            var availability = $(this).attr("data-id");
            $('#hidden_category').val(category);
            $('#hidden_price').val(priceRange);
            $('#hidden_author').val(author);
            $('#hidden_availability').val(availability);
            getData();
        });

        function get_filter(class_name)
        {
            var filter = [];
            $('.' + class_name + ':checked').each(function () {
                filter.push($(this).val());
            });
            return filter;
        }

    });
    function getData() {
        var page = $('#hidden_page').val();
        var category = $('#hidden_category').val();
        var title = $("#book_title").val();
        if(category != '')
        category = category.split(',');
        var priceRange = $('#hidden_price').val();
        if(priceRange != '')
        priceRange = priceRange.split(',');
        var author = $('#hidden_author').val();
        if(author != '')
        author = author.split(',');
        var availability = $('#hidden_availability').val();
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $.ajax({
            url: 'fetch_data',
            method: "POST",
            data: {book_title:title, priceRange: priceRange, category: category, author: author,
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolshark1/resources/views/all_book_list.blade.php ENDPATH**/ ?>