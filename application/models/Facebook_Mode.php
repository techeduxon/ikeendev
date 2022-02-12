<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// session_start();
class Facebook_Mode extends CI_Model {
	function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function checkExistOrNot($select,$where,$orWhere=""){
    	$this->db->select($select);
    	$this->db->where($where);
        if(!empty($orWhere)){
            $this->db->or_where($orWhere);
        }
    	$query = $this->db->get('tbl_user');
    	if($query){
    		return $query->result_array();
    	}else{
    		return false;
    	}
    }

    public function insert_data($table,$data){
        $query = $this->db->insert($table,$data);
        if($query){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function getSelectWhereResultArray($select,$table,$where){
        $this->db->select($select);
        $this->db->where($where);
        $query = $this->db->get($table);
        if ($query) {
            return $query->result_array();
        }else{
            return false;
        }
    }
}