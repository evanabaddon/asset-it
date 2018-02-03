<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manufaktur extends CI_Controller {

  function __construct(){
    parent:: __construct();
    $this->load->model('m_manufaktur','m'); //load model, simpan ke m
  }

	function index(){
    $data['d_manufaktur']  = $this->m->ambilData(); //jalankan fungsi ambilData, simpan ke $data

    $this->load->view('header');
		$this->load->view('leftside');
		$this->load->view('manufaktur/index', $data); //load index kategori, bypass $data
		$this->load->view('footer_js');
    $this->load->view('manufaktur/ajax_scripts', $data);
    $this->load->view('footer');
	}

  function tambah_manufaktur(){
    $hasil = $this->m->tambah_manufaktur();
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

  public function update_manufaktur(){
    $hasil = $this->m->update_manufaktur();
    echo json_encode(array("status" => true));
    if($hasil){
      $this->session->set_flashdata('psn_sukses','Data telah diubah');
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal mengubah data ');
    }
  }

  function hapus_manufaktur($id){
    $hasil = $this->m->hapus_manufaktur($id);
    echo json_encode(array("status" => true));
    if($hasil){
    $this->session->set_flashdata('psn_sukses','Data telah dihapus');
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal menghapus data ');
    }
  }

}
