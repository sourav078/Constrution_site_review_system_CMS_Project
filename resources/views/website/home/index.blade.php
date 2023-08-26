@extends('website.master')

@section('body')
    <div class="hero-section">
        <div class="hero-single">
            <div class="hero-shape-area">
                <img class="hero-shape-1" src="{{asset('/')}}website/assets/img/shape/shape-1.png" alt="">
                <img class="hero-shape-2" src="{{asset('/')}}website/assets/img/shape/shape-3.png" alt="">
                <img class="hero-shape-3" src="{{asset('/')}}website/assets/img/shape/shape-6.png" alt="">
                <img class="hero-shape-4" src="{{asset('/')}}website/assets/img/shape/shape-4.png" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="hero-content">
                            <h6 class="hero-sub-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">Start To New Journey</h6>
                            <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                                Best learning <span>platform that take</span> you next level
                            </h1>
                            <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                                There are many variations of passages available but the majority have suffered
                                alteration in some humour.
                            </p>
                            <div class="hero-search">
                                <form action="#">
                                    <div class="form-group">
                                        <i class="far fa-search"></i>
                                        <input type="text" class="form-control" placeholder="Search Your Course Today...">
                                        <button type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="hero-img" style="background-image: url({{asset('/')}}website/assets/img/hero/hero.jpg)"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="category-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center mb-4">
                        <h2 class="site-title">Browse with <span>top category</span></h2>
                    </div>
                </div>
            </div>
            <div class="category-slider owl-carousel owl-theme">
                <div class="mt-4">
                    <a href="#" class="d-block">
                        <div class="category-item category-color-1">
                            <div class="category-item-icon">
                                <i class="fad fa-laptop-code"></i>
                            </div>
                            <div class="category-item-content">
                                <h6>Development</h6>
                                <span>2,579 Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4">
                    <a href="#" class="d-block">
                        <div class="category-item category-color-2">
                            <div class="category-item-icon">
                                <i class="fad fa-megaphone"></i>
                            </div>
                            <div class="category-item-content">
                                <h6>Digital Marketing</h6>
                                <span>1,900 Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4">
                    <a href="#" class="d-block">
                        <div class="category-item category-color-3">
                            <div class="category-item-icon">
                                <i class="fad fa-leaf"></i>
                            </div>
                            <div class="category-item-content">
                                <h6>Lifestyle</h6>
                                <span>1,500 Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4">
                    <a href="#" class="d-block">
                        <div class="category-item category-color-4">
                            <div class="category-item-icon">
                                <i class="fad fa-medkit"></i>
                            </div>
                            <div class="category-item-content">
                                <h6>Health & Fitness</h6>
                                <span>1,000 Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4">
                    <a href="#" class="d-block">
                        <div class="category-item category-color-5">
                            <div class="category-item-icon">
                                <i class="fad fa-fill-drip"></i>
                            </div>
                            <div class="category-item-content">
                                <h6>Graphics Design</h6>
                                <span>900 Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4">
                    <a href="#" class="d-block">
                        <div class="category-item category-color-6">
                            <div class="category-item-icon">
                                <i class="fad fa-photo-video"></i>
                            </div>
                            <div class="category-item-content">
                                <h6>Photography & Video</h6>
                                <span>700 Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4">
                    <a href="#" class="d-block">
                        <div class="category-item category-color-7">
                            <div class="category-item-icon">
                                <i class="fad fa-credit-card"></i>
                            </div>
                            <div class="category-item-content">
                                <h6>Finance & Accounting</h6>
                                <span>500 Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4">
                    <a href="#" class="d-block">
                        <div class="category-item category-color-8">
                            <div class="category-item-icon">
                                <i class="fad fa-school"></i>
                            </div>
                            <div class="category-item-content">
                                <h6>Office Productivity</h6>
                                <span>350 Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4">
                    <a href="#" class="d-block">
                        <div class="category-item category-color-2">
                            <div class="category-item-icon">
                                <i class="fad fa-music"></i>
                            </div>
                            <div class="category-item-content">
                                <h6>Music</h6>
                                <span>450 Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4">
                    <a href="#" class="d-block">
                        <div class="category-item category-color-4">
                            <div class="category-item-icon">
                                <i class="fad fa-tv"></i>
                            </div>
                            <div class="category-item-content">
                                <h6>IT & Software</h6>
                                <span>1,250 Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4">
                    <a href="#" class="d-block">
                        <div class="category-item category-color-1">
                            <div class="category-item-icon">
                                <i class="fad fa-drafting-compass"></i>
                            </div>
                            <div class="category-item-content">
                                <h6>Motion Graphics</h6>
                                <span>1,300 Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4">
                    <a href="#" class="d-block">
                        <div class="category-item category-color-5">
                            <div class="category-item-icon">
                                <i class="fad fa-books"></i>
                            </div>
                            <div class="category-item-content">
                                <h6>English Learning</h6>
                                <span>1,200 Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="course-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <h2 class="site-title mb-2">Explore Our <span>Courses</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="course-item">
                        <span class="course-tag course-tag-1">Beginer</span>
                        <div class="course-img">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/course/01.jpg" alt=""></a>
                        </div>
                        <div class="course-content">
                            <div class="course-meta">
                                <span class="course-category course-category-1">Development</span>
                                <div class="course-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(40)</span>
                                </div>
                            </div>
                            <a href="{{route('course-detail')}}">
                                <h4 class="course-title">Advance PHP Knowledge and learn Laravel framework</h4>
                            </a>
                            <div class="course-info">
                                <ul>
                                    <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                    <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                    <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled
                                    </li>
                                </ul>
                            </div>
                            <div class="course-bottom">
                                <a href="#">
                                    <div class="course-instructor">
                                        <img src="{{asset('/')}}website/assets/img/course/ins-1.jpg" alt="">
                                        <h6>Sara Wood</h6>
                                    </div>
                                </a>
                                <div class="course-price">
                                    <span>$69</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="course-item">
                        <span class="course-tag course-tag-2">Advance</span>
                        <div class="course-img">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/course/02.jpg" alt=""></a>
                        </div>
                        <div class="course-content">
                            <div class="course-meta">
                                <span class="course-category course-category-2">Art & Design</span>
                                <div class="course-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(40)</span>
                                </div>
                            </div>
                            <a href="#">
                                <h4 class="course-title">Full Web Designing Course With 20 Web Template Designing
                                </h4>
                            </a>
                            <div class="course-info">
                                <ul>
                                    <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                    <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                    <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled
                                    </li>
                                </ul>
                            </div>
                            <div class="course-bottom">
                                <a href="#">
                                    <div class="course-instructor">
                                        <img src="{{asset('/')}}website/assets/img/course/ins-2.jpg" alt="">
                                        <h6>Johnny Michell</h6>
                                    </div>
                                </a>
                                <div class="course-price">
                                    <del>$180</del> <span>$150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="course-item">
                        <span class="course-tag course-tag-1">Beginer</span>
                        <div class="course-img">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/course/03.jpg" alt=""></a>
                        </div>
                        <div class="course-content">
                            <div class="course-meta">
                                <span class="course-category course-category-3">Business</span>
                                <div class="course-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(40)</span>
                                </div>
                            </div>
                            <a href="#">
                                <h4 class="course-title">Basic Knowledge About the UI/UX Design Pattern</h4>
                            </a>
                            <div class="course-info">
                                <ul>
                                    <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                    <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                    <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled
                                    </li>
                                </ul>
                            </div>
                            <div class="course-bottom">
                                <a href="#">
                                    <div class="course-instructor">
                                        <img src="{{asset('/')}}website/assets/img/course/ins-3.jpg" alt="">
                                        <h6>Joey D. Glines</h6>
                                    </div>
                                </a>
                                <div class="course-price">
                                    <span>$179</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="course-item">
                        <span class="course-tag course-tag-2">Advance</span>
                        <div class="course-img">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/course/04.jpg" alt=""></a>
                        </div>
                        <div class="course-content">
                            <div class="course-meta">
                                <span class="course-category course-category-4">IT & Software</span>
                                <div class="course-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(40)</span>
                                </div>
                            </div>
                            <a href="#">
                                <h4 class="course-title">The Complete Business Plan Course Includes 50 Templates
                                </h4>
                            </a>
                            <div class="course-info">
                                <ul>
                                    <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                    <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                    <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled
                                    </li>
                                </ul>
                            </div>
                            <div class="course-bottom">
                                <a href="#">
                                    <div class="course-instructor">
                                        <img src="{{asset('/')}}website/assets/img/course/ins-4.jpg" alt="">
                                        <h6>Nancy Alarcon</h6>
                                    </div>
                                </a>
                                <div class="course-price">
                                    <del>$210</del> <span>$150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="course-item">
                        <span class="course-tag course-tag-1">Beginer</span>
                        <div class="course-img">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/course/05.jpg" alt=""></a>
                        </div>
                        <div class="course-content">
                            <div class="course-meta">
                                <span class="course-category course-category-5">Lifestyle</span>
                                <div class="course-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(40)</span>
                                </div>
                            </div>
                            <a href="#">
                                <h4 class="course-title">Become a product Manager learn the skills & job</h4>
                            </a>
                            <div class="course-info">
                                <ul>
                                    <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                    <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                    <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled
                                    </li>
                                </ul>
                            </div>
                            <div class="course-bottom">
                                <a href="#">
                                    <div class="course-instructor">
                                        <img src="{{asset('/')}}website/assets/img/course/ins-5.jpg" alt="">
                                        <h6>Tina L. Heiner</h6>
                                    </div>
                                </a>
                                <div class="course-price">
                                    <span>$159</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="course-item">
                        <span class="course-tag course-tag-2">Advance</span>
                        <div class="course-img">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/course/06.jpg" alt=""></a>
                        </div>
                        <div class="course-content">
                            <div class="course-meta">
                                <span class="course-category course-category-6">Marketing</span>
                                <div class="course-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(40)</span>
                                </div>
                            </div>
                            <a href="#">
                                <h4 class="course-title">The Complete Digital Marketing Course - 12 Courses in 1
                                </h4>
                            </a>
                            <div class="course-info">
                                <ul>
                                    <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                    <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                    <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled
                                    </li>
                                </ul>
                            </div>
                            <div class="course-bottom">
                                <a href="#">
                                    <div class="course-instructor">
                                        <img src="{{asset('/')}}website/assets/img/course/ins-6.jpg" alt="">
                                        <h6>Leo Hender</h6>
                                    </div>
                                </a>
                                <div class="course-price">
                                    <span>Free</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="theme-btn mt-5"><span class="fad fa-sync-alt"></span> Browse All Courses</a>
            </div>
        </div>
    </div>

    <div class="feature-area2 py-120">
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
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item feature-item-bg-1">
                        <div class="feature-icon">
                            <i class="fal fa-book-open"></i>
                        </div>
                        <div class="feature-content">
                            <h4>320k Online Course</h4>
                            <p>It is a long established fact that a reader will be by the readable
                                content of a page looking layout.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item feature-item-bg-2">
                        <div class="feature-icon">
                            <i class="fal fa-users"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Expert Instructors</h4>
                            <p>It is a long established fact that a reader will be by the readable
                                content of a page looking layout.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item feature-item-bg-3">
                        <div class="feature-icon">
                            <i class="fal fa-clock"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Lifetime Access</h4>
                            <p>It is a long established fact that a reader will be by the readable
                                content of a page looking layout.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item feature-item-bg-4">
                        <div class="feature-icon">
                            <i class="fal fa-backpack"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Job Support</h4>
                            <p>It is a long established fact that a reader will be by the readable
                                content of a page looking layout.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="step-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="step-content">
                        <div class="site-heading">
                            <h2 class="site-title mb-10">Eduhub Learning <span>Steps For You</span></h2>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout.
                            </p>
                        </div>
                        <div class="step-content-wrapper">
                            <div class="step-item">
                                <div class="step-count">
                                    <span>01.</span>
                                </div>
                                <div class="step-item-info">
                                    <h3>Find Best Course With Filter</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available but the
                                        majority have suffered alteration.</p>
                                </div>
                            </div>
                            <div class="step-item">
                                <div class="step-count">
                                    <span>02.</span>
                                </div>
                                <div class="step-item-info">
                                    <h3>Enroll To Your Course</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available but the
                                        majority have suffered alteration.</p>
                                </div>
                            </div>
                            <div class="step-item">
                                <div class="step-count">
                                    <span>03.</span>
                                </div>
                                <div class="step-item-info">
                                    <h3>Become Master in Your Field</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available but the
                                        majority have suffered alteration.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="step-img">
                        <div class="video-wrapper">
                            <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="instructor-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <h2 class="site-title">Meet Our Best <span>Instructor</span></h2>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="instructor-item">
                        <div class="instructor-img">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/instructor/01.jpg" alt="img"></a>
                        </div>
                        <div class="instructor-content">
                            <span class="instructor-tag">Developer</span>
                            <a href="#" class="d-block">
                                <h5 class="instructor-name">Hector S. Nickel</h5>
                            </a>
                            <div class="instructor-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(22 Reviews)</span>
                            </div>
                            <span class="instructor-enroll"><i class="far fa-user-friends"></i> 7.9k Students
Enrolled</span>
                            <div class="instructor-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="instructor-item">
                        <div class="instructor-img">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/instructor/02.jpg" alt="img"></a>
                        </div>
                        <div class="instructor-content">
                            <span class="instructor-tag">Designer</span>
                            <a href="#" class="d-block">
                                <h5 class="instructor-name">Mary D. Musser</h5>
                            </a>
                            <div class="instructor-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(22 Reviews)</span>
                            </div>
                            <span class="instructor-enroll"><i class="far fa-user-friends"></i> 1.5k Students
Enrolled</span>
                            <div class="instructor-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="instructor-item">
                        <div class="instructor-img">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/instructor/03.jpg" alt="img"></a>
                        </div>
                        <div class="instructor-content">
                            <span class="instructor-tag">Marketer</span>
                            <a href="#" class="d-block">
                                <h5 class="instructor-name">Jean K. Avendano</h5>
                            </a>
                            <div class="instructor-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(22 Reviews)</span>
                            </div>
                            <span class="instructor-enroll"><i class="far fa-user-friends"></i> 5.6k Students
Enrolled</span>
                            <div class="instructor-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="instructor-item">
                        <div class="instructor-img">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/instructor/04.jpg" alt="img"></a>
                        </div>
                        <div class="instructor-content">
                            <span class="instructor-tag">Adobe</span>
                            <a href="#" class="d-block">
                                <h5 class="instructor-name">Karin M. Chumley</h5>
                            </a>
                            <div class="instructor-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(22 Reviews)</span>
                            </div>
                            <span class="instructor-enroll"><i class="far fa-user-friends"></i> 2.5k Students
Enrolled</span>
                            <div class="instructor-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </div>
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

    <div class="blog-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <h2 class="site-title">Latest News & <span>Blog</span></h2>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img src="{{asset('/')}}website/assets/img/blog/01.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i> August 21, 2022</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="#">There are many variations of passages orem psum available</a>
                            </h4>
                            <a class="blog-btn" href="#">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img src="{{asset('/')}}website/assets/img/blog/02.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i> August 21, 2022</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="#">There are many variations of passages orem psum available</a>
                            </h4>
                            <a class="blog-btn" href="#">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img src="{{asset('/')}}website/assets/img/blog/03.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i> August 21, 2022</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="#">There are many variations of passages orem psum available</a>
                            </h4>
                            <a class="blog-btn" href="#">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="partner-area pt-70 pb-70">
        <div class="container">
            <div class="partner-wrapper partner-slider owl-carousel owl-theme">
                <img src="{{asset('/')}}website/assets/img/partner/01.png" alt="thumb">
                <img src="{{asset('/')}}website/assets/img/partner/02.png" alt="thumb">
                <img src="{{asset('/')}}website/assets/img/partner/03.png" alt="thumb">
                <img src="{{asset('/')}}website/assets/img/partner/04.png" alt="thumb">
                <img src="{{asset('/')}}website/assets/img/partner/05.png" alt="thumb">
                <img src="{{asset('/')}}website/assets/img/partner/06.png" alt="thumb">
                <img src="{{asset('/')}}website/assets/img/partner/07.png" alt="thumb">
            </div>
        </div>
    </div>
@endsection
