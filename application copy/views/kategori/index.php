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
      Kategori Aset
    </h1>
    <div class="pull-right">
    <a href="<?php echo base_url('kategori/tambah')?>" class="btn btn-primary pull-right">Tambah Kategori</a>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th>Tipe Kategori</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                   <?php
                    if($d_kategori){
                      foreach($d_kategori as $d){
                  ?>
                  <tr>
                    <td><?php echo $d->id; ?></td>
                    <td><?php echo $d->kategori; ?></td>
                    <td><?php echo $d->tipe; ?></td>
                    <td>
                      <nobr>
                        <a href="<?php echo base_url('kategori/ubah/' .$d->id); ?>" class="btn btn-sm btn-warning" data-tooltip="true" title="" data-original-title="Update"><i class="fa fa-pencil"></i></a>&nbsp;
                        <a href="<?php echo base_url('kategori/hapus/' .$d->id); ?>" class="btn btn-danger btn-sm delete-asset" data-tooltip="true" data-toggle="modal" data-content="Are you sure you wish to delete Laptop?" data-title="Delete" onclick="return confirm('Anda yakin?');" data-original-title="" title=""><i class="fa fa-trash"></i></a>&nbsp;
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
    </div>
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper-->
