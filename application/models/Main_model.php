<?php
class Main_model extends CI_Model {
	public function __construct()
	{
	$this->load->database();
	}
// Start Crud Functions
     public function insert_data($table,$data){
       $query = $this->db->insert($table,$data);
       if ($query) {
           return true;
       }else{
        return false;
       }
    }

    public function update_data($set,$table,$where){
        $this->db->set($set);
        $this->db->where($where);
        $query = $this->db->update($table);
        if ($query) {
           return true;
        }else{
            return false;
        }
    }

//End Crud Functions
	
//Start Fetch Function 

public function fetch_databyid($table,$id) {
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where('id',$id);
    $q=$this->db->get();
    return $q->result();
}
public function fetch_condrecordwithfield($tbname,$data,$fname)
  {
    $this->db->where($data);
    $this->db->select($fname);
        $q=$this->db->get($tbname);
    return $q->result();
  }
public function fetch_databy_id_limit($table,$id,$limit) {
    $this->db->select('*');
    $this->db->from($table);
    $this->db->limit($limit);
    $this->db->where('subject',$id);
    $q=$this->db->get();
    return $q->result();
}

public function fetch_record_orderby($table,$orderby,$lang)
        {
            $this->db->select("*");
            if($orderby !='')
            {
                $this->db->order_by($orderby,'DESC');
            }
            $this->db->limit(4);
            $this->db->where('language',$lang);
            $this->db->where('category','daily');
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

public function fetch_record_all_condition($table,$orderby,$select)
        {
            $this->db->select($select);
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

public function fetch_record_all_where($table,$orderby,$where,$select,$limit = '')
        {
            $this->db->select($select);
            if($orderby !='')
            {
                $this->db->order_by($orderby,'DESC');
            }
            if($limit !='')
            {
                $this->db->limit($limit);
            }
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

public function fetch_record_limtby($table,$orderby,$lang)
        {
            $this->db->select("*");
            if($orderby !='')
            {
                $this->db->order_by($orderby,'DESC');
            }
            $this->db->limit($lang);
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

    public function get_select_where($select,$table,$where,$orderby){
        if (!empty($orderby)) {
            $this->db->order_by('id',$orderby);
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

    public function no_of_row($table,$data)
    {
        $this->db->select('id');
        $this->db->from($table);
        $this->db->where($data);
        $q=$this->db->get();
        return $q->num_rows();

    }
//End Fetch Functons 

//Start Login Functions
public function login_function($username,$password){
    $this->db->select('id,name,email,status');
    $this->db->from('user');
    $this->db->where('mobile',$username);
    $this->db->or_where('email',$username);
    $this->db->where('password',$password);
    $query = $this->db->get();
    if ($query) {
        return $query->result();
    }else{
        return false;
    }
}        
//End Login Functions	
public function fetch_citybystate_id()
      {
         $this->_chk_if_login();
          if($this->input->post('state_id'))
          {
          echo $this->Frontend_model->fetch_subcategorybycat_id($this->input->post('state_id'));
          }
      } 
}  