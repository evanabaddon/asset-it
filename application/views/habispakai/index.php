<div class="content-wrapper">

  <?php
    if($this->session->flashdata('psn_sukses')){
  ?>
    <div class="alert alert-success" style="position:absolute; left:50%;top:55px;" role="alert">
      <?php echo $this->session->flashdata('psn_sukses');?>
    </div>
    <script>
      window.setTimeout(function() {$(".alert").fadeTo(500, 0).slideUp(500, function(){$(this).remove();});},1000);
    </script>
  <?php
    }
  ?>
  <?php
    if($this->session->flashdata('psn_error')){
  ?>
    <div class="alert alert-danger" style="position:absolute; left:50%;top:55px;" role="alert">
      <?php echo $this->session->flashdata('psn_error');?>
    </div>
    <script>
      window.setTimeout(function() {$(".alert").fadeTo(500, 0).slideUp(500, function(){$(this).remove();});},1000);
    </script>
  <?php
    }
  ?>

  <!-- Content Header (Page header) -->
  <section class="content-header" style="padding-bottom: 30px;">
    <h1 class="pull-left">
      Pengguna
    </h1>
    <div class="pull-right">
    <a href="<?php echo base_url('pemakai/tambah')?>" class="btn btn-primary pull-right">Tambah Pengguna</a>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Barang </th>
                  <th>Stok </th>
                  <th><i class="fa fa-barcode"></i></th>
                  <th><i class="fa fa-tint"></i></th>
                  <th><i class="fa fa-keyboard-o"></i></th>
                </tr>
            </thead>
              <tbody>
                 <?php
                  if($d_pemakai){
                    foreach($d_pemakai as $d){
                ?>
                <tr>
                  <td><?php echo $d->id; ?></td>
                  <td><?php echo $d->nama; ?></td>
                  <td><?php echo $d->departemen; ?></td>
                  <td><?php echo $d->lokasi; ?></td>
                  <td><?php echo $d->no_telp; ?></td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>
                    <nobr>
                      <a href="<?php echo base_url('pemakai/ubah/' .$d->id); ?>" class="btn btn-sm bg-green" rel="tooltip" data-tooltip="true" title="" data-original-title="Barang Masuk">Masuk</a>&nbsp;
                      <a href="<?php echo base_url('pemakai/ubah/' .$d->id); ?>" class="btn btn-sm bg-red" rel="tooltip" data-tooltip="true" title="" data-original-title="Barang Keluar">Keluar</a>&nbsp;
                   </nobr>
                  </td>
                </tr>
                <?php
                    }
                  }
                ?>
              </tbody>
            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- ./box-body -->
          <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
              <?php echo $pagination; ?>
            </ul>
          </div>
          <!-- ./pagination -->
        </div>
        <!-- /.box -->
  </section>
<!-- /.content Main Content-->

</div>
<!-- /.content-wrapper-->
