<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User_contact extends CI_Controller{
  public function __construct(){
    parent::__construct();
    
     $this->load->model('User_model');
    date_default_timezone_set('Asia/Kolkata');
  }
 
  public function Add_contact(){
  	$post=$_POST;
  	$check=$this->User_model->insertData('enquiry_contact',$post);
  	if($check){
  		echo 1;
  	}else{
  		echo 2;
  	}
  	
  }


}