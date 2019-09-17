<?php
/*Route::get('/route-clear', function() {
    Artisan::call('route:clear');
    return "Cache is cleared";
});
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Route::get('/config-clear', function() {
    Artisan::call('config:clear');
    return "Cache is cleared";
});
Route::get('/foo', function(){
	Artisan::call('storage:link');
});*/
//-------------cms page routes --------------------------------------
Route::get('sell', 'WelcomeController@sell');
Route::get('apparel', 'WelcomeController@apparel');
Route::get('who', 'WelcomeController@who');
Route::get('faq', 'WelcomeController@faq');

/* --------------------- Common/User Routes START -------------------------------- */

Route::get('/', 'WelcomeController@landing_index');
Route::get('contact-us', 'WelcomeController@ContactUsHtml');
Route::post('contactus-form', 'WelcomeController@contactusForm');
// Book list for all user
Route::get('/all_book_list', 'WelcomeController@list_all')->name('all_book_list');
Route::post('/all_book_list', 'WelcomeController@fetch_filter_books');

// filter books by ajax
Route::post('/fetch_data', 'WelcomeController@fetch_filter_books');

Route::get('/filter_category/{id}', 'WelcomeController@set_category');
// Route for Book Details page
Route::get('/book_details/{id}', 'WelcomeController@book_details');
// Add to cart route
Route::get('cart', 'WelcomeController@cart');
Route::get('add-to-cart/{id}/{quantity?}', 'WelcomeController@addToCart');
Route::patch('update-cart', 'WelcomeController@update');
Route::delete('remove-from-cart', 'WelcomeController@remove');
Route::post('check_quantity', 'WelcomeController@getRemainingQuantity');
Route::post('subscribe', 'WelcomeController@subscribe');

// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');
Route::get('status', 'PaymentController@getPaymentStatus');
Route::post('/payment-refund', 'PaymentController@paymentRefund');
//route for blogs
Route::get('/blog_list', 'WelcomeController@blogs');
Route::post('/fetch_blog', 'WelcomeController@fetch_filtered_blog');
Route::get('/blog/{slug}', 'WelcomeController@blog_details');

//route for podcast
Route::get('/podcasts', 'WelcomeController@podcasts');
Route::post('/fetch_podcast', 'WelcomeController@fetch_filtered_pod');
Route::get('/podcast/{slug}', 'WelcomeController@pod_details');



Auth::routes([ 'verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('logout', 'LoginController@logout')->name('logout');
Route::group(['middleware' => ['auth'], 'namespace' => 'User'], function() {
    // setting route
    Route::get('/edit_profile', 'UserController@edit_profile')->name('edit_profile');
    Route::post('/edit_profile', 'UserController@update_profile');
    // Route::post('/edit_profile', 'UserController@change_pwd');
    //change Password
    Route::get('/change_password', 'UserController@change_pwd');
    Route::post('/change_password', 'UserController@update_changed_pwd');
    Route::get('/shipping_rate', 'FedexController@fedex_rate_request');


    // Book Route for user
    Route::get('/add_book', 'BookController@create')->name('add_book');
    Route::post('/add_book', 'BookController@store')->name('add_book');
    Route::get('/my_book_list', 'BookController@my_book_list')->name('my_book_list');

    Route::get('/edit_book/{id}', 'BookController@edit')->name('edit_book');
    Route::post('/edit_book/{id}', 'BookController@update')->name('edit_book');
    Route::get('/author/delete/{id}', 'BookController@delete_author');
    Route::get('/book_image/delete/{id}', 'BookController@delete_book_image');
    Route::get('/delete_book/{id}', 'BookController@destroy')->name('delete_book');
    Route::get('/pub_unpub_book/{id}', 'BookController@pub_unpub_book')->name('pub_unpub_book');

    //Route for shipping
    Route::match(['get', 'post'], 'shipping', 'ShippingController@shipping');
    Route::match(['get', 'post'], 'checkout', 'ShippingController@checkout');
    Route::get('/buy_now/{id}', 'ShippingController@buy_now');
    Route::get('/check_list', 'ShippingController@check_list');
    
    //Route for selling list
    Route::get('/my_sells', 'ShippingController@seller_orders');
    Route::get('/sells_detail/{id}', 'ShippingController@sells_detail');
    Route::get('/generate_pdf/{id}', 'ShippingController@generate_pdf');
    
    //Route for order list
    Route::match(['get'], 'orders', 'ShippingController@myorderlist');
    Route::get('/order_details/{id}', 'ShippingController@orderDetails');
    Route::get('/generate_seller_pdf/{id}', 'ShippingController@generate_seller_pdf');
    
    //seller Rating
    Route::match(['get'], 'rate_your_seller', 'UserController@rate_your_seller');
    Route::post('/post_rating', 'UserController@post_rating');
	
    //Message Routing
    Route::get('/message/{id}', 'UserController@messaging');
    Route::post('/message/{id}', 'UserController@post_message');
    Route::get('/my_buyer_list', 'UserController@my_buyer_list');
    //Blog comment
    Route::post('/blog/comment/{id}', 'BlogController@post_blog_comment');
    //pod comment
    Route::post('/pod/comment/{id}', 'BlogController@post_pod_comment');
    
    Route::get('/address_validation', 'FedexController@fedex_addr_validation');
    Route::get('/fedex_open_shipment_req', 'FedexController@fedex_open_shipment_req');
    
    Route::post('/cancel-form', 'ShippingController@cancelForm');
});
/* --------------------- Common/User Routes END -------------------------------- */

/* ----------------------- Admin Routes START -------------------------------- */

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function() {

    /**
     * Admin Auth Route(s)
     */
    Route::namespace('Auth')->group(function() {
		
        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::post('/logout', 'LoginController@logout')->name('logout');

        //Register Routes
        // Route::get('/register','RegisterController@showRegistrationForm')->name('register');
        // Route::post('/register','RegisterController@register');
        //Forgot Password Routes
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');

        // Email Verification Route(s)
        Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
        Route::get('email/verify/{id}', 'VerificationController@verify')->name('verification.verify');
        Route::get('email/resend', 'VerificationController@resend')->name('verification.resend');
    });
	Route::get('/', 'HomeController@index');
    // settings route
    Route::get('/settings', 'AdminController@settings');
    Route::post('/settings', 'AdminController@update_settings');
    // change password route
    Route::get('/change_password', 'AdminController@change_pwd');
    Route::post('/change_password', 'AdminController@update_changed_pwd');
    // user's Routes
    Route::get('/user_list', 'UserController@user_list');
    Route::get('/fetchUsers', 'UserController@fetchUsers');
    Route::get('/user/{id?}', 'UserController@create_add_user');
    Route::post('/add_user', 'UserController@store');
    Route::post('/edit_user/{id?}', 'UserController@store');
    Route::get('/user/delete/{id}', 'UserController@destroy');

    // category routes
    Route::get('/category_list', 'CategoryController@index');
    Route::get('/category/{id?}', 'CategoryController@create');
    Route::post('/add_category', 'CategoryController@store');
    Route::post('/edit_category/{id}', 'CategoryController@store');
    Route::get('/fetchcategories', 'CategoryController@fetchcategories');
    Route::get('/category/delete/{id}', 'CategoryController@destroy');
    Route::get('/feature_category/{id}', 'CategoryController@feature_category');
    
    // cms routes
    Route::get('/cms_list', 'CmsController@index');
    Route::get('/cms/{id?}', 'CmsController@create');
    Route::post('/add_cms', 'CmsController@store');
    Route::post('/edit_cms/{id}', 'CmsController@store');
    Route::get('/fetchcms', 'CmsController@fetchcms');
    Route::get('/cms/delete/{id}', 'CmsController@destroy');
    Route::get('/feature_cms/{id}', 'CmsController@feature_cms');
    Route::get('/homecms', 'CmsController@homepagecms');
    Route::post('/homecms', 'CmsController@savehomepagecms');

    // book route
    Route::get('/book_list', 'BookController@index');
    Route::get('/book/{id?}', 'BookController@create');
    Route::post('/add_book', 'BookController@store');
    Route::get('/fetchBooks', 'BookController@fetchBooks');
    Route::get('/book/delete/{id}', 'BookController@destroy');
    Route::get('/author/delete/{id}', 'BookController@delete_author');
    Route::post('/edit_book/{id}', 'BookController@update');
    Route::get('/book_image/delete/{id}', 'BookController@delete_book_image');
    Route::get('/pub_unpub_book/{id}', 'BookController@pub_unpub_book')->name('pub_unpub_book');
    Route::get('/top_picks/{id}', 'BookController@top_picks');
    
    // order route
    Route::get('/order_list', 'OrderController@index');
    Route::get('/fetchOrders', 'OrderController@fetchOrders');
    Route::get('/order_details/{id}', 'OrderController@show');
    //cancel order
    Route::get('/order/cancel_request_list', 'OrderController@order_cancel_request_list');
    Route::get('/order/order_details/{id}', 'OrderController@show');
    Route::get('/order/refund_list','OrderController@refund_index');
    Route::get('/order/cancel/{id}/{sellerId}/{pTrckId}', 'OrderController@cancel_order');
    Route::get('/fetchCancelOrders', 'OrderController@fetchCancelOrders');
    Route::get('/fetchRefundList', 'OrderController@fetchRefundList');

    // Testimonials route
    Route::get('/testimonials', 'TestimonialsController@index');
    Route::get('/testimonial/{id?}', 'TestimonialsController@create');
    Route::post('/add_testimonial', 'TestimonialsController@store');
    Route::post('/edit_testimonial/{id}', 'TestimonialsController@store');
    Route::get('/fetchtestimonials', 'TestimonialsController@fetchtestimonials');
    Route::get('/testimonial/delete/{id}', 'TestimonialsController@destroy');
    Route::get('/publish_testimonial/{id}', 'TestimonialsController@publish_testimonial');

    //subscribers
    Route::get('/subscribers', 'AdminController@subscribers');
    Route::get('/fetchsubscribers', 'AdminController@fetchsubscribers');
    Route::get('/subscriber/delete/{id}', 'AdminController@destroy');

    //contact us
    Route::get('/contact_us_list', 'AdminController@contact_us_list');
    Route::get('/fetchContact', 'AdminController@fetchContact');
    Route::get('/cantact_us/delete/{id}', 'AdminController@destroyContact');
    //tag
    Route::get('/tag_list', 'BlogController@tag_list');
    Route::get('/tag/{id?}', 'BlogController@tag_create');
    Route::post('/add_tag', 'BlogController@add_tag');
    Route::post('/edit_tag/{id}', 'BlogController@add_tag');
    Route::get('/fetchtags', 'BlogController@fetchtags');
    Route::get('/tag/delete/{id}', 'BlogController@tag_destroy');
    
    //blog
    Route::get('/blog_list', 'BlogController@index');
    Route::get('/blog/{id?}', 'BlogController@create');
    Route::post('/add_blog', 'BlogController@add_blog');
    Route::post('/edit_blog/{id}', 'BlogController@add_blog');
    Route::get('/fetchblogs', 'BlogController@fetchblogs');
    Route::get('/blog/delete/{id}', 'BlogController@destroy');
    Route::get('/gallary', 'BlogController@gallary');
    Route::get('/upload_image', 'BlogController@upload_image');
    Route::post('/upload_image', 'BlogController@upload_image');
    Route::post('/upload_ck_image', 'BlogController@upload_ck_image')->name('upload');
    Route::get('/blog_approval', 'BlogController@comment_approval');
    Route::get('/fetchBlogUnapprovedCmt', 'BlogController@fetchBlogUnapprovedCmt');
    Route::get('/comment/delete/{id}', 'BlogController@destroyComment');
    Route::get('/blog/publish/{id}', 'BlogController@publishComment');
    
    //podcast
    Route::get('/pod_list', 'PodController@index');
    Route::get('/podcast/{id?}', 'PodController@create');
    Route::post('/add_pod', 'PodController@add_pod');
    Route::get('/fetchpods', 'PodController@fetchpods');
    Route::post('/edit_pod/{id}', 'PodController@add_pod');
    Route::post('/pod_ck_image', 'PodController@pod_ck_image')->name('pod_upload');
    Route::get('/pod/delete/{id}', 'PodController@destroy');
    Route::get('/pod_approval', 'PodController@comment_approval');
    Route::get('/fetchPodUnapprovedCmt', 'PodController@fetchPodUnapprovedCmt');
    Route::get('/pod/publish/{id}', 'PodController@publishComment');
    Route::get('/pod_comment/delete/{id}', 'PodController@destroyComment');
    
    //seller Rating
    Route::get('/seller_rating', 'AdminController@seller_rating');
    Route::get('/dashboard', 'HomeController@index')->name('home')->middleware('guard.verified:admin,admin.verification.notice');


    //Put all of your admin routes here...
});

/* ----------------------- Admin Routes END -------------------------------- */
