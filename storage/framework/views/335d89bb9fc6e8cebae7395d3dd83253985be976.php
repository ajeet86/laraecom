
<?php $__env->startSection('title', 'Blogs | abc'); ?>
<?php $__env->startSection('description', 'College textbooks for students, from students! Save money by buying your book from another student! Don\'t sell your book back to the book store, make real money selling on abc! | Buy Textbooks | Sell Textbooks | Buy Apparel | Blogs | Podcasts |'); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/public/css/chosen.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="blog-me" id="blog">
    <div class="container">
        <div class="row">
           <div class="col-xl-6 mx-auto text-center">
              <div class="section-title">
                 <h4>PodCasts</h4>
              </div>
           </div>
        </div>
        <input type="hidden" id="hidden_page" value="1" />
        <input type="hidden" id="hidden_tag" value="" />
        <div class="row">
            <div class="col-xl-5 col-md-8 offset-col-md-4 mx-auto">
                <div class="filter-tags">Filter By Tags</div>
                <div class="filter-tags-select">
                <select class="form-control chzn-select tag" tabindex="2">
                    <option selected="" value="">All</option>
                        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($id); ?>"><?php echo e($tag); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                </div>
            </div>
        </div>
        <div class="row" id="tag_container">
            <?php echo $__env->make('podcasts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagescript'); ?>
<script type="text/javascript">
    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                getData(page);
            }
        }
    });
    
    $(document).ready(function()
    {
        $(".chzn-select").chosen({allow_single_deselect: true});
        $(".chzn-select-deselect,#select2_sample").chosen();
        $(document).on('click', '.pagination a',function(event)
        {
            event.preventDefault();
  
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
  
            var myurl = $(this).attr('href');
            var page=$(this).attr('href').split('page=')[1];
            $('#hidden_page').val(page);
            getData(page);
        });
        /*$(document).on('click', 'li', function () {
            alert(this.value);
        });*/
        $("select.tag").change(function(){
            $('#hidden_page').val(1);
            var selectedtag = $(this).children("option:selected").val();
             $('#hidden_tag').val(selectedtag);
             getData();
        });
    });
  
    function getData(page){
        var tag = $('#hidden_tag').val();
        var page = $('#hidden_page').val();
        $.ajax(
        {
            url: 'fetch_podcast',
            method: "POST",
            data: {_token: '<?php echo e(csrf_token()); ?>', tag: tag, page: page},
        }).done(function(data){
            $("#tag_container").empty().html(data);
            location.hash = page;
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
    }
</script>
<script src="<?php echo e(URL::asset('/public/js/chosen.jquery.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/podcast_list.blade.php ENDPATH**/ ?>