<?php
class Api_model extends CI_Model {
	
    public function __construct()
	{
	$this->load->database();
	}


    function sum($table,$where)
    {
        $this->db->select_sum('fianl_price');
        $this->db->where($where);
        $query = $this->db->get($table);
        return $query->result();
    }

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
            return $query->result();
        }else{
            return false;
        }
    }
		public function fetch_record_orderby($table,$orderby)
        {
            $this->db->select("*");
            if($orderby !='')
            {
                $this->db->order_by($orderby,'DESC');
            }
            $data = $this->db->get($table);
            $get_data = $data->result();
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
            $get_data = $data->result();
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
            $get_data = $data->result();
            if($get_data)
            {
                return $get_data;
            }
            else
            {
                return false;
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

     public function get_select_where($select,$table,$where,$order_by){
        if (!empty($order_by)) {
            $this->db->order_by('id',$order_by);
        }
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

    public function exist_event_time($where){
        $this->db->select('start,end,hall');
        $this->db->from('booking');
        $this->db->where($where);
        $query = $this->db->get();
        if ($query) {
           return $query->result();
        }else{
            return false;
        }

    }

 #---------- server side datatable  with custom filter  end     -----------


	
}  