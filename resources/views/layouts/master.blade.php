<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Brisk Biz Corporate Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="keywords" content="Brisk Biz Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- //Meta Tags -->
        <!-- Style-sheets -->
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" property="" />
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">
        <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
        <!--// Style-sheets -->
        <!--web-fonts-->
        <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!--//web-fonts-->
    </head>

    <body>
        <!-- banner -->
        <section class="top-agileits-w3layouts container-fluid p-3">
            <div class="row">

                <h1 class="col-md-4 logo order-md-2 order-1 text-center">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <i class="fab fa-keycdn"></i>Brisk Biz</a>
                </h1>
                <div class="col-md-4 order-md-1 order-2 text-left align-self-center top-mid-w3l">
                    <!-- Login Button -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                        Login
                    </button>
                    <!--// Login Button -->
                    <!-- Register Button -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                        Register
                    </button>
                    <!--// Register Button -->
                </div>
                <div class="col-md-4 order-3 log-icons text-right align-self-center">

                    <ul class="social_list_wthree">

                        <li class="text-center">
                            <a href="#" class="facebook1">
                                <i class="fab fa-facebook-f"></i>

                            </a>
                        </li>
                        <li class="text-center mx-3">
                            <a href="#" class="twitter2">
                                <i class="fab fa-twitter"></i>

                            </a>
                        </li>
                        <li class="text-center">
                            <a href="#" class="dribble3">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="banner" id="home">
            <!-- header -->
            <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-light top-header-w3layouts">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link ml-lg-0" href="{{url('/')}}">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    Apply Visa
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-center" href="{{url('/apply-visa')}}">Application Form</a>
                                    <a class="dropdown-item text-center" href="{{url('/amend-forms')}}">Amendments</a>
                                    <a class="dropdown-item text-center" href="{{url('/payment')}}">Payment</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ml-lg-0" href="{{url('/document-required')}}">Document Requirement
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ml-lg-0" href="{{url('/instructions')}}">Instructions
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ml-lg-0" href="{{url('/terms-conditions')}}">Terms & Conditions
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ml-lg-0" href="{{url('/privacy-policy')}}">Privacy Policy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/about')}}">About</a>
                            </li>
<!--                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/gallery')}}">Gallery</a>
                            </li>-->
<!--                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-center" href="{{url('/news')}}">News</a>
                                    <a class="dropdown-item text-center" href="{{url('/typography')}}">Typography</a>
                                </div>
                            </li>-->
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                            </li>
                        </ul>
<!--                        <form action="#" method="post" class="form-inline my-2 my-lg-0 search ml-auto">
                            <input class="form-control" type="search" placeholder="Search here..." name="Search" required="">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>-->
                    </div>
                </nav>
            </header>
            <!-- //header -->
        </section>
        @yield('middle-content')

        @include('layouts.footer')


        <!-- copyright -->
        <div class="copyright-w3layouts">
            <div class="container">
                <p class="py-xl-4 py-3">© 2018 Brisk Biz . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
        </div>
        <!-- //copyright -->
        <!-- Login Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="login p-md-5 p-4">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                                </div>
                                <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary submit mb-4">Login</button>
                                <p>
                                    <a href="#" class="modal-btm-text" data-toggle="modal" data-target="#exampleModal2"> Don't have an account?</a>
                                </p>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--// Login Modal -->
        <!-- Register Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="login p-md-5 p-4">
                            <form action="#" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label>First name</label>

                                        <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Password</label>
                                        <input type="password" class="form-control" id="password1" placeholder="" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" id="password2" placeholder="" required="">
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                                <p>
                                    <a href="#" class="modal-btm-text">By clicking Register, I agree to your terms</a>
                                </p>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--// Register Modal -->
        <!-- Required common Js -->
        <script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
        <!-- //Required common Js -->
        <!-- stats -->
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('js/jquery.countup.js')}}"></script>
        <script>
            $('.counter').countUp();
        </script>
        <!-- //stats -->
        <!-- flexSlider -->
        <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
        <script>
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>

        <!-- //flexSlider -->

        <!-- password-script -->
        <script>
            window.onload = function () {
                document.getElementById("password1").onchange = validatePassword;
                document.getElementById("password2").onchange = validatePassword;
            }

            function validatePassword() {
                var pass2 = document.getElementById("password2").value;
                var pass1 = document.getElementById("password1").value;
                if (pass1 != pass2)
                    document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                else
                    document.getElementById("password2").setCustomValidity('');
                //empty string means no validation error
            }
        </script>
        <!-- //password-script -->

        <!-- start-smoth-scrolling -->
        <script src="{{asset('js/move-top.js')}}"></script>
        <script src="{{asset('js/select2.js')}}"></script>
        <script src="{{asset('js/easing.js')}}"></script>
        <script>
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        <!-- here stars scrolling icon -->
        <script>
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear'
                 };
                 */

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <!-- //here ends scrolling icon -->
        <!-- Js for bootstrap working-->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- //Js for bootstrap working -->
    </body>

</html>
