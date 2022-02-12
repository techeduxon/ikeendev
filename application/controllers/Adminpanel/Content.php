<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Content extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Admin_panel','a');
        $this->load->model('Frontend_model');
        $this->load->model('User_model');
        $this->load->model('AdminModel','AM');
        $this->load->model('DataTableModel','DTM');
        $this->load->helper('url');


        date_default_timezone_set('Asia/Kolkata');
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
   /*-----------------Home pages--------------*/
    public function how_tech_work(){
        $this->_chk_if_login();
        $this->load->view('admin/how_tech_work');
    }
    public function Add_how_tech_work(){
       if(isset($_FILES['single_image']['name'])){
        $new_name='how_to_work-'.mt_rand(0000,9999).'.jpeg';
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
            $image=$new_name;
          }
        }
        $data = array(
          'title1'=>$this->input->post('title1'),
          'title2'=>$this->input->post('title2'),
          'image'=>$image,
          'type'=>'how_tech_work',
        );
        $check = $this->AM->insert_data('tbl_home_content',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_how_tech_work(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $data = array('id' =>$id);
        $fname = ('id,image');
        $tbname = 'tbl_home_content';
        $detail = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($detail)
        {
          $image = $detail->image;
            unlink('./uploads/home_images/'.$image);
        }
        $check = $this->AM->deleteData('tbl_home_content',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_how_tech_work(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_home_content';
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

    public function update_how_tech_work(){
        $id = $this->input->post('ca_id');
        $image=$this->input->post('old_image');
        if(isset($_FILES['edit_single_image']['size']) > 0){
          $new_name='how_to_work-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/home_images/'.$new_name;
            if(move_uploaded_file($_FILES['edit_single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'title1'=>$this->input->post('edit_title1'),
          'title2'=>$this->input->post('edit_title2'),
          'image'=>$image,
          'type'=>'how_tech_work',
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_home_content',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }

     public function news_and_article(){
        $this->_chk_if_login();
        $this->load->view('admin/news_and_article');
     }
      public function Add_news_and_article(){
        if(isset($_FILES['single_image']['name'])){
          $new_name='news-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/home_images/'.$new_name;
            if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'title1'=>$this->input->post('title1'),
          'title2'=>$this->input->post('title2'),
          'description'=>$this->input->post('description'),
          'image'=>$image,
          'type'=>'news_and_article',

        );
        $check = $this->AM->insert_data('tbl_home_content',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_news_and_article(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $data = array('id' =>$id);
        $fname = ('id,image');
        $tbname = 'tbl_home_content';
        $detail = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($detail)
        {
          $image = $detail->image;
            unlink('./uploads/home_images/'.$image);
        }
        $check = $this->AM->deleteData('tbl_home_content',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_news_and_article(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_home_content';
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

    public function update_news_and_article(){
        $id = $this->input->post('ca_id');
        $image=$this->input->post('old_image');
        if(isset($_FILES['edit_single_image']['size']) > 0){
          $new_name='news-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/home_images/'.$new_name;
            if(move_uploaded_file($_FILES['edit_single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'title1'=>$this->input->post('edit_title1'),
          'title2'=>$this->input->post('edit_title2'),
          'description'=>$this->input->post('edit_description'),
          'image'=>$image,
          'type'=>'news_and_article',
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_home_content',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
    public function Leadership(){
         $this->_chk_if_login();
        $this->load->view('admin/leadership');
     }
    public function Add_leadership(){
       if(isset($_FILES['single_image']['name'])){
        $new_name='lead-'.mt_rand(0000,9999).'.jpeg';
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
            $image=$new_name;
          }
        }
        $data = array(
          'title1'=>$this->input->post('title1'),
          'title2'=>$this->input->post('title2'),
          'description'=>$this->input->post('description'),
          'image'=>$image,
          'type'=>'leadership',
        );
        $check = $this->AM->insert_data('tbl_home_content',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_leadership(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $data = array('id' =>$id);
        $fname = ('id,image');
        $tbname = 'tbl_home_content';
        $detail = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($detail)
        {
          $image = $detail->image;
            unlink('./uploads/home_images/'.$image);
        }
        $check = $this->AM->deleteData('tbl_home_content',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_leadership(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_home_content';
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

    public function update_leadership(){
        $id = $this->input->post('ca_id');
        $image=$this->input->post('old_image');
        if(isset($_FILES['edit_single_image']['size']) > 0){
          $new_name='lead-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/home_images/'.$new_name;
            if(move_uploaded_file($_FILES['edit_single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'title1'=>$this->input->post('edit_title1'),
          'title2'=>$this->input->post('edit_title2'),
          'description'=>$this->input->post('edit_description'),
          'image'=>$image,
          'type'=>'leadership',

        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_home_content',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
     public function About(){
        $this->_chk_if_login();
        $this->load->view('admin/about');
     }
     public function Add_about(){
        if(isset($_FILES['single_image']['name'])){
          $new_name='about-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/about_images/'.$new_name;
            if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'title'=>$this->input->post('title'),
          'description'=>$this->input->post('description'),
          'image'=>$image,
        );
        $check = $this->AM->insert_data('tbl_about',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_about(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $data = array('id' =>$id);
        $fname = ('id,image');
        $tbname = 'tbl_about';
        $detail = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($detail)
        {
          $image = $detail->image;
            unlink('./uploads/about_images/'.$image);
        }
        $check = $this->AM->deleteData('tbl_about',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_about(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_about';
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

    public function update_about(){
        $id = $this->input->post('ca_id');
        $image=$this->input->post('old_image');
        if(isset($_FILES['edit_single_image']['size']) > 0){
          $new_name='about-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/about_images/'.$new_name;
            if(move_uploaded_file($_FILES['edit_single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'title'=>$this->input->post('edit_title'),
          'description'=>$this->input->post('edit_description'),
          'image'=>$image,
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_about',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }

      public function About_journey(){
         $this->_chk_if_login();
         $data['about_journey_head']=$this->User_model->get_single_where('*','tbl_about_journey_heading',array('id'=>1),'','');
        $this->load->view('admin/about_journey',$data);
     }
     public function editabout_journey_heading(){
      $data=array(
          'title1'=>$this->input->post('title1'),
          'title2'=>$this->input->post('title2'),
      );

      // echo "<pre>";
      // print_r($data);die;
      $result = $this->AM->updateData($data,'tbl_about_journey_heading',array('id'=>1));
      if($result){
          $this->session->set_flashdata('update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }else{
          $this->session->set_flashdata('failed_update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }
  }
     public function Add_about_journey(){
        $data = array(
          'title_date'=>$this->input->post('title_date'),
          'title'     =>$this->input->post('title'),
          'description'=>$this->input->post('description'),
          );
        $check = $this->AM->insert_data('tbl_about_journey',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_about_journey(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
         $check = $this->AM->deleteData('tbl_about_journey',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }

    public function Delete_enquiry_corporate(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
         $check = $this->AM->deleteData('corporate_inq',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_about_journey(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_about_journey';
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

    public function update_about_journey(){
        $id = $this->input->post('ca_id');
        $data = array(
          'title'=>$this->input->post('edit_title'),
          'description'=>$this->input->post('edit_description'),
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_about_journey',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
     public function Category(){
        $this->_chk_if_login();
        $this->load->view('admin/category');
     }
     public function Add_category(){
       if($_POST){
        if(isset($_FILES['single_image']['name'])){
           $new_name='category-'.mt_rand(0000,9999).'.jpeg';
           $path='uploads/category_images/'.$new_name;
            if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'image'=>$image,
          'category'=>$this->input->post('category'),
          'comment'=>$this->input->post('comment'),
        );
        $check = $this->AM->insert_data('tbl_category',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }
      }else{
        echo 2;
      }

    }
    public function Delete_category(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
         $data = array('id' =>$id);
        $fname = ('id,image');
        $tbname = 'tbl_category';
        $detail = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($detail)
        {
          $image = $detail->image;
            unlink('./uploads/category_images/'.$image);
        }
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
        $id = $this->input->post('ca_id');
        $image=$this->input->post('old_image');
        if(isset($_FILES['edit_single_image']['size']) > 0){
          $new_name='category-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/category_images/'.$new_name;
            if(move_uploaded_file($_FILES['edit_single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'image'=>$image,
          'category'=>$this->input->post('edit_category'),
          'comment'=>$this->input->post('edit_comment'),
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
    public function SubCategory(){
        $this->_chk_if_login();
        $data['category']=$this->User_model->get_all_where('*','tbl_category',array('id!='=>0),'','');
        $this->load->view('admin/subcategory',$data);
     }
     public function Add_subcategory(){
       if($_POST){
        if(isset($_FILES['single_image']['name'])){
          $new_name='subcategory-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/category_images/'.$new_name;
            if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'image'=>$image,
          'category_id'=>$this->input->post('category_id'),
          'subcategory'=>$this->input->post('subcategory'),
          'comment'=>$this->input->post('comment'),
        );
        $check = $this->AM->insert_data('tbl_subcategory',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }
      }else{
        echo 2;
      }

    }
    public function Delete_subcategory(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
         $data = array('id' =>$id);
        $fname = ('id,image');
        $tbname = 'tbl_subcategory';
        $detail = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($detail)
        {
          $image = $detail->image;
            unlink('./uploads/category_images/'.$image);
        }
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
        $id = $this->input->post('ca_id');
        $image=$this->input->post('old_image');
        if(isset($_FILES['edit_single_image']['size']) > 0){
          $new_name='subcategory-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/category_images/'.$new_name;
            if(move_uploaded_file($_FILES['edit_single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'image'=>$image,
          'category_id'=>$this->input->post('edit_category_id'),
          'subcategory'=>$this->input->post('edit_subcategory'),
          'comment'=>$this->input->post('edit_comment'),
        );
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
     public function Gallery(){
        $this->_chk_if_login();
        $data['categories']=$this->User_model->get_all_where('*','tbl_category',array('id!='=>0),'','');
        $this->load->view('admin/gallery',$data);
     }
     public function Add_gallery(){
        if($_POST){
        if(isset($_FILES['single_image']['name'])){
          $new_name='gallery-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/gallery_images/'.$new_name;
            if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'category_id'=>$this->input->post('category_id'),
          'title'=>$this->input->post('title'),
          'image'=>$image,
        );
        $check = $this->AM->insert_data('tbl_gallery',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }
      }else{
        echo 2;
      }
    }
    public function Delete_gallery(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $data = array('id' =>$id);
        $fname = ('id,image');
        $tbname = 'tbl_gallery';
        $detail = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($detail)
        {
          $image = $detail->image;
            unlink('./uploads/gallery_images/'.$image);
        }
        $check = $this->AM->deleteData('tbl_gallery',array('id'=>$id));

        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_gallery(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_gallery';
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

    public function update_gallery(){
        $id = $this->input->post('ca_id');
        $image=$this->input->post('old_image');
        if(isset($_FILES['edit_single_image']['size']) > 0){
          $new_name='gallery-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/gallery_images/'.$new_name;
            if(move_uploaded_file($_FILES['edit_single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'category_id'=>$this->input->post('edit_category_id'),
          'title'=>$this->input->post('edit_title'),
          'image'=>$image,
        );
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_gallery',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }

 public function Edu_help(){
        $this->_chk_if_login();
        $this->load->view('admin/edu_help');
     }
 public function Add_edu_help(){
       if(isset($_FILES['single_image']['name'])){
          $new_name='edu_help-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/edu_images/'.$new_name;
            if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'title'=>$this->input->post('title'),
          'image'=>$image,
          'type'=>'edu_help',
       );
        $check = $this->AM->insert_data('tbl_edu_help',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_edu_help(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $data = array('id' =>$id);
        $fname = ('id,image');
        $tbname = 'tbl_edu_help';
        $detail = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($detail)
        {
          $image = $detail->image;
            unlink('./uploads/edu_images/'.$image);
        }
        $check = $this->AM->deleteData('tbl_edu_help',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_edu_help(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_edu_help';
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

    public function update_edu_help(){
        $id = $this->input->post('ca_id');
        $image=$this->input->post('old_image');
        if(isset($_FILES['edit_single_image']['size']) > 0){
          $new_name='edu_help-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/edu_images/'.$new_name;
            if(move_uploaded_file($_FILES['edit_single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'title'=>$this->input->post('edit_title'),
          'image'=>$image,
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_edu_help',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
     public function Edu_help_det(){
        $this->_chk_if_login();
        $this->load->view('admin/edu_help_det');
     }
     public function Add_edu_help_det(){
       $data = array(
          'title'=>$this->input->post('title'),
          'content'=>$this->input->post('content'),
          'edu_id'=>$this->input->post('edu_det_id'),

        );
        $check = $this->AM->insert_data('tbl_edu_help_det',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_edu_help_det(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_edu_help_det',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_edu_help_det(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_edu_help_det';
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

    public function update_edu_help_det(){
        $id = $this->input->post('ca_id');
        $data = array(
          'title'=>$this->input->post('edit_title'),
          'content'=>$this->input->post('edit_content'),
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_edu_help_det',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
    public function Edu_webinar(){
        $this->_chk_if_login();
        $this->load->view('admin/edu_webinar');
     }
     public function Add_edu_webinar(){
       $data = array(
          'title'=>$this->input->post('title'),
          'content'=>$this->input->post('content'),
          'video'=>$this->input->post('video'),

        );
        $check = $this->AM->insert_data('tbl_edu_webinar',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_edu_webinar(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_edu_webinar',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_edu_webinar(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_edu_webinar';
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

    public function update_edu_webinar(){
        $id = $this->input->post('ca_id');
        $data = array(
          'title'=>$this->input->post('edit_title'),
          'content'=>$this->input->post('edit_content'),
          'video'=>$this->input->post('edit_video'),
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_edu_webinar',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }

     public function Edu_on(){
        $this->_chk_if_login();
        $this->load->view('admin/edu_on');
     }
     public function Add_edu_on(){
       if(isset($_FILES['single_image']['name'])){
          $new_name='edu_on-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/edu_images/'.$new_name;
            if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'title'=>$this->input->post('title'),
          'content'=>$this->input->post('content'),
          'image'=>$image,
        );
        $check = $this->AM->insert_data('tbl_edu_on',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_edu_on(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $data = array('id' =>$id);
        $fname = ('id,image');
        $tbname = 'tbl_edu_on';
        $detail = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($detail)
        {
          $image = $detail->image;
            unlink('./uploads/edu_images/'.$image);
        }
        $check = $this->AM->deleteData('tbl_edu_on',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_edu_on(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_edu_on';
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

    public function update_edu_on(){
        $id = $this->input->post('ca_id');
        $image=$this->input->post('old_image');
        if(isset($_FILES['edit_single_image']['size']) > 0){
          $new_name='edu_on-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/edu_images/'.$new_name;
            if(move_uploaded_file($_FILES['edit_single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'title'=>$this->input->post('edit_title'),
          'content'=>$this->input->post('edit_content'),
          'image'=>$image,
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_edu_on',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
     public function fetch_single_edu_on_sec1(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_edu_on_sec1';
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

    public function update_edu_on_sec1(){
        $id = $this->input->post('ca_id1');
        $data = array(
          'title1'=>$this->input->post('edit_title1'),
          'title2'=>$this->input->post('edit_title2'),
          'content'=>$this->input->post('edit_content1'),
          'video'=>$this->input->post('edit_video'),
        );
         // print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_edu_on_sec1',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
    public function Reschedule(){
        $this->_chk_if_login();
        $this->load->view('admin/reschedule');
     }
 public function Add_reschedule(){
         $data = array(
          'title'=>$this->input->post('title'),
         );
        $check = $this->AM->insert_data('tbl_reschedule',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_reschedule(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_reschedule',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_reschedule(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_reschedule';
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

    public function update_reschedule(){
        $id = $this->input->post('ca_id');
        $data = array(
          'title'=>$this->input->post('edit_title'),
        );
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_reschedule',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
     public function Reschedule_det(){
        $this->_chk_if_login();
        $this->load->view('admin/reshedule_det');
     }
     public function Add_reschedule_det(){
       $data = array(
          'reschedule_id'=>$this->input->post('reschedule_id'),
          'content'=>$this->input->post('content'),
        );
        $check = $this->AM->insert_data('tbl_reschedule_det',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_reschedule_det(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_reschedule_det',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_reschedule_det(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_reschedule';
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

    public function update_reschedule_det(){
        $id = $this->input->post('rca_id');
        $data = array(
          'content'=>$this->input->post('content'),
        );
        // print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_reschedule',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }


    public function Course_list(){
        $this->_chk_if_login();
        $this->load->view('admin/course_list');
     }
    public function Add_course_list(){
        $data = array(
          'title'=>$this->input->post('title'),
          'type'=>'course_list'
       );
        $check = $this->AM->insert_data('tbl_edu_help',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_course_list(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_edu_help',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_course_list(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_edu_help';
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

    public function update_course_list(){
        $id = $this->input->post('ca_id');
        $data = array(
          'title'=>$this->input->post('edit_title'),
          'type'=>'course_list',
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_edu_help',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
     public function Edu_course_list_det(){
        $this->_chk_if_login();
        $this->load->view('admin/course_list_det');
     }
     public function Add_course_list_det(){
       $data = array(
          'title'=>$this->input->post('title'),
          'edu_id'=>$this->input->post('edu_det_id'),
        );
        $check = $this->AM->insert_data('tbl_edu_help_det',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_course_list_det(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_edu_help_det',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_course_list_det(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_edu_help_det';
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

    public function update_course_list_det(){
        $id = $this->input->post('ca_id');
        $data = array(
          'title'=>$this->input->post('edit_title'),
          'content'=>$this->input->post('edit_content'),
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_edu_help_det',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
     public function Edu_course_list_det_det(){
        $this->_chk_if_login();
        $this->load->view('admin/course_list_det_det');
     }
     public function Add_course_list_det_det(){
       $data = array(
          'title'=>$this->input->post('title'),
          'url'=>$this->input->post('url'),
          'edu_det_id'=>$this->input->post('edu_det_id'),
        );
        $check = $this->AM->insert_data('tbl_edu_course_list_det',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_course_list_det_det(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_edu_course_list_det',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_course_list_det_det(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_edu_course_list_det';
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

    public function update_course_list_det_det(){
        $id = $this->input->post('ca_id');
        $data = array(
          'title'=>$this->input->post('edit_title'),
          'url'=>$this->input->post('edit_url'),
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_edu_course_list_det',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }

    public function Header(){
      $data['data']=$this->User_model->get_all_where('*','tbl_header_data',array('id'=>1),'','');
      $this->load->view('admin/Header.php',$data);
    }

    public function Update_Header(){
      $post = $_POST;
      $image = $post['old_image'];
      if($_FILES['myImg']['size'] > 1){
        $new_name='header-'.mt_rand(0000,9999).$_FILES['myImg']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['myImg']['tmp_name'],$path)){
            $image=$new_name;
          }
        }

        $data = array(
          'heading'=>$post['heading'],
          'title'=>$post['title'],
          'placeholder'=>$post['placeholder'],
          'button'=>$post['button'],
          'title2'=>$post['title2'],
          'image'=>$image,
        );
        $result = $this->Frontend_model->update_data('tbl_header_data',$data,array('id'=>1));
        $this->session->set_flashdata('message','<div class="alert alert-success">Data Updated Successfully.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function Below_Header(){
      $data['data']=$this->User_model->get_all_where('*','Below_Header',array('id'=>1),'','');
      $this->load->view('admin/Below_Header.php',$data);
    }

    public function Update_Below_Header(){
      $post = $_POST;
      $result = $this->Frontend_model->update_data('Below_Header',$post,array('id'=>1));
        $this->session->set_flashdata('message','<div class="alert alert-success">Data Updated Successfully.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function How_The_Techeduxon(){
       $data['data']=$this->User_model->get_all_where('*','How_The_Techeduxon',array('id'=>1),'','');
       $data['image']=$this->User_model->get_all_where('*','tbl_home_sponsor',array('id !='=>0),'','');
       $data['count']=$this->User_model->get_all_where('*','tbl_home_counter',array('id !='=>0),'','');

      $this->load->view('admin/How_The_Techeduxon',$data);
    }

    public function Update_How_The_Techeduxon(){
      $post = $_POST;
      $result = $this->Frontend_model->update_data('How_The_Techeduxon',$post,array('id'=>1));
      $this->session->set_flashdata('message','<div class="alert alert-success">Data Updated Successfully.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function addHomeImage(){
      echo "<pre>";
      print_r($_POST);die;
      $image = '';
      if($_FILES['myImg']['size'] > 1){
        $new_name='sponsor-'.mt_rand(0000,9999).$_FILES['myImg']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['myImg']['tmp_name'],$path)){
            $image=$new_name;
          }
        }
        $check = $this->AM->insert_data('tbl_home_sponsor',array('image'=>$image));
        $this->session->set_flashdata('message','<div class="alert alert-success">Data Updated Successfully.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_home_image(){
      $id = $_GET['id'];
      $check = $this->AM->deleteData('tbl_home_sponsor',array('id'=>$id));
      $this->session->set_flashdata('message','<div class="alert alert-danger">Image Deleted Successfully!.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function Home_counter(){
       $data['data']=$this->User_model->get_all_where('*','How_The_Techeduxon',array('id'=>1),'','');
       $data['image']=$this->User_model->get_all_where('*','tbl_home_sponsor',array('id !='=>0),'','');
       $data['count']=$this->User_model->get_all_where('*','tbl_home_counter',array('id !='=>0),'','');

      $this->load->view('admin/home_counter',$data);
    }
    public function updateHomeCounter(){
      $post = $_POST;
      $result = $this->Frontend_model->update_data('tbl_home_counter',$post,array('id'=>1));
      $this->session->set_flashdata('message','<div class="alert alert-primary"> Data Updated!.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function Below_Counter_Section(){
       $data['data']=$this->User_model->get_all_where('*','tbl_below_counter',array('id'=>1),'','');
      $this->load->view('admin/Below_Counter_Section',$data);
    }

    public function updateBlowCounter(){
      $post = $_POST;
      // echo "<pre>";
      // print_r($_FILES);die;
      $image = '';
      if($_FILES['myImg']['size'] > 1){
        $new_name='sponsor-'.mt_rand(0000,9999).$_FILES['myImg']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['myImg']['tmp_name'],$path)){
            $image=$new_name;
            $post['image'] = $image;
          }
        }

        if($_FILES['image3']['size'] > 1){
        $new_name='sponsor-'.mt_rand(0000,9999).$_FILES['image3']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['image3']['tmp_name'],$path)){
            $image=$new_name;
            $post['image3'] = $image;
          }
        }

        if($_FILES['image1']['size'] > 1){
        $new_name='sponsor-'.mt_rand(0000,9999).$_FILES['image1']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['image1']['tmp_name'],$path)){
            $image=$new_name;
            $post['image1'] = $image;
          }
        }

        if($_FILES['image2']['size'] > 1){
        $new_name='sponsor-'.mt_rand(0000,9999).$_FILES['image2']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['image2']['tmp_name'],$path)){
            $image=$new_name;
            $post['image2'] = $image;
          }
        }
      $result = $this->Frontend_model->update_data('tbl_below_counter',$post,array('id'=>1));
      $this->session->set_flashdata('message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function Contact_Us(){
      $data['data']=$this->User_model->get_all_where('*','tbl_contact_us',array('id'=>1),'','');
      $this->load->view('admin/Contact_Us',$data);
    }

    public function updateContact(){
      $post = $_POST;
      // echo "<pre>";
      // print_r($_POST);die;

      if($_FILES['title1']['size'] > 1){
        $new_name='sec2-'.mt_rand(0000,9999).$_FILES['title1']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['title1']['tmp_name'],$path)){
            $post['title1'] = $new_name;
          }
      }

      if($_FILES['title4']['size'] > 1){
        $new_name='sec2-'.mt_rand(0000,9999).$_FILES['title4']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['title4']['tmp_name'],$path)){
            $post['title4'] = $new_name;
          }
      }

      if($_FILES['title7']['size'] > 1){
        $new_name='sec2-'.mt_rand(0000,9999).$_FILES['title7']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['title7']['tmp_name'],$path)){
            $post['title7'] = $new_name;
          }
      }

      if($_FILES['title10']['size'] > 1){
        $new_name='sec2-'.mt_rand(0000,9999).$_FILES['title10']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['title10']['tmp_name'],$path)){
            $post['title10'] = $new_name;
          }
      }

      $result = $this->Frontend_model->update_data('tbl_contact_us',$post,array('id'=>1));
      $this->session->set_flashdata('message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function Become_A_Trainer(){
      $data['data']=$this->User_model->get_all_where('*','tbl_become_trainer',array('id'=>1),'','');
       $data['image']=$this->User_model->get_all_where('*','tbl_home_sponsor',array('id !='=>0),'','');
       $data['title_sec3']=$this->User_model->get_all_where('*','become_trainer_title',array('id !='=>0),'','');
       // echo "<pre>";
       // print_r($data['data']);die;
       $this->load->view('admin/Become_A_Trainer',$data);
    }

    public function updateBecomeTrainer(){
      $post = $_POST;
      $img1 = '';
      $img2 = '';
      $data = array(
        // 'title1'=>$post['title1'],
        // 'icon1'=>$post['icon1'],
        // 'icon2'=>$post['icon2'],
        // 'icon3'=>$post['icon3'],
        // 'title2'=>$post['title2'],
        // 'title3'=>$post['title3'],
        'sec2Desc'=>$post['sec2Desc'],
        'sec4Desc'=>$post['sec4Desc'],
        'sec4Descr'=>$post['sec4Descr'],
        'titler'=>$post['titler'],
        'title'=>$post['title'],
      );

      if($_FILES['icon3']['size'] > 1){
        $new_name='sec2-'.mt_rand(0000,9999).$_FILES['icon3']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['icon3']['tmp_name'],$path)){
            $data['icon3'] = $new_name;
          }
      }

      if($_FILES['icon2']['size'] > 1){
        $new_name='sec2-'.mt_rand(0000,9999).$_FILES['icon2']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['icon2']['tmp_name'],$path)){
            $data['icon2'] = $new_name;
          }
      }

      if($_FILES['icon1']['size'] > 1){
        $new_name='sec2-'.mt_rand(0000,9999).$_FILES['icon1']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['icon1']['tmp_name'],$path)){
            $data['icon1'] = $new_name;
          }
      }

      if($_FILES['myImage']['size'] > 1){
        $new_name='sec2-'.mt_rand(0000,9999).$_FILES['myImage']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['myImage']['tmp_name'],$path)){
            // $img1=$new_name;
            $data['se3img'] = $new_name;
          }
      }

      if($_FILES['imageSec4']['size'] > 1){
        $new_name='sec3-'.mt_rand(0000,9999).$_FILES['imageSec4']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['imageSec4']['tmp_name'],$path)){
            $data['se4img'] = $new_name;
          }
      }

      // echo "<pre>";
      // print_r($data);
      // die;
      $result = $this->Frontend_model->update_data('tbl_become_trainer',$data,array('id'=>1));
      $this->session->set_flashdata('message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function addBecomeSec3title(){
      $post = $_POST;
      $check = $this->AM->insert_data('become_trainer_title',$post);
      $this->session->set_flashdata('message','<div class="alert alert-primary">Title Added Successfully!.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function delete_title_sec3(){
      $id=$this->input->get('id');
      $check = $this->AM->deleteData('become_trainer_title',array('id'=>$id));
      $this->session->set_flashdata('message','<div class="alert alert-danger">Title Deleted Successfully!.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function detail_title_sec3(){
      $this->_chk_if_login();
      $this->load->view('admin/become_trainer_sec3');
    }
    public function Add_becometrainersec3(){
        if(isset($_FILES['single_image']['name'])){
          $new_name='trainer-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/home_images/'.$new_name;
            if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'title_id'=>$this->input->post('title_id'),
          'title'=>$this->input->post('title'),
          'description'=>$this->input->post('description'),
          'image'=>$image,
       );
        $check = $this->AM->insert_data('become_trainer_sec3',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_becometrainersec3(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $data = array('id' =>$id);
        $fname = ('id,image');
        $tbname = 'become_trainer_sec3';
        $detail = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($detail)
        {
          $image = $detail->image;
            unlink('./uploads/home_images/'.$image);
        }
        $check = $this->AM->deleteData('become_trainer_sec3',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_becometrainersec3(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'become_trainer_sec3';
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

    public function update_becometrainersec3(){
        $id = $this->input->post('ca_id');
        $image=$this->input->post('old_image');
        if($_FILES['edit_single_image']['size'] > 0){
          $new_name='trainer-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/home_images/'.$new_name;
            if(move_uploaded_file($_FILES['edit_single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'title_id'=>$this->input->post('title_id'),
          'title'=>$this->input->post('edit_title'),
          'description'=>$this->input->post('edit_description'),
          'image'=>$image,
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('become_trainer_sec3',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
     public function Testimonial(){
        $this->_chk_if_login();
        $this->load->view('admin/testimonial');
     }
      public function Add_testimonial(){
        if(isset($_FILES['single_image']['name'])){
          $new_name='testimonial-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/home_images/'.$new_name;
            if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }
        $data = array(
          'name'=>$this->input->post('name'),
          'star'=>$this->input->post('star'),
          'from_page'=>$this->input->post('from_page'),
          'designation'=>$this->input->post('designation'),
          'description'=>$this->input->post('description'),
          'image'=>$image,
        );
        $check = $this->AM->insert_data('tbl_testimonial',$data);
        if ($check) {
          echo 1;
        }else{
          echo 2;
        }

    }
    public function Delete_testimonial(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $data = array('id' =>$id);
        $fname = ('id,image');
        $tbname = 'tbl_testimonial';
        $detail = $this->Frontend_model->fetch_condrecordwithfield($tbname,$data,$fname);
          if($detail)
        {
          $image = $detail->image;
            unlink('./uploads/home_images/'.$image);
        }
        $check = $this->AM->deleteData('tbl_testimonial',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
    public function fetch_single_testimonial(){
        $id = $this->input->post('id');
        $data = array('id' =>$id);
        $fname = ('*');
        $tbname = 'tbl_testimonial';
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

    public function update_testimonial(){
        $id = $this->input->post('ca_id');
        $image=$this->input->post('old_image');
        if($_FILES['single_image']['size'] > 0){
          $new_name='testimonail-'.mt_rand(0000,9999).'.jpeg';
          $path='uploads/home_images/'.$new_name;
            if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }else{
          $image=$this->input->post('old_image');
        }
        $data = array(
          'name'=>$this->input->post('name'),
          'star'=>$this->input->post('star'),
          'from_page'=>$this->input->post('from_page'),
          'designation'=>$this->input->post('designation'),
          'description'=>$this->input->post('description'),
          'image'=>$image,
        );
        //print_r($data);die;
        $where=array('id'=>$id);
        $result = $this->Frontend_model->update_data('tbl_testimonial',$data,$where);
          if($result)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

    }
    public function Enquiry_contact(){
      $this->_chk_if_login();
      $this->load->view('admin/enquiry_contact');
    }
    public function Delete_enquiry_contact(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('enquiry_contact',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }

    public function Delete_enquiry_refer(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('refer_earn_eq',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }

    public function Footer_content(){
       $this->_chk_if_login();
       $data['footer_content']=$this->User_model->get_single_where('*','footer_contact',array('id'=>1),'','');
       $data['footer_content_heading']=$this->User_model->get_all_where('*','footer_content_heading',array('id!='=>0),'','');
       $data['footer_links']=$this->User_model->get_all_where('*','footer_links',array('id!='=>0),'','');
       $data['footer_sec3_app']=$this->User_model->get_all_where('*','footer_sec3_app',array('id!='=>0),'','');
       $data['footer_sec4_icons']=$this->User_model->get_all_where('*','footer_sec4_icons',array('id!='=>0),'','');
      $this->load->view('admin/footer_content',$data);
    }

    public function updateFooterLinks1(){
      $data = array('head_id'=>$_POST['head_id'],'title'=>$_POST['title'],'link'=>$_POST['link']);
      $result = $this->AM->updateData($data,'footer_links',array('id'=>$_POST['footerId']));
          $this->session->set_flashdata('update_message','<div class="alert alert-primary">Data updated successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
    }

  public function editfooter_contentsec1(){
      $data=array(
          'contact'=>$this->input->post('conatct'),
          'email'=>$this->input->post('email'),
          'address'=>$this->input->post('address'),
      );
      $result = $this->AM->updateData($data,'footer_contact',array('id'=>1));
      if($result){
          $this->session->set_flashdata('update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }else{
          $this->session->set_flashdata('failed_update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }
  }
   public function editfooter_heading1(){
      $data=array(
          'heading'=>$this->input->post('head1'),
      );
      $result = $this->AM->updateData($data,'footer_content_heading',array('id'=>1));
      if($result){
          $this->session->set_flashdata('update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }else{
          $this->session->set_flashdata('failed_update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }
  }
  public function editfooter_heading2(){
      $data=array(
          'heading'=>$this->input->post('head2'),
      );
      $result = $this->AM->updateData($data,'footer_content_heading',array('id'=>2));
      if($result){
          $this->session->set_flashdata('update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }else{
          $this->session->set_flashdata('failed_update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }
  }
  public function addfooter_link(){
      $data=array(
          'head_id'=>$this->input->post('head_id'),
          'title'=>$this->input->post('title'),
          'link'=>$this->input->post('link'),
      );
      $result = $this->AM->insertData('footer_links',$data);
      if($result){
          $this->session->set_flashdata('add_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }else{
          $this->session->set_flashdata('failed_update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }
  }
   public function Delete_footer_link(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('footer_links',array('id'=>$id));
        $this->session->set_flashdata('delete_message','<div class="alert alert-primary">Data Deleted Successfully!.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
  public function addfooter_sec3_app(){
      $data=array(
          'title1'=>$this->input->post('title1'),
          'title2'=>$this->input->post('title2'),
          'icon'=>$this->input->post('icon'),
          'url'=>$this->input->post('url'),
      );
      $result = $this->AM->insertData('footer_sec3_app',$data);
      if($result){
          $this->session->set_flashdata('add_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }else{
          $this->session->set_flashdata('failed_update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }
  }
   public function Delete_footer_sec3_app(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('footer_sec3_app',array('id'=>$id));
        $this->session->set_flashdata('delete_message','<div class="alert alert-primary">Data Deleted Successfully!.</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }
   public function addfooter_sec4_icons(){
      $data=array(
          'icon'=>$this->input->post('icon'),
          'url'=>$this->input->post('url'),
      );
      $result = $this->AM->insertData('footer_sec4_icons',$data);
      if($result){
          $this->session->set_flashdata('add_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }else{
          $this->session->set_flashdata('failed_update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }
  }
  public function Delete_footer_sec4_icons(){
      //$this->_check_log_in('AdminPanel/ViewProduct');
      $id = $this->input->get('id');
      $check = $this->AM->deleteData('footer_sec4_icons',array('id'=>$id));
      $this->session->set_flashdata('delete_message','<div class="alert alert-primary">Data Deleted Successfully!.</div>');
      redirect($_SERVER['HTTP_REFERER']);
    }

  public function Trainer_list(){
      $this->_chk_if_login();
      $this->load->view('admin/trainer_list');
  }
  public function Delete_trainer_list(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_user',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }
  public function Learner_list(){
      $this->_chk_if_login();
      $this->load->view('admin/learner_list');
  }
  public function Delete_learner_list(){
        //$this->_check_log_in('AdminPanel/ViewProduct');
        $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_user',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
    }

  public function get_trainer_profile(){
     $id = $this->input->get('id');
     $profile_data=$this->User_model->get_single_where('*','tbl_user',array('id'=>$id),'','');
     $profile=json_encode($profile_data['profile_data']);
     echo $profile;
  }
  public function Login_content(){
      $this->_chk_if_login();
      $data['login_content']=$this->User_model->get_single_where('*','tbl_login_content',array('id'=>1),'','');
      $this->load->view('admin/login_signup_content',$data);
  }
  public function editlogin_content(){
       if($_FILES['single_image']['size'] > 0){
          $new_name='login-'.mt_rand(0000,9999).$_FILES['single_image']['name'];
          $path='uploads/home_images/'.$new_name;
            if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }else{
          $image=$this->input->post('old_image');
        }
      $data=array(
          'login_title'=>$this->input->post('title'),
          'login_description'=>$this->input->post('description'),
          'login_image'=>$image,

      );
      // print_r($data);die;
      $result = $this->AM->updateData($data,'tbl_login_content',array('id'=>1));
      if($result){
          $this->session->set_flashdata('update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }else{
          $this->session->set_flashdata('failed_update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }
  }

  public function editsignup_content(){
      if($_FILES['single_image']['size'] > 0){
          $new_name='login-'.mt_rand(0000,9999).$_FILES['single_image']['name'];
          $path='uploads/home_images/'.$new_name;
            if(move_uploaded_file($_FILES['single_image']['tmp_name'],$path)){
              $image=$new_name;
            }
        }else{
          $image=$this->input->post('old_image');
        }
      $data=array(
          'signup_title'=>$this->input->post('title'),
          'signup_description'=>$this->input->post('description'),
          'signup_image'=>$image,

      );
      $result = $this->AM->updateData($data,'tbl_login_content',array('id'=>1));
      if($result){
          $this->session->set_flashdata('update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }else{
          $this->session->set_flashdata('failed_update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
          redirect($_SERVER['HTTP_REFERER']);
      }
  }

  public function Manage_banners(){
    $this->_chk_if_login();
    $this->load->view('admin/banners');
  }

  public function add_banners(){
    $post = $this->input->post();
    $image = '';
    if(isset($_FILES['myImg']['name'])){
      $new_name='how_to_work-'.mt_rand(0000,9999).'.jpeg';
      $path='uploads/home_images/'.$new_name;
        if(move_uploaded_file($_FILES['myImg']['tmp_name'],$path)){
          $image=$new_name;
        }
      }

      $post['image'] = $image;
      $check = $this->AM->insert_data('tbl_banner',$post);
  }

  public function udpate_banner(){
    $post = $this->input->post();
    $image = $post['image'];
    if(isset($_FILES['myImg']['name'])){
      $new_name='how_to_work-'.mt_rand(0000,9999).'.jpeg';
      $path='uploads/home_images/'.$new_name;
        if(move_uploaded_file($_FILES['myImg']['tmp_name'],$path)){
          $image=$new_name;
        }
      }
      $data = array(
        'page'=>$post['page'],
        'title'=>$post['title'],
        'image'=>$image,
      );
      $result = $this->Frontend_model->update_data('tbl_banner',$data,array('id'=>$post['idd']));
  }

  public function delete_banner(){
    $check = $this->AM->deleteData('tbl_banner',array('id'=>$_GET['id']));
  }

  public function HeaderTopContenct(){
    $detail['text'] = $this->Frontend_model->fetch_condrecordwithfield('tbl_head_top_head',array('id'=>1),'text')->text;
    $this->load->view('admin/HeaderTopContenct',$detail);
  }

  public  function updateHeaderTopContenct(){
    $data = array('text'=>$_POST['heading']);
    $result = $this->Frontend_model->update_data('tbl_head_top_head',$data,array('id'=>1));
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function update_course_heading(){
    $this->AM->updateData(array('heading'=>$_POST['text']),'tbl_course_heading',array('id'=>1));
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function updateTestomonialSec(){
    $this->AM->updateData($_POST,'tbl_test_sec',array('id'=>1));
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function My_course_content(){
    $data['data'] = $this->Frontend_model->fetch_condrecordwithfield('my_course',array('id'=>1),'*');
    $this->load->view('admin/My_course_content',$data);
  }

  public function udpate_my_course(){
    $post = $_POST;
    if($_FILES['myFile']['size'] > 1){
        $new_name='header-'.mt_rand(0000,9999).$_FILES['myFile']['name'];
        $path='uploads/home_images/'.$new_name;
          if(move_uploaded_file($_FILES['myFile']['tmp_name'],$path)){
            $post['image']=$new_name;
          }
        }
        $this->AM->updateData($post,'my_course',array('id'=>1));
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function addCategory(){
    $post = $this->input->post();
      $check = $this->AM->insert_data('tbl_course_cat',$post);
  }


  function deleteCategory(){
    $id = $this->input->get('id');
        $check = $this->AM->deleteData('tbl_course_cat',array('id'=>$id));
        if ($check) {
          $res = json_encode(array('status'=>'success'));
        }else{
          $res = json_encode(array('status'=>'failure'));
        }
        echo $res;
  }
  public function udpateCategory(){
    $post = $this->input->post();
      $data = array(
        'category'=>$post['category'],
        'module'=>$post['module'],
      );
      $result = $this->Frontend_model->update_data('tbl_course_cat',$data,array('id'=>$post['idd']));
  }

  public function techForBussiness(){
    $post = $_POST;
    $this->Frontend_model->update_data('techForBussiness',$post,array('id'=>1));
    $this->session->set_flashdata('update_message','<div class="alert alert-primary">Data Updated Successfully!.</div>');
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function approve_certificate(){
    $id = $_GET['id'];
    $this->Frontend_model->update_data('order_detail',array('complete'=>1),array('id'=>$id));
  }

/*-----------------------------END Content-----------------------------------------*/





}
