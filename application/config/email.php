<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------|
| 							Mailjet Setup 								   |
|--------------------------------------------------------------------------|
*/
$config['protocol']		= 'smtp';
$config['smtp_port']	= '587';
$config['smtp_host']	= 'in-v3.mailjet.com';
$config['smtp_user']	= 'a44c1a82c149e410f2a258adc1106e1a';
$config['smtp_pass']	= 'd53184522b72e38f846ae6c838b54171';
$config['mailtype'] = 'html';
$config['starttls'] = false;
$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;
$config['crlf']			= "\r\n";
$config['newline']		= "\r\n";
?>