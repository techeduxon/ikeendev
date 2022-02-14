<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class DataTableModel extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

      function make_query($select,$table,$where,$column_order,$column_search,$join,$joinWhere,$grpBy){
           $this->db->select($select);
           $this->db->from($table);
           $this->db->where($where);
           if(!empty($join)){
            $i=0;
            foreach($join as $val){
              $this->db->join($val,$joinWhere[$i],'LEFT');
            $i++;}
           }

           if(!empty($grpBy)){
            $this->db->group_by($grpBy);
           }

           if ( (isset($_POST['orderFrom'])) && (!empty($_POST['orderFrom']))) {
             $this->db->where('order_date >=',date('Y-m-d',strtotime($_POST['orderFrom'])).' 00:00:00');
           }

           if ( (isset($_POST['orderTo'])) && (!empty($_POST['orderTo']))) {
             $this->db->where('order_date <=',date('Y-m-d',strtotime($_POST['orderTo'])).' 23:59:59');
           }

					 if ( (isset($_POST['orderType'])) && (!empty($_POST['orderType']))) {
						 if($_POST['orderType'] != 'all'){
							 	$this->db->where('assign',$_POST['orderType']);
						 }
           }


           if ( (isset($_POST['formEdate'])) && (!empty($_POST['formEdate']))) {
             $this->db->where('created_at >=',date('Y-m-d',strtotime($_POST['formEdate'])).' 00:00:00');
           }

           if ( (isset($_POST['toEdate'])) && (!empty($_POST['toEdate']))) {
             $this->db->where('created_at <=',date('Y-m-d',strtotime($_POST['toEdate'])).' 23:59:59');
           }
        $i = 0;
        foreach ($column_search as $item){
            if($_POST['search']['value']){
                if($i===0){
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                }else{
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if(count($column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if(isset($_POST['order'])){
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }else if(isset($order)){
            $order = $order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
      }
      function make_datatables($select,$table,$where,$column_order,$column_search,$join="",$joinWhere="",$grpBy=""){
           $this->make_query($select,$table,$where,$column_order,$column_search,$join,$joinWhere,$grpBy);
           if($_POST["length"] != -1)  {
                $this->db->limit($_POST['length'], $_POST['start']);
           }
           $query = $this->db->get();
           return $query->result();
      }
      function get_filtered_data($select,$table,$where,$column_order,$column_search,$join="",$joinWhere="",$grpBy=""){
           $this->make_query($select,$table,$where,$column_order,$column_search,$join,$joinWhere,$grpBy);
           $query = $this->db->get();
           return $query->num_rows();
      }
      function get_all_data($table){
           $this->db->select("id");
           $this->db->from($table);
           return $this->db->count_all_results();
      }
}
