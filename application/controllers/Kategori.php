<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

  function __construct(){
    parent:: __construct();
    $this->load->model('m_kategori','m'); //load model, simpan ke m
    $this->load->model('m_fungsi','mf');
  }

	function index(){
    $this->load->library('pagination');
    $config['base_url'] = base_url() . 'kategori/index';
    $config['uri_segment'] = 3;
    $config['per_page'] = 10;

    $config['first_tag_open'] = '<li><a href="#">&laquo;';
    $config['first_tag_close'] = '</a></li>';
    $config['last_tag_open'] = '<li><a href="#">&raquo;';
    $config['last_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';

    $page = $this->uri->segment(3,0);

    //$data['d_kategori']  = $this->m->ambilDataJoin(); //jalankan fungsi ambilData, simpan ke $data
    $data['d_kategori']  = $this->m->ambilDataByLimit($config['per_page'], $page); //jalankan fungsi ambilData, by pagination
    $config['total_rows'] = $this->m->ambilTotalData();
    $this->pagination->initialize($config);
    $data['pagination'] = $this->pagination->create_links();

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