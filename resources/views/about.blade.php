@extends('layouts.site')
<!-- Header | START -->
@section('content')
    <main>
        <div class="centre">
            <!-- Slideshow -->
            <div id="slideshow">
                <div class="caroufredsel_wrapper" style="display: block; text-align: center; float: none; position: relative; inset: auto; z-index: auto; width: 1200px; height: 600px; margin: 0px; overflow: hidden;">
                    <div class="slider" style="text-align: left; float: none; position: absolute; inset: 0px auto auto 0px; margin: 0px; width: 8400px; height: 600px; z-index: auto; opacity: 1;">
                        <div class="item" style="width: 1200px;">
                            <img alt="" src="/preview/images/2.JPG" width="1200" height="600">
                        </div>
                        <div class="item" style="width: 1200px;">
                            <img alt="" src="/preview/images/3.JPG" width="1200" height="600">
                        </div>
                        <div class="item" style="width: 1200px;">
                            <img alt="" src="/preview/images/1.JPG" width="1200" height="600">
                        </div>
                    </div>
                </div>
                <div class="nav">
                    <a class="prev" style="display: block;"><i class="fa fa-chevron-left"></i></a>
                    <a class="next" style="display: block;"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div id="content">
                <h2><strong>An Experience</strong> Like No Other</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.</p>
                <ul class="tags">
                    <li>On-site Restaurant</li>
                    <li>24 Hour Concierge</li>
                    <li>50m Lap Pool</li>
                    <li>Day Spa &amp; Sauna</li>
                    <li>Tennis Court</li>
                    <li>Tour Desk</li>
                </ul>
            </div>
        </div>
    </main>
@endsection
