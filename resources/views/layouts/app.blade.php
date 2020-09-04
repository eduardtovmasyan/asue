<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Luxury</title>
    <meta name="description" content="Luxury is a premium adman dashboard template based on bootstrap">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- theme customizier \ demo only -->
    <link rel="stylesheet" href="{{ asset('assets/examples/css/theme-customizer.css') }}">
    <script src="{{ asset('assets/examples/js/theme-customizer.js') }}">
    </script>
    <!-- core plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/hamburgers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bower_components/switchery/dist/switchery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bower_components/sweetalert/dist/sweetalert.css') }}">
    <!-- site-wide styles -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <!-- plugins for the current page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bower_components/chartist/dist/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/owl.carousel.css') }}">
    <!-- current page styles -->
    <link rel="stylesheet" href="{{ asset('assets/examples/css/dashboards/dashboard.v1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600">
    <script src="{{ asset('assets/vendor/bower_components/breakpoints.js/dist/breakpoints.min.js') }}">
    </script>
    <script>Breakpoints({xs: {min:0,max:575},sm: {min:576,max:767},md: {min:768,max:991},lg: {min:992,max:1199},xl: {min:1200,max:Infinity}});</script>
    <body class="menubar-left menubar-dark dashboard dashboard-v1 menubar-open">
        <!--[if lt IE 10]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="site-navbar navbar fixed-top navbar-expand-lg navbar-light bg-blue">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <svg class="flip-y" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32">
                    <path fill="currentColor" d="M30.063 2.585c-.253-1.023-.758-1.754-1.5-2.17-3.28-1.842-9.02 3.577-11.05 6.88-.65 1.06-1.275 2.358-1.792 3.718-1.486-.21-2.95-.098-4.366.337C6.954 12.694 4 16.975 4 22v2c0 4.337 3.663 8 8 8h1.98c5.31 0 9.803-3.664 10.682-8.714.33-1.89.142-3.807-.54-5.585 1.26-1.2 2.43-2.587 3.268-3.886 1.646-2.554 3.46-8.062 2.673-11.23zM12 23c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2z"></path>
                <path data-color="color-2" fill="#52c03b" d="M10.77 9.437c1.14-.35 2.32-.527 3.506-.527h.148c.424-.954.888-1.846 1.37-2.633-1.106-2.466-2.56-4.72-4.01-5.71-.7-.477-1.387-.656-2.04-.528-.442.086-1.08.37-1.594 1.23C7 3.19 6.89 7.465 7.457 11.06c1-.7 2.108-1.255 3.312-1.623z"></path>
                </svg> <span class="brand-name hidden-fold">Luxury</span> </a>
                <a href="javascript:void(0)" class="hidden-md-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <g transform="translate(.5 .5)" fill="none" stroke-linecap="square" stroke-miterlimit="10">
                        <path stroke="currentColor" d="M23 12c0-1.105-.895-2-2-2h-1.262c-.19-.732-.477-1.422-.852-2.058l.892-.892c.78-.78.78-2.047 0-2.828-.78-.78-2.047-.78-2.828 0l-.892.892c-.636-.375-1.326-.663-2.058-.852V3c0-1.104-.895-2-2-2s-2 .895-2 2v1.262c-.732.19-1.422.477-2.058.852l-.892-.892c-.78-.78-2.047-.78-2.828 0-.78.78-.78 2.047 0 2.828l.892.892C4.74 8.578 4.45 9.268 4.262 10H3c-1.104 0-2 .895-2 2s.895 2 2 2h1.262c.19.732.477 1.422.852 2.058l-.892.892c-.78.78-.78 2.047 0 2.828.78.78 2.047.78 2.828 0l.892-.892c.635.375 1.326.663 2.058.852V21c0 1.104.895 2 2 2s2-.895 2-2v-1.262c.732-.19 1.422-.477 2.058-.852l.892.892c.78.78 2.047.78 2.828 0 .78-.78.78-2.047 0-2.828l-.892-.892c.375-.635.663-1.326.852-2.058H21c1.104 0 2-.895 2-2z"></path>
                        <circle data-color="color-2" stroke="#52c03b" cx="12" cy="12" r="3"></circle>
                    </g>
                </svg> </a>
                <button data-toggle="menubar" class="mr-auto hidden-lg-up hamburger hamburger--collapse js-hamburger is-active" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner">
                    </span>
                </span>
                </button> <button type="button" class="navbar-toggler hidden-lg-up collapsed" data-toggle="navbar-search">
                <span class="sr-only">Toggle navigation</span> <span class="zmdi zmdi-hc-lg zmdi-search">
            </span>
            </button> <button type="button" class="navbar-toggler hidden-lg-up collapsed" data-toggle="collapse" data-target="#site-navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span> <span class="zmdi zmdi-hc-lg zmdi-more">
        </span>
        </button>
    </div>
    <!-- /.navbar-header -->
    <div class="collapse navbar-collapse" id="site-navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item hidden-xl-up hidden-md-down px-3 d-flex align-items-center">
                <button data-toggle="menubar" class="hamburger hamburger--arrowalt js-hamburger is-active" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner">
                    </span>
                </span>
                </button>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nav-icon fa fa-bell-o">
                    </i> <span class="badge badge-circle badge-danger">4</span>
                </a>
                <div class="media-list dropdown-menu p-0" data-plugin="dropdownCaret"><span class="arrow" style="left: 15px; right: auto;"></span>
                <div class="dropdown-item dropdown-menu-cap d-flex">
                    <span class="mr-auto my-1">You Have 4 Unread Notifications</span> <a href="#" class="btn btn-sm btn-light my-1">See all</a>
                </div>
                <div class="scroll-container ps-container ps-theme-default" data-ps-id="8293a4d2-b820-378b-9ad4-466000288fd5">
                    <a href="javascript:void(0)" class="media dropdown-item">
                        <span class="avatar bg-success" data-plugin="firstLitter" data-target="#message-1">M</span>
                        <div class="media-body">
                            <h6 class="media-heading" id="message-1">Mohamed Ali</h6>
                            <small>Lorem ipsum dolor sit amet, Lorem ipsum dolor.</small>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="media dropdown-item">
                        <span class="avatar bg-warning" data-plugin="firstLitter" data-target="#message-2">S</span>
                        <div class="media-body">
                            <h6 class="media-heading" id="message-2">Sophia Smith</h6>
                            <small>Lorem ipsum dolor sit amet, Lorem ipsum dolor.</small>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="media dropdown-item">
                        <span class="avatar bg-primary" data-plugin="firstLitter" data-target="#message-3">S</span>
                        <div class="media-body">
                            <h6 class="media-heading" id="message-3">Sarah Adams</h6>
                            <small>Lorem ipsum dolor sit amet, Lorem ipsum dolor.</small>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="media dropdown-item">
                        <span class="avatar bg-danger" data-plugin="firstLitter" data-target="#message-4">J</span>
                        <div class="media-body">
                            <h6 class="media-heading" id="message-4">John Doe</h6>
                            <small>Lorem ipsum dolor sit amet, Lorem ipsum dolor.</small>
                        </div>
                    </a>
                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                    <!-- /.scroll-container -->
                </div>
                <!-- /.media-list -->
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nav-icon fa fa-envelope-o">
                    </i> <span class="badge badge-circle badge-success">3</span>
                </a>
                <div class="media-list dropdown-menu p-0" data-plugin="dropdownCaret"><span class="arrow" style="left: 15px; right: auto;"></span>
                <div class="dropdown-item dropdown-menu-cap d-flex">
                    <span class="mr-auto my-1">You Have 3 Unread Messages</span> <a href="#" class="btn btn-sm btn-light my-1">See all</a>
                </div>
                <div class="scroll-container ps-container ps-theme-default" data-ps-id="ea5c2659-dbec-b9e1-e5ff-749506b07af7">
                    <a href="javascript:void(0)" class="media dropdown-item">
                        <div class="avatar">
                            <img src="{{ asset('assets/global/images/203.jpg') }}" alt=""> <span class="badge badge-success">5</span>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading">Ahmed Gamal</h6>
                            <small>Lorem ipsum dolor sit amet, Lorem ipsum dolor.</small>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="media dropdown-item">
                        <div class="avatar">
                            <img src="{{ asset('assets/global/images/101.jpg') }}" alt=""> <span class="badge badge-success">9</span>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading">Nick Pettit</h6>
                            <small>Lorem ipsum dolor sit amet, Lorem ipsum dolor.</small>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="media dropdown-item">
                        <div class="avatar">
                            <img src="{{ asset('assets/global/images/202.jpg') }}" alt=""> <span class="badge badge-success">1</span>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading">Media heading</h6>
                            <small>Lorem ipsum dolor sit amet, Lorem ipsum dolor.</small>
                        </div>
                    </a>
                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                    <!-- /.scroll-container -->
                </div>
                <!-- /.media-list -->
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="nav-img" src="{{ asset('assets/global/images/flags/United-States-of-America.png') }}" alt=""> <span class="nav-text hidden-sm-down ml-2">English</span> <i class="nav-caret hidden-sm-down zmdi zmdi-hc-sm zmdi-chevron-down">
                    </i>
                </a>
                <div class="dropdown-menu p-0" data-plugin="dropdownCaret"><span class="arrow" style="left: 48px; right: auto;"></span>
                <a class="dropdown-item dropdown-menu-cap">4 Languages</a> <a class="dropdown-item" href="#">
                <img src="{{ asset('assets/global/images/flags/Egypt.png') }}" class="mr-3 dropdown-item-icon" alt=""> <span>Arabic</span> </a>
                <a class="dropdown-item" href="#">
                    <img src="{{ asset('assets/global/images/flags/United-States-of-America.png') }}" class="mr-3 dropdown-item-icon" alt=""> <span>English</span> </a>
                    <a class="dropdown-item" href="#">
                        <img src="{{ asset('assets/global/images/flags/Spain.png') }}" class="mr-3 dropdown-item-icon" alt=""> <span>Spanish</span>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown mega-dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="nav-text">Media</span> <i class="nav-caret zmdi zmdi-hc-sm zmdi-chevron-down">
                    </i>
                </a>
                <div class="dropdown-menu mega-dropdown-menu p-0">
                    <div class="scroll-container ps-container ps-theme-default" data-ps-id="2ece1ad3-9093-ea7f-5c33-792d0c573683">
                        <div class="mega-menu">
                            <div class="mega-menu-section">
                                <h6 class="mb-3">Featured Courses</h6>
                                <div class="mega-links-list">
                                    <a href="#">Bootstrap</a> <a href="#">SASS Basics</a> <a href="#">HTML &amp; CSS</a> <a href="#">PHP For Beginners</a> <a href="#">SASS Best Practices</a> <a href="#">Javascript Intermediate</a>
                                </div>
                            </div>
                            <!-- /.mega-menu-section -->
                            <div class="mega-menu-section">
                                <div class="g__item mb-3">
                                    <figure class="g__figure">
                                        <a href="#">
                                            <img class="img-fluid" src="https://themes.tielabs.com/sahifa/wp-content/uploads/sites/3/2015/01/1806717289_6e97fe91c9_b-660x330.jpg" alt="">
                                        </a>
                                        <figcaption class="g__overlay">
                                        <i class="g__zoom fa fa-film fa-2x">
                                        </i>
                                        </figcaption>
                                    </figure>
                                </div>
                                <h6>Featured Video</h6>
                                <span>
                                    <i class="zmdi zmdi-time">
                                </i> Jan 25, 2017</span>
                            </div>
                            <!-- /.mega-menu-section -->
                            <div class="mega-menu-section">
                                <div class="mega-media-list">
                                    <div class="media mb-3">
                                        <div class="g__item mr-3 mb-0">
                                            <figure class="g__figure">
                                                <a href="#">
                                                    <img src="{{ asset('assets/global/images/blog-img-11.jpg') }}" alt="">
                                                </a>
                                                <figcaption class="g__overlay">
                                                <i class="g__zoom fa fa-image fa-2x">
                                                </i>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">
                                            <a href="#">Your Guide To PHP</a>
                                            </h6>
                                            <span>This is an excerpt</span> <span>
                                            <i class="zmdi zmdi-time">
                                        </i> Apr 14, 2016</span>
                                    </div>
                                </div>
                                <!-- /.media -->
                                <div class="media mb-3">
                                    <div class="g__item mr-3 mb-0">
                                        <figure class="g__figure">
                                            <a href="#">
                                                <img src="{{ asset('assets/global/images/blog-img-12.jpg') }}" alt="">
                                            </a>
                                            <figcaption class="g__overlay">
                                            <i class="g__zoom fa fa-image fa-2x">
                                            </i>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading">
                                        <a href="#">Javascript Weird Parts</a>
                                        </h6>
                                        <span>This is an excerpt of the post</span> <span>
                                        <i class="zmdi zmdi-time">
                                    </i> May 15, 2016</span>
                                </div>
                            </div>
                            <!-- /.media -->
                            <div class="media">
                                <div class="g__item mr-3 mb-0">
                                    <figure class="g__figure">
                                        <a href="#">
                                            <img src="{{ asset('assets/global/images/blog-img-13.jpg') }}" alt="">
                                        </a>
                                        <figcaption class="g__overlay">
                                        <i class="g__zoom fa fa-image fa-2x">
                                        </i>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">
                                    <a href="#">Bootstrap 4 Is Here</a>
                                    </h6>
                                    <span>This is an excerpt of the post</span> <span>
                                    <i class="zmdi zmdi-time">
                                </i> Jan 25, 2016</span>
                            </div>
                        </div>
                        <!-- /.media -->
                    </div>
                    <!-- /.mega-media-list -->
                </div>
                <!-- /.mega-menu-section -->
            </div>
            <!-- /.mega-menu -->
            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
            <!-- /.scroll-container -->
        </div>
        <!-- /.dropdown-menu -->
    </li>
</ul>
<ul class="navbar-nav">
    <li class="nav-item">
        <div id="navbar-search" class="navbar-search">
            <form class="form-inline navbar-search-form">
                <input class="form-control navbar-search-field" type="text" placeholder="Search"> <button type="submit" class="navbar-search-submit">
                <svg class="svg-search-icon">
                    <use xlink:href="{{ asset('assets/global/svg-sprite/sprite.svg#search') }}"></use>
                </svg>
                </button> <button class="navbar-search-close" data-toggle="navbar-search">
                <i class="zmdi zmdi-close">
                </i>
                </button>
            </form>
            <div class="navbar-search-backdrop" data-toggle="navbar-search">
            </div>
        </div>
        <!-- /.navbar-search -->
    </li>
    <li id="navbar-search-toggler" class="nav-item hidden-xl-up hidden-sm-down">
        <a class="nav-link" href="#" data-toggle="navbar-search">
            <span class="zmdi zmdi-hc-lg zmdi-search">
            </span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link site-user dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="nav-img" src="{{ asset('assets/global/images/user-img.png') }}" alt=""> <span class="nav-text hidden-sm-down ml-2"> {{ Auth::user()->uname }} </span> <i class="nav-caret hidden-sm-down zmdi zmdi-hc-sm zmdi-chevron-down">
            </i>
        </a>
        <div class="dropdown-menu dropdown-menu-right p-0" data-plugin="dropdownCaret"><span class="arrow" style="right: 45px; left: auto;"></span>
        <a class="dropdown-item dropdown-menu-cap"> {{ Auth::user()->uname }} </a> <a class="dropdown-item" href="#">
        <i class="fa fa-user-o mr-3">
        </i> <span>My Profile</span> </a>
        <a class="dropdown-item" href="#">
            <i class="fa fa-list-ul mr-3">
            </i> <span>My Tasks</span> </a>
            <a class="dropdown-item" href="#">
                <i class="fa fa-envelope-o mr-3">
                </i> <span>My Inbox</span>
            </a>
            <div class="dropdown-divider">
            </div>
            <a class="dropdown-item" href="#">
                <i class="fa fa-file-o mr-3">
                </i> <span>Lock Screen</span> </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off mr-3">
                    </i> <span>Logout</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#side-panel" data-toggle="class" data-class="open">
                <i class="zmdi zmdi-menu zmdi-hc-lg">
                </i>
            </a>
        </li>
    </ul>
    <!-- /.navbar-nav -->
</div>
<!-- /.navbar-collapse -->
</nav>
<!-- /.site-navbar -->
<aside id="side-panel" class="side-panel">
<div class="side-panel-tabs">
    <!-- tabs list -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#friends-panel" data-toggle="tab" role="tab">
                <i class="zmdi zmdi-comments zmdi-hc-lg">
                </i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#notifications-panel" data-toggle="tab" role="tab">
                <i class="zmdi zmdi-notifications zmdi-hc-lg">
                </i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#settings-panel" data-toggle="tab" role="tab">
                <i class="zmdi zmdi-settings zmdi-hc-lg">
                </i>
            </a>
        </li>
    </ul>
    <!-- .nav-tabs -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="friends-panel">
            <div class="scroll-container ps-container ps-theme-default ps-active-y" data-ps-id="4623c52d-1bca-6dcc-79ea-5267b56bdce5">
                <div class="py-4 px-3">
                    <h6 class="text-uppercase m-0 text-muted">Who's Online ?</h6>
                </div>
                <div class="media-list">
                    <a href="javascript:void(0)" class="media">
                        <img class="avatar avatar-circle" src="{{ asset('assets/global/images/203.jpg') }}" alt="">
                        <div class="media-body">
                            <h6 class="media-heading">Patrice Semo</h6>
                            <small>Lorem ipsum dolor sit amet</small>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="media">
                        <img class="avatar avatar-circle" src="{{ asset('assets/global/images/101.jpg') }}" alt="">
                        <div class="media-body">
                            <h6 class="media-heading">Audry Rowbotham</h6>
                            <small>Lorem ipsum dolor sit amet</small>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="media">
                        <img class="avatar avatar-circle" src="{{ asset('assets/global/images/202.jpg') }}" alt="">
                        <div class="media-body">
                            <h6 class="media-heading">Jonathan Radej</h6>
                            <small>Lorem ipsum dolor sit amet</small>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="media">
                        <img class="avatar avatar-circle" src="{{ asset('assets/global/images/204.jpg') }}" alt="">
                        <div class="media-body">
                            <h6 class="media-heading">Joelle Pabon</h6>
                            <small>Lorem ipsum dolor sit amet</small>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="media">
                        <img class="avatar avatar-circle" src="{{ asset('assets/global/images/201.jpg') }}" alt="">
                        <div class="media-body">
                            <h6 class="media-heading">Fae Atamanczyk</h6>
                            <small>Lorem ipsum dolor sit amet</small>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="media">
                        <img class="avatar avatar-circle" src="{{ asset('assets/global/images/101.jpg') }}" alt="">
                        <div class="media-body">
                            <h6 class="media-heading">German Rosch</h6>
                            <small>Lorem ipsum dolor sit amet</small>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="media">
                        <img class="avatar avatar-circle" src="{{ asset('assets/global/images/102.jpg') }}" alt="">
                        <div class="media-body">
                            <h6 class="media-heading">Aurora Nemet</h6>
                            <small>Lorem ipsum dolor sit amet</small>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="media">
                        <img class="avatar avatar-circle" src="{{ asset('assets/global/images/103.jpg') }}" alt="">
                        <div class="media-body">
                            <h6 class="media-heading">Letisha Eroman</h6>
                            <small>Lorem ipsum dolor sit amet</small>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="media">
                        <img class="avatar avatar-circle" src="{{ asset('assets/global/images/105.jpg') }}" alt="">
                        <div class="media-body">
                            <h6 class="media-heading">Zina Sivert</h6>
                            <small>Lorem ipsum dolor sit amet</small>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="media">
                        <img class="avatar avatar-circle" src="{{ asset('assets/global/images/211.jpg') }}" alt="">
                        <div class="media-body">
                            <h6 class="media-heading">Annie Vanderbeek</h6>
                            <small>Lorem ipsum dolor sit amet</small>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="media">
                        <img class="avatar avatar-circle" src="{{ asset('assets/global/images/208.jpg') }}" alt="">
                        <div class="media-body">
                            <h6 class="media-heading">Karoline Herrling</h6>
                            <small>Lorem ipsum dolor sit amet</small>
                        </div>
                    </a>
                </div>
                <!-- /.media-list -->
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 597px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 456px;"></div></div></div>
                <!-- /.scroll-container -->
            </div>
            <!-- /.tab-pane -->
            <div role="tabpanel" class="tab-pane" id="notifications-panel">
                <div class="scroll-container ps-container ps-theme-default" data-ps-id="5cfca2c1-3bc8-4b98-10d8-658b683e5170">
                    <div class="py-4 px-3">
                        <h6 class="text-uppercase m-0 text-muted">Notifications</h6>
                    </div>
                    <div class="media-list">
                        <a href="javascript:void(0)" class="media">
                            <span class="avatar bg-success" data-plugin="firstLitter" data-target="#notification-1">R</span>
                            <div class="media-body">
                                <h6 class="media-heading" id="notification-1">Raye Nolton</h6>
                                <small>Lorem ipsum dolor sit amet.</small>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="media">
                            <span class="avatar bg-info" data-plugin="firstLitter" data-target="#notification-01">L</span>
                            <div class="media-body">
                                <h6 class="media-heading" id="notification-01">Lucretia Philipson</h6>
                                <small>Lorem ipsum dolor sit amet.</small>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="media">
                            <span class="avatar bg-warning" data-plugin="firstLitter" data-target="#notification-2">R</span>
                            <div class="media-body">
                                <h6 class="media-heading" id="notification-2">Roxy Heckerman</h6>
                                <small>Lorem ipsum dolor sit amet</small>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="media">
                            <span class="avatar bg-primary" data-plugin="firstLitter" data-target="#notification-3">G</span>
                            <div class="media-body">
                                <h6 class="media-heading" id="notification-3">Glennis Nest</h6>
                                <small>Lorem ipsum dolor sit amet</small>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="media">
                            <span class="avatar bg-success" data-plugin="firstLitter" data-target="#notification-4">B</span>
                            <div class="media-body">
                                <h6 class="media-heading" id="notification-4">Basil Hugo</h6>
                                <small>Lorem ipsum dolor sit amet</small>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="media">
                            <span class="avatar bg-danger" data-plugin="firstLitter" data-target="#notification-5">A</span>
                            <div class="media-body">
                                <h6 class="media-heading" id="notification-5">Anamaria Piedrahita</h6>
                                <small>Lorem ipsum dolor sit amet</small>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="media">
                            <span class="avatar bg-primary" data-plugin="firstLitter" data-target="#notification-6">K</span>
                            <div class="media-body">
                                <h6 class="media-heading" id="notification-6">Karl SlomaLuanna</h6>
                                <small>Lorem ipsum dolor sit amet</small>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="media">
                            <span class="avatar bg-success" data-plugin="firstLitter" data-target="#notification-7">W</span>
                            <div class="media-body">
                                <h6 class="media-heading" id="notification-7">Willa Santolucito</h6>
                                <small>Lorem ipsum dolor sit amet</small>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="media">
                            <span class="avatar bg-info" data-plugin="firstLitter" data-target="#notification-8">J</span>
                            <div class="media-body">
                                <h6 class="media-heading" id="notification-8">Justin Bogaert</h6>
                                <small>Lorem ipsum dolor sit amet</small>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="media">
                            <span class="avatar bg-warning" data-plugin="firstLitter" data-target="#notification-9">G</span>
                            <div class="media-body">
                                <h6 class="media-heading" id="notification-9">Gino Kinderknecht</h6>
                                <small>Lorem ipsum dolor sit amet</small>
                            </div>
                        </a>
                    </div>
                    <!-- /.media-list -->
                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                    <!-- /.scroll-container -->
                </div>
                <!-- /.tab-pane -->
                <div role="tabpanel" class="tab-pane" id="settings-panel">
                    <div class="scroll-container ps-container ps-theme-default" data-ps-id="c9aa5de5-ec9c-9c2d-a38e-f9fd47e9814b">
                        <div class="py-4 px-3">
                            <h6 class="text-uppercase m-0 text-muted">Account Settings</h6>
                        </div>
                        <div class="p-3">
                            <div class="d-flex mb-3">
                                <label for="user-settings-option1">Show My username</label>
                                <span class="ml-auto">
                                    <input id="user-settings-option1" type="checkbox" data-plugin="switchery" data-color="#60c84c" data-size="small" checked="checked" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(96, 200, 76); border-color: rgb(96, 200, 76); box-shadow: rgb(96, 200, 76) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                </span>
                            </div>
                            <div class="d-flex mb-3">
                                <label for="user-settings-option2">Make my profile public</label>
                                <span class="ml-auto">
                                    <input id="user-settings-option2" type="checkbox" data-plugin="switchery" data-color="#60c84c" data-size="small" checked="checked" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(96, 200, 76); border-color: rgb(96, 200, 76); box-shadow: rgb(96, 200, 76) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                </span>
                            </div>
                            <div class="d-flex mb-3">
                                <label for="user-settings-option3">Allow cloud backups</label>
                                <span class="ml-auto">
                                    <input id="user-settings-option3" type="checkbox" data-plugin="switchery" data-color="#60c84c" data-size="small" checked="checked" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(96, 200, 76); border-color: rgb(96, 200, 76); box-shadow: rgb(96, 200, 76) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                </span>
                            </div>
                        </div>
                        <!-- /.p-3 -->
                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                        <!-- /.scroll-container -->
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.side-panel-tabs -->
        </aside>
        <!-- /.side-panel -->
        <header class="site-header">
            <div class="jumbotron jumbotron-fluid">
                <div class="jumbotron-text">
                    <h4 class="text-primary">Welcome To Luxury</h4>
                    <small class="font-italic text-muted">Bootstrap 4 Web App Kit</small>
                </div>
                <!-- /.jumbotron-text -->
                <div class="jumbotron-charts">
                    <div class="item">
                        <div class="mr-3">
                            <small class="d-block mb-1">STORE INCOME</small> <svg class="svg-euro-icon mr-1">
                                <use xlink:href="{{ asset('assets/global/svg-sprite/sprite.svg#euro') }}"></use>
                            </svg> <strong data-plugin="counterUp">6950</strong>
                        </div>
                        <div>
                            <div class="jumbotron-chart mt-2" id="jumbotron_chart_1"><canvas width="58" height="30" style="display: inline-block; width: 58px; height: 30px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="mr-3">
                            <small class="d-block mb-1">ORDERS</small> <svg class="svg-caret-icon mr-1">
                                <use xlink:href="{{ asset('assets/global/svg-sprite/sprite.svg#caret') }}"></use>
                            </svg> <strong data-plugin="counterUp">7639</strong>
                        </div>
                        <div>
                            <div class="jumbotron-chart mt-2" id="jumbotron_chart_2"><canvas width="58" height="30" style="display: inline-block; width: 58px; height: 30px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="mr-3">
                            <small class="d-block mb-1">SITE TRAFFIC</small> <svg class="svg-arrows-up-down-icon mr-1">
                                <use xlink:href="{{ asset('assets/global/svg-sprite/sprite.svg#arrows-up-down') }}"></use>
                            </svg> <strong data-plugin="counterUp">5673</strong>
                        </div>
                        <div>
                            <div class="jumbotron-chart mt-2" id="jumbotron_chart_3"><canvas width="58" height="30" style="display: inline-block; width: 58px; height: 30px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.jumbotron-charts -->
            </div>
            <!-- /.jumbotron -->
            <div class="breadcrumb">
                <ol class="breadcrumb-tree">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <span class="zmdi zmdi-home mr-1">
                                </span> <span>Home</span>
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="#">Luxury</a>
                        </li>
                    </ol>
                    <ul class="breadcrumb-btns">
                        <li class="dropdown">
                            <a href="#" class="btn btn-sm btn-scondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="zmdi zmdi-settings mr-1 text-success">
                                </i> <span class="mr-1">Settings</span> <i class="zmdi zmdi-chevron-down">
                                </i>
                            </a>
                            <div class="dropdown-menu p-0 mt-1" data-plugin="dropdownCaret"><span class="arrow" style="left: 34px; right: auto;"></span>
                            <a class="dropdown-item dropdown-menu-cap">Your Settings</a> <a class="dropdown-item" href="#">Edit Profile</a> <a class="dropdown-item" href="#">Privacy Settings</a> <a class="dropdown-item" href="#">Secuirty Settings</a>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-sm btn-scondary">
                            <i class="zmdi zmdi-headset-mic mr-1 text-success">
                            </i> <span>Support</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-sm btn-scondary">
                            <i class="zmdi zmdi-plus mr-1 text-success">
                            </i> <span>Add</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.breadcrumb -->
        </header>
        <!-- /.site-header -->
        <div class="site-wrapper">
            <aside class="site-menubar">
                <div class="site-menubar-inner">
                    <ul class="site-menu">
                        <!-- MAIN NAVIGATION SECTION -->
                        <li class="menu-section-heading">MAIN NAVIGATION</li>
                        <li>
                            <a href="index.html">
                                <i class="menu-icon zmdi zmdi-home zmdi-hc-lg">
                                </i> <span class="menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="search.html">
                                <i class="menu-icon zmdi zmdi-search zmdi-hc-lg">
                                </i> <span class="menu-text">Search</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="submenu-toggle">
                                <i class="menu-icon zmdi zmdi-pages zmdi-hc-lg">
                                </i> <span class="menu-text">Pages</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right">
                                </i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="timeline.html">
                                        <span class="menu-text">Timeline</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="profile.html">
                                        <span class="menu-text">Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <span class="menu-text">Login</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html">
                                        <span class="menu-text">FAQ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="price.html">
                                        <span class="menu-text">Price</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blank.html">
                                        <span class="menu-text">Blank Page</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="submenu-toggle">
                                        <span class="menu-text">Error</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right">
                                        </i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="404.html">
                                                <span class="menu-text">404</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="403.html">
                                                <span class="menu-text">403</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="500.html">
                                                <span class="menu-text">500</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="submenu-toggle">
                                        <span class="menu-text">Invoice</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right">
                                        </i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="invoice.1.html">
                                                <span class="menu-text">Invoice v1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="invoice.2.html">
                                                <span class="menu-text">Invoice v2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="submenu-toggle">
                                <i class="menu-icon zmdi zmdi-blogger zmdi-hc-lg">
                                </i> <span class="menu-text">Blog</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right">
                                </i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="blog.html">
                                        <span class="menu-text">Blog</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="article.html">
                                        <span class="menu-text">Blog Post</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="submenu-toggle">
                                <i class="menu-icon zmdi zmdi-image zmdi-hc-lg">
                                </i> <span class="menu-text">Gallery</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right">
                                </i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="gallery.1.html">
                                        <span class="menu-text">Gallery v1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.2.html">
                                        <span class="menu-text">Gallery v2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.3.html">
                                        <span class="menu-text">Gallery v3</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- FEATURES SECTION -->
                        <li class="menu-section-heading">FEATURES</li>
                        <li>
                            <a href="javascript:void(0)" class="submenu-toggle">
                                <i class="menu-icon zmdi zmdi-group zmdi-hc-lg">
                                </i> <span class="menu-text">Layouts</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right">
                                </i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="../basic/index.html">
                                        <span class="menu-text">Basic</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../iconbar/index.html">
                                        <span class="menu-text">Iconbar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../leftbar/index.html">
                                        <span class="menu-text">Leftbar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../topbar/index.html">
                                        <span class="menu-text">Topbar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="submenu-toggle">
                                <i class="menu-icon zmdi zmdi-puzzle-piece zmdi-hc-lg">
                                </i> <span class="menu-text">UI Kit</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right">
                                </i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="uikit.alerts.html">
                                        <span class="menu-text">Alerts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="uikit.sweetalert.html">
                                        <span class="menu-text">Sweetalert</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="uikit.buttons.html">
                                        <span class="menu-text">Buttons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="uikit.user-cards.html">
                                        <span class="menu-text">User Cards</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="uikit.blog-widgets.html">
                                        <span class="menu-text">Blog Cards</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="uikit.icons.html">
                                        <span class="menu-text">Font Icons</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="submenu-toggle">
                                <i class="menu-icon zmdi zmdi-pin zmdi-hc-lg">
                                </i> <span class="menu-text">Maps</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right">
                                </i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="maps.google.html">
                                        <span class="menu-text">Google Maps</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="maps.jqvmap.html">
                                        <span class="menu-text">Vector Maps</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- APPS SECTION -->
                        <li class="menu-section-heading">APPS</li>
                        <li>
                            <a href="inbox.html">
                                <i class="menu-icon zmdi zmdi-inbox zmdi-hc-lg">
                                </i> <span class="menu-text">Mail Box</span>
                            </a>
                        </li>
                        <li>
                            <a href="messaging.html">
                                <i class="menu-icon zmdi zmdi-twitch zmdi-hc-lg">
                                </i> <span class="menu-text">Chat</span>
                            </a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="menu-icon zmdi zmdi-calendar zmdi-hc-lg">
                                </i> <span class="menu-text">Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="projects.html">
                                <i class="menu-icon zmdi zmdi-case zmdi-hc-lg">
                                </i> <span class="menu-text">Projects</span>
                            </a>
                        </li>
                        <!-- DATA SECTION -->
                        <li class="menu-section-heading">DATA</li>
                        <li>
                            <a href="javascript:void(0)" class="submenu-toggle">
                                <i class="menu-icon zmdi zmdi-chart zmdi-hc-lg">
                                </i> <span class="menu-text">Charts</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right">
                                </i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="charts.echarts.html">
                                        <span class="menu-text">Echarts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="charts.flot.html">
                                        <span class="menu-text">Flot Cahrts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="charts.chartist.html">
                                        <span class="menu-text">Chartist.js</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="charts.morris.html">
                                        <span class="menu-text">Morris Cahrts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="charts.chartjs.html">
                                        <span class="menu-text">Chart.js</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="submenu-toggle">
                                <i class="menu-icon zmdi zmdi-check-all zmdi-hc-lg">
                                </i> <span class="menu-text">Forms</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right">
                                </i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="form.wizard.html">
                                        <span class="menu-text">Wizard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form.validation.html">
                                        <span class="menu-text">Form Validation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form.fileupload.html">
                                        <span class="menu-text">File Upload</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form.custom.html">
                                        <span class="menu-text">Custom Elements</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form.datetime.html">
                                        <span class="menu-text">Date &amp; Time</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form.wysiwyg-editor.html">
                                        <span class="menu-text">Summernote Editor</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="form.bs.html">
                                        <span class="menu-text">Bootstrap Forms</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="submenu-toggle">
                                <i class="menu-icon zmdi zmdi-storage zmdi-hc-lg">
                                </i> <span class="menu-text">Tables</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right">
                                </i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="table.bs.html">
                                        <span class="menu-text">Bootstrap Tables</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="table.datatables.html">
                                        <span class="menu-text">DataTables</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- OTHER SECTION -->
                        <li class="menu-section-heading">OTHER</li>
                        <li>
                            <a href="documentation.html">
                                <i class="menu-icon zmdi zmdi-file-text zmdi-hc-lg">
                                </i> <span class="menu-text">Documentation</span>
                            </a>
                        </li>
                    </ul>
                    <!-- /.site-menu -->
                </div>
                <!-- /.site-menubar-inner -->
            </aside>
            <!-- /.site-menubar -->
            <main class="site-main">
                <div class="site-content">
                    @yield('content')
                    
                </div>
                <!-- /.site-content -->
                <footer class="site-footer">
                    <div class="mr-auto">
                        <p class="text-primary mb-0">Made With <i class="fa fa-heart text-success">
                            </i> By <a href="http://spantags.com/luxury/">SpanTags</a>
                        </p>
                    </div>
                    <div>
                        <a href="https://themeforest.net/item/luxury-responsive-bootstrap-4-admin-template/20881509">Purchase Luxury</a>
                    </div>
                </footer>
                <!-- /.site-footer -->
            </main>
            <!-- /.site-main -->
        </div>
        <!-- /.site-wrapper -->
        <!-- theme customizer -->
        <div id="theme-customizer">
            <header class="p-4">
                <a href="https://themeforest.net/item/luxury-responsive-bootstrap-4-admin-template/20881509" class="btn btn-block btn-lg btn-primary fz-base">BUY Luxury NOW!</a>
                <hr>
                <div class="d-flex justify-content-between customizer-action-btns">
                    <button id="customizerResetButton" class="btn btn-outline-danger">Reset</button> <button id="customizerSaveButton" class="btn btn-outline-success">Save</button>
                </div>
            </header>
            <div class="theme-customizer-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="navbar-tab" data-toggle="tab" href="#navbar" role="tab" aria-controls="navbar" aria-expanded="true">Navbar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="menubar-tab" data-toggle="tab" href="#menubar" role="tab" aria-controls="menubar" aria-expanded="true">Menubar</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane p-4 fade show active" id="navbar" role="tabpanel" aria-labelledby="navbar-tab">
                        <div>
                            <input id="navbarDark" data-toggle="navbarDark" type="checkbox" data-plugin="switchery" data-size="small" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                            <label for="navbarDark" class="ml-3">Navbar Dark</label>
                        </div>
                        <hr>
                        <h6 class="mb-4">Navbar Skin</h6>
                        <div class="mb-3">
                            <div class="radio radio-indigo">
                                <input type="radio" id="nb-skin-2" name="navbar-skin-option" data-toggle="navbarSkin" data-skin="bg-indigo">
                                <label for="nb-skin-2">Indigo</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="radio radio-blue">
                                <input type="radio" id="nb-skin-4" name="navbar-skin-option" data-toggle="navbarSkin" data-skin="bg-blue">
                                <label for="nb-skin-4">Blue</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="radio radio-cyan">
                                <input type="radio" id="nb-skin-6" name="navbar-skin-option" data-toggle="navbarSkin" data-skin="bg-cyan">
                                <label for="nb-skin-6">Cyan</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="radio radio-orange">
                                <input type="radio" id="nb-skin-5" name="navbar-skin-option" data-toggle="navbarSkin" data-skin="bg-orange">
                                <label for="nb-skin-5">Orange</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="radio radio-red">
                                <input type="radio" id="nb-skin-7" name="navbar-skin-option" data-toggle="navbarSkin" data-skin="bg-red">
                                <label for="nb-skin-7">Red</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="radio radio-pink">
                                <input type="radio" id="nb-skin-13" name="navbar-skin-option" data-toggle="navbarSkin" data-skin="bg-pink">
                                <label for="nb-skin-13">Pink</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="radio radio-purple">
                                <input type="radio" id="nb-skin-12" name="navbar-skin-option" data-toggle="navbarSkin" data-skin="bg-purple">
                                <label for="nb-skin-12">Purple</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="radio radio-green">
                                <input type="radio" id="nb-skin-8" name="navbar-skin-option" data-toggle="navbarSkin" data-skin="bg-green">
                                <label for="nb-skin-8">Green</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="radio radio-teal">
                                <input type="radio" id="nb-skin-9" name="navbar-skin-option" data-toggle="navbarSkin" data-skin="bg-teal">
                                <label for="nb-skin-9">Teal</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="radio radio-brown">
                                <input type="radio" id="nb-skin-10" name="navbar-skin-option" data-toggle="navbarSkin" data-skin="bg-brown">
                                <label for="nb-skin-10">Brown</label>
                            </div>
                        </div>
                        <div>
                            <div class="radio radio-gray">
                                <input type="radio" id="nb-skin-11" name="navbar-skin-option" data-toggle="navbarSkin" data-skin="bg-gray">
                                <label for="nb-skin-11">Gray</label>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane fade p-4" id="menubar" role="tabpanel" aria-labelledby="menubar-tab">
                        <div>
                            <input id="menubarDark" data-toggle="menubarDark" type="checkbox" data-plugin="switchery" data-size="small" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(24, 138, 226); border-color: rgb(24, 138, 226); box-shadow: rgb(24, 138, 226) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                            <label for="menubarDark" class="ml-3">Menubar Dark</label>
                        </div>
                        <hr>
                        <div id="menubar-fold-wrap" class="hidden-top hidden-sm-down">
                            <input id="menubarFold" data-toggle="menubarFold" type="checkbox" data-plugin="switchery" data-size="small" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                            <label for="menubarFold" class="ml-3">Menubar Folded</label>
                        </div>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
                <div id="theme-customizer-toggler" data-toggle="class" data-target="#theme-customizer" data-class="show">
                    <i class="fa fa-gear fa-2x">
                    </i>
                </div>
            </div>
            <!-- /.theme-customizer-body -->
        </div>
    </body>
    <!-- /.theme-customizer -->
    <!-- core plugins -->
    <script src="{{ asset('assets/vendor/bower_components/jquery/dist/jquery.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/bower_components/popper.js/dist/umd/popper.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/bower_components/switchery/dist/switchery.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/bower_components/waypoints/lib/jquery.waypoints.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/bower_components/waypoints/lib/shortcuts/sticky.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/bower_components/counterup/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/bower_components/sweetalert/dist/sweetalert.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/js/jquery.sparkline.min.js') }}">
    </script>
    <script src="{{ asset('assets/global/js/plugins/dropdown-caret.js') }}">
    </script>
    <script src="{{ asset('assets/global/js/plugins/firstlitter.js') }}">
    </script>
    <script src="{{ asset('assets/global/js/plugins/video-modal.js') }}">
    </script>
    <!-- plugins for the current page -->
    <script src="{{ asset('assets/vendor/bower_components/chartist/dist/chartist.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/jvectormap/jquery-jvectormap.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/jvectormap/maps/jquery-jvectormap-world-mill.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/flot/jquery.flot.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/flot/jquery.flot.resize.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/flot/jquery.flot.tooltip.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/flot/jquery.flot.categories.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/bower_components/peity/jquery.peity.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.min.js') }}">
    </script>
    <!-- site-wide scripts -->
    <script src="{{ asset('assets/global/js/main.js') }}">
    </script>
    <script src="{{ asset('js/site.js') }}">
    </script>
    <script src="{{ asset('js/navbar.js') }}">
    </script>
    <script src="{{ asset('js/menubar.js') }}">
    </script>
    <!-- current page scripts -->
    <script src="{{ asset('assets/examples/js/dashboards/dashboard.v1.js') }}">
    </script>
    <div class="jvectormap-tip"></div><div class="flotTip-with-arrow" style="display: none; position: absolute; left: 295px; top: 486px;"></div><div class="flotTip" style="display: none; position: absolute; background: rgb(255, 255, 255); z-index: 1040; padding: 0.4em 0.6em; border-radius: 0.5em; font-size: 0.8em; border: 1px solid rgb(17, 17, 17); white-space: nowrap;"></div>
    
</html>