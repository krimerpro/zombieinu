@extends('layouts.default')
@section('content')

<!-- Feature-section -->
<div class="feature-section pb-70 section-to-header">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 pb-30">
                    <div class="feature-card">
                        <div class="feature-card-header">
                            <div class="feature-card-thumb feature-card-thumb-green">
                                <i class="flaticon-machine-learning-1"></i>
                            </div>
                            <span>Low Tax</span>
                        </div>
                        <div class="feature-card-body">
                            <p>4% Tax Buy & Sell</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 pb-30">
                    <div class="feature-card">
                        <div class="feature-card-header">
                            <div class="feature-card-thumb feature-card-thumb-yellow">
                                <i class="flaticon-voice-recognition"></i>
                            </div>
                            <span>Anti Whale & Dump</span>
                        </div>
                        <div class="feature-card-body">
                            <p>4% Max Wallet & Transaction</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 pb-30">
                    <div class="feature-card">
                        <div class="feature-card-header">
                            <div class="feature-card-thumb feature-card-thumb-blue">
                                <i class="flaticon-machine-learning"></i>
                            </div>
                            <span>Low of Supply</span>
                        </div>
                        <div class="feature-card-body">
                            <p>50.000.000 $Erudex Tokens</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 pb-30">
                    <div class="feature-card">
                        <div class="feature-card-header">
                            <div class="feature-card-thumb feature-card-thumb-violet">
                                <i class="flaticon-processor"></i>
                            </div>
                            <span>Initial Liquidity</span>
                        </div>
                        <div class="feature-card-body">
                            <p>2 BNB for Liquidity</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature-section -->
<!-- About-section -->
<section class="about-section bg-off-white pt-100 pb-70" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-30">
                <div class="about-section-item about-item-image text-center">
                    <img src="{{ asset('images/feature-shape/feature-shape-1.png') }}" alt="shape">
                </div>
            </div>
            <div class="col-lg-6 pb-30">
                <div class="about-section-item about-item-details">
                    <div class="section-title section-title-left text-start">
                        <small>About Us</small>
                        <h2>Mission Is To Bring The Power Of Erudex AI To Every Business</h2>
                    </div>
                    <div class="about-content">
                        <ul>
                            <li>Advance Advisory Team</li>
                            <li>Advance Quality Experts</li>
                            <li>Many variations of passages</li>
                            <li>High-Quality Results</li>
                        </ul>
                        <a href="#" class="btn main-btn">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-section -->
<!-- Service-section -->
<section class="service-section pt-100 pb-70" id="services">
    <div class="container">
        <div class="section-title section-title-lg">
            <small>Services</small>
            <h2>Our Purpose Is To Deliver Excellence <br> In Service And Execution</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 pb-30">
                <div class="service-card">
                    <div class="service-card-thumb">
                        <i class="flaticon-automation"></i>
                    </div>
                    <div class="service-card-body">
                        <h3>Robotic Automation</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 pb-30">
                <div class="service-card">
                    <div class="service-card-thumb">
                        <i class="flaticon-predictive-chart"></i>
                    </div>
                    <div class="service-card-body">
                        <h3>Predictive Analytics</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 pb-30">
                <div class="service-card">
                    <div class="service-card-thumb">
                        <i class="flaticon-deep-learning"></i>
                    </div>
                    <div class="service-card-body">
                        <h3>Deep Learning</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 pb-30">
                <div class="service-card">
                    <div class="service-card-thumb">
                        <i class="flaticon-data-mining"></i>
                    </div>
                    <div class="service-card-body">
                        <h3>Data Mining</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 pb-30">
                <div class="service-card">
                    <div class="service-card-thumb">
                        <i class="flaticon-diagram"></i>
                    </div>
                    <div class="service-card-body">
                        <h3>Statistical Modeling</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 pb-30">
                <div class="service-card">
                    <div class="service-card-thumb">
                        <i class="flaticon-machine-learning-2"></i>
                    </div>
                    <div class="service-card-body">
                        <h3>Security & Surveillance</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service-section -->
<!-- Choose-section -->
<section class="choose-section pt-100 pb-70 bg-off-white">
    <div class="container">
        <div class="section-title">
            <small>Why Choose Us</small>
            <h2>Why People Choose Erudex For ML Services</h2>
        </div>
        <div class="process-content">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 pb-30">
                    <div class="process-item process-item-center border">
                        <div class="process-thumb">
                            <img src="{{ asset('images/process/process-four.png') }}" alt="shape">
                        </div>
                        <div class="process-text">
                            <h3>Easy Model Building</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 pb-30">
                    <div class="process-item process-item-center border">
                        <div class="process-thumb">
                            <img src="{{ asset('images/process/process-five.png') }}" alt="shape">
                        </div>
                        <div class="process-text">
                            <h3>Robust ML Production Anywhere</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 pb-30">
                    <div class="process-item process-item-center border">
                        <div class="process-thumb">
                            <img src="{{ asset('images/process/process-six.png') }}" alt="shape">
                        </div>
                        <div class="process-text">
                            <h3>Powerful Experimentation</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Choose-section -->

<!-- Project-section -->
<section class="project-section pt-min-100 pb-100 bg-off-white" id="projects">
    <div class="container">
        <div class="section-title section-title-lg">
            <h2>Erudex's Projects In Different Domain Of Industry</h2>
            <p>Our purpose is to deliver excellence in service and execution Our purpose is to deliver excellence in service and Our purpose is to deliver excellence in service.</p>
        </div>
    </div>
    <div class="container-fluid p-md-0">
        <div class="project-carousel owl-carousel owl-theme default-carousel">
            <div class="item">
                <div class="project-flat-card">
                    <div class="project-flat-thumb">
                        <a href="#">
                            <img src="{{ asset('images/cases/case-lg-1.jpg') }}" alt="project">
                        </a>
                    </div>
                    <div class="project-flat-text">
                        <h3><a href="#">Drone And Robot Training</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-flat-card">
                    <div class="project-flat-thumb">
                        <a href="#">
                            <img src="{{ asset('images/cases/case-lg-3.jpg') }}" alt="project">
                        </a>
                    </div>
                    <div class="project-flat-text">
                        <h3><a href="#">Data Mining Revolution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-flat-card">
                    <div class="project-flat-thumb">
                        <a href="#">
                            <img src="{{ asset('images/cases/case-lg-2.jpg') }}" alt="project">
                        </a>
                    </div>
                    <div class="project-flat-text">
                        <h3><a href="#">Automatic Project Management</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Project-section -->

<!-- News-section -->
<section class="news-section pt-min-100 pb-70" id="news">
    <div class="container">
        <div class="section-title section-title-lg">
            <h2>Upcoming News on Erudex AI</h2>
            <p>Our purpose is to deliver excellence in service and execution Our purpose is to deliver excellence in service and Our purpose is to deliver excellence.</p>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 pb-30">
                <div class="blog-card">
                    <div class="blog-card-image">
                        <a href="#">
                            <img src="{{ asset('images/blogs/blog-1.jpg') }}" alt="blog">
                        </a>
                    </div>
                    <div class="blog-card-text">
                        <div class="blog-category">Technology</div>
                        <h3><a href="#">Is Machine Learning Right Going On Good Way</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 pb-30">
                <div class="blog-card">
                    <div class="blog-card-image">
                        <a href="#">
                            <img src="{{ asset('images/blogs/blog-2.jpg') }}" alt="blog">
                        </a>
                    </div>
                    <div class="blog-card-text">
                        <div class="blog-category">Robot</div>
                        <h3><a href="#">The Current State Of Artificial Intelligence Infographic</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 offset-md-3 offset-lg-0 pb-30">
                <div class="blog-card">
                    <div class="blog-card-image">
                        <a href="single-blog.html">
                            <img src="{{ asset('images/blogs/blog-3.jpg') }}" alt="blog">
                        </a>
                    </div>
                    <div class="blog-card-text">
                        <div class="blog-category">Machine</div>
                        <h3><a href="#">Our Company As A Global Leader In Big Data</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News-section -->
<!-- Newsletter-section -->
<section class="newsletter-section pt-min-100 pb-100 page-bg page-bg-2 page-bg-overlay">
    <div class="container position-relative">
        <div class="section-title section-title-white">
            <h2>Subscribe For Erudex's Newsletter</h2>
            <p>Subscribe to our newsletter & stay updated</p>
        </div>
        <form class="newsletter-form">
            <div class="form-group m-0 newsletter-form">
                <input type="text" name="EMAIL" id="emails" class="form-control" placeholder="Enter Address*" required>
                <button class="btn main-btn" type="submit">Subscribe</button>
            </div>
            <div id="validator-newsletter" class="form-result"></div>
        </form>
    </div>
</section>
<!-- Newsletter-section -->
@stop
