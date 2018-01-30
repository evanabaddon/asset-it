<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lokasi extends CI_Model{
  private $lastQuery ='';

  public function ambilDataByLimit($limit, $start){
    $this->db->order_by('lokasi','asc');
    $this->db->limit($limit, $start);
    $query = $this->db->get('tb_lokasi');
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
  public function ambilData(){
    $this->db->order_by('lokasi','asc');
    $query = $this->db->get('tb_lokasi');
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
      'lokasi' => $this->input->post('txt_lokasi')
    );
    $this->db->insert('tb_lokasi', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }
    else {
      return false;
    }
  }

  function ambilDataID($id){
     $this->db->where('id', $id);
     $query = $this->db->get('tb_lokasi');
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
      'lokasi' => $this->input->post('txt_lokasi')
    );
    $this->db->where('id', $id);
    $this->db->update('tb_lokasi', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }

  function hapus($id){
    $this->db->where('id', $id);
    $this->db->delete('tb_lokasi');
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
