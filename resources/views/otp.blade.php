@extends('layouts.site')
<!-- Header | START -->
@section('content')
    <!-- SUB BANNER -->
    <section class="section-sub-banner awe-parallax bg-16">

        <div class="awe-overlay"></div>

        <div class="sub-banner">
            <div class="container">
                <div class="text text-center">
                    <h2>Verify Phone number</h2>
                </div>
            </div>

        </div>

    </section>
    <!-- END / SUB BANNER -->

    <!-- RESERVATION -->
    <section class="section-reservation-page bg-white">

        <div class="container">
            <div class="reservation-page">
                <div class="row">
                    <!-- CONTENT -->
                    <div class="col-lg-offset-2 col-lg-10">

                        <div class="reservation_content">
                                <div class="reservation-billing-detail">
                                    <form action="/bill-details?path=pay_bill" method="post">
                                        {{csrf_field()}}
                                        <label>Please enter 6 digit OTP sent to your mobile number ({{$mobile_no}}})<sup>*</sup></label>
                                        <input type="hidden" name="mobile_no" value="{{$mobile_no}}">
                                        <input type="text" name="booking_for" class="form-control" required/>
                                        <button type="submit" class="awe-btn awe-btn-13">SUBMIT</button>
                                    </form>
                                </div>

                        </div>

                    </div>
                    <!-- END / CONTENT -->

                </div>
            </div>
        </div>

    </section>
    <!-- END / RESERVATION -->
@stop
