@extends('layouts.site')
<!-- Header | START -->
@section('content')
    <!-- SUB BANNER -->
    <section class="section-sub-banner awe-parallax bg-16">

        <div class="awe-overlay"></div>

        <div class="sub-banner">
            <div class="container">
                <div class="text text-center">
                    <h2>Apply for booking</h2>
                </div>
            </div>

        </div>

    </section>
    <!-- END / SUB BANNER -->

    <!-- RESERVATION -->
    <section class="section-reservation-page bg-white">

        <div class="container">
            @if(Session::has('message'))
                <div class="alert alert-success">
                    <strong>Success!</strong> {{Session::get('message')}}.
                </div>
            @endif
            <div class="reservation-page">
                <div class="row">
                    <!-- CONTENT -->
                    <div class="col-lg-offset-2 col-lg-10">

                        <div class="reservation_content">
                            <form  action="/bookings/store" method="post">
                                {{csrf_field()}}
                            <div class="reservation-billing-detail">

                                <h4>BOOKING DETAILS</h4>

                                <div id="lawnDetails" class="hidden">
                                    <p>The general provisions regarding marriage by the Central Mess Committee are as follows -</p>
                                    <ol>
                                        <li> Lawn reservation rental amount is Rs 75,000/- per day.</li>
                                        <li> In addition to the lawn reservation rental amount, an electricity charge of Rs 5,000/- is determined.</li>
                                        <li> 40% advance of the lawn reservation rental amount must be deposited.</li>
                                        <li> Lawn reservation is only for the reception program of son/daughter/self. No other events related to marriage can be held in the lawn.</li>
                                        <li> The specified time and sound limit must be adhered to regarding music in events organized in the lawn.</li>
                                    </ol>
                                </div>
                                <div id="lawnDetails2" class="hidden">
                                    <p>The general provisions regarding birthday programs by the Central Mess Committee are as follows -</p>
                                    <ol>
                                        <li> For family (mother, father, son, daughter, husband, wife) birthdays, the lawn reservation rental amount is Rs 15,000/-. </li>
                                    </ol>
                                </div>


                                <label>Booking For<sup>*</sup></label>
                                <select name="booking_for" id="bookingFor" class="form-control">
                                    <option  value="Room" >Room</option>
                                    <option  value="Lawn for marriage">Lawn for marriage</option>
                                    <option  value="Lawn for birthday">Lawn for birthday</option>
                                    <option  value="Hall" >Hall</option>
                                </select>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Name<sup>*</sup></label>
                                        <input name="name" type="text" class="input-text">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Designation<sup>*</sup></label>
                                        <input name="designation_id" type="text" class="input-text">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Current service status<sup>*</sup></label>
                                        <select name="service_status" class="form-control">
                                            <option  value="In service" >In service</option>
                                            <option  value="Retired">Retired</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6" id="nonLawnDD">
                                        <label>Booking for<sup>*</sup></label>
                                        <select name="booking_for_self_guest"  class="form-control">
                                            <option  value="Self" >Self</option>
                                            <option  value="Guest" >Guest</option>
                                            <option  value="Family">Family</option>
                                            <option  value="Govt Tour">Govt Tour</option>
                                            <option  value="Private Tou">Private Tour</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 hidden" id="lawnDD">
                                        <label>Booking for<sup>*</sup></label>
                                        <select name="booking_for_self_guest" class="form-control">
                                            <option  value="Son">Son</option>
                                            <option  value="Daughter">Daughter</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 hidden" id="lawnDD2">
                                        <label>Booking for<sup>*</sup></label>
                                        <select name="booking_for_self_guest" class="form-control">
                                            <option  value="Son">Son</option>
                                            <option  value="Daughter">Daughter</option>
                                            <option  value="Mother">Mother</option>
                                            <option  value="Father">Father</option>
                                            <option  value="Wife">Wife</option>
                                            <option  value="Self">Self</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row hidden" id="lawnRelation">
                                    <div class="col-sm-12">
                                        <label>Name of Marriage/Birthday person (*for lawn booking only)</label>
                                        <input name="lawn_person" type="text" class="input-text">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>From Date<sup>*</sup></label>
                                        <input name="booking_from" type="date" class="input-text">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Till date<sup>*</sup></label>
                                        <input name="booking_till" type="date" class="input-text">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Email<sup>*</sup></label>
                                        <input name="email" type="text" class="input-text">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Mobile<sup>*</sup></label>
                                        <input name="mobile" type="text" class="input-text">
                                    </div>
                                </div>

                                <label>Message</label>
                                <textarea name="message" class="input-textarea"></textarea>
                                <button type="submit" class="awe-btn awe-btn-13">SUBMIT</button>
                            </div>
                            </form>
                        </div>

                    </div>
                    <!-- END / CONTENT -->

                </div>
            </div>
        </div>

    </section>
    <!-- END / RESERVATION -->
@stop
