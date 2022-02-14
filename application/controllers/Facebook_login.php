<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// session_start();
class Facebook_login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('facebook');
        $this->load->model('User_model');
        $this->load->model('Facebook_Mode','FL');
    }

    public function index() {
        $data['fb'] = $this->getauth();
        $data['LogonUrl'] =  $this->facebook->login_url();
        redirect($data['LogonUrl']);
        
    }

    public function facebook_login(){
        $fb = $this->getauth();
        $check = $this->FL->checkExistOrNot('*',array('regid'=>$fb['id']));
        if(empty($check)){
            // $data = array(
            //     'first_name'=>$fb['first_name'],
            //     'last_name'=>$fb['last_name'],
            //     'email'=>$fb['email'],
            //     'image'=>$fb['picture']['data']['url'],
            //     'regid'=>$fb['id'],
            //     'channel'=>'facebook'
            // );
            $userdata = array(
                'name'=>$fb['first_name'].' '.$fb['last_name'],
                'email'=>$fb['email'],
                'regid'=>$fb['id'],
                'type'=>'Learner',
            );
            $insId = $this->FL->insert_data('tbl_user',$userdata);
            if($insId){
                $check = $this->User_model->getSelectRow('*','tbl_user',array('id'=>$insId));
                  $sesdata = array(
                    'name'         => $check->name,             
                    'contact'      => $check->contact,
                    'email'        => $check->email,
                    'id'           => $check->id ,
                    'type'         => $check->type,
                  );
                $this->session->set_userdata('user_data',$sesdata);
                redirect('/');
            }else{
                redirect('Facebook_login/index');
            }
        }else{
            // echo "<pre>";
            // print_r($check);
            $sesdata = array(
                'name'         => $check[0]['name'],             
                'contact'      => $check[0]['contact'],
                'email'        => $check[0]['email'],
                'id'           => $check[0]['id'] ,
                'type'         => $check[0]['type'],
              );

            
            // print_r($sesdata);die;
            $this->session->set_userdata('user_data',$sesdata);
            redirect('/');
        }
    }

    public function getauth() {
        $userProfile = array();
        if ($this->facebook->is_authenticated()) {
            $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');
       }
        return $userProfile;
    }

    public function logout() {
        $this->facebook->destroy_session();
        redirect('/facebook_login');
    }
}