@extends('layouts.master')

@section('middle-content')

<!-- banner-text -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner text-right">
        <div class="carousel-item b1 active">
            <div class="container banner-info-w3-agile">
                <h3>Services to Grow Your Business</h3>
                <p class="mt-lg-4 mt-md-3 mt-2 p-2 pl-4">Creativity & Experience</p>
            </div>
        </div>
        <div class="carousel-item b2">
            <div class="container banner-info-w3-agile">
                <h3>Various Options for Your Benefit</h3>
                <p class="mt-lg-4 mt-md-3 mt-2 p-2 pl-4">Creativity & Experience</p>
            </div>
        </div>
        <div class="carousel-item b3">
            <div class="container banner-info-w3-agile">
                <h3>Enhancing Your Brand’s Appeal</h3>
                <p class="mt-lg-4 mt-md-3 mt-2 p-2 pl-4">Creativity & Experience</p>
            </div>
        </div>
        <div class="carousel-item b4">
            <div class="container banner-info-w3-agile">
                <h3>Converting Concepts into Reality</h3>
                <p class="mt-lg-4 mt-md-3 mt-2 p-2 pl-4">Creativity & Experience</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</section>
<!-- //banner -->
<!--about-->
<!--about-->
<section class="banner-btm-section py-5" id="about">
    <div class="container py-xl-5 py-sm-3">
        <h5 class="main-w3l-title mb-sm-4 mb-3">Our Strategy</h5>
        <div class="srategy-text mb-5">
            <p class="paragraph-agileinfo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis tristique est, et egestas odio. Mauris ac tristique
                arcu, sed interdum risus.Integer quis tristique est, et egestas odio. Mauris ac tristique arcu, sed interdum risus.
            </p>
        </div>
        <div class="bnr-btm-main row justify-content-around">
            <div class="col-lg-4 banner-btm-grids">
                <div class="bnr-btm-info bb1 p-4">
                    <i class="fab fa-gg text-white mb-3 ml-3"></i>
                    <h3 class="subheading-wthree mb-md-4 mb-3">Personal Branding</h3>
                    <p class="paragraph-agileinfo text-white">Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.</p>
                    <span>1</span>
                </div>
            </div>
            <div class="col-lg-4 banner-btm-grids my-lg-0 my-4">
                <div class="bnr-btm-info bb2 p-4">
                    <i class="fab fa-hubspot text-white mb-3 ml-3"></i>
                    <h3 class="subheading-wthree mb-md-4 mb-3">Business Consulting</h3>
                    <p class="paragraph-agileinfo text-white">Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.</p>
                    <span>2</span>
                </div>
            </div>
            <div class="col-lg-4 banner-btm-grids">
                <div class="bnr-btm-info bb3 p-4">
                    <i class="fab fa-connectdevelop text-white mb-3 ml-3"></i>
                    <h3 class="subheading-wthree mb-md-4 mb-3">Online Marketing</h3>
                    <p class="paragraph-agileinfo text-white">Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.</p>
                    <span>3</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//about-->
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
<!-- services -->
<section class="services-section py-5">
    <div class="container py-xl-5 py-sm-3">
        <h5 class="main-w3l-title mb-sm-4 mb-3">How we work</h5>
        <div class="services-grids row">
            <div class="col-lg-4 services-info-agileits p-lg-4 p-3 text-left">
                <img src="{{asset('images/h1.jpg')}}" class="img-fluid mb-3" alt="Responsive image">
                <h3 class="subheading-wthree mb-md-4 mb-3">Present the Concept</h3>
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
                <h3 class="subheading-wthree mb-md-4 mb-3">Implement Creative Ideas</h3>
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
                <img src="{{asset('images/h2.jpg')}}" class="img-fluid mt-3" alt="Responsive image">
            </div>
            <div class="col-lg-4 services-info-agileits p-lg-4 p-3 text-right">
                <img src="{{asset('images/h3.jpg')}}" class="img-fluid mb-3" alt="Responsive image">
                <h3 class="subheading-wthree mb-md-4 mb-3">Achieve the Desired Results</h3>
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
<!--subscribe-->
<section class="subscribe-section py-5">
    <div class="container py-xl-5 py-sm-3">
        <h5 class="main-w3l-title mb-sm-4 mb-3 text-white">Get the Latest News</h5>
        <p class="paragraph-agileinfo text-white mb-3">Subscribe to our newsletter to receive updates from us.</p>
        <form action="#" method="post" class="d-sm-flex">
            <div class="form-group">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required="">
            </div>
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
    </div>
</section>
<!--//subscribe-->
<!-- Testimonials -->
<section class="reviews_sec py-5">
    <div class="container py-xl-5 py-sm-3">
        <h5 class="main-w3l-title mb-sm-4 mb-3">Happy Clients</h5>
        <div class="inner-sec-w3layouts-agileinfo">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="testimonials_grid row no-gutters align-items-center">
                                <div class="col-md-4 testimonials_grid-inn">
                                    <img src="{{asset('images/s1.jpg')}}" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="col-md-8 p-4 client-info">
                                    <h5 class="test-name">Emily Smith</h5>
                                    <span class="mt-2 mb-3">Lorem Ipsum</span>
                                    <p class="paragraph-agileinfo text-white">Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
                                        Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonials_grid row no-gutters align-items-center">
                                <div class="col-md-4 testimonials_grid-inn">
                                    <img src="{{asset('images/s2.jpg')}}" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="col-md-8 p-4 client-info">
                                    <h5 class="test-name">Matthew Scott</h5>
                                    <span class="mt-2 mb-3">Lorem Ipsum</span>
                                    <p class="paragraph-agileinfo text-white">Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
                                        Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonials_grid row no-gutters align-items-center">
                                <div class="col-md-4 testimonials_grid-inn">
                                    <img src="{{asset('')}}images/s3.jpg" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="col-md-8 p-4 client-info">
                                    <h5 class="test-name">Jennifer Lee</h5>
                                    <h6 class="mt-2 mb-3">Lorem Ipsum
                                        <span class="client-date"></span>
                                    </h6>
                                    <p class="paragraph-agileinfo text-white">Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
                                        Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</section>

<!-- Testimonials -->
@endsection

