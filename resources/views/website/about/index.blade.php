@extends('website.master')

@section('body')

    <div class="site-breadcrumb">
        <div class="hero-shape-area">
            <img class="hero-shape-1" src="{{asset('/')}}website/assets/img/shape/shape-1.png" alt="">
            <img class="hero-shape-2" src="{{asset('/')}}website/assets/img/shape/shape-3.png" alt="">
            <img class="hero-shape-3" src="{{asset('/')}}website/assets/img/shape/shape-6.png" alt="">
            <img class="hero-shape-4" src="{{asset('/')}}website/assets/img/shape/shape-4.png" alt="">
        </div>
        <div class="container">
            <h2 class="breadcrumb-title">About Us</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>


    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left">
                        <div class="about-img">
                            <img src="{{asset('/')}}website/assets/img/about/01.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right">
                        <div class="site-heading mb-3">
                            <h2 class="site-title">
                                Whether you want to <span>learn or to share</span> what you know
                            </h2>
                        </div>
                        <p class="about-text">There are many variations of passages of Lorem Ipsum available, but
                            the majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable. If you are going to use a passage of
                            orem psum you need to be sure.All the Lorem Ipsum generators on the Internet tend to
                            repeat predefined chunks.</p>
                        <div class="about-list-wrapper">
                            <ul class="about-list list-unstyled">
                                <li>
                                    <div class="icon"><i class="fal fa-user-friends"></i></div>
                                    <div class="text">
                                        <h4>Qualified Instructor</h4>
                                        <p>Take a look at our round up of the best shows.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fal fa-headset"></i></div>
                                    <div class="text">
                                        <h4>Individual Support</h4>
                                        <p>It has survived not only five centuries.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="about.html" class="theme-btn">Discover More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="counter-area pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon counter-icon-1"><i class="fal fa-users"></i></div>
                        <div>
                            <span class="counter" data-count="+" data-to="1500" data-speed="3000">1500</span>
                            <h6 class="title">+ Students Enrolled</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon counter-icon-2"><i class="fal fa-book-open"></i></div>
                        <div>
                            <span class="counter" data-count="+" data-to="250" data-speed="3000">250</span>
                            <h6 class="title">+ Total Courses</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon counter-icon-3"><i class="fal fa-diploma"></i></div>
                        <div>
                            <span class="counter" data-count="+" data-to="120" data-speed="3000">120</span>
                            <h6 class="title">+ Active Experts</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon counter-icon-4"><i class="fal fa-award"></i></div>
                        <div>
                            <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                            <h6 class="title">+ Win Awards</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="feature-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <h2 class="site-title mb-2">Why You Learn <span>With Eduhub</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="feature-icon feature-icon-1">
                            <i class="far fa-book-open"></i>
                        </div>
                        <div class="feature-content">
                            <h4>320k Online Course</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item active">
                        <div class="feature-icon feature-icon-2">
                            <i class="far fa-users"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Expert Instructors</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="feature-icon feature-icon-3">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Lifetime Access</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="testimonial-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <h2 class="site-title">What Our <span>Students Say's</span></h2>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable.
                        </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider owl-carousel owl-theme">
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <span class="testimonial-quote-icon"><i class="fal fa-quote-right"></i></span>
                        <p>
                            "There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't
                            look even slightly believable. If you are going to use a passage."
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="{{asset('/')}}website/assets/img/testimonial/01.png" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Sylvia H Green</h4>
                            <p>Student</p>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <span class="testimonial-quote-icon"><i class="fal fa-quote-right"></i></span>
                        <p>
                            "There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't
                            look even slightly believable. If you are going to use a passage."
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="{{asset('/')}}website/assets/img/testimonial/02.png" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Gordon D Novak</h4>
                            <p>Student</p>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <span class="testimonial-quote-icon"><i class="fal fa-quote-right"></i></span>
                        <p>
                            "There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't
                            look even slightly believable. If you are going to use a passage."
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="{{asset('/')}}website/assets/img/testimonial/03.png" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Reid E Butt</h4>
                            <p>Student</p>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <span class="testimonial-quote-icon"><i class="fal fa-quote-right"></i></span>
                        <p>
                            "There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't
                            look even slightly believable. If you are going to use a passage."
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="{{asset('/')}}website/assets/img/testimonial/04.png" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Parker Jimenez</h4>
                            <p>Student</p>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="team-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <h2 class="site-title">Meet With <span>Our Team</span></h2>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="team-item">
                        <img src="{{asset('/')}}website/assets/img/team/01.png" alt="thumb">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="#">Malissa Fie</a></h5>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-item">
                        <img src="{{asset('/')}}website/assets/img/team/02.png" alt="thumb">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="#">Arron Rodri</a></h5>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-item">
                        <img src="{{asset('/')}}website/assets/img/team/03.png" alt="thumb">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="#">Chad Smith</a></h5>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-item">
                        <img src="{{asset('/')}}website/assets/img/team/04.png" alt="thumb">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="#">Tony Pinto</a></h5>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
