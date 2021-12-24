@extends('layouts.app')

@section('pageUrl')
<ul class="nav-menu">
    <li> <a href="/">Home</a></li>
    <li><a href="/properties">Properties</a> </li>
    <li><a href="/profit">Profit from Airbnb</a> </li>
    <li class="menu-item-has-children current-menu-item"><a href="/courses">Courses</a> </li>
    <li><a href="/contact">Contact</a> </li>
</ul>
@endsection

@section('mainContent')
<div class="main-content">
    <div id="sc-banner" class="sc-banner banner-bg position-relative ">
        <div class="container" style = "max-width: 1500px;">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="banner-content" id="course-text">
                        <h2 class="banner-title mb-15 wow fadeInUp white-color" data-wow-delay="300ms"
                            data-wow-duration="2500ms">Courses Available</h2>
                        <h5 class="banner-des mb-35 wow fadeInUp white-color" data-wow-delay="300ms"
                            data-wow-duration="3000ms">
                        </h5>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    
                </div>
            </div>
        </div>
    </div>
    <div id="sc-popular-courses" class="sc-popular-courses main-home pt-50 pb-90 md-pt-70 md-pb-50" style="background-color: white">
        <div class="container pr-50 pl-50" style="max-width: 100% !important;">
            <div class="row align-items-center m-auto" style="margin-bottom: 30px !important">
                <div class="col-md-12" >
                    <div class="sec-title" align="center">
                        <h2 class="title mb-0">Short Term Real Estate</h2>
                    </div>
                    <div class="sec-content mt-20" align="center">
                        <p>
                            THIS COURSE WILL PROVIDE YOU WITH DETAILED<br> INFORMATION NEEDED TO SUCCEED WITH HOSTING ON AIRNB.<br>
                            IF YOU WOULD LIKE TO MAKE AN EXTRA $1000-$2500 MONTHLY THEN THIS COURSE IS FOR YOU!<br> WE WILL PROVIDE FOR YOU THE TOOLS & EXPERIENCE THAT WILL ALLOW YOU TO LIVE MORTAGE / RENT FREE!!!<br>
                            AFTER THIS COURSE WE GURANTEE YOU WILL MAKE $1000 WITHIN FIRST MONTH!!!
                        </p>
                    </div>
                    <div class="sec-buy-button" align="center">
                        <button class="course-submit">BUY COURSE</button>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_js')
<script>
    $(".sec-buy-button button").on('click', function(){
        window.location.href="https://sso.teachable.com/secure/862029/checkout/3249912/short-term-airbnb";
    });
</script>
@endsection