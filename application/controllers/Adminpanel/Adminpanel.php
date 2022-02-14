<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminpanel extends CI_Controller{
  public function __construct(){
    parent::__construct();
        $this->load->model('Admin_panel','a');
        $this->load->model('Frontend_model');
        $this->load->model('User_model');
        $this->load->model('AdminModel','AM');
        $this->load->model('DataTableModel','DTM');
        $this->load->helper('url');
        $this->load->helper('otp_helper');
        $this->load->helper('fcm_helper');
        $this->load->helper('mailtemp');
        $this->load->library('excel');

        date_default_timezone_set('Asia/Kolkata');
  }

    public function Demo123(){
      $sess=$this->session->userdata('logsess');
      echo "<pre>"; print_r($sess);
    }

    public function Forget_password(){
        $this->load->view('forgot-password');
      }
    public function send_otp_forgot(){
        $email = $this->input->post('email');
        $data = $this->User_model->get_all_where('*','tbl_admin',array('email'=>$email),"","");
        if (!empty($data)) {

            $otp = mt_rand(1111,9999);
            $msg='Your OTP is :'.$otp;
            $telephone = $data[0]['contact'];
            $mobile_otp=send_otp('91'.$telephone,$msg,$otp);
            $this->session->set_userdata('otp',$otp);
            $this->session->set_userdata('contact',$telephone);
           redirect('verify-otp');
        }else{
          $this->session->set_flashdata('message','No Account Found!.');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function verify_otp(){
      $this->load->view('verify_otp');
    }

    public function resend_otp_forgot(){
            $otp = mt_rand(1111,9999);
            $msg='Your OTP is :'.$otp;
            $telephone = $this->session->userdata('contact');
            $mobile_otp=send_otp('91'.$telephone,$msg,$otp);
            $this->session->set_userdata('otp',$otp);
            $this->session->set_userdata('contact',$telephone);
            echo 1;

    }
    public function verify_otp_frog(){
        $user_otp = $this->input->post('otp');
        $ses_otp = $this->session->userdata('otp');
        if ($user_otp == $ses_otp) {
            redirect('change-password');
        }else{
          $this->session->set_flashdata('message','Invalid OTP!. '.$ses_otp);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function change_password(){
      $this->load->view('change_password');
    }


    public function set_new_pass_trial(){
        print_r($_POST); die;
    }
    public function set_new_pass(){
        $password = $this->input->post('password');
        $contact = $this->session->userdata('contact');
        $set = array('password' => $password);
        $where = array('contact' => $contact);
        $check = $this->Frontend_model->update_data('tbl_admin',$set,$where);
        if ($check) {
            $this->session->set_flashdata('message','Password Updated Successfully');
              redirect('/Adminpanel');
        }else{
            echo 'Internal Server Error';
        }

    }

    public function checkEmailExist(){
      $email = $_GET['email'];
      $check = $this->User_model->get_single_where('id','tbl_admin',array('email'=>$email),'','');
      if(!empty($check)){
        echo 1;
      }
    }

    public function checkMobileExist(){
      $contact = $_GET['contact'];
      $check = $this->User_model->get_single_where('id','tbl_admin',array('contact'=>$contact),'','');
      if(!empty($check)){
        echo 1;
      }
    }

    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('Adminpanel');
        exit();
    }
    public function index()
    {
       $this->_chk_if_login();
       $data['users'] = $this->User_model->get_count_where_id('tbl_user',array('type'=>'Learner'));
       $data['order'] = $this->User_model->get_count_where_id('tbl_order',array('id !='=>0));
       $data['course'] = $this->User_model->get_count_where_id('tbl_course',array('id !='=>0));
       $data['blog'] = $this->User_model->get_count_where_id('tbl_home_content',array('id !='=>0));
        $data['trainer'] = $this->User_model->get_count_where_id('tbl_user',array('type'=>'Trainer'));
       $this->load->view('admin/index',$data);
    }
    public function Dashboard()
    {
       $this->load->view('dashboard');
    }
    public function Login()
    {
       $this->load->library('form_validation');
       $this->load->view('admin/login');
    }
    public function check_login(){
       $email = $this->input->post('email');
       $password = $this->input->post('password');
       $check = $this->Frontend_model->fetch_condrecordwithfield('tbl_admin',array('email' =>$email ,'password' =>$password ),"*");
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
          'type' => 'Admin',
          'image'=>$check->image
        );
        if(isset($_POST['remeber'])){
            setcookie("adUserName",$email,time()+31556926 ,'/');
            setcookie("adPass",$password,time()+31556926 ,'/');
        }
//        echo "<pre>";print_r($_COOKIE);die;

        $this->session->set_userdata('logsess',$new_data);
        redirect(base_url('Adminpanel/index'));
     }else
     {
        $this->session->set_flashdata('error','<h6 style="background-color:#fa5838;color: #0a0a0a;height: 30px;font-size: large;text-align: center;">Invalid Email Or Password</h6>');
        redirect(base_url('Adminpanel'));
     }
    }
    public function _chk_if_login()
    {
        $loginss = $this->session->userdata('logsess');
        if($loginss['loginss'] == false || $loginss['name'] == '') {
          $this->session->sess_destroy();
          redirect(base_url('Adminpanel'));
            exit();
        }
    }
    // public function Forget_password()
    // {
    //     $this->load->view('forget_password');
    // }

   /*-----------------Home pages--------------*/
    public function Course(){
      $this->_chk_if_login();
      $data['cat'] = $this->User_model->get_all_where('*','tbl_course_cat',array('id !='=>0),"","");
       $this->load->view('admin/add_course',$data);
    }
    public function Add_course(){
      if($_POST){
        // echo "<pre>";
        // print_r($_FILES);
        // die;
        if(isset($_FILES['curriculum_pdf']['name'])){
            $new_name='curriculum-'.mt_rand(0000,9999).'.pdf';
            $path='uploads/curriculum_pdf/'.$new_name;
              if(move_uploaded_file($_FILES['curriculum_pdf']['tmp_name'],$path)){
                $curriculum_pdf=$new_name;
              }
        }
       if(isset($_FILES['certificate']['name'])){
            $new_name='certificate-'.mt_rand(0000,9999).'.jpeg';
            $path='uploads/certificate/'.$new_name;
              if(move_uploaded_file($_FILES['certificate']['tmp_name'],$path)){
                $certificate=$new_name;
               }
        }
        $image='';
        if(isset($_FILES['myImg']['name'])){
            $new_name='course-image-'.mt_rand(0000,9999).$_FILES['myImg']['name'];
            $path='uploads/certificate/'.$new_name;
              if(move_uploaded_file($_FILES['myImg']['tmp_name'],$path)){
                $image=$new_name;
               }
        }
        $resources='';
        if(isset($_FILES['resources']['name'])){
          $new_name='resources-image-'.mt_rand(0000,9999).$_FILES['resources']['name'];
          $path='uploads/certificate/'.$new_name;
          if(move_uploaded_file($_FILES['resources']['tmp_name'],$path)){
            $resources=$new_name;
           }
        }

        $backgroundImage='';
        if(isset($_FILES['backgroundImage']['name'])){
          $new_name='backgroundImage-image-'.mt_rand(0000,9999).$_FILES['backgroundImage']['name'];
          $path='uploads/certificate/'.$new_name;
          if(move_uploaded_file($_FILES['backgroundImage']['tmp_name'],$path)){
            $backgroundImage=$new_name;
           }
        }
        $data=array(
            'title'  =>$this->input->post('title'),
            'mrp'   =>$this->input->post('mrp'),
            'msp'   =>$this->input->post('msp'),
            'live_mrp'   =>$this->input->post('live_mrp'),
            'live_msp'   =>$this->input->post('live_msp'),
            'self_mrp'   =>$this->input->post('self_mrp'),
            'self_msp'   =>$this->input->post('self_msp'),
            'top_title'  =>$this->input->post('top_title'),
            'assessment_mrp'   =>$this->input->post('assessment_mrp'),
            'assessment_msp'   =>$this->input->post('assessment_msp'),
            'starting_date'=>$this->input->post('starting_date'),
            'course_title'=>$this->input->post('course_title'),
            'course_subtitle1'=>$this->input->post('course_subtitle1'),
            'course_subtitle2'=>$this->input->post('course_subtitle2'),
            'section1'=>$this->input->post('section1'),
            'section2'=>$this->input->post('section2'),
            'section3'=>$this->input->post('section3'),
            'section3subtitle'=>$this->input->post('section3subtitle'),
            'curriculum_pdf' =>$curriculum_pdf,
            'certificate'    =>$certificate,
            'section1desc'=>$this->input->post('section_description1'),
            'section2desc'=>$this->input->post('section_description2'),
            'section3desc'=>$this->input->post('section_description3'),
            'course_highlight'=>$this->input->post('course_highlight'),
            'image'=>$image,
            'resources'=>$resources,
            'backgroundImage'=>$backgroundImage,
            'category'=>$this->input->post('category'),
            'validity'=>$this->input->post('validity'),
            'video'=>$this->input->post('video'),
       );
       $check=$this->AM->insert_data('tbl_course',$data);
       if($check){
              $this->session->set_flashdata('success','<div style="success">Course Added Successfully</div>');
              redirect($_SERVER['HTTP_REFERER']);
      }else{
              $this->session->set_flashdata('error','<div style="success">Course Failed To Add</div>');
              redirect($_SERVER['HTTP_REFERER']);
      }
    }else{
          $this->session->set_flashdata('unknown','<div style="success">Somthig Went Wrong</div>');
            redirect($_SERVER['HTTP_REFERER']);
      }
    }
    public function Delete_course(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $data = array('id' =>$id);
        $fname = ('id,curriculum_pdf,certificate');
        $tbname = 'tbl_course';
        $detail = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($detail)
        {
          $curriculum_pdf = $detail->curriculum_pdf;
            unlink('./uploads/curriculum_pdf/'.$curriculum_pdf);
            $certificate = $detail->certificate;
            unlink('./uploads/certificate/'.$certificate);
        }
        $check = $this->AM->deleteData('tbl_course',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function View_course_detail(){
       $id=$this->input->get('id');
       $data['course']=$this->User_model->get_single_where('*','tbl_course',array('id'=>$id),'','');
       $data['cat'] = $this->User_model->get_all_where('*','tbl_course_cat',array('id !='=>0),"","");
       $this->load->view('admin/view_course_detail',$data);
    }

    public function View_course(){
       $this->load->view('admin/view_course');
    }
    public function Manage_all(){
       $this->load->view('admin/manage_all');
    }
    public function Edit_course(){
       $id=$this->input->get('id');
       $data['course']=$this->User_model->get_single_where('*','tbl_course',array('id'=>$id),'','');
       $this->load->view('admin/edit_course',$data);
    }
    public function Update_course(){
        if($_POST){
         $curriculum_pdf=$this->input->post('old_curriculum_pdf');
        if($_FILES['curriculum_pdf']['size'] > 1){
            $new_name='curriculum-'.mt_rand(1111,9999).'.pdf';
            $path='uploads/curriculum_pdf/'.$new_name;
              if(move_uploaded_file($_FILES['curriculum_pdf']['tmp_name'],$path)){
                $curriculum_pdf=$new_name;
              }
        }
        $certificate=$this->input->post('old_certificate');
       if($_FILES['certificate']['size'] > 1){
            $new_name='certificate-'.mt_rand(1111,9999).'.jpeg';
            $path='uploads/certificate/'.$new_name;
              if(move_uploaded_file($_FILES['certificate']['tmp_name'],$path)){
                $certificate=$new_name;
               }
        }
        $data=array(
            'category'  =>$this->input->post('category'),
            'title'  =>$this->input->post('title'),
            'mrp'   =>$this->input->post('mrp'),
            'msp'   =>$this->input->post('msp'),
            'live_mrp'   =>$this->input->post('live_mrp'),
            'live_msp'   =>$this->input->post('live_msp'),
            'self_mrp'   =>$this->input->post('self_mrp'),
            'self_msp'   =>$this->input->post('self_msp'),
            'assessment_mrp'   =>$this->input->post('assessment_mrp'),
            'assessment_msp'   =>$this->input->post('assessment_msp'),
            'starting_date'=>$this->input->post('starting_date'),
            'course_title'=>$this->input->post('course_title'),
            'course_subtitle1'=>$this->input->post('course_subtitle1'),
            'course_subtitle2'=>$this->input->post('course_subtitle2'),
            'section1'=>$this->input->post('section1'),
            'section2'=>$this->input->post('section2'),
            'section3'=>$this->input->post('section3'),
            'section3subtitle'=>$this->input->post('section3subtitle'),
            'curriculum_pdf' =>$curriculum_pdf,
            'certificate'    =>$certificate,
            'section1desc'=>$this->input->post('section_description1'),
            'section2desc'=>$this->input->post('section_description2'),
            'section3desc'=>$this->input->post('section_description3'),
            'course_highlight'=>$this->input->post('course_highlight'),
            'validity'=>$this->input->post('validity'),
            'video'=>$this->input->post('video'),
       );

        if($_FILES['myImg']['size'] > 1){
          $new_name='course-image-'.mt_rand(0000,9999).$_FILES['myImg']['name'];
          $path='uploads/certificate/'.$new_name;
          if(move_uploaded_file($_FILES['myImg']['tmp_name'],$path)){
            $data['image']=$new_name;
           }
        }

        if($_FILES['resources']['size'] > 1){
          $new_name='resources-image-'.mt_rand(0000,9999).$_FILES['resources']['name'];
          $path='uploads/certificate/'.$new_name;
          if(move_uploaded_file($_FILES['resources']['tmp_name'],$path)){
            // $resources=$new_name;
            $data['resources']=$new_name;
           }
        }

        if($_FILES['backgroundImage']['size'] > 1){
          $new_name='backgroundImage-image-'.mt_rand(0000,9999).$_FILES['backgroundImage']['name'];
          $path='uploads/certificate/'.$new_name;
          if(move_uploaded_file($_FILES['backgroundImage']['tmp_name'],$path)){
            // $backgroundImage=$new_name;
            $data['backgroundImage']=$new_name;
           }
        }
        // echo "<pre>";
        // print_r($data);
        // print_r($_FILES);
        // die;
        $id=$this->input->post('ca_id');
        $where=array('id'=>$id);

        $check=$this->AM->updateData($data,'tbl_course',$where);
       if($check){
          echo 1;
      }else{
          echo 2;
      }
    }else{
          echo 3;
      }
    }
    public function fetch_single_course(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_course';
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
    public function change_status(){
      $status=$this->input->post('status');
      if(!empty($this->input->post('top'))){
        $data=array('top'=>$status);
      }else{
        $data=array('status'=>$status);
      }
      $id=$this->input->post('id');
      $where=array('id'=>$id);
      $check=$this->AM->updateData($data,'tbl_course',$where);
      if($check){
        echo 1;
      }else{
        echo 2;
      }
    }
  public function Batches(){
    $id=$this->input->get('id');
       $data['course']=$this->User_model->get_single_where('*','tbl_course',array('id'=>$id),'','');
    $this->load->view('admin/batch',$data);
  }
  public function Add_batch(){
       if($_POST){
       $data = array(
          'course_id'=>$this->input->post('course_id'),
          'name'=>$this->input->post('name'),
          'type'=>$this->input->post('type'),
          'start_date'=>$this->input->post('start_date'),
          'end_date'=>$this->input->post('end_date'),

        );

        $check = $this->AM->insert_data('tbl_batch',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }
      }else{
        echo 2;
      }
    }
    public function Delete_batch(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
         $check = $this->AM->deleteData('tbl_batch',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_batch(){

        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_batch';
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

    public function update_batch(){

        $id = $this->input->post('ca_id');
        $data = array(
          'course_id'=>$this->input->post('edit_course_id'),
          'name'=>$this->input->post('edit_name'),
          'type'=>$this->input->post('edit_type'),
          'start_date'=>$this->input->post('edit_start_date'),
          'end_date'=>$this->input->post('edit_end_date'),
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_batch',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
  public function Self_learning(){
    $id=$this->input->get('id');
       $data['course']=$this->User_model->get_single_where('*','tbl_course',array('id'=>$id),'','');
    $this->load->view('admin/self_learning',$data);
  }
  public function Add_self_learning(){
       if($_POST){
       $data = array(
          'course_id'=>$this->input->post('course_id'),
          'section'=>$this->input->post('section'),
          'remark'=>$this->input->post('remark'),
        );
       if($this->input->post('video')){
        $data['video'] = 'yes';
       }else{
        $data['video'] = 'no';
       }

        $check = $this->AM->insert_data('tbl_section',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }
      }else{
        echo 2;
      }
    }
     public function fetch_single_self_learning(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_section';
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

    public function update_self_learning(){
        $id = $this->input->post('ca_id');
        $data = array(
          'course_id'=>$this->input->post('edit_course_id'),
          'section'=>$this->input->post('edit_section'),
          'remark'=>$this->input->post('edit_remark'),
        );
        if($this->input->post('video')){
          $data['video'] = 'yes';
        }else{
          $data['video'] = 'no';
        }
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_section',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }

  public function Self_learning_var(){
  	  $this->_chk_if_login();
      $this->load->view('admin/self_learning_var');
  }
  public function Add_self_learning_video(){
      //echo "<pre>";  print_r($_FILES);die;
       if($_POST){
        $title=$this->input->post('title');
        $duration=$this->input->post('duration');
        $video_url=$this->input->post('video_url');
        $section_id=$this->input->post('section_id');


        $data = array(
          'title'=>$title,
          'section_id'=>$section_id,
          'duration'=>$duration,
          'video_url'=>$video_url,
        );
       $check = $this->AM->insert_data('tbl_self_learn_video',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }
      }else{
        echo 2;
      }
    }
    public function fetch_single_self_learning_video(){
        $id = $this->input->post('id');
        $result = $this->User_model->get_single_where('*','tbl_self_learn_video',array('id'=>$id),'','');
        echo json_encode($result);
    }

    public function update_self_learning_video(){
        $id = $this->input->post('ca_id');
        $data = array(
           'title'=>$this->input->post('edit_title'),
           'duration'=>$this->input->post('edit_duration'),
           'video_url'=>$this->input->post('edit_video_url'),
           'section_id'=>$this->input->post('edit_section_id'),

        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_self_learn_video',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
     public function Delete_self_learning_video(){
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_self_learn_video',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }

    public function Delete_self_learning(){
      $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_section',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }

  public function Add_self_learning_resources(){
      //echo "<pre>";  print_r($_FILES);die;
       if($_POST){
        $title=$this->input->post('title');
        $section_id=$this->input->post('section_id');

           if(isset($_FILES['resource_pdf']['name'])){
            $new_name='resource_pdf-'.mt_rand(1111,9999).'.jpeg';
            $path='uploads/self_learn_files/'.$new_name;
              if(move_uploaded_file($_FILES['resource_pdf']['tmp_name'],$path)){
                $resource_pdf=$new_name;
               }
        }

       $data = array(
          'section_id'=>$section_id,
          'title'=>$title,
          'resource_pdf'=>$resource_pdf,

        );
        //echo "<pre>";  print_r($data);die;
        $check = $this->AM->insert_data('tbl_self_learn_resources',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }
      }else{
        echo 2;
      }
    }
     public function fetch_single_self_learning_resources(){
        $id = $this->input->post('id');
        $result = $this->User_model->get_single_where('*','tbl_self_learn_resources',array('id'=>$id),'','');
        echo json_encode($result);
    }

    public function update_self_learning_resources(){
        $id = $this->input->post('cca_id');
        $resource_pdf = $this->input->post('edit_resource_pdf_old');
        if($_FILES['edit_resource_pdf']['size'] > 0){
            $new_name='resource_pdf-'.mt_rand(1111,9999).'.jpeg';
            $path='uploads/self_learn_files/'.$new_name;
              if(move_uploaded_file($_FILES['edit_resource_pdf']['tmp_name'],$path)){
                $resource_pdf=$new_name;
               }
        }
        $data = array(
          'section_id'=>$this->input->post('edit_section_id'),
          'title'=>$this->input->post('edit_title'),
          'resource_pdf'=>$resource_pdf,
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_self_learn_resources',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }

     public function Delete_self_learning_resources(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_self_learn_resources',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }

    public function Live_classes(){
    	$this->_chk_if_login();
      $id=$this->input->get('id');
         $data['course']=$this->User_model->get_single_where('*','tbl_course',array('id'=>$id),'','');
      $this->load->view('admin/live_classes',$data);
    }




    public function Assessment(){
    	$this->_chk_if_login();
      $id=$this->input->get('id');
      $data['course']=$this->User_model->get_single_where('*','tbl_course',array('id'=>$id),'','');
      $this->load->view('admin/assessment',$data);
    }
     public function Add_assessment(){
       if($_POST){
         if(isset($_FILES['assessment_file']['name'])){
            $new_name='assessment_file-'.mt_rand(1111,9999).'.pdf';
            $path='uploads/assessment_file/'.$new_name;
              if(move_uploaded_file($_FILES['assessment_file']['tmp_name'],$path)){
                $file=$new_name;
               }
        }
       $data = array(
          'course_id'=>$this->input->post('course_id'),
          'project_title'=>$this->input->post('project_title'),
          'tag_name'=>$this->input->post('tag_name'),
          'description'=>$this->input->post('description'),
          'file'=>$file,
        );
        $check = $this->AM->insert_data('tbl_assessment',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }
      }else{
        echo 2;
      }
    }
     public function fetch_single_assessment(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_assessment';
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

    public function update_assessment(){
        $id = $this->input->post('ca_id');
        if($_FILES['edit_assessment_file']['size'] > 0){
            $new_name='assessment_file-'.mt_rand(1111,9999).'.pdf';
            $path='uploads/assessment_file/'.$new_name;
              if(move_uploaded_file($_FILES['edit_assessment_file']['tmp_name'],$path)){
                $file=$new_name;
               }
        }else{
               $file=$this->input->post('old_file');
        }
       $data = array(
          'course_id'=>$this->input->post('edit_course_id'),
          'project_title'=>$this->input->post('edit_project_title'),
          'tag_name'=>$this->input->post('edit_tag_name'),
          'description'=>$this->input->post('edit_description'),
          'file'=>$file,
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_assessment',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
    public function Delete_assessment(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_assessment',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }

    public function assignCourse(){
      //tbl_course
      $data['course'] = $this->User_model->get_all_where('id,title','tbl_course',array('status'=>1),"","");
      $this->load->view('admin/assignCourse',$data);
    }

    public function saveUserAssign(){
      if((isset($_GET['student'])) && (!empty($_GET['student'])) && (isset($_GET['course'])) && (!empty($_GET['course'])) ){
        $stu = explode(',', $_GET['student']);
        $course = $_GET['course'];
        $data = array();
        foreach ($stu as $key => $val) {
          $user = $this->User_model->get_single_where('name,email,contact','tbl_user',array('id'=>$val),'','');
          $data = array(
            'user_id'=>$val,
            'invoice'=>'inv-'.mt_rand(111111,999999),
            'Trainee'=>0,
            'name'=>$user['name'],
            'email'=>$user['email'],
            'company'=>null,
            'phone_no'=>$user['contact'],
            'address1'=>null,
            'address2'=>null,
            'City'=>null,
            'state'=>null,
            'pin_code'=>null,
            'total'=>0,
            'type'=>$_GET['type'],
            'order_date'=>date('Y-m-d H:i:s'),
            'assign'=>1,
          );
          // print_r($data);die;
          $order_id = $this->AM->insert_data('tbl_order',$data);
          $detail = array(
            'order_id'=>$order_id,
            'user_id'=>$val,
            'product_id'=>$_GET['course'],
            'price'=>0,
          );
          $this->AM->insert_data('order_detail',$detail);
        }
          $this->session->set_flashdata('logsess','<div class="alert alert-success" role="alert">Course Assign Successfully!</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }
    }

    public function Orders(){
      $this->load->view('admin/orders');
    }

    public function Invoice(){
      $id = $this->uri->segment(4);
      $select = 'tbl_order.*,order_detail.product_id,order_detail.price,tbl_course.title, tbl_course.image';
      $where = array('tbl_order.id'=>$id);
      $join = array('order_detail','tbl_course');
      $jointbl = array('order_detail.order_id = tbl_order.id', 'tbl_course.id = order_detail.product_id');
      $data['data'] = $this->User_model->getJoinData($select,'tbl_order',$where,$join,$jointbl,"");
      $this->load->view('admin/invoice',$data);
    }

    public function addUpdateExam(){
      $data = array(
        'exam_name'=>$this->input->post('exam_name'),
        'exam_vchr'=>$this->input->post('exam_vchr'),
        'last_date'=>$this->input->post('last_date'),
        'exa_description'=>$this->input->post('description'),
      );
      $this->Frontend_model->update_data('tbl_course',$data,array('id'=>$_POST['course_id']));
    }

    public function ExamRequest(){
      $this->load->view('admin/ExamRequest');
    }

    public function appoveExam(){
      $check = $this->Frontend_model->update_data('order_detail',array('apply_for_eaxm'=>2,'approve_date'=>date('Y-m-d H:i:s')),array('id'=>$_GET['id']));
    }

    public function add_new_liveClass(){
      $post = $this->input->post();
      $start_date = strtotime(str_replace('T','',$post['start_date'])).'000';
      $end_date = strtotime(str_replace('T','',$post['end_date'])).'000';

      $state_date1 = date('Y-m-d H:i:s',strtotime(str_replace('T','',$post['start_date'])));
      $end_date1 = date('Y-m-d H:i:s',strtotime(str_replace('T','',$post['end_date'])));
      $datetime=str_replace('T',' ',$post['start_date']);
      $time=strtotime($datetime);
      $data = '{"session": {"name": "'.$post['name'].'","scheduledTime": '.$start_date.',"scheduledEndTime": '.$end_date.',"deliveryMode": 3,"sessionSettings":{"registrationRequired": false}}}';
      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://showtime.zoho.in/api/v4/60006062336/sessions.json",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>$data,
        CURLOPT_HTTPHEADER => array(
          "Authorization: Zoho-oauthtoken 1000.3e14f77eb8274723d5ccc315f8f5c8bd.e73386978059b5da325477221a4e08a4",
          "Content-Type: text/plain"
        ),
      ));
      $response = curl_exec($curl);
      curl_close($curl);
      $response = json_decode($response);
      // echo '<pre>';
      // print_r($response);
      // die;
      $data = array(
        'course_id'=>$post['course_id'],
        'name'=>$post['name'],
        'sessin_id'=>$response->session->sessionId,
        'state_date'=>$state_date1,
        'end_date'=>$end_date1,
        'presenter_url'=>$response->session->presenterAutoStartUrl,
        'join_url'=>$response->session->joinURL,
        'added_date'=>date('Y-m-d H:i:s'),
      );
      $check=$this->AM->insert_data('tbl_live_classes',$data);
      $this->session->set_flashdata('success','<div class="alert alert-success" role="alert">Live Class Added Successfully!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_liveClass(){
      $id = $_GET['id'];

      $sesId = $this->User_model->get_single_where('sessin_id','tbl_live_classes',array('id'=>$id),'','')['sessin_id'];

      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://showtime.zoho.in/api/v4/60006062336/sessions/".$sesId.".json",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "DELETE",
        CURLOPT_HTTPHEADER => array(
          "Authorization: Zoho-oauthtoken 1000.3e14f77eb8274723d5ccc315f8f5c8bd.e73386978059b5da325477221a4e08a4",
          "Cookie: 50ac255154=5d169d2c50bb5c88208a0c44c44072ba; ZP_CSRF_TOKEN=cb96fac4-2e14-4675-a57a-6443589a56c0; _zcsr_tmp=cb96fac4-2e14-4675-a57a-6443589a56c0"
        ),
      ));
      $response = curl_exec($curl);
      curl_close($curl);
      // echo $response;
      $this->AM->deleteData('tbl_live_classes',array('id'=>$id));
      $this->session->set_flashdata('success','<div class="alert alert-danger" role="alert">Live Class Deleted Successfully!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function ShowAndDisplay(){
      $data['page'] = $this->User_model->get_all_where('*','tbl_navigation',array('id !='=>0),"","");
      $this->load->view('admin/ShowAndDisplay',$data);
    }

    public function changeStatus(){
      $check = $this->Frontend_model->update_data('tbl_navigation',array('show'=>$_GET['show']),array('id'=>$_GET['id']));
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Status Updated!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function Profile(){
      $this->_chk_if_login();
      $ses = $this->session->userdata('logsess');
      $data['data']=$this->User_model->get_single_where('*','tbl_admin',array('id'=>$ses['id']),'','');
      $this->load->view('admin/Profile',$data);
    }

    public function updateProfile(){
      // echo "<pre>";
      $post = $_POST;
      $data = array(
        'name'=>$post['name'],
        'contact'=>$post['contact'],
      );

      if($_FILES['myImg']['size'] > 1){
        $new_name='Profile-'.mt_rand(0000,9999).$_FILES['myImg']['name'];
        $path='uploads/curriculum_pdf/'.$new_name;
          if(move_uploaded_file($_FILES['myImg']['tmp_name'],$path)){
            $data['image']=$new_name;
          }
      }
      $ses = $this->session->userdata('logsess');
      $check = $this->Frontend_model->update_data('tbl_admin',$data,array('id'=>$ses['id']));

      $data = $this->User_model->get_single_where('*','tbl_admin',array('id'=>$ses['id']),'','');

      $new_data = array(
          'loginss' => TRUE,
          'name'  => $data['name'],
          'email' => $data['email'],
          'id'  => $ses['id'],
          'image'=>$data['image'],
          'type' => 'Admin'
        );
      $this->session->set_userdata('logsess',$new_data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Detail Updated!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function adminList(){
      $data['data'] = $this->User_model->get_all_where('*','tbl_admin',array('id != '=>1),"","");
      $this->load->view('admin/adminList',$data);
    }

    public function addAdmin(){
      // echo "<pre>";
      $post = $_POST;
      // print_r($post);
      if ($post['action']=='edit') {
        $data = array(
          'name'=>$post['name'],
          'email'=>$post['email'],
          'contact'=>$post['contact'],
        );
        $this->Frontend_model->update_data('tbl_admin',$data,array('id'=>$post['id']));
      }elseif($post['action'] == 'add'){
        $data = array(
          'name'=>$post['name'],
          'email'=>$post['email'],
          'contact'=>$post['contact'],
          'password'=>$post['contact'],
        );
        $this->AM->insert_data('tbl_admin',$data);
      }
      redirect($_SERVER['HTTP_REFERER']);
    }

    public  function deleteAdmin(){
      $this->AM->deleteData('tbl_admin',array('id'=>$_GET['id']));
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function Categories(){
      $this->load->view('admin/Categories');
    }

    public function enquiry(){
      $this->_chk_if_login();
      $this->load->view('admin/enquiry_contact');
    }

    public function enquiry2(){
      $this->_chk_if_login();
      $this->load->view('admin/enquiry_contact2');
    }

    public function courseTabBar(){
      $this->_chk_if_login();
      $id=$this->input->get('id');
      $data['course']=$this->User_model->get_single_where('*','tbl_course',array('id'=>$id),'','');
      $this->load->view('admin/courseTabBar',$data);
    }

    public function addAddNewTabar(){
      $post = $_POST;
      if($_FILES['image']['size'] > 1){
        $new_name='image-'.mt_rand(0000,9999).'.'.$_FILES['image']['name'];
        $path='uploads/curriculum_pdf/'.$new_name;
        if(move_uploaded_file($_FILES['image']['tmp_name'],$path)){
          $post['image']=$new_name;
        }
      }
      $check=$this->AM->insert_data('course_tabbar',$post);
      if ($check) {
        echo 1;
      }else{
        echo 2;
      }
    }

    public function updateTabBar(){
      $post = $_POST;
      if($_FILES['image']['size'] > 1){
        $new_name='image-'.mt_rand(0000,9999).'.'.$_FILES['image']['name'];
        $path='uploads/curriculum_pdf/'.$new_name;
        if(move_uploaded_file($_FILES['image']['tmp_name'],$path)){
          $post['image']=$new_name;
        }
      }
      // $check=$this->AM->insert_data('course_tabbar',$post);
      $id = $post['ca_id'];
      unset($post['ca_id']);
      $check = $this->Frontend_model->update_data('course_tabbar',$post,array('id'=>$id));
      if ($check) {
        echo 1;
      }else{
        echo 2;
      }
    }

    public function tabBarDetail(){
      $this->_chk_if_login();
      $id=$this->input->get('id');
      $data['course']=$this->User_model->get_single_where('*','tbl_course',array('id'=>$id),'','');
      $this->load->view('admin/tabBarDetail',$data);
    }

    public function addAddNewDetail(){
      $post = $_POST;
      $check=$this->AM->insert_data('course_tabbar_detail',$post);
      if ($check) {
        echo 1;
      }else{
        echo 2;
      }
    }

    public function deleteTabBarDetail(){
      $id = $this->input->get('id');
      $this->AM->deleteData('course_tabbar_detail',array('id'=>$id));
      echo 1;
    }

    public function deletetabBar(){
      $id = $this->input->get('id');
      $this->AM->deleteData('course_tabbar',array('id'=>$id));
      echo 1;
    }

    public function Review(){
      $this->_chk_if_login();
      $id=$this->input->get('id');
      $data['course']=$this->User_model->get_single_where('*','tbl_course',array('id'=>$id),'','');
      $this->load->view('admin/Review',$data);
    }

    public function addCourseReview(){
      $post = $_POST;
      if($_FILES['image']['size'] > 1){
        $new_name='image-'.mt_rand(0000,9999).'.'.$_FILES['image']['name'];
        $path='uploads/curriculum_pdf/'.$new_name;
        if(move_uploaded_file($_FILES['image']['tmp_name'],$path)){
          $post['image']=$new_name;
        }
      }
      $check=$this->AM->insert_data('tbl_course_review',$post);
      if ($check) {
        echo 1;
      }else{
        echo 2;
      }
    }

    public function updateCourseReview(){
      $post = $_POST;
      if($_FILES['image']['size'] > 1){
        $new_name='image-'.mt_rand(0000,9999).'.'.$_FILES['image']['name'];
        $path='uploads/curriculum_pdf/'.$new_name;
        if(move_uploaded_file($_FILES['image']['tmp_name'],$path)){
          $post['image']=$new_name;
        }
      }
      $id = $post['ca_id'];
      unset($post['ca_id']);
      $check = $this->Frontend_model->update_data('tbl_course_review',$post,array('id'=>$id));
      if ($check) {
        echo 1;
      }else{
        echo 2;
      }
    }

    public function deleteCourseReview(){
      $id = $this->input->get('id');
      $this->AM->deleteData('tbl_course_review',array('id'=>$id));
    }

    public function Technologies(){
      $this->_chk_if_login();
      $this->load->view('admin/Technologies');
    }

    public function addTechnology(){
      $this->AM->insert_data('tbl_technology',$_POST);
      echo 1;
    }

    public function updateTechnologies(){
      $post = $_POST;
      $id = $post['ca_id'];
      unset($post['ca_id']);
      $check = $this->Frontend_model->update_data('tbl_technology',$post,array('id'=>$id));
      if ($check) {
        echo 1;
      }else{
        echo 2;
      }
    }


    public function deleteTechnologies(){
      $id = $this->input->get('id');
      $this->AM->deleteData('tbl_technology',array('id'=>$id));
      echo 1;
    }

    public function BlogComment(){
      $this->load->view('admin/BlogComment');
    }

    public function ChangeBlogStatus(){
      $get = $_GET;
      $this->Frontend_model->update_data('tbl_blog_comment',array('status'=>$get['status']),array('id'=>$get['id']));
    }

    public function deleteBlogComment(){
      $id = $this->input->get('id');
      $this->AM->deleteData('tbl_blog_comment',array('id'=>$id));
      echo 1;
    }

    public function modals(){
      $modal1=$this->User_model->get_single_where('*','modals',array('id'=>1),'','');
      $modal2=$this->User_model->get_single_where('*','modals',array('id'=>2),'','');
      $modal3=$this->User_model->get_single_where('*','modals',array('id'=>3),'','');
      $data['modal1'] = json_decode($modal1['data']);
      $data['modal2'] = json_decode($modal2['data']);
      $data['modal3'] = json_decode($modal3['data']);
      $this->load->view('admin/modals',$data);
    }

    public function modal1(){
      $post = $_POST;
      if($_FILES['myFile']['size'] > 1){
        $new_name='image-'.mt_rand(0000,9999).mt_rand(0000,9999).'.pdf';
        $path='uploads/curriculum_pdf/'.$new_name;
        if(move_uploaded_file($_FILES['myFile']['tmp_name'],$path)){
          $post['image']=$new_name;
        }
      }
      $this->Frontend_model->update_data('modals',array('data'=>json_encode($post)),array('id'=>1));
      $this->session->set_flashdata('success','<div style="success">Data Updated Successfully!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function modal2(){
      $post = $_POST;
      // $post['datetime']= date('Y-m-d H:i:s',$post['datetime']);
      $this->Frontend_model->update_data('modals',array('data'=>json_encode($post)),array('id'=>2));
      $this->session->set_flashdata('success','<div style="success">Data Updated Successfully!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }
    public function modal3(){
      $post = $_POST;
      $this->Frontend_model->update_data('modals',array('data'=>json_encode($post)),array('id'=>3));
      $this->session->set_flashdata('success','<div style="success">Data Updated Successfully!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function corporate_training(){
      $this->_chk_if_login();
      $data['SpringPeople'] = $this->User_model->get_all_where('*','springSec1',array('id != '=>0),"","");
      $data['partner'] = $this->User_model->get_all_where('*','partner',array('id != '=>0),"","");
      $data['footer']=$this->User_model->get_all_where('*','corporate_footer',array('id !='=>0,),'','');
      // echo "<pre>";
      // print_r($data['SpringPeople']);die;
      $this->load->view('admin/corporate_training',$data);
    }

    public function springPeopleAdd(){
      $post = $_POST;
      if($_FILES['icon']['size'] > 1){
        $new_name='image-'.mt_rand(0000,9999).mt_rand().$_FILES['icon']['name'];
        $path='uploads/curriculum_pdf/'.$new_name;
        if(move_uploaded_file($_FILES['icon']['tmp_name'],$path)){
          $post['icon']=$new_name;
        }
      }
      $this->AM->insert_data('springSec1',$post);
      $this->session->set_flashdata('success','<div style="success">Data Updated Successfully!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function updatespringPeopleAdd(){
      $post = $_POST;
      $id = $post['hidden-id'];
      unset($post['hidden-id']);
      if($_FILES['icon']['size'] > 1){
        $new_name='image-'.mt_rand(0000,9999).mt_rand().$_FILES['icon']['name'];
        $path='uploads/curriculum_pdf/'.$new_name;
        if(move_uploaded_file($_FILES['icon']['tmp_name'],$path)){
          $post['icon']=$new_name;
        }
      }
      $this->Frontend_model->update_data('springSec1',$post,array('id'=>$id));
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function Delete_SpringPeople(){
      $id = $_GET['id'];
      $detail=$this->Frontend_model->fetch_condrecordwithfield('springSec1',array('id'=>$id),'icon');
      if($detail){
        $icon = $detail->icon;
          unlink('./uploads/curriculum_pdf/'.$icon);
      }
      $check = $this->AM->deleteData('springSec1',array('id'=>$id));
      $this->session->set_flashdata('success','<div style="success">Data Deleted Successfully!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function savePartner(){
      if($_FILES['icon']['size'] > 1){
        $new_name='image-'.mt_rand(0000,9999).mt_rand().$_FILES['icon']['name'];
        $path='uploads/curriculum_pdf/'.$new_name;
        if(move_uploaded_file($_FILES['icon']['tmp_name'],$path)){
          $this->AM->insert_data('partner',array('image'=>$new_name));
        }
      }
      $this->session->set_flashdata('success','<div style="success">Data Inserted Successfully!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function Delete_partner(){
      $id = $_GET['id'];
      $detail=$this->Frontend_model->fetch_condrecordwithfield('partner',array('id'=>$id),'image');
      if($detail){
        $icon = $detail->image;
          unlink('./uploads/curriculum_pdf/'.$icon);
      }
      $check = $this->AM->deleteData('partner',array('id'=>$id));
      $this->session->set_flashdata('success','<div style="success">Data Deleted Successfully!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function saveCorporateFooter(){
      $post = $_POST;
      if($_FILES['icon']['size'] > 1){
        $new_name='image-'.mt_rand(0000,9999).mt_rand().$_FILES['icon']['name'];
        $path='uploads/curriculum_pdf/'.$new_name;
        if(move_uploaded_file($_FILES['icon']['tmp_name'],$path)){
          $post['image']=$new_name;
        }
      }
      $this->AM->insert_data('corporate_footer',$post);
      $this->session->set_flashdata('success','<div style="success">Data Updated Successfully!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function updateCorporateFooter(){
      $post = $_POST;
      $id = $post['hidden-id'];
      unset($post['hidden-id']);
      if($_FILES['icon']['size'] > 1){
        $new_name='image-'.mt_rand(0000,9999).mt_rand().$_FILES['icon']['name'];
        $path='uploads/curriculum_pdf/'.$new_name;
        if(move_uploaded_file($_FILES['icon']['tmp_name'],$path)){
          $post['icon']=$new_name;
        }
      }
      $this->Frontend_model->update_data('corporate_footer',$post,array('id'=>$id));
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function Delete_cotporate_footer(){
      $id = $this->input->get('id');
      $check = $this->AM->deleteData('corporate_footer',array('id'=>$id));
      $this->session->set_flashdata('success','<div style="success">Data Deleted Successfully!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function refer_and_earn(){
      $data['refer_earn'] = $this->User_model->get_all_where('*','refer_earn',array('id != '=>0),"","");
      $data['faq']=$this->User_model->get_all_where('*','faq',array('id !='=>0,),'','');
      $this->load->view('admin/refer_and_earn',$data);
    }

    public function saveHowItWork(){
      $post = $_POST;
      // print_r($post);die;
      if($_FILES['icon']['size'] > 1){
        $new_name='image-'.mt_rand(0000,9999).mt_rand().$_FILES['icon']['name'];
        $path='uploads/curriculum_pdf/'.$new_name;
        if(move_uploaded_file($_FILES['icon']['tmp_name'],$path)){
          $post['icon']=$new_name;
        }
      }
      $this->AM->insert_data('refer_earn',$post);
      $this->session->set_flashdata('success','<div style="success">Data Updated Successfully!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function saveFaq(){
      $post = $_POST;
      $this->AM->insert_data('faq',$post);
      $this->session->set_flashdata('success','<div style="success">Data Updated Successfully!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function update_referearn(){
      $post = $_POST;
      $id = $post['hidden-id'];
      unset($post['hidden-id']);
      if($_FILES['icon']['size'] > 1){
        $new_name='image-'.mt_rand(0000,9999).mt_rand().$_FILES['icon']['name'];
        $path='uploads/curriculum_pdf/'.$new_name;
        if(move_uploaded_file($_FILES['icon']['tmp_name'],$path)){
          $post['icon']=$new_name;
        }
      }
      $this->Frontend_model->update_data('refer_earn',$post,array('id'=>$id));
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function Delete_refer(){
      $id = $this->input->get('id');
      $this->AM->deleteData('refer_earn',array('id'=>$id));
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function updateFaq(){
      $post = $_POST;
      $id = $post['hidden-id'];
      unset($post['hidden-id']);
      $this->Frontend_model->update_data('faq',$post,array('id'=>$id));
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_faq(){
      $id = $this->input->get('id');
      $this->AM->deleteData('faq',array('id'=>$id));
      redirect($_SERVER['HTTP_REFERER']);
    }

    public function certificate_request(){
      $this->_chk_if_login();
      $this->load->view('admin/certificate_request');
    }

    function get_sales_chart_data()
{
  $date = array();
  $new_final_sales_data = array();
  $new_final_customer = array();
  $type =  $this->input->post('type');
  if($type == 'Month')
  {
        // $date_from = date('Y/m/01');
        // $date_to = date('Y/m/d');
        $customer_from = date('Y-m-01 00:00:00');
        $customer_to = date('Y-m-d 23:59:00');
        $where = array( 'order_date >='=>$customer_from,'order_date <='=>$customer_to , 'status'=>1);
        $sales_data = $this->Frontend_model->fetch_allrecord_wherecondition('tbl_order','id',$where,'order_date,id');

        $where1 = array('created_at >='=>$customer_from, 'created_at <='=> $customer_to);
        $customers_data = $this->Frontend_model->fetch_allrecord_wherecondition('tbl_user','id',$where1,'created_at,id');

        $new_arr_sale =array() ;
        $new_arr_customer =  array() ;
        if(!empty($sales_data))
        {
          foreach ($sales_data as $key => $value) {
            $new_arr_sale []= date('d/m/Y',strtotime($value['order_date']));
          }
        }
        if(!empty($customers_data))
        {
          foreach ($customers_data as $key => $value) {

            $new_arr_customer[] =   date('d/m/Y',strtotime($value['created_at']));
          }
        }

        $sales_count1 ='';
        $cus_count1 ='';
        $date_data ='';
        $date = array();
        $xyza = '';
        $xyzb = '';
        if(!empty($new_arr_sale))
        {
          $xyza = array_reverse($new_arr_sale);
        }
        if(!empty($new_arr_customer))
        {
          $xyzb = array_reverse($new_arr_customer);
        }
        // echo '<pre>';
        // print_r($xyza);
        // echo  'yyyyyyyyyyyyyyyyyyyyy';
        // echo '<pre>';
        // print_r($xyzb);
        $new_data =array();
        for ($i=1; $i <= date('d') ; $i++) {
          if($i <=9)
          {
              $ddate = '0'.date($i.'/m/Y');
          }
         else
          {
            $ddate = date($i.'/m/Y');
          }
          $date[] = $ddate;
          $new_data[] = $i ;
       }
       $new_final_sales_data = array();
       $new_final_customer = array();
       if(!empty($xyza)){
           foreach ($date as $key => $value) {
            $cus_count1 =0;
              for($m=0 ; $m<count($xyza); $m++)
              {
                 if($xyza[$m] == $value)
                 {
                    $cus_count1 += 1;
                 }
              }
              $new_final_sales_data[] = $cus_count1 ;
          }
        }

         if(!empty($xyzb)){
        foreach ($date as $key => $value) {
          $customer =0;
            for($n=0 ; $n<count($xyzb); $n++)
            {

               if($xyzb[$n] == $value)
               {
                  $customer += 1;
               }
            }
            $new_final_customer[] = $customer ;
        }
      }
  }else
  if($type == 'Today')
  {
        // $date_from = date('Y/m/d');
        // $date_to = date('Y/m/d');
        $customer_from = date('Y-m-18 00:00:00');
        $customer_to = date('Y-m-18 23:59:00');
        $where = array( 'order_date >='=>$customer_from,'order_date <='=>$customer_to,'status'=>1);
        $sales_data = $this->Frontend_model->fetch_allrecord_wherecondition('tbl_order','id',$where,'order_date,id');
        // echo '<pre>';
        // print_r($sales_data);
        $where1 = array('created_at >='=>$customer_from, 'created_at <='=> $customer_to);
        $customers_data = $this->Frontend_model->fetch_allrecord_wherecondition('tbl_user','id',$where1,'created_at,id');
        $new_arr_sale =array() ;
        $new_arr_customer =array();

        if(!empty($sales_data)){
          foreach ($sales_data as $key => $value) {
            $new_arr_sale[]= date('d/m/Y',strtotime($value['order_date']));
          }
      }

      if(!empty($customers_data)){
          foreach ($customers_data as $key => $value) {
            $new_arr_customer[] =   date('d/m/Y',strtotime($value['created_at']));
          }
      }
       //        echo '<pre>';

        // print_r($new_arr_customer);
        $sales_count1 ='';
        $cus_count1 ='';
        $date_data ='';
        $date = array();
        $xyza = array_reverse($new_arr_sale);
        $xyzb = array_reverse($new_arr_customer);

        $new_data =array();
        for ($i=1; $i <= date('d') ; $i++) {
          if($i <=9)
          {
              $ddate = '0'.date($i.'/m/Y');
          }
         else
          {
            $ddate = date($i.'/m/Y');
          }
          $date[] = $ddate;
          $new_data[] = $i ;
       }
         // print_r($date);
       $new_final_sales_data = array();
       $new_final_customer = array();

         foreach ($date as $key => $value) {
          $cus_count1 =0;
            for($m=0 ; $m<count($xyza); $m++)
            {
               if($xyza[$m] == $value)
               {
                  $cus_count1 += 1;
               }
            }
            $new_final_sales_data[] = $cus_count1 ;
        }



        foreach ($date as $key => $value) {
          $customer =0;
            for($n=0 ; $n<count($xyzb); $n++)
            {
                 if($xyzb[$n] == $value)
                 {
                    $customer += 1;
                 }
                         }
            $new_final_customer[] = $customer ;
        }

  }else
  if($type == 'Week')
  {
       $date_from = date('Y/m/d', strtotime('-6 days'));
         $date_to = date('Y/m/d');
         $customer_from = date('Y-m-d 00:00:00' , strtotime('-6 days'));
         $customer_to = date('Y-m-d 23:59:00');
        $where = array( 'order_date >='=>$customer_from,'order_date <='=>$customer_to, 'status'=>1);
        $sales_data = $this->Frontend_model->fetch_allrecord_wherecondition('tbl_order','id',$where,'order_date,id');
        $where1 = array('created_at >='=>$customer_from, 'created_at <='=> $customer_to);
        $customers_data = $this->Frontend_model->fetch_allrecord_wherecondition('tbl_user','id',$where1,'created_at,id');
        $new_arr_sale =array() ;
        $new_arr_customer =array();
         if(!empty($sales_data))
        {
          foreach ($sales_data as $key => $value) {
            $new_arr_sale[]= date('d/m/Y',strtotime($value['order_date']));
          }
        }
          if(!empty($customers_data))
        {
          foreach ($customers_data as $key => $value) {

            $new_arr_customer[] =   date('d/m/Y',strtotime($value['created_at']));
          }
       }

        $sales_count1 ='';
        $cus_count1 ='';
        $date_data ='';
        $date = array();
        $xyza = array_reverse($new_arr_sale);
        $xyzb = array_reverse($new_arr_customer);
        // echo '<pre>';
        // print_r($xyza);
        // echo '<pre>';
        // print_r($xyzb);
        $new_data =array();
        $i= date('d',strtotime('-6 days'));
        for ($i; $i <= date('d') ; $i++) {
          if($i <=9)
          {
              $ddate = '0'.date($i.'/m/Y');
          }
         else
          {
            $ddate = date($i.'/m/Y');
          }
          $date[] = $ddate;
          $new_data[] = $i ;
       }
       $new_final_sales_data = array();
       $new_final_customer = array();
         foreach ($date as $key => $value) {
          $cus_count1 =0;
            for($m=0 ; $m<count($xyza); $m++)
            {
               if($xyza[$m] == $value)
               {
                  $cus_count1 += 1;
               }
            }
            $new_final_sales_data[] = $cus_count1 ;
        }

        foreach ($date as $key => $value) {
          $customer =0;
            for($n=0 ; $n<count($xyzb); $n++)
            {
               if($xyzb[$n] == $value)
               {
                  $customer += 1;
               }
            }
            $new_final_customer[] = $customer ;
        }
  }else
  if($type == 'Year')
  {
        $date_from = date('Y/01/01');
        $date_to = date('Y/m/d');
        $customer_from = date('Y-01-01 00:00:00');
        $customer_to = date('Y-m-d 23:59:00');
        $where = array( 'order_date >='=>$date_from,'order_date <='=>$date_to, 'status'=>1);
        $sales_data = $this->Frontend_model->fetch_allrecord_wherecondition('tbl_order','id',$where,'order_date,id');
        $where1 = array('created_at >='=>$customer_from, 'created_at <='=> $customer_to);
        $customers_data = $this->Frontend_model->fetch_allrecord_wherecondition('tbl_user','id',$where1,'created_at,id');
        $new_arr_sale =array() ;
        $new_arr_customer =array() ;
            if(!empty($sales_data))
        {
        foreach ($sales_data as $key => $value) {
          $new_arr_sale []= date('d/m/Y',strtotime($value['order_date']));
        }
      }

          if(!empty($customers_data))
        {
           foreach ($customers_data as $key => $value) {
            $new_arr_customer[] =   date('d/m/Y',strtotime($value['created_at']));
          }
        }

        $sales_count1 ='';
        $cus_count1 ='';
        $date_data ='';
        $date = array();
        $xyza = array_reverse($new_arr_sale);
        $xyzb = array_reverse($new_arr_customer);

        $new_data =array();
        $upto = date('m');
        for($m=1 ; $m<=$upto; $m++)
        {
            if($m<=9)
            {
                $f_date = date('Y/0'.$m.'/01'); // From date
            }else
            {
                $f_date = date('Y/'.$m.'/01'); // From date
            }
          $lastDateOfMonth = date("t", strtotime($f_date));

          $dateObj   = DateTime::createFromFormat('!m', $m);
           $monthName = $dateObj->format('F'); // March
          if($m<=9)
            {
           $date_to = date('Y/0'.$m.'/'.$lastDateOfMonth);
            }else
            {
           $date_to = date('Y/'.$m.'/'.$lastDateOfMonth);
            }
             $sales_data = $this->Frontend_model->fetch_allrecord_wherecondition('tbl_order','id',array('order_date >='=>$f_date,'order_date <='=>$date_to,'status'=>1),'order_date,id');

            if($m<=9)
            {
                $customer_from = date('Y-0'.$m.'-01'.' 00:00:00'); // From date
            }else
            {
                $customer_from = date('Y-'.$m.'-01'.' 23:59:00'); // From date
            }

            if($m<=9)
            {
            $customer_to = date('Y-0'.$m.'-'.$lastDateOfMonth.' 00:00:00');
            }else
            {
            $customer_to = date('Y-'.$m.'-'.$lastDateOfMonth.' 23:59:00');
            }

            $where1 = array('created_at >='=>$customer_from, 'created_at <='=> $customer_to);
            $customers_data = $this->Frontend_model->fetch_allrecord_wherecondition('tbl_user','id',$where1,'created_at,id');
            $new_arr_sale =array();
            $new_arr_customer =array() ;
            if(!empty($sales_data))
            {
              foreach ($sales_data as $key => $value) {
                $new_arr_sale []= implode('/',array_reverse(explode('/' , $value['order_date'])));
              }
            }
            if(!empty($customers_data)){
              foreach ($customers_data as $key => $value) {
                $new_arr_customer[] =   date('d/m/Y',strtotime($value['created_at']));
              }
            }
            $xyza = array_reverse($new_arr_sale);
            $xyzb = array_reverse($new_arr_customer);
            // echo '<pre>';
            // print_r($sale_);
            $date[] = $monthName;
            $new_final_sales_data[] = count($xyza);
            $new_final_customer[] = count($xyzb);
        // echo $last_date = date($m.'-t-Y');
        }
  }
    $final_data [] = $date;
    $final_data [] = $new_final_sales_data;
    $final_data [] = $new_final_customer;
    echo json_encode($final_data);

}
}
