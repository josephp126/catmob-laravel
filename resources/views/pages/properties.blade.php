@extends('layouts.app')

@section('custom_css')
<link rel="stylesheet" href="assets/css/gallery-style.css">
<link rel="stylesheet" href="assets/css/gallery-demo.css" />
@endsection

@section('pageUrl')
<ul class="nav-menu">
    <li><a href="/">Home</a></li>
    <li class="menu-item-has-children current-menu-item"><a href="/properties">Properties</a> </li>
    <li><a href="/profit">Profit from Airbnb</a> </li>
    <li><a href="/courses">Courses</a> </li>
    <li><a href="/contact">Contact</a> </li>
</ul>
@endsection

@section('mainContent')
<div class="main-content">
    <div id="sc-banner" class="sc-banner properties-banner-bg position-relative ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-content">
                    </div>
                </div>
                <div class="col-lg-6  hidden-md">
                    <div class="banner-img animation-shape hidden-sm wow fadeInRight" data-wow-delay="300ms"
                        data-wow-duration="2000ms">
                        <div style="margin-bottom: 200px; margin-right: 50px;">   
                            <h1 class="banner-title mb-15 wow fadeInUp white-red" data-wow-delay="300ms"
                                data-wow-duration="2500ms">Furnished Apartments</h1>
                            <h4 class="banner-des mb-35 wow fadeInUp white-red" data-wow-delay="300ms"
                                data-wow-duration="3000ms">
                            
                            </h4>
                        </div>
                    </div>
                    <div class="animate-circle"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sc-popular-courses" class="sc-popular-courses main-home pt-50 pb-90 md-pt-70 md-pb-50" style="background-color: white">
        <div class="container pr-50 pl-50" style="max-width: 100% !important;">
            <div class="row align-items-center m-auto" style="margin-bottom: 30px !important">
                <div class="col-md-12">
                    <div class="sec-title" align="center">
                        <h1 class="title mb-0">Check out our Properties</h1>
                    </div>
                </div>
            </div>
            <div class="row col-xs-12 mb-30" style = "width: 100%">
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        
                        <span id="target-1"></span>
                        <span id="target-2"></span>
                        
                        <div class="slideshow-item item-1">
                            <a href="https://www.airbnb.com/rooms/49441199?source_impression_id=p3_1626702742_u2dH5%2FQ3C9d3QZac" style="cursor:pointer">
                                <img src="{{asset('assets/images/apartments/1.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href="https://www.airbnb.com/rooms/49441199?source_impression_id=p3_1626702742_u2dH5%2FQ3C9d3QZac" style="cursor:pointer">
                                <img src="{{asset('assets/images/apartments/2.jpg')}}" alt="" />
                            </a>  
                        </div>
                    </div>
                </div>
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        <span id="targe-1"></span>
                        <span id="targe-2"></span>

                        <div class="slideshow-item item-1">
                            <a href="https://www.airbnb.com/rooms/49335229?source_impression_id=p3_1626702742_Igqi3NTupKlsXTZN" style="cursor:pointer">
                                <img src="{{asset('assets/images/apartments/4.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href="https://www.airbnb.com/rooms/49335229?source_impression_id=p3_1626702742_Igqi3NTupKlsXTZN" style="cursor:pointer">
                                <img src="{{asset('assets/images/apartments/5.jpg')}}" alt="" />
                            </a>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-xs-12 mb-30" style = "width: 100%">
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        <span id="target-1"></span>
                        <span id="target-2"></span>

                        <div class="slideshow-item item-1">
                            <a href = "https://www.airbnb.com/rooms/47923609?source_impression_id=p3_1626702743_%2FMK7x7sOcJxMf9mf" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/5.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href = "https://www.airbnb.com/rooms/47923609?source_impression_id=p3_1626702743_%2FMK7x7sOcJxMf9mf" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/6.jpg')}}" alt="" />
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        <span id="target-1"></span>
                        <span id="target-2"></span>

                        <div class="slideshow-item item-1">
                            <a href = "https://www.airbnb.com/rooms/50400707?source_impression_id=p3_1626702744_yAt%2BgUaZnkOOTdxl" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/7.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href = "https://www.airbnb.com/rooms/50400707?source_impression_id=p3_1626702744_yAt%2BgUaZnkOOTdxl" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/8.jpg')}}" alt="" />
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-xs-12 mb-30" style = "width: 100%">
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        <span id="target-1"></span>
                        <span id="target-2"></span>

                        <div class="slideshow-item item-1">
                            <a href = "https://www.airbnb.com/rooms/42281900?source_impression_id=p3_1626702745_O09XOL1uBRqxMNgd" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/9.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href = "https://www.airbnb.com/rooms/42281900?source_impression_id=p3_1626702745_O09XOL1uBRqxMNgd" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/10.jpg')}}" alt="" />
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        <span id="target-1"></span>
                        <span id="target-2"></span>

                        <div class="slideshow-item item-1">
                            <a href = "https://www.airbnb.com/rooms/50027864?source_impression_id=p3_1626702751_gk0n7nVw%2Bh%2BPmS44" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/11.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href = "https://www.airbnb.com/rooms/50027864?source_impression_id=p3_1626702751_gk0n7nVw%2Bh%2BPmS44" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/12.jpg')}}" alt="" />
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-xs-12 mb-30" style = "width: 100%">
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        <span id="target-1"></span>
                        <span id="target-2"></span>

                        <div class="slideshow-item item-1">
                            <a href = "https://www.airbnb.com/rooms/50683117?source_impression_id=p3_1626702752_BYtGtnnScrWd7pQ%2F&modal=PHOTO_TOUR_SCROLLABLE" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/13.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href = "https://www.airbnb.com/rooms/50683117?source_impression_id=p3_1626702752_BYtGtnnScrWd7pQ%2F&modal=PHOTO_TOUR_SCROLLABLE" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/14.jpg')}}" alt="" />
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        <span id="target-1"></span>
                        <span id="target-2"></span>

                        <div class="slideshow-item item-1">
                            <a href = "https://www.airbnb.com/rooms/50461569?source_impression_id=p3_1626702753_3tZ7wnBG3a2dbq1%2F&modal=PHOTO_TOUR_SCROLLABLE" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/15.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href = "https://www.airbnb.com/rooms/50461569?source_impression_id=p3_1626702753_3tZ7wnBG3a2dbq1%2F&modal=PHOTO_TOUR_SCROLLABLE" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/16.jpg')}}" alt="" />
                            </a> 
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row col-xs-12 mb-30" style = "width: 100%">
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        <span id="target-1"></span>
                        <span id="target-2"></span>

                        <div class="slideshow-item item-1">
                            <a href = "https://www.airbnb.com/rooms/47595705?source_impression_id=p3_1626702754_VjXaHut5wXfYYkIy" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/17.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href = "https://www.airbnb.com/rooms/47595705?source_impression_id=p3_1626702754_VjXaHut5wXfYYkIy" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/18.jpg')}}" alt="" />
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        <span id="target-1"></span>
                        <span id="target-2"></span>

                        <div class="slideshow-item item-1">
                            <a href = "https://www.airbnb.com/rooms/50916103?source_impression_id=p3_1626702754_OwbFYlt9q%2B1AaKHl" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/19.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href = "https://www.airbnb.com/rooms/50916103?source_impression_id=p3_1626702754_OwbFYlt9q%2B1AaKHl" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/20.jpg')}}" alt="" />
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-xs-12 mb-30" style = "width: 100%">
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        <span id="target-1"></span>
                        <span id="target-2"></span>

                        <div class="slideshow-item item-1">
                            <a href = "https://www.airbnb.com/rooms/50517387" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/21.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href = "https://www.airbnb.com/rooms/50517387" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/22.jpg')}}" alt="" />
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        <span id="target-1"></span>
                        <span id="target-2"></span>

                        <div class="slideshow-item item-1">
                            <a href = "https://www.airbnb.com/rooms/49260334" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/23.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href = "https://www.airbnb.com/rooms/49260334" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/24.jpg')}}" alt="" />
                            </a> 
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row col-xs-12 mb-30" style = "width: 100%">
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        <span id="target-1"></span>
                        <span id="target-2"></span>

                        <div class="slideshow-item item-1">
                            <a href = "https://www.airbnb.com/rooms/50777167" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/25.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href = "https://www.airbnb.com/rooms/50777167" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/26.jpg')}}" alt="" />
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        <span id="target-1"></span>
                        <span id="target-2"></span>

                        <div class="slideshow-item item-1">
                            <a href = "https://www.airbnb.com/rooms/51038370" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/27.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href = "https://www.airbnb.com/rooms/51038370" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/28.jpg')}}" alt="" />
                            </a> 
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row col-xs-12 mb-30" style = "width: 100%">
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        <span id="target-1"></span>
                        <span id="target-2"></span>

                        <div class="slideshow-item item-1">
                            <a href = "https://www.airbnb.com/rooms/49594292" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/29.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href = "https://www.airbnb.com/rooms/49594292" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/30.jpg')}}" alt="" />
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 cols-sm-6 col-xs-12" style="height: 300px; padding: 10px; border-radius: 4px;">
                    <div class="slideshow" style="height: 300px;">
                        <span id="target-1"></span>
                        <span id="target-2"></span>

                        <div class="slideshow-item item-1">
                            <a href = "https://www.airbnb.com/rooms/50422114" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/31.jpg')}}" alt="" />
                            </a>                                
                        </div>

                        <div class="slideshow-item item-2">
                            <a href = "https://www.airbnb.com/rooms/50422114" style = "coursor:pointer">
                                <img src="{{asset('assets/images/apartments/32.jpg')}}" alt="" />
                            </a> 
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection

