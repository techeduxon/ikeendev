<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function FCM($Token,$Msg_Body,$Type,$Id='0',$Title='Sukhiya',$tone='default')
{      


		$Firebase_Key = 'AAAA7CftcHM:APA91bF4nekEtzFO0-myTyE8VO7HO43juKD15IhVP59BrXJHRe_8uKZfKCTAy-GdlXyixicsrq69Xou-BzZWP9vgDV078rBCBPlYzbDbLy4j7i9oIoMbEO1vtMD6kv2Ma2Ph_6fNb9rr';
		$Msg_Body=ucfirst($Msg_Body);
		
		if ($tone!='default') {
			//echo $tone;
			$tone = 'beep_beep';
		} 
		
	  ob_start();
	  $notification = array(
	    'body'=> $Msg_Body,
	    'title'	=> $Title,
		'sound'=>$tone,
	    //'icon'=>$Image_Url,
	  );
	  $data= array(
	        'Type' => $Type,
	        'Id' => $Id,
	        'Message' => $Msg_Body,
	        'Title' => $Title,
	       );
	  if(is_array($Token)) {
	      $arrayToSend = array(
	      'registration_ids'=>$Token,
	      'notification' => $notification,
	      'data'=> $data,
	      'priority'=>'high');
	    } else{
	      $arrayToSend = array(
	      'to'=>$Token,
	      'notification' => $notification,
	      'data'=> $data,
	      'priority'=>'high');
	    }
	  $json = json_encode($arrayToSend);

	  $headers = array();
	  $headers[] = 'Content-Type: application/json';
	  $headers[] = 'Authorization: key= '.$Firebase_Key; //server key here

	  $ch = curl_init("https://fcm.googleapis.com/fcm/send");
	  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
	  curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);

	  $response = curl_exec($ch);
	  curl_close($ch);
	  ob_clean();
	}

	?>