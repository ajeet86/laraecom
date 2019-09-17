
<?php $__env->startSection('title', 'abc | Buy and Sell Used Textbooks!'); ?>
<?php $__env->startSection('description', 'College textbooks for students, from students! Save money by buying your book from another student! Don\'t sell your book back to the book store, make real money selling on abc! | Buy Textbooks | Sell Textbooks | Buy Apparel | Blogs | Podcasts |'); ?>
<?php $__env->startSection('content'); ?>
<div class="second-header">
    <div class="container-fluid">
        <div class="row banner-top">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="leftfgd-img">
                    <img src="<?php echo e(url('public/images/categories/original/' . $homecms->top_left_image)); ?>">
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="text-overlays">
                    <?php echo $homecms->top_desc; ?>

                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="last-right-side">
                    <img src="<?php echo e(url('public/images/categories/original/' . $homecms->top_right_image)); ?>">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about section -->
<section class="about-us">
    <div class="tree-cls"></div>
    <div class="about-main">
        <div class="container-fluid">
            <div class="about-section">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="our-comp-img">
                            <img src="<?php echo e(url('public/images/categories/original/' . $homecms->about_us_image)); ?>" alt="Auto Eigeltingen" set="<?php echo e(asset('public/sites/images/about-img@2x.jpg')); ?>">
                        </div>
                        <div class="books-divs"><img src="<?php echo e(asset('public/sites/images/book.png')); ?>"></div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12"> 
                        <div class="about-desp"> 
                            <?php echo $homecms->about_us_desc; ?>

                        </div> </div> 
                </div>
            </div>
        </div>
</section>
<!--about section end-->
<div class="tree-img-clss"><img src="<?php echo e(asset('public/sites/images/tree11.png')); ?>"></div>

<!-- SCHOOL TOP PICKS section-->
<section class="gallerry">
    <div class="container-fluid">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="all-heading anhanger-head"> <h4> SCHOOL TOP PICKS</h4><img src="<?php echo e(asset('public/sites/images/single-img.png')); ?>"> </div>
        </div>
        <div class="row padtop">
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php 
                    $flag = 1
                ?>
                <?php if(isset(session('cart')[$book->id]) && (($book->quantity > 0) 
                && session('cart')[$book->id]['quantity'] == $book->quantity)): ?>
                    <?php 
                        $flag = 2
                    ?>
                <?php endif; ?>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="gallery-sec">
                    <figure>
                        <a href="<?php echo e(url('book_details/'.$book->id)); ?>">
                            <img src="<?php echo e(isset($book->image) ? url('public/images/books/original/' . $book->image) : url('public/images/books/default.gif')); ?>" class="img-fluid">
                        </a>
                    </figure>
                    <div class="main-lest-items">
                        <div class="gallery-text-sec">
                            <p><a href="<?php echo e(url('book_details/'.$book->id)); ?>"><?php echo e($book->title); ?></a></p>
                        </div>
                        <div class="border-textss">
                            <hr></hr>
                            <?php if((Auth::guest() || ($book->user_id != Auth::user()->id)) 
                            && ($book->quantity > 0 && $flag == 1)): ?>
                                <div class="main-outer-circle">
                                    <div class="main-inner-circle">
                                        <a href="javascript:void(0);">
                                            <img src="<?php echo e(asset('public/sites/images/bucket.png')); ?>"
                                                 class="add_to_cart"
                                                 onclick="return add_to_cart(<?php echo e($book->id); ?>);"
                                                 data-toggle="tooltip"
                                                 data-placement="top"
                                                 title="Add To Cart">
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="numbers-text">
                            <?php if($book->perc_org_price > $book->perc_listing_price): ?>
                            <p class="test">$<?php echo e($book->perc_org_price); ?></p>
                            <?php endif; ?>
                            <p>$<?php echo e($book->perc_listing_price); ?></p>
                        </div>
                    </div>
					<?php if($flag == 2): ?>
                        <div class="sold"><p>Stock Out</p></div>
                    <?php endif; ?>
                    <?php if($book->quantity == 0): ?>
                        <div class="sold"><p>Sold Out</p></div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <a href="<?php echo e(route('all_book_list')); ?>" class="view-buton">View All</a>
        </div>
    </div>
</section>
<!-- end selbs section-->


<!-- Featured Fields of Study section starts-->

<section id="reifen" class="next-reifen"> 
    <div class="container-fluid"> 
        <div class="all-heading anhanger-head"> <h4> Featured Fields of Study </h4><img src="<?php echo e(asset('public/sites/images/single-img.png')); ?>"> </div>

        <div class="row mt-30 box">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <a href="<?php echo e(url('filter_category/'.$category->id)); ?>">
                    <div class="box3">

                        <img src="<?php echo e(url('public/images/categories/original/' . $category->cat_image)); ?>">

                        <div class="box-content">

                            <h3 class="title"><?php echo e($category->name); ?></h3>
                        </div>

                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</section>
<!-- Featured Fields of Study section ends-->

<!-- What We Do section starts-->
<section class="next-reifen" id="selbs">
    <div class="container-fluid">
        <div class="selbs-main">
            <div class="selbs-inner">
                <?php echo $homecms->what_we_do; ?>

            </div>
        </div>
    </div>
</section>
<!-- What We Do section ends-->

<!--crousel-product section starts-->


<div class="clearfix"></div>
<div class="product-clss" id="product-cls">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="title-topp">
                    <h6>NEW PRODUCTS</h6>
                    <div class="arroow-cls">
                        <a class="left carousel-control" href="#myCarousel_2" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#myCarousel_2" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div id="myCarousel_2" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel_2" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel_2" data-slide-to="1"></li>
                        <li data-target="#myCarousel_2" data-slide-to="2"></li>
                        <li data-target="#myCarousel_2" data-slide-to="3"></li>
                    </ol>   
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <?php $__currentLoopData = $new_books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php 
                                $flag = 1
                            ?>
                            <?php if(isset(session('cart')[$book->id]) && (($book->quantity > 0) 
                            && session('cart')[$book->id]['quantity'] == $book->quantity)): ?>
                                <?php 
                                    $flag = 2
                                ?>
                            <?php endif; ?>
                            <div class="item carousel-item <?php echo e($loop->first ? 'active' : ''); ?>">
                                <div class="crouser-starss">
                                    <div class="img-icon-cls">
                                        <a href="<?php echo e(url('book_details/'.$book->id)); ?>">
                                                <img src="<?php echo e(isset($book->image) 
                                                        ? url('public/images/books/original/' . $book->image) 
                                                        : url('public/images/books/default.gif')); ?>" alt="" width="130" height="193">
                                        </a>
                                    </div>
                                    <div class="crouser-body">
                                        <div class="media1-left">
                                            <h5><?php echo e($book->title); ?></h5>
                                            <?php
                                            $rating = DB::table('seller_rating')
                                                        ->where('seller_id', $book->user_id)
                                                        ->avg('rating');
                                            ?>
                                            <div class="rating-star-5" data-value="<?php echo e(round($rating,1,PHP_ROUND_HALF_UP)*10); ?>"></div>
                                            <div class="clearfix"></div>

                                            <button type="button" class="butonfddf">$<?php echo e($book->perc_org_price); ?></button>

                                            <?php if($book->quantity < 1): ?>
                                                <div class="add_product"><h6 style="color: red!important;">SOLD OUT</h6></div>
                                            <?php endif; ?>
                                            <?php if($flag == 2): ?>
                                                <div class="add_product"><h6 style="color: red!important;">STOCK OUT</h6></div>
                                            <?php endif; ?>
                                            <?php if((Auth::guest() || ($book->user_id != Auth::user()->id)) 
                                            && ($book->quantity > 0 && $flag == 1)): ?>
                                                <a href="javascript:void(0)" 
                                                        onclick="return add_to_cart(<?php echo e($book->id); ?>);"
                                                        class="add_to_cart">
                                                        <div class="add_product"><h6>ADD TO CART <i class="fa fa-angle-double-right"></i></h6>
                                                        </div>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>			
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="title-topp">
                    <h6>BEST SELLER</h6>
                    <div class="arroow-cls">
                        <a class="left carousel-control" href="#myCarousel_3" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#myCarousel_3" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div id="myCarousel_3" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <?php $i = 0; ?>
                        <?php $__currentLoopData = $best_sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $best_seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li data-target="#myCarousel_3" data-slide-to="<?php echo e($i); ?>" class="<?php echo e($loop->first ? 'active' : ''); ?>"></li>
                        <?php $i++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>   
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <?php $__currentLoopData = $best_sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $best_seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php 
                                $flag = 1
                                 
                            ?>
                            <?php if(isset(session('cart')[$best_seller->id]) && (($best_seller->quantity > 0) 
                            && session('cart')[$best_seller->id]['quantity'] == $best_seller->quantity)): ?>
                                <?php 
                                    $flag = 2
                                ?>
                            <?php endif; ?>
                            <div class="item carousel-item <?php echo e($loop->first ? 'active' : ''); ?>">
                                <div class="crouser-starss">
                                    <div class="img-icon-cls">
                                        <a href="<?php echo e(url('book_details/'.$best_seller->id)); ?>">
                                            <img src="<?php echo e(isset($best_seller->image) 
                                                        ? url('public/images/books/original/' . $best_seller->image) 
                                                        : url('public/images/books/default.gif')); ?>" alt="" width="130" height="193">
                                        </a>
                                    </div>
                                    <div class="crouser-body">
                                        <div class="media1-left">
                                            <h5><?php echo e($best_seller->title); ?></h5>
                                            <div class="rating-star-5" 
                                                data-value="<?php echo e(round(isset($best_seller->rating) ?
                                                    $best_seller->rating :
                                                    0,1,PHP_ROUND_HALF_UP)*10); ?>"></div>
                                            <div class="clearfix"></div>
                                            <button type="button" class="butonfddf">
                                                $<?php echo e($best_seller->perc_org_price); ?>

                                            </button>

                                            <?php if($best_seller->quantity < 1): ?>
                                                <div class="add_product">
                                                    <h6 style="color: red!important;">SOLD OUT</h6>
                                                </div>
                                            <?php endif; ?>
                                            <?php if($flag == 2): ?>
                                                <div class="add_product">
                                                    <h6 style="color: red!important;">STOCK OUT</h6>
                                                </div>
                                            <?php endif; ?>
                                            <?php if((Auth::guest() || ($best_seller->seller_id != Auth::user()->id))
                                                && ($best_seller->quantity > 0 && $flag == 1)): ?>
                                                <a href="javascript:void(0)" 
                                                   accesskey=""
                                                   onclick="return add_to_cart(<?php echo e($best_seller->id); ?>);"
                                                   class="add_to_cart">
                                                    <div class="add_product">
                                                        <h6>ADD TO CART <i class="fa fa-angle-double-right"></i></h6>
                                                    </div>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>		
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</div>

<!--crousel-product section ends-->

<!-- selbs section-->
<section class="buy-sell">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="buy-sell-section-main">
                    <div class="logoog-div">
                        <img src="<?php echo e(asset('public/sites/images/logo1.png')); ?>">
                    </div>
                    <?php echo $homecms->banner_text; ?>

                </div>
            </div>
        </div>
    </div>
</section>
</section>
<!-- end selbs section-->

<div class="clearfix"></div>
<div class="testimonial" id="texty">
    <div class="container">
        <div class="row text-mon">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h2>CUSTOMER SAY <br><span>Testimonial</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <?php 
                            $test_loop=array();
                            foreach($testimonials as $key => $testimonial){
                                $test_loop[$key]['name']=$testimonial->name;
                            }
                            $total=count($test_loop)/2;
                           for ($i=0; $i < $total  ; $i++) { 
                            ?>
                               <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){echo 'active';} ?>"></li>
                        <?php 
                            }
                        ?>

                        
                    </ol>   
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">

                    <?php 
                    $test_loop=array();
                    foreach($testimonials as $key => $testimonial){
                         $test_loop[$key]['name']=$testimonial->name;
                         $test_loop[$key]['image']=$testimonial->image;
                         $test_loop[$key]['content']=$testimonial->content;

                    }
                    $total=count($test_loop);
                    for($k=0; $k<$total; $k++){  
                    ?>
                          

                        <div class="item carousel-item <?php if($k==0){echo 'active';} ?>">
                            <div class="row">


                                <div class="col-sm-6">
                                    <div class="media">
                                        <img src="<?php echo e(asset('public/images/testimonials/original')); ?>/<?php echo e($test_loop[$k]['image']); ?>" alt="">
                                        <div class="media-left d-flex mr-3">
                                            <a href="#">

                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="testimonial">
                                                <h6> <?php echo e($test_loop[$k]['name']); ?></h6>
                                                <p><?php echo e($test_loop[$k]['content']); ?></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php $k++; ?>
                                <?php 
                                if (isset($test_loop[$k])) {
                                ?>
                                <div class="col-sm-6 txzx" id="pad-topss-test">
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <a href="#">
                                                <img src="<?php echo e(asset('public/images/testimonials/original')); ?>/<?php echo e($test_loop[$k]['image']); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="testimonial">
                                                <h6> <?php echo e($test_loop[$k]['name']); ?></h6>
                                                <p><?php echo e($test_loop[$k]['content']); ?></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                


                            </div>          
                        </div>


                       
                    <?php  
                        }
                    ?>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<!--testimonial ends-->
<!--service section starts-->
<section class="kfz-ser" id="kfz">
    <div class="container-fluid">
        <div class="kfz-servics-main">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="img-icons">
                        <img src="<?php echo e(asset('public/sites/images/bus.png')); ?>">
                    </div>
                    <h4>FREE SHIPPIN ON ORDER OVER $99</h4>

                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="img-icons">  <img src="<?php echo e(asset('public/sites/images/human.png')); ?>"></div>

                    <h4> 24/7 CUSTOMER SUPPORT SERVICE </h4>

                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="img-icons">   <img src="<?php echo e(asset('public/sites/images/radio.png')); ?>">

                    </div>

                    <h4>3 DAYS MONEY BACK GUARANTEE</h4>

                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="img-icons"> <img src="<?php echo e(asset('public/sites/images/arow.png')); ?>"></div>


                    <h4> ALL PAYMENT SECURED BY PAY PAL</h4>

                </div>
            </div>
        </div>
    </div>

</section>
<!-- end of service section-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescript'); ?>
<script>
	var base_url = "<?php echo e(asset('/')); ?>";
	var flgDOMLoaded = false;
	if(flgDOMLoaded){
		$(".add_to_cart").prop("onclick", false);
	}
	$(document).ready(function(){
			flgDOMLoaded = true; // page done loading
			$('[data-toggle="tooltip"]').tooltip();   
	});
	function add_to_cart(book_id){
		if(flgDOMLoaded){
			$(".add_to_cart").prop("onclick", true);
			location.href = base_url + 'add-to-cart/' + book_id;
		} else {
			$(".add_to_cart").prop("onclick", false);
		}
	}
</script>
<script type="text/javascript" src="<?php echo e(asset('public/sites/js/hillRate-jquery.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('public/sites/js/script.js')); ?> ">
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/welcome.blade.php ENDPATH**/ ?>