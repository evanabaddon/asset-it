<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_habispakai extends CI_model{
  private $lastQuery ='';

  public function ambilDataByLimit($limit, $start){
    //$this->db->select('*');
    //$this->db->select('tb_habispakai.id, tb_habispakai.model, tb_habispakai.stok');
    $this->db->select('tb_habispakai.id, tb_habispakai.model, tb_habispakai.stok, tb_model.model as nama_model');
    //$this->db->select('tb_pemakai.id, tb_pemakai.nama, tb_pemakai.nik, tb_pemakai.departemen, tb_pemakai.lokasi, tb_pemakai.alamat, tb_pemakai.no_telp, tb_pemakai.catatan, tb_departemen.id as departemen_id, tb_departemen.departemen, tb_lokasi.id as lokasi_id, tb_lokasi.lokasi');
    $this->db->from('tb_habispakai');
    $this->db->join('tb_model', 'tb_model.id = tb_habispakai.model');
    //$this->db->join('tb_lokasi', 'tb_lokasi.id = tb_pemakai.lokasi');
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
      'model' => $this->input->post('opt_model'),      
      'stok' => $this->input->post('txt_stok')
    );
    //untuk mencegah duplikasi model, maka select dulu by opt_model, kalau ketemu, 
    //gagal tambah data
    //kalau tidak ketemu, insert data $field 
    $this->db->where('model', $this->input->post('opt_model'));
    $query = $this->db->get('tb_habispakai');
    if($this->db->affected_rows() > 0){
      return false; //data model sudah ada
    }
    else {  
      $this->db->insert('tb_habispakai', $field);
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
     $query = $this->db->get('tb_habispakai');
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
 //ambil modelID dari ID HabisPakai
 function ambilModeldariID($id){
  $this->db->where('id', $id);
  $query = $this->db->get('tb_habispakai');
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
    //buat data baru di tb_habispakaicheck
    //insert id, model_id, qty, tgl_masuk, no_order
    //update data stok qty di tb_habispakai
    //update id, model_id, qty=qty-qtyin
    $id_habispakai = $this->input->post('txt_id');
    $data=$this->ambilModeldariID($id_habispakai);
    $id_model = $data->model;
        
    $data=$this->ambilNamaModeldariID($id_model);
    $model=$data->model; 
    echo $id_habispakai; echo "<br>";
    echo $id_model;echo "<br>";
    echo $model;echo "<br>";

    $field = array(
      'model' => $id_model,
      'stok' => $this->input->post('txt_qty')
    );

    $this->db->where('id', $id_habispakai);
    $this->db->update('tb_habispakai', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else {
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
