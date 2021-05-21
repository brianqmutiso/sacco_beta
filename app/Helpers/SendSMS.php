<?php
namespace App\Helpers;

use App\Models\Setting;
use AfricasTalking\SDK\AfricasTalking;

class SendSMS
{


//Constructor..
    public function __construct( $mobileInput, $message)
    {


$apiKey   ="swiftpay";
$username="2ae24a2f2364955edefc7889b12823b2f81429283a5cda07b2700ae6665dc6ba";
$AT       = new AfricasTalking($username, $apiKey);
// $sms      = $AT->sms();


$pattern = "/^(0)\d{9}$/";
$pattern1 = "/^(254)\d{9}$/";
$pattern2 = "/^(\+254)\d{9}$/";
if (preg_match($pattern, $mobileInput)) {
  # code...
  $mobile="+254".substr($mobileInput,1);
}
else if(preg_match($pattern2, $mobileInput)){
$mobile=$mobileInput;
}
else if(preg_match($pattern1, $mobileInput)){
$mobile="+".$mobileInput;
}

$result   = $sms->send([
    'to'      => $mobile,
    'message' => $message
]);
\Log::info($result);
      
    }
}

?>