<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 17-09-18
 * Time: 13.21
 */
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="" type="image/icon" href="{{asset('/')}}frontstyle/assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="{{asset('/')}}frontstyle/assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('/')}}frontstyle/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}frontstyle/assets/css/slick.css"/>
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('/')}}frontstyle/assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}frontstyle/assets/css/animate.css"/>
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}frontstyle/assets/css/bootstrap-progressbar-3.3.4.css"/>
    <!-- Theme color -->
    <link id="switcher" href="{{asset('/')}}frontstyle/assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{asset('/')}}frontstyle/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header -->
<header id="header">
    <!-- header top search -->
    <div class="header-top">
        <div class="container">
            <form action="">
                <div id="search">
                    <input type="text" placeholder="Type your search keyword here and hit Enter..." name="s" id="m_search" style="display: inline-block;">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- header bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="header-contact">
                        <ul>
                            <li>
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    +(88)01521254239
                                </div>
                            </li>
                            <li>
                                <div class="mail">
                                    <i class="fa fa-envelope"></i>
                                    kanokhossain.developer.786@gmail.com
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="header-login">
                        <a class="login modal-form" data-target="#login-form" data-toggle="modal" href="#"> Admin Login / Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header -->

<!-- Start login modal window -->
<div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
    <div class="modal-dialog">
        <!-- Start login section -->
        <div id="login-content" class="modal-content">
            <div class="modal-header">
                <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
                <h4  style="font-family: cursive" class="modal-title"><i class="fa fa-unlock-alt"></i> Admin Login</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                  @csrf

                    <div class="form-group">
                        <input  id="email" name="email" type="text" placeholder="E-Mail Address" class="form-control">
                    </div>
                    <div class="form-group">
                        <input  id="password" name="password" type="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="loginbox">
                        {{--<label><input type="checkbox"><span>Remember me</span></label>--}}
                        <button class="btn signin-btn" type="submit">SIGN IN</button>
                    </div>
                </form>
            </div>
            {{--<div class="modal-footer footer-box">--}}
                {{--<a href="#">Forgot password ?</a>--}}
                {{--<span>No account ? <a id="signup-btn" href="#">Sign Up.</a></span>--}}
            {{--</div>--}}
        </div>
        <!-- Start signup section -->
        <div id="signup-content" class="modal-content">
            <div class="modal-header">
                <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="fa fa-lock"></i>Sign Up</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Username" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="signupbox">
                        <span>Already got account? <a id="login-btn" href="#">ADMIN SIGN IN</a></span>
                    </div>
                    <div class="loginbox">
                        <label><input type="checkbox"><span>Remember me</span><i class="fa"></i></label>
                        <button class="btn signin-btn" type="button"> ADMIN SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End login modal window -->

<!-- BEGIN MENU -->
<section id="menu-area">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- TEXT BASED LOGO -->
                <a class="navbar-brand" href="{{route('/')}}">@বাঁঁচবে সবাই।</a>
                <!-- IMG BASED LOGO  -->
                <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                    <li class="active"><a href="{{route('/')}}">Home</a></li>
                    <li><a href="{{route('joinhere')}}">Join Here</a></li>
                    <li><a href="{{route('findhere')}}">Find Here</a></li>

                    <!--
                               <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a href="blog-archive.html">Blog Archive</a></li>
                                    <li><a href="blog-single-with-left-sidebar.html">Blog Single with Left Sidebar</a></li>
                                    <li><a href="blog-single-with-right-sidebar.html">Blog Single with Right Sidebar</a></li>
                                    <li><a href="blog-single-with-out-sidebar.html">Blog Single with out Sidebar</a></li>
                                  </ul>
                                </li>
                                -->
                    <li><a href="{{route('news')}}">NEWS</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->

            <br/>
            <a href="#" id="search-icon">
                <i class="fa fa-search">
                </i>
            </a>

        </div>
    </nav>
</section>