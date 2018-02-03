<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemakai extends CI_Controller {

  function __construct(){
    parent:: __construct();
    $this->load->model('m_pemakai','m'); //load pemakai, simpan ke m
    $this->load->model('m_lokasi','ml'); //load pemakai, simpan ke m
    $this->load->model('m_departemen','md'); //load pemakai, simpan ke m
  }

	function index(){
    $data['d_pemakai']  = $this->m->ambilData(); //jalankan fungsi ambilData, simpan ke $data
    $data['d_lokasi']  = $this->ml->ambilData();
    $data['d_departemen']  = $this->md->ambilData();

    $this->load->view('header');
		$this->load->view('leftside');
		$this->load->view('pemakai/index', $data); //load index pemakai, bypass $data
		$this->load->view('footer_js');
    $this->load->view('pemakai/ajax_scripts', $data);
    $this->load->view('footer');
	}

  function tambah_pemakai(){
    $hasil = $this->m->tambah_pemakai();
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

  public function update_pemakai(){
    $hasil = $this->m->update_pemakai();
    echo json_encode(array("status" => true));
    if($hasil){
      $this->session->set_flashdata('psn_sukses','Data telah diubah');
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal mengubah data ');
    }
  }

  function hapus_pemakai($id){
    $hasil = $this->m->hapus_pemakai($id);
    echo json_encode(array("status" => true));
    if($hasil){
    $this->session->set_flashdata('psn_sukses','Data telah dihapus');
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal menghapus data ');
    }
  }

}
