@extends('layouts.site')
<!-- Header | START -->
@section('content')
    <main>
        <div>
            <div class="centre">
                <h1>
                    <strong>Shri {{$client_details['Client_Name']}}</strong>
                    <span>({{$client_details['Rank']}}, {{$client_details['Posting']}})
                    </span>
                </h1>
                <div id="content">
                    <h2>Total Outstanding: <strong>Rs:{{$total_outstanding['Rwmanig_Amount']}} /-</strong></h2>
                </div>
                <div class="buttoncontainer">
                    <button class="button">
                        <span data-hover="Pay Now">  Pay Now</span>
                    </button>
                </div>
                <div class="buttoncontainer" onclick="toggleBillDetails()" style="padding-bottom: 32px;">
                    <button class="button">
                        <span data-hover="See Bill Details">See Bill Details</span>
                    </button>
                </div>

                <div id="bill_details" style="display:none; padding-top: 32px;">
                    <div class="container">
                        <h1>Hotel Bill Details</h1>
                        <table class="rwd-table">
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
                    <div class="container">
                        <h1>Restaurant Bill Details</h1>
                        <table class="rwd-table">
                            <tbody>
                            <tr>
                                <th>Bill No.</th>
                                <th>Bill_Date</th>
                                <th>Bill_Time</th>
                                <th>Table_No</th>
                                <th>Net_Total</th>
                                <th>Table_Name</th>
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
                </div>
            </div>
        </div>
    </main>
@endsection
