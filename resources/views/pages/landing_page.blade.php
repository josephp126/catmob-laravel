@extends('layouts.app')

@section('pageUrl')
<ul class="nav-menu">
    <li class="menu-item-has-children current-menu-item"> <a href="/">Home</a>
    </li>
    <li><a href="/properties">Properties</a> </li>
    <li><a href="/profit">Profit from Airbnb</a> </li>
    <li><a href="/courses">Courses</a> </li>
    <li><a href="/contact">Contact</a> </li>
</ul>
@endsection

@section('mainContent')
<div class="main-content">
    <div id="sc-banner" class="sc-banner home-banner-bg position-relative ">
        <div class="container" style = "max-width: 1600px;">
            <div class="row">
                <div class="col-sm-6">
                    <div class="banner-content mt-30" style = "padding-bottom: 100px !important">
                        <h1 class="banner-title mb-15 wow fadeInUp white-color" data-wow-delay="300ms"
                            data-wow-duration="2500ms">Fully Furnished <br>Luxury Apartments</h1>
                        <h5 class="banner-des mb-35 wow fadeInUp white-color" data-wow-delay="300ms"
                            data-wow-duration="3000ms">
                        </h5>
                    </div>
                </div>
                <div class="col-sm-6  hidden-md">
                    <div class="banner-img " data-wow-delay="300ms"
                        data-wow-duration="2000ms">
                        
                    </div>
                    <div class="animate-circle"></div>
                </div>
            </div>
        </div>
        <div class="animated-arrow-1 animated-arrow left-right-new">
            <img src="{{asset('assets/images/banner/arrow-1.png')}}" alt="">
        </div>
        <div class="animated-arrow-2 animated-arrow up-down-new">
            <img src="{{asset('assets/images/banner/arrow-2.png')}}" alt="">
        </div>

        <div class="animated-arrow-3 animated-arrow up-down-new">
            <img src="{{asset('assets/images/banner/arrow-3.png')}}" alt="">
        </div>
        <div class="animated-arrow-4 animated-arrow left-right-new">
            <img src="{{asset('assets/images/banner/arrow-4.png')}}" alt="">
        </div>
        <div class="animated-arrow-5 animated-arrow up-down-new">
            <img src="{{asset('assets/images/banner/arrow-5.png')}}" alt="">
        </div>
    </div>
    <div id="sc-popular-courses" class="sc-popular-courses main-home pt-50 pb-90 md-pt-70 md-pb-50">
        <div class="container">
            <div class="row align-items-center mb-15 md-mb-10">
                <div class="col-md-12">
                    <div class="sec-title" align="center">
                        <h2 class="title mb-0">Our Properties</h2>
                    </div>
                </div>
            </div>
            <div class="sc-carousel owl-carousel nav-style1" data-loop="true" data-items="3" data-margin="0"
                data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false"
                data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                <div class="courses-item">
                    <div class="courses-grid">
                        <div class="img-part">
                            <a href="#"><a href="#"><img src="{{asset('assets/images/courses/1.jpg')}}" alt=""></a></a>
                            <div class="course-price">
                            </div>
                        </div>
                        <div class="content-part">

                            <h3 class="title"><a href="course-single.html">Spacious Apartment</a></h3>
                            <div class="des">
                            </div>
                            <div class="bottom-part">
                                <div class="btn-part">
                                    <a href="/properties"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="courses-item">
                    <div class="courses-grid">
                        <div class="img-part">
                            <a href="#"><a href="#"><img src="{{asset('assets/images/courses/2.jpg')}}" alt=""></a></a>
                            <div class="course-price">
                            </div>
                        </div>
                        <div class="content-part">

                            <h3 class="title"><a href="course-single.html">Fast Wifi</a></h3>
                            <div class="des">
                            </div>
                            <div class="bottom-part">
                                <div class="btn-part">
                                    <a href="/properties"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="courses-item">
                    <div class="courses-grid">
                        <div class="img-part">
                            <a href="#"><img src="{{asset('assets/images/courses/3.jpg')}}" alt=""></a>
                            <div class="course-price">
                            </div>
                        </div>
                        <div class="content-part">

                            <h3 class="title"><a href="#">Full Kitchens</a></h3>
                            <div class="des">
                            </div>
                            <div class="bottom-part">
                                <div class="btn-part">
                                    <a href="/properties"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="courses-item">
                    <div class="courses-grid">
                        <div class="img-part">
                            <a href="course-single.html"><img src="{{asset('assets/images/courses/4.jpg')}}" alt=""></a>
                            <div class="course-price">
                            </div>
                        </div>
                        <div class="content-part">

                            <h3 class="title"><a href="course-single.html">Comfortable Bedding</a></h3>
                            <div class="des">
                            </div>
                            <div class="bottom-part">
                                <div class="btn-part">
                                    <a href="/properties"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection