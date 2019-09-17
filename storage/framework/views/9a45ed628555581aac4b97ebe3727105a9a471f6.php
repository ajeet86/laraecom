<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
		<title><?php echo $__env->yieldContent('title'); ?></title>
        <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
        <!-- <link rel="stylesheet" href="<?php echo e(asset('public/css/app.css')); ?>"> -->

        <!-- Bootstrap core CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!-- FontAwesome CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
        <link rel="icon" href="<?php echo e(asset('public/sites/images/favicon.ico')); ?>" type="image/ico" sizes="16x16">

        <!-- Custom styles  -->
        <link href="<?php echo e(asset('public/sites/css/custom.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('public/sites/css/responsive.css')); ?>" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <?php echo $__env->yieldContent('css'); ?>
    </head>
    <body>
        <style type="text/css">
            .active{
                border-bottom: 2px solid #59aeca;
            }
        </style>
        <!--main-header-->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('public/sites/images/logo.png')); ?>"></a>

                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="top-mainn-cls">
                            <form method="post" action="<?php echo e(url('/all_book_list')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <input type="text" class="search-text"
                                       placeholder="Search" id="book_title"
                                       name="book_title"
                                       value="<?php echo e(isset($filter_by_title) ? $filter_by_title : ''); ?>">
                                <button type="submit" class="search-buton">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
						<?php if(!Auth::guest()): ?>
                       
                            <div class="right-text dash-b-right user-info-details-list profile-dashboard-info-details">
                                <ul>
                                    <!--<li><a href="#"><i class="fa fa-shopping-bag bags" aria-hidden="true"></i> my bundles </a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i> my likes </a></li>
                                    <li><a href="#"><i class="fa fa-bell-o"></i> news </a></li>-->

                                    <li> <div class="dropdown">
                                            <button class="dropdown-toggle" type="button"> <span class="user-icon"> <?php echo e(substr(Auth::user()->name, 0, 1)); ?> </span>
                                                <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
												<?php if(Auth::user()->email_verified_at != null): ?>
													<li><a href="<?php echo e(route('edit_profile')); ?>">Edit Profile</a></li>
												<?php endif; ?>
                                                <!--<li><a href="#">CSS</a></li>
                                                <li><a href="#">my recentrly viewed</a></li>
                                                <li><a href="#">my size </a></li>
                                                <li><a href="#">my bundles </a></li>
                                                <li><a href="#">my likes</a></li>-->
                                                <li>
                                                    <a href="<?php echo e(route('logout')); ?>"
                                                       onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>

                                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                        <?php echo e(csrf_field()); ?>

                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        <?php endif; ?>
                        <div class="top-login-wrap">
                            <ul>
                                <?php if(Auth::guest()): ?>
                                <li><a href="<?php echo e(route('login')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> login</a></li>
                                <li><a href="<?php echo e(route('register')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Register</a></li>
                                <?php else: ?>
                                <!--<li><a href="<?php echo e(route('edit_profile')); ?>"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li>-->
                                <?php endif; ?>
                                <!-- <li><i class="fa fa-shopping-bag bags"></i></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="navigation-main">
                    <div class="container">
                        <div class="fix-sc" data-toggle="sticky-onscroll">
                            <nav class="cust-nav navbar header-top navbar-expand-lg navbar-dark container">

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarText">

                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo e(route('all_book_list')); ?>" onClick="slideDownwindow('home')">BUY </a>
                                        </li>
										<?php if(!Auth::guest() && Auth::user()->email_verified_at == null): ?>
											<li class="nav-item">
												<a class="nav-link <?php echo e(request()->is('sell*') ? 'active' : ''); ?>" href="<?php echo e(url('login')); ?>" onClick="slideDownwindow('about')">SELL</a>
											</li>
                                        <?php else: ?>
											<li class="nav-item">
												<a class="nav-link <?php echo e(request()->is('sell*') ? 'active' : ''); ?>" href="<?php echo e(Auth::guest() ? route('register') : route('add_book')); ?>" onClick="slideDownwindow('about')">SELL</a>
											</li>
                                        <?php endif; ?>
                                        <li class="nav-item">
                                            <a class="nav-link  <?php echo e(request()->is('apparel*') ? 'active' : ''); ?>" href="<?php echo e(url('/apparel')); ?> " onClick="slideDownwindow('reifen')">APPAREL</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php echo e(request()->is('who*') ? 'active' : ''); ?>" href="<?php echo e(url('/who')); ?>" onClick="slideDownwindow('anhanger')">WHO WE ARE</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php echo e(request()->is('faq*') ? 'active' : ''); ?>" href="<?php echo e(url('/faq')); ?>" onClick="slideDownwindow('kfz')">FAQ</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('/blog_list')); ?>" onClick="slideDownwindow('blog_list')">BLOG</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('/podcasts')); ?>" onClick="slideDownwindow('podcasts')">PODCAST</a>
                                        </li>
                                    </ul>


                                    <div class="right-text">
                                        <ul>
                                            <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></i></li>
                                            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                            <li><div class="dropdown">
                                                    <button type="button" class="btn" data-toggle="dropdown">
                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        <?php if(!empty(session('cart'))): ?>
                                                        <span class="badge badge-pill badge-danger add-cart-wrap">
                                                            <?php echo e(count(session('cart'))); ?>

                                                        </span>
                                                        <?php endif; ?>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <div class="row total-header-section">
                                                            <div class="col-lg-4 col-sm-4 col-4">
                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger add-cart-wrap">
                                                                    <?php echo e(session('cart')!==null ? count(session('cart')) : 0); ?>

                                                                </span>
                                                            </div>

                                                            <?php $total = 0 ?>

                                                            <?php if(session('cart')!==null): ?>
                                                            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php $total += $details['price'] * $details['quantity'] ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>




                                                            <div class="col-lg-8 col-sm-8 col-8 total-section text-right">
                                                                <p>Total: <span class="text-info">$ <?php echo e($total); ?></span></p>
                                                            </div>
                                                        </div>

                                                        <?php if(session('cart')): ?>
                                                        <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="row cart-detail">
                                                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                                <img src="<?php echo e(!empty($details['photo']) ? asset('public/images/books/original/'.$details['photo']) : asset('public/images/books/default.gif')); ?>" />
                                                            </div>
                                                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                                <p><?php echo e($details['name']); ?></p>
                                                                <span class="price text-info"> $<?php echo e($details['price']); ?></span> <span class="count"> Quantity:<?php echo e($details['quantity']); ?></span>
                                                            </div>
                                                        </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                        <?php if(!empty(session('cart'))): ?>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                                <a href="<?php echo e(url('cart')); ?>" class="btn btn-primary btn-block">View all</a>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <?php echo $__env->yieldContent('content'); ?>


    <!-- footer section starts-->
    <section class="kontact" id="contact">
        <div class="container-fluid">
            <div class="kfz-servics-main">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="kontact-icons">
                            <img src="<?php echo e(asset('public/sites/images/logo.png')); ?>">

                        </div>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-f"></i></a>
                            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="manues">

                            <ul>
                                <!--li><a>Search</a></li-->
                                <li><a href="<?php echo e(url('all_book_list')); ?>">Buy</a></li>
                                <li><a href="<?php echo e(url('faq')); ?>">FAQ</a></li>
                                <li><a href="<?php echo e(url('/contact-us')); ?>">Contact Us</a></li>
                                <li><a href="<?php echo e(Auth::guest() ? route('register') : route('add_book')); ?>">Sell</a></li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="text-cls">   <h6>Search for your books here first!</h6>
                            <p>Here at abc we work hard to make sure all of our listings are up to date and ready for you to buy to get you the best deal possible. Take advantage of that! </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-sec"> <p>Sign up to our email list for only important updates and deals! (You hate spam? So do we!)</p>
                            <div class="form-vbxcv"><input type="text" class="email-text" id="sub_email" placeholder="Email address">
                                <button type="button" class="subs-buton" onclick="return subscribe();">Subscribe</button>
                            </div>
                            <p id="sub_res" style="color: green;"></p>
                            <p id="sub_res_exist" style="color: red;"></p>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <!-- end of footer section-->
    <!-- copyright section starts-->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <p> © 2019, abc Powered by Shopify </p>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="iconddf-img">
                        <img src="<?php echo e(asset('public/sites/images/amex.png')); ?>">
                        <img src="<?php echo e(asset('public/sites/images/black-pay.png')); ?>">
                        <img src="<?php echo e(asset('public/sites/images/sdvd.png')); ?>">
                        <img src="<?php echo e(asset('public/sites/images/yeloww.png')); ?>">
                        <img src="<?php echo e(asset('public/sites/images/colg.png')); ?>">
                        <img src="<?php echo e(asset('public/sites/images/circ.png')); ?>">
                        <img src="<?php echo e(asset('public/sites/images/payy.png')); ?>">
                        <img src="<?php echo e(asset('public/sites/images/pay.png')); ?>">
                        <img src="<?php echo e(asset('public/sites/images/vs.png')); ?>">
                        <img src="<?php echo e(asset('public/sites/images/visa.png')); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- copyright section ends-->



<!-- Bootstrap core JavaScript -->

<!--<script src="<?php echo e(asset('public/sites/js/jquery-1.11.3.min.js')); ?>"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script type="text/javascript">
// Sticky navbar
// =========================
	$(document).ready(function () {


		// Custom function which toggles between sticky class (is-sticky)
		var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
			var stickyHeight = sticky.outerHeight();
			var stickyTop = stickyWrapper.offset().top;

			if (scrollElement.scrollTop() >= stickyTop) {
				stickyWrapper.height(stickyHeight);
				sticky.addClass("is-sticky");

			}
			else {
				sticky.removeClass("is-sticky");
				stickyWrapper.height('auto');
			}
		};

		// Find all data-toggle="sticky-onscroll" elements
		$('[data-toggle="sticky-onscroll"]').each(function () {
			var sticky = $(this);
			var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
			sticky.before(stickyWrapper);
			sticky.addClass('sticky');

			// Scroll & resize events
			$(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
				stickyToggle(sticky, stickyWrapper, $(this));
			});

			// On page load
			/* stickyToggle(sticky, stickyWrapper, $(window));*/
		});

	});

///////////////////////////////////////

	new WOW().init();
	if ($(window).width() <= 991) {
		$('.wow').addClass('wow-removed').removeClass('wow');
	} else {
		$('.wow-removed').addClass('wow').removeClass('wow-removed');
	}

</script>



<?php echo $__env->yieldContent('pagescript'); ?>

<script type="text/javascript">
    //$(document).ready(function(){

        function subscribe(){
        	$("#sub_res").html('');
            $("#sub_res_exist").html('');
            $("#sub_email").css("border", "1px solid #59aeca");
            var email = $("#sub_email").val();
            var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if (email == '') 
            {
                 $("#sub_email").css("border", "1px solid #ff0000");
                 return false;
            }
            else if (!expr.test(email)) 
            {
                $("#sub_email").css("border", "1px solid #ff0000");
                return false;
            }
            else
            {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                   type:'POST',
                   url:"<?php echo e(url('subscribe')); ?>",
                   data:{email:email},
                   success:function(data){
                      //alert(data.success);
                      $("#sub_res").html(data.success);
                      $("#sub_res_exist").html(data.exist);
                   }
                });
            }

            //alert(email);
            
        }
    //});
</script>
<script type="text/javascript" src="<?php echo e(asset('public/sites/js/hillRate-jquery.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('public/sites/js/script.js')); ?> ">
</script>
</body>
</html>
<?php /**PATH /var/www/html/schoolsharks/resources/views/layouts/app.blade.php ENDPATH**/ ?>