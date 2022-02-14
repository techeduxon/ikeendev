<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Frontend_model');
    $this->load->model('User_model');
    $this->load->model('Course_filter_model','CFM');
    $this->load->model('DataTableModel','DTM');
    $this->load->helper('url');
    $this->load->helper('otp_helper');
    $this->load->helper('currency_helper');
    date_default_timezone_set('Asia/Kolkata');
  }

    public function convertCurrency(){
       $curr = convertCurrency(100,'USD');
       echo $curr;
    }

    public function currency_convert(){
        // $cda = convertCurrency(1,'CAD');
        $result = convertCurrency2();
        $data= array(
         'last_update_unix' => date('H:s:i',$result['time_last_update_unix']),
         'last_update_utc' => date('Y-m-d H:s:i',strtotime($result['time_last_update_utc'])),
         'next_update_unix' =>  date('H:s:i',$result['time_next_update_unix']),
         'next_update_utc' => date('Y-m-d H:s:i',strtotime($result['time_next_update_utc'])),
         'base_code' => $result['base_code'],
         'conversion_rates'=> json_encode($result['conversion_rates']),
        );
        $this->Frontend_model->update_data('allcurrency',$data,array('id' =>1));
    }

    public function demo123(){
        $a=$this->session->userdata(); 
        echo "<pre>";
        print_r($a);
        print_r($_COOKIE);
    } 
    private function email_exists($email){
        $this->db->where('email', $email);
        $query = $this->db->get('tbl_user');
        if( $query->num_rows() > 0 ){ return TRUE; } else { return FALSE; }
    }

    public function register_email_exists(){
        if (array_key_exists('email',$_POST)) {
            if ( $this->email_exists($this->input->post('email')) == TRUE ) {
                echo json_encode(FALSE);
            } else {
                echo json_encode(TRUE);
            }
        }
    }
    private function mobile_exists($mob){
        $this->db->where('contact', $mob);
        $query = $this->db->get('tbl_user');
        if( $query->num_rows() > 0 ){ return TRUE; } else { return FALSE; }
    }


    public function mobile_no_exists(){
        if (array_key_exists('contact',$_POST)) {
            if ( $this->mobile_exists($this->input->post('contact')) == TRUE ) {
                echo json_encode(FALSE);
            } else {
                echo json_encode(TRUE);
            }
        }
    }

    public function check_email(){
        $email = $this->input->post('email');
        $check = $this->User_model->get_all_where('*','tbl_user', array('email' => $email ),"","");
        if(empty($check)) {
            echo json_encode(true);
        }else{
            echo json_encode(false);
        }
    }
    public function check_reference(){
        $reference = $this->input->get('reference');
        $check = $this->User_model->get_all_where('*','tbl_user', array('refer_id' => $reference ),"","");
        if(empty($check)) {
            echo json_encode(false);
        }else{
            echo json_encode(true);
        }
    }
    public function check_phone(){
        $contact = $this->input->get('telephone');
        $check = $this->User_model->get_all_where('*','tbl_user', array('contact' => $contact ),"","");
        if(empty($check)) {
            echo json_encode(true);
        }else{
            echo json_encode(false);
        }
    }
    public function Signup(){
        $this->load->view('user/signup');         
    }
    public function signup_function_user(){
    //$this->session->sess_destroy('user_data');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $contact = $this->input->post('contact');
        $password = md5($this->input->post('password'));
        $type = 'student';
        $data = array(
          'name'            =>  $name,
          'contact'         =>  $contact,
          'email'           =>  $email,
          'password'        =>  $password,
          'type'            =>  $this->input->post('type'),
         );
        // echo "<pre>";
        // print_r($data);die;
        $this->session->set_userdata('user_data1',$data);
        $otp = mt_rand(1111,9999);
        $msg='Your Verification Code Is : '.$otp;
        /*
        $mobile_otp=send_otp('91'.$contact,$msg,$otp); */
        $otp = mt_rand(1111,9999);
        $msg='Your OTP is :'.$otp;
        $this->load->library('email');
        $this->email->from('Aashish.vedanshtechnologies@gmail.com', 'vedanshtechnologies');
        $this->email->to($email);
        $this->email->subject('OTP');
        $this->email->message($msg);
        $this->email->send(); 
        $this->session->set_userdata('otp',$otp);
        $this->session->set_userdata('email',$email);

        redirect(base_url('Otp'));
    }
   public function Otp(){
        $this->load->view('user/otp');         
    }
    public function otp_verify(){
        $user_otp = $this->input->post('otp');
        $ses_otp = $this->session->userdata('otp');
        if ($user_otp == $ses_otp) {
        	if(!empty($this->session->userdata('otp_type'))){

        	}
            $data = $this->session->userdata('user_data1');
                  $this->session->set_userdata('user_data',$data);
            $data2= $this->session->userdata('user_data');
                 $check = $this->User_model->insert_data('tbl_user',$data2);
            if ($check) {
            $data1 = $this->session->userdata('user_data');
            $email = $data1['email'];
            $password = $data1['password'];
            $check1 = $this->User_model->login_function($email,$password);
            $data1 = array(
              'name'         => $check1->name,             
              'contact'      => $check1->contact,
              'email'        => $check1->email,
              'id'           => $check1->id ,
              'type'         => $check1->type,
            );
            $succ=$this->session->set_userdata('user_data',$data1);
            // if($succ){
            //     echo 1;
            // }
                $msisdn = $check1->contact;
                // $msg = " Thank you For Registering ";
                // send_otp1($msisdn,$msg);

                $otp = mt_rand(1111,9999);
                $msg='Your Have Successfully Registered On Techeduxon!.';
                // $this->load->library('email');
                // $this->email->from('techeduxon@gmail.com', 'Techeduxon');
                // $this->email->to($check1->email);
                // $this->email->subject('Register');
                // $this->email->message($msg);

                $this->load->library('email');
                $this->email->from('Aashish.vedanshtechnologies@gmail.com', 'vedanshtechnologies');
                $this->email->to($check1->email);
                $this->email->subject('Register');
                $this->email->message($msg);
                // $this->email->send(); 
                if($this->email->send()){
                    // echo "send".' '.$check1->email;
                    echo 1;
                }else{
                    echo "Not";
                }
                // echo 1;
            }else{
                echo 2;
               //redirect(base_url('Otp'));
            }
        }else{
          echo 3;
         //redirect(base_url('Otp'));
        }
    }
    public function resend_otp(){
        $data=$this->session->userdata('user_data1');
        /*$telephone=$data['contact'];
        $mobile_otp=send_otp('91'.$telephone,$msg,$otp);  */
        $otp = mt_rand(1111,9999);
        $msg='Your OTP is :'.$otp;
        $this->load->library('email');
		$this->email->from('Aashish.vedanshtechnologies@gmail.com', 'vedanshtechnologies');
		$this->email->to($this->session->userdata('email'));
		$this->email->subject('OTP');
		$this->email->message($msg);
		$this->email->send();
        $this->session->set_userdata('otp',$otp);
        echo 1;
    }
   
  
    public function Login(){
        $this->load->view('user/login');         
    }
    public function check_login(){
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $check = $this->User_model->login_function($email,$password);
        // echo "<pre>";
        // print_r($check);die;
        if($check){ 
            if ($check->status == 1) {
                $data = array(
                'name'      => $check->name,             
                'contact'   => $check->contact,
                'email'     => $check->email,
                'id'        => $check->id,
                'image'        => $check->image,
                'type'      => $check->type,
            );
        $this->session->set_userdata('currency',1);
        $this->session->set_userdata('country','USD');
        $this->session->set_userdata('symbol','$');        
        $this->session->set_userdata('user_data',$data);
        redirect(base_url('My-Courses'));
      
       }else{
        $session_flash=$this->session->set_flashdata('error','<div style="border: 1px solid #ded7d7; background-color: #dcd9d5; width: 102%; height: 34px; text-align: center; margin-left: -6px; margin-bottom: 5px;"><span style="color:red;font-size:15px;font-weight:600px;">Invalid Username Or Password </span> </div>');
         redirect(base_url('User/Login'));
       }

      }else{
        $session_flash=$this->session->set_flashdata('error','<div style="border: 1px solid #ded7d7; background-color: #dcd9d5; width: 102%; height: 34px; text-align: center; margin-left: -6px; margin-bottom: 5px;"><span style="color:red; font-size:15px; font-weight:600px;"> Invalid Username Or Password</span></div>');
         redirect(base_url('User/Login'));
      }
    }
    public function Logout(){
        $this->session->sess_destroy();
        redirect(base_url('User/Login'));
        exit();
    }
    public function _check_if_login(){
        $sess_data=$this->session->userdata('user_data');
        if(empty($sess_data)){
          redirect('Login');
        }
    }
    public function send_otp_forgot(){
        $email = $this->input->get('forgotemail');
        $data = $this->User_model->get_all_where('*','tbl_user',array('email'=>$email),"","");
        if (!empty($data)) {
            $otp = mt_rand(1111,9999);
            /*
            $telephone = $data[0]['contact'];
            $mobile_otp=send_otp('91'.$telephone,$msg,$otp);*/
            // echo $data[0]['email'];die;
            $msg='Your Verification Code Is : '.$otp;
            $this->load->library('email');
            $this->email->to($email);
            $this->email->from('Aashish.vedanshtechnologies@gmail.com', 'vedanshtechnologies');
                $this->email->subject('OTP');
                $this->email->message($msg);
                $this->email->send();
                $this->session->set_userdata('email',$data[0]['email']);
                $this->session->set_userdata('otp3',$otp);
           echo 1;
        }else{
            echo 2;
        }
    }
    public function resend_otp_forgot(){
        $otp = mt_rand(1111,9999);
        /*$msg='Your OTP is :'.$otp;
        $mobile_otp=send_otp('91'.$telephone,$msg,$otp);*/
        $email = $this->session->userdata('email');
        $msg='Your Verification Code Is : '.$otp;
            $this->load->library('email');
            $this->email->to($email);
            $this->email->from('Aashish.vedanshtechnologies@gmail.com', 'vedanshtechnologies');
            $this->email->subject('OTP');
            $this->email->message($msg);
            $this->email->send();
        $this->session->set_userdata('otp3',$otp);
        // $this->session->set_userdata('contact',$telephone);
        echo 1;
        
    }


    public function verify_otp_frog(){
        $user_otp = $this->input->get('otp1');
        $ses_otp = $this->session->userdata('otp3');
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
        $password = md5($this->input->get('changePass'));
        $email = $this->session->userdata('email');
        $set = array('password' => $password);
        $where = array('email' => $email);
        $check = $this->Frontend_model->update_data('tbl_user',$set,$where);
        if ($check) {
            echo 1;
        }else{
            echo 2;
        }
    }
    public function Forgot_password (){
        $this->load->view('user/forgot_password');         
    }
   
    public function New_password (){
        $this->load->view('user/new_password');         
    }
    public function index(){
        $data['home_content']=$this->User_model->get_all_where('*','tbl_home_content',array('status'=>1),'','');
        $data['courses']=$this->User_model->get_all_where('*','tbl_course',array('status'=>1,'top'=>1),'','');
        $data['head'] = $this->User_model->getSelectWhereRow('*','tbl_header_data',array('id'=>1),'DESC','');


        $data['bhead'] = $this->User_model->getSelectWhereRow('*','Below_Header',array('id'=>1),'DESC','');
         $data['sp'] = $this->User_model->getSelectWhereRow('*','How_The_Techeduxon',array('id'=>1),'DESC','');
         // $data['simage'] = $this->User_model->get_all_where('*','tbl_home_sponsor',array('id!='=>0,),'','');
         $data['count'] = $this->User_model->getSelectWhereRow('*','tbl_home_counter',array('id'=>1),'DESC','');
         $data['bcount'] = $this->User_model->getSelectWhereRow('*','tbl_below_counter',array('id'=>1),'DESC','');
         $data['test'] = $this->User_model->get_all_where('*','tbl_testimonial',array('from_page'=>'home_page'),'','');
         $data['modal1'] = json_decode($this->User_model->getSelectWhereRow('data','modals',array('id'=>1),'DESC','')->data);
        $this->load->view('user/index',$data);         
    }      
    
    public function Course(){
        $c_id=$this->uri->segment(2);
        $c_id=$this->encrypt_id->encryptor('decrypt',$c_id);
        if(!empty($c_id)){
            $data['courses']=$this->User_model->get_single_where('*','tbl_course',array('id'=>$c_id,'status'=>1),'','');
            $data['batches']=$this->User_model->get_all_where('*','tbl_batch',array('course_id'=>$c_id,'status'=>1),'','');

            $data['tabbar']=$this->User_model->get_all_where('*','course_tabbar',array('course_id'=>$c_id),'','');
            $data['outLine']=$this->User_model->get_all_where('*','course_tabbar_detail',array('tabBarId'=>$c_id),'','');
            // if(!empty($data['tabbar'])){
            //     $i=0;
            //     foreach($data['tabbar'] as $val){
            //         $data['tabbar'][$i]['detail'] = $this->User_model->get_all_where('*','course_tabbar_detail',array('tabBarId'=>$val['id']),'','');
            //     $i++;}
            // }
            $data['review']=$this->User_model->get_all_where('*','tbl_course_review',array('course_id'=>$c_id),'','');
            $data['tech'] = $this->User_model->get_all_where('*','tbl_technology',array('id !='=>0),'','');
            $data['head'] = $this->User_model->getSelectWhereRow('image','tbl_header_data',array('id'=>1),'DESC','');
            $data['currency']=$this->User_model->get_all_where('*','tbl_currency',array('id != '=>0),'','');

            $this->load->view('user/course',$data);
        }else{
            redirect(base_url());
        }
    }
    public function My_Account(){
        $ses = $this->session->userdata('user_data');
        if(!empty($ses)){
            $data['data'] = $this->User_model->getSelectWhereRow('*','tbl_user',array('id'=>$ses['id']),'DESC','');
            $this->load->view('user/my_account',$data);
        }else{
            redirect('User/Login?route=My-Courses');
        }
    }
    public function Cart(){
        $userdata = $this->session->userdata('user_data');
        if(!empty($userdata)){

            if(!empty($this->uri->segment(2))){
                $product_id = $this->encrypt_id->encryptor('decrypt',$this->uri->segment(2));
                $get = $this->User_model->getSelectWhereRow('id','tbl_cart',array('user_id'=>$userdata['id']),'DESC','');
                $gett = $this->User_model->getSelectWhereRow('id','tbl_cart',array('user_id'=>$userdata['id'],'product_id'=>$product_id),'DESC','');
             if (empty($gett)) {
                    
                if(!empty($get)){
                    $this->User_model->delete_data('tbl_cart',array('user_id'=>$userdata['id']));
                }
                $check=$this->User_model->insert_data('tbl_cart',array('user_id'=>$userdata['id'],'product_id'=>$product_id));
              }else{
                $this->session->set_flashdata('msgg', 'This product already purchased!');
                redirect($_SERVER['HTTP_REFERER']);
              }
            }
            $select = 'tbl_course.title,tbl_course.image,tbl_course.msp,tbl_cart.id,tbl_cart.product_id, tbl_course.live_msp,tbl_course.self_msp, tbl_course.validity, tbl_course.assessment_msp, tbl_course.course_highlight';
            $table = 'tbl_cart';
            $j_table = 'tbl_course';
            $join = 'tbl_cart.product_id = tbl_course.id';
            $data['cart'] = $this->User_model->get_onetable_join($select,$table,$j_table,$join,array('tbl_cart.user_id'=>$userdata['id']),'','');
            // echo "<pre>";
            // print_r($data['cart']);die;
            $this->load->view('user/cart',$data);
        }else{
            redirect('User/Login?route=Cart');
        }
    }
    public function Checkout(){
        $userdata = $this->session->userdata('user_data');
        if(!empty($userdata)){
            $check = $this->User_model->getSelectWhereRow('id,price','tbl_cart',array('user_id'=>$userdata['id']),'DESC','','tbl_cart.user_id');
            if(!empty($check)){
                $data['price'] = $check->price;
                $data['trainer'] = $this->User_model->get_all_where('*','become_trainer_sec3',array('id !='=>0),'DESC','');

                $this->load->view('user/checkout',$data);
            }else{
                redirect('Cart');
            }
        }else{
            redirect('User/Login?route=Checkout');
        }
    }
    public function Edit_profile(){
        $sess_data = $this->session->userdata('user_data');
        if(!empty($sess_data)){
        $user = $this->User_model->getSelectWhereRow('*','tbl_user',array('id'=>$sess_data['id']),'DESC','');
      
            $user->profile_data = json_decode($user->profile_data);
            $data['user'] = $user;
        	$this->load->view('user/edit_profile',$data);         
        }else{
            redirect('User/Login?route=Edit-Profile');
        }
    }
    public function Change_password(){
        $this->load->view('user/change_password');         
    }
    public function Certificates (){
        $ses = $this->session->userdata('user_data');
        $data['data'] = $this->db->select('order_detail.product_id,tbl_course.title,order_detail.complete,order_detail.id')->from('order_detail')->join('tbl_course','tbl_course.id = order_detail.product_id')->where('order_detail.user_id',$ses['id'])->get()->result();
        // echo "<pre>";
        // print_r($data);die;
        $this->load->view('user/certificates',$data);         
    }
    public function Exam(){
        $ses = $this->session->userdata('user_data');
        $id = $this->encrypt_id->encryptor('decrypt',$this->uri->segment(2));

        if(!empty($ses) && !empty($id)){
            $data['data'] = $this->User_model->getSelectWhereRow('title,exam_name, exam_vchr, last_date, exa_description','tbl_course',array('id'=>$id),'','');

            $data['ordDetail'] = $this->User_model->getSelectWhereRow('id,apply_for_eaxm','order_detail',array('product_id'=>$id,'user_id'=>$ses['id']),'','');
            /*echo "<pre>";
            print_r($data['ordDetail']);
            die;*/
            $this->load->view('user/exam',$data);
        }else{
            redirect('User/Login?route=My-Courses');
        }
    }
    public function My_courses(){
        $ses = $this->session->userdata('user_data');
        if(!empty($ses)){
            if($ses['type'] == 'Trainer'){
                $data['course'] = $this->User_model->getSelectResult('*','tbl_course',array('status',1));
            }else{
                $select = 'tbl_course.image,tbl_course.exam_name, tbl_course.title, tbl_course.id,tbl_course.avg_rating,tbl_course.number_of_rating, ,order_detail.complete_assesment AS cAss,order_detail.order_id AS ordId, order_detail.complete_video AS cVid,
                (SELECT type FROM tbl_order WHERE tbl_order.id = order_detail.order_id LIMIT 1)AS type';
                $table = 'order_detail';
                $j_table = 'tbl_course';
                $join = 'order_detail.product_id = tbl_course.id';
                $data['course'] = $this->User_model->get_onetable_join($select,$table,$j_table,$join,array('order_detail.user_id'=>$ses['id']),'','');
            }
            $i=0;
            foreach ($data['course'] as $key => $value) {
              $select = 'id,(SELECT count(id) FROM tbl_self_learn_video WHERE tbl_self_learn_video.section_id = tbl_section.id LIMIT 1)AS tVid';
            	$check = $this->User_model->getSelectWhereRow($select,'tbl_section',array('course_id'=>$value->id),'','');
              if (!empty($check)) {
                 
            	if ($value->cVid == 0 || $check->tVid == 0) {
            		$per = 0;
            	}else{
            		$per = ($value->cVid/$check->tVid)*100;
            	}
            }else{
                $per =0;
            	$data['course'][$i]->per = $per;
            }
            $i++;}
            $data['pro'] = $this->User_model->profileCompleted($ses['id']);

            $data['share'] = $this->Frontend_model->fetch_condrecordwithfield('my_course',array('id'=>1),'*');
            $data['shcourse'] = $this->User_model->get_all_where('id,title','tbl_course',array('status'=>1),'DESC',8);
            // echo "<pre>";
            // print_r($data['course']);die;
            $this->load->view('user/my_courses',$data);
        }else{
            redirect('User/Login?route=My-Courses');
        }
    }
    public function Self_learning(){
        $ses = $this->session->userdata('user_data');
        if(!empty($ses)){
           $course_id = $this->encrypt_id->encryptor('decrypt',$this->uri->segment(2));
            $data['section'] = $this->User_model->get_all_where('section,id,video AS videos,remark','tbl_section',array('course_id'=>$course_id),'ASC','');
            $data['resoursec'] = '';
            if (!empty($data['section'])) {
                $i=0;
                foreach($data['section'] as $val){
                    $data['section'][$i]['video'] = $this->User_model->get_all_where('id,title,duration,video_url','tbl_self_learn_video',array('section_id'=>$val['id']),'ASC','');
                $i++;}
                $data['resoursec'] = $this->User_model->get_all_where('title,resource_pdf','tbl_self_learn_resources',array('section_id'=>$data['section'][0]['id']),'ASC','');
            }

            $data['notes'] = $this->User_model->getSelectResult('label,comment','tbl_user_notes',array('user_id'=>$ses['id']));

            $data['que'] = $this->User_model->get_all_where('id,que','tbl_forum',array('id !='=>$course_id),'DESC',10);
            $data['type'] = $this->User_model->getSelectWhereRow('type','tbl_order',array('id'=>$_GET['id']),'','');
            $data['type'] = explode(',', $data['type']->type);
            $this->load->view('user/self_learning',$data);
        }else{
            redirect('User/Login?route=My-Courses');
        }
    }
    public function Live_Classes(){
        $ses = $this->session->userdata('user_data');
        if(!empty($ses)){
            $id = $this->encrypt_id->encryptor('decrypt',$this->uri->segment(2));
            $check = $this->User_model->getSelectWhereRow('id','order_detail',array('user_id'=>$ses['id'],'product_id'=>$id),'','');
            if(!empty($check)){
                $data['class'] = $this->User_model->get_all_where('*','tbl_live_classes',array('course_id'=>$id),'','');
                // echo"<pre>";
                // print_r($data['class']);die;
                 $data['type'] = $this->User_model->getSelectWhereRow('type','tbl_order',array('id'=>$_GET['id']),'','');
            $data['type'] = explode(',', $data['type']->type);
                $this->load->view('user/live_classes',$data);
            }
        }else{
            redirect('Login');
        }
    }
    public function Assessment (){
        $c_id1=$this->uri->segment(2);
        $c_id=$this->encrypt_id->encryptor('decrypt',$c_id1);
        $data['assessment']=$this->User_model->get_all_where('*','tbl_assessment',array('course_id'=>$c_id),'','');
        // echo "<pre>"; print_r($data);die;
        $data['type'] = $this->User_model->getSelectWhereRow('type','tbl_order',array('id'=>$_GET['id']),'','');
            $data['type'] = explode(',', $data['type']->type);
        $this->load->view('user/assessment',$data);         
    }
    public function Certificate(){
        $data['type'] = $this->User_model->getSelectWhereRow('type','tbl_order',array('id'=>$_GET['id']),'','');
        // $data['data'] = $this->User_model->getSelectWhereRow('*','order_detail',array('order_id'=>$_GET['id']),'','');
        $data['type'] = explode(',', $data['type']->type);

        $data['cDetail'] = $this->db->select('order_detail.complete_assesment, order_detail.complete_video, count(tbl_self_learn_video.id)AS tVid,tbl_course.title, tbl_course.certificate, tbl_order.type')
        ->from('order_detail')
        ->join('tbl_section','tbl_section.course_id = order_detail.product_id',"LEFT")
        ->join('tbl_course','tbl_course.id = order_detail.product_id',"LEFT")
        ->join('tbl_order','tbl_order.id = order_detail.order_id',"LEFT")
        ->join('tbl_self_learn_video','tbl_self_learn_video.section_id = tbl_section.id',"LEFT")
        ->where('order_detail.order_id',$_GET['id'])->get()->row();
        // echo "<pre>";
        // print_r($data);die;
        $data['percentage'] = ($data['cDetail']->complete_video / $data['cDetail']->tVid) * 100;
        $data['cmplt'] = 'No';
        // $type = explode(',', $data['cDetail']->type);
        // if(in_array('fullCourse', $type)){

        // }else{
            
        // }
        if($data['percentage'] >= 50 && $data['cDetail']->complete_assesment >= 1){
            $data['cmplt'] = 'Yes';
            $this->db->set('complete',1)->where('order_id',$_GET['id'])->update('order_detail');
        }
        // echo "<pre>";
        // print_r($data);die;
        $this->load->view('user/certificate',$data);         
    }
    public function About_us (){
        $data['about']=$this->User_model->get_all_where('*','tbl_about',array('id!='=>0),'','');
        $data['about_journey']=$this->User_model->get_all_where('*','tbl_about_journey',array('id!='=>0),'','');
        $data['test'] = $this->User_model->get_all_where('*','tbl_testimonial',array('from_page'=>'Who We Are'),'','');
        $data['about_journey_head'] = $this->User_model->get_single_where('*','tbl_about_journey_heading',array('id'=>1),'','');
        $this->load->view('user/about_us',$data);         
    }
    
    public function Leadership (){

        $data['home_content']=$this->User_model->get_all_where('*','tbl_home_content',array('status'=>1),'','');
        $this->load->view('user/leadership',$data);         
    }
    public function Become_a_trainer (){
        $data['data'] = $this->User_model->getSelectWhereRow('*','tbl_become_trainer',array('id'=>1),'','');
        $data['title'] = $this->User_model->get_all_where('*','become_trainer_title',array('id !='=>0),'','');
        $data['tech'] = $this->User_model->get_all_where('*','tbl_technology',array('id !='=>0),'','');
        if(!empty($data['title'])){
            $i=0;
            foreach($data['title'] as $val){
                $data['title'][$i]['det'] = $this->User_model->get_all_where('*','become_trainer_sec3',array('title_id'=>$val['id']),'','');
            $i++;}
        }
        // echo "<pre>";
        // print_r($data['title']);die; 
        $this->load->view('user/become_a_trainer',$data);         
    }
    public function Career (){
        $data['cat'] = $this->User_model->get_all_where('id,category,detail','tbl_job_category',array('id !='=>0),'','');
        /*if(!empty($data['cat'])){
            $i=0;
            foreach($data['cat'] as $key => $value) {
                $data['cat'][$i]['det'] = $this->User_model->get_all_where('id,title','tbl_job_category_det',array('category_id'=>$value['id']),'','');
            $i++;}
        }*/
        $data['sec2'] = $this->User_model->getSelectWhereRow('*','career_sec2_sec4',array('id'=>1,),'','');
        $data['card']=$this->User_model->get_all_where('*','career_sec2_cards',array('id !='=>0),'','');

        // echo "<pre>";
        // print_r($data['sec2']);
        // print_r($data['card']);die;
        $this->load->view('user/career',$data);         
    }
    public function Gallery (){
        $data['gallery']=$this->User_model->get_all_where('*','tbl_gallery',array('status'=>1),'','');
        $data['cat']=$this->User_model->get_all_where('*','tbl_category',array('id !='=>0),'','');
        $this->load->view('user/gallay',$data);         
    }
    public function Contact_us (){
        $data['data'] = $this->User_model->getSelectWhereRow('*','tbl_contact_us',array('id'=>1,),'','');
        $this->load->view('user/contact_us',$data);         
    }
    public function Add_contact(){

        $data=array(
           'name'=>$this->input->post('name'),
           'email'=>$this->input->post('email'),
           'contact'=>$this->input->post('contact'),
           'countary'=>$this->input->post('countary'),
           'from_page'=>$this->input->post('page'),
           'subject'=>$this->input->post('subject'),
           'message'=>$this->input->post('message'),
        );
        $check=$this->User_model->insert_data('enquiry_contact',$data);
        if($check){
            echo 1;
        }else{
            echo 2;
        }
    }
    public function Edu_On (){
         $data['edu_on_sec']=$this->User_model->get_single_where('*','tbl_edu_on_sec1',array('id!='=>0),'','');
        $data['edu_on']=$this->User_model->get_all_where('*','tbl_edu_on',array('id!='=>0),'','');
        $this->load->view('user/edu_on',$data);         
    }
    public function Edu_blog (){
        $c_id1=$this->uri->segment(2);
        $c_id=$this->encrypt_id->encryptor('decrypt',$c_id1);
        $data['news']=$this->User_model->get_single_where('*','tbl_home_content',array('id'=>$c_id,'status'=>1),'','');
        $data['all_news']=$this->User_model->get_all_where('*','tbl_home_content',array('id!='=>0,'status'=>1),'DESC','5');
        $select = 'id,comment,created_at,(SELECT name  FROM tbl_user WHERE tbl_user.id = tbl_blog_comment.user_id LIMIT 1)AS name';
        $data['comment']=$this->User_model->get_all_where($select,'tbl_blog_comment',array('blog_id'=>$c_id,'status'=>'1','type'=>'comment'),'DESC','');
        // echo '<pre>';
        // print_r($data['comment']);
        // die;
        if(!empty($data['comment'])){
            $i=0;
            foreach ($data['comment'] as $key => $value) {
                $data['comment'][$i]['reply'] = $this->User_model->get_all_where($select,'tbl_blog_comment',array('blog_id'=>$c_id,'status'=>'1','type'=>'reply','comment_id'=>$value['id']),'DESC','');
            $i++;}
        }

        $data['head'] = $this->User_model->getSelectWhereRow('image','tbl_header_data',array('id'=>1),'DESC','');
        $this->load->view('user/edu_blog',$data);         
    }
    public function Edu_webinar (){
         $data['edu_webinar']=$this->User_model->get_all_where('*','tbl_edu_webinar',array('id!='=>0),'','');
         $data['tech'] = $this->User_model->get_all_where('*','tbl_technology',array('id !='=>0),'','');
        $this->load->view('user/edu_webbinar',$data);         
    }
    public function Edu_help (){
        $data['edu_help']=$this->User_model->get_all_where('*','tbl_edu_help',array('type'=>'edu_help'),'','');
        $data['tech'] = $this->User_model->get_all_where('*','tbl_technology',array('id !='=>0),'','');
        $this->load->view('user/edu_help',$data);         
    }
    public function Reschedule_policy (){
         $data['reschedule_policy']=$this->User_model->get_all_where('*','tbl_reschedule',array('id!='=>0),'','');
          // $data['reschedule_policy_det']=$this->User_model->get_all_where('*','tbl_reschedule_det',array('id!='=>0),'','');
        $this->load->view('user/reschdule_policy',$data);         
    }
    public function Edu_course_calender (){
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $data['data'] = $this->db->like('title',$_GET['search'])->get('tbl_training')->result();
        }else{
            $data['data'] = $this->User_model->getSelectResult('*','tbl_training',array('id !='=>0));
        }
        if(!empty($data['data'])){
            $i=0;
            foreach($data['data'] as $val){
                $data['data'][$i]->detail = $this->User_model->getSelectResult('*','tbl_training_detail',array('trainig_id'=>$val->id));
                $i++;
            }
        }
        // echo "<pre>";
        // print_r($data);die;
        $this->load->view('user/edu_course_calender',$data);         
    }
    public function Edu_couser_list (){
        $data['edu_course']=$this->User_model->get_all_where('*','tbl_edu_help',array('type'=>'course_list'),'','');
        $data['tech'] = $this->User_model->get_all_where('*','tbl_technology',array('id !='=>0),'','');
        $this->load->view('user/edu_couser_list',$data);         
    }
    public function Categories(){
        $select = 'tbl_forum.*,tbl_self_learn_video.title,
        (SELECT count(id) FROM tbl_forum_view WHERE tbl_forum_view.forum_id = tbl_forum.id LIMIT 1) AS view,
        (SELECT count(id) FROM tbl_forum_ans WHERE tbl_forum_ans.forum_id = tbl_forum.id LIMIT 1) AS ans';
        $table = 'tbl_forum';
        $where = array('tbl_forum.id !='=>0);
        $join = array('tbl_self_learn_video');
        $jointbl = array('tbl_self_learn_video.id = tbl_forum.video_id');
        $data['que'] = $this->User_model->getJoinData($select,$table,$where,$join,$jointbl);
        if (!empty($data['que'])) {
            $i=0;
            $select = 'tbl_forum_ans.*,tbl_user.name,tbl_user.email';
            $table = 'tbl_forum_ans';
            // $where = array('tbl_forum_ans.forum_id'=>$id);
            $join = array('tbl_user');
            $jointbl = array('tbl_user.id = tbl_forum_ans.user_id');
            foreach ($data['que'] as $key => $val) {
            $where = array('tbl_forum_ans.forum_id'=>$val->id);
                $data['que'][$i]->rpl = $this->User_model->getJoinData($select,$table,$where,$join,$jointbl,5);
            $i++;}
        }

        // echo "<pre>";
        // print_r($data);die;
        $this->load->view('user/categories',$data);         
    }
    public function Categories_details (){
        $id = $this->encrypt_id->encryptor('decrypt',$this->uri->segment(2));
        $select = 'tbl_forum.*,tbl_self_learn_video.title, tbl_user.name, tbl_user.email';
        $table = 'tbl_forum';
        $where = array('tbl_forum.id'=>$id);
        $join = array('tbl_self_learn_video','tbl_user');
        $jointbl = array('tbl_self_learn_video.id = tbl_forum.video_id','tbl_user.id = tbl_forum.user_id');
        $data['que'] = $this->User_model->getJoinData($select,$table,$where,$join,$jointbl);

        $select = 'tbl_forum_ans.*,tbl_user.name,tbl_user.email';
        $table = 'tbl_forum_ans';
        $where = array('tbl_forum_ans.forum_id'=>$id);
        $join = array('tbl_user');
        $jointbl = array('tbl_user.id = tbl_forum_ans.user_id');
        $data['ans'] = $this->User_model->getJoinData($select,$table,$where,$join,$jointbl);
        $ipAdd = $this->input->ip_address();
        $check = $this->User_model->getSelectWhereRow('id','tbl_forum_view',array('ip_addrr'=>$ipAdd,'forum_id'=>$id),'DESC','');
        if(empty($check)){
            $data1 = array(
                'ip_addrr'=>$ipAdd,
                'forum_id'=>$id
            );
            $this->User_model->insert_data('tbl_forum_view',$data1);
        }
        $this->load->view('user/categories_details',$data);
    }

    public function AddNewUser(){
        if($this->input->server('REQUEST_METHOD')=='POST'){
            $post = $_POST;
            $check = $this->User_model->getSelectWhereRow('name,contact,email,id,type','tbl_user',array('contact'=>$post['E_phone_no']),'DESC',array('email'=>$post['e_email']));
            if(!empty($check)){
                $procuct_id = $this->encrypt_id->encryptor('decrypt',$this->uri->segment(2));
                    $data1 = array(
                      'name'         => $check->name,             
                      'contact'      => $check->contact,
                      'email'        => $check->email,
                      'id'           => $check->id ,
                      'type'         => $check->type,
                    );
                $this->session->set_userdata('currency',1);
                $this->session->set_userdata('country','USD');
                $this->session->set_userdata('symbol','$');      
                $succ=$this->session->set_userdata('user_data',$data1);
                // Add-New-User
                $get = $this->User_model->getSelectWhereRow('id','tbl_cart',array('user_id'=>$check->id),'DESC','');
                if(!empty($get)){
                    $this->User_model->delete_data('tbl_cart',array('user_id'=>$check->id));
                }
                $this->User_model->insert_data('tbl_cart',array('user_id'=>$check->id,'product_id'=>$procuct_id));
                redirect('Cart');
            }else{
                $this->session->set_userdata('procuct_id',$this->uri->segment(2));
                $data = array(
                  'name'            =>  'NA',
                  'contact'         =>  $post['E_phone_no'],
                  'email'           =>  $post['e_email'],
                  'password'        =>  md5($post['E_phone_no']),
                  'type'            =>  'student',
                 );

            $this->session->set_userdata('currency',1);
            $this->session->set_userdata('country','USD');
            $this->session->set_userdata('symbol','$');  
                $this->session->set_userdata('user_data1',$data);
                $otp = mt_rand(1111,9999);
                $msg='OTP '.$otp;
                $mobile_otp=send_otp('91'.$post['E_phone_no'],$msg,$otp);  
                $this->session->set_userdata('otp',$otp);
                redirect(base_url('Otp'));
            }
        }
    }

    public function AddToCart(){
        $procuct_id = $this->encrypt_id->encryptor('decrypt',$this->session->userdata('procuct_id'));
        $user_id = $this->session->userdata('user_data')['id'];
        $get = $this->User_model->getSelectWhereRow('id','tbl_cart',array('user_id'=>$user_id),'DESC','');
        if(!empty($get)){
            $this->User_model->delete_data('tbl_cart',array('user_id'=>$user_id));
        }
        $this->User_model->insert_data('tbl_cart',array('user_id'=>$user_id,'product_id'=>$procuct_id));
        redirect('Cart');
    }

    public function PlaceOrder(){
        $ses = $this->session->userdata('user_data');
        if(!empty($ses)){
            if($this->input->server('REQUEST_METHOD') == 'POST'){
                $select = 'tbl_cart.product_id,tbl_cart.currency, tbl_cart.type, tbl_cart.price, tbl_course.msp, tbl_course.live_msp,tbl_course.self_msp ,tbl_course.assessment_msp';
                $table = 'tbl_cart';
                $j_table = 'tbl_course';
                $join = 'tbl_cart.product_id = tbl_course.id';
                $cart = $this->User_model->get_onetable_join($select,$table,$j_table,$join,array('tbl_cart.user_id'=>$ses['id']),'','');
                // echo "<pre>";
                // print_r($cart);die;
                $post = $this->input->post();
                if(!empty($cart)){
                    $data = array(
                        'user_id'=>$ses['id'],
                        'invoice'=>'INV-'.mt_rand(1111,9999).mt_rand(0000,9999),
                        'Trainee'=>$post['Trainee'],
                        'name'=>$post['name'],
                        'email'=>$post['email'],
                        'company'=>$post['company'],
                        'country'=>$post['country'],
                        'phone_no'=>$post['phone_no'],
                        'address1'=>$post['address1'],
                        'address2'=>$post['address2'],
                        'City'=>$post['City'],
                        'pin_code'=>$post['pin_code'],
                        'payment_id'=>$post['payment_id'],
                        'type'=>$cart[0]->type,
                        'total'=>$cart[0]->price,
                        'currency'=>$cart[0]->currency,
                        'status'=>1,
                        'order_date'=>date('Y-m-d H:i:s'),
                    );
                    $ordId = $this->User_model->insert_data('tbl_order',$data);
                    if($ordId){
                        $detail = array();
                        foreach($cart as $val){
                            $detail[] = array(
                                'order_id'=>$ordId,
                                'user_id'=>$ses['id'],
                                'product_id'=>$val->product_id,
                                'price'=>$val->price
                            );
                            $price[] = $val->msp;
                        }
                        $this->User_model->insert_array('order_detail',$detail);

                        $msg = 'Your Order Successfully Placed On Techeduxon!.';
                        $this->load->library('email');
                        $this->email->from('Aashish.vedanshtechnologies@gmail.com', 'vedanshtechnologies');
                        $this->email->to($ses['email']);
                        $this->email->subject('Order Placed');
                        $this->email->message($msg);
                        $this->email->send(); 
                        // $this->Frontend_model->update_data('tbl_order',array('total'=>array_sum($price)),array('id'=>$ordId));
                        $this->User_model->delete_data('tbl_cart',array('user_id'=>$ses['id']));
                        $this->session->set_userdata('message','<div class="alert alert-success">Order Placed Successfully.</div>');
                        redirect('My-Account');
                    }else{
                        redirect('Cart');
                    }
                }else{
                    redirect('Cart');
                }
            }else{
                redirect('Cart');
            }
        }else{
            redirect('Cart');
        }
    }

    public function getResourse(){
        $section = $this->input->post('id');
        $data = $this->User_model->get_all_where('title,resource_pdf','tbl_self_learn_resources',array('section_id'=>$section),'ASC','');
        $div = '';
        if(!empty($data)){
            foreach($data as $val){
                $div .= '<li>
                <p>'.$val['title'].'<a href="'.base_url().'uploads/self_learn_files/'.$val['resource_pdf'].'" download><i class="la la-download"></i></a></p>
                </li>';
            }
        }
        echo json_encode($div);
    }

    public function StreamPdf(){
        if((isset($_GET['path'])) && !empty($_GET['path'])){
            // echo base_url().$_GET['path'];die;
            echo '<iframe src="'.base_url().$_GET['path'].'#toolbar=0"  style="width:1300px; height:800px;" frameborder="0" controls controlsList="nodownload">';
        }
    }
    
    public function change_user_psw(){
       $sess_data = $this->session->userdata('user_data'); 
        if (!empty($sess_data['id'])) {
               $user = $this->User_model->getSelectWhereRow('password','tbl_user',array('id'=>$sess_data['id']),'DESC','');
               // echo $user->password.'<br>';
               // echo md5($_POST['old_psw']).'<br>';die;
            if ($user->password == md5($_POST['old_psw'])) {
                $check = $this->Frontend_model->update_data('tbl_user',array('password' => md5($_POST['password'])),array('id' =>$sess_data['id']));
                if ($check) {
                    $this->session->set_flashdata('success','<div style="success">Password changed Successfully</div>');
                    redirect('Change-Password');
                }else{
                    $this->session->set_flashdata('success','<div style="success">Unable To Update Password Please Try After Some Time!.</div>');
                    redirect('Change-Password');
                }
            }else{
                $this->session->set_flashdata('success','<div style="success">Please Enter Valid Old Password</div>');
                 redirect('Change-Password');
            }
        
        }
    }    

    public function update_profile(){
    $sess_data = $this->session->userdata('user_data'); 
    $post = $this->input->post();
    $data = array(
        'name' =>$post['name'],
        'email' =>$post['email'],
        'contact' =>$post['contact'],
        'location' =>$post['location'],
        'timeZone' =>$post['timeZone'],
        'linkdin' =>$post['linkdin'],
        'website' =>$post['website'],
        'facebook' =>$post['facebook'],
        'twetter' =>$post['twetter'],
        'chrome' =>$post['chrome'],
        'dob' =>$post['dob'],
        'gender' =>$post['gender'],
        'department' => implode(',', $post['department']),
        'company' => implode(',', $post['company']),        
        'experience' => implode(',', $post['experience']),
        'qualification' => implode(',', $post['qualification']),
        'college_School' => implode(',', $post['college_School']),
        'specialization' => implode(',', $post['specialization']),
        'from' => implode(',', $post['from']),
        'to' => implode(',', $post['to']),
        'add' => implode(',', $post['add']),
    );
   	if (!empty($sess_data['id'])) {
            $data['image'] = $sess_data['image'];
            if($_FILES['myImg']['size'] > 0){ 
                $new_name='profile-'.mt_rand(0000,9999).$_FILES['myImg']['name'];
                $path='uploads/profile/'.$new_name;
                if(move_uploaded_file($_FILES['myImg']['tmp_name'],$path)){
                    $data['image'] = $new_name;
                }
            }
    		$check = $this->Frontend_model->update_data('tbl_user',$data,array('id' =>$sess_data['id']));
    		if ($check) {
                $data1 = array(
                    'name'=>$data['name'],
                    'contact'=>$data['contact'],
                    'email'=>$data['email'],
                    'id'=>$sess_data['id'],
                    'image'=>$data['image'],
                    'type'=>$sess_data['type'],
                );
                $this->session->set_userdata('user_data',$data1);
		        $this->session->set_flashdata('success','<div style="success">Profile upload Successfully</div>');
		      redirect('Edit-Profile');
		    }else{
		      $this->session->set_flashdata('error','<div style="success">Profile Failed To upload</div>');
		      redirect('Edit-Profile');
		    }
        
        }
    }

    public function update_certificate(){
       $ses_data = $this->session->userdata('user_data'); 
        
         if($_FILES['file']['size']>0) { 
            $new_name='certificate-'.mt_rand(0000,9999).'.jpeg';
            $path='uploads/certificate/'.$new_name;
              if(move_uploaded_file($_FILES['file']['tmp_name'],$path)){
                $certificate = $new_name;
               }
            $detail = array(
                'file' => $certificate, 
                'user_id' => $ses_data['id'],'
                name' => $_POST['name']
            );
            $check =   $this->User_model->insert_data('user_certificate',$detail);
                       
            if ($check) {
                $this->session->set_flashdata('success','<div style="success">Certificates upload Successfully</div>');
                redirect('Certificates');
            }else{
                $this->session->set_flashdata('error','<div style="success">Certificates Failed To upload</div>');
                redirect('Certificates');
            }
                
        }
    }

    public function remainingtime(){
      $modal2 = json_decode($this->User_model->getSelectWhereRow('data','modals',array('id'=>2),'DESC','')->data);
         // Declare and define two dates
         $date1 = strtotime(date('Y-m-d H:i:s')); 
         $date2 = strtotime(date('Y-m-d H:i:s',strtotime($modal2->datetime))); 
           
         // Formulate the Difference between two dates
         $diff = abs($date2 - $date1); 
           
           
         // To get the year divide the resultant date into
         // total seconds in a year (365*60*60*24)
         $years = floor($diff / (365*60*60*24)); 
           
           
         // To get the month, subtract it with years and
         // divide the resultant date into
         // total seconds in a month (30*60*60*24)
         $months = floor(($diff - $years * 365*60*60*24)
                                        / (30*60*60*24)); 
           
           
         // To get the day, subtract it with years and 
         // months and divide the resultant date into
         // total seconds in a days (60*60*24)
         $days = floor(($diff - $years * 365*60*60*24 - 
                      $months*30*60*60*24)/ (60*60*24));
           
           
         // To get the hour, subtract it with years, 
         // months & seconds and divide the resultant
         // date into total seconds in a hours (60*60)
         $hours = floor(($diff - $years * 365*60*60*24 
                - $months*30*60*60*24 - $days*60*60*24)
                                            / (60*60)); 
           
           
         // To get the minutes, subtract it with years,
         // months, seconds and hours and divide the 
         // resultant date into total seconds i.e. 60
         $minutes = floor(($diff - $years * 365*60*60*24 
                  - $months*30*60*60*24 - $days*60*60*24 
                                   - $hours*60*60)/ 60); 
           
           
         // To get the minutes, subtract it with years,
         // months, seconds, hours and minutes 
         $seconds = floor(($diff - $years * 365*60*60*24 
                  - $months*30*60*60*24 - $days*60*60*24
                         - $hours*60*60 - $minutes*60)); 
           
        echo json_encode(array(
            'years' => $years,
            'months' => $months,
            'days' => $days,
            'hours' => $hours,
            'minutes' => $minutes,
            'seconds' =>$seconds
        ));

    }

    public function Forum(){
        $this->load->view('user/Forum');
    }

    public function askQuestion1(){
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $post = $this->input->post();
            $ses_data = $this->session->userdata('user_data');
            $id = '';
            if(!empty($post['id'])){
                $id = $post['id'];
            }
            $data = array(
                'user_id'=>$ses_data['id'],
                'que'=>$post['que'],
                'video_id'=>$id,
                'views'=>0,
                'created_at'=>date('Y-m-d H:i:s')
            );
            $this->User_model->insert_data('tbl_forum',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Question Submited Successfully!</div>');
            redirect($_SERVER['HTTP_REFERER']);

        }
    }

    public function askQuestion(){
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $post = $this->input->post();
            $ses_data = $this->session->userdata('user_data');
            $id = '';
            if(!empty($post['id'])){
                $id = $post['id'];
            }
            $data = array(
                'user_id'=>$ses_data['id'],
                'que'=>$post['que'],
                'video_id'=>$id,
                'views'=>0,
                'created_at'=>date('Y-m-d H:i:s')
            );
            $check = $this->User_model->insert_data('tbl_forum',$data);
        }
    }

    public function save_forum_ans(){
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $post = $this->input->post();
            $data = array(
                'forum_id'=>$post['forum_id'],
                'user_id'=>$this->session->userdata('user_data')['id'],
                'ans'=>$post['ans'],
                'created_at'=>date('Y-m-d H:i:s')
            );
            $check = $this->User_model->insert_data('tbl_forum_ans',$data);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function saveNotes(){
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if(!empty($this->session->userdata('user_data'))){
                $ses = $this->session->userdata('user_data');
                $post = $this->input->post();
                $data = array(
                    'video_id'=>$post['video_id'],
                    'user_id'=>$ses['id'],
                    'label'=>$post['label'],
                    'comment'=>$post['comment']
                );
                $this->User_model->insert_data('tbl_user_notes',$data);
                $data = $this->User_model->getSelectResult('label,comment','tbl_user_notes',array('user_id'=>$ses['id'],'video_id'=>$post['video_id']));
                $div = '';
                if(!empty($data)){
                    foreach($data as $val){
                        $div .= '<li>
                                    <h6>'.$val->label.'</h6>
                                    <p>'.$val->comment.'</p>
                                </li>';
                    }
                }
                echo json_encode($div);
            }
        }
    }

    public function searchQueList(){
        $data = $this->User_model->getLikeData('id,que','tbl_forum','que',$_GET['search']);
        $div = '';
        if(!empty($data)){
            foreach ($data as $key => $val) {
                $div .= '<li>
                            <a href="'. base_url().'Categories-Details/'.$this->encrypt_id->encryptor('encrypt',$val->id) .'" target="_blank" style="color: #233d63">
                            <p>'. $val->que .'</p>
                            </a>
                        </li>';
            }
        }else{
            $div = '<li> <p>No Result Found!.</p></li>';
        }
        echo json_encode($div);
    }


    public function getUserNotes(){
        $ses = $this->session->userdata('user_data');
        $data = $this->User_model->getSelectResult('label,comment','tbl_user_notes',array('user_id'=>$ses['id'],'video_id'=>$_POST['id']));
        $div = '';
        if(!empty($data)){
            foreach($data as $val){
                $div .= '<li>
                            <h6>'.$val->label.'</h6>
                            <p>'.$val->comment.'</p>
                        </li>';
            }
        }
        echo json_encode($div);
    }

    public function saveUserAssesment(){
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $assessment = '';
            $ses = $this->session->userdata('user_data');
            $new_name='assessment-'.mt_rand(0000,9999).$_FILES['myFile']['name'];
            $path='uploads/certificate/'.$new_name;
            if(move_uploaded_file($_FILES['myFile']['tmp_name'],$path)){
                $assessment = $new_name;
            }

            $data = array(
                'user_id'=>$ses['id'],
                'assesment_id'=>$_POST['assessment_id'],
                'message'=>$_POST['message'],
                'image'=>$assessment,
                'added_date'=>date('Y-m-d H:i:s')
            );
            $check = $this->User_model->getSelectWhereRow('id','tbl_user_assesment',array('user_id'=>$ses['id'],'assesment_id'=>$_POST['assessment_id']),'DESC','');
            if (empty($check)) {
                $check = $this->User_model->insert_data('tbl_user_assesment',$data);
                $courseId = $this->User_model->getSelectWhereRow('course_id','tbl_assessment',array('id'=>$_POST['assessment_id'],),'','')->course_id;
                $this->db->set('complete_assesment','complete_assesment+1',FALSE)->where(array('user_id'=>$ses['id'],'product_id'=>$courseId))->update('order_detail');
            }else{
                $check = $this->Frontend_model->update_data('tbl_user_assesment',$data,array('id'=>$check->id));
            }
        }
    }

    public function updateVideoCount(){
    	if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $ses = $this->session->userdata('user_data');

            $data = array(
                'user_id'=>$ses['id'],
                'video_id'=>$_POST['id'],
                'added_date'=>date('Y-m-d H:i:s')
            );
            $check = $this->User_model->getSelectWhereRow('id','tbl_user_watch_video',array('user_id'=>$ses['id'],'video_id'=>$_POST['id']),'DESC','');
            if (empty($check)) {
                $check = $this->User_model->insert_data('tbl_user_watch_video',$data);
                $section_id = $this->User_model->getSelectWhereRow('section_id','tbl_self_learn_video',array('id'=>$_POST['id'],),'','')->section_id;
                $courseId = $this->User_model->getSelectWhereRow('course_id','tbl_section',array('id'=>$section_id,),'','')->course_id;
                $this->db->set('complete_video','complete_video+1',FALSE)->where(array('user_id'=>$ses['id'],'product_id'=>$courseId))->update('order_detail');
            }else{
                $check = $this->Frontend_model->update_data('tbl_user_watch_video',$data,array('id'=>$check->id));
            }
        }
    }



     public function Blog(){
        $data['home_content']=$this->User_model->get_all_where('*','tbl_home_content',array('status'=>1),'','');
        $this->load->view('user/blog',$data);         
    }

    public function RequestForExam(){
        $ses = $this->session->userdata('user_data');
        $id = $this->encrypt_id->encryptor('decrypt',$this->uri->segment(3));
        $check = $this->Frontend_model->update_data('order_detail',array('apply_for_eaxm'=>1,'apply_date'=>date('Y-m-d H:i:s')),array('product_id'=>$id,'user_id'=>$ses['id']));
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function RemoveCart(){
        $id = $this->uri->segment(3);
        $this->User_model->delete_data('tbl_cart',array('id'=>$id));
        // echo $_SERVER['HTTP_REFERER'];die;
        redirect('Cart');
    }

    public function liveClass(){
        redirect($_GET['u']);
    }

    public function Checkout1(){
        $ses = $this->session->userdata('user_data');
        if(!empty($ses)){
            $post = $_POST;
            $cr = $this->session->userdata('currency');
            $cn = $this->session->userdata('country');
            $post['final-price'] = $post['final-price']*$cr;

            $set = array('type'=>implode(',',$post['purchaseType']),'price'=>$post['final-price'],'currency'=> $cn);
            $this->Frontend_model->update_data('tbl_cart',$set,array('user_id'=>$ses['id']));
            redirect('Checkout');
        }else{
            redirect('User/Login?route=My-Courses');
        }
    }

    public function fetch_search(){
        $data = $this->User_model->search_courses($_POST['keyword']);
        $show = '';
        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $show .= '<li><a href="'.base_url().'Course/'.$this->encrypt_id->encryptor('encrypt',$value->id).'">'.$value->title.'</a></li>';
            }
        }else{
           $show = '<li><a href="javascript: void(0)">Data Not Found</a></li>';  
        }
        echo $show;
    }
    
    public function fetch_filterdata(){
        $result = $this->CFM->searc_f($_POST);
        print_r($result);
    }

    public function payPalCheckout(){
        $ses = $this->session->userdata('user_data');
        $this->load->library('Paypal_lib');
        $select = 'tbl_cart.product_id, tbl_cart.type, tbl_cart.price, tbl_course.msp, tbl_course.live_msp,tbl_course.self_msp ,tbl_course.assessment_msp,tbl_course.title';
        $table = 'tbl_cart';
        $j_table = 'tbl_course';
        $join = 'tbl_cart.product_id = tbl_course.id';
        $cart = $this->User_model->get_onetable_join($select,$table,$j_table,$join,array('tbl_cart.user_id'=>$ses['id']),'','');

        $returnURL = base_url().'User/PaySuccess'; //payment success url 
        $cancelURL = base_url().'User/PayCancel'; //payment cancel url 
        $notifyURL = base_url().'User/ipn'; //ipn url 
         
        // Get product data from the database 
        // $product = $this->product->getRows($id); 
         
        // Get current user ID from the session (optional) 
        $userID = $ses['id']; 
        $cr = $this->session->userdata('currency');
        $cn = $this->session->userdata('country');
        // Add fields to paypal form 
        $this->paypal_lib->add_field('return', $returnURL); 
        $this->paypal_lib->add_field('cancel_return', $cancelURL); 
        $this->paypal_lib->add_field('notify_url', $notifyURL); 
        $this->paypal_lib->add_field('item_name', $cart[0]->title); 
        $this->paypal_lib->add_field('custom', $userID); 
        $this->paypal_lib->add_field('item_number',  '1'); 
        $this->paypal_lib->add_field('amount',  $cart[0]->price*$cr); 
        $this->paypal_lib->add_field('currency_code', $cn); 
         
        // Render paypal form 
        $this->paypal_lib->paypal_auto_form(); 
    }

    public function setCheckOutUserdata(){
        $this->session->set_userdata('CheckOutData',$_POST);
    }

    public function saveComment(){
        $sesData = $this->session->userdata('user_data');
        if(!empty($sesData)){
            $post = $_POST;
            $captcha_response = trim($this->input->post('g-recaptcha-response'));
            if($captcha_response != ''){
                $keySecret = '6LfZBhQaAAAAAOgJMUl4SGYyRZdbIFpTiG9GMfIe';
                $check = array(
                    'secret'        =>  $keySecret,
                    'response'      =>  $this->input->post('g-recaptcha-response')
                );
                $startProcess = curl_init();
                curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
                curl_setopt($startProcess, CURLOPT_POST, true);
                curl_setopt($startProcess,CURLOPT_POSTFIELDS, http_build_query($check));
                curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);
                $receiveData = curl_exec($startProcess);
                $finalResponse = json_decode($receiveData, true);
                if($finalResponse['success']){
                    $data = array(
                        'blog_id'=>$this->encrypt_id->encryptor('decrypt',$post['blogId']),
                        'user_id'=>$sesData['id'],
                        'comment'=>$post['comment'],
                        'status'=>'0',
                        'type'=>'comment',
                        'created_at'=>date('Y-m-d H:i:s')
                    );
                    $this->User_model->insert_data('tbl_blog_comment',$data);
                    $this->session->set_flashdata('success','Comment Added Successfully!.');
                    redirect($_SERVER['HTTP_REFERER']);
                }else{
                     $this->session->set_flashdata('message','Invalid CAPTCHA Submited');
                    $this->session->set_flashdata('comment',$this->input->post('comment'));
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }else{
                $this->session->set_flashdata('message','Verify You Are Not Robot');
                $this->session->set_flashdata('comment',$this->input->post('comment'));
                redirect($_SERVER['HTTP_REFERER']);
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function replyComment(){
        $sesData = $this->session->userdata('user_data');
        if(!empty($sesData)){
            $post = $_POST;
            $captcha_response = trim($this->input->post('g-recaptcha-response'));
            if($captcha_response != ''){
                $keySecret = '6LfZBhQaAAAAAOgJMUl4SGYyRZdbIFpTiG9GMfIe';
                $check = array(
                    'secret'        =>  $keySecret,
                    'response'      =>  $this->input->post('g-recaptcha-response')
                );
                $startProcess = curl_init();
                curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
                curl_setopt($startProcess, CURLOPT_POST, true);
                curl_setopt($startProcess,CURLOPT_POSTFIELDS, http_build_query($check));
                curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);
                $receiveData = curl_exec($startProcess);
                $finalResponse = json_decode($receiveData, true);
                if($finalResponse['success']){
                    $data = array(
                        'blog_id'=>$this->encrypt_id->encryptor('decrypt',$post['blogId']),
                        'user_id'=>$sesData['id'],
                        'comment'=>$post['comment'],
                        'status'=>'0',
                        'comment_id'=>$this->encrypt_id->encryptor('decrypt',$this->uri->segment(3)),
                        'type'=>'reply',
                        'created_at'=>date('Y-m-d H:i:s')
                    );
                    // echo "<pre>";
                    // print_r($data);die;
                    $this->User_model->insert_data('tbl_blog_comment',$data);
                    $this->session->set_flashdata('success','Comment Added Successfully!.');
                    redirect($_SERVER['HTTP_REFERER']);
                }else{
                     $this->session->set_flashdata('message','Invalid CAPTCHA Submited');
                    $this->session->set_flashdata('reply',$this->input->post('comment'));
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }else{
                $this->session->set_flashdata('message','Verify You Are Not Robot');
                $this->session->set_flashdata('reply',$this->input->post('comment'));
                redirect($_SERVER['HTTP_REFERER']);
            }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function blogList(){
        $select = '*,(SELECT COUNT(id) FROM tbl_blog_comment WHERE tbl_blog_comment.blog_id = tbl_home_content.id AND type = "comment" LIMIT 1)AS cnt';
        $data['blog'] = $this->User_model->get_all_where($select,'tbl_home_content', array('status' =>1,'type'=>'news_and_article'),"DESC","");
        $this->load->view('user/blog_list',$data);
    }

    public function SaveCourseInquiry(){
    	if($this->input->server('REQUEST_METHOD') == 'POST'){
    		$post = $_POST;
    		$check = $this->User_model->insert_data('course_download_enq',array(
    			'course'=>$post['course'],
    			'name'=>$post['name'],
    			'email'=>$post['email'],
    			'contact'=>$post['contact'],
    		));
    		if($check){
    			// $f=$get->file;   
	            $file = $post['filePath'];
	            $filetype=filetype($file);
	            $filename=basename($file);
	            header ("Content-Type: ".$filetype);
	            header ("Content-Length: ".filesize($file));
	            header ("Content-Disposition: attachment; filename=".$filename);
	            readfile($file);   
    		}else{
    			echo json_encode(array('status'=>403,'message'=>'Unable To Process On Your Request!.'));
    		}
    	}else{
    		echo json_encode(array('status'=>403,'message'=>'access forbidden!.'));
    	}
    }

    public function saveCourseRating(){
    	if($this->input->server('REQUEST_METHOD') == 'POST'){
	    	$post = $_POST;
	    	$sess_data=$this->session->userdata('user_data');
	    	$check = $this->User_model->getSelectWhereRow('id','course_rating',array('user_id'=>$sess_data['id'],'course_id'=>$post['course']),'DESC','');
	    	if(empty($check)){
	    		$check = $this->User_model->insert_data('course_rating',array(
	    			'course_id'=>$post['course'],
	    			'user_id'=>$sess_data['id'],
	    			'rating'=>$post['rating'],
	    		));
	    		if($check){
	    			$array = array('status'=>'success','message'=>'Course Rating Submited Successfully');
	    		}else{
	    			$array = array('status'=>'error','message'=>'Internal Server Error');
	    		}
	    	}else{
	    		$check = $this->Frontend_model->update_data('course_rating',array('rating'=>$post['rating']),array('id'=>$check->id));
	    		if($check){
	    			$array = array('status'=>'success','message'=>'Course Rating Submited Successfully');
	    		}else{
	    			$array = array('status'=>'error','message'=>'Internal Server Error');
	    		}
	    	}
	    }else{
	    	$array = array('status'=>'error','message'=>'Internal Server Error');
	    }
	    if($array['status'] == 'success'){
	    	$rat = $this->User_model->getSelectWhereRow('SUM(rating) AS rating, COUNT(id) AS cnt','course_rating',array('course_id'=>$post['course']),'DESC','');
	    	$cnt = $rat->cnt;
	    	$rat = round($rat->rating/$cnt);
	    	$this->Frontend_model->update_data('tbl_course',array('avg_rating'=>$rat,'number_of_rating'=>$cnt),array('id'=>$post['course']));
	    }
	    echo json_encode($array);
    }

    public function Refer_and_earn (){
        $data['refer_earn'] = $this->User_model->get_all_where('*','refer_earn',array('id != '=>0),"","");
        $data['faq']=$this->User_model->get_all_where('*','faq',array('id !='=>0,),'','');
        $this->load->view('user/refer-and-earn',$data);
    }
    public function Corporate_training (){
        $data['spring']=$this->User_model->get_all_where('*','springSec1',array('id !='=>0,),'','');
        $data['partner']=$this->User_model->get_all_where('*','partner',array('id !='=>0,),'','');
        $data['footer']=$this->User_model->get_all_where('*','corporate_footer',array('id !='=>0,),'','');
        // echo "<pre>";
        // print_r($data['spring']);die;
        $this->load->view('user/corporate-training',$data);         
    }

    public function chamgeCurrency(){
        $currency = $this->input->get('currency');
        if ($currency == 'INR') {
            $symbol ='₹';
        }elseif ($currency == 'GBP') {
            $symbol ='£';
        }elseif ($currency == 'SGD') {
            $symbol ='SGD$';
        }elseif ($currency =='CAD' ) {
            $symbol ='CAD$';
        }elseif ($currency == 'AED' ) {
            $symbol ='د.إ';
        }elseif ($currency == 'AUD') {
            $symbol ='AUD$';
        }elseif ($currency == 'USD') {
            $symbol ='$';
        }

        $get_currency =  $this->User_model->get_currency();
        // $currency = $this->User_model->getSelectWhereRow('*','tbl_currency',array('country'=>$currency),'DESC','');
        $this->session->set_userdata('currency',number_format($get_currency->$currency,2));
        $this->session->set_userdata('country',$currency);
        $this->session->set_userdata('symbol',$symbol);
        // echo "<pre>";
        // print_r($this->session->userdata());
        // die;
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function saveInquiryModal1(){
        $post = $_POST;
        $this->User_model->insert_data('modals',array('data'=>json_encode($post)));
        setcookie("modalcolkie",'save',time()+31556926 ,'/');
        $this->session->set_flashdata('success','Inquiry Saved Successfully');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function savemodalInquiry2(){
        $post = $_POST;
        $this->User_model->insert_data('modals',array('data'=>json_encode($post)));
    }

    public function requested_unlock($id){
        $this->Frontend_model->update_data('order_detail',array('complete'=>2),array('id'=>$id));
        $this->session->set_flashdata('success','Requested For Unlock Certificate');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function saveCorporateInquiry(){
        $post = $_POST;
        unset($post['from_page']);
        $this->User_model->insert_data('corporate_inq',$post);
        $this->session->set_flashdata('success','Inquiry Saved Successfully');
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function refer_earn_eq(){
        $post = $_POST;
        unset($post['from_page']);
        $this->User_model->insert_data('refer_earn_eq',$post);
        $this->session->set_flashdata('success','Inquiry Submited Successfully');
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function saveCorporateInquiry2(){
        $post = $_POST;
        unset($post['from_page']);
        $result = $this->User_model->insert_data('corporate_inq',$post);
        if ($result) {
          echo 1;
        }else{
          echo 2;
        }
    }

     public function fetch_userAssesment(){
        $id = $this->input->post('id');
        $sess = $this->session->userdata('user_data');
        $data = array('assesment_id' =>$id,'user_id' =>$sess['id']);
        $fname = ('*');
        $tbname = 'tbl_user_assesment';
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

    public function callback_r(){
        echo 'dssddsds';
        print_r($_POST); die;
    }

}
