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
      Manufaktur
    </h1>
    <div class="pull-right">
    <a href="<?php echo base_url('manufaktur/tambah')?>" class="btn btn-primary pull-right">Tambah Manufaktur</a>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"></h3>

            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Manufaktur (Merek)</th>
                  <th>Action</th>
                </tr>
            </thead>
              <tbody>
                 <?php
                  if($d_manufaktur){
                    foreach($d_manufaktur as $d){
                ?>
                <tr>
                  <td><?php echo $d->id; ?></td>
                  <td><?php echo $d->manufaktur; ?></td>
                  <td>
                    <nobr>
                      <a href="<?php echo base_url('manufaktur/ubah/' .$d->id); ?>" class="btn btn-sm btn-warning" data-tooltip="true" title="" data-original-title="Update"><i class="fa fa-pencil"></i></a>&nbsp;
                      <a href="<?php echo base_url('manufaktur/hapus/' .$d->id); ?>" class="btn btn-danger btn-sm delete-asset" data-tooltip="true" data-toggle="modal" data-content="Are you sure you wish to delete Laptop?" data-title="Delete" onclick="return confirm('Anda yakin?');" data-original-title="" title=""><i class="fa fa-trash"></i></a>&nbsp;
                   </nobr>
                  </td>
                </tr>
                <?php
                    }
                  }
                ?>
              </tbody>
            </table>

          </div>
          <!-- /.box-body -->
          <!-- pagination nih -->
          <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
              <?php echo $pagination; ?>
            </ul>
          </div>
          <!-- ./pagination -->
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
<!-- /.content Main Content-->

</div>
<!-- /.content-wrapper-->
