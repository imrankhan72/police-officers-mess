@extends('layouts.site')
<!-- Header | START -->
@section('content')
<section class="container section-title" data-aos="fade-up" >
    <p id="title"><span>VERIFY MOBILE NUMBER</span></p>
</section>

<section class="section-contact" style="background-color: #f9f9f9;">
    <div class="container">
        <div class="contact text-center" style="padding: 60px 0;">
           

            <div class="reservation_content" style="max-width: 400px; margin: 0 auto;" >
                <form action="/otp" method="post" style="text-align: left;">
                {{csrf_field()}}
                <input type="hidden" name="path" value="{{$path}}">
                    <div class="form-group mb-4" >
                        <label for="mobile_no" style="font-weight: 500; font-size: 16px;">Enter your 10-digit mobile number<sup>*</sup></label>
                        <input type="text" id="mobile_no" name="mobile_no" class="form-control" 
                               maxlength="10" required placeholder="Enter mobile number"
                               style="padding: 10px; font-size: 16px; margin-top: 8px; border-radius: 4px; border: 1px solid #ddd;">
                    </div>

                    <button type="submit" class="awe-btn awe-btn-13" 
                            style="background-color: #e1bd85; color: white; padding: 10px 30px; 
                                   font-size: 18px; border-radius: 4px; border: none;">
                        SUBMIT
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@stop