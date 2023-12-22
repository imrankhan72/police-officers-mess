@extends('layouts.site')
<!-- Header | START -->
@section('content')
    <!-- BANNER SLIDER -->
    <section class="section-slider" style="">
        <div id="slider-revolution">
            <ul>
                @for($i = 1; $i < 12; $i++)
                    <li data-transition="fade">
                        <img src="/assets/images/slider/slide-{{$i}}.jpg" data-bgposition="left center" data-duration="1000" data-bgpositionend="right center" alt="">
                    </li>
                @endfor
            </ul>
        </div>

    </section>
    <!-- END / BANNER SLIDER -->

    <!-- ACCOMDODATIONS -->
    <section class="section-accomd awe-parallax bg-14">
        <div class="container">
            <div class="accomd-modations">
                <div class="row">
                    <div class="col-md-12">
                        <div class="accomd-modations-header">
                            <h2 class="heading">WELCOME TO POLICE OFFICERS' MESS</h2>
                            <img src="/assets/images/icon-accmod.png" alt="icon">
                            <p> This portal is an initiative of Madhya Pradesh Police to provide an online platform where Police Officers may apply for booking an accommodation for themselves and their guests while on visit to Bhopal. Officers may also use this portal to apply for Garden/Lawns booking for their personal events and functions.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- END / ACCOMD ODATIONS -->

    <!-- ABOUT -->
    <section class="section-home-about bg-white">
        <div class="container">
            <div class="home-about">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img">
                            <a href="#"><img src="/assets/images/gallery/popup/img-1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text">
                            <h2 class="heading">ABOUT US</h2>
                            <span class="box-border"></span>
                            <p>
                                The Police Officers' Mess located in Bhopal is a prestigious institution designed to provide a comfortable and relaxing environment for Police Officers and their guests. The Mess is equipped with a wide range of facilities that cater to the various needs of its guests.
                            </p>
                            <a href="/about-us" class="awe-btn awe-btn-default">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / ABOUT -->

    <!-- OUR BEST -->
    <section class="section-our-best bg-white">
        <div class="container">

            <div class="our-best">
                <div class="row">

                    <div class="col-md-6 col-md-push-6">
                        <div class="img">
                            <img src="/assets/images/gallery/img-11.jpeg" alt="">
                        </div>
                    </div>

                    <div class="col-md-6 col-md-pull-6 ">
                        <div class="text">
                            <h2 class="heading">Best Facilities</h2>
                            <p>Police Officers' Mess is a versatile and welcoming establishment, which provides its guests with a comfortable and enjoyable experience, providing the best facilities and relaxing stay.</p>
                            <ul>
                                <li><img src="/assets/images/home/ourbest/icon-1.png" alt="icon">Air Conditioning</li>
                                <li><img src="/assets/images/home/ourbest/icon-2.png" alt="icon">Bathroom Slippers</li>
                                <li><img src="/assets/images/home/ourbest/icon-3.png" alt="icon">Bathroom Amenities</li>
                                <li><img src="/assets/images/home/ourbest/icon-4.png" alt="icon">Breakfast Buffet</li>
                                <li><img src="/assets/images/home/ourbest/icon-5.png" alt="icon">Cable TV</li>
                                <li><img src="/assets/images/home/ourbest/icon-6.png" alt="icon">Coffee and Tea Facilities</li>
                                <li><img src="/assets/images/home/ourbest/icon-7.png" alt="icon">Free Wi-Fi</li>
                                <li><img src="/assets/images/home/ourbest/icon-8.png" alt="icon">Complimentary Bottled Water</li>
                                <li><img src="/assets/images/home/ourbest/icon-9.png" alt="icon">Cafeteria</li>
                                <li><img src="/assets/images/home/ourbest/icon-10.png" alt="icon">In-room Safe</li>
                                <li><img src="/assets/images/home/ourbest/icon-11.png" alt="icon">Work Desk</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- END / OUR BEST -->

    <!-- HOME GUEST BOOK -->
    <div class="section-home-guestbook awe-parallax bg-13">
        <div class="container">
            <div class="home-guestbook">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="guestbook-content owl-single">
                            <!-- ITEM -->
                            <div class="guestbook-item">
                                <div class="img">
                                    <img src="/assets/images/avatar/img-5.jpg" alt="">
                                </div>

                                <div class="text">
                                    <p>This is the best place to stay in Bhopal! I always stay in Officers' Mess while on a visit to Bhopal ! After spending the day in office routines to come back and enjoy a cup of tea while looking out lower-lake view window and then to top it all off...</p>
                                    <span><strong>Amit Kumar Verma</strong></span><br>
                                    <span>Dy.SP, Gwalior</span>
                                </div>
                            </div>
                            <!-- ITEM -->

                            <!-- ITEM -->
                            <div class="guestbook-item">
                                <div class="img">
                                    <img src="/assets/images/avatar/img-5.jpg" alt="">
                                </div>

                                <div class="text">
                                   <p>This is the best place to stay in Bhopal! I always stay in Officers' Mess while on a visit to Bhopal ! After spending the day in office routines to come back and enjoy a cup of tea while looking out lower-lake view window and then to top it all off...</p>
                                    <span><strong>Amit Kumar Verma</strong></span><br>
                                    <span>Dy.SP, Gwalior</span>
                                </div>
                            </div>
                            <!-- ITEM -->

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- END / HOME GUEST BOOK -->

@endsection
