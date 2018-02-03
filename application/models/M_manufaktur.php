<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_manufaktur extends CI_Model{

  public function ambilData(){
    $this->db->order_by('manufaktur','asc');
    $query = $this->db->get('tb_manufaktur');
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }

  function tambah_manufaktur(){
    $field = array(
      'manufaktur' => $this->input->post('txt_manufaktur')
    );
    $this->db->insert('tb_manufaktur', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }
    else {
      return false;
    }
  }


  function ambilDataID($id){
     $this->db->where('id', $id);
     $query = $this->db->get('tb_manufaktur');
     if($query->num_rows()>0)
     {
       return $query->row();
     }
     else
     {
       return false;
     }
  }

  function update_manufaktur(){
    $id = $this->input->post('txt_id');
    $field = array(
      'manufaktur' => $this->input->post('txt_manufaktur')
    );
    $this->db->where('id', $id);
    $this->db->update('tb_manufaktur', $field);

    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }

  function hapus_manufaktur($id){
    $this->db->where('id', $id);
    $this->db->delete('tb_manufaktur');
    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }


}
?>
