<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_habispakai extends CI_model{
  private $lastQuery ='';

  public function ambilDataByLimit($limit, $start){
    //$this->db->order_by('manufaktur','asc');
    $this->db->select('tb_pemakai.id, tb_pemakai.nama, tb_pemakai.nik, tb_pemakai.departemen, tb_pemakai.lokasi, tb_pemakai.alamat, tb_pemakai.no_telp, tb_pemakai.catatan, tb_departemen.id as departemen_id, tb_departemen.departemen, tb_lokasi.id as lokasi_id, tb_lokasi.lokasi');
    $this->db->from('tb_pemakai');
    $this->db->join('tb_departemen', 'tb_departemen.id = tb_pemakai.departemen');
    $this->db->join('tb_lokasi', 'tb_lokasi.id = tb_pemakai.lokasi');
    $this->db->order_by('id','asc');
    $this->db->limit($limit, $start);
    $query = $this->db->get();
    $this->lastQuery = $this->db->last_query();
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }

  public function ambilDataJoin(){
    //$this->db->select('*');
    $this->db->select('tb_pemakai.id, tb_pemakai.pemakai, tb_pemakai.manufaktur, tb_pemakai.kategori, tb_pemakai.catatan, tb_manufaktur.id as manufaktur_id, tb_manufaktur.manufaktur, tb_kategori.id as kategori_id, tb_kategori.kategori');
    $this->db->from('tb_pemakai');
    $this->db->join('tb_manufaktur', 'tb_manufaktur.id = tb_pemakai.manufaktur');
    $this->db->join('tb_kategori', 'tb_kategori.id = tb_pemakai.kategori');
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


  public function ambilData(){
    //$this->db->order_by('pemakai','asc');
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

  function submit(){
    $field = array(
      'nama' => $this->input->post('txt_pemakai'),
      //'nik' => $this->input->post('txt_nik'),
      'departemen' => $this->input->post('opt_departemen'),
      'lokasi' => $this->input->post('opt_lokasi'),
      //'alamat' => $this->input->post('txt_alamat'),
      'no_telp' => $this->input->post('txt_no_telp'),
      //'catatan' => $this->input->post('txt_catatan')
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

  function update(){
    $id = $this->input->post('txt_id');
    $field = array(
      'nama' => $this->input->post('txt_pemakai'),
      //'nik' => $this->input->post('txt_nik'),
      'departemen' => $this->input->post('opt_departemen'),
      'lokasi' => $this->input->post('opt_lokasi'),
      //'alamat' => $this->input->post('txt_alamat'),
      'no_telp' => $this->input->post('txt_no_telp'),
      //'catatan' => $this->input->post('txt_catatan')
    );
    $this->db->where('id', $id);
    $this->db->update('tb_pemakai', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }

  function hapus($id){
    $this->db->where('id', $id);
    $this->db->delete('tb_pemakai');
    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }

  function ambilTotalData(){
    $sql = explode('LIMIT',$this->lastQuery);
    $query = $this->db->query($sql[0]);
    $result = $query->result();
    return count($result);
  }


}

?>
