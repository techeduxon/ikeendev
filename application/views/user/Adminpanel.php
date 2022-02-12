<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminpanel extends CI_Controller{
  public function __construct(){
    parent::__construct();
    // $this->load->model('DataTable');
        $this->load->model('Admin_panel','a');
        $this->load->model('Frontend_model');
        $this->load->model('User_model');
        $this->load->model('AdminModel','AM');
        $this->load->model('DataTableModel','DTM');
        $this->load->helper('url');
        $this->load->helper('otp_helper');
        //$this->load->helper('fcm_helper');
        // $this->load->helper('mailtemp');
        // $this->load->model('googlecalendar');
        date_default_timezone_set('Asia/Kolkata');
        // $this->payment_status_change();
  }

  public function send_otp_forgot(){
        $contact = $this->input->get('forgotMobile');
        $data=$this->db->select('contact')->where('contact',$contact)->get('admin_login');
        print_r($data);die;
        //$data = $this->User_model->get_single_where('contact','admin_login',array('contact'=>$contact),"","");
        if (!empty($data)) {
            $otp = mt_rand(0000,9999);
            $msg='Your OTP is :'.$otp;
            $telephone = $data[0]['contact'];
            $mobile_otp=send_otp('91'.$telephone,$msg,$otp);
            $this->session->set_userdata('otp',$otp);
            $this->session->set_userdata('contact',$contact);
           echo 1;
        }else{
            echo 2;
        }
    }

    public function resend_otp_forgot(){
        // $contact = $this->input->get('forgotMobile');
        // $data = $this->UM->get_all_where('contact','tbl_user',array('contact'=>$contact),"","");
        // if (!empty($data)) {
            $otp = mt_rand(0000,9999);
            $msg='Your OTP is :'.$otp;
            $telephone = $this->session->userdata('contact');
            $mobile_otp=send_otp('91'.$telephone,$msg,$otp);
            $this->session->set_userdata('otp',$otp);
            $this->session->set_userdata('contact',$telephone);
            echo 1;
        // }else{
        //     echo 2;
        // }
    }


    public function verify_otp_frog(){
        $user_otp = $this->input->get('otp1');
        $ses_otp = $this->session->userdata('otp');

        if ($user_otp == $ses_otp) {
            echo 1;
        }else{
            echo 2;
        }
    }

    
    public function set_new_pass_trial(){
        print_r($_POST); die;
    }

    public function set_new_pass(){

        $password = $this->input->get('changePass');
      
        $contact = $this->session->userdata('contact');

        $set = array('password' => $password);
        $where = array('contact' => $contact);
        $check = $this->Frontend_model->update_data('tbl_admin',$set,$where);
        if ($check) {
            echo 1;
            // $this->session->sess_destroy();
        }else{
            echo 2;
        }

    }
     public function demo(){
      
        $a=$this->session->userdata(); 
        echo "<pre>";print_r($a);       
    } 
   
    public function Login(){

        $this->load->view('login');         
    }      
    public function check_login(){
     $email = $this->input->post('email');
     $password = $this->input->post('password');
     $check = $this->Frontend_model->fetch_condrecordwithfield('tbl_admin',array('email' =>$email ,'password' =>$password ),"id,name,email"); 
    if ($check) {
      $name = $check->name;
      $email = $check->email;
      $id = $check->id;
      // $mobile = $check->mobile;
      $new_data = array(
        'loginss' => TRUE,
        'name'  => $name,
        'email' => $email,
        'id'  => $id,
        'type' => 'Admin'
      );
      //echo "<pre>";print_r($new_data);die;
    
      $this->session->set_userdata('logsess',$new_data);
      redirect(base_url('Adminpanel'));
   }else
   {
       $this->session->set_flashdata('error','<h6 style="background-color:#fa5838;color: #0a0a0a;height: 30px;font-size: large;text-align: center;">Invalid Email Or Password</h6>');
      redirect(base_url('Adminpanel/Login'));
   }
}
  
  public function Logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Adminpanel/Login'));
       exit();
    }
      
  public function _chk_if_login()
    {
        $loginss = $this->session->userdata('logsess');
        if($loginss['loginss'] == false || $loginss['name'] == '') {
          $this->session->sess_destroy();
          redirect(base_url('Adminpanel/Login'));
            exit();         
        }
    }


    public function index(){
      $this->_chk_if_login();
        $this->load->view('index');         
    }  
    
    public function Dashboard(){
      $this->_chk_if_login();
        $this->load->view('dashboard');         
    }
   
    public function Forget_password(){
      $this->_chk_if_login();
        $this->load->view('forget_password');         
    } 
    public function Categories(){
      $this->_chk_if_login();

        $this->load->view('categories');         
    }
    public function SaveCategory(){
    //$this->_check_log_in('AdminPanel/AddProduct');
    	$image = '';
    	if (isset($_FILES['image']['name'])) {
         $main_image = "Image-".mt_rand(000,999).time()."-jpeg";
         $path = 'uploads/category-Images/'.$main_image;
            if(move_uploaded_file($_FILES['image']['tmp_name'], $path)){
            	$image = $main_image;
            }
        }
        // echo $image;die;
      if ($_POST) {
        $data = array(
          'category'=>$this->input->post('category_name'),
          'remark'=>$this->input->post('remark'),
          'image'=>$image
        );
        $check = $this->AM->insert_data('tbl_category',$data);
        if ($check) {
          $this->session->set_flashdata('message','<div class="alert alert-success">Successfully Added Category!.</div>');
          redirect('Adminpanel/Categories');
        }else{
          $this->session->set_flashdata('message','<div class="alert alert-danger">Something Went Wrong Please Try After Some Time!.</div>');
          redirect('Adminpanel/Categories');
        }
      }else{
          $this->session->set_flashdata('message','<div class="alert alert-danger">Unkonw Method!.</div>');
          redirect('Adminpanel/Categories');
      }
    }
    public function DeleteCategory(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_category',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;  
    }
    public function fetch_single_category(){

        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_category';
        $result = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($result)
        {
          echo json_encode($result);
        }
        else
        {
          echo false;
        }
    } 

    public function update_category(){
        // $this->_chk_if_login();
        $image = $_POST['oldImageSrc'];
    	if ($_FILES['image']['size'] > 1) {
         $main_image = "Image-".mt_rand(000,999).time()."-jpeg";
         $path = 'uploads/category-Images/'.$main_image;
            if(move_uploaded_file($_FILES['image']['tmp_name'], $path)){
            	$image = $main_image;
            }
        }
        $id = $this->input->post('ca_id');
        $category_name=$this->input->post('edit_category_name');
        $remark=$this->input->post('edit_remark');
        $data = array(
             'category' =>$category_name ,
             'remark'   =>$remark ,
             'image'=>$image
        );
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_category',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }
        
    }

    public function Sub_categories(){
        $this->_chk_if_login();
        $data['categories'] = $this->AM->getSelectWhereResult('*','tbl_category',array('id!='=>0),"","");
        $this->load->view('sub-categories',$data);         
    }

    public function SaveSubCategory(){
        //$this->_check_log_in('AdminPanel/AddProduct');
        if ($_POST) {
          $category_id=$this->input->post('category_id');
          $category_name = $this->AM->getSelectWhereRow('*','tbl_category',array('id'=>$category_id),"","");
          $data = array(
            'category_id'=>$category_id,
            'category_name'=>$category_name->category,
            'subcategory'=>$this->input->post('subcategory_name'),
            'remark'=>$this->input->post('remark'),
            
          );

          $check = $this->AM->insert_data('tbl_subcategory',$data);
          //echo "<pre>";print_r($check);die;
          if ($check) {
            $this->session->set_flashdata('message','<div class="alert alert-success">Successfully Added Category!.</div>');
            redirect('Adminpanel/Sub_categories');
          }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger">Something Went Wrong Please Try After Some Time!.</div>');
            redirect('Adminpanel/Categories');
          }
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger">Unkonw Method!.</div>');
            redirect('Adminpanel/Sub_categories');
        }
    }

    public function DeleteSubCategory(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_subcategory',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }

    public function fetch_single_subcategory(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_subcategory';
        $result = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($result)
        {
          echo json_encode($result);
        }
        else
        {
          echo false;
        }
    } 

    public function update_subcategory(){
        // $this->_chk_if_login();
        $id = $this->input->post('ca_id');
        $edit_category_id=$this->input->post('edit_category_id');
        $edit_subcategory=$this->input->post('edit_subcategory');
        $category_name = $this->AM->getSelectWhereRow('*','tbl_category',array('id'=>$edit_category_id),"","");
        $remark=$this->input->post('edit_remark');
        $data = array(
             'category_id'=>$edit_category_id,
             'category_name' =>$category_name->category ,
             'subcategory'=>$edit_subcategory,
             'remark'   =>$remark ,
        );
        //echo "<pre>";print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_subcategory',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }
        
    }

    public function Brand(){
      $this->_chk_if_login();
        $this->load->view('brand');         
    }
    public function SaveBrand(){
      //$this->_check_log_in('AdminPanel/AddProduct');
      if ($_POST) {
        $data = array(
          'brand'=>$this->input->post('brand_name'),
          'remark'=>$this->input->post('remark'),
          
        );

        $check = $this->AM->insert_data('tbl_brand',$data);
        if ($check) {
           $this->session->set_flashdata('message','<div class="alert alert-success">Successfully Added Brand!.</div>');
          redirect('Brand');
        }else{
          $this->session->set_flashdata('message','<div class="alert alert-danger">Something Went Wrong Please Try After Some Time!.</div>');
          redirect('Brand');
        }
      }else{
        $this->session->set_flashdata('message','<div class="alert alert-danger">Unkonw Method!.</div>');
        redirect('Brand');
      }
    }

    public function DeleteBrand(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_brand',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }

    public function fetch_single_brand(){

        $id = $this->input->post('id');
     
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_brand';
        $result = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($result)
        {
          echo json_encode($result);
        }
        else
        {
          echo false;
        }
    } 

    public function update_brand(){
        // $this->_chk_if_login();
        
        $id = $this->input->post('ca_id');
        $brand_name=$this->input->post('edit_brand_name');
        $remark=$this->input->post('edit_remark');
        $data = array(
             'brand' =>$brand_name ,
             'remark'   =>$remark ,
        );
      
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_brand',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }
        
    }

    
    public function Unit(){
      $this->_chk_if_login();
        $this->load->view('unit');         
    }

    public function SaveUnit(){
      //$this->_check_log_in('AdminPanel/AddProduct');
      if ($_POST) {
        $data = array(
          'unit'=>$this->input->post('unit_name'),
          'remark'=>$this->input->post('remark'),
          
        );

        $check = $this->AM->insert_data('tbl_unit',$data);
        if ($check) {
          $this->session->set_flashdata('message','<div class="alert alert-success">Successfully Added Unit!.</div>');
          redirect('Unit');
        }else{
          $this->session->set_flashdata('message','<div class="alert alert-danger">Something Went Wrong Please Try After Some Time!.</div>');
          redirect('Unit');
        }
      }else{
          $this->session->set_flashdata('message','<div class="alert alert-danger">Unkonw Method!.</div>');
          redirect('Unit');
      }
    }

    public function DeleteUnit(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_unit',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_unit(){

        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_unit';
        $result = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($result)
        {
          echo json_encode($result);
        }
        else
        {
          echo false;
        }
    } 

    public function update_unit(){
        // $this->_chk_if_login();
        $id = $this->input->post('ca_id');
        $category_name=$this->input->post('edit_unit_name');
        $remark=$this->input->post('edit_remark');
        $data = array(
             'unit' =>$category_name ,
             'remark'   =>$remark ,
        );
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_unit',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }
        
    }
    public function Variant_size(){
        $this->_chk_if_login();
        $data['units'] = $this->AM->getSelectWhereResult('*','tbl_unit',array('id!='=>0),"","");
        $this->load->view('variant',$data);         
    }

    public function SaveVariantSize(){
        //$this->_check_log_in('AdminPanel/AddProduct');
        if ($_POST) {
          $unit_id=$this->input->post('unit_id');
          $category_name = $this->AM->getSelectWhereRow('*','tbl_unit',array('id'=>$unit_id),"","");
          $data = array(
            'unit_id'=>$unit_id,
            'unit_name'=>$category_name->unit,
            'variant_size'=>$this->input->post('size_name'),
          );
          $check = $this->AM->insert_data('tbl_variant_size',$data);
          //echo "<pre>";print_r($check);die;
          if ($check) {
            $this->session->set_flashdata('message','<div class="alert alert-success">Successfully Added variant size!.</div>');
            redirect('Variant_size');
          }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger">Something Went Wrong Please Try After Some Time!.</div>');
            redirect('Variant_size');
          }
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger">Unkonw Method!.</div>');
            redirect('Variant_size');
        }
    }
    public function DeleteVariantSize(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_variant_size',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }

    public function fetch_single_variant_size(){

        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_variant_size';
        $result = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($result)
        {
          echo json_encode($result);
        }
        else
        {
          echo false;
        }
    } 

    public function update_variant_size(){
        // $this->_chk_if_login();
        $id = $this->input->post('ca_id');
        $edit_unit_id=$this->input->post('edit_unit_id');
        $edit_size=$this->input->post('edit_size');
        $unit_name = $this->AM->getSelectWhereRow('*','tbl_unit',array('id'=>$edit_unit_id),"","");
        $data = array(
             'unit_id'=>$edit_unit_id,
             'unit_name' =>$unit_name->unit,
             'Variant_size'=>$edit_size,
             
        );
        //echo "<pre>";print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_variant_size',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }
        
    }

    public function Manage_state(){
      $this->_chk_if_login();
        $this->load->view('manage-state');         
    }
    
    public function SaveState(){
      //$this->_check_log_in('AdminPanel/AddProduct');
      if ($_POST) {
        $data = array(
          'state'=>$this->input->post('state_name'),
          'remark'=>$this->input->post('remark'),
          
        );
        $check = $this->AM->insert_data('tbl_state',$data);
        //echo "<pre>";print_r($check);die;
        if ($check) {
          $this->session->set_flashdata('message','<div class="alert alert-success">Successfully Added Category!.</div>');
          redirect('State');
        }else{
          $this->session->set_flashdata('message','<div class="alert alert-danger">Something Went Wrong Please Try After Some Time!.</div>');
          redirect('State');
        }
      }else{
         $this->session->set_flashdata('message','<div class="alert alert-danger">Unkonw Method!.</div>');
         redirect('State');
      }
    }
    public function DeleteState(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_state',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_state(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_state';
        $result = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($result)
        {
          echo json_encode($result);
        }
        else
        {
          echo false;
        }
    } 

    public function update_state(){
        // $this->_chk_if_login();
        $id = $this->input->post('ca_id');
        $edit_state=$this->input->post('edit_state');
        $remark=$this->input->post('edit_remark');
        $data = array(
             'state'=>$edit_state,
             'remark'   =>$remark ,
        );
        //echo "<pre>";print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_state',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }
        
    }
    public function Manage_city (){
      $this->_chk_if_login();
        $data['states'] = $this->AM->getSelectWhereResult('*','tbl_state',array('id!='=>0),"","");
        $this->load->view('manage-city',$data);         
    }
    
    public function SaveCity(){
      //$this->_check_log_in('AdminPanel/AddProduct');
      if ($_POST) {
        $state_id=$this->input->post('state_id');
        $state_name = $this->AM->getSelectWhereRow('*','tbl_state',array('id'=>$state_id),"","");
        $data = array(
          'state_id'=>$state_id,
          'state_name'=>$state_name->state,
          'city'=>$this->input->post('city_name'),
          'remark'=>$this->input->post('remark'),
          
        );
        $check = $this->AM->insert_data('tbl_city',$data);
        //echo "<pre>";print_r($check);die;
        if ($check) {
            $this->session->set_flashdata('message','<div class="alert alert-success">Successfully Added Category!.</div>');
            redirect('City');
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger">Something Went Wrong Please Try After Some Time!.</div>');
            redirect('City');
        }
      }else{
           $this->session->set_flashdata('message','<div class="alert alert-danger">Unkonw Method!.</div>');
           redirect('City');
      }
    }
    public function DeleteCity(){
      //$this->_check_log_in('AdminPanel/ViewProduct');
      $id = $this->input->get('id');
      $check = $this->AM->deleteData('tbl_city',array('id'=>$id));
      if ($check) {
        $res = json_encode(array('status'=>'success'));
      }else{
        $res = json_encode(array('status'=>'failure'));
      }
      echo $res;
    }
    public function fetch_single_city(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_city';
        $result = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($result)
        {
          echo json_encode($result);
        }
        else
        {
          echo false;
        }
    } 

    public function update_city(){
        // $this->_chk_if_login();
        $id = $this->input->post('ca_id');
        $edit_state_id=$this->input->post('edit_state_id');
        $state_name = $this->AM->getSelectWhereRow('*','tbl_state',array('id'=>$edit_state_id),"","");
        $remark=$this->input->post('edit_remark');
        $edit_city=$this->input->post('edit_city');
        $data = array(
            'state_id'=>$edit_state_id,
            'state_name'=>$state_name->state,
            'city'=>$edit_city,
            'remark'   =>$remark ,
        );
        //echo "<pre>";print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_city',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }
        
    }
    public function Manage_city_area (){
      $this->_chk_if_login();
        $data['states'] = $this->AM->getSelectWhereResult('*','tbl_state',array('id!='=>0),"","");
        $data['cities'] = $this->AM->getSelectWhereResult('*','tbl_city',array('id!='=>0),"","");
        $data['cityarea'] = $this->AM->getSelectWhereResult('*','tbl_cityarea',array('id!='=>0),"","");
         //echo "<pre>";print_r($data);die;
        $this->load->view('manage-area',$data);        
    }
    public function getcity(){
        $state_id = $this->input->post('state_id');
        $selectedcity = $this->User_model->get_all_where('id,city','tbl_city',array('state_id'=>$state_id),'','');
        $option= '';
        $option = '<option value="">select city</option>';
        foreach ($selectedcity as $key => $value) {
          $option .= '<li><option value="'.$value['id'].'">'.$value['city'].'</option></li>';
        }
        echo $option;
    }
    public function geteditcity(){
        $state_id = $this->input->post('edit_state_id');
        $selectedcity = $this->User_model->get_all_where('id,city','tbl_city',array('state_id'=>$state_id),'','');
        $option= '';
        $option = '<option value="">select city</option>';
        foreach ($selectedcity as $key => $value) {
          $option .= '<li><option value="'.$value['id'].'">'.$value['city'].'</option></li>';
        }
        echo $option;
    }
    public function SaveCityArea(){
        //$this->_check_log_in('AdminPanel/AddProduct');
        if ($_POST) {
          $state_id=$this->input->post('state_id');
          $state_name = $this->AM->getSelectWhereRow('*','tbl_state',array('id'=>$state_id),"","");
          $city_id=$this->input->post('city_id');
          $city_name = $this->AM->getSelectWhereRow('*','tbl_city',array('id'=>$city_id),"","");
          $data = array(
            'state_id'=>$state_id,
            'state_name'=>$state_name->state,
            'city_id'=>$city_id,
            'city_name'=>$city_name->city,
            'area'=>$this->input->post('city_area_name'),
            'remark'=>$this->input->post('remark'),
            
          );

          $check = $this->AM->insert_data('tbl_cityarea',$data);
          //echo "<pre>";print_r($check);die;
          if ($check) {
            $this->session->set_flashdata('message','<div class="alert alert-success">Successfully Added Category!.</div>');
            redirect('City_area');
          }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger">Something Went Wrong Please Try After Some Time!.</div>');
            redirect('City_area');
          }
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger">Unkonw Method!.</div>');
            redirect('City_area');
        }
    }
    public function DeleteCityArea(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_cityarea',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_cityarea(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_cityarea';
        $result = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($result)
        {
          echo json_encode($result);
        }
        else
        {
          echo false;
        }
    } 

    public function update_cityarea(){
        // $this->_chk_if_login();
        $id = $this->input->post('ca_id');
        $edit_state_id=$this->input->post('edit_state_id');
        $edit_city_id=$this->input->post('edit_city_id');
        $state_name = $this->AM->getSelectWhereRow('*','tbl_state',array('id'=>$edit_state_id),"","");
        $city_name = $this->AM->getSelectWhereRow('*','tbl_city',array('id'=>$edit_city_id),"","");
        $edit_remark=$this->input->post('edit_remark');
        $edit_area=$this->input->post('edit_area');
        $data = array(
            'state_id'=>$edit_state_id,
            'state_name'=>$state_name->state,
            'city_id'=>$edit_city_id,
            'city_name'=>$city_name->city,
            'area'=>$edit_area,
            'remark'=>$edit_remark,
        );
        //echo "<pre>";print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_cityarea',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }
        
    }
    public function Shipping(){
      $this->_chk_if_login();
        $data['cities']=$this->User_model->get_all_where('*','tbl_city',array('id!='=>0),'','');
        //print_r($data['cities']);die;
        $this->load->view('shipping',$data);         
    }
    public function SaveShipping(){
      //$this->_check_log_in('AdminPanel/AddProduct');
      if ($_POST) {
        $data = array(
          'city_id'=>$this->input->post('city_id'),
          'area_id'=>$this->input->post('cityarea_id'),
          'shipping'=>$this->input->post('shipping'),
          
        );

        $check = $this->AM->insert_data('tbl_charge',$data);
        if ($check) {
           $this->session->set_flashdata('message','<div class="alert alert-success">Successfully Added shipping!.</div>');
          redirect('Adminpanel/Shipping');
        }else{
          $this->session->set_flashdata('message','<div class="alert alert-danger">Something Went Wrong Please Try After Some Time!.</div>');
          redirect('Adminpanel/Shipping');
        }
      }else{
        $this->session->set_flashdata('message','<div class="alert alert-danger">Unkonw Method!.</div>');
        redirect('Adminpanel/Shipping');
      }
    }

    public function DeleteShipping(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_charge',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }

    public function fetch_single_shipping(){

        $id = $this->input->post('id');
     
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_charge';
        $result = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($result)
        {
          echo json_encode($result);
        }
        else
        {
          echo false;
        }
    } 

    public function update_shipping(){
        // $this->_chk_if_login();
        
        $id = $this->input->post('ca_id');
        $shipping=$this->input->post('edit_shipping');
        $city_id=$this->input->post('edit_city_id');
        $area_id=$this->input->post('edit_cityarea_id');
        
        $data = array(
             'shipping' =>$shipping,
             'area_id'   =>$area_id,
             'city_id'=>$city_id 
        );
      
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_charge',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }
        
    }
    
    public function getsubcategory(){
       $category_id = $this->input->post('category_id');
      $subcategory = $this->User_model->get_all_where('id,subcategory','tbl_subcategory',array('category_id'=>$category_id),'','');
          $option= '';
        
      $option = '<option value="">select subcategory</option>';
      foreach ($subcategory as $key => $value) {
        $option .= '<li><option value="'.$value['id'].'">'.$value['subcategory'].'</option></li>';
      }
      echo $option;
    }
    public function act_or_dea(){
      $id=$this->input->post('id');
      $products=$this->AM->getSelectWhereRowArray('admin_approve','tbl_product',array('id'=>$id),"","");
      if($products['admin_approve'] == 1){
        $data=array('admin_approve'=>0);
        $where=array('id'=>$id);
        $result = $this->AM->updateData($data,'tbl_product',$where);
        if ($result) {
          echo 1;
        }

      }else{
        $data=array('admin_approve'=>1);
        $where=array('id'=>$id);
        $result = $this->AM->updateData($data,'tbl_product',$where);
        if ($result) {
          echo 1;
        }
      }
    }
     public function Coupon(){
      $this->_chk_if_login();

        $this->load->view('coupon');         
    }
    public function SaveCoupon(){
    //$this->_check_log_in('AdminPanel/AddProduct');
      if ($_POST) {
        $data = array(
          'name'          =>$this->input->post('name'),
          'quantity'      =>$this->input->post('quantity'),
          'discount'      =>$this->input->post('discount'),
          'start_date'    =>$this->input->post('start_date'),
          'end_date'      =>$this->input->post('end_date'),
          'min_price'     =>$this->input->post('min_price'),
          'max_price'     =>$this->input->post('max_price'),
        
        );
        $check = $this->AM->insert_data('tbl_coupon',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }
      }else{
        echo 3;
      }
    }
    public function DeleteCoupon(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_coupon',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;  
    }
    public function fetch_single_coupon(){

        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_coupon';
        $result = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($result)
        {
          echo json_encode($result);
        }
        else
        {
          echo false;
        }
    } 

    public function update_coupon(){
        // $this->_chk_if_login();
      
        $id = $this->input->post('ca_id');

                $data = array(
          'name'          =>$this->input->post('edit_name'),
          'quantity'      =>$this->input->post('edit_quantity'),
          'discount'      =>$this->input->post('edit_discount'),
          'start_date'    =>$this->input->post('edit_start_date'),
          'end_date'      =>$this->input->post('edit_end_date'),
          'min_price'     =>$this->input->post('edit_min_price'),
          'max_price'     =>$this->input->post('edit_max_price'),
        
        );
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_coupon',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }
        
    }
    public function Adds(){
      $this->_chk_if_login();

        $this->load->view('adds');         
    }
    public function SaveAdds(){
    //$this->_check_log_in('AdminPanel/AddProduct');
      $image = '';
      if (isset($_FILES['image']['name'])) {
         $main_image = "Image-".mt_rand(000,999).time()."-jpeg";
         $path = 'uploads/adds_image/'.$main_image;
            if(move_uploaded_file($_FILES['image']['tmp_name'], $path)){
              $image = $main_image;
            }
        }
      
      if ($_POST) {
        $data = array(
          'title'=>$this->input->post('title'),
          'url'=>$this->input->post('url'),
          'image'=>$image
        );
        //print_r($data);die;
        $check = $this->AM->insert_data('tbl_adds',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }
      }else{
          echo 3;
          }
    }
    public function DeleteAdds(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_adds',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;  
    }
    public function fetch_single_adds(){

        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_adds';
        $result = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($result)
        {
          echo json_encode($result);
        }
        else
        {
          echo false;
        }
    } 

    public function update_adds(){
        // $this->_chk_if_login();
        $image = $this->input->post('last_images');
      if ($_FILES['edit_image']['size'] > 1) {
         $main_image = "Image-".mt_rand(000,999).time()."-jpeg";
         $path = 'uploads/adds_image/'.$main_image;
            if(move_uploaded_file($_FILES['edit_image']['tmp_name'], $path)){
              $image = $main_image;
            }
        }
        $id = $this->input->post('ca_id');
        $category_name=$this->input->post('edit_title');
        $remark=$this->input->post('edit_url');
        $data = array(
             'title' =>$category_name ,
             'url'   =>$remark ,
             'image'=>$image
        );
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_adds',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }
        
    }


    public function Add_product (){
      $this->_chk_if_login();
        $data['units'] = $this->AM->getSelectWhereResult('*','tbl_unit',array('id!='=>0),"","");
        $data['brands'] = $this->AM->getSelectWhereResult('*','tbl_brand',array('id!='=>0),"","");
        $data['categories'] = $this->AM->getSelectWhereResult('*','tbl_category',array('id!='=>0),"","");
        $data['subcategories'] = $this->AM->getSelectWhereResult('*','tbl_subcategory',array('id!='=>0),"","");
        $data['cityareas'] = $this->AM->getSelectWhereResult('*','tbl_cityarea',array('id!='=>0),"","");
        $data['vendors'] = $this->AM->getSelectWhereResult('*','tbl_vendor',array('id!='=>0),"","");
        $this->load->view('add_product',$data);         
    }          
    public function addProduct(){
      if ($_POST) {
       // echo "<pre>";print_r($_POST);die;
        if (isset($_FILES['main_image']['name'])) {
         $main_image = "main_pro-".mt_rand(000,999).time()."-jpeg";
         $path = 'uploads/product_main_image/'.$main_image;
                @move_uploaded_file($_FILES['main_image']['tmp_name'], $path);
                $product_main_image = $main_image;
        }
       
       if (isset($_FILES['other_image']['name'])) {
         $cnt = count($_FILES['other_image']['name']);
              $product_other_image = array();
              for($i=0;  $i<$cnt; $i++){
              $ex = pathinfo($_FILES['other_image']['name'][$i],PATHINFO_EXTENSION);
              $name = 'other_product-'.rand().'-jpeg';
              $path = 'uploads/product_other_image/'.$name;
                if (move_uploaded_file($_FILES['other_image']['tmp_name'][$i], $path)) {
                    $product_other_image[] = $name;
                  }
              }
        }
        $product_other_image1=implode(",",$product_other_image);
        
       // if (isset($_FILES['variant_other_imag']['name'])) {
       //   $cnt = count($_FILES['variant_other_imag']['name']);
       //        $variant_other_image = array();
       //        for($i=0;  $i<$cnt; $i++){
       //        $ex = pathinfo($_FILES['variant_other_imag']['name'][$i],PATHINFO_EXTENSION);
       //        $name = 'variant_other_image-'.rand().'-jpeg';
       //        $path = 'uploads/variant_other_image/'.$name;
       //          if (move_uploaded_file($_FILES['variant_other_imag']['tmp_name'][$i], $path)) {
       //              $variant_other_image[] = $name;
       //            }
       //        }
       //  }
        // $variant_other_image1=implode(",",$variant_other_image);
        
         // if (isset($_FILES['variant_main_image']['name'])) {
         //           $variant_main_imag = "variant_main_pro-".mt_rand(000,999).time()."-jpeg";
         //           $path = 'uploads/variant_main_image/'.$variant_main_imag;
         //                  @move_uploaded_file($_FILES['variant_main_image']['tmp_name'], $path);
         //                  $variant_main_image1[] = $variant_main_imag;
         //          }
       
        
        $category_id     = $this->input->post('category_id');
        $category_name   =$this->AM->getSelectWhereRow('*','tbl_category',array('id'=>$category_id),"","");
        $subcategory_id  = $this->input->post('subcategory_id');
        $subcategory_name=$this->AM->getSelectWhereRow('*','tbl_subcategory',array('id'=>$subcategory_id),"","");
        // $brand_id        = $this->input->post('brand_id');
        // $brand_name      =$this->AM->getSelectWhereRow('*','tbl_brand',array('id'=>$brand_id),"","");
        $cityarea_id     = $this->input->post('cityarea_id');
        $cityarea_name   =$this->AM->getSelectWhereRow('*','tbl_cityarea',array('id'=>$cityarea_id),"","");
        $data = array(
             'product_name'     => $this->input->post('product_name'),
             'product_sku'      => $this->input->post('product_sku'),
             'category_id'      => $category_id,
             'category_name'    => $category_name->category,
             'subcategory_id'   => $subcategory_id,
             'subcategory_name' => $subcategory_name->subcategory,
             'cityarea_id'      => $cityarea_id,
             'cityarea_name'    => $cityarea_name->area,
             'stock'            => $this->input->post('stock'),
             'min_stock'        => $this->input->post('min_stock'),
             'short_description'=> $this->input->post('short_desc'),
             'long_description' => $this->input->post('long_desc'),
             'main_image'       => $product_main_image,
             'other_image'      => $product_other_image1,
             'added_by'         => 'admin',
             'vendor_id'        => $this->input->post('vendor_id'),
             // 'variant'=>1,
             // 'variant'=> json_encode($variant),

      );
      
      //echo "<pre>";print_r($data);die;
        $result = $this->AM->insert_data('tbl_product',$data);
        if ($result){
            $this->session->set_flashdata('message','<div class="alert alert-success">Product Detail; Successfully Inserted!.</div>');
            redirect('Adminpanel/View_Product');
          }else{
             $this->session->set_flashdata('message','<div class="alert alert-success">Failed To Insert Data!.</div>');
              redirect('Adminpanel/Product');
          }
              
      }
    }
    public function Edit_product(){
      $this->_chk_if_login();
          $p_id=$this->input->get('id');
          $data['categories'] = $this->AM->getSelectWhereResult('*','tbl_category',array('status'=>1),"","");
          $data['subcategories'] = $this->AM->getSelectWhereResult('*','tbl_subcategory',array('status'=>1),"","");
          $data['cityareas'] = $this->AM->getSelectWhereResult('*','tbl_cityarea',array('status'=>1),"","");
          $data['product']=$this->db->select('*')->from('tbl_product')->where('id',$p_id)->get()->row_array();
          //echo "<pre>";print_r($data);die;
          $this->load->view('edit_prodduct_admin',$data);
     }
     public function update_product(){
       // echo "<pre>";print_r($_FILES);die;
        if ($_FILES['main_image']['size'] >1) {
         $main_image = "main_pro-".mt_rand(000,999).time()."-jpeg";
         $path = 'uploads/product_main_image/'.$main_image;
                @move_uploaded_file($_FILES['main_image']['tmp_name'], $path);
                $product_main_image = $main_image;
        }else{
                $product_main_image=$this->input->post('last_main_image');
        }
        $otherImage=$this->input->post('otherImage');
        $product_other_image = array();
       if ($_FILES['other_image']['size'][0] >1) {
         $cnt = count($_FILES['other_image']['name']);
              for($i=0;  $i<$cnt; $i++){
              $ex = pathinfo($_FILES['other_image']['name'][$i],PATHINFO_EXTENSION);
              $name = 'other_product-'.rand().'-jpeg';
              $path = 'uploads/product_other_image/'.$name;
                if (move_uploaded_file($_FILES['other_image']['tmp_name'][$i], $path)) {
                    $product_other_image[] = $name;
                  }
              }
            $otherImage=explode(',',$otherImage);
            $product_other_image=array_merge($otherImage,$product_other_image);
            $product_other_image=implode(',',$product_other_image);

        }else{
               $product_other_image=$this->input->post('otherImage');
        }
 
        $category_id     = $this->input->post('category_id');
        $category_name   =$this->AM->getSelectWhereRow('*','tbl_category',array('id'=>$category_id),"","");
        $subcategory_id  = $this->input->post('subcategory_id');
        $subcategory_name=$this->AM->getSelectWhereRow('*','tbl_subcategory',array('id'=>$subcategory_id),"","");
        $cityarea_id     = $this->input->post('cityarea_id');
        $cityarea_name   =$this->AM->getSelectWhereRow('*','tbl_cityarea',array('id'=>$cityarea_id),"","");
        $data = array(
             'product_name'     => $this->input->post('product_name'),
             'product_sku'      => $this->input->post('product_sku'),
             'category_id'      => $category_id,
             'category_name'    => $category_name->category,
             'subcategory_id'   =>$subcategory_id,
             'subcategory_name' => $subcategory_name->subcategory,
             'cityarea_id'      =>$cityarea_id,
             'cityarea_name'    =>$cityarea_name->area,
             'stock'            =>$this->input->post('stock'),
             'min_stock'        =>$this->input->post('min_stock'),
             'short_description'=>$this->input->post('short_desc'),
             'long_description' =>$this->input->post('long_desc'),
             'main_image'       => $product_main_image,
             'other_image'      => $product_other_image,
            

      );
      $where=array('id'=>$this->input->post('ca_id'));
      //echo "<pre>";print_r($data);die;
        $result = $this->AM->updateData($data,'tbl_product',$where);
        if ($result){
            $this->session->set_flashdata('message','<div class="alert alert-success"> Successfully Updated!.</div>');
            redirect('adminpanel/View_Product');
          }else{
             $this->session->set_flashdata('message','<div class="alert alert-success">Failed To Insert Data!.</div>');
              redirect('adminpanel/Product');
          }
              
      
     }
     public function DeleteProductList(){
      //$this->_check_log_in('AdminPanel/ViewProduct');
      $id = $this->input->get('id');
      $check = $this->AM->deleteData('tbl_product',array('id'=>$id));
      if ($check) {
        $res = json_encode(array('status'=>'success'));
      }else{
        $res = json_encode(array('status'=>'failure'));
      }
      echo $res;
     }
    public function Add_Variant (){ 
        // echo "<pre>";print_r($_POST);die;
        $a=count($this->input->post('quantity'));
        $quantity = $this->input->post('quantity');
        $mrp = $this->input->post('mrp');
        $selling_price = $this->input->post('selling_price');
        $index = $this->input->post('index');
        //$size_id = $this->input->post('size_id');

        $va = $this->db->select('variant')->where('id',$this->input->post('product_id'))->get('tbl_product')->row();
        
        if(!empty($va->variant) && $va->variant != 'null'){
          $va11 = json_decode($va->variant,TRUE);
          $c = count($va11);
        }else{ 
        $c=0;
        }
        $variant = array(); 
        for ($i=0; $i < $a ; $i++) {
          $l=$i;
          $var_img_count=count($_FILES['variant_main_image']['name']);
          for($k=0;  $k<$var_img_count; $k++){
            if (isset($_FILES['variant_main_image']['name'])) {
              $variant_main_imag = "variant_main_pro-".mt_rand(000,999).time()."-jpeg";
              $path = 'uploads/variant_main_image/'.$variant_main_imag;
              @move_uploaded_file($_FILES['variant_main_image']['tmp_name'][$k], $path);             
                $variant_main_image1[] = $variant_main_imag;
            }
          }
          
          $variant_other_image=$_FILES['variant_other_imag'.$index[$i]]['name'];
          $cnt = count( $variant_other_image);
          $variant_other_image = array();
          for($j=0;  $j<$cnt; $j++){
            $ex = pathinfo($_FILES['variant_other_imag'.$index[$i]]['name'][$j],PATHINFO_EXTENSION);
            $name = 'variant_other_image-'.rand().'-jpeg';
            $path = 'uploads/variant_other_image/'.$name;
            if (move_uploaded_file($_FILES['variant_other_imag'.$index[$i]]['tmp_name'][$j], $path)) {
              $variant_other_image[] = $name;
            }
          }
          $variant_other_image11=implode(",",$variant_other_image);
          $unit_id = $this->input->post('unit_id');
          $unit_name=$this->AM->getSelectWhereRow('*','tbl_unit',array('id'=>$unit_id[$i]),"","");
          $variant_size_id = $this->input->post('variant_size_id');
          $size_name=$this->AM->getSelectWhereRow('*','tbl_variant_size',array('id'=>$variant_size_id[$i]),"","");
            $variant[$i] = array(
              'variant_id'=>$c+=1,
              'quantity' => $quantity[$i],
              'mrp' => $mrp[$i],
              'selling_price' => $selling_price[$i],
              'variant_main_image'=>$variant_main_image1[$i],
              'variant_other_image'=>$variant_other_image11,                              
            );
            foreach($_POST['dvals'] as $val){
              $variant[$i][$val] = $_POST[$val][$l];
            }
         }
          $va1 = $this->db->select('variant_checked')->where('id',$this->input->post('product_id'))->get('tbl_product')->row();
          if(!empty($va1)){
            $va1 = explode(',',$va1->variant_checked);
            $var_ch = array_merge($va1,$_POST['dvals']);
            $var_ch = array_unique($var_ch);
            $var_ch = implode(',', $var_ch);
          }else{
            $var_ch = implode(',', $_POST['dvals']);
          }
            $result = $this->AM->updateData(array('variant_checked'=>$var_ch),'tbl_product',array('id'=>$this->input->post('product_id')));
          //merge old and new array
          if(!empty($va->variant) && $va->variant != 'null'){
            $variant = array_merge($va11,$variant);
          }

         $variant_json=json_encode($variant);
         $where=array('id'=>$this->input->post('product_id'));
         $variant_json_data=array('variant'=>$variant_json);
         $result = $this->AM->updateData($variant_json_data,'tbl_product',$where);
         if ($result){
            $this->session->set_flashdata('message','<div class="alert alert-success">Product Detail; Successfully Inserted!.</div>');
            redirect('Adminpanel/View_Product');
          }else{
            $this->session->set_flashdata('message','<div class="alert alert-success">Failed To Insert Data!.</div>');
            redirect('Adminpanel/Add_Variant');
          }
    }
     public function View_product (){
      $this->_chk_if_login();
         $data['variantstype']= $this->AM->getSelectWhereResult('*','tbl_unit',array('status' =>1),"","");
          $data['vendors'] = $this->AM->getSelectWhereResult('*','tbl_vendor',array('id!='=>0),"","");
         //echo "<pre>";print_r($data);die;
        $this->load->view('view_product',$data);         
    }
     public function View_product_variant(){
      $this->_chk_if_login();
      $product_variant_id=$this->input->get('id');
      $prod_variant=$this->AM->getSelectWhereResult('*','tbl_product',array('id'=>$product_variant_id),"","");

      // echo $prod_variant[0]->variant;die;
      if(!empty($prod_variant[0]->variant)){
        $a=$prod_variant[0]->variant;
        $data['a']=json_decode($a);
         for ($i=0; $i <count($data['a']) ; $i++) { 
           $data['other_image'][] = explode(',',$data['a'][$i]->variant_other_image);
         }
         $var_checked=$prod_variant[0]->variant_checked;
          $data['varian_checked'] = explode(',',$var_checked);
       }else{
        $data['varian_checked'] = '';
        $data['a'] = array();
       }

        //echo "<pre>"; print_r($data);die;
        $this->load->view('view_product_variant',$data);         
    }
    public function Create_variant (){
      $this->_chk_if_login();
        $variant_selected=$this->input->get('var');
        if(empty($variant_selected)){
          $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible">Please Select Variant Type!.</div>');
          redirect('Adminpanel/View_Product');
          exit();
        }
        $data['csu']=explode(',',$variant_selected);
        $var=count($data['csu']);
        for ($i=0; $i < $var; $i++){ 
                   $where=array(
                    'unit_name'=>$data['csu'][$i],
                  );
            $data['variants'][$i] = $this->AM->getSelectWhereResult('*','tbl_variant_size',$where,"","");
        };
        
        //echo "<pre>";print_r($data);die;
        $this->load->view('create_variant',$data);         
    }

    public function GetSingleVariant(){
      $data = $this->db->select('variant')->where('id',$_GET['prId'])->get('tbl_product')->row();
      $unit = $this->db->select('unit')->where('status',1)->get('tbl_unit')->result();
      $da = '<tr>';
      if(!empty($data->variant)){
        $array = json_decode($data->variant);
        foreach($array as $key => $val){
          if($val->variant_id == $_GET['varId']){
            $i=1;
            foreach( $val as $keyItem => $valKey){
              if($i == 6){
                $da .= '<td><img src="'.base_url().'uploads/variant_main_image/'.$valKey.'" style="height:50px;width:50px"></td>';
              }elseif($i <= 7){
                $da .= "<td>".$keyItem ." : ".$valKey."</td>";
              }else{
                $da .= "<td>".$keyItem ." : ".$this->db->select('variant_size')->where('id',$valKey)->get('tbl_variant_size')->row()->variant_size."</td>";
              }
            $i++;}
          }
        }   
        $da .= '</tr>';
        echo $da;
      }else{
        echo 'na';
      }
    }

    public function deleteSingleVariant(){
      $data = $this->db->select('variant')->where('id',$_GET['prId'])->get('tbl_product')->row();
      if(!empty($data)){
        $array = json_decode($data->variant);
        $newarray = array();
        $i=0;
        $k;
        foreach ($array as $key => $val) {
          if($val->variant_id == $_GET['varId']){
          }else{
            $newarray[] = $val;
          }
        $i++;}
        // done update remain
        $variant = json_encode($newarray);
        $this->db->set('variant', $variant)->where('id',$_GET['prId'])->update('tbl_product');
      }
    }

    public function EditVariant(){
      $variant = $this->db->select('variant')->where('id',$_GET['prId'])->get('tbl_product')->row();
      if(!empty($variant->variant)){
        $array = json_decode($variant->variant);
        $var = array();
        foreach($array as $key => $val){
          if($val->variant_id == $_GET['varId']){
            $i=1;
            $nvar = $val;
            foreach( $val as $keyItem => $valKey){
              if($i > 6){
                $var[] .= $keyItem;
              }
            $i++;}
          }
        }

        $var = array_unique($var);

        $data['csu']=$var;
        $var=count($data['csu']);
        for ($i=0; $i < $var; $i++){ 
                   $where=array(
                    'unit_name'=>$data['csu'][$i],
                  );
          $data['variants'][$i] = $this->AM->getSelectWhereResult('*','tbl_variant_size',$where,"","");
        };
        $data['detail']=$nvar;
        $data['id']=$_GET['varId'];
        unset($nvar);unset($var);unset($array);unset($variant);
        $this->load->view('update_variant',$data);     
    }
  }

  public function Update_Variant(){
    $post = $_POST;
    $variant = $this->db->select('variant,variant_checked')->where('id',$post['product_id'])->get('tbl_product')->row();
    $type = explode(',', $variant->variant_checked);
    $variant = json_decode($variant->variant);
    // echo "<pre>";
    // print_r($_FILES);die;
    $variant_main_image = $post['mainImage'];
    $variant_other_image1 = $post['otherImage'];
    if ($_FILES['variant_main_image']['size'] > 1) {
      $variant_main_imag = "variant_main_pro-".mt_rand(000,999).time()."-jpeg";
      $path = 'uploads/variant_main_image/'.$variant_main_imag;
      if(move_uploaded_file($_FILES['variant_main_image']['tmp_name'], $path)){
        $variant_main_image = $variant_main_imag;
      }
    }

    if($_FILES['variant_other_imag']['size'][0] > 1){
      $cnt = count($_FILES['variant_other_imag']['name']);
      $variant_other_image2 = array();
      for($j=0;  $j<$cnt; $j++){
        $ex = pathinfo($_FILES['variant_other_imag']['name'][$j],PATHINFO_EXTENSION);
        $name = 'variant_other_image-'.rand().'-jpeg';
        $path = 'uploads/variant_other_image/'.$name;
        if (move_uploaded_file($_FILES['variant_other_imag']['tmp_name'][$j], $path)) {
          $variant_other_image2[] = $name;
        }
      }
      $variant_other_image1 = explode(',', $variant_other_image1);
      $variant_other_image = array_merge($variant_other_image1,$variant_other_image2);
      $variant_other_image = implode(',',$variant_other_image);
    }else{
      $variant_other_image = $post['otherImage'];
    }
    foreach($variant as $val){
      if ($post['varId'] == $val->variant_id) {
        $val->quantity = $post['quantity'];
        $val->mrp = $post['mrp'];
        $val->selling_price = $post['selling_price'];
        $val->variant_main_image = $variant_main_image;
        $val->variant_other_image = $variant_other_image;

        foreach($type as $val1){
          if(!empty($val1)){
            $val->$val1 = $post[$val1];
          }
        }
      }
    }
    $variant = json_encode($variant);
    $this->db->set('variant',$variant)->where('id',$post['product_id'])->update('tbl_product');
    $this->session->set_flashdata('message','<div class="alert alert-success">Variant Updated!.</div>');
      redirect('Adminpanel/view_product_variant?id='.$post['product_id']);
  }
   public function Subscribe(){
      $this->_chk_if_login();

        $this->load->view('subscribe_plan');         
    }
    public function SaveSubscribe(){
    //$this->_check_log_in('AdminPanel/AddProduct');
      if ($_POST) {
        $data = array(
          'name'          =>$this->input->post('name'),
          'amount'      =>$this->input->post('amount'),
          'pro_id'        =>$this->input->post('pro_id'),
          'ship_charge'=>$this->input->post('ship_charge'),
        );
        $check = $this->AM->insert_data('tbl_subscribe',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }
      }else{
        echo 3;
      }
    }
    public function DeleteSubscribe(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_subscribe',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;  
    }
    public function fetch_single_subscribe(){

        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_subscribe';
        $result = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($result)
        {
          echo json_encode($result);
        }
        else
        {
          echo false;
        }
    } 

    public function update_subscribe(){
        // $this->_chk_if_login();
      
        $id = $this->input->post('ca_id');
        $data = array(
          'name'          =>$this->input->post('edit_name'),
          'amount'      =>$this->input->post('edit_amount'),
          'pro_id'        =>$this->input->post('edit_pro_id'),
          'ship_charge'=>$this->input->post('edit_ship_charge'),
        );
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_subscribe',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }
        
    }
 public function Vendor(){
        $this->_chk_if_login();
        $data['states'] = $this->AM->getSelectWhereResult('*','tbl_state',array('id!='=>0),"","");
        $data['cities'] = $this->AM->getSelectWhereResult('*','tbl_city',array('id!='=>0),"","");
        $data['areas'] = $this->AM->getSelectWhereResult('*','tbl_cityarea',array('id!='=>0),"","");

        $this->load->view('vendor',$data);         
    }
    public function Get_city(){
      $state_id=$this->input->post('id');
      $cities= $this->AM->getSelectWhereResult('*','tbl_city',array('state_id'=>$state_id),"","");
      $option='';
      $option ='<option value="" >Select City</option>';
      foreach ($cities as $key => $value) {
        $option .='<option value="'.$value->id.'">'.$value->city.'</option>';
                   
      }
      echo $option;
    }
    public function Get_area(){
      $city_id=$this->input->post('id');
      $areas= $this->AM->getSelectWhereResult('*','tbl_cityarea',array('city_id'=>$city_id),"","");
      $option='';
      $option ='<option value="" >Select Area</option>';
      foreach ($areas as $key => $value) {
        $option .='<option value="'.$value->id.'">'.$value->area.'</option>';
                   
      }
      echo $option;
    }
    public function Add_Vendor(){
        //$this->_check_log_in('AdminPanel/AddProduct');
        if ($_POST) {
          $state_id=$this->input->post('state_id');
          $city_id=$this->input->post('city_id');
          $area_id=$this->input->post('area_id');

          $data = array(
            'type' =>'vendor',
            'state'=>$state_id,
            'city'=>$city_id,
            'area'=>$area_id,
            'password'=>$this->input->post('contact_no'),
            'name'=>$this->input->post('vendor_name'),
            'business_name'=>$this->input->post('business_name'),
            'contact_no'=>$this->input->post('contact_no'),
            'email'=>$this->input->post('email'),
            'shop_address'=>$this->input->post('shop_address'),
            'pin_code'=>$this->input->post('pin_code'),
            'bank_name'=>$this->input->post('bank_name'),
            'ifsc'=>$this->input->post('ifsc'),
            'account_no'=>$this->input->post('account_no'),
            'account_holder_name'=>$this->input->post('account_holder_name'),
            
          );
          //echo "<pre>";print_r($data);die;
          $check = $this->AM->insert_data('tbl_vendor',$data);

          if ($check) {
              echo 1;
            }else{
              echo 2;
          }
        }else{
              echo 3;
            }
    }

    public function DeleteVendor(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_vendor',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }

    public function fetch_single_vendor(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_vendor';
        $result = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($result)
        {
          echo json_encode($result);
        }
        else
        {
          echo false;
        }
    } 

    public function update_vendor(){
        // $this->_chk_if_login();
        $id = $this->input->post('ca_id');
          $state_id=$this->input->post('edit_state_id');
          $city_id=$this->input->post('edit_city_id');
          $area_id=$this->input->post('edit_area_id');

          $data = array(
            'state'=>$state_id,
            'city'=>$city_id,
            'area'=>$area_id,
            'name'=>$this->input->post('edit_vendor_name'),
            'business_name'=>$this->input->post('edit_business_name'),
            'contact_no'=>$this->input->post('edit_contact_no'),
            'email'=>$this->input->post('edit_email'),
            'shop_address'=>$this->input->post('edit_shop_address'),
            'pin_code'=>$this->input->post('edit_pin_code'),
            'bank_name'=>$this->input->post('edit_bank_name'),
            'ifsc'=>$this->input->post('edit_ifsc'),
            'account_no'=>$this->input->post('edit_account_no'),
            'account_holder_name'=>$this->input->post('edit_account_holder_name'),
            
          );
        //echo "<pre>";print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_vendor',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }
        
    }
    public function vendor_act_or_dea(){
      $id=$this->input->post('id');
      $products=$this->AM->getSelectWhereRowArray('admin_approve','tbl_vendor',array('id'=>$id),"","");
      if($products['admin_approve'] == 1){
        $data=array('admin_approve'=>0);
        $where=array('id'=>$id);
        $result = $this->AM->updateData($data,'tbl_vendor',$where);
        if ($result) {
          echo 1;
        }

      }else{
        $data=array('admin_approve'=>1);
        $where=array('id'=>$id);
        $result = $this->AM->updateData($data,'tbl_vendor',$where);
        if ($result) {
          echo 1;
        }
      }
    }
  public function Users(){
      $this->_chk_if_login();

        $this->load->view('users');         
    }
  public function DeleteUsers(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_vendor',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function Enquiry(){
      $this->_chk_if_login();

        $this->load->view('enquiry');         
    }
  public function DeleteEnquiry(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_enquiry',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
}
  