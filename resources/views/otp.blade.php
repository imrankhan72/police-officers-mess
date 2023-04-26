@extends('layouts.site')
<!-- Header | START -->
@section('content')
    <main>
        <div  style="padding-top: 32px; padding-bottom: 32px;">
            <div class="centre">
                <section>
                    <h1 class="underline">Please enter the OTP sent to your mobile number!</h1>
                    <div class="container">
                        <input type="text" style="width:40%;height:50px;border-radius:3px;border:rgba(0,0,0,.3) 2px solid; box-sizing:border-box;padding:10px;">
                    </div>
                    <button>SUBMIT OTP</button>
                    <span class="result"></span>
                </section>
            </div>
        </div>
    </main>
@endsection
