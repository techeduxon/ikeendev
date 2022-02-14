<?php

class Fullcalendar_model extends CI_Model
{
 function fetch_all_event(){
  $this->db->order_by('id');  
  $this->db->where('status' , 1);
  return $this->db->get('booking');
 }

 function fetch_all_event2(){
  $this->db->order_by('id');
  $this->db->where('start >=', date('Y-m-d',strtotime("-1 months")));
  $this->db->where('status' , 1);
  return $this->db->get('booking');
 }

 function insert_event($data)
 {
  $this->db->insert('booking', $data);
 }

 function update_event($data, $id)
 {
  $this->db->where('id', $id);
  $this->db->update('booking', $data);
 }

 function delete_event($id)
 {
  $this->db->where('id', $id);
  $this->db->delete('booking');
 }
}

?>