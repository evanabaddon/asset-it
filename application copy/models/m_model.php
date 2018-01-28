<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model extends CI_Model{
  private $lastQuery ='';

  public function ambilDataByLimit($limit, $start){
    //$this->db->order_by('model','asc');
    $this->db->limit($limit, $start);
    $query = $this->db->get('tb_model');
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
      'model' => $this->input->post('txt_model')
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
      'model' => $this->input->post('txt_model')
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
