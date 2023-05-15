@extends('layouts.site')
<!-- Header | START -->
@section('content')
<header>
    <!-- Featured Slider | START -->
    <div id="featured">
        <div class="slider">
            <div class="item">
                <div class="details">
                    <div class="title"><span>Police Officers Mess</span></div>
                    <div class="buttoncontainer"><a href="about.html" class="button"><span data-hover="Explore The Mess">Explore The Mess</span></a></div>
                </div>
                <img alt="" src="/preview/images/0.JPG" width="1800" height="800" />
            </div>
{{--            <div class="item">--}}
{{--                <div class="details">--}}
{{--                    <div class="title"><span>Police Officers Mess</span></div>--}}
{{--                    <div class="buttoncontainer"><a href="about.html" class="button"><span data-hover="Explore The Mess">Explore The Mess</span></a></div>--}}
{{--                </div>--}}
{{--                <img alt="" src="/preview/images/1.JPG" width="1800" height="800" />--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <div class="details">--}}
{{--                    <div class="title"><span>Modern & Spacious Dining Hall</span></div>--}}
{{--                    <div class="buttoncontainer"><a href="accommodation.html" class="button"><span data-hover="See Accommodation">See Accommodation</span></a></div>--}}
{{--                </div>--}}
{{--                <img alt="" src="/preview/images/2.JPG" width="1800" height="800" />--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <div class="details">--}}
{{--                    <div class="title"><span>A Gourmet Dining Experience</span></div>--}}
{{--                    <div class="buttoncontainer"><a href="restaurant.php" class="button"><span data-hover="Read The Menu">Read The Menu</span></a></div>--}}
{{--                </div>--}}
{{--                <img alt="" src="preview/images/3.JPG" width="1800" height="800" />--}}
{{--            </div>--}}
        </div>
        <div class="centre">
            <div class="nav">
                <a class="prev"><i class="fa fa-chevron-left"></i></a>
                <a class="next"><i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</header>
<!-- Header | END -->
<!-- Content | START -->
<main>
    <div class="centre">
        <h1>Welcome to  <strong>Police Officers Mess</strong></h1>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.</p>
        <!-- USP Boxes | START -->
        <section class="usp">
            <div class="box">
                <i class="fa fa-trophy"></i>
                <h3>All Facilities & Amenities</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id.</p>
            </div>
            <div class="box">
                <i class="fa fa-cutlery"></i>
                <h3>Award-Winning Mess</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id.</p>
            </div>
            <div class="box">
                <i class="fa fa-user"></i>
                <h3>24 Hour Concierge Service</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id.</p>
            </div>
        </section>
        <!-- USP Boxes | END -->
    </div>
</main>
<!-- Content | END -->
<!-- Gallery Slider | START -->
<div id="galleryslider">
    <div class="slidecontainer">
        <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; inset: auto; z-index: auto;  height: 450px; width:100%;  margin: 0px; overflow: hidden;">
            <div class="slider" style="text-align: left; float: none; position: absolute; inset: 0px auto auto; margin: 0px;  height: 450px; z-index: auto;">
                <img alt="" data-original="preview/images/6.jpeg" width="900" height="600" src="preview/images/gallery-18.jpg" style="display: block;">
                <img alt="" data-original="preview/images/8.jpeg" width="900" height="600" src="preview/images/gallery-1.jpg" style="display: block;">
                <img alt="" data-original="preview/images/7.jpeg" width="900" height="600" src="preview/images/gallery-3.jpg" style="display: block;">
                <img alt="" data-original="preview/images/8.jpeg" width="600" height="900" src="preview/images/gallery-6.jpg" style="display: block;">
                <img alt="" data-original="preview/images/6.jpeg" width="600" height="900" src="preview/images/gallery-7.jpg" style="display: block;">
                <img alt="" data-original="preview/images/7.jpeg" width="900" height="600" src="preview/images/gallery-4.jpg" style="display: block;">
                <img alt="" data-original="preview/images/8.jpeg" width="900" height="600" src="preview/images/gallery-18.jpg" style="display: block;">
            </div>
        </div>
        <div class="centre">
            <div class="nav">
                <a class="prev" style="display: block;"><i class="fa fa-chevron-left"></i></a>
                <a class="next" style="display: block;"><i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <a href="gallery.html" class="button"><span data-hover="Browse Our Gallery">Browse Our Gallery</span></a>
</div>
<!-- Gallery Slider | END -->
<!-- Sitewide Extras | START -->
<div id="extras">
    <div class="centre">
        <!-- List Items (Specials Slider) | START -->
        <div id="specials" class="list">
            <div class="back">
                <div class="slider">
                    <div class="item">
                        <img alt="" src="preview/images/9.jpeg" width="1200" height="400" />
                        <div class="details">
                            <a href="specials.html">
                                <div class="title">Great Facilities<br />
                                    <span>Activity Package</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.<br />
                                    <strong>Stay from $249 per night</strong></p>
                                <div class="button"><span data-hover="View Special">View Special</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="preview/images/10.jpeg" width="1200" height="400" />
                        <div class="details">
                            <a href="specials.html">
                                <div class="title">Rustic Charm<br />
                                    <span>Restaurant Package</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.<br />
                                    <strong>Stay from $249 per night</strong></p>
                                <div class="button"><span data-hover="View Special">View Special</span></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav"></div>
        </div>
        <!-- List Items (Specials Slider) | END -->
        <!-- Recent Blog Posts | START -->
        <div class="recent">
            <a href="blog-post.html">
                <div class="date">
                    <span class="month">Dec</span>
                    <span class="day">12</span>
                </div>
                <p class="title">Our Latest  Awards</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque...</p>
            </a>
            <a href="blog-post.html">
                <div class="date">
                    <span class="month">Nov</span>
                    <span class="day">27</span>
                </div>
                <p class="title">Free Wi-Fi in all rooms</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque...</p>
            </a>
        </div>
        <!-- Recent Blog Posts | END -->
        <!-- Footer Testimonial | START -->
        <div class="footertestimonial">
            <i class="fa fa-quote-left"></i>
            <p class="title">Comfortable & spacious stay</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet...</p>
            <div class="author">&ndash; <strong>Shri Amit Mishra</strong> <span>(DSP, Bhopal)</span></div>
            <a href="guest-book.html" class="button"><span data-hover="Read Guest Book">Read Guest Book</span></a>
        </div>
        <!-- Footer Testimonial | END -->
    </div>
</div>
@endsection
