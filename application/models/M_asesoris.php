<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_asesoris extends CI_model{
  //private $lastQuery ='';

   function ambilData(){
    $this->db->select('tb_asesoris.id, tb_asesoris.model, tb_asesoris.stok, tb_model.model as nama_model');
    $this->db->from('tb_asesoris');
    $this->db->join('tb_model', 'tb_model.id = tb_asesoris.model');
    //$this->db->order_by('id','asc');
    //$this->db->limit($limit, $start);
    $query = $this->db->get();
    //$this->lastQuery = $this->db->last_query();
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }

  //menambah item ke inventory berdasarkan model tertentu
  function tambah_model(){
    $field = array(
      'model' => $this->input->post('opt_model'),
      'stok' => $this->input->post('txt_stok')
    );
    //untuk mencegah duplikasi model, maka select dulu by opt_model, kalau ketemu,
    //gagal tambah data
    //kalau tidak ketemu, insert data $field
    $this->db->where('model', $this->input->post('opt_model'));
    $query = $this->db->get('tb_asesoris');
    if($this->db->affected_rows() > 0){
      return false; //data model sudah ada
    }
    else {
      $this->db->insert('tb_asesoris', $field);
      if($this->db->affected_rows() > 0){
        return true;
      }
      else {
        return false;
      }
    }

  }

  function ambilDatabyID($id){
     $this->db->where('id', $id);
     $query = $this->db->get('tb_asesoris');
     if($query->num_rows()>0)
     {
       return $query->row();
     }
     else
     {
       return false;
     }
  }
    //ambil nama model dari modelID
  function ambilNamaModeldariID($id){
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
 //ambil modelID dari ID asesoris
 function ambilModeldariID($id){
  $this->db->where('id', $id);
  $query = $this->db->get('tb_asesoris');
  if($query->num_rows()>0)
  {
    return $query->row();
  }
  else
  {
    return false;
  }
}

  function checkIn(){
    //biar ndak pusing, dibuatkan variabel dulu
    $id_asesoris = $this->input->post('txt_id_asesoris');
    $stok = $this->input->post('txt_stok');
    $qty_in = $this->input->post('txt_qty');
    $id_model = $this->input->post('txt_id_model');
    $tgl_order = $this->input->post('txt_tgl_order');
    $no_order = $this->input->post('txt_no_order');
    $stok=intval($stok)+intval($qty_in);
    $field = array(
      'model' => $id_model,
      'stok' => $stok
    );
    //update data stok di tb_asesoris
    $this->db->where('id', $id_asesoris);
    $this->db->update('tb_asesoris', $field);
    if($this->db->affected_rows() > 0){
      $field = array(
        'model_asesoris' => $id_model,
        'qty_in' => $qty_in,
        'tgl_order' => $tgl_order,
        'no_order' => $no_order
      );
      //tambah data chekin di tb_asesoris_in
      $this->db->insert('tb_asesoris_in', $field);
      if($this->db->affected_rows() > 0){
        return true;
      }
      else {
        return false;
      }
    } else {
      return false;
    }
  }

  function checkOut(){
    //biar ndak pusing, dibuatkan variabel dulu

    $id_asesoris = $this->input->post('txt_id_asesoris_out');
    $stok = $this->input->post('txt_stok_out');
    $qty_out = $this->input->post('txt_qty_out');
    $id_model = $this->input->post('txt_id_model_out');
    $tgl_order = $this->input->post('txt_tgl_order_out');
    $no_order = $this->input->post('txt_no_order_out');
    $id_nama = $this->input->post('opt_pemakai');
    $stok=intval($stok)-intval($qty_out);
    $field = array(
      'model' => $id_model,
      'stok' => $stok
    );

    //update data stok di tb_asesoris
    $this->db->where('id', $id_asesoris);
    $this->db->update('tb_asesoris', $field);
    if($this->db->affected_rows() > 0){
      $field = array(
        'model_asesoris' => $id_model,
        'qty_out' => $qty_out,
        'tgl_order' => $tgl_order,
        'no_order' => $no_order,
        'id_nama' => $id_nama
      );
      //tambah data chekout di tb_asesoris_in
      $this->db->insert('tb_asesoris_out', $field);
      if($this->db->affected_rows() > 0){
        return true;
      }
      else {
        return false;
      }
    } else {
      return false;
    }
  }

  function checkOut22(){
    //biar ndak pusing, dibuatkan variabel dulu

    $id_asesoris = $this->input->post('txt_id_asesoris_out');
    $stok = $this->input->post('txt_stok_out');
    $qty_out = $this->input->post('txt_qty_out');
    $id_model = $this->input->post('txt_id_model_out');
    $tgl_order = $this->input->post('txt_tgl_order_out');
    $no_order = $this->input->post('txt_no_order_out');
    $stok=intval($stok)-intval($qty_out);
    $field = array(
      'model' => $id_model,
      'stok' => $stok
    );

    //update data stok di tb_asesoris
    $this->db->where('id', $id_asesoris);
    $this->db->update('tb_asesoris', $field);
    if($this->db->affected_rows() > 0){
      $field = array(
        'model_asesoris' => $id_model,
        'qty_out' => $qty_out,
        'tgl_order' => $tgl_order,
        'no_order' => $no_order
      );
      //tambah data chekout di tb_asesoris_in
      $this->db->insert('tb_asesoris_out', $field);
      if($this->db->affected_rows() > 0){
        return true;
      }
      else {
        return false;
      }
    } else {
      return false;
    }
  }

  function ambilDataCheckIn(){
    $this->db->select('tb_asesoris_in.id, tb_asesoris_in.model_asesoris, tb_asesoris_in.qty_in, tb_asesoris_in.tgl_order, tb_asesoris_in.no_order, tb_model.id as model_id, tb_model.model');
    $this->db->from('tb_asesoris_in');
    $this->db->join('tb_model', 'tb_model.id = tb_asesoris_in.model_asesoris');
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

  function ambilDataCheckOut(){
    $this->db->select('tb_asesoris_out.id, tb_asesoris_out.model_asesoris, tb_asesoris_out.qty_out, tb_asesoris_out.tgl_order, tb_asesoris_out.no_order, tb_model.id as model_id, tb_model.model, tb_pemakai.id as pemakai_id, tb_pemakai.nama');
    $this->db->from('tb_asesoris_out');
    $this->db->join('tb_model', 'tb_model.id = tb_asesoris_out.model_asesoris');
    $this->db->join('tb_pemakai', 'tb_pemakai.id = tb_asesoris_out.id_nama');
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


}

?>
