<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemakai extends CI_model{

  public function ambilData(){
    $this->db->select('tb_pemakai.id, tb_pemakai.nama, tb_pemakai.nik, tb_pemakai.departemen, tb_pemakai.lokasi, tb_pemakai.alamat, tb_pemakai.no_telp, tb_pemakai.catatan, tb_departemen.id as departemen_id, tb_departemen.departemen, tb_lokasi.id as lokasi_id, tb_lokasi.lokasi');
    $this->db->from('tb_pemakai');
    $this->db->join('tb_departemen', 'tb_departemen.id = tb_pemakai.departemen');
    $this->db->join('tb_lokasi', 'tb_lokasi.id = tb_pemakai.lokasi');
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

 function ambilDataIDdanNama(){
    $this->db->select('tb_pemakai.id, tb_pemakai.nama');
    $query = $this->db->get('tb_pemakai');
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }

  function tambah_pemakai(){
    $field = array(
      'nama' => $this->input->post('txt_pemakai'),
      'departemen' => $this->input->post('opt_departemen'),
      'lokasi' => $this->input->post('opt_lokasi'),
      'no_telp' => $this->input->post('txt_no_telp')
    );
    $this->db->insert('tb_pemakai', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }
    else {
      return false;
    }
  }


  function ambilDataID($id){
     $this->db->where('id', $id);
     $query = $this->db->get('tb_pemakai');
     if($query->num_rows()>0)
     {
       return $query->row();
     }
     else
     {
       return false;
     }
  }

  function update_pemakai(){
    $id = $this->input->post('txt_id');
    $field = array(
      'nama' => $this->input->post('txt_pemakai'),
      'departemen' => $this->input->post('opt_departemen'),
      'lokasi' => $this->input->post('opt_lokasi'),
      'no_telp' => $this->input->post('txt_no_telp')
    );
    $this->db->where('id', $id);
    $this->db->update('tb_pemakai', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }

  function hapus_pemakai($id){
    $this->db->where('id', $id);
    $this->db->delete('tb_pemakai');
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
