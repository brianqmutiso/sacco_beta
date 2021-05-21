<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class payments extends Controller
{
    //
     public function register_url(){

        $consumer_key = "J8hUidanXkS4gb5XuGX8IyQsxo2JLEIS";
        $consume_secret = "NVOn6WtMNEGfvUGB";
        $headers = ['Content-Type:application/json','Charset=utf8'];
        $url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

        $curl = curl_init($url);
        curl_setopt($curl,CURLOPT_HTTPHEADER,$headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl,CURLOPT_USERPWD,$consumer_key.':'.$consume_secret);

        $curl_response = curl_exec($curl);
        $result = json_decode($curl_response);

        // return array($result);

        $access_token = $result->access_token;

        curl_close($curl);

        $url = 'https://api.safaricom.co.ke/mpesa/c2b/v1/registerurl';
  
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$access_token)); //setting custom header
        
        $curl_post_data = array(
            'ShortCode' =>"4050997",
            'ResponseType' => 'Completed',
            'ConfirmationURL' => 'https://shekivahenterprises.co.ke/api/mconfirms',
            'ValidationURL' => 'https://shekivahenterprises.co.ke/api/mvalidates'
        );
        
        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        
        $curl_response = curl_exec($curl);
        echo $curl_response;
    }
}
