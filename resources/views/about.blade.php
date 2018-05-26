@extends('layouts.master')

@section('middle-content')

<section class="banner b1 inner-banner" id="home">
<!-- //header -->
<div class="container">
    <h3 class="inner-title">About</h3>
</div>
</section>
<!-- //banner -->
<!-- breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">About</li>
    </ol>
</nav>
<!-- //breadcrumb -->
<!--about-->
<section class="about-section py-5">
    <div class="container py-xl-5 py-sm-3">
        <h5 class="main-w3l-title mb-sm-4 mb-3">About Us</h5>
        <p class="paragraph-agileinfo">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo
            cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        <div class="row mt-xl-5 mt-4">
            <div class="col-md-6 bb1 about-left p-md-5 p-4">
                <h3 class="subheading-wthree mb-md-4 mb-3">Implement Creative Ideas</h3>
                <p class="paragraph-agileinfo text-white">Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin
                    eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
            </div>
            <div class="col-md-6 bb2 about-left p-md-5 p-4">
                <h3 class="subheading-wthree mb-md-4 mb-3">Ensuring Customer Success.</h3>
                <p class="paragraph-agileinfo text-white">Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin
                    eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
            </div>
        </div>
    </div>
</section>
<!--//about-->
<!-- services -->
<section class="services-section inner-services py-5">
    <div class="container py-xl-5 py-sm-3">
        <h5 class="main-w3l-title text-white mb-sm-4 mb-3">How we work</h5>
        <div class="services-grids row">
            <div class="col-lg-4 services-info-agileits p-lg-4 p-3 text-left">
                <img src="images/h1.jpg" class="img-fluid mb-3" alt="Responsive image">
                <h3 class="subheading-wthree text-white mb-md-4 mb-3">Present the Concept</h3>
                <ul>
                    <li class="mt-sm-2 mt-1 p-2">
                        <span class="fas fa-caret-right mr-2" aria-hidden="true"></span>Vel scelerisque</li>
                    <li class="mt-sm-2 mt-1 p-2">
                        <span class="fas fa-caret-right mr-2" aria-hidden="true"></span>Donec ullamcorper</li>
                    <li class="mt-sm-2 mt-1 p-2">
                        <span class="fas fa-caret-right mr-2" aria-hidden="true"></span>Fusce dapibus</li>
                    <li class="mt-sm-2 mt-1 p-2">
                        <span class="fas fa-caret-right mr-2" aria-hidden="true"></span>Vestibulum id</li>
                </ul>
            </div>
            <div class="col-lg-4 services-info-agileits p-lg-4 p-3 text-center">
                <h3 class="subheading-wthree text-white mb-md-4 mb-3">Implement Creative Ideas</h3>
                <ul>
                    <li class="mt-sm-2 mt-1 p-2">
                        <span class="fas fa-caret-right mr-2" aria-hidden="true"></span>Donec ullamcorper</li>
                    <li class="mt-sm-2 mt-1 p-2">
                        <span class="fas fa-caret-right  mr-2" aria-hidden="true"></span>Vestibulum id</li>
                    <li class="mt-sm-2 mt-1 p-2">
                        <span class="fas fa-caret-right  mr-2" aria-hidden="true"></span>Fusce dapibus</li>
                    <li class="mt-sm-2 mt-1 p-2">
                        <span class="fas fa-caret-right  mr-2" aria-hidden="true"></span>Vel scelerisque</li>
                </ul>
                <img src="images/h2.jpg" class="img-fluid mt-3" alt="Responsive image">
            </div>
            <div class="col-lg-4 services-info-agileits p-lg-4 p-3 text-right">
                <img src="images/h3.jpg" class="img-fluid mb-3" alt="Responsive image">
                <h3 class="subheading-wthree text-white mb-md-4 mb-3">Achieve the Desired Results</h3>
                <ul>
                    <li class="mt-sm-2 mt-1 p-2">
                        Fusce dapibusc
                        <span class="fas fa-caret-left ml-2" aria-hidden="true"></span>
                    </li>
                    <li class="mt-sm-2 mt-1 p-2">
                        Vel scelerisque
                        <span class="fas fa-caret-left ml-2" aria-hidden="true"></span>
                    </li>
                    <li class="mt-sm-2 mt-1 p-2">
                        Donec ullamcorper
                        <span class="fas fa-caret-left ml-2" aria-hidden="true"></span>
                    </li>
                    <li class="mt-sm-2 mt-1 p-2">
                        Vestibulum id
                        <span class="fas fa-caret-left ml-2" aria-hidden="true"></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- //services -->
<!-- Pricing -->
<section class="pricing-section py-5">
    <div class="container py-xl-5 py-sm-3">
        <h5 class="main-w3l-title mb-sm-4 mb-3">Our Pricing</h5>
        <div class="card-deck text-center row">
            <div class="card box-shadow col-lg-4">
                <div class="card-header">
                    <h4 class="py-md-4 py-3">Startup</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title pricing-card-title">
                        <span class="align-top">$</span>25
                        <small class="text-muted">/ month</small>
                    </h5>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li class="py-2 border-bottom">Advertising</li>
                        <li class="py-2 border-bottom">Branding Services</li>
                        <li class="py-2 border-bottom">Online Marketing</li>
                        <li class="py-2">Creative Marketing</li>
                    </ul>
                    <button type="button" class="btn btn-block btn-outline-primary py-2" data-toggle="modal" data-target="#exampleModal3">Get Started</button>
                </div>
            </div>
            <div class="card box-shadow col-lg-4 my-lg-0 my-3">
                <div class="card-header">
                    <h4 class="py-md-4 py-3">Standard</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title pricing-card-title">
                        <span class="align-top">$</span>59
                        <small class="text-muted">/ month</small>
                    </h5>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li class="py-2 border-bottom">Advertising</li>
                        <li class="py-2 border-bottom">Branding Services</li>
                        <li class="py-2 border-bottom">Online Marketing</li>
                        <li class="py-2">Creative Marketing</li>
                    </ul>
                    <button type="button" class="btn btn-block btn-outline-primary py-2" data-toggle="modal" data-target="#exampleModal3">Get Started</button>
                </div>
            </div>
            <div class="card box-shadow col-lg-4">
                <div class="card-header">
                    <h4 class="py-md-4 py-3">Premium</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title pricing-card-title">
                        <span class="align-top">$</span>90
                        <small class="text-muted">/ month</small>
                    </h5>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li class="py-2 border-bottom">Advertising</li>
                        <li class="py-2 border-bottom">Branding Services</li>
                        <li class="py-2 border-bottom">Online Marketing</li>
                        <li class="py-2">Creative Marketing</li>
                    </ul>
                    <button type="button" class="btn btn-block btn-outline-primary py-2" data-toggle="modal" data-target="#exampleModal3">Get Started</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //pricing -->
<!-- stats -->
<section class="stats py-5">
    <div class="container py-xl-5 py-sm-3">
        <h5 class="main-w3l-title mb-sm-4 mb-3 text-white">Our Stats</h5>
        <div class="row stats_inner">
            <div class="col-lg-3 col-sm-6 stat-grids">
                <i class="fas fa-chart-line"></i>
                <p class="counter">2,879</p>
                <div class="stats-text">
                    <h3 class="text-white">Projects Done</h3>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 stat-grids mt-sm-0 mt-4">
                <i class="fas fa-user"></i>
                <p class="counter">350</p>
                <div class="stats-text">
                    <h3 class="text-white">Team</h3>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 stat-grids mt-lg-0 mt-4">
                <i class="fas fa-thumbs-up"></i>
                <p class="counter">1995</p>
                <div class="stats-text">
                    <h3 class="text-white">Excellent works</h3>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 stat-grids mt-lg-0 mt-4">
                <i class="fas fa-users"></i>
                <p class="counter">1,546</p>
                <div class="stats-text">
                    <h3 class="text-white">Clients</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->
<!-- Team -->
<section class="team-section py-5">
    <div class="container py-xl-5 py-sm-3">
        <h5 class="main-w3l-title mb-sm-4 mb-3">About Our Team</h5>
        <div class="row">
            <div class="col-lg-3 col-md-6 grid_info">
                <img src="images/s1.jpg" class="img-fluid" alt="Responsive image">
                <div class="team_info p-3">
                    <h5>Carl Palmer</h5>
                    <span class="mt-1 mb-2">Director</span>
                    <ul class="social_list_wthree">
                        <li>
                            <a href="#" class="facebook1 text-center">
                                <i class="fab fa-facebook-f"></i>

                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter2 text-center">
                                <i class="fab fa-twitter"></i>

                            </a>
                        </li>
                        <li>
                            <a href="#" class="dribble3 text-center">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grid_info second">
                <img src="images/s2.jpg" class="img-fluid" alt="Responsive image">
                <div class="team_info p-3">
                    <h5>Andrew Hughes</h5>
                    <span class="mt-1 mb-2">CEO</span>
                    <ul class="social_list_wthree">
                        <li>
                            <a href="#" class="facebook1 text-center">
                                <i class="fab fa-facebook-f"></i>

                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter2 text-center">
                                <i class="fab fa-twitter"></i>

                            </a>
                        </li>
                        <li>
                            <a href="#" class="dribble3 text-center">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grid_info">
                <img src="images/s3.jpg" class="img-fluid" alt="Responsive image">
                <div class="team_info p-3">
                    <h5>Mariah Cambel</h5>
                    <span class="mt-1 mb-2">Project Manager</span>
                    <ul class="social_list_wthree">
                        <li>
                            <a href="#" class="facebook1 text-center">
                                <i class="fab fa-facebook-f"></i>

                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter2 text-center">
                                <i class="fab fa-twitter"></i>

                            </a>
                        </li>
                        <li>
                            <a href="#" class="dribble3 text-center">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grid_info second">
                <img src="images/s1.jpg" class="img-fluid" alt="Responsive image">
                <div class="team_info p-3">
                    <h5>Roger Cooper</h5>
                    <span class="mt-1 mb-2">HR Manager</span>
                    <ul class="social_list_wthree">
                        <li>
                            <a href="#" class="facebook1 text-center">
                                <i class="fab fa-facebook-f"></i>

                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter2 text-center">
                                <i class="fab fa-twitter"></i>

                            </a>
                        </li>
                        <li>
                            <a href="#" class="dribble3 text-center">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</section>
<!--// Team -->

@endsection