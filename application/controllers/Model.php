<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Controller {

  function __construct(){
    parent:: __construct();
    $this->load->model('m_model','m'); //load model, simpan ke m
    $this->load->model('m_kategori','mk'); //load model, simpan ke m
    $this->load->model('m_manufaktur','mm'); //load model, simpan ke m
  }

	function index(){
    $data['d_model']  = $this->m->ambilData(); //jalankan fungsi ambilData, simpan ke $data
    $data['d_kategori']  = $this->mk->ambilData();
    $data['d_manufaktur']  = $this->mm->ambilData();

    $this->load->view('header');
		$this->load->view('leftside');
		$this->load->view('model/index', $data); //load index model, bypass $data
		$this->load->view('footer_js');
    $this->load->view('model/ajax_scripts', $data);
    $this->load->view('footer');
	}

  function tambah_model(){
    $hasil = $this->m->tambah_model();
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

  public function update_model(){
    $hasil = $this->m->update_model();
    echo json_encode(array("status" => true));
    if($hasil){
      $this->session->set_flashdata('psn_sukses','Data telah diubah');
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal mengubah data ');
    }
  }

  function hapus_model($id){
    $hasil = $this->m->hapus_model($id);
    echo json_encode(array("status" => true));
    if($hasil){
    $this->session->set_flashdata('psn_sukses','Data telah dihapus');
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal menghapus data ');
    }
  }

}
