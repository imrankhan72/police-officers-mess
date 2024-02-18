<?php     $params = [
    'chargeAmount' => '200.00',
    'chargeHead1'=> '200.00',
    'currencyCode' => '356',
    'desc' => 'test',
    'dueDate' => '18/02/2024',
    'invoiceNo' => 'ABC98123456as',
    'merchantId' => 'T_20280',
    'mobileNo' => '7420936841',
    'paymentReturnURL' => 'https://qa.phicommerce.com/pg/api/merchant',
];

// Key shared by PhiCommerce
$key = 'abc';

//1) concatenate params
$concatenated = '';
foreach ($params as $value) {
    if (!is_null($value) && $value !== '') {
        $concatenated .= $value;
    }
}

// Step 2: Calculate HMAC hash using SHA256
$hash = hash_hmac('sha256', $concatenated, $key);

// Step 3: Convert the result to HEX format
$hexHash = bin2hex($hash);

// Step 4: Convert HEX format to lowercase
$secureHash = strtolower($hexHash);

$params['secureHash'] = $secureHash;

//This Http is laravel http client similar to CURL
return  $response = Http::post('https://qa.phicommerce.com/pg/portal/pay/paymentInvoiceService', $params);

//it always returns invalid hash
