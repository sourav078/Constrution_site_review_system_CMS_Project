@extends('website.master')

@section('body')


    <div class="site-breadcrumb justify-content-start text-start">
        <div class="hero-shape-area">
            <img class="hero-shape-1" src="{{asset('/')}}website/assets/img/shape/shape-1.png" alt="">
            <img class="hero-shape-2" src="{{asset('/')}}website/assets/img/shape/shape-3.png" alt="">
            <img class="hero-shape-3" src="{{asset('/')}}website/assets/img/shape/shape-6.png" alt="">
            <img class="hero-shape-4" src="{{asset('/')}}website/assets/img/shape/shape-4.png" alt="">
        </div>
        <div class="container">
            <div class="col-lg-6">
                <div class="course-single-header">
                    <span class="course-category course-category-1">Development</span>
                    <h4 class="course-single-title">Become a product Manager learn the skills & job</h4>
                    <p>There are many variations of passages available but the majority have suffered alteration in
                        some form by injected humour words even slightly believable. </p>
                    <div class="course-single-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="course-single-rating-avg">4.5</span>
                        <span>(1.5k Reviews)</span>
                    </div>
                    <div class="course-single-meta">
                        <div class="course-single-instructor">
                            <img src="{{asset('/')}}website/assets/img/instructor/02.jpg" alt="">
                            <h6>Sara Wood</h6>
                        </div>
                        <div class="course-single-update-date">
                            <h6>Last Updated: <span>July 21, 2021</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="course-single pt-50 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="course-single-wrapper">

                        <div class="video-area" style="background-image: url({{asset('/')}}website/assets/img/course/video.jpg);">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="video-wrapper">
                                        <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="course-single-tab">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="course-single-tab1" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Description</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="course-single-tab2" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="true">Curriculum</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="course-single-tab3" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="true">Instructor</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="course-single-tab4" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="true">Review</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="course-single-tab1">
                                    <div class="course-single-content">
                                        <div class="course-single-details">
                                            <div class="mb-4">
                                                <h5 class="mb-10">Description</h5>
                                                <p>
                                                    There are many variations of passages of Lorem Ipsum available,
                                                    but the majority have suffered alteration in some form, by
                                                    injected humour, or randomised words which don't look even
                                                    slightly believable. If you are going to use a passage of Lorem
                                                    Ipsum, you need to be sure there isn't anything embarrassing
                                                    hidden in the middle of text. All the Lorem Ipsum generators on
                                                    the Internet tend to repeat predefined chunks as necessary,
                                                    making this the first true generator on the Internet.
                                                </p>
                                            </div>
                                            <div class="mb-4">
                                                <h5 class="mb-10">Course Requirments</h5>
                                                <p>
                                                    All the Lorem Ipsum generators on
                                                    the Internet tend to repeat predefined chunks as necessary,
                                                    making you need to be sure there isn't anything embarrassin this the first true generator on the Internet.
                                                </p>
                                                <ul class="course-single-list">
                                                    <li><i class="far fa-check"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</li>
                                                    <li><i class="far fa-check"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</li>
                                                    <li><i class="far fa-check"></i>Et harum quidem rerum facilis est et expedita distinctio.</li>
                                                    <li><i class="far fa-check"></i>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil.</li>
                                                    <li><i class="far fa-check"></i>Itaque earum rerum hic tenetur a sapiente delectus ut aut.</li>
                                                    <li><i class="far fa-check"></i>Reiciendis voluptatibus maiores alias consequatur aut perferendis.</li>
                                                </ul>
                                            </div>
                                            <div class="mb-4">
                                                <h5 class="mb-10">What You Will Learn</h5>
                                                <p>
                                                    On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those.
                                                </p>
                                                <ul class="course-single-list">
                                                    <li><i class="far fa-check"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</li>
                                                    <li><i class="far fa-check"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</li>
                                                    <li><i class="far fa-check"></i>Et harum quidem rerum facilis est et expedita distinctio.</li>
                                                    <li><i class="far fa-check"></i>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil.</li>
                                                    <li><i class="far fa-check"></i>Itaque earum rerum hic tenetur a sapiente delectus ut aut.</li>
                                                    <li><i class="far fa-check"></i>Reiciendis voluptatibus maiores alias consequatur aut perferendis.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="course-single-tab2">
                                    <div class="course-single-content">
                                        <div class="course-single-curriculum">
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingOne">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                                            Get Started
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="course-curriculum-item curriculum-completed">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-check-circle"></i> <span>Video:</span> Greetings and Introduction</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-unlock"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="course-curriculum-item curriculum-unlock">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-play-circle"></i> <span>Video:</span> Greetings and Introduction</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-unlock"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="course-curriculum-item curriculum-unlock">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-play-circle"></i> <span>Video:</span> Greetings and Introduction</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-unlock"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="course-curriculum-item">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-play-circle"></i> <span>Video:</span> Greetings and Introduction</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-lock"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="course-curriculum-item">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-volume"></i> <span>Audio:</span> Interactive lesson</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-lock"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="course-curriculum-item">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-file-alt"></i> <span>Reading:</span> Web Design & Development</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-lock"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingTwo">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                            Course Project Overview
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="course-curriculum-item curriculum-completed">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-check-circle"></i> <span>Video:</span> Greetings and Introduction</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-unlock"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="course-curriculum-item curriculum-unlock">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-play-circle"></i> <span>Video:</span> Greetings and Introduction</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-unlock"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="course-curriculum-item curriculum-unlock">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-play-circle"></i> <span>Video:</span> Greetings and Introduction</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-unlock"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="course-curriculum-item">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-play-circle"></i> <span>Video:</span> Greetings and Introduction</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-lock"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="course-curriculum-item">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-volume"></i> <span>Audio:</span> Interactive lesson</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-lock"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="course-curriculum-item">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-file-alt"></i> <span>Reading:</span> Web Design & Development</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-lock"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingThree">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                            Development Advance Level
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="course-curriculum-item curriculum-completed">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-check-circle"></i> <span>Video:</span> Greetings and Introduction</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-unlock"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="course-curriculum-item curriculum-unlock">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-play-circle"></i> <span>Video:</span> Greetings and Introduction</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-unlock"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="course-curriculum-item curriculum-unlock">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-play-circle"></i> <span>Video:</span> Greetings and Introduction</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-unlock"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="course-curriculum-item">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-play-circle"></i> <span>Video:</span> Greetings and Introduction</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-lock"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="course-curriculum-item">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-volume"></i> <span>Audio:</span> Interactive lesson</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-lock"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="course-curriculum-item">
                                                                <div class="course-curriculum-left">
                                                                    <h6><i class="fad fa-file-alt"></i> <span>Reading:</span> Web Design & Development</h6>
                                                                </div>
                                                                <div class="course-curriculum-right">
                                                                    <span class="course-curriculum-duration">12:43</span>
                                                                    <span class="course-curriculum-lock"><i class="fad fa-lock"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="course-single-tab3">
                                    <div class="course-single-content">
                                        <div class="course-tab-instructor">
                                            <div class="course-tab-instructor-img">
                                                <img src="{{asset('/')}}website/assets/img/instructor/02.jpg" alt="">
                                            </div>
                                            <div class="course-tab-instructor-content">
                                                <h5>Sara Wood</h5>
                                                <div class="course-tab-instructor-meta">
                                                    <div class="course-tab-instructor-rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span>(4.5)</span>
                                                    </div>
                                                    <span class="course-tab-instructor-course"><i class="fad fa-book-open"></i> 15 Courses</span>
                                                    <span class="course-tab-instructor-enrolled"><i class="fad fa-user-friends"></i> 1.5k Enrolled</span>
                                                </div>
                                                <p>
                                                    There are many variations of passages orem psum available but the majority have suffered alteration in some form, by injected humour.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="course-single-tab4">
                                    <div class="course-single-content">
                                        <div class="instructor-tab-wrapper">
                                            <div class="instructor-review-rating">
                                                <div class="instructor-rating-count">
                                                    <h2>4.5</h2>
                                                    <div class="instructor-rating-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <p>15.5k Students Review</p>
                                                </div>
                                                <div class="instructor-rating-range">
                                                    <div class="instructor-rating-range-item">
                                                        <div class="instructor-rating-range-star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="instructor-rating-range-bar">
                                                            <div class="instructor-progress">
                                                                <div class="instructor-progress-width" style="width: 90%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-rating-range-percentage">
                                                            <span>90%</span>
                                                        </div>
                                                    </div>
                                                    <div class="instructor-rating-range-item">
                                                        <div class="instructor-rating-range-star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <div class="instructor-rating-range-bar">
                                                            <div class="instructor-progress">
                                                                <div class="instructor-progress-width" style="width: 80%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-rating-range-percentage">
                                                            <span>80%</span>
                                                        </div>
                                                    </div>
                                                    <div class="instructor-rating-range-item">
                                                        <div class="instructor-rating-range-star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <div class="instructor-rating-range-bar">
                                                            <div class="instructor-progress">
                                                                <div class="instructor-progress-width" style="width: 59%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-rating-range-percentage">
                                                            <span>59%</span>
                                                        </div>
                                                    </div>
                                                    <div class="instructor-rating-range-item">
                                                        <div class="instructor-rating-range-star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <div class="instructor-rating-range-bar">
                                                            <div class="instructor-progress">
                                                                <div class="instructor-progress-width" style="width: 70%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-rating-range-percentage">
                                                            <span>70%</span>
                                                        </div>
                                                    </div>
                                                    <div class="instructor-rating-range-item">
                                                        <div class="instructor-rating-range-star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <div class="instructor-rating-range-bar">
                                                            <div class="instructor-progress">
                                                                <div class="instructor-progress-width" style="width: 49%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-rating-range-percentage">
                                                            <span>49%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="instructor-review">
                                                <h5>Reviews (1,500)</h5>
                                                <div class="instructor-review-item">
                                                    <div class="instructor-review-author">
                                                        <img src="{{asset('/')}}website/assets/img/instructor/rev-1.png" alt="">
                                                        <div class="instructor-review-author-info">
                                                            <div>
                                                                <h6>Erich T. Genao</h6>
                                                                <span><i class="far fa-clock"></i> 1 day ago</span>
                                                            </div>
                                                            <div class="instructor-review-author-rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.
                                                    </p>
                                                </div>
                                                <div class="instructor-review-item">
                                                    <div class="instructor-review-author">
                                                        <img src="{{asset('/')}}website/assets/img/instructor/rev-2.png" alt="">
                                                        <div class="instructor-review-author-info">
                                                            <div>
                                                                <h6>Erich T. Genao</h6>
                                                                <span><i class="far fa-clock"></i> 1 day ago</span>
                                                            </div>
                                                            <div class="instructor-review-author-rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.
                                                    </p>
                                                </div>
                                                <div class="instructor-review-item">
                                                    <div class="instructor-review-author">
                                                        <img src="{{asset('/')}}website/assets/img/instructor/rev-1.png" alt="">
                                                        <div class="instructor-review-author-info">
                                                            <div>
                                                                <h6>Erich T. Genao</h6>
                                                                <span><i class="far fa-clock"></i> 1 day ago</span>
                                                            </div>
                                                            <div class="instructor-review-author-rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.
                                                    </p>
                                                </div>
                                                <div class="text-center mt-5">
                                                    <a href="#" class="theme-btn"> <span class="far fa-sync-alt"></span> Load More</a>
                                                </div>
                                            </div>
                                            <div class="instructor-review-form">
                                                <h5>Leave A Review</h5>
                                                <form action="#">
                                                    <div class="form-group">
                                                        <label>Your Rating</label>
                                                        <div class="instructor-review-form-star">
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Your Review</label>
                                                        <textarea class="form-control" cols="30" rows="5" placeholder="Write your review"></textarea>
                                                    </div>
                                                    <button class="theme-btn" type="button">Post Your Review</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="course-single-sidebar">
                        <div class="course-single-sidebar-wrapper">
                            <div class="course-single-price-wrapper">
                                <div class="course-single-price">
                                    <span>$120</span><del>$150</del>
                                </div>
                                <span class="course-single-price-off">35% Off</span>
                            </div>
                            <a href="#" class="theme-btn"> <span class="far fa-shopping-cart"></span> Add To
                                Cart</a>
                            <div class="course-single-more-info">
                                <ul>
                                    <li><i class="fad fa-user"></i> Instructor: <span>Sara Wood</span></li>
                                    <li><i class="fad fa-layer-group"></i> Level : <span>Expert</span></li>
                                    <li><i class="fad fa-book"></i> Lectures : <span>35 Lectures</span></li>
                                    <li><i class="fad fa-clock"></i> Duration: <span>03 Months</span></li>
                                    <li><i class="fad fa-user-friends"></i> Enrolled: <span>259 Students</span></li>
                                    <li><i class="fad fa-globe"></i> Language: <span>English</span></li>
                                </ul>
                            </div>
                            <div class="course-single-include">
                                <h5>Course Includes</h5>
                                <ul>
                                    <li><i class="fad fa-check-circle"></i> Full Lifetime Access</li>
                                    <li><i class="fad fa-check-circle"></i> 35+ Downloadable Resources</li>
                                    <li><i class="fad fa-check-circle"></i> Certificate Of Completion</li>
                                    <li><i class="fad fa-check-circle"></i> Free Trial 7 Days</li>
                                    <li><i class="fad fa-check-circle"></i> 15 Days Money Back Guarantee</li>
                                </ul>
                            </div>
                            <div class="course-single-share">
                                <h5>Social Share</h5>
                                <div class="course-single-share-link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="course-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <h2 class="site-title mb-2">Related <span>Courses</span></h2>
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
                            <a href="#"><h4 class="course-title">Advance PHP Knowledge and learn Laravel framework</h4></a>
                            <div class="course-info">
                                <ul>
                                    <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                    <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                    <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled</li>
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
                            <a href="#"><h4 class="course-title">Full Web Designing Course With 20 Web Template Designing</h4></a>
                            <div class="course-info">
                                <ul>
                                    <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                    <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                    <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled</li>
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
                            <a href="#"><h4 class="course-title">Basic Knowledge About the UI/UX Design Pattern</h4></a>
                            <div class="course-info">
                                <ul>
                                    <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                    <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                    <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled</li>
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
            </div>
        </div>
    </div>


@endsection

