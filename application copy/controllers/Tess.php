<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tess extends CI_Controller {

  function __construct(){
    parent:: __construct();
    //$this->load->model('m_manufaktur','m'); //load model, simpan ke m
  //$this->load->model('m_fungsi','mf');
  }


	function index(){
    //$data['d_manufaktur']  = $this->m->ambilData(); //jalankan fungsi ambilData, simpan ke $data

		$this->load->view('tess');
    //$this->load->view('leftside');
    $this->load->view('footer');
	}


}
