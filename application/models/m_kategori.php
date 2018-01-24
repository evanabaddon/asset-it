<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model{

  public function ambilData(){
    $query = $this->db->get('tb_kategori');
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
      'kategori' => $this->input->post('txt_kategori'),
      'tipe'     => $this->input->post('opt_tipe')
    );
    $this->db->insert('tb_kategori', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }
    else {
      return false;
    }
  }

  function ambilDataID($id){
     $this->db->where('id', $id);
     $query = $this->db->get('tb_kategori');
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
      'kategori' => $this->input->post('txt_kategori'),
      'tipe'     => $this->input->post('opt_tipe')
    );
    $this->db->where('id', $id);
    $this->db->update('tb_kategori', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }

  function hapus($id){
    $this->db->where('id', $id);
    $this->db->delete('tb_kategori');
    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }




}

?>
