@extends('layouts.site')
<!-- Header | START -->
@section('content')
<section
    class="container-fluid section-title"
    data-aos="fade-up">

    <div class="container text-center">
        <p class="text-white"><span>APPLY FOR BOOKING</span></p>
    </div>
</section>

<section class="section-reservation-page bg-white">
    <div class="container bookform">
        @if(Session::has('message'))
        <div class="alert alert-success">
            <strong>Success!</strong> {{Session::get('message')}}.
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="reservation-page">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <form action="/bookings/store" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <strong>BOOKING DETAILS</strong>
                        <div id="lawnDetails" class="hidden">
                            <p>The general provisions regarding marriage by the Central Mess Committee are as follows
                                -</p>
                            <ol>
                                <li> Lawn reservation rental amount is Rs 75,000/- per day.</li>
                                <li> In addition to the lawn reservation rental amount, an electricity charge of Rs
                                    5,000/- is determined.
                                </li>
                                <li> 40% advance of the lawn reservation rental amount must be deposited.</li>
                                <li> Lawn reservation is only for the reception program of son/daughter/self. No other
                                    events related to marriage can be held in the lawn.
                                </li>
                                <li> The specified time and sound limit must be adhered to regarding music in events
                                    organized in the lawn.
                                </li>
                            </ol>
                        </div>
                        <div id="lawnDetails2" class="hidden">
                            <p>The general provisions regarding birthday programs by the Central Mess Committee are as
                                follows -</p>
                            <ol>
                                <li> For family (mother, father, son, daughter, husband, wife) birthdays, the lawn
                                    reservation rental amount is Rs 15,000/-.
                                </li>
                            </ol>
                        </div>
                        <div id="roof-top-details" class="hidden">
                            <p>The general provisions for roof top by the Central Mess Committee are as follows -</p>
                            <ol>
                                <li>For 15 to 40 people : 2000/- per day.</li>
                                <li>For 40+ people : 5000/- per day.</li>
                            </ol>
                        </div>


                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <label>Booking For<sup>*</sup></label>
                                <select name="booking_for" id="bookingFor" class="form-control" required>
                                    <option value="Room">Room</option>
                                    <option value="Lawn for Marriage">Lawn for Reception</option>
                                    <option value="Lawn for Birthday">Lawn for Birthday</option>
                                    <option value="Hall">Banquet Hall (Parijat)</option>
                                    <option value="Anandam hall">Anandam Hall</option>
                                    <option value="Dome">Dome</option>
                                    <option value="Roof Top">Roof Top</option>
                                </select>
                            </div>
                            <div class="col-sm-6" id="no_of_rooms">
                                <label>Number of Rooms<sup>*</sup></label>
                                <select name="num_rooms" class="form-control" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <label>Name<sup>*</sup></label>
                                <input name="name" type="text" class="form-control" required>
                            </div>
                            <div class="col-sm-6">
                                <label>Rank/Designation<sup>*</sup></label>
                                <select name="designation_id" class="form-control" required>
                                    <option value="DSP">DSP</option>
                                    <option value="Addl.S.P">Addl.S.P</option>
                                    <option value="SP">SP</option>
                                    <option value="DIG">DIG</option>
                                    <option value="IG">IG</option>
                                    <option value="ADGP">ADGP</option>
                                    <option value="DGP">DGP</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <label>Current Service Status<sup>*</sup></label>
                                <select name="service_status" class="form-control" required>
                                    <option value="In service">In service</option>
                                    <option value="Retired">Retired</option>
                                </select>
                            </div>
                            <div class="col-sm-6" id="nonLawnDD">
                                <label>Booking For<sup>*</sup></label>
                                <select name="booking_for_self_guest" class="form-control" required>
                                    <option value="Self">Self</option>
                                    <option value="Guest">Guest</option>
                                    <option value="Family">Family</option>
                                    <option value="Govt Tour">Govt Tour</option>
                                    <option value="Private Tour">Private Tour</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-6 hidden" id="lawnDD">
                                <label>Booking For<sup>*</sup></label>
                                <select name="booking_for_self_guest" class="form-control">
                                    <option value="Self">Self</option>
                                    <option value="Son">Son</option>
                                    <option value="Daughter">Daughter</option>
                                </select>
                            </div>
                            <div class="col-sm-6 hidden" id="domDD">
                                <label>Booking For<sup>*</sup></label>
                                <select name="booking_for_self_guest" class="form-control">
                                    <option value="Self">Self</option>
                                    <option value="Son">Organisation</option>
                                </select>
                            </div>
                            <div class="col-sm-6 hidden" id="lawnDD2">
                                <label>Booking For<sup>*</sup></label>
                                <select name="booking_for_self_guest" class="form-control">
                                    <option value="Son">Son</option>
                                    <option value="Daughter">Daughter</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Father">Father</option>
                                    <option value="Spouse">Spouse</option>
                                    <option value="Self">Self</option>
                                </select>
                            </div>
                        </div>

                        <div class="row hidden" id="lawnRelation">
                            <div class="col-sm-12">
                                <label>Name of Marriage/Birthday Person (*for lawn booking only)</label>
                                <input name="lawn_person" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <label>From Date<sup>*</sup></label>
                                <input name="booking_from" id="booking_from" type="date" class="form-control" required>
                            </div>
                            <div class="col-sm-6">
                                <label>Till Date<sup>*</sup></label>
                                <input name="booking_till" id="booking_till" type="date" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <label>Email</label>
                                <input name="email" type="text" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Mobile<sup>*</sup></label>
                                <input name="mobile" type="text" class="form-control" required>
                            </div>
                            <div class="col-sm-6">
                                <label>Upload ID (only Official Police ID)<sup>*</sup></label>
                                <input name="police_id" type="file" class="form-control" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
