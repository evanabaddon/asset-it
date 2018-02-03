<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Habispakai extends CI_Controller {

  function __construct(){
    parent:: __construct();
    $this->load->model('M_habispakai','m'); //load model, simpan ke m
    $this->load->model('M_model','mm'); //load model pemakai, simpan ke mk
  }

	function index(){
    $data['d_habispakai']  = $this->m->ambilData(); //jalankan fungsi ambilData, simpan ke $data
    $data['d_model']  = $this->mm->ambilDatabyTipe('3');
    //$data['d_manufaktur']  = $this->mm->ambilData();

    $this->load->view('header');
		$this->load->view('leftside');
		$this->load->view('habispakai/index', $data); //load index model, bypass $data
		$this->load->view('footer_js');
    $this->load->view('habispakai/ajax_scripts', $data);
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

  function masuk($id){
    //mengambil model ID dari id HabisPakai
    //lalu dari id tersebut, akan dicari nama modelnya
    //untuk ditampilkan di view masuk sebagai namamodel(nama barang)
    $model=$this->m->ambilModeldariID($id);
    $data['d_model']=$this->m->ambilNamaModeldariID($model->model);
    $data['d_habispakai']=$this->m->ambilDatabyID($id);
    //$sss = $data['d_model']->model;
    //$data['d_habispakai']=$this->m->ambilDatabyID($id);
    //$this->load->view('habispakai/ajax_scripts', $data);

    echo json_encode($data);
  }

  function checkin(){
    $hasil = $this->m->checkIn();    
    echo json_encode(array("status" => true));
    if($hasil){
      $this->session->set_flashdata('psn_sukses','Stok sudah masuk');
      helper_log("ubah", "mengubah data");
    }
    else {
      $this->session->set_flashdata('psn_error','Gagal menambah stok ');
    }
  }



}
