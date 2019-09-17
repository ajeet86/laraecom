<?php \App\Http\Controllers\User\UserController::set_session_for_read_status();?>
<div class="col-lg-3">
    <aside>
        <?php
        $rating = DB::table('seller_rating')
                    ->where('seller_id', Auth::user()->id)
                    ->avg('rating');
        $seller = DB::table('books')
                    ->where('user_id', Auth::user()->id)->first();
                //print_r($seller);
                //die();
        ?>

        <?php if($seller): ?>
        <div class="my_rating" style="padding: 10px">
            Your Rating : <span class="rating-star-5" data-value="<?php echo e(round($rating,1,PHP_ROUND_HALF_UP)*10); ?>"></span>
                <div class="clearfix"></div>
        </div>
        <?php endif; ?>
        

        <h3> <?php echo e(Auth::user()->name); ?> </h3>
        
        <ul>

            
            <li> 
                <a href="<?php echo e(route('edit_profile')); ?>"><i class="fa fa-shopping-bag" aria-hidden="true">
                    </i> Edit Profile </a>
            </li>    
            <li>
                <a href="<?php echo e(route('add_book')); ?>">
                    <i class="fa fa-dollar" aria-hidden="true"></i> Sell Books 
                </a>
            </li> 
            <li> 
                <a href="<?php echo e(route('my_book_list')); ?>">
                    <i class="fa fa-folder-open" aria-hidden="true"></i> My Books
                </a> 
            </li>
            <li> 
                <a href="<?php echo e(url('orders')); ?>">
                    <i class="fa fa-gift" aria-hidden="true"></i> My Orders 
                </a> 
            </li>
            <li> 
                <a href="<?php echo e(url('my_sells')); ?>">
                    <i class="fa fa-money" aria-hidden="true"></i> My Sells 
                </a> 
            </li>
            <li> 
                <a href="<?php echo e(url('my_buyer_list')); ?>">
                    <i class="fa fa-envelope" aria-hidden="true"></i> My Buyer Messages 
                </a>
				<?php if(session()->get('buyer_msg') == 1): ?>
                    <span class="notification">1</span>
                <?php endif; ?>
            </li>
            <li> 
                <a href="<?php echo e(url('rate_your_seller')); ?>">
                    <i class="fa fa-star" aria-hidden="true"></i> Rate & Message Your Seller 
                </a>
				<?php if(session()->get('seller_msg') == 1): ?>
                        <span class="notification">1</span>
				<?php endif; ?>
            </li>
            <li> 
                <a href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off" aria-hidden="true"></i> Logout </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
            </li>

        </ul>

    </aside>
</div><?php /**PATH /var/www/html/schoolsharks/resources/views/layouts/user_sidebar.blade.php ENDPATH**/ ?>