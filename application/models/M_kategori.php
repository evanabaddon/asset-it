<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model{

  public function ambilData(){
    $this->db->select('tb_kategori.id, tb_kategori.kategori, tb_kategori.tipe, tb_tipe.id as tipe_id, tb_tipe.tipe');
    $this->db->from('tb_kategori');
    $this->db->join('tb_tipe', 'tb_kategori.tipe = tb_tipe.id');
    $this->db->order_by('id','asc');
    $query = $this->db->get();
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }

  function tambah_kategori(){
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

  function update_kategori(){
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

  function hapus_kategori($id){
    $this->db->where('id', $id);
    $this->db->delete('tb_kategori');
    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }

  function ambilDataTipe(){
    $query = $this->db->get('tb_tipe');
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }


}
?>
