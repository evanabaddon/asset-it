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
    <button class="btn btn-primary pull-right" name="button" onclick="tambah_pemakai()" rel="tooltip" data-original-title="Tambah data pemakai">Tambah Pengguna</button>
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
                  <th>Departemen </th>
                  <th>Lokasi </th>
                  <th>No Telp</th>
                  <th><i class="fa fa-barcode"></i></th>
                  <th><i class="fa fa-tint"></i></th>
                  <th><i class="fa fa-keyboard-o"></i></th>
                  <th>Action</th>
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
                      <a onclick="ubah_pemakai(<?php echo $d->id; ?>)" class="btn btn-sm btn-warning" rel="tooltip" data-tooltip="true" title="" data-original-title="Ubah"><i class="fa fa-pencil"></i></a>&nbsp;
                      <a onclick="hapus_pemakai(<?php echo $d->id; ?>)" class="btn btn-danger btn-sm delete-asset" rel="tooltip" data-tooltip="true" data-toggle="modal" data-content="Anda yakin?" data-title="Delete" onclick="return confirm('Anda yakin?');" data-original-title="Hapus" title=""><i class="fa fa-trash"></i></a>&nbsp;
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
            <!-- pemakai -->
            <div class="form-group ">
                <label for="pemakai" class="col-md-3 control-label">Nama pemakai</label>
                <div class="col-md-7 col-sm-12 required">
                  <input type="text" name="txt_pemakai" class="form-control" required placeholder="Masukkan Nama pemakai...">
                </div>
            </div>
            <!-- departemen -->
            <div class="form-group ">
                <label for="tipe" class="col-md-3 control-label">Departemen</label>
                <div class="col-md-7 required">
                  <select class="form-control select2" style="min-width:350px;" required name="opt_departemen" id="optDepartemen">
                    <option></option>
                     <?php
                     if($d_departemen){
                       foreach($d_departemen as $d){
                         echo "<option value='$d->id'>$d->departemen</option>";
                        }
                      }
                    ?>
                  </select>
                </div>
            </div>
            <!-- lokasi -->
            <div class="form-group ">
                <label for="tipe" class="col-md-3 control-label">Lokasi</label>
                <div class="col-md-7 required">
                  <select class="form-control select2" style="min-width:350px;" required name="opt_lokasi" id="optLokasi">
                    <option></option>
                    <?php
                     if($d_lokasi){
                       foreach($d_lokasi as $d){
                         echo "<option value='$d->id'>$d->lokasi</option>";
                        }
                      }
                    ?>
                  </select>
                </div>
            </div>
            <!-- no_telp -->
            <div class="form-group ">
                <label for="no_telp" class="col-md-3 control-label">No Telp</label>
                <div class="col-md-7 col-sm-12 required">
                  <input type="text" name="txt_no_telp" class="form-control" required placeholder="Masukkan No Telp...">
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
