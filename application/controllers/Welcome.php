<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Welcome extends CI_Controller {

public function __construct()
{
parent::__construct();
$this->load->library('linkedin');
$this->load->config('linkedin');
$this->load->helper('url');
$this->load->model('welcome_model','welcome'); 
}


public function index()
{

$this->load->view('login');

}




public function linkedin_login() {

$user = array();
$ci = get_instance(); // CI_Loader instance
$ci->load->config('linkedin');

//Include the linkedin api php libraries
include_once APPPATH."libraries/Linkedin/http.php";
include_once APPPATH."libraries/Linkedin/oauth_client.php";

$linkedin_api_key = $ci->config->item('linkedin_api_key');
$linkedin_api_secret = $ci->config->item('linkedin_api_secret');
$linkedin_redirect_url = $ci->config->item('linkedin_redirect_url');
$linkedin_scope = $ci->config->item('linkedin_scope');

if((isset($_REQUEST["oauth_init"]) && $_REQUEST["oauth_init"] == '1' ) || 
(isset($_GET["oauth_init"]) && $_GET["oauth_init"] == '1' ) || 
(isset($_REQUEST['oauth_token']) && isset($_REQUEST['oauth_verifier'])) || 
(isset($_GET['oauth_token']) && isset($_GET['oauth_verifier'])) ){


$client = new oauth_client_class;
$client->client_id = $linkedin_api_key;
$client->client_secret = $linkedin_api_secret;
$client->redirect_uri = base_url().$linkedin_redirect_url;
$client->scope = $linkedin_scope;
$client->debug = false;
$client->debug_http = true;
$application_line = __LINE__;

//If authentication returns success
if($success = $client->Initialize()){
if(($success = $client->Process())){
if(strlen($client->authorization_error)){
$client->error = $client->authorization_error;
$success = false;
}elseif(strlen($client->access_token)){
$success = $client->CallAPI('http://api.linkedin.com/v1/people/~:(id,
email-address,first-name,last-name,location,picture-urls::(original),
public-profile-url,formatted-name)', 
'GET',
array('format'=>'json'),
array('FailOnAccessError'=>true), $user);
}
}
$success = $client->Finalize($success);
}

if($client->exit) exit;


$checkemail = $this->db->query('select id,email 
from users where email = "'.$user->emailAddress.'"');
$emailresult = $checkemail->result_array();
if($emailresult[0]['email'] != $user->emailAddress){
$user_information  = array(
'name'           => $user->formattedName,
'first_name'     => $user->firstName,
'last_name'      => $user->lastName,
'location'       => $user->location->name,
'email'          => $user->emailAddress,
'gender'         => '',
'source_id'      => $user->id,
'source'         => 'LinkedIn',
'profilepicture' => $user->pictureUrls->values[0],
);
$this->welcome->insert_user($user_information);
$insert_id = $this->db->insert_id();
$fetchuser = $this->db->query('select * 
        from users where id = "'.$insert_id.'"');
$userdata = $fetchuser->result_array();
$this->session->set_userdata ( 'user_id', $userdata[0]['id'] );
$this->session->set_userdata ( 'user_name', $userdata[0]['name'] );
$this->session->set_userdata ( 'user_email', $userdata[0]['email'] );
$this->session->set_userdata ( 'user_gender', $userdata[0]['gender'] );
$this->session->set_userdata ( 'user_source', $userdata[0]['source'] );
$this->session->set_userdata ( 'user_source_id', $userdata[0]['source_id'] );
}else if($emailresult[0]['email'] == $user->emailAddress){
$update_id = array('source_id'  => $user->id,
            'source'  => 'LinkedIn',
            'profilepicture'=>$user->pictureUrls->values[0],
            'location'=>$user->location->name);
$this->db->where('id', $emailresult[0]['id']);
$this->db->update('users', $update_id);
$fetchuser = $this->db->query('select * 
    from users where id = "'.$emailresult[0]['id'].'"');
$userdata = $fetchuser->result_array();
$this->session->set_userdata ( 'user_id', $userdata[0]['id'] );
$this->session->set_userdata ( 'user_name', $userdata[0]['name'] );
$this->session->set_userdata ( 'user_email', $userdata[0]['email'] );
$this->session->set_userdata ( 'user_gender', $userdata[0]['gender'] );
$this->session->set_userdata ( 'user_source', $userdata[0]['source'] );
$this->session->set_userdata ( 'user_source_id', $userdata[0]['source_id'] );
}
$data['userprofile'] = $this->session->userdata();
redirect('welcome/profile', $data);

}else{
echo 'We are unable fetch your Linkedin information.'; exit;
}



}






public function profile()
{
if($this->session->userdata('user_id') != ''){
$this->data['userprofile']= $this->welcome->fetch_user();
$this->load->view('profile', $this->data, FALSE);
}else{
redirect('welcome', $data);
}
}





public function logout()
{
$this->session->sess_destroy();
redirect(base_url(), redirect);
}


}