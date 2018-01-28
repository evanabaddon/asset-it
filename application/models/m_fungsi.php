<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fungsi extends CI_Model{

  public function ambilDataTipe(){
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

  public function ambilDataManufaktur(){
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

  public function ambilDataKategori(){
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


}

?>
