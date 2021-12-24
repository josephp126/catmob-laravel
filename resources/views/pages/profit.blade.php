@extends('layouts.app')

@section('pageUrl')
<ul class="nav-menu">
    <li> <a href="/">Home</a></li>
    <li><a href="/properties">Properties</a> </li>
    <li class="menu-item-has-children current-menu-item"><a href="/profit">Profit from Airbnb</a> </li>
    <li><a href="/courses">Courses</a> </li>
    <li><a href="/contact">Contact</a> </li>
</ul>
@endsection

@section('mainContent')
<div class="main-content">
    <div id="sc-banner" class="sc-banner profit-banner-bg position-relative ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-content" style="padding-bottom: 200px">
                        <h2 class="banner-title mb-15 wow fadeInUp white-color" data-wow-delay="300ms"
                            data-wow-duration="2500ms">How to profit from Airbnb</h2>
                    </div>
                </div>
                <div class="col-lg-6  hidden-md">
                    <div class="banner-img animation-shape hidden-sm wow fadeInRight" data-wow-delay="300ms"
                        data-wow-duration="2000ms">
                        <img src="{{asset('assets/images/banner/profitbanner-image.png')}}" alt="Banner Image">
                    </div>
                    <div class="animate-circle"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sc-popular-courses" class="sc-popular-courses main-home pt-50  md-pt-70 md-pb-50">
        <div class="container">
            <div class="how-profit">
                <h2 align = "center">What makes Airbnb so<br> profitable?</h2>
                <p style = "margin-bottom: 5px;">
                Is your goal to earn more income in 2021? Can you believe how fast last year went by?<br> 
                If increasing your income while decreasing your work time is one of them, then look no further this course is your ticket!<br>
                You can start learning the proven methods we have used for the past 2 years to earn over $10,000 a month, that’s over $100,000 a year.<br>
                The infamous 6 figures everyone chases!<br>
                We are creating a real community of online entrepreneurs. With Airbnb becoming a first choice over Hotel stays, it gives you an opportunity to make profit for your Vacation Property!<br>
                This course will show you how to make money from other people’s properties without the risk of having to pay a closing cost for owning.<br>
                This business requires very little time which gives you something more precious than money…<b>TIME FREEDOM!</b><br>
                Think about what you could do if you had that? You could spend more time with your family, travel, or finally pursue that passion you have always wanted to.<br>
                Be one of the students to enroll and learn all of my closely guarded secrets! Am I going to guarantee you overnight success?<br>
                Absolutely not, that would be unrealistic, we’re all mature enough to know that there are no guarantees in life.<br>
                Anyone promising that is lying. This is a real business that requires real work that can take months to even a year to produce the income you’re looking for.<br>
                Here is what I can promise you…<br>
                If you’re coach-able with a good attitude, a willingness to work, and you follow my system you will earn income.<br>
                Even after your first 90 days the profits can be awesome!<br><br>

                <span style="font-size: 24px">What you will learn:</span><br>
                1. How to setup a proper listing on Airbnb and optimize the correct settings<br>
                2. The core concepts of Hosting<br>
                3. The core concepts of creating a “Lifestyle Business”<br>
                4. BEHIND THE SCENES LOOK at some of our properties.<br>
                5. Building a team/outsourcing your work<br>
                6. How to scale up your business<br>
                7. Start to finish guide on how to do every aspect of the business<br>
                …and much more!
                </p>
            </div>
            <div class="welcome-profit" style="background:url('{{asset('assets/images/profit-title.png')}}') no-repeat top center; background-size:contain">
                <p class="welcome-profit-content">
                    This course is design to teach you the ins and outs of the Airbnb industry.<br>
                    You will formulas that will help you in increase or triple your monthly revenue per unit.<br>
                    With this course you will have the tools needed and resources to help guide to a successful Short Term rental business.<br>
                </p>
                <button class="welcome-profit-buy-button">BUY NOW</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_js')
<script>
    $(".welcome-profit-buy-button").on('click', function(){
        window.location.href="https://sso.teachable.com/secure/862029/checkout/3249912/short-term-airbnb";
    });
</script>
@endsection