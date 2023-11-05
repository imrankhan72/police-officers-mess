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

                                <label>Booking For<sup>*</sup></label>
                                <select name="booking_for" class="form-control">
                                    <option  value="Room" >Room</option>
                                    <option  value="Lawn">Lawn</option>
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
                                    <div class="col-sm-6">
                                        <label>Booking for<sup>*</sup></label>
                                        <select name="booking_for_self_guest" class="form-control">
                                            <option  value="Self" >Self</option>
                                            <option  value="Guest" >Guest</option>
                                            <option  value="Family">Family</option>
                                            <option  value="Govt Tour">Govt Tour</option>
                                            <option  value="Private Tou">Private Tour</option>
                                        </select>
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
