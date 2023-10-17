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

function send_sms(){
//    https://msdgweb.mgov.gov.in/esms/sendsmsrequestDLT?username=DITMP-OCCTNS&password=Cctns@12345&senderid=cctnsd&key=3d8183ac-8495-4e80-ac8a-2362e0da9838&mobileno=9826445006&smsservicetype=unicodeotpmsg&templateid=1307169693372298480&content=Dear Imaad Your login code is 5560 to pay POM bill. Please don't share it with anyone. Regards POMBP
    $response = Http::post('https://msdgweb.mgov.gov.in/esms/sendsmsrequestDLT?', [
        'username' => 'DITMP-OCCTNS',
        'password' => 'Cctns@12345',
        'senderid'=>'cctnsd',
        'key'=>'3d8183ac-8495-4e80-ac8a-2362e0da9838',
        'smsservicetype'=>'unicodeotpmsg',
        'templateid'=>'1307169693372298480',
        'content'=>"Dear Imaad Your login code is 5560 to pay POM bill. Please don't share it with anyone. Regards POMBP",
        'mobileno'=>982644500

    ]);
}
Route::get('send_sms',function (){

    $message = "Dear Imaad Your login code is 5560 to pay POM bill. Please don't share it with anyone. Regards POMBP";


    return Http::timeout(500)->post("https://msdgweb.mgov.gov.in/esms/sendsmsrequestDLT?username=DITMP-OCCTNS&password=Cctns@12345&senderid=cctnsd&key=3d8183ac-8495-4e80-ac8a-2362e0da9838&mobileno=9826445006&smsservicetype=unicodeotpmsg&templateid=1307169693372298480&content=$message"
//        , [
//        'username' => 'DITMP-OCCTNSS',
//        'password' => 'Cctns@12345',
//        'senderid'=>'cctnsd',
//        'key'=>'3d8183ac-8495-4e80-ac8a-2362e0da9838',
//        "smsservicetype" =>"singlemsg",
//        'templateid'=>'1307169693372298480',
//        'content'=>"Dear Imaad Your login code is 5560 to pay POM bill. Please don't share it with anyone. Regards POMBP",
//        'mobileno'=>982644500
//    ]
    );

});

Route::post('/bookings/store', function (Request $request) {
    $booking = Booking::create($request->all());
    return back()->with('message','Your booking has been created. We will contact you soon');
});


Route::post('/otp',function (Request $request) {
    $mobile_no = $request->get('mobile_no');
    $otp_code = rand(11111,9999999);
    $message = "Dear user Your login code is $otp_code to pay POM bill. Please dont share it with anyone. Regards POMBPL siddh";
    //$response = Http::post("http://redirect.ds3.in/submitsms.jsp?user=mpcult&key=50b09e3748XX&mobile=+91$mobile_no&message=$message&senderid=depcmp&accusage=1&entityid=1201159222234637814&tempid=1207169726108149036");
    return view('otp', compact('mobile_no', 'otp_code'));
});

Route::get('/pay-bill',function (){
    return view('pay-bill');
});
Route::post('/bill-details', function (Request $request) {
     $mobile_no = $request->get('mobile_no');

//     if($request->get('entered_otp') !== $request->get('otp_code')){
//         return back()->with('message', 'Wrong OTP');
//     }

//    $client_details = Http::get("http://pom.dvinfosoft.com/User_API.asmx/User_Registration?Mobile_No=8106986039")->collect()->first();

    $client_details = Http::get("http://pom.dvinfosoft.com/User_API.asmx/User_Registration?Mobile_No=$mobile_no")->collect()->first();
    $client_id = $client_details['Client_ID'];
    $hotel_bill_details = Http::get("http://pom.dvinfosoft.com/User_API.asmx/ClientHotelBills?Client_ID=$client_id")->collect();
    $restaurant_bill_details = Http::get("http://pom.dvinfosoft.com/User_API.asmx/ClientFoodBills?Client_ID=$client_id")->collect();
    $total_outstanding = Http::get("http://pom.dvinfosoft.com/User_API.asmx/ClientOutStanding?Client_ID=$client_id")->collect()->first();
    if (!$total_outstanding){
        $total_outstanding = $hotel_bill_details->sum('NetAmt') + $restaurant_bill_details->sum('NetAmt');
    }else{
        $total_outstanding =  $total_outstanding['Rwmanig_Amount'];
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
