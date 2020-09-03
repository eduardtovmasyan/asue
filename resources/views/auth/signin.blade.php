<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
        <meta name="description" content="Luxury is a premium adman dashboard template based on bootstrap">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- core plugins -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.css') }}">
        <!-- core plugins -->
        <!-- plugins for the current page -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/owl.carousel.css') }}">
        <!-- / plugins for the current page -->
        <!-- site-wide stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/site.css') }}">
        <!-- / site-wide stylesheets -->
        <!-- styles for the current page -->
        <link rel="stylesheet" href="{{ asset('assets/examples/css/pages/login.css') }}">
        <!-- / styles for the current page -->
        <style>@import 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,600';</style>
    </head>
    <body class="simple-page page-login">
        <!--[if lt IE 10]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header class="login-page-header d-flex">
            <div class="mr-auto">
                <a href="#" class="d-flex align-items-center">
                    <svg class="flip-y mr-2" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 32 32">
                        <path fill="#ffffff" d="M30.063 2.585c-.253-1.023-.758-1.754-1.5-2.17-3.28-1.842-9.02 3.577-11.05 6.88-.65 1.06-1.275 2.358-1.792 3.718-1.486-.21-2.95-.098-4.366.337C6.954 12.694 4 16.975 4 22v2c0 4.337 3.663 8 8 8h1.98c5.31 0 9.803-3.664 10.682-8.714.33-1.89.142-3.807-.54-5.585 1.26-1.2 2.43-2.587 3.268-3.886 1.646-2.554 3.46-8.062 2.673-11.23zM12 23c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2z"/>
                        <path data-color="color-2" fill="#39527b" d="M10.77 9.437c1.14-.35 2.32-.527 3.506-.527h.148c.424-.954.888-1.846 1.37-2.633-1.106-2.466-2.56-4.72-4.01-5.71-.7-.477-1.387-.656-2.04-.528-.442.086-1.08.37-1.594 1.23C7 3.19 6.89 7.465 7.457 11.06c1-.7 2.108-1.255 3.312-1.623z"/>
                    </svg>
                    <h5 class="text-white m-0">Luxury</h5>
                </a>
            </div>
            <div id="form-switch-btns" class="btn-group switch-btns">
                <button data-target="#signup-form-wrap" class="btn">Sign up</button> <button data-target="#signin-form-wrap" class="btn" disabled="disabled">Sign in</button>
            </div>
        </header>
        <!-- /.login-page-header -->
        <div class="login-page-wrap">
            <div class="side first-side">
                <div class="side-content text-center">
                    <img class="mb-5" src="{{ asset('assets/global/images/lightbulb.png') }}" alt="">
                    <div id="login-page-slider" data-plugin="owlCarousel">
                        <div class="item">
                            <h4 class="mb-3">Lorem ipsum dolor sit amet</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui esse delectus animi quae reiciendis voluptatum corporis numquam. Nostrum alias dignissimos officiis itaque, sunt sed autem minus velit rerum! Officiis, deserunt.</p>
                        </div>
                        <div class="item">
                            <h4 class="mb-3">Lorem ipsum dolor sit amet</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui esse delectus animi quae reiciendis voluptatum corporis numquam. Nostrum alias dignissimos officiis itaque, sunt sed autem minus velit rerum! Officiis, deserunt.</p>
                        </div>
                        <div class="item">
                            <h4 class="mb-3">Lorem ipsum dolor sit amet</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui esse delectus animi quae reiciendis voluptatum corporis numquam. Nostrum alias dignissimos officiis itaque, sunt sed autem minus velit rerum! Officiis, deserunt.</p>
                        </div>
                    </div>
                    <!-- /#login-page-slider -->
                </div>
            </div>
            <!-- /.first-side -->
            <div class="side second-side">
                <div class="side-content">
                    <div id="signin-form-wrap" class="form-wrap show">
                        <h4 class="my-5 font-weight-light text-uppercase">Sing In to benefit from our services</h4>
                        <form id="signin-form" class="form" method="POST" action="{{ route('login') }}">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your username" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Your password" name="pass">
                            </div>
                            <input type="submit" class="btn btn-outline-success py-2 mt-5" style="width: 200px" value="Sign in">
                            {{csrf_field()}}
                        </form>
                    </div>
                    <!-- /#signin-form-wrap -->
                    <div id="signup-form-wrap" class="form-wrap">
                        <h4 class="my-5 font-weight-light text-uppercase">Sing Up to benefit from our services</h4>
                        <form id="signup-form" class="form" action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm password">
                            </div>
                            <input type="submit" class="btn btn-outline-success py-2 mt-5" style="width: 200px" value="Sign up">
                            {{csrf_field()}}
                        </form>
                    </div>
                    <!-- /#signin-form-wrap -->
                </div>
                <!-- /.side-content -->
            </div>
            <!-- /.second-side -->
        </div>
        <!-- /.login-page-wrap -->
        <!-- core plugins -->
        <script src="{{ asset('assets/vendor/bower_components/jquery/dist/jquery.min.js') }}">
        </script>
        <script src="{{ asset('assets/vendor/bower_components/tether/dist/js/tether.min.js') }}">
        </script>
        <script src="{{ asset('assets/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js') }}">
        </script>
        <!-- plugins for the current page -->
        <script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.min.js') }}">
        </script>
        <!-- / plugins for the current page -->
        <!-- scripts for the current page -->
        <script src="{{ asset('assets/examples/js/pages/login.js') }}">
        </script>
        <!-- / scripts for the current page-->
    </body>
</html>