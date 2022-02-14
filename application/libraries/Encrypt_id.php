<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encrypt_id {

   function encryptor($action, $string) {
    $output = false;

    $encrypt_method = "AES-256-CBC";
    //pls set your unique hashing key
    $secret_key = 'VAQAVHY2aIjovWBkylQ68eDaPUWSzMbT';
    $secret_iv = '5u0EZSPMYOhoK02eGK2m6IuOMZJWCwoqAly6ybvS2qE5pfjFEzDj1FonjTSlFDmTWohx8mksPKkdcaDe6SqolS9QXBFQixL';
    // hash
    $key = hash('sha256', $secret_key);
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    //do the encyption given text/string/number
    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
    	//decrypt the given text/string/number
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}
}