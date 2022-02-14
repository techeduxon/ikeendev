<?php
class Frontend_model extends CI_Model {
	public function __construct()
	{
	$this->load->database();
	}

	function fetch_states()
	{
	  $this->db->where("country_id", "101");
	  $this->db->order_by("name", "ASC");
	  $query = $this->db->get("states");
	  return $query->result();
	}

    function sum($table,$where)
    {
        $this->db->select_sum('fianl_price');
        $this->db->where($where);
        $query = $this->db->get($table);
        return $query->result();
    }

    function last_payment_id(){
        $this->db->select('id');
        $this->db->limit(1);
        $this->db->orderby('id','DESC');
        $query = $this->db->get('booking');
        return $query->row();
    }

	function fetch_city($state_id)
	 {
	  $this->db->where('state_id', $state_id);
	  $this->db->order_by('name', 'ASC');
	  $query = $this->db->get('cities');
	  $output = '<option value="">Select City</option>';
	  foreach($query->result() as $row)
	  {
	   $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
	  }
	  return $output;
	 }

     function fetch_result($keyword)
     {
      $this->db->select('id,product_name');   
      $this->db->where("product_name LIKE '%$keyword%'");
      $query = $this->db->get('products');
      $output = "";
      foreach($query->result() as $row)
      { 
        $output .= '<li><a href="'.base_url().'Post-Details/'.$this->encrypt_id->encryptor('encrypt',$row->id).'">'.$row->product_name.'</a></li>';
      }
      return $output;
     }

	 function fetch_subcategorybycat_id($state_id)
	 {	
		  $this->db->where('state_id', $state_id);
		  $this->db->order_by('name', 'ASC');
		  $query = $this->db->get('cities');
		  $output = '<option value="abc">Select City</option>';
		  foreach($query->result() as $row)
		  {
		   $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
		  }
		  return $output;
	 }

	  function fetch_exam_subcategorybycat_id($cat_id)
	 {	
		  $this->db->where('exam_category_id', $cat_id);
		  $this->db->order_by('id', 'ASC');
		  $query = $this->db->get('exam_subcategory');
		  $output = '<option value="" >Select Exam Subcategory</option>';
		  foreach($query->result() as $row)
		  {
		   $output .= '<option value="'.$row->id.'">'.$row->subcategory.'</option>';
		  }
		  return $output;
	 }
	 


	function fetch_cities($state_id)
	 {
		  $this->db->where('state_id', $state_id);
		  $this->db->order_by('name', 'ASC');
		  $query = $this->db->get('cities');
		  $output = '<option value="">Select City</option>';
		  foreach($query->result() as $row)
		  {
		   $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
		  }
		  return $output;
	 }

	 function country_name($country_id='')
	 {
	 	$this->db->where('id',$country_id);
	 	return $this->db->get('countries')->row()->name;
	 }

	  function state_name($state_id='')
	 {
	 	$this->db->where('id',$state_id);
	 	return $this->db->get('states')->row()->name;
	 } 

	  function city_name($city_id='')
	 {
	 	$this->db->where('id',$city_id);
	 	return $this->db->get('cities')->row()->name;
	 }

// *************************START DYNAMIC CRUD*************
		 	// function for insert record start
	public function insert_data($table,$data)
	{
		$que = $this->db->insert_string($table,$data);
		$this->db->query($que);
		$id=$this->db->insert_id();
		if($id) { return $id; } else { return false; }
	}
	// function for insert record end
    public function insert_batch($table,$data)
    {
          $this->db->insert_batch($table, $data);

    }
      public function table_truncate($table)
    {
          $query = $this->db->truncate($table);
          if($query) { return true; } else { return false; }
    }
    
	// function for update record start 
	public function update_data($table,$data,$where)
	{
		$this->db->where($where);
		$rs=$this->db->update($table,$data);
		if($rs) { return true; } else { return false; } 
	}
	// function for update record end

	// function for delete record  start
	public function delete_data($table,$where)
	{
		$rs=$this->db->delete($table,$where);
		if($rs) { return true; } else { return false; } 
	}
	// function for delete record end 

	// function for single record start
	public function fetch_condrecordwithfield($tbname,$data,$fname)
	{
		$this->db->where($data);
		$this->db->select($fname);
		$query = $this->db->get($tbname);
		if($query->num_rows() > 0)
		{
			$row = $query->row();
			return $row;
		}
		else { return false; }
	}
	// function for single record end

	// function all records  start

		public function fetch_record_orderby($table,$orderby)
        {
            $this->db->select("*");
            if($orderby !='')
            {
                $this->db->order_by($orderby,'DESC');
            }
            $data = $this->db->get($table);
            $get_data = $data->result_array();
            if($get_data)
            {
                return $get_data;
            }
            else
            {
                return false;
            }
        }
// ************************ Fetch all records with wher condition  Start*********************
    	public function fetch_allrecord_wherecondition($table,$orderby,$where,$select)
        {
            if($orderby !='')
            {
                $this->db->order_by($orderby,'DESC');
            }
            $this->db->select($select);
            if($where !='')
            {
                $this->db->where($where);
            }
            $data = $this->db->get($table);
            $get_data = $data->result_array();
            if($get_data)
            {
                return $get_data;
            }
            else
            {
                return false;
            }
        }

        public function fetch_allrecord_wherecondition_limit($table,$orderby,$where,$select)
        {
            if($orderby !='')
            {
                $this->db->order_by($orderby,'ASC');
            }
            $this->db->select($select);
            $this->db->limit(1, 0);
            $this->db->where($where);
            $data = $this->db->get($table);
            $get_data = $data->result_array();
            if($get_data)
            {
                return $get_data;
            }
            else
            {
                return false;
            }
        }

        function check_couper_availability($table,$where,$select)
        {
        	$this->db->select($select);
        	$this->db->where($where);
        	return $this->db->get($table)->result();
        }

        // ************************ Fetch all records with wher condition End *********************

	// function all records  end

        function update_video_count($table,$where)
        {
			$this->db->set('number_of_view_count', 'number_of_view_count+1', FALSE);
			$this->db->where($where);
			$rs=$this->db->update($table);
			if($rs) { return true; } else { return false; } 
        }	

        function count_data($table = '',$where = '')
        {
			$this->db->from($table);
            $this->db->from($where);
			$num_results = $this->db->count_all_results();
			return $num_results;
        }

     

        public function get_video_by_iframeID($id,$table,$where){
        	$this->db->select('*');
        	$this->db->from($table);
        	$this->db->where($where);
        	$query = $this->db->get();
        	if ($query) {
        		return $query->result();
        	}else{
        		return false;
        	}
        }

// **********************************************START DYNAMIC CRUD**************************************************************//
	
	/* ************* get all data as where class *************** */	
	function getwhere($table,$where)
	{
		$this->db->where($where);
		$data = $this->db->get($table); 
		$get = $data->result();
		if($get){
			return $get;
		}else{
			return FALSE;
		}
	}

	public function fetch_join_records($firsttb,$secondtp,$fname,$sname,$wherefield,$val,$select)
	{
	    $this->db->select($select);
		$this->db->from($firsttb);
		$this->db->join($secondtp, "$secondtp.$sname = $firsttb.$fname"); 
		$this->db->where("$firsttb.$wherefield", $val);
		$query = $this->db->get();
		if($query)
		{
			return $query->result();
		}else
		{
			return false;
		}
	}
    public function fetch_join_records1($firsttb,$secondtp,$fname,$sname,$where,$select)
    {
        $this->db->select($select);
        $this->db->from($firsttb);
        $this->db->join($secondtp, "$secondtp.$sname = $firsttb.$fname"); 
        $this->db->where($where);
        $query = $this->db->get();
        if($query)
        {
            return $query->result();
        }else
        {
            return false;
        }
    }


	#--------------------- SERVER SIDE DATA TABLE PROCESSING FETCH  JOIN RECORDS FROM  TWO TABLES START -----------------------

	#---------------server side datatable --------------------
	// var $table = 'fsdsdsas232';
 //    var $column_order = array('id', 'date','fbfgbfdf','ssrsrsf','email_id','jkjjmhjmhj','asasasasas','visited_from'); //set column field database for datatable orderable
 //    var $column_search = array('date','fbfgbfdf','ssrsrsf','email_id','jkjjmhjmhj','asasasasas','visited_from'); //set column field database for datatable searchable 
 //    var $order = array('id' => 'DESC'); // default order 
 
 
 
    private function _get_datatables_query($table1, $table2, $column_order, $column_search,$field1 , $field2 ,$order_by,$select)
    {
        //add custom filter here
        $this->db->select($select);
        if($this->input->post('visited_from'))
        {
            $this->db->where('visited_from', $this->input->post('visited_from'));
        }
         
        $this->db->from($table1);
        $this->db->join($table2,"$table2.$field2=$table1.$field1");
    	// $this->db->join($secondtp, "$secondtp.$sname = $firsttb.$fname"); 

        $i = 0;
        foreach ($column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($order_by))
        {
            $order = $order_by;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function last_status($table,$where){
       $this->db->select("f_status");
       $this->db->where($where);
       $this->db->from($table);
       $this->db->limit(1);
       $this->db->order_by('id',"DESC");
       $query = $this->db->get();
       return $query->row();
   }

   public function fetch_state_id($keyword){
        $this->db->select('id');
        $this->db->from('states');
        $this->db->where("name LIKE '%$keyword%'");
        $query = $this->db->get();
        if($query)
        {
            return $query->row();
        }else
        {
            return false;
        }

   }

    public function fetch_city_id($keyword){
        $this->db->select('id');
        $this->db->from('cities');
        // $this->db->where("name LIKE '%$keyword%'");
        $this->db->like('name',$keyword);
        $query = $this->db->get();
        if($query)
        {
            return $query->row();
        }else
        {
            return false;
        }

   }
 
    public function get_datatables($table1 = '', $table2='', $column_order='', $column_search='',$field1='' , $field2='' ,$order_by='',$select = '')
    {
        $this->_get_datatables_query($table1, $table2, $column_order, $column_search,$field1 , $field2 ,$order_by,$select);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    public function count_filtered($table1 = '', $table2='', $column_order='', $column_search='',$field1='' , $field2='' ,$order_by='',$select='')
    {
        $this->_get_datatables_query($table1, $table2, $column_order, $column_search,$field1 , $field2 ,$order_by,$select);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all($table1='', $where = '')
    {
        $this->db->from($table1);
        if (!empty($where)) {
          $this->db->where($where);
        }
        return $this->db->count_all_results();
    }

	#--------------------- SERVER SIDE DATA TABLE PROCESSING FETCH  JOIN RECORDS FROM  TWO TABLES END -------------------------


    private function _get_datatables_query_threetables($table1, $table2,$table3 , $column_order, $column_search,$field1 , $field2,$field3 ,$order_by,$select)
    {
        //add custom filter here
        $this->db->select($select);
        if($this->input->post('visited_from'))
        {
            $this->db->where('visited_from', $this->input->post('visited_from'));
        }
        if($this->input->post('category'))
            {
                $this->db->where('cat_id', $this->input->post('category'));
            }

            if($this->input->post('subcategory'))
            {
                if($this->input->post('subcategory') != 'abc')
                {
                    $this->db->where('sub_cat_id', $this->input->post('subcategory'));
                }
            }

        $this->db->from($table1);
        $this->db->join($table2,"$table2.$field1=$table1.$field2");
        $this->db->join($table3,"$table3.$field1=$table1.$field3");
    	// $this->db->join($secondtp, "$secondtp.$sname = $firsttb.$fname"); 
        $i = 0;
        foreach ($column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($order_by))
        {
            $order = $order_by;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    public function get_datatables_threetables($table1='', $table2='',$table3='', $column_order='', $column_search='',$field1='' , $field2='',$field3='' ,$order_by='',$select='')
    {
        $this->_get_datatables_query_threetables($table1, $table2,$table3 ,$column_order, $column_search,$field1 , $field2,$field3 ,$order_by,$select);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    public function count_filtered_threetables($table1='', $table2='',$table3='', $column_order='', $column_search='',$field1='' , $field2='',$field3='' ,$order_by='',$select='')
    {
        $this->_get_datatables_query_threetables($table1, $table2,$table3, $column_order, $column_search,$field1 , $field2,$field3 ,$order_by,$select);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all_threetables($table1='')
    {
        $this->db->from($table1);
        return $this->db->count_all_results();
    }


    function fetch_jointhreetblwithwhere($tbl1,$tbl2,$tbl3,$fld1 , $fld2 , $fld3 , $where,$select)
    {
      $this->db->select($select);
        $this->db->where($where);
        $this->db->from($tbl1);
        $this->db->join($tbl2,"$tbl2.$fld1=$tbl1.$fld2");
        $this->db->join($tbl3,"$tbl3.$fld1=$tbl1.$fld3");
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $row = $query->row();
            return $row;
        }
        else { return false; }
    }

     function fetch_jointhreetblwithwhere1($tbl1,$tbl2,$tbl3,$fld1 , $fld2 , $fld3 , $where,$select)
    {
      $this->db->select($select);
        $this->db->where($where);
        $this->db->from($tbl1);
        $this->db->join($tbl2,"$tbl2.$fld1=$tbl1.$fld2");
        $this->db->join($tbl3,"$tbl3.$fld1=$tbl1.$fld3");
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $row = $query->row();
            return $row;
        }
        else { return false; }
    }


     function fetch_paper_setbyp_id($p_id)
     {  
          $this->db->where('exam_product_id', $p_id);
          $this->db->order_by('id', 'ASC');
          $query = $this->db->get('exam_paper_set');
          $output = '<option value="">Select Exam Paper Set</option>';
          foreach($query->result() as $row)
          {
           $output .= '<option value="'.$row->id.'">'.$row->paper_set.'</option>';
          }
          return $output;
     }

 #---------- server side datatable  with custom filter  start  ------------

    private function _get_datatables_query1($table , $column_order , $column_search , $order,$where,$select,$orwhere){
        //add custom filter here
            $this->db->select($select);

           
            if(!empty($this->input->post('f_status2'))){
                $this->db->where('f_status', $this->input->post('f_status2'));
            }else if(!empty($where)){
                $this->db->where($where);
            }


            if(!empty($this->input->post('hall'))){
                $this->db->where('hall', $this->input->post('hall'));
            }else if(!empty($where)){
                $this->db->where($where);
            }

             if(!empty($this->input->post('from_date'))){
                $this->db->where('start >=',date('Y-m-d',strtotime(str_replace('/', '-', $this->input->post('from_date')))) );
            }

            if(!empty($this->input->post('to_date'))){
                $this->db->where('start <=',date('Y-m-d',strtotime(str_replace('/', '-', $this->input->post('to_date')))) );
            }
          

             if(!empty($this->input->post('from_date2'))){
                $this->db->where('created >=',date('Y-m-d',strtotime(str_replace('/', '-', $this->input->post('from_date2')))) );
            }

            if(!empty($this->input->post('to_date2'))){
                $this->db->where('created <=',date('Y-m-d',strtotime(str_replace('/', '-', $this->input->post('to_date2')))) );
            }


            if(!empty($this->input->post('payment_s'))){
                $this->db->where('payment_status',$this->input->post('payment_s'));
            }

              if(!empty($this->input->post('filter_job'))){
                $this->db->where('job_roles_id',$this->input->post('filter_job'));
            }

            if(!empty($this->input->post('booking_no'))){
                $this->db->where('booking_no',$this->input->post('booking_no'));
            }

            if(!empty($this->input->post('invoice_no'))){
                $this->db->where('invoice',$this->input->post('invoice_no'));
            }


             if(!empty($this->input->post('mode'))){
                $this->db->where('mode',$this->input->post('mode'));
            }

             if(!empty($this->input->post('type'))){
                $this->db->where('type',$this->input->post('type'));
            }
           
            
 
        $this->db->from($table);
        $i = 0;
     
        foreach ($column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(!empty($_POST['arrang'])) // here order processing
        {   
            $this->db->order_by('name',$_POST['arrang']);
            // $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }else if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($order))
        {
            $order = $order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    public function get_datatables1($table='' , $column_order='' , $column_search='' , $order='' ,  $where='',$select ='', $orwhere='')
    {
        $this->_get_datatables_query1($table , $column_order , $column_search , $order  , $where,$select,$orwhere);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    public function count_filtered1($table='' , $column_order='' , $column_search='' , $order='',$where='',$select='')
    {
        $this->_get_datatables_query1($table , $column_order , $column_search , $order,$where,$select,$where);
        // $this->db->where($where);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all1($table = '',$where='')
    {
        if(!empty($where)){
            $this->db->where($where);
        }
        $this->db->from($table);
        return $this->db->count_all_results();
    }

     public function get_select_where($select,$table,$where,$order_by){
        if (!empty($order_by)) {
            $this->db->order_by('id',$order_by);
        }
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query) {
            return $query->result_array();
        }else{
            return false;
        }
    }

    public function exist_event_time($where){
        $this->db->select('start,end,hall');
        $this->db->from('booking');
        $this->db->where($where);
        $query = $this->db->get();
        if ($query) {
           return $query->result_array();
        }else{
            return false;
        }

    }

 #---------- server side datatable  with custom filter  end     -----------


	
}  