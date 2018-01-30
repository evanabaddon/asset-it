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
      Lokasi
    </h1>
    <div class="pull-right">
    <a href="<?php echo base_url('lokasi/tambah')?>" class="btn btn-primary pull-right">Tambah lokasi</a>
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
                  <th>Lokasi</th>
                  <th>Action</th>
                </tr>
            </thead>
              <tbody>
                 <?php
                  if($d_lokasi){
                    foreach($d_lokasi as $d){
                ?>
                <tr>
                  <td><?php echo $d->id; ?></td>
                  <td><?php echo $d->lokasi; ?></td>
                  <td>
                    <nobr>
                      <a href="<?php echo base_url('lokasi/ubah/' .$d->id); ?>" class="btn btn-sm btn-warning" rel="tooltip" data-tooltip="true" title="" data-original-title="Ubah"><i class="fa fa-pencil"></i></a>&nbsp;
                      <a href="<?php echo base_url('lokasi/hapus/' .$d->id); ?>" class="btn btn-danger btn-sm delete-asset" rel="tooltip" data-tooltip="true" data-toggle="modal" data-content="Are you sure you wish to delete Laptop?" data-title="Delete" onclick="return confirm('Anda yakin?');" data-original-title="Hapus" title=""><i class="fa fa-trash"></i></a>&nbsp;
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
