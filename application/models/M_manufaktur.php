<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_manufaktur extends CI_Model{
  private $lastQuery ='';

  public function ambilDataByLimit($limit, $start){
    //$this->db->order_by('manufaktur','asc');
    $this->db->limit($limit, $start);
    $query = $this->db->get('tb_manufaktur');
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

  function submit(){
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

  function update(){
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

  function hapus($id){
    $this->db->where('id', $id);
    $this->db->delete('tb_manufaktur');
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
