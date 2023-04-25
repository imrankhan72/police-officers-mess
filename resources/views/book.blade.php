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
                            <div class="field mandatory"><input name="name" type="text" placeholder="Name" id="contact-name"  /></div>
                            <div class="field mandatory"><input name="designation_id" type="text" placeholder="Designation" id="contact-name"  /></div>
                            <div class="field mandatory"><input name="email" type="text" placeholder="Email Address" id="contact-email" /></div>
                            <div class="field mandatory"><input name="phone" type="text" placeholder="Phone Number" id="contact-phone"  /></div>
                        </div>
                        <div class="col">
                            <div class="field calendar"><input name="contact-arrival" type="text" placeholder="Arrival Date" id="contact-arrival" value="" readonly /><i class="fa fa-calendar-o"></i></div>
                            <div class="field calendar"><input name="contact-departure" type="text" placeholder="Departure Date" id="contact-departure" value="" readonly /><i class="fa fa-calendar-o"></i></div>
                            <div class="select">
                                <select name="contact-rooms" id="contact-rooms" class="infants">
                                    <option  value="1">1 Room</option>
                                    <option  value="2" >2 Rooms</option>
                                    <option  value="3" >3 Rooms</option>
                                </select>
                                <select name="contact-adults" id="contact-adults" class="adults">
                                    <option  value="1" >1 Adult</option>
                                    <option  value="2">2 Adults</option>
                                    <option  value="3" >3 Adults</option>
                                    <option  value="4" >4 Adults</option>
                                    <option  value="5" >5 Adults</option>
                                </select>
                                <select name="contact-children" id="contact-children" class="children">
                                    <option selected value="0">0 Children</option>
                                    <option  value="1" >1 Child</option>
                                    <option  value="2" >2 Children</option>
                                    <option  value="3" >3 Children</option>
                                    <option  value="4" >4 Children</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="field"><textarea name="contact-message" placeholder="Message" id="contact-message"></textarea></div>
                        </div>
                        <!-- Honeypot (for bot spam) --><input name="contact-email2" type="text" placeholder="Email Address" autocomplete="false" class="honeypot" value="" />
                        <button name="send" value="sendform"><span data-hover="Send Booking Request">Send Booking Request</span></button>
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
