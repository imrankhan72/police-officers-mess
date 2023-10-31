<?php
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



Route::get('send_sms',function (){
    $message = "Dear Imaad Your login code is 5560 to pay POM bill. Please don't share it with anyone. Regards POMBPL";

    // Call the sendSingleSMS function
    sendSingleSMS('DITMP-OCCTNS', sha1(trim('Cctns@12345')), 'OCCTNS', $message, '9826445006', '3d8183ac-8495-4e80-ac8a-2362e0da9838', '1307169693372298480');


});

Route::post('/bookings/store', function (Request $request) {
    $booking = Booking::create($request->all());
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

Route::post('/otp',function (Request $request) {
    $mobile_no = $request->get('mobile_no');
    $otp_code = rand(1111,9999);
    $message="Dear User Your login code is $otp_code to pay POM bill. Please don't share it with anyone. Regards POMBPL";
    sendSingleSMS('DITMP-OCCTNS',sha1(trim('Cctns@12345')),'OCCTNS',"$message","$mobile_no",'3d8183ac-8495-4e80-ac8a-2362e0da9838','1307169693372298480');

    //$response = Http::post("http://redirect.ds3.in/submitsms.jsp?user=mpcult&key=50b09e3748XX&mobile=+91$mobile_no&message=$message&senderid=depcmp&accusage=1&entityid=1201159222234637814&tempid=1207169726108149036");
    return view('otp', compact('mobile_no', 'otp_code'));
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

Route::get('/make-payment', function (Request $request) {
//    $payment = $request->get('amount');
//    $gateway_charges = $payment*.0243;
//    $gst = $gateway_charges*.18;
//    $fees = $payment+$gateway_charges+$gst;
//    $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_KEY_SECRET'));
//    $payment_options = array( 'upi'=>'1', 'wallet'=>'1','netbanking'=>'1', 'card'=>'1');
//
//    $response = $api->paymentLink->create(array('amount'=>round($fees*100), 'currency'=>'INR', 'accept_partial'=>false,
//        'description' => "Bill payment for police officers mess ", 'customer' => array('name'=>$request->get('name'),
//            'email' => 'bill@pom.mppoice.gov.in', 'contact'=>'9826445006'),
//        'notify'=>array('sms'=>true, 'email'=>false) , 'reminder_enable'=>false ,
//        'options'=>array('checkout'=>array('method'=>$payment_options)),
//        'callback_url' => "https://online.dpvipralawcollege.ac.in/success",
//        'callback_method'=>'get'));
//    $payment_link = $response['short_url'];
//    return redirect()->away($payment_link);
   return view('make_payment');
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
        $bookings= Booking::all();
        $payments = Payment::all();
        return Inertia::render('Dashboard', compact('bookings','payments'));
    })->name('dashboard');
    Route::resource('bookings', BookingController::class);
    Route::resource('payments', PaymentController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
