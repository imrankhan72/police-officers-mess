@extends('layouts.site')
<!-- Header | START -->
@section('content')
    <main>
        <div  style="padding-top: 32px; padding-bottom: 32px;">
            <div class="centre">
                <section>
                    <form action="/bill-details" method="post">
                        {{csrf_field()}}
                    <h1 class="underline">Please enter the your 10 digit mobile number!</h1>
                    <div class="container">
                        <input type="text"  name="mobile_no" style="width:40%;height:50px;border-radius:3px;border:rgba(0,0,0,.3) 2px solid; box-sizing:border-box;padding:10px;">
                    </div>
                    <button type="submit">SUBMIT</button>
                    <span class="result"></span>
                    </form>
                </section>
            </div>
        </div>
    </main>
@endsection
