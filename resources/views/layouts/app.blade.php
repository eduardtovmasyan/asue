<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="asue">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    @yield('css')
    <script src="{{ asset('assets/vendor/bower_components/breakpoints.js/dist/breakpoints.min.js') }}">
    </script>
    <script>Breakpoints({xs: {min:0,max:575},sm: {min:576,max:767},md: {min:768,max:991},lg: {min:992,max:1199},xl: {min:1200,max:Infinity}});</script>
    <body class="menubar-left menubar-dark dashboard dashboard-v1 menubar-open">
        <nav class="site-navbar navbar fixed-top navbar-expand-lg navbar-light bg-blue">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('home') }}">
                    <span class="brand-name hidden-fold">A S U E</span>
                </a>
                <button data-toggle="menubar" class="mr-auto hidden-lg-up hamburger hamburger--collapse js-hamburger is-active" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
                </button>
                <button type="button" class="navbar-toggler hidden-lg-up collapsed" data-toggle="collapse" data-target="#site-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="zmdi zmdi-hc-lg zmdi-more"></span>
                </button>
            </div>
            <!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="site-navbar-collapse">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link site-user dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="nav-img" src="{{ asset('assets/global/images/user-img.png') }}" alt="">
                        <span class="nav-text hidden-sm-down ml-2">
                            {{ Auth::user()->information->name }}
                        </span>
                        <i class="nav-caret hidden-sm-down zmdi zmdi-hc-sm zmdi-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right p-0" data-plugin="dropdownCaret">
                        <span class="arrow" style="right: 45px; left: auto;"></span>
                        <a class="dropdown-item dropdown-menu-cap"> {{ Auth::user()->information->name }} {{ Auth::user()->information->surname }} </a>
                        <a class="dropdown-item" href="{{ url('profile') }}">
                            <i class="fa fa-user-o mr-3">
                            </i> <span>Անձնական էջ</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off mr-3">
                            </i> <span>Ելք</span>
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
                <li class="nav-item hidden-xl-up hidden-md-down px-3 d-flex align-items-center">
                    <button data-toggle="menubar" class="hamburger hamburger--arrowalt js-hamburger is-active" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                    </button>
                </li>
                <!--  -->
                <li class="nav-item">
                    <a class="nav-link" href="#side-panel" data-toggle="class" data-class="open">
                        <i class="nav-icon fa fa-bell-o"></i>
                        <span class="badge badge-circle badge-danger notificationCount"></span>
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
            <!-- /.tab-pane -->
            <div role="tabpanel" class="tab-pane" id="notifications-panel">
                <div class="scroll-container ps-container ps-theme-default" data-ps-id="5cfca2c1-3bc8-4b98-10d8-658b683e5170">
                    <div class="py-4 px-3">
                        <h6 class="text-uppercase m-0 text-muted">Notifications</h6>
                    </div>
                    <div class="media-list studentNotification"></div>
                    <!-- /.media-list -->
                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                        <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
                        <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div>
                    </div>
                    <!-- /.scroll-container -->
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.side-panel-tabs -->
    </aside>
    <!-- /.side-panel -->
    <div class="site-wrapper">
        <aside class="site-menubar">
            <div class="site-menubar-inner">
                <ul class="site-menu">
                    <!-- MAIN NAVIGATION SECTION -->
                    <li class="menu-section-heading">MAIN NAVIGATION</li>
                    <li>
                        <a href="{{ url('home') }}">
                            <i class="menu-icon zmdi zmdi-home zmdi-hc-lg"></i>
                            <span class="menu-text">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('academic-info') }}">
                            <i class="menu-icon fa fa-info-circle"></i>
                            <span class="menu-text">Academic Information</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('contact') }}">
                            <i class="menu-icon fa fa-file"></i>
                            <span class="menu-text">Contact Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="submenu-toggle">
                            <i class="menu-icon zmdi zmdi-pages zmdi-hc-lg"></i>
                            <span class="menu-text">Pages</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
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
                                    <span class="menu-text">Error</span>
                                    <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
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
                                    <span class="menu-text">Invoice</span>
                                    <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
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
                            <i class="menu-icon zmdi zmdi-blogger zmdi-hc-lg"></i>
                            <span class="menu-text">Blog</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
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
                            <i class="menu-icon zmdi zmdi-image zmdi-hc-lg"></i>
                            <span class="menu-text">Gallery</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
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
                            <i class="menu-icon zmdi zmdi-group zmdi-hc-lg"></i>
                            <span class="menu-text">Layouts</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
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
                            <i class="menu-icon zmdi zmdi-puzzle-piece zmdi-hc-lg"></i>
                            <span class="menu-text">UI Kit</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
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
                            <i class="menu-icon zmdi zmdi-pin zmdi-hc-lg"></i>
                            <span class="menu-text">Maps</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
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
                            <i class="menu-icon zmdi zmdi-inbox zmdi-hc-lg"></i>
                            <span class="menu-text">Mail Box</span>
                        </a>
                    </li>
                    <li>
                        <a href="messaging.html">
                            <i class="menu-icon zmdi zmdi-twitch zmdi-hc-lg"></i>
                            <span class="menu-text">Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="menu-icon zmdi zmdi-calendar zmdi-hc-lg"></i>
                            <span class="menu-text">Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="projects.html">
                            <i class="menu-icon zmdi zmdi-case zmdi-hc-lg"></i>
                            <span class="menu-text">Projects</span>
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
                <!--  -->
                <div class="modal fade wizard-modal" id="wizard-modal" tabindex="-1" role="dialog" aria-labelledby="image-gallery-modal" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-body p-5">
                                <div class="text-center">
                                    <h4>Please Take This Survey</h4>
                                </div>
                                <form action="" id="wizard-modal-form">
                                    <div class="wizard p-4" id="modal-wizard" style="border-radius: 6px">
                                        <div class="tab-content">
                                            <div class="tab-pane p-5 active" id="ex2-step-1" role="tabpanel">
                                                <div class="row"></div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="pager d-flex justify-content-between float-right">
                                                <button type="button" class="next btn btn-outline-success btn-rounded px-5" data-dismiss="modal">Close</button>
                                            </div>
                                            <!-- /.pager -->
                                        </div>
                                        <!-- /.tab-content -->
                                    </div>
                                    <!-- /.form-wizard -->
                                </form>
                            </div>
                            <!-- /.modal-body -->
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!--  -->
            </div>
            <!-- /.site-content -->
            <footer class="site-footer">
                <div class="mr-auto">
                    <p class="text-primary mb-0">
                        <a href=""></a>
                    </p>
                </div>
                <div>
                    <a href=""></a>
                </div>
            </footer>
            <!-- /.site-footer -->
        </main>
        <!-- /.site-main -->
    </div>
    <!-- /.site-wrapper -->
    <input type="hidden" id="token" value="{{csrf_token()}}">
</body>
<!-- /.theme-customizer -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
<!--  -->
@yield('js')
<script src="{{ asset('js/notification.js')}}" type="text/javascript"></script>
</html>