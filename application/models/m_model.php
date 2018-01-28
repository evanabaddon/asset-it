<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model extends CI_Model{
  private $lastQuery ='';

  public function ambilDataByLimit($limit, $start){
    //$this->db->order_by('manufaktur','asc');
    $this->db->select('tb_model.id, tb_model.model, tb_model.manufaktur, tb_model.kategori, tb_model.catatan, tb_manufaktur.id as manufaktur_id, tb_manufaktur.manufaktur, tb_kategori.id as kategori_id, tb_kategori.kategori');
    $this->db->from('tb_model');
    $this->db->join('tb_manufaktur', 'tb_manufaktur.id = tb_model.manufaktur');
    $this->db->join('tb_kategori', 'tb_kategori.id = tb_model.kategori');
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
    $this->db->select('tb_model.id, tb_model.model, tb_model.manufaktur, tb_model.kategori, tb_model.catatan, tb_manufaktur.id as manufaktur_id, tb_manufaktur.manufaktur, tb_kategori.id as kategori_id, tb_kategori.kategori');
    $this->db->from('tb_model');
    $this->db->join('tb_manufaktur', 'tb_manufaktur.id = tb_model.manufaktur');
    $this->db->join('tb_kategori', 'tb_kategori.id = tb_model.kategori');
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
    //$this->db->order_by('model','asc');
    $query = $this->db->get('tb_model');
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
      'model' => $this->input->post('txt_model'),
      'manufaktur' => $this->input->post('opt_manufaktur'),
      'kategori' => $this->input->post('opt_kategori'),
      'catatan' => $this->input->post('txt_catatan')
    );
    $this->db->insert('tb_model', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }
    else {
      return false;
    }
  }

  function ambilDataID($id){
     $this->db->where('id', $id);
     $query = $this->db->get('tb_model');
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
      'model' => $this->input->post('txt_model'),
      'manufaktur' => $this->input->post('opt_manufaktur'),
      'kategori' => $this->input->post('opt_kategori'),
      'catatan' => $this->input->post('txt_catatan')
    );
    $this->db->where('id', $id);
    $this->db->update('tb_model', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }

  function hapus($id){
    $this->db->where('id', $id);
    $this->db->delete('tb_model');
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
