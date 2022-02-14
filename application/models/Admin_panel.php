<?php 
class Admin_panel extends CI_Model {
   public function __construct()
   	{
   		parent::__construct();
   	}
       
//**********************************START DYMANIC  SERVERSIDE TABLE  ************************************************
   // var $table = "category";  
   //    var $select_column = array("id", "category_name", "added_date");  
   //    var $order_column = array("id", "category_name", "added_date",null);


   public function get_all_where_nowhere($select,$table){
    $this->db->select($select);
    $this->db->from($table);
    $query = $this->db->get();
    return $query->result();
  }
  
      function make_query($table,$select_column,$order_column,$like,$order_by)  
      {  
           $this->db->select($select_column); 
           // $this->db->where('course_purchase_mode' ,'online' ); 
           if(isset($_POST['from_date']) && !empty($_POST['from_date'])){
            $this->db->where('date >=',date('Y-m-d',strtotime($_POST['from_date'])));
           }

           if(isset($_POST['to_date']) && !empty($_POST['to_date'])){
            $this->db->where('date <=',date('Y-m-d',strtotime($_POST['to_date'])));
           }
           $this->db->from($table);  
           if(isset($_POST["search"]["value"]))  
           {  
            $i=0;
            $count = count($like);
            while($i<$count)
            {
              $this->db->or_like($like[$i], $_POST["search"]["value"]);  
              $i++;
            }
           }  
           
          $this->db->order_by($order_by, 'DESC');  
      }  

      function make_datatables($table='',$select_column='',$order_column='',$like ='',$order_by = ''){  
           $this->make_query($table,$select_column,$order_column,$like,$order_by);  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  

      function get_filtered_data($table='',$select_column='',$order_column='',$like ='',$order_by = ''){  
           $this->make_query($table,$select_column,$order_column,$like,$order_by);  
           $query = $this->db->get();  
           return $query->num_rows();  
      }

      function get_all_data($table='')  
      {  
           $this->db->select("*");  
           $this->db->from($table);  
           return $this->db->count_all_results();  
      } 
//**********************************END DYMANIC  SERVERSIDE TABLE  ************************************************

//************************START  DYMANIC  SERVERSIDE TABLE WITH WHERE CONDITION *********************************************


 function get_lfive_orders()
    {
      $this->db->select('*');
      $this->db->from('user_order');
      $this->db->order_by('id',"DESC");
      $this->db->limit(5);
      $data = $this->db-> get();
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
       // default order 
 
 
    private function _get_datatables_query($table='',$column_order='',$column_search='',$where='')
    {
         
        //add custom filter here
            $this->db->where($where);
            if($this->input->post('v_type'))
            {
              $this->db->where('video_type', $this->input->post('v_type'));
            }
            // custom filter coupon coden 
            if($this->input->post('c_product_type'))
            {
              $this->db->where('product_type', $this->input->post('c_product_type'));
            }

            if(!empty($this->input->post('cus_product_id')) && !empty($this->input->post('c_product_type')))
            {
              $this->db->where('product_id', $this->input->post('cus_product_id'));
            }


        // if($this->input->post('FirstName'))
        // {
        //     $this->db->like('FirstName', $this->input->post('FirstName'));
        // }
        // if($this->input->post('LastName'))
        // {
        //     $this->db->like('LastName', $this->input->post('LastName'));
        // }
        // if($this->input->post('address'))
        // {
        //     $this->db->like('address', $this->input->post('address'));
        // }
 
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
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($order))
        {
            $order = $order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    public function get_datatables($table='',$column_order='',$column_search='',$where='')
    {
        $this->_get_datatables_query($table,$column_order,$column_search,$where);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    public function count_filtered($table='',$column_order='',$column_search='',$where='')
    {
        $this->_get_datatables_query($table,$column_order,$column_search,$where);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all($table='' , $where = '')
    {
        $this->db->from($table);
        if (!empty($where)) {
        $this->db->where($where);
        }
        return $this->db->count_all_results();
    }

    public function insert_data($table,$data){
      $this->db->insert($table,$data);
    }

  public function insert_user_data($table,$data)
  {
    $this->db->truncate($table); 
    $que = $this->db->insert_string($table,$data);
    $this->db->query($que);
    $id=$this->db->insert_id();
    if($id) { return $id; } else { return false; }
  }

 //************************START  DYMANIC  SERVERSIDE TABLE WITH WHERE CONDITION *********************************************


 

// **********************************************START DYNAMIC CRUD**************************************************************//
//       // function for insert record start
//   public function insert_data($table,$data)
//   {
//     $que = $this->db->insert_string($table,$data);
//     $this->db->query($que);
//     $id=$this->db->insert_id();
//     if($id) { return $id; } else { return false; }
//   }
//   // function for insert record end

//   // function for update record start 
//   public function update_data($table,$data,$where)
//   {
//     $this->db->where($where);
//     $rs=$this->db->update($table,$data);
//     if($rs) { return true; } else { return false; } 
//   }
//   // function for update record end

//   // function for delete record  start
//   public function delete_data($table,$where)
//   {
//     $rs=$this->db->delete($table,$where);
//     if($rs) { return true; } else { return false; } 
//   }
//   // function for delete record end 

//   // function for single record start
//   public function fetch_condrecordwithfield($tbname,$data,$fname)
//   {
//     $this->db->where($data);
//     $this->db->select($fname);
//     $query = $this->db->get($tbname);
//     if($query->num_rows() > 0)
//     {
//       $row = $query->row();
//       return $row;
//     }
//     else { return false; }
//   }
//   // function for single record end

// // **********************************************START DYNAMIC CRUD**************************************************************//



      //21/11/2018
      // var $table = "category";  
      // var $select_column = array("id", "category_name", "added_date");  
      // var $order_column = array("id", "category_name", "added_date",null);  
      // function make_query()  
      // {  
      //      $this->db->select($this->select_column);  
      //      $this->db->from($this->table);  
      //      if(isset($_POST["search"]["value"]))  
      //      {  
      //           $this->db->like("category_name", $_POST["search"]["value"]);  
      //           $this->db->or_like("added_date", $_POST["search"]["value"]);  
      //      }  
      //      if(isset($_POST["order"]))  
      //      {  
      //           $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
      //      }  
      //      else  
      //      {  
      //           $this->db->order_by('id', 'DESC');  
      //      }  
      // }  
      // function make_datatables(){  
      //      $this->make_query();  
      //      if($_POST["length"] != -1)  
      //      {  
      //           $this->db->limit($_POST['length'], $_POST['start']);  
      //      }  
      //      $query = $this->db->get();  
      //      return $query->result();  
      // }  
      // function get_filtered_data(){  
      //      $this->make_query();  
      //      $query = $this->db->get();  
      //      return $query->num_rows();  
      // }       
      // function get_all_data()  
      // {  
      //      $this->db->select("*");  
      //      $this->db->from($this->table);  
      //      return $this->db->count_all_results();  
      // } 
      //21/11/2018
        
        // function insert_vendor($data) 
        // {  
        //    $this->db->insert('vendors', $data);  
        //    return true;
        // } 
        
        // function delete_vendor($ven_id) 
        // { 
        //     $this->db->where('id', $ven_id);  
        //     $this->db->delete('vendors');  
        //     $result=$this->db->affected_rows();
        //     return $result;
        // }  
      
    // function fetch_single_vendor($ven_id) 
    //   {  
    //        $this->db->where("id", $ven_id);  
    //        $query=$this->db->get('vendors');  
    //        return $query->row();  
    //   }  
      
      // function update_vendor($ven_id, $data) 
      // {  
      //      $this->db->where("id", $ven_id);  
      //      $this->db->update("vendors", $data);  
      //      $result=$this->db->affected_rows();
      //      return $result;
      // }  
      
      // function fetch_all_purchase_product($ven_id)
      // {
      //       $this->db->order_by('id', 'DESC'); 
      //       $this->db->where("ven_id", $ven_id);  
      //       $query=$this->db->get('purchase_product');  
      //       return $query->result();
      // }
      
      // function insert_amount($data)
      // {
      //      $this->db->insert('purchase_product', $data);  
      //      return true;
      // }
      
      // function  insert_pay($data)
      // {
      //    $this->db->insert('purchase_amount', $data);  
      //    return true;  
      // }
      
      // function  fetch__purchase_product($p_id)
      // {
      //     $this->db->where('id',$p_id);
      //     $query=$this->db->get('purchase_product');
      //     return $query->row();
      // }
      
      // function update_product_amount($update_product_amount,$p_id)
      // {
      //       $this->db->where("id", $p_id);  
      //       $this->db->update("purchase_product", $update_product_amount);  
      //       $result=$this->db->affected_rows();
      //       return $result;
      // }
      
      // function fetch_transaction_history($id)
      // {
      //     $this->db->where('purchase_product_id',$id);
      //     $query=$this->db->get('purchase_amount');
      //     return $query->result();
      // }

//**********************************END CATEGORY LEVEL BUSINESS LOGIC*************************************************
      
//**********************************START PRODUCT  LEVEL BUSINESS LOGIC*************************************************
  
//**********************************END PRODUCT  LEVEL BUSINESS LOGIC*************************************************

    
      
} 
?>