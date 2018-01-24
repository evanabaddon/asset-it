<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_departemen extends CI_Model{

  public function ambilData(){
    //$this->db->order_by('departemen','asc');
    $query = $this->db->get('tb_departemen');
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }

  function submit(){
    $field = array(
      'departemen' => $this->input->post('txt_departemen')
    );
    $this->db->insert('tb_departemen', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }
    else {
      return false;
    }
  }

  function ambilDataID($id){
     $this->db->where('id', $id);
     $query = $this->db->get('tb_departemen');
     if($query->num_rows()>0)
     {
       return $query->row();
     }
     else
     {
       return false;
     }
  }

  function update(){
    $id = $this->input->post('txt_id');
    $field = array(
      'departemen' => $this->input->post('txt_departemen')
    );
    $this->db->where('id', $id);
    $this->db->update('tb_departemen', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }

  function hapus($id){
    $this->db->where('id', $id);
    $this->db->delete('tb_departemen');
    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }




}

?>
