@extends('layouts.app')

@section('pageUrl')
<ul class="nav-menu">
    <li> <a href="/">Home</a></li>
    <li><a href="/properties">Properties</a> </li>
    <li><a href="/profit">Profit from Airbnb</a> </li>
    <li><a href="/courses">Courses</a> </li>
    <li class="menu-item-has-children current-menu-item"><a href="/contact">Contact</a> </li>
</ul>
@endsection

@section('mainContent')
<div class="main-content">
    <div id="sc-banner" class="sc-banner contact-banner-bg position-relative ">
        <div class="container" style = "max-width: 1500px;">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="banner-content" style="padding-bottom: 150px">
                        <h2 class="banner-title mb-15 wow fadeInUp white-color" data-wow-delay="300ms"
                            data-wow-duration="2500ms">Contact Us</h2>
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
</div>
<div class="content" style = "padding-left: 20%; margin-top: 30px; margin-bottom: 30px;">
    <ul>
        <li><h2 class="contact-info" style = "color:gray;">Tel:(225)614-3878</h2></li>
        <li><h2 class="contact-info" style = "color:gray;">Email: chris@legendaryestatesairbnb.com</h2></li>
    </ul>
</div>
@endsection