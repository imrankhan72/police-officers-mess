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
                            <p> The Police Officers’ Mess in Bhopal serves as a vital institution that fosters camaraderie and provides space for relaxation and professional interaction among law enforcement officers. Located in the heart of Bhopal, this mess plays a crucial role in promoting a sense of community within the police force.

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
                            <a href="#"><img src="assets/images/main-gallery/7.jpeg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text">
                            <h2 class="heading">ABOUT US</h2>
                            <span class="box-border"></span>
                            <p>
                                The Police Officers' Mess, Bhopal is a prestigious institution designed to provide a comfortable and relaxing stay for Police Officers and their guests. The Mess is equipped with a wide range of facilities that caters to the various needs of its guests.
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
                            <p>Police Officers' Mess provides its guests with some of the facilities are the best facilities for a relaxing stay.</p>
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
                                    <img src="/assets/images/avatar/azadsir.jpg" alt="">
                                </div>

                                <div class="text">
                                   <p>What an outstanding piece of work this mess is perhaps the best in the Country thanks to MP Police following the rich tradition of extending best facility and comfort to even Retd. officers. Great job ---Keep it up</p>
                                    <span><strong>Yashowardhan Jha Azad</strong></span><br>
                                    <span>Ex IPS - Spl.Dir. IB, Secy. Security, GOI</span>
                                </div>
                            </div>
                            
                            <!-- ITEM -->
                            <div class="guestbook-item">
                                <div class="img">
                                    <img src="/assets/images/avatar/avinashsir.jpg" alt="">
                                </div>

                                <div class="text">
                                    <p>I had the opportunity to visit this prestigious mess of Bhopal. I has come up very well with all facilities of a 5 star hotel. The ambience is pleasuring and wonderful. The staff here is courious and attentive. Very very good experience.</p>
                                    <span><strong>Avinash Chandra </strong></span><br>
                                    <span>DG Fire and Emg. Services</span>
                                </div>
                            </div>
                            <!-- ITEM -->

                           
                            <!-- ITEM -->
                            <div class="guestbook-item">
                                <div class="img">
                                    <img src="/assets/images/avatar/pawansir.jpg" alt="">
                                </div>

                                <div class="text">
                                   <p>Came to the mess after a long span of 24 years. Great to see the renovation and the mess completely changed in a positive direction like the tradition of MP Police. Wish a great future of the Madhya Pradesh Police</p>
                                    <span><strong>Pawan Deo</strong></span><br>
                                    <span>IPS</span>
                                </div>
                            </div>
                            <div class="guestbook-item">
                                <div class="img">
                                    <img src="/assets/images/avatar/rishisir.jpg" alt="">
                                </div>

                                <div class="text">
                                   <p>Visited for some work and stayed here for a day. Great ambience and good hospitality. Very impressive reflection of great tradition and professionalism of mp police,very satisfied,Thanks </p>
                                    <span><strong>Rishi Pal</strong></span><br>
                                    <span>IPS, Joint Commissioner of Police, Delhi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>    <!-- END / HOME GUEST BOOK -->

@endsection
