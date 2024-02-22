<?php

use Carbon\Carbon;
use Razorpay\Api\Api;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

Route::view('/', 'welcome');
Route::view('/about-us','about');
Route::view('/management-committee','management-committee');
Route::view('/rules-regulations','rules-regulations');
Route::view('/accommodations','accommodations');
Route::view('/banquets-lawns','banquets-lawns');
Route::view('/tariff','tariff');
Route::view('/facilities','facilities');
Route::view('/sports','sports');
Route::view('/restaurants','restaurants');
Route::view('/gallery','gallery');
Route::view('/contact-us','contact-us');
Route::view('/book-now','book');
Route::view('/disclaimer','disclaimer');
Route::view('/privacy-policy','/privacy-policy');
Route::view('/refund-policy','/refund-policy');
Route::view('/cancellation','/cancellation');


Route::get('send_sms',function (){
    $message = "Dear Imaad Your login code is 5560 to pay POM bill. Please don't share it with anyone. Regards POMBPL";

    // Call the sendSingleSMS function
    sendSingleSMS('DITMP-OCCTNS', sha1(trim('Cctns@12345')), 'OCCTNS', $message, '9826445006', '3d8183ac-8495-4e80-ac8a-2362e0da9838', '1307169693372298480');
});

Route::post('/bookings/store', function (Request $request) {
    $validatedData = $request->validate([
        'name' => 'required|string', 'booking_from' => 'required|string', 'booking_till' => 'required|string','mobile' => 'required|string','police_id' => 'required'
    ]);

    $booking = $request->all();

    if($request->police_id){
        $file = $request->file('police_id');
        $path = $file->store('photos','public');
        $booking['police_id'] = $file->hashName();
    }
    $booking = Booking::create($booking);
    return back()->with('message','Your booking request has been created. We will contact you soon');
});

function post_to_url($url, $data) {
    $fields = '';
    foreach($data as $key => $value) {
        $fields .= $key . '=' . urlencode($value) . '&';
    }
    rtrim($fields, '&');
    $post = curl_init();
    //curl_setopt($post, CURLOPT_SSLVERSION, 5); // uncomment for systems supporting TLSv1.1 only
    curl_setopt($post, CURLOPT_SSLVERSION, 6); // use for systems supporting TLSv1.2 or comment the line
    curl_setopt($post,CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($post, CURLOPT_URL, $url);
    curl_setopt($post, CURLOPT_POST, count($data));
    curl_setopt($post, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($post); //result from mobile seva server
    echo $result; //output from server displayed
    curl_close($post);
}
function sendSingleSMS($username,$encryp_password,$senderid,$message,$mobileno,$deptSecureKey,$templateid){
    $key=hash('sha512',trim($username).trim($senderid).trim($message).trim($deptSecureKey));

    $data = array(
        "username" => trim($username),
        "password" => trim($encryp_password),
        "senderid" => trim($senderid),
        "content" => trim($message),
        "smsservicetype" =>"singlemsg",
        "mobileno" =>trim($mobileno),
        "key" => trim($key),
        "templateid"=> trim($templateid)


    );
    post_to_url("https://msdgweb.mgov.gov.in/esms/sendsmsrequestDLT",$data); //calling post_to_url to send sms
}

Route::get('/verify-number',function (Request $request){
    return view('verify-number',['path'=>$request->get('path')]);
});

Route::post('/otp',function (Request $request) {
    $mobile_no = $request->get('mobile_no');
    $otp_code = rand(111111,999999);
    $path = $request->get('path');
    if($path == 'pay-bill'){
        $message="Dear User Your login code is $otp_code to pay POM bill. Please don't share it with anyone. Regards POMBPL";
        $template_id = 1307169693372298480;
    }else{
        $message="Dear User, your login code is $otp_code to check your booking status. Please don't share it with anyone. Regards POMBPL";
        $template_id = 1307169892615829190;
    }

    sendSingleSMS('DITMP-OCCTNS',sha1(trim('Cctns@12345')),'OCCTNS',"$message","$mobile_no",'3d8183ac-8495-4e80-ac8a-2362e0da9838', $template_id);

    //$response = Http::post("http://redirect.ds3.in/submitsms.jsp?user=mpcult&key=50b09e3748XX&mobile=+91$mobile_no&message=$message&senderid=depcmp&accusage=1&entityid=1201159222234637814&tempid=1207169726108149036");
    return view('otp', compact('mobile_no', 'otp_code', 'path'));
});

Route::post('/check-booking-status',function (Request $request) {
    $mobile_no = $request->get('mobile_no');
    if($request->get('entered_otp') !== $request->get('otp_code')){
        return "Wrong OTP Code";
    }

    $status = "Pending";

    $booking = Booking::where('mobile', $mobile_no)->orderBy('id','DESC')->first();
    if($booking->status == 1){
        $status = "Confirmed";
    }elseif ($booking->status == 2){
        $status = "Rejected";
    }

    return view('booking-status', compact('status', 'booking'));
});


Route::get('/pay-bill',function (){
    return view('pay-bill');
});


Route::post('/bill-details', function (Request $request) {
     $mobile_no = $request->get('mobile_no');

     if($request->get('entered_otp') !== $request->get('otp_code')){
         return "Wrong OTP Code";
     }

    $client_details = Http::get("http://pom.dvinfosoft.com/User_API.asmx/User_Registration?Mobile_No=$mobile_no")->collect()->first();
    if($client_details){
        $client_id = $client_details['Client_ID'];
        $hotel_bill_details = Http::get("http://pom.dvinfosoft.com/User_API.asmx/ClientHotelBills?Client_ID=$client_id")->collect();
        $restaurant_bill_details = Http::get("http://pom.dvinfosoft.com/User_API.asmx/ClientFoodBills?Client_ID=$client_id")->collect();
        $total_outstanding = Http::get("http://pom.dvinfosoft.com/User_API.asmx/ClientOutStanding?Client_ID=$client_id")->collect()->first();
        if (!$total_outstanding){
            $total_outstanding = $hotel_bill_details->sum('NetAmt') + $restaurant_bill_details->sum('NetAmt');
        }else{
            $total_outstanding =  $total_outstanding['Rwmanig_Amount'];
        }
    }else {
        $restaurant_bill_details = null;
        $hotel_bill_details = null;
        $total_outstanding = null;
    }

    return view('bill_details', compact('client_details','hotel_bill_details', 'restaurant_bill_details','total_outstanding', 'mobile_no'));
});


Route::get('/booking-status-otp',function (){
    return view('booking-status-otp');
});
Route::get('/make-payment', function (Request $request) {
    $params = [
        'chargeAmount' => $request->get('amount'),
        'chargeHead1'=> $request->get('amount'),
        'currencyCode' => '356',
        'desc' => $request->get('name'),
        'dueDate' => Carbon::now()->format('d/m/Y'),
        'invoiceNo' => 'inv' . '-' . Carbon::now()->format('Ymd') . '-' . Str::random(6),
        'merchantId' => 'T_20280',
        'mobileNo' => $request->get('mobile_no'),
        'paymentReturnURL' => 'https://qa.phicommerce.com/pg/api/merchant',
    ];
    $key = 'abc';
    $concatenated = '';
    foreach ($params as $value) {
        if (!is_null($value) && $value !== '') {
            $concatenated .= $value;
        }
    }
    $hash = hash_hmac('sha256', $concatenated, $key);
    $secureHash = strtolower($hash);
    $params['secureHash'] =$secureHash;
    $response = Http::post('https://qa.phicommerce.com/pg/portal/pay/paymentInvoiceService', $params);
    //return $response['redirectionURL'];
    return redirect()->away($response['redirectionURL']);
});

Route::get('/{payment}/success', function (Request $request, Payment $payment) {

    if($request->get('razorpay_payment_link_status') == "paid"){
        $payment->payment_status = 1;
        $payment->razorpay_payment_id = $request->get('razorpay_payment_id');
        $payment->razorpay_payment_link_id = $request->get('razorpay_payment_link_id');
        $payment->razorpay_signature = $request->get('razorpay_signature');
        $payment->paid_on = now();
        $payment->save();
    }


//    User can download PDF receipt
    return Inertia::render('Success', compact('payment'));
});


Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        $bookings= Booking::orderBy('created_at', 'DESC')->get();
        return Inertia::render('Dashboard', compact('bookings'));
    })->name('dashboard');

    Route::get('/update_booking/{id}', function (Request $request, $id) {
        $booking= Booking::find($id);
        $booking->status = $request->get('status');
        $booking->save();
        //Send SMS
        if($request->get('status') ==1){
            if($request->get('rooms_assigned') == 0){
                $message="Dear $booking->name, your booking is confirmed at Police Officers' Mess, Bhopal. Regards POMBPL";
                $template_id = 1307169892612113442;
                sendSingleSMS('DITMP-OCCTNS',sha1(trim('Cctns@12345')),'OCCTNS',"$message","$booking->mobile",'3d8183ac-8495-4e80-ac8a-2362e0da9838', $template_id);

            }else{
                $message= "Sir/Madam dear Booking of ". $request->get('rooms_assigned')." room/s for".$booking->from_date."is confirmed. POMBPL";
                $template_id = 1307170607635019229;
                sendSingleSMS('DITMP-OCCTNS',sha1(trim('Cctns@12345')),'OCCTNS',"$message","$booking->mobile",'3d8183ac-8495-4e80-ac8a-2362e0da9838', $template_id);
            }

        }

        return redirect()->route('dashboard')->with('message', 'Booking updated successfully');
    });
    Route::resource('bookings', BookingController::class);
    Route::resource('payments', PaymentController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
