<?php
    header('Content-Type: text/html;');
   $username='DITMP-OCCTNS'; //username of the department
   $password='Cctns@12345'; //password of the department
   $senderid='OCCTNS'; //senderid of the deparment
   $message="Dear Bhaskar Your login code is 5560 to pay POM bill. Please don't share it with anyone. Regards POMBPL"; //message content
   $messageUnicode="à¤®à¥‹à¤¬à¤¾à¤‡à¤²à¤¸à¥‡à¤µà¤¾à¤®à¥‡à¤‚à¤†à¤ªà¤•à¤¾à¤¸à¥à¤µà¤¾à¤—à¤¤à¤¹à¥ˆ "; //message content in unicode
   $mobileno="919826445006"; //if single sms need to be send use mobileno keyword
   $mobileNos= "86XXXXXX72,79XXXXXX00"; //if bulk sms need to send use mobileNos as keyword and mobile number seperated by commas as value
   $deptSecureKey= '3d8183ac-8495-4e80-ac8a-2362e0da9838'; //departsecure key for encryption of message...
   $encryp_password=sha1(trim($password));
   $templateid='1307169693372298480'; //your DLT registered templateid for this perticular message



    //function to send sms using by making http connection
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

    //Function to send single sms
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

    $message="Dear Tittu Your login code is 5560 to pay POM bill. Please don't share it with anyone. Regards POMBPL";
    sendSingleSMS('DITMP-OCCTNS',sha1(trim('Cctns@12345')),'OCCTNS',$message,'9826445006','3d8183ac-8495-4e80-ac8a-2362e0da9838','1307169693372298480');


