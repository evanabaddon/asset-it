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
      Model
    </h1>
    <div class="pull-right">
    <button class="btn btn-primary pull-right" name="button" onclick="tambah_model()" rel="tooltip" data-original-title="Tambah data model">Tambah Model</button>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <!--table class="table table-hover" id="dataTable"-->
            <table id="dataTable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama </th>
                  <th>Manufaktur </th>
                  <th>Kategori </th>
                  <th>Catatan </th>
                  <th>Action</th>
                </tr>
            </thead>
              <tbody>
                 <?php
                  if($d_model){
                    foreach($d_model as $d){
                ?>
                <tr>
                  <td><?php echo $d->id; ?></td>
                  <td><?php echo $d->model; ?></td>
                  <td><?php echo $d->manufaktur; ?></td>
                  <td><?php echo $d->kategori; ?></td>
                  <td><?php echo $d->catatan; ?></td>
                  <td>
                    <nobr>
                      <a onclick="ubah_model(<?php echo $d->id; ?>)" class="btn btn-sm btn-warning" rel="tooltip" data-tooltip="true" title="" data-original-title="Ubah"><i class="fa fa-pencil"></i></a>&nbsp;
                      <a onclick="hapus_model(<?php echo $d->id; ?>)" class="btn btn-danger btn-sm delete-asset" rel="tooltip" data-tooltip="true" data-toggle="modal" data-content="Are you sure you wish to delete Laptop?" data-title="Delete" onclick="return confirm('Anda yakin?');" data-original-title="Hapus" title=""><i class="fa fa-trash"></i></a>&nbsp;
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
    <!-- /.box -->
  </section>
<!-- /.content Main Content-->

</div>
<!-- /.content-wrapper-->
<div id="modalForm" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Belum Ada Judul</h4>
      </div>
      <div class="box-body">
        <form id="form" action="#" method="post" class="form-horizontal">
            <input type="hidden" name="txt_id">
            <!-- model -->
            <div class="form-group ">
                <label for="model" class="col-md-3 control-label">Nama model</label>
                <div class="col-md-7 col-sm-12 required">
                  <input type="text" name="txt_model" class="form-control" required placeholder="Masukkan Nama Model...">
                </div>
            </div>
            <!-- manufaktur -->
            <div class="form-group ">
                <label for="tipe" class="col-md-3 control-label">Manufaktur</label>
                <div class="col-md-7 required">
                  <select class="form-control select2" style="min-width:350px;" required name="opt_manufaktur" id="optManufaktur">
                    <option></option>
                     <?php
                     if($d_manufaktur){
                       foreach($d_manufaktur as $d){
                         echo "<option value='$d->id'>$d->manufaktur</option>";
                        }
                      }
                    ?>
                  </select>
                </div>
            </div>
            <!-- kategori -->
            <div class="form-group ">
                <label for="tipe" class="col-md-3 control-label">Kategori</label>
                <div class="col-md-7 required">
                  <select class="form-control select2" style="min-width:350px;" required name="opt_kategori" id="optKategori">
                    <option></option>
                    <?php
                     if($d_kategori){
                       foreach($d_kategori as $d){
                         echo "<option value='$d->id'>$d->kategori</option>";
                        }
                      }
                    ?>
                  </select>
                </div>
            </div>
            <!-- catatan -->
            <div class="form-group ">
                <label for="catatan" class="col-md-3 control-label">Catatan</label>
                <div class="col-md-7 col-sm-12 required">
                  <textarea style="resize:none;" rows="3" name="txt_catatan" class="form-control" placeholder="Catatan ..."></textarea>
                </div>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close icon-white"></i> Batal</button>
        <button type="submit" onclick="simpan_data()" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
