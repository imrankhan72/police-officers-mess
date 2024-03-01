@extends('layouts.site')
<!-- Header | START -->
@section('content')
    <!-- SUB BANNER -->
    <section class="section-sub-banner awe-parallax bg-16">

        <div class="awe-overlay"></div>

        <div class="sub-banner">
            <div class="container">
                <div class="text text-center">
                    <h2>Verify mobile number</h2>
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
                            <form  action="/otp" method="post">
                                {{csrf_field()}}
                                <div class="reservation-billing-detail">
                                    <form action="/otp" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="path" value="{{$path}}">
                                        <label>Please enter your 10 digit mobile number<sup>*</sup></label>
                                        <input type="text" name="mobile_no" class="form-control" maxlength="10" required/>
                                        <button type="submit" class="awe-btn awe-btn-13">SUBMIT</button>
                                    </form>
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
