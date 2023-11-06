@extends('layouts.site')
@section('content')
    <main>
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>Booking Status</h2>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->

        <!-- CONTACT -->
        <section class="section-contact">
            <div class="container">
                <div class="contact">
                    <div class="text-center">
                        <h4>Your booking request is <b>{{$status}}</b> </h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / CONTACT -->
    </main>
@stop
