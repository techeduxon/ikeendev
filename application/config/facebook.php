<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['facebook_app_id']              = '756794425241542';
$config['facebook_app_secret']          = 'e194f695a087263fa01c45dc8c0e5fb8';
$config['facebook_login_type']          = 'web';
$config['facebook_login_redirect_url']  = 'Facebook_login/facebook_login';
$config['facebook_logout_redirect_url'] = 'facebook_login/logout';
$config['facebook_permissions']         = array('email');
$config['facebook_graph_version']       = 'v2.6';
$config['facebook_auth_on_load']        = TRUE;