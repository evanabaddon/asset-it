  <!-- Left side column. contains the logo and sidebar -->
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
