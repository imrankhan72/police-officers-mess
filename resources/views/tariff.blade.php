@extends('layouts.site')
@section('content')
    <main>
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>Tariff</h2>
                        <p>Tariffs at the Police Officers Mess</p>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->

        <!-- ABOUT -->
        <section class="section-about">
            <div class="container">

                <div class="about" style="margin-top: 30px">

                    <?php
                    $data = array(
                        array(
                            "Building Name" => "Abhyuday Building",
                            "Type of Room" => "Suite Room",
                            "Govt. Rent" => 4500,
                            "Private Rent" => 1000,
                            "Guest Rent" => 1500,
                            "Permanent Residence" => "NA"
                        ),
                        array(
                            "Building Name" => "Abhyuday Building",
                            "Type of Room" => "Single Deluxe Room Pay Grade-7600",
                            "Govt. Rent" =>4000 ,
                            "Private Rent" =>750 ,
                            "Guest Rent" =>1000 ,
                            "Permanent Residence" => "NA"
                        ),
                        array(
                            "Building Name" => "Abhyuday Building",
                            "Type of Room" => "Single Deluxe Room Pay Grade - 6600",
                            "Govt. Rent" => 3000 ,
                            "Private Rent" => 750 ,
                            "Guest Rent" => 1000,
                            "Permanent Residence" => "NA"
                        ),
                        array(
                            "Building Name" => "Abhyuday Building",
                            "Type of Room" => "Single Deluxe Room Pay Grade - 5400",
                            "Govt. Rent" =>2000 ,
                            "Private Rent" => 750,
                            "Guest Rent" => 1000,
                            "Permanent Residence" => "NA"
                        ),
                        array(
                            "Building Name" => "Rustom Ji Building",
                            "Type of Room" => "Deluxe Apartment",
                            "Govt. Rent" => 4500,
                            "Private Rent" => 750,
                            "Guest Rent" => 1250,
                            "Permanent Residence" => 500
                        ),
                        array(
                            "Building Name" => "B.G. Ghate ANNEXE",
                            "Type of Room" => "Suite Room",
                            "Govt. Rent" => 3000,
                            "Private Rent" => 500,
                            "Guest Rent" => 1000,
                            "Permanent Residence" => 400
                        ),
                        array(
                            "Building Name" => "North Block",
                            "Type of Room" => "Single Room",
                            "Govt. Rent" => 2000,
                            "Private Rent" => 750,
                            "Guest Rent" => 1000,
                            "Permanent Residence" => 300
                        ),
                        array(
                            "Building Name" => "Duplex ANNEXE",
                            "Type of Room" => "Duplex",
                            "Govt. Rent" => 2000,
                            "Private Rent" => 750,
                            "Guest Rent" => 1000,
                            "Permanent Residence" => 300
                        )
                    );
                    $i =0;

                    $halls_lawns = array(
                        ['Rooftop Area'=>['No charge for up to 15 persons', 'Charges up to 15 -40 persons - Rs.3000/- per day', 'Charge for more than 40 persons - Rs.7000/- per day']],
                        ['Dome Charge'=>['3000/- per day']],
                        ['Parijat Party Hall'=>['Fixed rate for private program: Rs.10000 /- per day', 'Fixed rate for government program: RS.20000 /- per day']],
                        ['Anandam Party Hall'=>['Fixed rate for government and private programs: Rs.3000 /- per day']],
                        ['Umang Party Hall'=>['Fixed rate for government and private programs: Rs.5000 /- per day']],
                        ['Lawn'=>['Fixed rate for marriage and party: Rs.75,000/- per day and Rs.5000/- for electricity charges', 'Fixed rate for birthday and other events: Rs.15,000/- per day and Rs.5000/- for electricity charges']],
                    );

                    $j = 0;
                    ?>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Building Name</th>
                                <th scope="col">Type of Room</th>
                                <th scope="col">Govt. Rent</th>
                                <th scope="col">Private Rent</th>
                                <th scope="col">Guest Rent</th>
                                <th scope="col">Long Term Stay</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $data)
                                <?php $i = $i + 1; ?>
                            <tr>
                                <th scope="row">{{$i}} ) </th>
                                <td>{{$data['Building Name']}}</td>
                                <td>{{$data['Type of Room']}}</td>
                                <td>{{$data['Govt. Rent']}}</td>
                                <td>{{$data['Private Rent']}}</td>
                                <td>{{$data['Guest Rent']}}</td>
                                <td>{{$data['Permanent Residence']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Hall/Lawn Name</th>
                            <th scope="col">Tariff</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($halls_lawns as $key => $value)
                                <?php $j = $j + 1; ?>
                            <tr>
                                <th scope="row">{{$j}} ) </th>

                                    @foreach($value as $k=>$v)
                                    <td>{{$k}} </td>
                                    <td>
                                        @foreach($v as $vk)
                                            {{$vk}}
                                            <br/>
                                        @endforeach
                                    </td>
                                    @endforeach

                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>

            </div>
        </section>

    </main>
@endsection
