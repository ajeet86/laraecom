<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="UTF-8">
        <title>abc Admin</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo e(asset('public/admn/img/logo.ico')); ?>"/>

        <!--global styles-->
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('public/admn/css/components.css')); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('public/admn/css/custom.css')); ?>" />
        <!-- end of global styles-->
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('public/admn/vendors/chartist/css/chartist.min.css')); ?>" />
        <link type="text/css" rel="stylesheet" href="#" id="skin_change" />
        <?php echo $__env->yieldContent('css'); ?>
    </head>

    <body class="body">
        <div class="preloader" style=" position: fixed;
             width: 100%;
             height: 100%;
             top: 0;
             left: 0;
             z-index: 100000;
             backface-visibility: hidden;
             background: #ffffff;">
            <div class="preloader_img" style="width: 200px;
                 height: 200px;
                 position: absolute;
                 left: 48%;
                 top: 48%;
                 background-position: center;
                 z-index: 999999">
                <img src="<?php echo e(asset('public/admn/img/loader.gif')); ?>" style=" width: 50px;" alt="loading...">
            </div>
        </div>
        <div id="wrap">
            <div id="top">
                <!-- .navbar -->
                <nav class="navbar navbar-static-top">
                    <div class="container-fluid m-0">
                        <a class="navbar-brand float-left" href="<?php echo e(url('admin/dashboard')); ?>">
                            <h4><img src="<?php echo e(asset('public/admn/img/logo.ico')); ?>" class="admin_img" alt="logo"> abc</h4>
                        </a>
                        <div class="menu">
                            <span class="toggle-left" id="menu-toggle">
                                <i class="fa fa-bars"></i>
                            </span>
                        </div>
                        <div class="topnav dropdown-menu-right float-right">
                            <!--<div class="btn-group hidden-md-up small_device_search" data-toggle="modal"
                                 data-target="#search_modal">
                                <i class="fa fa-search text-primary"></i>
                            </div>
                            <div class="btn-group">
                                <div class="notifications no-bg">
                                    <a class="btn btn-default btn-sm messages" data-toggle="dropdown" id="messages_section"> <i
                                            class="fa fa-envelope-o fa-1x"></i>
                                        <span class="badge badge-pill badge-warning notifications_badge_top">8</span>
                                    </a>
                                    <div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">
                                        <div class="popover-title">You have 8 Messages</div>
                                        <div id="messages">
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/5.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data"><strong>hally</strong>
                                                        sent you an image.
                                                        <br>
                                                        <small>add to timeline</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/8.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data"><strong>Meri</strong>
                                                        invitation for party.
                                                        <br>
                                                        <small>add to timeline</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/7.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data">
                                                        <strong>Remo</strong>
                                                        meeting details .
                                                        <br>
                                                        <small>add to timeline</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/6.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data">
                                                        <strong>David</strong>
                                                        upcoming events list.
                                                        <br>
                                                        <small>add to timeline</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/5.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data"><strong>hally</strong>
                                                        sent you an image.
                                                        <br>
                                                        <small>add to timeline</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/8.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data"><strong>Meri</strong>
                                                        invitation for party.
                                                        <br>
                                                        <small>add to timeline</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/7.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data">
                                                        <strong>Remo</strong>
                                                        meeting details .
                                                        <br>
                                                        <small>add to timeline</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/6.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data">
                                                        <strong>David</strong>
                                                        upcoming events list.
                                                        <br>
                                                        <small>add to timeline</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popover-footer">
                                            <a href="mail_inbox.html" class="text-white">Inbox</a>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="btn-group">
                                <div class="notifications messages no-bg">
                                    <a class="btn btn-default btn-sm" data-toggle="dropdown" id="notifications_section"> <i
                                            class="fa fa-bell-o"></i>
                                        <span class="badge badge-pill badge-danger notifications_badge_top">9</span>
                                    </a>
                                    <div class="dropdown-menu drop_box_align" role="menu" id="notifications_dropdown">
                                        <div class="popover-title">You have 9 Notifications</div>
                                        <div id="notifications">
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/1.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data">
                                                        <i class="fa fa-clock-o"></i>
                                                        <strong>Remo</strong>
                                                        sent you an image
                                                        <br>
                                                        <small class="primary_txt">just now.</small>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/2.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data">
                                                        <i class="fa fa-clock-o"></i>
                                                        <strong>clay</strong>
                                                        business propasals
                                                        <br>
                                                        <small class="primary_txt">20min Back.</small>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/3.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data">
                                                        <i class="fa fa-clock-o"></i>
                                                        <strong>John</strong>
                                                        meeting at Ritz
                                                        <br>
                                                        <small class="primary_txt">2hrs Back.</small>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/6.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data">
                                                        <i class="fa fa-clock-o"></i>
                                                        <strong>Luicy</strong>
                                                        Request Invitation
                                                        <br>
                                                        <small class="primary_txt">Yesterday.</small>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/1.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data">
                                                        <i class="fa fa-clock-o"></i>
                                                        <strong>Remo</strong>
                                                        sent you an image
                                                        <br>
                                                        <small class="primary_txt">just now.</small>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/2.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data">
                                                        <i class="fa fa-clock-o"></i>
                                                        <strong>clay</strong>
                                                        business propasals
                                                        <br>
                                                        <small class="primary_txt">20min Back.</small>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/3.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data">
                                                        <i class="fa fa-clock-o"></i>
                                                        <strong>John</strong>
                                                        meeting at Ritz
                                                        <br>
                                                        <small class="primary_txt">2hrs Back.</small>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/6.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data">
                                                        <i class="fa fa-clock-o"></i>
                                                        <strong>Luicy</strong>
                                                        Request Invitation
                                                        <br>
                                                        <small class="primary_txt">Yesterday.</small>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?php echo e(asset('public/admn/img/mailbox_imgs/1.jpg')); ?>" class="message-img avatar rounded-circle"
                                                             alt="avatar1"></div>
                                                    <div class="col-10 message-data">
                                                        <i class="fa fa-clock-o"></i>
                                                        <strong>Remo</strong>
                                                        sent you an image
                                                        <br>
                                                        <small class="primary_txt">just now.</small>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popover-footer">
                                            <a href="#" class="text-white">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <div class="btn-group">
                                <div class="notifications request_section no-bg">
                                    <a class="btn btn-default btn-sm messages" id="request_btn"> <i
                                            class="fa fa-sliders" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <div class="user-settings no-bg">
                                    <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                        <?php if(file_exists(public_path().'/images/users/' . Auth::user()->avatar)): ?>
                                            <img src="<?php echo e(url('public/images/users/' . Auth::user()->avatar)); ?>" class="admin_img2 img-thumbnail rounded-circle avatar-img"
                                             alt="avatar">
                                        <?php else: ?>
                                            <img src="<?php echo e(url('public/images/users/default.png')); ?>" class="admin_img2 img-thumbnail rounded-circle avatar-img"
                                             alt="avatar">
                                        <?php endif; ?>
                                        <strong><?php echo e(Auth::user()->username); ?></strong>
                                        <span class="fa fa-sort-down white_bg"></span>
                                    </button>
                                    <div class="dropdown-menu admire_admin">
                                        <a class="dropdown-item" href="<?php echo e(url('admin/settings')); ?>"><i class="fa fa-cogs"></i>
                                            Account Settings</a>
                                        <a class="dropdown-item" href="<?php echo e(url('admin/change_password')); ?>"><i class="fa fa-lock"></i>
                                            Change Password</a>
                                        



                                        <?php if(Auth::guard('admin')->check()): ?>


                                        <a class="dropdown-item" href="#"
                                           onclick="event.preventDefault();
                                                   document.querySelector('#admin-logout-form').submit();"> <i class="fa fa-sign-out"></i>
                                            Logout
                                        </a>

                                        <form id="admin-logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                        </form>


                                        <?php endif; ?>


                                        <!--	
        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
            Logout
        </a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo e(csrf_field()); ?>

        </form>
                                        
                                        -->




                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--<div class="top_search_box float-right hidden-sm-down">
                            <form class="header_input_search float-right">
                                <input type="text" placeholder="Search" name="search">
                                <button type="submit">
                                    <span class="font-icon-search"></span>
                                </button>
                                <div class="overlay"></div>
                            </form>
                        </div>-->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
                <!-- /.navbar -->
                <!-- /.head -->
            </div>
            <!-- /#top -->
            <div class="wrapper">
                <div id="left">
                    <div class="menu_scroll">
                        <div class="left_media">
                            <div class="media user-media">
                                <div class="user-media-toggleHover">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="user-wrapper">
                                    <a class="user-link" href="#">
                                        <?php if(file_exists(public_path().'/images/users/' . Auth::user()->avatar)): ?>
                                            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                                                 src="<?php echo e(url('public/images/users/' . Auth::user()->avatar)); ?>">
                                        <?php else: ?>
                                            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                                                 src="<?php echo e(url('public/images/users/default.png')); ?>">
                                        <?php endif; ?>
                                        <p class="user-info menu_hide">Welcome <?php echo e(Auth::user()->username); ?></p>
                                    </a>
                                </div>
                            </div>
                            <hr/>
                        </div>
                        <ul id="menu">
                            <li>
                                <a href="<?php echo e(url('admin/dashboard')); ?>">
                                    <i class="fa fa-home"></i>
                                    <span class="link-title menu_hide">&nbsp;Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown_menu">
                                <a href="#">
                                    <i class="fa fa-user"></i>
                                    <span class="link-title menu_hide">&nbsp; User Management</span>
                                    <span class="fa arrow menu_hide"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?php echo e(url('admin/user_list')); ?>">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp; User Grid
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('admin/user')); ?>">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp; Add Users
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown_menu">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span class="link-title menu_hide">&nbsp; Category Management</span>
                                    <span class="fa arrow menu_hide"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?php echo e(url('admin/category_list')); ?>">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp; Category List
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('admin/category')); ?>">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp; Add Categories
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown_menu">
                                <a href="#">
                                    <i class="fa fa-bitcoin"></i>
                                    <span class="link-title menu_hide">&nbsp; Book Management</span>
                                    <span class="fa arrow menu_hide"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?php echo e(url('admin/book_list')); ?>">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp; Book List
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('admin/book')); ?>">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp; Add Books
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--<li class="dropdown_menu">
                                <a href="javascript:;">
                                    <i class="fa fa-sitemap"></i>
                                    <span class="link-title menu_hide">&nbsp; Multi Level Menu</span>
                                    <span class="fa arrow menu_hide"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 1
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu sub-submenu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 2
                                                    <span class="fa arrow"></span>
                                                </a>
                                                <ul class="sub-menu sub-submenu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 3
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 3
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 3
                                                            <span class="fa arrow"></span>
                                                        </a>
                                                        <ul class="sub-menu sub-submenu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i>
                                                                    &nbsp;Level 4
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i>
                                                                    &nbsp;Level 4
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i>
                                                                    &nbsp;Level 4
                                                                    <span class="fa arrow"></span>
                                                                </a>
                                                                <ul class="sub-menu sub-submenu">
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-angle-right"></i>
                                                                            &nbsp;Level 5
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-angle-right"></i>
                                                                            &nbsp;Level 5
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-angle-right"></i>
                                                                            &nbsp;Level 5
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 4
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 2
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 1
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu sub-submenu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 2
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>-->
                        </ul>
                        <!-- /#menu -->
                    </div>
                </div>
                <!-- /#left -->



                <?php echo $__env->yieldContent('content'); ?>





                <!-- /.inner -->
            </div>
            <!-- /.outer -->

            <!-- /#content -->
            <!-- Modal -->
            <div class="modal fade" id="search_modal" tabindex="-1" role="dialog"  aria-hidden="true">
                <form>
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="float-right" aria-hidden="true">&times;</span>
                            </button>
                            <div class="input-group search_bar_small">
                                <input type="text" class="form-control" placeholder="Search..." name="search">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- # right side -->
            <?php echo $__env->make('admin.layout.right_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- # right side -->
        </div>
        <!-- /#wrap -->
        <!-- global scripts-->
        <script type="text/javascript" src="<?php echo e(asset('public/admn/js/components.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('public/admn/js/custom.js')); ?>"></script>
        <!--end of global scripts-->
        <?php echo $__env->yieldContent('pagescript'); ?>
    </body>

</html><?php /**PATH /var/www/html/schoolshark1/resources/views/admin/layout/app.blade.php ENDPATH**/ ?>