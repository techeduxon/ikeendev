<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Google_login extends CI_Controller {

 public function __construct(){
  parent::__construct();
  $this->load->model('User_model');
  $this->load->model('Frontend_model');
 }

 function login(){
  include_once APPPATH . "libraries/vendor/autoload.php";

  $google_client = new Google_Client();

  $google_client->setClientId('504805200625-dlmcil74e6r3ckgn49rps9stl3gnhslq.apps.googleusercontent.com'); //Define your ClientID

  $google_client->setClientSecret('4hq5Y-tFaJ0oCZ26v-2twosH'); //Define your Client Secret Key

  $google_client->setRedirectUri('http://techeduxon.com/techeduxon/googleresponse'); //Define your Redirect Uri

  $google_client->addScope('email');

  $google_client->addScope('profile');

  if(isset($_GET["code"])){
   $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

   if(!isset($token["error"])){
    $google_client->setAccessToken($token['access_token']);

    $this->session->set_userdata('access_token',$token['access_token']);

    $google_service = new Google_Service_Oauth2($google_client);

    $data = $google_service->userinfo->get();

    $current_datetime = date('Y-m-d H:i:s');
    $check = $this->User_model->getSelectRow('id','tbl_user',array('email'=>$data['email']));
    // echo "<pre>";
    if(empty($check)){
      $userdata = array(
        'name'=>$data['name'],
        'email'=>$data['email'],
        'google_id'=>$data['id'],
        'type'=>'Learner',
      );
      $this->User_model->insert_data('tbl_user',$userdata);
      $check = $this->User_model->getSelectRow('*','tbl_user',array('email'=>$data['email']));
      $sesdata = array(
        'name'         => $check->name,             
        'contact'      => $check->contact,
        'email'        => $check->email,
        'id'           => $check->id ,
        'type'         => $check->type,
      );
      $this->session->set_userdata('user_data',$sesdata);
    }else{
      $userdata = array(
        'name'=>$data['name'],
        'email'=>$data['email'],
        'google_id'=>$data['id'],
      );
      $this->Frontend_model->update_data('tbl_user',$userdata,array('email'=>$data['email']));
      $check = $this->User_model->getSelectRow('*','tbl_user',array('email'=>$data['email']));
      $sesdata = array(
        'name'         => $check->name,
        'contact'      => $check->contact,
        'email'        => $check->email,
        'id'           => $check->id ,
        'type'         => $check->type,
      );
      $this->session->set_userdata('user_data',$sesdata);
    }
    redirect('/');
   }
  }
  $login_button = '';
  if(!$this->session->userdata('access_token')){
   redirect($google_client->createAuthUrl());
  }else{
    redirect($google_client->createAuthUrl());
  }
 }

 function logout()
 {
  $this->session->unset_userdata('access_token');

  $this->session->unset_userdata('user_data');

  redirect('google_login/login');
 }
 
}
?>
