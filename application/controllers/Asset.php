<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asset extends CI_Controller {

  function __construct(){
    parent:: __construct();
    $this->load->model('M_asset','m'); //load model, simpan ke m
    $this->load->model('M_model','mm'); //load model pemakai, simpan ke mk
    $this->load->model('M_pemakai','mp'); //load model pemakai, simpan ke mk
  }

	function index(){
    //$data['d_asset']  = $this->m->ambilData(); //jalankan fungsi ambilData, simpan ke $data
    $data['d_model']  = $this->mm->ambilDatabyTipe('3');
    $data['d_pemakai']=$this->mp->ambilDataIDdanNama();
    //$data['d_manufaktur']  = $this->mm->ambilData();

    $this->load->view('header');
		$this->load->view('leftside');
		$this->load->view('asset/index', $data); //load index model, bypass $data
		$this->load->view('footer_js');
    $this->load->view('asset/ajax_scripts', $data);
    $this->load->view('footer');
	}

  function tambah_model(){
    $hasil = $this->m->tambah_model();
    echo json_encode(array("status" => true));
    if($hasil){
      $this->session->set_flashdata('psn_sukses','Data telah tersimpan');
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal menambah data atau data model sudah ada ');
    }
  }

  //fungsi untuk menampilkan data saja, kemudian diencode ke json
  function tampilcheck($id){
    //mengambil model ID dari id asset
    //lalu dari id tersebut, akan dicari nama modelnya
    //untuk ditampilkan di view masuk sebagai namamodel(nama barang)
    $model=$this->m->ambilModeldariID($id);
    $data['d_model']=$this->m->ambilNamaModeldariID($model->model);
    $data['d_asset']=$this->m->ambilDatabyID($id);

    //$sss = $data['d_model']->model;
    //$data['d_asset']=$this->m->ambilDatabyID($id);
    //$this->load->view('asset/ajax_scripts', $data);
    echo json_encode($data);
  }

  //fungsi untuk menyimpan data, dilakukan sama checkIn
  function checkin(){
    $hasil = $this->m->checkIn();
    echo json_encode(array("status" => true));
    if($hasil){
      $this->session->set_flashdata('psn_sukses','Stok sudah masuk');
      helper_log("stok", "menambah stok");
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal menambah stok ');
    }
  }

  function allcheckin(){
    $data['d_checkin']  = $this->m->ambilDataCheckIn(); //jalankan fungsi ambilData, simpan ke $data

    $this->load->view('header');
		$this->load->view('leftside');
		$this->load->view('asset/allcheckin', $data); //load index model, bypass $data
		$this->load->view('footer_js');
    $this->load->view('asset/ajax_scripts', $data);
    $this->load->view('footer');
	}

  //fungsi untuk menyimpan data, dilakukan sama checkIn
  function checkout(){
    $hasil = $this->m->checkOut();
    echo json_encode(array("status" => true));
    if($hasil){
      $this->session->set_flashdata('psn_sukses','Stok sudah keluar');
      helper_log("stok", "mengeluarkan stok");
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal mengeluarkan stok ');
    }
  }

  function allcheckout(){
    $data['d_checkout']  = $this->m->ambilDataCheckOut(); //jalankan fungsi ambilData, simpan ke $data

    $this->load->view('header');
		$this->load->view('leftside');
		$this->load->view('asset/allcheckout', $data); //load index model, bypass $data
		$this->load->view('footer_js');
    $this->load->view('asset/ajax_scripts', $data);
    $this->load->view('footer');
	}



}
