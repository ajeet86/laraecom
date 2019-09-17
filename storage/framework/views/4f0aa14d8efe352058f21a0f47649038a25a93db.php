<?php $__env->startSection('content'); ?>

<div class="second-header">
    <div class="container-fluid">
        <div class="row banner-top">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="leftfgd-img">
                    <img src="<?php echo e(asset('public/sites/images/girl-ban.png')); ?>">
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="text-overlays">
                    <h5>Buy and Sell your<br> book at </h5>
                    <h6> abc</h6>
                    <img src="<?php echo e(asset('public/sites/images/single-img.png')); ?>">
                    <p>From applied literature to educational resources, we have a lot of textbooks to offer you..</p>
                    <button type="button" class="see-catalog">SEE CATALOG</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="last-right-side">
                    <img src="<?php echo e(asset('public/sites/images/booky.png')); ?>">
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
                            <img src="<?php echo e(asset('public/sites/images/boy.png')); ?>" alt="Auto Eigeltingen" set="<?php echo e(asset('public/sites/images/about-img@2x.jpg')); ?>">
                        </div>
                        <div class="books-divs"><img src="<?php echo e(asset('public/sites/images/book.png')); ?>"></div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12"> 
                        <div class="about-desp"> 
                            <div class="all-heading anhanger-head"> <h4> ABOUT US</h4><img src="<?php echo e(asset('public/sites/images/single-img.png')); ?>"> </div>
                            <p> abc came to be because of three friends who had a vision of becoming successful entrepreneurs, while also providing a service that is beneficial to the community. The three of us met the first week of college and became friends shortly after. Our friendship was based on our shared faith, baseball, and our dreams of becoming entrepreneurs. We spent hours brainstorming in the cafeteria of a solution to some sort of problem in our community. <br><br>

                                We were all on the same page that we were your typical "broke college students".  We wanted to provide services to students to help save money, and then we came up with the idea of abc. From there we worked on creating a business model so that we could effectively provide this service to as many students as possible. Through hard work and vigorous amounts of student feedback and research, we launched abc!
                            </p>
                            <button type="button" class="more-buton">MORE</button>
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
                            <?php if(Auth::guest() || ($book->user_id != Auth::user()->id)): ?>
                                <div class="main-outer-circle">
                                    <div class="main-inner-circle">
                                        <a href="<?php echo e(url('add-to-cart/'.$book->id )); ?>">
                                            <img src="<?php echo e(asset('public/sites/images/bucket.png')); ?>">
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="numbers-text">
                            <?php if($book->org_price > $book->listing_price): ?>
                            <p class="test">$<?php echo e($book->org_price); ?></p>
                            <?php endif; ?>
                            <p>$<?php echo e($book->listing_price); ?></p>
                        </div>
                    </div>
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
                <div class="all-heading">
                    <h4>What We Do </h4>
                    <img src="<?php echo e(asset('public/sites/images/single-img.png')); ?>"> 
                </div>
                <div class="row padtop">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="left-side">
                            <img src="<?php echo e(asset('public/sites/images/icon1.png')); ?>">
                        </div>
                        <div class="right-side">
                            <h6>Free Shipping</h4>
                        </div>
                        <p>Booksmart offers free shipping worldwide,which makes it possible for you to rent a book from us even if you live far away from our head office.The shipping process is fast and secure.</p>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="left-side">
                            <img src="<?php echo e(asset('public/sites/images/icon2.png')); ?>">
                        </div>
                        <div class="right-side">
                            <h6>Easy Returns</h4>
                        </div>
                        <p>You can always return a book after you've read it.just use a unique link that can be found inside our every textbook.Then fill out a special form and send the book to one of our offices.</p>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="left-side">
                            <img src="<?php echo e(asset('public/sites/images/icon3.png')); ?>">
                        </div>
                        <div class="right-side">
                            <h6>Take Notes</h4>
                        </div>
                        <p>Books rented on our website have a special section where you can take notes.However we ask all our customers to limit your writing to a minimal amount if possible.</p>
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="left-side">
                            <img src="<?php echo e(asset('public/sites/images/icon4.png')); ?>">
                        </div>
                        <div class="right-side">
                            <h6>Satisfaction Guaranteed</h4>
                        </div>
                        <p>We hope that you will like our book rental service.Our team makes every effort to offer you an easy and enjoyable experience of renting at any time of year.</p>
                    </div>
                </div>
                <div class="row pad-50">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="left-side">
                            <img src="<?php echo e(asset('public/sites/images/icon5.png')); ?>">
                        </div>
                        <div class="right-side">
                            <h6>Highlighting</h4>
                        </div>
                        <p>Our customer are allowed to highlight the text in our books.It helps in using the full potential of our books without spoiling them.Unfortunately,writing in books is prohibited.</p>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="left-side">
                            <img src="<?php echo e(asset('public/sites/images/icon6.png')); ?>">
                        </div>
                        <div class="right-side">
                            <h6>Flexible Rental Periods</h4>
                        </div>
                        <p>Booksmart uses a flexible rental policy to help our customers enjoy books from our catalog without almost any time limitation.You will receive a notice if your rental period is ending.</p>
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="left-side">
                            <img src="<?php echo e(asset('public/sites/images/icon7.png')); ?>">
                        </div>
                        <div class="right-side">
                            <h6>Live Customer Support</h4>
                        </div>
                        <p>If you need assistance with selecting or renting our books,feel free to contact our customers support or leave a message for us using the form on our website.</p>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="left-side">
                            <img src="<?php echo e(asset('public/sites/images/icon8.png')); ?>">
                        </div>
                        <div class="right-side">
                            <h6>Discount System</h4>
                        </div>
                        <p>Regular client of Booksmart have an advantage of reduced book rental prices and discounts on new books from our catalog,which is updated daily.</p>
                    </div>
                </div>
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
            <div class="col-md-4 col-sm-12 col-xs-12">
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
                    </ol>   
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">

                                <div class="crouser-starss">
                                    <div class="img-icon-cls">
                                        <img src="<?php echo e(asset('public/sites/images/texti-img1.png')); ?>" alt="">
                                    </div>
                                    <div class="crouser-body">
                                        <div class="media1-left">
                                            <h5>BIG MAGIC</h5>
                                            <h6>Creative Living</h6>
                                            <div class="rating hidden-sm">
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                            </div>
                                            <button type="button" class="butonfddf">$1024</button>
                                            <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                <i class="fa fa-angle-double-right"></i></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="crouser-starss mx-50">
                                    <div class="img-icon-cls">
                                        <img src="<?php echo e(asset('public/sites/images/texti-img2.png')); ?>" alt="">
                                    </div>
                                    <div class="crouser-body">
                                        <div class="media1-left">
                                            <h5>ICE & FIRE</h5>
                                            <h6>George Martin</h6>
                                            <div class="rating hidden-sm">
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                            </div>
                                            <button type="button" class="butonfddf">$1024</button>
                                            <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                <i class="fa fa-angle-double-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>			
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="crouser-starss">
                                    <div class="img-icon-cls">
                                        <img src="<?php echo e(asset('public/sites/images/texti-img1.png')); ?>" alt="">
                                    </div>
                                    <div class="crouser-body">
                                        <div class="media1-left">
                                            <h5>BIG MAGIC</h5>
                                            <h6>Creative Living</h6>
                                            <div class="rating hidden-sm">
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                            </div>
                                            <button type="button" class="butonfddf">$1024</button>
                                            <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                <i class="fa fa-angle-double-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="crouser-starss mx-50">
                                    <div class="img-icon-cls">
                                        <img src="<?php echo e(asset('public/sites/images/texti-img2.png')); ?>" alt="">
                                    </div>
                                    <div class="crouser-body">
                                        <div class="media1-left">
                                            <h5>ICE & FIRE</h5>
                                            <h6>George Martin</h6>
                                            <div class="rating hidden-sm">
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                            </div>
                                            <button type="button" class="butonfddf">$1024</button>
                                            <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                <i class="fa fa-angle-double-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>			
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="crouser-starss">
                                    <div class="img-icon-cls">
                                        <img src="<?php echo e(asset('public/sites/images/texti-img1.png')); ?>" alt="">
                                    </div>
                                    <div class="crouser-body">
                                        <div class="media1-left">
                                            <h5>BIG MAGIC</h5>
                                            <h6>Creative Living</h6>
                                            <div class="rating hidden-sm">
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                            </div>
                                            <button type="button" class="butonfddf">$1024</button>
                                            <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                <i class="fa fa-angle-double-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="crouser-starss mx-50">
                                    <div class="img-icon-cls">
                                        <img src="<?php echo e(asset('public/sites/images/texti-img2.png')); ?>" alt="">
                                    </div>
                                    <div class="crouser-body">
                                        <div class="media1-left">
                                            <h5>ICE & FIRE</h5>
                                            <h6>George Martin</h6>
                                            <div class="rating hidden-sm">
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                                <i class="price-text-color fa fa-star"></i>
                                            </div>
                                            <button type="button" class="butonfddf">$1024</button>
                                            <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                <i class="fa fa-angle-double-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>			
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-sm-12 col-xs-12">
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
                        <li data-target="#myCarousel_3" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel_3" data-slide-to="1"></li>
                        <li data-target="#myCarousel_3" data-slide-to="2"></li>
                    </ol>   
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                <div class="row">

                                    <div class="crouser-starss">
                                        <div class="img-icon-cls">
                                            <img src="<?php echo e(asset('public/sites/images/texti-img4.png')); ?>" alt="">
                                        </div>
                                        <div class="crouser-body">
                                            <div class="media1-left">
                                                <h5>BIG MAGIC</h5>
                                                <h6>Creative Living</h6>
                                                <div class="rating hidden-sm">
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                </div>
                                                <button type="button" class="butonfddf">$1024</button>
                                                <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                    <i class="fa fa-angle-double-right"></i></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="crouser-starss mx-50">
                                        <div class="img-icon-cls">
                                            <img src="<?php echo e(asset('public/sites/images/texti-img3.png')); ?>" alt="">
                                        </div>
                                        <div class="crouser-body">
                                            <div class="media1-left">
                                                <h5>ICE & FIRE</h5>
                                                <h6>George Martin</h6>
                                                <div class="rating hidden-sm">
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                </div>
                                                <button type="button" class="butonfddf">$1024</button>
                                                <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                    <i class="fa fa-angle-double-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>			
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="row">

                                    <div class="crouser-starss">
                                        <div class="img-icon-cls">
                                            <img src="<?php echo e(asset('public/sites/images/texti-img4.png')); ?>" alt="">
                                        </div>
                                        <div class="crouser-body">
                                            <div class="media1-left">
                                                <h5>BIG MAGIC</h5>
                                                <h6>Creative Living</h6>
                                                <div class="rating hidden-sm">
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                </div>
                                                <button type="button" class="butonfddf">$1024</button>
                                                <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                    <i class="fa fa-angle-double-right"></i></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="crouser-starss mx-50">
                                        <div class="img-icon-cls">
                                            <img src="<?php echo e(asset('public/sites/images/texti-img3.png')); ?>" alt="">
                                        </div>
                                        <div class="crouser-body">
                                            <div class="media1-left">
                                                <h5>ICE & FIRE</h5>
                                                <h6>George Martin</h6>
                                                <div class="rating hidden-sm">
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                </div>
                                                <button type="button" class="butonfddf">$1024</button>
                                                <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                    <i class="fa fa-angle-double-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>			
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="row">

                                    <div class="crouser-starss">
                                        <div class="img-icon-cls">
                                            <img src="<?php echo e(asset('public/sites/images/texti-img4.png')); ?>" alt="">
                                        </div>

                                        <div class="crouser-body">
                                            <div class="media1-left">
                                                <h5>BIG MAGIC</h5>
                                                <h6>Creative Living</h6>
                                                <div class="rating hidden-sm">
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                </div>
                                                <button type="button" class="butonfddf">$1024</button>
                                                <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                    <i class="fa fa-angle-double-right"></i></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="crouser-starss mx-50">
                                        <div class="img-icon-cls">
                                            <img src="<?php echo e(asset('public/sites/images/texti-img3.png')); ?>" alt="">
                                        </div>
                                        <div class="crouser-body">
                                            <div class="media1-left">
                                                <h5>ICE & FIRE</h5>
                                                <h6>George Martin</h6>
                                                <div class="rating hidden-sm">
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                </div>
                                                <button type="button" class="butonfddf">$1024</button>
                                                <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                    <i class="fa fa-angle-double-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>			
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="title-topp">
                    <h6>PRE ORDER</h6>
                    <div class="arroow-cls">
                        <a class="left carousel-control" href="#myCarousel_4" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#myCarousel_4" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div id="myCarousel_4" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel_4" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel_4" data-slide-to="1"></li>
                        <li data-target="#myCarousel_4" data-slide-to="2"></li>
                    </ol>   
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                <div class="row">

                                    <div class="crouser-starss">
                                        <div class="img-icon-cls">
                                            <img src="<?php echo e(asset('public/sites/images/texti-img5.png')); ?>" alt="">
                                        </div>
                                        <div class="crouser-body">
                                            <div class="media1-left">
                                                <h5>BIG MAGIC</h5>
                                                <h6>Creative Living</h6>
                                                <div class="rating hidden-sm">
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                </div>
                                                <button type="button" class="butonfddf">$1024</button>
                                                <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                    <i class="fa fa-angle-double-right"></i></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="crouser-starss mx-50">
                                        <div class="img-icon-cls">
                                            <img src="<?php echo e(asset('public/sites/images/texti-img3.png')); ?>" alt="">
                                        </div>
                                        <div class="crouser-body">
                                            <div class="media1-left">
                                                <h5>ICE & FIRE</h5>
                                                <h6>George Martin</h6>
                                                <div class="rating hidden-sm">
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                </div>
                                                <button type="button" class="butonfddf">$1024</button>
                                                <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                    <i class="fa fa-angle-double-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>			
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="row">

                                    <div class="crouser-starss">
                                        <div class="img-icon-cls">
                                            <img src="<?php echo e(asset('public/sites/images/texti-img5.png')); ?>" alt="">
                                        </div>
                                        <div class="crouser-body">
                                            <div class="media1-left">
                                                <h5>BIG MAGIC</h5>
                                                <h6>Creative Living</h6>
                                                <div class="rating hidden-sm">
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                </div>
                                                <button type="button" class="butonfddf">$1024</button>
                                                <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                    <i class="fa fa-angle-double-right"></i></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="crouser-starss mx-50">
                                        <div class="img-icon-cls">
                                            <img src="<?php echo e(asset('public/sites/images/texti-img3.png')); ?>" alt="">
                                        </div>
                                        <div class="crouser-body">
                                            <div class="media1-left">
                                                <h5>ICE & FIRE</h5>
                                                <h6>George Martin</h6>
                                                <div class="rating hidden-sm">
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                </div>
                                                <button type="button" class="butonfddf">$1024</button>
                                                <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                    <i class="fa fa-angle-double-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>			
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="row">
                                    <div class="crouser-starss">
                                        <div class="img-icon-cls">
                                            <img src="<?php echo e(asset('public/sites/images/texti-img5.png')); ?>" alt="">
                                        </div>
                                        <div class="crouser-body">
                                            <div class="media1-left">
                                                <h5>BIG MAGIC</h5>
                                                <h6>Creative Living</h6>
                                                <div class="rating hidden-sm">
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                </div>
                                                <button type="button" class="butonfddf">$1024</button>
                                                <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                    <i class="fa fa-angle-double-right"></i></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="crouser-starss mx-50">
                                        <div class="img-icon-cls">
                                            <img src="<?php echo e(asset('public/sites/images/texti-img3.png')); ?>" alt="">
                                        </div>
                                        <div class="crouser-body">
                                            <div class="media1-left">
                                                <h5>ICE & FIRE</h5>
                                                <h6>George Martin</h6>
                                                <div class="rating hidden-sm">
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                    <i class="price-text-color fa fa-star"></i>
                                                </div>
                                                <button type="button" class="butonfddf">$1024</button>
                                                <div class="add_product"><h6>ADD TO PRODUCT</h6>
                                                    <i class="fa fa-angle-double-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>			
                        </div>
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
                    <h5>Buy and sell your books at abc!</h5>
                    <p>
                        Navigate through our website to find the books you need at prices that are unmatched from your peers! Sell your books to your peers for more money than anywhere else!
                    </p>
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
            <div class="col-md-6 col-sm-12 col-xs-12">
                <p class="parar">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                <button type="button" class="vigg-cls">VIEW MORE</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>   
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="media">
                                        <img src="<?php echo e(asset('public/sites/images/large-eye.png')); ?>" alt="">
                                        <div class="media-left d-flex mr-3">
                                            <a href="#">

                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="testimonial">
                                                <h6> Victor Cheng</h6>
                                                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius quam luctus dui. Mauris magna metus nec.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 txzx" id="pad-topss-test">
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <a href="#">
                                                <img src="<?php echo e(asset('public/sites/images/golden-girl.png')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="testimonial">
                                                <h6> Emily Mintz</h6>
                                                <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>			
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <a href="#">
                                                <img src="<?php echo e(asset('public/sites/images/large-eye.png')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="testimonial">
                                                <h6> Victor Cheng</h6>
                                                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius quam luctus dui. Mauris magna metus nec.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 txzx" id="pad-topss-test">
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <a href="#">
                                                <img src="<?php echo e(asset('public/sites/images/golden-girl.png')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="testimonial">
                                                <h6> Emily Mintz</h6>
                                                <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>			
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <a href="#">
                                                <img src="<?php echo e(asset('public/sites/images/large-eye.png')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="testimonial">
                                                <h6> Victor Cheng</h6>
                                                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius quam luctus dui. Mauris magna metus nec.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 txzx" id="pad-topss-test">
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <a href="#">
                                                <img src="<?php echo e(asset('public/sites/images/golden-girl.png')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="testimonial">
                                                <h6> Emily Mintz</h6>
                                                <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>			
                        </div>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\schoolshark\resources\views/welcome.blade.php ENDPATH**/ ?>