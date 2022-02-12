<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('AdminModel','AM');
    $this->load->model('Frontend_model');
     $this->load->model('User_model');
    date_default_timezone_set('Asia/Kolkata');
  }

    public function _chk_if_login(){
        $loginss = $this->session->userdata('logsess');
        if($loginss['loginss'] == false || $loginss['name'] == '') {
          $this->session->sess_destroy();
          redirect(base_url('Adminpanel'));
            exit();
        }
    }

    public function Course_Calender(){
      $this->_chk_if_login();
      $this->load->view('admin/Course-Calender');
    }

    public function addTraining(){
      $image = '';
      if($_FILES['single_image']['size'] > 1){
        $new_name='Training-'.mt_rand(0000,9999).$_FILES['single_image']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
            $image=$new_name;
          }
        }

        $data = array(
          'title'=>$_POST['title'],
          'image'=>$image,
          'created_at'=>date('Y-m-d H:i:s')
        );
        $this->AM->insert_data('tbl_training',$data);
    }

    public function fetch_single_training(){
      $data = $this->AM->getSelectWhereRow('*','tbl_training',array('id'=>$_POST['id']));
      echo json_encode($data);
    }

    public function editTraining(){
      $post = $_POST;
      $image = $post['old_image'];
      if($_FILES['edit_single_image']['size'] > 1){
        $new_name='Training-'.mt_rand(0000,9999).$_FILES['edit_single_image']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['edit_single_image']['tmp_name'],$path)){
            $image=$new_name;
          }
        }

      $data = array(
          'title'=>$post['edit_title'],
          'image'=>$image,
        );
      $this->AM->updateData($data,'tbl_training',array('id'=>$post['ca_id']));
    }

    public function deleteTraining(){
      $this->AM->deleteData('tbl_training',array('id'=>$_GET['id']));
    }
    public function course_calender_det(){
      $this->_chk_if_login();
      $this->load->view('admin/course_calender_det');
    }

    public function addTrainingdet(){
       $data = array(
          'trainig_id'=>$this->input->post('training_id'),
          'month'=>$this->input->post('month'),
          'start_date'=>$this->input->post('start_date'),
          'end_date'=>$this->input->post('end_date'),
          'start_time'=>$this->input->post('start_time'),
          'end_time'=>$this->input->post('end_time'),
          'mrp'=>$this->input->post('mrp'),
          'sell_price'=>$this->input->post('sell_price'),
          'mode'=>$this->input->post('mode'),
          'timing'=>$this->input->post('timing'),

        );
        $check=$this->AM->insert_data('tbl_training_detail',$data);
        if($check){
          echo 1;
        }else{
          echo 2;
        }
    }

    public function fetch_single_trainingdet(){
      $data = $this->AM->getSelectWhereRow('*','tbl_training_detail',array('id'=>$_POST['id']));
      echo json_encode($data);
    }

    public function editTrainingdet(){
      $post = $_POST;
      $data = array(
          'month'=>$this->input->post('edit_month'),
          'start_date'=>$this->input->post('edit_start_date'),
          'end_date'=>$this->input->post('edit_end_date'),
          'start_time'=>$this->input->post('edit_start_time'),
          'end_time'=>$this->input->post('edit_end_time'),
          'mrp'=>$this->input->post('edit_mrp'),
          'sell_price'=>$this->input->post('edit_sell_price'),
          'mode'=>$this->input->post('edit_mode'),
          'timing'=>$this->input->post('edit_timing'),
       );
        $check=$this->AM->updateData($data,'tbl_training_detail',array('id'=>$post['ca_id']));
        if($check){
          echo 1;
        }else{
          echo 2;
        }
    }

    public function deleteTrainingdet(){
      $this->AM->deleteData('tbl_training_detail',array('id'=>$_GET['id']));
    }


    public function addDetailForm(){
      $post = $_POST;
      $this->AM->insert_data('tbl_training_detail',$post);
    }

  public function Job_category(){
        $this->_chk_if_login();
        $data['career_sec2_sec4']=$this->User_model->get_single_where('*','career_sec2_sec4',array('id'=>1),'','');
         $data['career_sec2_cards']=$this->User_model->get_all_where('*','career_sec2_cards',array('id!='=>0),'','');
        // echo "<pre>";print_r($data);die;
        $this->load->view('admin/job_category',$data);
     }
     public function Add_jobcategory(){
       $data = array(
          'category'=>$this->input->post('category'),
          'detail'=>$this->input->post('detail'),
        );
        $check = $this->AM->insert_data('tbl_job_category',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_jobcategory(){
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_job_category',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_jobcategory(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_job_category';
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

    public function update_jobcategory(){
        $id = $this->input->post('ca_id');
        $data = array(
          'category'=>$this->input->post('edit_category'),
          'detail'=>$this->input->post('detail1'),
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_job_category',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }

    public function update_jobcategory2(){
        $id = $this->input->post('oldid');
         $image = $this->input->post('oldimg');
        if(isset($_FILES['edit_image']['name'])){
          $new_name='carrer-cards'.mt_rand(0000,9999).'-jpeg';
          $path='uploads/home_images/'.$new_name;
            if(move_uploaded_file($_FILES['edit_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }

         $data = array(
          'title'=>$this->input->post('edit_title'),
          'description'=>$this->input->post('descp'),
          'image' => $image
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('career_sec2_cards',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
    public function Job_category_det(){
        $this->_chk_if_login();
        $this->load->view('admin/job_category_detail');
     }
     public function Add_jobcategory_det(){
       $data = array(
          'title'=>$this->input->post('title'),
          'category_id'=>$this->input->post('category_id')
        );
        $check = $this->AM->insert_data('tbl_job_category_det',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_jobcategory_det(){
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_job_category_det',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_jobcategory_det(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_job_category_det';
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

    public function update_jobcategory_det(){
        $id = $this->input->post('ca_id');
        $data = array(
          'title'=>$this->input->post('edit_title'),
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_job_category_det',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
    public function editcareersec2title(){
      $post = $_POST;
      $data=array(
         'title'=>$post['title'],
         'subtitle'=>$post['subtitle'],
      );
      $result = $this->Frontend_model->update_data('career_sec2_sec4',$data,array('id'=>1));
      $this->session->set_flashdata('update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function editcareersec4title(){
      $post = $_POST;
      $image=$this->input->post('old_image');
        if($_FILES['edit_single_image']['size'] > 0){
          $new_name='carrer-'.mt_rand(0000,9999).'-jpeg';
          $path='uploads/home_images/'.$new_name;
            if(move_uploaded_file($_FILES['edit_single_image']['tmp_name'],$path)){
              $image=$new_name;
            }

          $data=array(
             'title2'=>$post['title2'],
             'description'=>$post['description'],
             'image'=>$image,
          );
      }else{
        $data=array(
             'title2'=>$post['title2'],
             'description'=>$post['description'],
          );
      }
      $result = $this->Frontend_model->update_data('career_sec2_sec4',$data,array('id'=>1));
      $this->session->set_flashdata('update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
   public function  addcareercards(){
    $post = $_POST;

        if(isset($_FILES['single_image']['name'])){
          $new_name='carrer-cards'.mt_rand(0000,9999).'-jpeg';
          $path='uploads/home_images/'.$new_name;
            if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data=array(
            'title'=>$post['title'],
            'description'=>$post['description'],
            'image'=>$image,
        );
        $this->AM->insert_data('career_sec2_cards',$data);
        $this->session->set_flashdata('add_message','<div class="alert alert-primary">Data added Successfully!.</div>');
        redirect($_SERVER['HTTP_REFERER']);
   }
   public function Delete_career_sec2_cards(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $data = array('id' =>$id);
        $fname = ('id,image');
        $tbname = 'career_sec2_cards';
        $detail = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($detail)
        {
          $image = $detail->image;
            unlink('./uploads/home_images/'.$image);
        }
        $check = $this->AM->deleteData('career_sec2_cards',array('id'=>$id));
        $this->session->set_flashdata('delete_message','<div class="alert alert-primary">Data Deleted Successfully!.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
