<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataTable extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('DataTableModel','DTM');
        $this->load->model('AdminModel','AM');
        $this->load->model('Frontend_model');
	}


   function getHow_tech_workList(){
		    $column_order = array(null,'title1','title2');
		    $column_search = array('title1','title2');
		    $where = array('id !='=>0,'type'=>'how_tech_work');
		    $table = 'tbl_home_content';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row){
                $sub_array = array();
                $sub_array[] = $row->title1;
                $sub_array[] = $row->title2;
                $sub_array[] = '<img src="'.base_url().'uploads/home_images/'.$row->image.'" style="height:60px;width:60px;" ?> ';

                 $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';

                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_home_content',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getNews_and_articleList(){

            $column_order = array(null,'title1','title2','description');
            $column_search = array('title1','title2','description');
            $where = array('id !='=>0,'type'=>'news_and_article');
            $table = 'tbl_home_content';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->title1;
                $sub_array[] = $row->title2;
                $sub_array[] = '<img src="'.base_url().'uploads/home_images/'.$row->image.'" style="height:60px;width:60px;" ?> ';
                $sub_array[] = '<div class="read-more-content1 a'.$row->id.'" ids="'.$row->id.'" >'.$row->description.'</div><a href="javascript:void(0);" idd="a'.$row->id.'" class="btn dbxshad btn-lg btn-thm2 new-a rounded hide-nshow-read1">Read More</a>';
                 $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';

                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_home_content',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getLeadershipList(){

            $column_order = array(null,'title1','title2');
            $column_search = array('title1','title2');
            $where = array('id !='=>0,'type'=>'leadership');
            $table = 'tbl_home_content';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->title1;
                $sub_array[] = $row->title2;
                $sub_array[] = '<img src="'.base_url().'uploads/home_images/'.$row->image.'" style="height:60px;width:60px;" ?> ';
                $sub_array[] = '<div class="read-more-content1 a'.$row->id.'" ids="'.$row->id.'" >'.$row->description.'</div><a href="javascript:void(0);" idd="a'.$row->id.'" class="btn dbxshad btn-lg btn-thm2 new-a rounded hide-nshow-read1">Read More</a>';
                 $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';

                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_home_content',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getAboutList(){
            $column_order = array(null,'title','description');
            $column_search = array('title','description');
            $where = array('id !='=>0);
            $table = 'tbl_about';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row){
                $sub_array = array();
                $sub_array[] = $row->title;
                $sub_array[] = '<img src="'.base_url().'uploads/about_images/'.$row->image.'" style="height:60px;width:60px;" ?> ';
                $sub_array[] = '<div class="read-more-content1 a'.$row->id.'" ids="'.$row->id.'" >'.$row->description.'</div><a href="javascript:void(0);" idd="a'.$row->id.'" class="btn dbxshad btn-lg btn-thm2 new-a rounded hide-nshow-read1">Read More</a>';
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_about',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getAboutjourneyList(){

            $column_order = array(null,'title','title_date','description');
            $column_search = array('title1','title_date','description');
            $where = array('id !='=>0);
            $table = 'tbl_about_journey';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->title;
                $sub_array[] = $row->title_date;
                $sub_array[] = '<div class="read-more-content1 a'.$row->id.'" ids="'.$row->id.'" >'.$row->description.'</div><a href="javascript:void(0);" idd="a'.$row->id.'" class="btn dbxshad btn-lg btn-thm2 new-a rounded hide-nshow-read1">Read More</a>';
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';

                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_about_journey',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }

     function getCategoryList(){

            $column_order = array(null,'category');
            $column_search = array('category');
            $where = array('id !='=>0);
            $table = 'tbl_category';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->category;
                $sub_array[] = '<img src="'.base_url().'uploads/category_images/'.$row->image.'" style="height:60px;width:60px;" ?> ';
                $sub_array[] = $row->comment;
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';

                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_category',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getSubCategoryList(){

            $column_order = array(null,'category_id','subcategory');
            $column_search = array('category_id','subcategory');
            $where = array('id !='=>0);
            $table = 'tbl_subcategory';
            $select='*,(select category from tbl_category where tbl_category.id=tbl_subcategory.category_id)as category';
            $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->category;
                $sub_array[] = $row->subcategory;
                $sub_array[] = '<img src="'.base_url().'uploads/category_images/'.$row->image.'" style="height:60px;width:60px;" ?> ';
                $sub_array[] = $row->comment;
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';

                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_subcategory',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getGalleryList(){

            $column_order = array(null,'title','image');
            $column_search = array('title','image');
            $where = array('id !='=>0);
            $table = 'tbl_gallery';
            $select='*,(SELECT category FROM tbl_category WHERE tbl_category.id=tbl_gallery.category_id)as category';
            $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->category;
                $sub_array[] = $row->title;
                $sub_array[] = '<img src="'.base_url().'uploads/gallery_images/'.$row->image.'" style="height:60px;width:60px;" ?> ';
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';

                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_gallery',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getCourseList(){
            $column_order = array(null,'title','starting_date','mrp','course_title');
            $column_search = array('title','starting_date','mrp','course_title');
            $where = array('id !='=>0);
            $table = 'tbl_course';
            $select='*';
            $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row){
                if($row->status =='1'){
                   $btn='<a href="javascript:void(0)" class="status" id="'.$row->id.'" status="2" >Enabled</a>  ';
                }else{
                   $btn='<a href="javascript:void(0)" style="color:red;" id="'.$row->id.'" class="status" status="1" >Click To Enable</a>  ';

                }
                $top='';
                if($row->top =='1'){
                   $top='<a href="javascript:void(0)" class="top-course" id="'.$row->id.'" status="2" >Click To Remove From Top</a>  ';
                }else{
                   $top='<a href="javascript:void(0)" style="color:red;" id="'.$row->id.'" class="top-course" status="1" >Click To Add In Top</a>  ';

                }

                $sub_array = array();
                $sub_array[] = $row->title;
                $sub_array[] = $row->starting_date;
                $sub_array[] = $row->mrp;
                $sub_array[] = $row->course_title;
                $sub_array[] = $btn;
                $sub_array[] = $top;
                $sub_array[] = '<button class="btn btn-sm btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>'.' '.'<a href="'.base_url().'View-course-detail?id='.$row->id.'" class="btn btn-sm btn-primary view_detail" title="View" id="'.$row->id.'"><i class="fas fa-eye"></i></a>  <button class="btn btn-sm btn-secondary Add_Exam" title="Add Exam" id="'.$row->id.'" exam_name="'.$row->exam_name.'" exam_vchr="'.$row->exam_vchr.'" last_date="'.date('m/d/Y',strtotime($row->last_date)).'" exa_description="'.$row->exa_description.'"><b>+</b></button>';

                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_course',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
       function getBatchList(){

            $column_order = array(null,'name','type','start_date','end_date');
            $column_search = array('name','type','start_date','end_date');
            $c_id=$_GET['id'];
            $where = array('course_id'=>$c_id);
            $table = 'tbl_batch';
            $select='*';
            $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->name;
                $sub_array[] = $row->type;
                $sub_array[] = $row->start_date;
                $sub_array[] = $row->end_date;
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';

                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_batch',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }

      function getSectionList(){

            $column_order = array(null,'section','remark');
            $column_search = array('section','remark');
            $where = array('course_id'=>$_GET['id']);
            $table = 'tbl_section';
            $select='*';
            $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = '<a href="'.base_url().'Self-learning-var?id='.$row->id.'" class=" view_detail" title="View" id="'.$row->id.'">'.$row->section.'</a>';
                $sub_array[] = $row->remark;
                $sub_array[] = '<button class="btn btn-sm btn-teal update" title="Edit" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-sm btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>';

                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_section',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getVideosList(){

            $column_order = array(null,'title','duration','video_url');
            $column_search = array('title','duration','video_url');
            $where = array('section_id'=>$_GET['id']);
            $table = 'tbl_self_learn_video';
            $select='*';
            $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->title;
                $sub_array[] = $row->duration;
                $sub_array[] = $row->video_url;
                $sub_array[] = '<button class="btn btn-sm btn-teal update1" title="Edit" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-sm btn-danger delete1" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>';

                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_self_learn_video',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getResourcesList(){

            $column_order = array(null,'title','resource_pdf');
            $column_search = array('title','resource_pdf');
            $where = array('section_id'=>$_GET['id']);
            $table = ' tbl_self_learn_resources';
            $select='*';
            $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->title;
                $sub_array[] = '<a href="'.base_url().'uploads/self_learn_files/'.$row->resource_pdf.'" target="_blank">'.$row->resource_pdf.'</a>';
                $sub_array[] = '<button class="btn btn-sm btn-teal update" title="Edit" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-sm btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>';

                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_self_learn_resources',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getAssessmentList(){

            $column_order = array(null,'project_title','tag_name','file','description');
            $column_search = array('project_title','tag_name','file','description');
            $where = array('id!='=>0);
            $table = ' tbl_assessment';
            $select='*';
            $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->project_title;
                $sub_array[] = $row->tag_name;
                $sub_array[] = '<div class="read-more-content1 a'.$row->id.'" ids="'.$row->id.'" >'.$row->description.'</div><a href="javascript:void(0);" idd="a'.$row->id.'" class="btn dbxshad btn-lg btn-thm2 new-a rounded hide-nshow-read1">Read More</a>';
                $sub_array[] = '<a href="'.base_url().'uploads/assessment_file/'.$row->file.'" target="_blank">'.$row->file.'</a>';
                $sub_array[] = '<button class="btn btn-sm btn-teal update" title="Edit" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-sm btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_assessment',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      /*-------------------end -------------------*/
      function getEduonsec1List(){

            $column_order = array(null,'title1','title2','content','video');
            $column_search = array('title1','title2','content','video');
            $where = array('id !='=>0);
            $table = 'tbl_edu_on_sec1';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->title1;
                $sub_array[] = $row->title2;
                $sub_array[] = '<div class="read-more-content1 a'.$row->id.'" ids="'.$row->id.'" >'.$row->content.'</div><a href="javascript:void(0);" idd="a'.$row->id.'" class="btn dbxshad btn-lg btn-thm2 new-a rounded hide-nshow-read1">Read More</a>';
                $sub_array[] = $row->video;
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update1" id="'.$row->id.'"><i class="fas fa-edit"></i></button>';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_edu_on_sec1',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getEduonList(){
            $column_order = array(null,'title','content');
            $column_search = array(null,'title','content');
            $where = array('id !='=>0);
            $table = 'tbl_edu_on';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->title;
                $sub_array[] = '<img src="'.base_url().'uploads/edu_images/'.$row->image.'" style="height:60px;width:60px;" ?> ';
                $sub_array[] = '<div class="read-more-content1 a'.$row->id.'" ids="'.$row->id.'" >'.$row->content.'</div><a href="javascript:void(0);" idd="a'.$row->id.'" class="btn dbxshad btn-lg btn-thm2 new-a rounded hide-nshow-read1">Read More</a>';
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_edu_on',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getEduwebinarList(){

            $column_order = array(null,'title','content','video');
            $column_search = array('title','content','video');
            $where = array('id !='=>0);
            $table = 'tbl_edu_webinar';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->title;
                $sub_array[] = $row->video;
                $sub_array[] = '<div class="read-more-content1 a'.$row->id.'" ids="'.$row->id.'" >'.$row->content.'</div><a href="javascript:void(0);" idd="a'.$row->id.'" class="btn dbxshad btn-lg btn-thm2 new-a rounded hide-nshow-read1">Read More</a>';
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_edu_webinar',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }

      function getReferEarn(){

            $column_order = array(null,'comment','email','created');
            $column_search = array('comment','email','created');
            $where = array('id !='=>0);
            $table = 'refer_earn_eq';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->comment;
                $sub_array[] = $row->email;
                $sub_array[] = date('d-M-Y',strtotime($row->created));
                $sub_array[] = '<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','refer_earn_eq',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getEduhelpList(){

            $column_order = array(null,'title');
            $column_search = array('title');
            $where = array('id !='=>0,'type'=>'edu_help');
            $table = 'tbl_edu_help';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = "<a href=".base_url().'Edu_help_det?id='.$row->id." ?>".$row->title."</a>";
                $sub_array[] = '<img src="'.base_url().'uploads/edu_images/'.$row->image.'" style="height:60px;width:60px;" ?> ';
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_edu_help',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getEduhelpdetList(){

            $column_order = array(null,'title','content');
            $column_search = array('title','content');
            $id=$_GET['id'];
            $where = array('edu_id'=>$id);
            $table = 'tbl_edu_help_det';

            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->title;
                $sub_array[] = '<div class="read-more-content1 a'.$row->id.'" ids="'.$row->id.'" >'.$row->content.'</div><a href="javascript:void(0);" idd="a'.$row->id.'" class="btn dbxshad btn-lg btn-thm2 new-a rounded hide-nshow-read1">Read More</a>';
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_edu_help_det',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
    function getRescheduleList(){

            $column_order = array(null,'title');
            $column_search = array('title');
            $where = array('id !='=>0);
            $table = 'tbl_reschedule';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->title;
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>'.' '.'<button class="btn btn-primary addDetails" title="Add Details" id="'.$row->id.'"><b>+</b></button>';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_reschedule',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getRescheduledetList(){

            $column_order = array(null,'content');
            $column_search = array('content');
            $id=$_GET['id'];
            $where = array('reschedule_id'=>$id);
            $table = 'tbl_reschedule_det';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = '<div class="read-more-content1 a'.$row->id.'" ids="'.$row->id.'" >'.$row->content.'</div><a href="javascript:void(0);" idd="a'.$row->id.'" class="btn dbxshad btn-lg btn-thm2 new-a rounded hide-nshow-read1">Read More</a>';
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i>';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_reschedule_det',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }

    public function getTrainingList(){
        $column_order = array(null,'title');
            $column_search = array('title');
            $where = array('id !='=>0);
            $table = 'tbl_training';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row){
                $sub_array = array();
                $sub_array[] = '<a href="'.base_url().'Adminpanel/Blog/course_calender_det?id='.$row->id.'" >'.$row->title.'</a>';
                $sub_array[] = '<img src="'.base_url().'uploads/home_images/'.$row->image.'" style="height:60px;width:60px;" ?> ';
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> <button class="btn btn-primary addDetails" title="Add Details" id="'.$row->id.'"><b>+</b></button>';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_training',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
    }
     public function getTrainingdetList(){
        $column_order = array(null,'month','start_date','end_date','mrp','sell_price','start_time','end_time','mode','timing');
            $column_search = array('month','start_date','end_date','mrp','sell_price','start_time','end_time','mode','timing');
            $where = array('trainig_id'=>$_GET['id']);
            $table = 'tbl_training_detail';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row){
                $sub_array = array();
                $sub_array[] = $row->month;
                $sub_array[] = date('d-M-Y',strtotime($row->start_date));
                $sub_array[] = date('d-M-Y',strtotime($row->end_date));
                $sub_array[] = date('h:i:s',strtotime($row->start_time));
                $sub_array[] = date('h:i:s',strtotime($row->end_time));
                $sub_array[] = $row->mrp;
                $sub_array[] = $row->sell_price;
                $sub_array[] = $row->mode;
                $sub_array[] = $row->timing;
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_training_detail',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
    }
    public function getJobcategoryList(){
        $column_order = array(null,'category');
            $column_search = array('category');
            $where = array('id !='=>0);
            $table = 'tbl_job_category';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row){
                $sub_array = array();
                // $sub_array[] = '<a href="'.base_url().'Adminpanel/Blog/Job_category_det?id='.$row->id.'" >'.$row->category.'</a>';
                $sub_array[] = $row->category;
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_job_category',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
    }
     public function getJobcategorydetList(){
        $column_order = array(null,'title');
            $column_search = array('title');
            $where = array('category_id'=>$_GET['id']);
            $table = 'tbl_job_category_det';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row){
                $sub_array = array();
                $sub_array[] = $row->title;
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_job_category_det',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
    }

     function getCourselistList(){

            $column_order = array(null,'title');
            $column_search = array('title');
            $where = array('id !='=>0,'type'=>'course_list');
            $table = 'tbl_edu_help';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = "<a href=".base_url().'Edu_course_list_det?id='.$row->id." ?>".$row->title."</a>";
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_edu_help',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getCourselistdetList(){

            $column_order = array(null,'title','content');
            $column_search = array('title','content');
            $id=$_GET['id'];
            $where = array('edu_id'=>$id);
            $table = 'tbl_edu_help_det';

            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = "<a href=".base_url().'Edu_course_list_det_det?id='.$row->id." ?>".$row->title."</a>";
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_edu_help_det',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getCourselistdetdetList(){

            $column_order = array(null,'title','url');
            $column_search = array('title','url');
            $id=$_GET['id'];
            $where = array('edu_det_id'=>$id);
            $table = 'tbl_edu_course_list_det';

            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->title;
                $sub_array[] = $row->url;
                $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_edu_course_list_det',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getBecometrainersec3List(){

            $column_order = array(null,'title','description','image');
            $column_search = array('title','description');
            $where = array('id !='=>0,'title_id'=>$_GET['title_id']);
            $table = 'become_trainer_sec3';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->title;
                $sub_array[] = '<img src="'.base_url().'uploads/home_images/'.$row->image.'" style="height:60px;width:60px;" ?> ';
                $sub_array[] = '<div class="read-more-content1 a'.$row->id.'" ids="'.$row->id.'" >'.$row->description.'</div><a href="javascript:void(0);" idd="a'.$row->id.'" class="btn dbxshad btn-lg btn-thm2 new-a rounded hide-nshow-read1">Read More</a>';
                 $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';

                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','become_trainer_sec3',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getTestimonialList(){

            $column_order = array(null,'name','designation','description','star','image','from_page');
            $column_search = array('name','designation','description','star','image','from_page');
            $where = array('id !='=>0);
            $table = 'tbl_testimonial';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = '<img src="'.base_url().'uploads/home_images/'.$row->image.'" style="height:60px;width:60px;" ?> ';
                $sub_array[] = $row->name;
                $sub_array[] = $row->designation;
                $sub_array[] = $row->star;
                $sub_array[] = $row->from_page;
                $sub_array[] = '<div class="read-more-content1 a'.$row->id.'" ids="'.$row->id.'" >'.$row->description.'</div><a href="javascript:void(0);" idd="a'.$row->id.'" class="btn dbxshad btn-lg btn-thm2 new-a rounded hide-nshow-read1">Read More</a>';
                 $sub_array[] = '<button title="Edit"  class="btn btn-teal edit update" id="'.$row->id.'"><i class="fas fa-edit"></i></button>'.' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';

                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_testimonial',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getEnquirycontactList(){

            $column_order = array(null,'name','email','contact','option','message','from_page');
            $column_search = array('name','email','contact','option','message','from_page');
            $where = array('from_page'=>$_GET['page']);
            $table = 'enquiry_contact';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row){
                $sub_array = array();
                $sub_array[] = $row->name;
                $sub_array[] = $row->email;
                $sub_array[] = $row->contact;
                if($_GET['page'] == 'contact_us'){
                    $sub_array[] = $row->subject;
                }else{
                    $sub_array[] = $row->option;
                }
                $sub_array[] = $row->countary;
                $sub_array[] = $row->message;
                $sub_array[] = '<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';

                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','enquiry_contact',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getLearnerList(){

            $column_order = array(null,'name','email','contact');
            $column_search = array('name','email','contact');
            $where = array('type'=>'Learner');
            $table = 'tbl_user';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->name;
                $sub_array[] = $row->email;
                $sub_array[] = $row->contact;
                $sub_array[] = '<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_user',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }
      function getTrainerList(){

            $column_order = array(null,'name','email','contact');
            $column_search = array('name','email','contact');
            $where = array('type'=>'Trainer');
            $table = 'tbl_user';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->name;
                $sub_array[] = $row->email;
                $sub_array[] = $row->contact;
                $sub_array[] = '<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>'.' '.'<button class="btn btn-danger view" title="View" id="'.$row->id.'"><i class="fas fa-eye"></i></button> ';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_user',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }

      public  function getbannerList(){
          $column_order = array(null,'page','title');
            $column_search = array('page','title');
            $where = array('id !='=>0);
            $table = 'tbl_banner';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row){
                $page = $row->page;
                if ($page == 'User-About-Us') {
                    $page = 'Who we are';
                }
                if ($page == 'Categories') {
                    $page = 'Forum';
                }
                $sub_array = array();
                $sub_array[] = $page;
                $sub_array[] = $row->title;
                $sub_array[] = '<img src="'.base_url().'uploads/home_images/'.$row->image.'" style="height:70px;width:70px">';
                $sub_array[] = '<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>'.' '.'<button class="btn btn-primary update" title="Edit" page="'.$row->page.'" title1="'.$row->title.'" img="'.$row->image.'" id="'.$row->id.'"><i class="fas fa-edit"></i></button> ';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_banner',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }

      function getLearnerList1(){
            $column_order = array(null,'name','email','contact');
            $column_search = array('name','email','contact');
            $where = array('type'=>'Learner');
            $table = 'tbl_user';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = '<input type="checkbox" name="check_id[]" value="'.$row->id.'" class="form-control" >';
                $sub_array[] = $row->name;
                $sub_array[] = $row->email;
                $sub_array[] = $row->contact;
                $sub_array[] = '<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','tbl_user',$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }

      public function getOrderList(){
          $column_order = array(null,'name','email','phone_no','invoice','country','total','company','order_date','address1','address2','state','City','pin_code');
            $column_search = array('name','email','phone_no','invoice','country','total','company','order_date','address1','address2','state','City','pin_code');
            $where = array('id != '=>0);
            $table = 'tbl_order';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->id;
                $sub_array[] = $row->invoice;
                $sub_array[] = $row->name;
                $sub_array[] = $row->email;
                $sub_array[] = $row->phone_no;
                $sub_array[] = $row->country;
                $sub_array[] = $row->total;
                $sub_array[] = $row->company;
                $sub_array[] = $row->order_date;
                $sub_array[] = 'Address : '.$row->address1.' '.$row->address2.'<br>State : <b>'.$row->state.'</b>, City : <b>'.$row->City.'</b>, pincode : <b>'.$row->pin_code.'</b>';
                $sub_array[] = '<a href="'.base_url().'Adminpanel/Adminpanel/Invoice/'.$row->id.'"  class="btn btn-primary" title="invoice" target="_blank"><i class="fas fa-scroll"></i></a>';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_filtered_data('*',$table,$where,$column_order,$column_search),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*',$table,$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }

      public function getOrderList2(){
          $column_order = array(null,'name','email','phone_no','invoice','country','total','company','order_date','address1','address2','state','City','pin_code');
            $column_search = array('name','email','phone_no','invoice','country','total','company','order_date','address1','address2','state','City','pin_code');
            $where = array('assign'=>0);
            $table = 'tbl_order';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->id;
                $sub_array[] = $row->name;
                $sub_array[] = $row->email;
                $sub_array[] = $row->phone_no;
                $sub_array[] = $row->country;
                $sub_array[] = $row->total;
                $sub_array[] = $row->company;
                $sub_array[] = $row->order_date;
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*',$table,$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }

      public function getExamReqList(){
        $column_order = array();
            $column_search = array();
            $where = array('apply_for_eaxm'=>1);
            $table = 'order_detail';
            $select = 'id,apply_date,,
            (SELECT title FROM tbl_course WHERE tbl_course.id = order_detail.product_id LIMIT 1)AS p_title,
            (SELECT name FROM tbl_user WHERE tbl_user.id = order_detail.user_id LIMIT 1)AS name';
            $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row)
            {
                $sub_array = array();
                $sub_array[] = $row->name;
                $sub_array[] = $row->p_title;
                $sub_array[] = $row->apply_date;
                $sub_array[] = '<button id="'.$row->id.'"  class="btn btn-primary approve" title="Approve" "><i class="fas fa-check-circle"></i></button>';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*',$table,$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }

      public  function getLiveClass(){
          $column_order = array();
            $column_search = array();
            $where = array('course_id'=>$_GET['id']);
            $table = 'tbl_live_classes';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row){
                $sub_array = array();
                $sub_array[] = $row->name;
                $sub_array[] = $row->state_date;
                $sub_array[] = $row->end_date;
                $sub_array[] = '<a id="'.$row->id.'" href="'.base_url().'Adminpanel/Adminpanel/delete_liveClass?id='.$row->id.'"  class="btn btn-danger" title="Delete" "><i class="fas fa-trash"></i></a>  <a id="'.$row->id.'" href="'.$row->presenter_url.'" target="_blank"  class="btn btn-primary" title="Host This Class" "><i class="fas fa-video"></i></a>';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*',$table,$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }


      public  function getCategory(){
          $column_order = array('category','module');
            $column_search = array('category','module');
            $where = array('id !='=>0);
            $table = 'tbl_course_cat';
            $getData = $this->DTM->make_datatables('*',$table,$where,$column_order,$column_search);
            $data = array();
            foreach($getData as $row){
                $sub_array = array();
                $sub_array[] = $row->category;
                $sub_array[] = $row->module;
                $sub_array[] = $row->created_at;
                $sub_array[] = '<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>'.' '.'<button class="btn btn-primary update" title="Edit" category="'.$row->category.'" module="'.$row->module.'" id="'.$row->id.'"><i class="fas fa-edit"></i></button> ';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data('*',$table,$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
      }

      public function getTabBarList(){
        $column_order = array(null,'title1','title2','image','videoUrl');
        $column_search = array('title1','title2','image','videoUrl');
        $c_id=$_GET['id'];
        $where = array('course_id'=>$c_id);
        $table = 'course_tabbar';
        $select='*';
        $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
        $data = array();
        foreach(array_reverse($getData) as $row){
            $sub_array = array();
            // $sub_array[] = '<a href="'.base_url().'Adminpanel/Adminpanel/tabBarDetail?id='.$row->id.'">'.$row->title1;
            $sub_array[] = $row->title1;
            $sub_array[] = $row->title2;
            $sub_array[] = '<img src="'.base_url().'uploads/curriculum_pdf/'.$row->image.'" style="height:70px;width:70px">';
            $sub_array[] = "<button title='Edit'  class='btn btn-teal edit update' id='".$row->id."' title1='".$row->title1."' title2='".$row->title2."' videoUrl='".$row->videoUrl."'><i class='fas fa-edit'></i></button>".' '.'<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';

            $data[] = $sub_array;
        }
        $output = array(
            "draw"                    =>     intval($_POST["draw"]),
            "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
            "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','course_tabbar',$where,$column_order,$column_search),
            "data"                    =>     $data
        );
        echo json_encode($output);
      }


      public function getTabBarDetail(){
        $column_order = array(null,'title','detail');
        $column_search = array('title','detail');
        $c_id=$_GET['id'];
        $where = array('tabBarId'=>$c_id);
        $table = 'course_tabbar_detail';
        $select='*';
        $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
        $data = array();
        foreach(array_reverse($getData) as $row){
            $sub_array = array();
            $sub_array[] = $row->title;
            $sub_array[] = $row->detail;
            $sub_array[] = '<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> ';

            $data[] = $sub_array;
        }
        $output = array(
            "draw"                    =>     intval($_POST["draw"]),
            "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
            "recordsFiltered"     =>     $this->DTM->get_filtered_data('*','course_tabbar_detail',$where,$column_order,$column_search),
            "data"                    =>     $data
        );
        echo json_encode($output);
      }


      public function getCourseReviewList(){
        $column_order = array(null,'title','title2','detail');
        $column_search = array('title','title2','detail');
        $c_id=$_GET['id'];
        $where = array('course_id'=>$c_id);
        $table = 'tbl_course_review';
        $select='*';
        $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
        $data = array();
        foreach(array_reverse($getData) as $row){
            $sub_array = array();
            $sub_array[] = $row->title;
            $sub_array[] = $row->title2;
            $sub_array[] = '<img src="'.base_url().'uploads/curriculum_pdf/'.$row->image.'" style="height:70px;width:70px">';
            $sub_array[] = '<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> '.' '.'<button class="btn btn-primary update" title="'.$row->title.'" title2="'.$row->title2.'" detail="'.$row->detail.'" id="'.$row->id.'"><i class="fas fa-edit"></i></button> ';

            $data[] = $sub_array;
        }
        $output = array(
            "draw"                    =>     intval($_POST["draw"]),
            "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
            "recordsFiltered"     =>     $this->DTM->get_filtered_data('*',$table,$where,$column_order,$column_search),
            "data"                    =>     $data
        );
        echo json_encode($output);
    }

    public function getTechnologies(){
        $column_order = array(null,'title','comment');
        $column_search = array('title','comment');
        $where = array('id !='=>0);
        $table = 'tbl_technology';
        $select='*';
        $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
        $data = array();
        foreach(array_reverse($getData) as $row){
            $sub_array = array();
            $sub_array[] = $row->title;
            $sub_array[] = $row->comment;
            $sub_array[] = '<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button> '.' '.'<button class="btn btn-primary update" title="'.$row->title.'" comment="'.$row->comment.'" id="'.$row->id.'"><i class="fas fa-edit"></i></button> ';
            $data[] = $sub_array;
        }
        $output = array(
            "draw"                    =>     intval($_POST["draw"]),
            "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
            "recordsFiltered"     =>     $this->DTM->get_filtered_data('*',$table,$where,$column_order,$column_search),
            "data"                    =>     $data
        );
        echo json_encode($output);
    }

    public function getCommentList(){
        $column_order = array(null,);
            $column_search = array();
            $where = array('tbl_blog_comment.id !='=>0,);
            $table = 'tbl_blog_comment';
            $join = array('tbl_home_content','tbl_user');
            $jWhere = array('tbl_home_content.id = tbl_blog_comment.blog_id','tbl_user.id = tbl_blog_comment.user_id');
            $grpBy = 'tbl_blog_comment.id';
            $select = 'tbl_blog_comment.*,tbl_home_content.title1,tbl_user.name';
            /*$select = '*,(SELECT name FROM tbl_user WHERE tbl_user.id = tbl_blog_comment.user_id LIMIT 1)AS name,
            (SELECT title1 FROM tbl_home_content WHERE tbl_home_content.id = tbl_blog_comment.blog_id LIMIT 1)AS title1,';*/
            $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search,$join,$jWhere,$grpBy);
            $data = array();
            foreach(array_reverse($getData) as $row){
                $btn = '';
                if($row->status == '1'){
                    $btn = '<a href="javascript:void(0)" status="0" id="'.$row->id.'" class="change-blog-status" style="color:red">hide</a>';
                }else{
                    $btn = '<a href="javascript:void(0)" status="1" id="'.$row->id.'" class="change-blog-status">show</a>';
                }
                $sub_array = array();
                $sub_array[] = $row->name;
                $sub_array[] = '<a target="_blank" href="'.base_url().'Edu-Blog/'.$this->encrypt_id->encryptor('encrypt',$row->blog_id).'" >'.$row->title1.'</a>';
                $sub_array[] = $row->type;
                $sub_array[] = $row->created_at;
                $sub_array[] = $btn.' '.' &nbsp;&nbsp;&nbsp;<button class="btn btn-danger delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>';
                $sub_array[] = $row->comment;
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data($select,$table,$where,$column_order,$column_search,$join,$jWhere,$grpBy),
                "data"                    =>     $data
            );
            echo json_encode($output);
    }

    public function getCorporateList(){
        $column_order = array(null,'name','email','message','contact','created_at');
            $column_search = array('name','email','message','contact','created_at');
            $where = array('id !='=>0,);
            $table = 'corporate_inq';
            $select = '*';
            $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
            $data = array();
            foreach(array_reverse($getData) as $row){
                $sub_array = array();
                $sub_array[] = $row->name;
                $sub_array[] = $row->email;
                $sub_array[] = $row->contact;
                $sub_array[] = $row->train_for;
                $sub_array[] = $row->message;
                $sub_array[] = $row->created_at;
                $sub_array[] = '<button class="btn btn-danger delete-delete-delete" title="Delete" id="'.$row->id.'"><i class="fas fa-trash"></i></button>';
                $data[] = $sub_array;
            }
            $output = array(
                "draw"                    =>     intval($_POST["draw"]),
                "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
                "recordsFiltered"     =>     $this->DTM->get_filtered_data($select,$table,$where,$column_order,$column_search),
                "data"                    =>     $data
            );
            echo json_encode($output);
    }


    function getCertificate(){
        $column_order = array(null);
        $column_search = array();
        $where = array('complete'=>2);
        $table = 'order_detail';
        $select = '*,
        (SELECT title FROM tbl_course WHERE tbl_course.id = order_detail.product_id LIMIT 1)AS course_name,
        (SELECT name FROM tbl_user WHERE tbl_user.id = order_detail.user_id LIMIT 1)AS name,';
        $getData = $this->DTM->make_datatables($select,$table,$where,$column_order,$column_search);
        $data = array();
        foreach(array_reverse($getData) as $row){
            $sub_array = array();
            $sub_array[] = $row->name;
            $sub_array[] = $row->course_name;
            $sub_array[] = $row->complete_assesment;
            $sub_array[] = $row->complete_video;
            $sub_array[] = '<button class="btn btn-danger approve-approve" title="Approve" id="'.$row->id.'">approve</button>';
            $data[] = $sub_array;
        }
        $output = array(
            "draw"                    =>     intval($_POST["draw"]),
            "recordsTotal"          =>      $this->DTM->get_all_data($table,$where),
            "recordsFiltered"     =>     $this->DTM->get_filtered_data($select,$table,$where,$column_order,$column_search),
            "data"                    =>     $data
        );
        echo json_encode($output);
    }
}
