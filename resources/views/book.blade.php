@extends('layouts.site')
@section('content')
        <header>
            <div id="header">
                <div class="h1">
                    <h1><span>Contact</span>
                        <span class="tagline">Get in touch with Base Hotel</span></h1>
                </div>
            </div>
        </header>
        <!-- Header | END -->
        <!-- Content | START -->
        <main>
            <div class="centre">
                <!-- Contact Form | START -->
                <div id="contact">
                    <img src="https://demo.klayemorrison.com/base-hotel/preview/images/room-deluxe-1200.jpg" width="1200" height="400" alt="" />
                    <form  action="/bookings/store" method="post">
                        {{@csrf_field()}}
                        <div class="col">
                            <div class="field mandatory"><input name="name" type="text" placeholder="Name"   /></div>
                            <div class="field mandatory"><input name="designation_id" type="text" placeholder="Designation"   /></div>
                            <div class="field mandatory"><input name="email" type="text" placeholder="Email Address" /></div>
                            <div class="field mandatory"><input name="mobile" type="text" placeholder="Mobile Number"   /></div>
                        </div>
                        <div class="col">
                            <div class="field calendar"><input name="booking_from" type="date" placeholder="From Date"/></div>
                            <div class="field calendar"><input name="booking_till" type="date" placeholder="Till Date"/></div>
                            <div class="select">
                                <select name="service_status" class="infants">
                                    <option  value="1">In Service</option>
                                    <option  value="2" >Retired</option>
                                </select>
                                <select name="booking_for" class="adults">
                                    <option  value="1" >Room</option>
                                    <option  value="2">Lawn</option>
                                    <option  value="3" >Hall</option>
                                </select>
                                <select name="booking_for_self_guest" class="children">
                                    <option selected value="0">Self</option>
                                    <option  value="1" >Guest</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="field"><textarea name="message" placeholder="Message"></textarea></div>
                        </div>
                        <button type="submit"><span data-hover="Send Booking Request">Send Booking Request</span></button>
                    </form>
                </div>
                <!-- Contact Form | END -->
                <h2 style="margin:0;"><strong>+91 8 3456 7890</strong></h2>
                <p style="margin:0;"><a href="mailto:stay@pom.com">stay@pom.com</a><br />
                    7C26+CHF, Jahangirabad, Bhopal, Madhya Pradesh 462008<br />
                    <a href="#"><i class="fa fa-map-marker"></i> Explore Our Location</a></p>
            </div>
        </main>

@endsection
