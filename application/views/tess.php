<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Trans Ass-IT | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ASS</b>IT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TRANS</b> Ass-IT</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

        </ul>
      </div>
    </nav>
  </header>

  <!-- LeftSide -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Mardino Santosa</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form -->
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-barcode"></i>
              <span>Assets</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li>
                <a href="http://www.asset-it.com/hardware">
                    Tampil Semua
                </a>
              </li>
              <li>
                <a href="http://www.asset-it.com/hardware?status=Deployed"><i class="fa fa-circle-o text-blue"></i>
                    Terpakai
                </a>
              </li>
              <li>
                <a href="http://www.asset-it.com/hardware?status=RTD">
                    <i class="fa fa-circle-o text-green"></i>
                    Siap Digunakan
                </a>
              </li>
              <li><a href="http://www.asset-it.com/hardware?status=Pending"><i class="fa fa-circle-o text-orange"></i>
                      Ditangguhkan
                  </a>
              </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-keyboard-o"></i>
              <span>Asesoris</span>
             </a>
        </li>
        <li>
            <a href="#"><i class="fa fa-tint"></i>
              <span>Barang Habis </span>
             </a>
        </li>
        <li>
            <a href="#"><i class="fa fa-hdd-o"></i>
              <span>Komponen</span>
             </a>
        </li>
        <li>
            <a href="#"><i class="fa fa-users"></i>
              <span>Pemakai</span>
             </a>
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart"></i>
              <span>Laporan</span>
             </a>
        </li>
        <li>
            <a href="#"><i class="fa fa-laptop"></i>
              <span>Permintaan</span>
             </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i>
            <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?echo base_url() .'manufaktur';?>"><i class="fa fa-circle-o"></i> Manufaktur</a></li>
            <li><a href="<?echo base_url() .'kategori';?>"><i class="fa fa-circle-o"></i> Kategori</a></li>
            <li><a href="<?echo base_url() .'departemen';?>"><i class="fa fa-circle-o"></i> Departemen</a></li>
            <li><a href="<?echo base_url() .'manufaktur';?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<!-- LeftSide -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
  </div>
