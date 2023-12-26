@extends('layouts.site')
@section('content')
    <main>
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>Rules & regulations</h2>
                        <p>Rules & regulations for the Police Officers Mess</p>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->

        <!-- ABOUT -->
        <section class="section-about">
            <div class="container">

                <div class="about" style="margin-top: 4px">

                    <?php
                    $definitions = array(
                        "Member" => "All Gazetted Officers (Dy. SP & above) of the Madhya Pradesh Police and those IPS officers borne on Madhya Pradesh Cadre are members. All members are mandatorily required to pay an annual membership fee.",
                        "Hon. Members" => "All retired Gazetted officers – (Dy. SP & above) of the Madhya Pradesh Police and retired IPS officers, borne earlier on MP Cadre.",
                        "Non-member" => "All serving or retired IPS officers or Gazetted police officers Dy. SP & above of other States or Central Police organizations.",
                        "Guest" => "A Guest of a Member / Non Member or Hon. Member."
                    );

                    $basic_conduct = array(
                        "All Members, Hon. Members, NMPO and Guests shall adhere to this code.",
                        "Every Member of the mess is expected, at all times to ensure that decorum, traditions, and etiquette of the police forces and the Mess are properly maintained.",
                        "Proper dress code is to be maintained while entering the Lounge and the Dining area.",
                        "Kurta Payjamas, Night dress, Shorts, T-shirts without collar, Bandanas, Patkas, and Track-suits are not allowed in the Dining /Lounge Area. Chappals, floaters or bathroom slippers are also not allowed in the Dining/Lounge Area.",
                        "Members and Guests are expected to be dressed in formal attire while attending official functions in the Mess.",
                        "Dogs are not allowed inside the mess premises. If any Member wishes to keep a dog, then arrangement shall be made at the 23rd Bn. / Other Bn. kennels, only after due permission from the Secretary of the Mess.",
                        "The spouse of a deceased member is entitled to all the benefits of the Mess as a Member."
                    );

                    $room_reservation = array(
                        "The room charges will be charged as per rates fixed by the Central Mess Committee only.",
                        "A single room/suite booking is for a maximum period of 10 days for members & their guests. Further extension is given in exceptional circumstances and authorized by President/ Vice President of the mess.",
                        "On booking of room/suite, the reservation would be left open for one day only. Thereafter, if the suite/room is not occupied, the booking is cancelled.",
                        "The check-in & check-out shall be on a 24 hrs flexible basis. Extra stay of 6 hrs shall not be counted, but beyond that full day charges shall have to be paid.",
                        "Different charges are applicable for members and guests, therefore, serious objection shall be taken if bookings are made in the name of members but the occupancy / usage is by a non-member or guest.",
                        "Only the spouse, son & daughter of a member are entitled to the member's suites/room charges. Other relatives will be required to pay the charges applicable as per Guest rates fixed by the mess committee.",
                        "ID Proof of a guest is compulsory at the time of check-in.",
                        "Room service shall be charged extra. This excludes morning tea.",
                        "For guests, a written communication with the name and address of the guest will be sent by the member to book the room.",
                        "The Member/Non-Member police officers shall send their request for room reservation by letter, email, or fax message to the CO 7th Bn, and if CO 7th Bn. is not available, then to the Secretary, Central Mess Committee (IG SAF Hrs). Request sent to the Mess in charge shall not be entertained."
                    );
                    $transfers = $data = array(
                        "Police officers on transfer or long term assignments in Bhopal are permitted booking for a maximum period of 120 days only.
                        Further extension is given only in exceptional circumstances authorized by the President / DGP or the Vice President / ADG (SAF).
                        <strong>UNDER NO CIRCUMSTANCES THE TOTAL DURATION OF STAY SHALL EXTEND BEYOND SIX MONTHS.</strong> After six months, the occupant will be charged double the prescribed charges as a penalty, which shall not be treated as room rent and shall not be reimbursable under existing TA rules.",
                        "Advance deposit of Rs. 10,000 is compulsory for transfer or long term assignments."
                    );

                    $marriages = array("A maximum of 10 rooms at a time can be given to the member of the mess for the marriage for his/her own marriage or the marriage of their own daughter/son.");

                    $dues  = array(
                        "Officers with pending mess dues shall not be given NOC at the time of the transfer or retirement.",
                        "Members with outstanding dues of more than Rs. 10,000 would not be allowed room in the mess until they clear their previous balance."
                    );

                    $misc = array(
                    "In case of any breakage/damages/loss to any mess properties, the resident/hirer is liable to fully reimburse the mess with the value of the item at the time of purchase.",
                    "Cooking is not permitted in the room/suites."
                    );
                    ?>

                    <div class="list-group">
                        <a href="#" class="list-group-item active">Definitions</a>
                        @foreach($definitions as $key=>$value)
                        <a href="#" class="list-group-item">
                            <strong>{{$key}}</strong> : {{$value}}
                        </a>
                        @endforeach
                    </div>

                    <div class="list-group">
                        <a href="#" class="list-group-item active">Basic Conduct and Dress Code:</a>
                        @foreach($basic_conduct as $rules)
                            <a href="#" class="list-group-item">
                                {{$rules}}
                            </a>
                        @endforeach
                    </div>

                    <div class="list-group">
                        <a href="#" class="list-group-item active">Room Reservation:</a>
                        @foreach($room_reservation as $rules)
                            <a href="#" class="list-group-item">
                                {{$rules}}
                            </a>
                        @endforeach
                    </div>

                    <div class="list-group">
                        <a href="#" class="list-group-item active">Long Term Assignments/transfers:</a>
                        @foreach($transfers as $rules)
                            <a href="#" class="list-group-item">
                                {!! $rules  !!}
                            </a>
                        @endforeach
                    </div>

                    <div class="list-group">
                        <a href="#" class="list-group-item active">Marriages:</a>
                        @foreach($marriages as $rules)
                            <a href="#" class="list-group-item">
                                {!! $rules  !!}
                            </a>
                        @endforeach
                    </div>


                    <div class="list-group">
                        <a href="#" class="list-group-item active">Mess Dues:</a>
                        @foreach($dues as $rules)
                            <a href="#" class="list-group-item">
                                {!! $rules  !!}
                            </a>
                        @endforeach
                    </div>

                    <div class="list-group">
                        <a href="#" class="list-group-item active">Miscellaneous:</a>
                        @foreach($misc as $rules)
                            <a href="#" class="list-group-item">
                                {!! $rules  !!}
                            </a>
                        @endforeach
                    </div>



                </div>

            </div>
        </section>

    </main>
@endsection
