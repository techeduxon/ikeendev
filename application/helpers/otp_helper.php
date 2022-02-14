<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('send_otp'))
{
  //   function send_otp($msisdn,$msg)
  //   {
		// $sid = "VDNSIN";
		// $msg = urlencode($msg);
		// $type = "txt";
		// $ch =
		// curl_init("http://cloud.smsindiahub.in/vendorsms/pushsms.aspx?user=Chetan%20Prajapat&password=Chetan@0640&msisdn=$msisdn&sid=VDNSIN&msg=$msg&fl=0&gwid=2");
		//  curl_setopt($ch, CURLOPT_HEADER, 0);
		//  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		//  $output = curl_exec($ch);
		//  curl_close($ch);
		// // Display MSGID of the successful sms push
		// //echo $output;
  //   	return $output;
  //   }   

	  function send_otp($msisdn,$msg,$otp)
    {
		$curl = curl_init();

		 curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://control.msg91.com/api/sendotp.php?otp=$otp&sender=TEMPLE&message=$msg&mobile=$msisdn&authkey=310627AjkyEufwK2Y5e09b673P1",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_SSL_VERIFYHOST => 0,
		  CURLOPT_SSL_VERIFYPEER => 0,
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		//return $response ; 
		if ($err) {
		  return true;//"cURL Error #:" . $err;
		} else {
		  return false;//$response;
		}
    }   



      function send_voice_sms($msisdn)
    {
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://control.msg91.com/api/retryotp.php?mobile=$msisdn&authkey=281145A66wkWU75d09fab3",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "",
		  CURLOPT_SSL_VERIFYHOST => 0,
		  CURLOPT_SSL_VERIFYPEER => 0,
		  CURLOPT_HTTPHEADER => array(
		    "content-type: application/x-www-form-urlencoded"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  // echo "cURL Error #:" . $err;
			 return false;
		} else {
		  // echo $response;
			 return true;
		}
    } 


     function send_otp1($msisdn,$msg)
    {

		$sid = "VDNSIN";
		$msg = urlencode($msg);
		$type = "txt";
		$url12 = "http://cloud.smsindiahub.in/vendorsms/pushsms.aspx?user=Chetan%20Prajapat&password=Chetan@0640&msisdn=$msisdn&sid=VDNSIN&msg=$msg&fl=0&gwid=2";
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