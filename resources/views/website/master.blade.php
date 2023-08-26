<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Eduhub - Education And LMS HTML5 Template</title>

    <link rel="icon" type="image/x-icon" href="{{asset('/')}}website/assets/img/logo/favicon.png">

    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/style.css">
</head>
<body>

<div class="preloader">
    <div class="loader"></div>
</div>


<header class="home-3 header">

    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper">
                <div class="header-top-left">
                    <div class="header-top-contact">
                        <ul>
                            <li><a href="tel:+21236547898"><i class="far fa-phone"></i>+2 123 654 7898</a></li>
                            <li><a href="https://live.themewild.com/cdn-cgi/l/email-protection#50393e363f103528313d203c357e333f3d"><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="147d7a727b54716c75796478713a777b79">[email&#160;protected]</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-top-lang">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" id="lang" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="far fa-globe-americas"></i>English
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="lang">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{asset('/')}}website/assets/img/lang/english.png" alt=""> English
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{asset('/')}}website/assets/img/lang/germany.png" alt=""> Germany
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{asset('/')}}website/assets/img/lang/portugues.png" alt=""> Português
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-social">
                        <span>Follow Us:</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('/')}}website/assets/img/logo/logo.png" alt="logo"/>
                </a>
                <div class="mobile-menu-right">
                    <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>
                <div class="nav-category">
                    <div class="dropdown">
                        <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-grip-vertical"></i>Course Category
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Software Development</a></li>
                            <li><a class="dropdown-item" href="#">Web Development</a></li>
                            <li><a class="dropdown-item" href="#">Graphics Design</a></li>
                            <li><a class="dropdown-item" href="#">Motion Graphics</a></li>
                            <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                            <li><a class="dropdown-item" href="#">Video Edition</a></li>
                            <li><a class="dropdown-item" href="#">Logo Design</a></li>
                            <li><a class="dropdown-item" href="#">English Learning</a></li>
                        </ul>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" href="{{route('home')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('course')}}">All Courses</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('user-login')}}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('user-registration')}}">Registration</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>


<div class="search-popup">
    <button class="close-search"><span class="far fa-times"></span></button>
    <form action="#">
        <div class="form-group">
            <input type="search" name="search-field" placeholder="Search Here..." required>
            <button type="submit"><i class="far fa-search"></i></button>
        </div>
    </form>
</div>

<main class="home-3 main">
@yield('body')
</main>

<footer class="footer-area">
    <div class="footer-widget">
        <div class="container">
            <div class="row footer-widget-wrapper pt-100 pb-70">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget-box about-us">
                        <a href="#" class="footer-logo">
                            <img src="{{asset('/')}}website/assets/img/logo/logo.png" alt="">
                        </a>
                        <p class="mb-20">
                            Get started now and take advantage of
                            our 30 day free trial today.
                        </p>
                        <div>
                            <ul class="footer-contact">
                                <li><a href="tel:+21236547898"><i class="far fa-phone"></i> Tel: +2 123 654 7898</a>
                                </li>
                                <li><a href="https://live.themewild.com/cdn-cgi/l/email-protection#b6dfd8d0d9f6d3ced7dbc6dad398d5d9db"><i class="far fa-envelope"></i> Email:
                                        <span class="__cf_email__" data-cfemail="325b5c545d72574a535f425e571c515d5f">[email&#160;protected]</span></a>
                                </li>
                            </ul>
                        </div>
                        <ul class="footer-social">
                            <li class="facebook-link"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="pinterest-link"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li class="twitter-link"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="linkedin-link"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Quick Links</h4>
                        <ul class="footer-list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Latest Blog</a></li>
                            <li><a href="#">Upcoming Events</a></li>
                            <li><a href="#">Popular Courses</a></li>
                            <li><a href="#">Become Instructor</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box">
                        <h4 class="footer-widget-title">Support</h4>
                        <ul class="footer-list">
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">FAQ's</a></li>
                            <li><a href="#">Terms Of Service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Live Support</a></li>
                            <li><a href="#">Help Center</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Newsletter</h4>
                        <div class="footer-newsletter">
                            <p>Subscribe Our Newsletter To Get Latest Update And News</p>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="email" class="form-control" placeholder="Your Email">
                                    <button type="submit"><span class="far fa-envelope"></span></button>
                                </form>
                            </div>
                        </div>
                        <div class="footer-app-download">
                            <h5>Download</h5>
                            <a href="#"> <img src="{{asset('/')}}website/assets/img/download-icon/google-play.png" alt=""> </a>
                            <a href="#"> <img src="{{asset('/')}}website/assets/img/download-icon/app-store.png" alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <p class="copyright-text">
                        &copy; Copyright <span id="date"></span> <a href="#"> eduhub </a> All Rights Reserved.
                    </p>
                </div>
                <div class="col-lg-6 align-self-center">
                    <ul class="footer-menu">
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Terms Of Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<a href="#" id="scroll-top"><i class="far fa-angle-double-up"></i></a>


<script src="{{asset('/')}}website/assets/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}website/assets/js/modernizr.min.js"></script>
<script src="{{asset('/')}}website/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}website/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/')}}website/assets/js/isotope.pkgd.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.appear.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.easing.min.js"></script>
<script src="{{asset('/')}}website/assets/js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}website/assets/js/counter-up.js"></script>
<script src="{{asset('/')}}website/assets/js/masonry.pkgd.min.js"></script>
<script src="{{asset('/')}}website/assets/js/wow.min.js"></script>
<script src="{{asset('/')}}website/assets/js/main.js"></script>
</body>

</html>
