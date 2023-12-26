@extends('layouts.site')
@section('content')
    <main>
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>Management Committee</h2>
                        <p>Management Committee of the Police Officers Mess</p>
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
                    $committee = array(
                        "Director General Of Police, MP" => "President",
                        "Addl. Director General Of Police (SAF)" => "Vice President",
                        "Addl. Director General Of Police (Planning)" => "Member",
                        "Addl. Director General Of Police (Welfare)" => "Member",
                        "Addl. Director General Of Police (Provisioning)" => "Member",
                        "Addl. Director General Of Police 03 (Nominated by DGP, MP)" => "Member",
                        "Commissioner of Police, Bhopal" => "Member",
                        "Inspector General Of Police (SAF, Bhopal Range)" => "Member",
                        "Deputy. Inspector General Of Police (SAF (H.Q.))" => "Secretary",
                        "Commandant 7th BN, SAF" => "Invited member"
                    );
                    $i = 0;

                    $organization = array(
                        "Addl. Director General Of Police (SAF)" => "President",
                        "Commandant 7th BN, SAF" => "Secretary"
                    );
                    $j = 0;
                    ?>
                    <h4 style="margin-bottom: 8px">Central Mess Committee:</h4>
                    <table class="table table-bordered">
                        <tbody>

                        @foreach($committee as $key => $value)
                                <?php $i = $i + 1; ?>
                            <tr>
                                <th scope="row">{{$i}} )</th>
                                <td>{{$key}}</td>
                                <td>{{$value}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <h4 style="margin-bottom: 8px">District Mess Organization (Bhopal):</h4>
                    <table class="table table-bordered">
                        <tbody>

                        @foreach($organization as $key => $value)
                                <?php $j = $j + 1; ?>
                            <tr>
                                <th scope="row">{{$j}} )</th>
                                <td>{{$key}}</td>
                                <td>{{$value}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>

            </div>
        </section>

    </main>
@endsection
