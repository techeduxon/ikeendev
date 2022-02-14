<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------|
| 							Mailjet Setup 								   |
|--------------------------------------------------------------------------|
*/
$config['protocol']		= 'smtp';
$config['smtp_port']	= '80';
$config['smtp_host']	= 'in-v3.mailjet.com';
$config['smtp_user']	= SMTP_USER;
$config['smtp_pass']	= SMTP_PASS;
$config['crlf']			= "\r\n";
$config['newline']		= "\r\n";
?>