<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class User_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function login_function($username,$pass){
      $this->db->select('*');
      $this->db->from('tbl_user');
      $this->db->where('email',$username);
       $this->db->where('password',$pass);
      // $this->db->or_where('contact',$username);
     
      $query = $this->db->get();
      if ($query->num_rows() == 1) {
        return $query->row();
      }else{
        return false; 
      }
    }

    public function getSelectRow($select,$table,$where){
    	$this->db->select($select);
    	$this->db->where($where);
    	$query = $this->db->get($table);
    	if($query){
    		return $query->row();
    	}else{
    		return false;
    	}
    }

    public function get_currency(){
    	$result = $this->db->select('conversion_rates')->where('id',1)->get('allcurrency')->row('conversion_rates');
    	if ($result) {
    		return json_decode($result);
    	}else{
    		return false;
    	}
    }

    public function year_event_count($where){
    	$this->db->select('id');
    	$this->db->from('booking');
    	$this->db->where($where);
       	$query = $this->db->get();
      if ($query) {
        return $query->num_rows();
      }else{
        return false; 
      }
    }
     public function year_event_count2($where){
    	$this->db->select('SUM(finalprice) as sumofamt');
    	$this->db->from('booking');
    	$this->db->where($where);
       	$query = $this->db->get();
      if ($query) {
        return $query->row();
      }else{
        return false; 
      }
    }

      public function year_event_count3($where){
    	$this->db->select('finalprice,start');
    	$this->db->where($where);
       	$this->db->from('booking');
       	$query = $this->db->get();
      if ($query) {
        return $query->row();
      }else{
        return false; 
      }
    }

    public function year_feedback_avg($where,$data){
    	$this->db->select('AVG('.$data.') as avg,SUM('.$data.') AS sm,COUNT('.$data.') AS tt');
    	$this->db->from('booking');
    	$this->db->where($where);
       	$query = $this->db->get();
      if ($query) {
        return $query->row();
      }else{
        return false; 
      }
    }

	public function insert_data($table,$data){
		$query = $this->db->insert($table,$data);
		if ($query) {
			// return true;
			return  $this->db->insert_id(); 
		}else{
			return false;
		}
	}
	public function insertData($table,$data){
		$query = $this->db->insert($table,$data);
		if ($query) {
			// return true;
			return  true; 
		}else{
			return false;
		}
	}

	public function insert_array($table,$data){
		$query = $this->db->insert_batch($table,$data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}
	public function get_all_for_index_slider($select,$table,$where){
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		if ($query){
			return $query->result();
		}else{
			return false;
	    }
    }
    public function get_all_for_index($select,$table,$limit){
		$this->db->select($select);
		$this->db->from($table);
		$this->db->limit($limit);
		
		
		$query = $this->db->get();
		if ($query){
			return $query->result();
		}else{
			return false;
	    }
    }
    public function get_all_for_index2($select,$table){
		$this->db->select($select);
		$this->db->from($table);
		$query = $this->db->get();
		if ($query){
			return $query->result();
		}else{
			return false;
	    }
    }

    public function joint_two_table($id){
    	$this->db->select('booking.start,booking.booking_no,booking.event_name,booking.hall,booking.name,added_vendor.v_name,added_vendor.job_role,added_vendor.vendor_type');
       $this->db->from('booking');
       $this->db->join('added_vendor', 'booking.id = added_vendor.booking_id');
       $this->db->where('booking.id', $id);

$query = $this->db->get();
    	return $query->result();

    }

    public function search_courses($link){
    	$this->db->select('*');
    	$this->db->like('title',$link);
    	$this->db->from('tbl_course');
		$query = $this->db->get();
		if ($query){
			return $query->result();
		}else{
			return false;
	    }
    }


	public function get_all_where($select,$table,$where,$order_by,$limit){

		if (!empty($order_by)) {
			$this->db->order_by('id',$order_by);
		}
		if (!empty($limit)) {
			$this->db->limit($limit);
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
	public function get_single_where($select,$table,$where,$order_by,$limit){

		if (!empty($order_by)) {
			$this->db->order_by('id',$order_by);
		}
		if (!empty($limit)) {
			$this->db->limit($limit);
		}
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		if ($query) {
			return $query->row_array();
		}else{
			return false;
		}
	}

	public function get_all_where2($select,$table,$where,$order_by,$limit){

		if (!empty($order_by)) {
			$this->db->order_by('status',$order_by);
		}
		if (!empty($limit)) {
			$this->db->limit($limit);
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

	


	public function get_all_where_object($select,$table,$where,$order_by,$limit){

		if (!empty($order_by)) {
			$this->db->order_by('id',$order_by);
		}
		if (!empty($limit)) {
			$this->db->limit($limit);
		}
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		if ($query) {
			return $query->row()->price;
		}else{
			return false;
		}
	}

	public function get_all_where_object2($select,$table,$where,$order_by,$limit){

		if (!empty($order_by)) {
			$this->db->order_by('id',$order_by);
		}
		if (!empty($limit)) {
			$this->db->limit($limit);
		}
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		if ($query) {
			$result = $query->result();
		if (!empty($result)) {
			for ($i=0; $i < count($result); $i++) { 
			   $row[] = $result[$i]->amt;
			}
		  }else{
		  	$row = 0;
		  }	
			return $row;
		}else{
			return false;
		}
	}
	public function get_all_where_pro($select,$table){

    return $this->db->get()->row()->mrp;

	}
	
	public function get_all_where_filt($minpr,$maxpr,$p_sellprice){
        
      	$this->db->select('*');
		$this->db->from('product_detail11');
		$this->db->where("$p_sellprice BETWEEN $maxpr AND $minpr");
		$this->db->order_by("p_sellprice","desc");
		$query = $this->db->get();
		if ($query) {
			return $query->result_array();
		}else{
			return false;
		}
	}
	public function get_popu_pro(){
        
      	$this->db->select('*');
		$this->db->from('product_detail11');
		$this->db->where(['popu_status'=>1]);
		$this->db->order_by("id","desc");
		$query = $this->db->get();
		if ($query) {
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function get_all_no_where($select,$table,$order_by){
		if (!empty($order_by)) {
			$this->db->order_by('id',$order_by);
		}
		$this->db->select($select);
		$this->db->from($table);
		$query = $this->db->get();
		if ($query) {
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function update_data($set,$where,$table){
		$this->db->set($set);
		$this->db->where($where);
		$query = $this->db->update($table);
		if ($query) {
			$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$query1 = $this->db->get();
		$total= $query1->row();
		return $total;
		}else{
			return false;
		}
	}

	public function delete_data($table,$where){
		$this->db->where($where);
		$query = $this->db->delete($table);
			if ($query) {
				return true;
			}else{
				return false;
			}
	}

	public function get_onetable_join($select,$table,$j_table,$join,$where,$order_by,$limit,$grp=""){
		if (!empty($order_by)) {
			$this->db->order_by('id',$order_by);
		}
		if (!empty($limit)) {
			$this->db->limit($limit);
		}

		if (!empty($grp)) {
			$this->db->group_by($grp);
		}
		$this->db->select($select);
		$this->db->from($table);
		$this->db->join($j_table,$join,'LEFT');
		$this->db->where($where);
		$query = $this->db->get();
		if ($query) {
			return $query->result();
		}else{
			return false;
		}

	}

	public function get_random_product($select,$table,$where,$limit){
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->order_by('rand()');
	    $this->db->limit($limit);
	    $query = $this->db->get();
	      if ($query) {
	    	return $query->result_array();
	      }else{
	      	return false;
	      }

	}

	public function get_count_where($table,$where){
		$this->db->select('COUNT(id) AS cnt');
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		if ($query) {
			return $query->row();
		}else{
			return false;
		}
	}
    
    public function get_count_where_id($table,$where){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		if ($query) {
			return $query->num_rows();
		}else{
			return false;
		}
	}

	public function insert_update_data($select,$table,$where,$set,$data){
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			$this->db->set($set);
			$this->db->where($where);
			$query1 = $this->db->update($table);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}else{
			$query2 = $this->db->insert($table,$data);
			if ($query2) {
				return true;
			}else{
				return false;
			}
		}
	}

	public function insert_update_data1($select,$table,$where,$data){
		
			$query2 = $this->db->insert($table,$data);
			if ($query2) {
				return true;
			}else{
				return false;
			}
		
	}

	public function get_sum_of_and_cnt($select,$table,$where){
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		if ($query) {
			return $query->result();
		}else{
			return false;
		}
	}
   

     public function getSelectWhereRow($select,$table,$where,$order_by,$orwhere=""){
     	$this->db->select($select);
     	$this->db->where($where);
     	if(!empty($orwhere)){
     		$this->db->or_where($orwhere);
     	}
     	$this->db->order_by('id',$order_by);
     	$query = $this->db->get($table);
     	if ($query->num_rows() >= 1) {
     		return $query->row();
     	}else{
     		return false;
     	}
     }

     public function getSelectResult($select,$table,$where){
		$this->db->select($select);
		$this->db->where($where);
		$query = $this->db->get($table);
		if ($table) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function getJoinData($select,$table,$where,$join,$jointbl,$limit=""){
		$this->db->select($select);
		$this->db->from($table);
		$i=0;
		foreach($join as $j){
			$this->db->join($j,$jointbl[$i],'LEFT');
		$i++;}
		$this->db->where($where);
		if(!empty($limit)){
			$this->db->limit($limit);
		}
		$this->db->order_by($table.'.id','DESC');
		$query = $this->db->get();
		if ($query) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function getLikeData($select,$table,$col,$key){
		$this->db->select($select);
		$this->db->like($col,$key);
		$query = $this->db->get($table);
		if ($query) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function profileCompleted($id){
        $percentage = 0;
        $sql ="SELECT * FROM tbl_user WHERE id=$id";
       	$query = $this->db->query($sql);
      	if ($query->num_rows() > 0){ 
            $notEmpty =   0;
            $totalField =16;
            foreach ($query->result() as $row){
               $notEmpty +=  ($row->name != '') ? 1 : 0;
               $notEmpty +=  ($row->email != '') ? 1 : 0;
               $notEmpty +=  ($row->contact != '') ? 1 : 0;
               $notEmpty +=  ($row->orgName != '') ? 1 : 0;
               $notEmpty +=  ($row->company != '') ? 1 : 0;
               $notEmpty +=  ($row->department != '') ? 1 : 0;
               $notEmpty +=  ($row->location != '') ? 1 : 0;
               $notEmpty +=  ($row->timeZone != '') ? 1 : 0;
               $notEmpty +=  ($row->dob != '') ? 1 : 0;
               $notEmpty +=  ($row->gender != '') ? 1 : 0;
               $notEmpty +=  ($row->image != '') ? 1 : 0;
               $notEmpty +=  ($row->designation != '') ? 1 : 0;
               $notEmpty +=  ($row->qualification != '') ? 1 : 0;
               $notEmpty +=  ($row->college_School != '') ? 1 : 0;
               $notEmpty +=  ($row->specialization != '') ? 1 : 0;
               $notEmpty +=  ($row->add != '') ? 1 : 0;
              }
          $percentage = $notEmpty/$totalField *100;
          }
        return round($percentage);	
    }

}
?>