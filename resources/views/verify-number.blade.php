@extends('layouts.site')
<!-- Header | START -->
@section('content')
<section class="container section-title" data-aos="fade-up" >
    <p id="title"><span>VERIFY MOBILE NUMBER</span></p>
</section>


<section class="section-contact" id="verify_number">
    <div class="container">
        <div class="contact text-center" >
           

            <div class="reservation_content" >
                <form action="/otp" method="post" >
                {{csrf_field()}}
                <input type="hidden" name="path" value="{{$path}}">
                    <div class="form-group mb-4" >
                        <label for="mobile_no" >Enter your 10-digit mobile number<sup>*</sup></label>
                        <input type="text" id="mobile_no" name="mobile_no" class="form-control"  maxlength="10" required placeholder="Enter mobile number">
                    </div>
                    <button type="submit" class="awe-btn awe-btn-13">
                        SUBMIT
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@stop