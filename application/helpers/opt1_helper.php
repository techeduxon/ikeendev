<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('send_otp'))
{
    function send_otp1($msisdn,$msg)
    {

		$sid = "VDNSIN";
		$msg = urlencode($msg);
		$type = "txt";
		$url12 = "http://cloud.smsindiahub.in/vendorsms/pushsms.aspx?user=Chetan%20Prajapat&password=Chetan@0640&msisdn=$msisdn&sid=ERJIIN&msg=$msg&fl=0&gwid=2";
//step1
$cSession = curl_init(); 
//step2
curl_setopt($cSession,CURLOPT_URL,$url12);
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false); 
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5
return $result;

    }   
}