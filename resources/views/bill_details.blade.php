@extends('layouts.site')
<!-- Header | START -->
@section('content')
    <!-- SUB BANNER -->
    <section class="section-sub-banner awe-parallax bg-16">

        <div class="awe-overlay"></div>

        <div class="sub-banner">
            <div class="container">
                <div class="text text-center">
                    <h2>Bill details</h2>
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
                    @if($client_details)
                    <div class="col-lg-offset-2 col-lg-10">
                        <h3>
                            <strong>Shri {{$client_details['Client_Name']}}</strong>
                            <span>({{$client_details['Rank']}}, {{$client_details['Posting']}})</span>
                        </h3>
                        <div id="content">
                            <h4>Total Outstanding:
                                @if($total_outstanding)
                                <strong>Rs: {{$total_outstanding}} /-</strong>
                                @endif
                            </h4>
                        </div>
                        <div id="payment">
                            <form action="/make-payment" method="get">
                                {{csrf_field()}}
                                <input type="hidden" name="name" value="{{$client_details['Client_Name']}}">
                                <input type="hidden" name="amount" value=" @if($total_outstanding) {{$total_outstanding}} @endif">
                                <input type="hidden" name="mobile_no" value="{{$mobile_no}}">
                                <button type="submit"  class="awe-btn awe-btn-13">
                                    <span data-hover="Pay Now">Pay Now</span>
                                </button>
                            </form>
                        </div>

                        <div id="bill_details" >
                            @if($hotel_bill_details)
                            <div class="container">
                                <h5>Hotel Bill Details</h5>
                                <table  class="table">
                                    <tbody>
                                    <tr>
                                        <th>Manual Invoice NO.</th>
                                        <th>Checkout Date</th>
                                        <th>Customer ID</th>
                                        <th>Room No</th>
                                        <th>Net Amount</th>
                                        <th>Room Type</th>
                                        <th>Room Tariff Type</th>
                                    </tr>
                                    @foreach($hotel_bill_details  as $hotel_bill)
                                        <tr>
                                            <td>
                                                {{$hotel_bill['Maunal_InvoiceNo']}}
                                            </td>
                                            <td>
                                                {{$hotel_bill['checkoutdate']}}
                                            </td>
                                            <td>
                                                {{$hotel_bill['CustID']}}
                                            </td>
                                            <td >
                                                {{$hotel_bill['RoomNo']}}
                                            </td>
                                            <td >
                                                {{$hotel_bill['NetAmt']}}
                                            </td>
                                            <td >
                                                {{$hotel_bill['Room_Type']}}
                                            </td>
                                            <td >
                                                {{$hotel_bill['RoomTariffType']}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endif

                            @if($restaurant_bill_details)
                                <div class="container">
                                    <h5>Restaurant Bill Details</h5>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th>Bill NO.</th>
                                            <th>Bill date</th>
                                            <th>Bill time</th>
                                            <th>Table NO.</th>
                                            <th>Net total</th>
                                            <th>Table name</th>
                                        </tr>
                                        @foreach($restaurant_bill_details  as $restaurant_bill)
                                            <tr>
                                                <td>
                                                    {{$restaurant_bill['Bill_No']}}
                                                </td>
                                                <td>
                                                    {{$restaurant_bill['Bill_Date']}}
                                                </td>
                                                <td>
                                                    {{$restaurant_bill['Bill_Time']}}
                                                </td>
                                                <td >
                                                    {{$restaurant_bill['Table_No']}}
                                                </td>
                                                <td >
                                                    {{$restaurant_bill['Net_Total']}}
                                                </td>
                                                <td >
                                                    {{$restaurant_bill['Table_Name']}}
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>

                    </div>
                    <!-- END / CONTENT -->
                    @else
                        <h2>Sorry no details found!</h2>
                    @endif
                </div>
            </div>
        </div>

    </section>
    <!-- END / RESERVATION -->
@stop
