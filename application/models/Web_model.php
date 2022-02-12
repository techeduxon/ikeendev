<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Web_model extends CI_Model {
    public function __construct(){
    	parent::__construct();
    }

    public function insert_data($table,$data){
    	$query = $this->db->insert($table, $data);
    	if ($query) {
    		return $this->db->insert_id();
    	}else{
    		return false;
    	}
    }

    public function update_data($data,$table,$where){
    	$this->db->set($data);
    	$this->db->where($where);
    	$query = $this->db->update($table);
    	if ($query) {
    		return true;
    	}else{
    		return false;
    	}
    }


    public function delte_data($where,$table){
        $this->db->where($where);
        $query = $this->db->delete($table);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    public function insert_update($data,$table,$where,$select){
        $this->db->select($select);
        $this->db->where($where);
        $query = $this->db->get($table);
        if ($query->num_rows() >= 1) {
            $da = $query->row();
            $this->db->set('cnt',$da->cnt+1);
            $this->db->where($where);
            $query = $this->db->update($table);
            if ($query) {
                return true;
            }else{
                return false;
            }
        }else{
            $query = $this->db->insert($table, $data);
            if ($query) {
                return true;
            }else{
                return false;
            }
        }
    }

    public function get_select_row($select,$table,$where,$ordby=""){
        if (!empty($ordby)) {
            $this->db->order_by('id',$ordby);
        }
        $this->db->select($select);
        $this->db->where($where);
        $query = $this->db->get($table);
        if ($query) {
            return $query->row();
        }else{
            return false;
        }
    }


}
?>