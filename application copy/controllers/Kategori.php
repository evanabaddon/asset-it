<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

  function __construct(){
    parent:: __construct();
    $this->load->model('m_kategori','m'); //load model, simpan ke m
    $this->load->model('m_fungsi','mf');
  }

	function index(){
    $data['d_kategori']  = $this->m->ambilData(); //jalankan fungsi ambilData, simpan ke $data

    $this->load->view('header');
		$this->load->view('leftside');
		$this->load->view('kategori/index', $data); //load index kategori, bypass $data
		$this->load->view('footer');
	}

  function tambah(){
    $data['d_tipe']  = $this->mf->ambilDataTipe(); //jalankan fungsi ambilDataTipe, simpan ke $data

    $this->load->view('header');
    $this->load->view('leftside');
    $this->load->view('kategori/tambah', $data); //tambah ini sudah pake footer sendiri, karena tidak mau jalan select2 ,kalau terpisah footernya
    $this->load->view('footer');
  }

  function submit(){
    $hasil = $this->m->submit();
    if($hasil){
      $this->session->set_flashdata('psn_sukses','Data telah tersimpan');
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal menambah data ');
    }
    redirect(base_url('kategori/index'));
  }

  function ubah ($id){
    $data['d_kategori']  = $this->m->ambilDataID($id); //jalankan fungsi ambilData berdasarkan ID, simpan ke $data
    $data['d_tipe']  = $this->mf->ambilDataTipe(); //jalankan fungsi ambilDataTipe, simpan ke $data

    $this->load->view('header');
    $this->load->view('leftside');
    $this->load->view('kategori/ubah', $data); //tambah ini sudah pake footer sendiri, karena tidak mau jalan select2 ,kalau terpisah footernya
    $this->load->view('footer');

  }

  public function update(){
    $hasil = $this->m->update();
    if($hasil){
      $this->session->set_flashdata('psn_sukses','Data telah diubah');
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal mengubah data ');
    }
    redirect(base_url('kategori/index'));
  }

  function hapus($id){
    $hasil = $this->m->hapus($id);
    if($hasil){
    $this->session->set_flashdata('psn_sukses','Data telah dihapus');
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal menghapus data ');
    }
    redirect(base_url('kategori/index'));
  }

}
