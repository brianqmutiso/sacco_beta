<?php
namespace App\Helpers;

use App\Models\Setting;
use AfricasTalking\SDK\AfricasTalking;

class SendSMS
{


//Constructor..
    public function __construct( $mobileInput, $message)
    {


// $apiKey   ="30ef9bf5ba6aaafffcf0afb054c3f106425b9d9e6eb98c88cf47b6728aa38452";
// $username="passsasa";
// $AT       = new AfricasTalking($username, $apiKey);
// // $sms      = $AT->sms();


// $pattern = "/^(0)\d{9}$/";
// $pattern1 = "/^(254)\d{9}$/";
// $pattern2 = "/^(\+254)\d{9}$/";
// if (preg_match($pattern, $mobileInput)) {
//   # code...
//   $mobile="+254".substr($mobileInput,1);
// }
// else if(preg_match($pattern2, $mobileInput)){
// $mobile=$mobileInput;
// }
// else if(preg_match($pattern1, $mobileInput)){
// $mobile="+".$mobileInput;
// }
// $sms      = $AT->sms();
// $result   = $sms->send([
//     'to'      => $mobile,
//     'message' => $message
// ]);
// \Log::info($result);
      
    }
}

?>