<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {

  function __construct(){
    parent:: __construct();
    $this->load->model('m_kategori','m'); //load model, simpan ke m
  }

	function index(){
    $data['d_kategori']  = $this->m->ambilData(); //jalankan fungsi ambilData, simpan ke $data
    $data['d_tipe']  = $this->m->ambilDataTipe();

    $this->load->view('header');
		$this->load->view('leftside');
		$this->load->view('kategori/index', $data); //load index kategori, bypass $data
		$this->load->view('footer_js');
    $this->load->view('kategori/ajax_scripts', $data);
    $this->load->view('footer');
	}

  function tambah_kategori(){
    $hasil = $this->m->tambah_kategori();
    echo json_encode(array("status" => true));
    if($hasil){
      $this->session->set_flashdata('psn_sukses','Data telah tersimpan');
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal menambah data ');
    }
  }

  function ubah ($id){
    $data = $this->m->ambilDataID($id); //jalankan fungsi ambilData berdasarkan ID, simpan ke $data
    echo json_encode($data);
  }

  public function update_kategori(){
    $hasil = $this->m->update_kategori();
    echo json_encode(array("status" => true));
    if($hasil){
      $this->session->set_flashdata('psn_sukses','Data telah diubah');
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal mengubah data ');
    }
  }

  function hapus_kategori($id){
    $hasil = $this->m->hapus_kategori($id);
    echo json_encode(array("status" => true));
    if($hasil){
    $this->session->set_flashdata('psn_sukses','Data telah dihapus');
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal menghapus data ');
    }
  }  

}
