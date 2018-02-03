<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class departemen extends CI_Controller {

  function __construct(){
    parent:: __construct();
    $this->load->model('m_departemen','m'); //load model, simpan ke m
  }


	function index(){
    $data['d_departemen']  = $this->m->ambilData(); //jalankan fungsi ambilData, simpan ke $data

    $this->load->view('header');
		$this->load->view('leftside');
		$this->load->view('departemen/index', $data); //load index kategori, bypass $data
		$this->load->view('footer_js');
    $this->load->view('departemen/ajax_scripts', $data);
    $this->load->view('footer');
	}

  function tambah_departemen (){
    $hasil = $this->m->tambah_departemen();
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

  public function update_departemen(){
    $hasil = $this->m->update_departemen();
    echo json_encode(array("status" => true));
    if($hasil){
      $this->session->set_flashdata('psn_sukses','Data telah diubah');
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal mengubah data ');
    }
  }

  function hapus_departemen($id){
    $hasil = $this->m->hapus_departemen($id);
    echo json_encode(array("status" => true));
    if($hasil){
    $this->session->set_flashdata('psn_sukses','Data telah dihapus');
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal menghapus data ');
    }
  }

}
