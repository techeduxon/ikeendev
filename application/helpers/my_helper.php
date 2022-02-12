<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function sendJson($data){
	//header('Content-Type: application/json');
	echo json_encode($data);
}

function cofirmApiKey($api_key) {
	$app_api_key = 'testPracticeforNyCdrivingLiCenCe!@139248'; 
	if ($api_key == $app_api_key) {
		return TRUE ;
	}
	else{
		return FALSE;
	}
}





?>