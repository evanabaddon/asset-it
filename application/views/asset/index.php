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
      <i class="fa fa-tint"></i> Barang Habis Pakai
    </h1>
    <div class="pull-right">
    <button type="button" class="btn btn-primary pull-right" name="button" onclick="tambah_barang()" rel="tooltip" data-original-title="Tambah data model">Tambah Item (Stok Awal)</button>
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
                  <th>Nama Barang </th>
                  <th>Stok </th>
                  <th><i class="fa fa-barcode"></i></th>
                  <th><i class="fa fa-tint"></i></th>
                  <th><i class="fa fa-keyboard-o"></i></th>
                  <th>Action </th>
                </tr>
            </thead>
              <tbody>
                 <?php
                  if($d_habispakai){
                    foreach($d_habispakai as $d){
                ?>
                <tr>
                  <td><?php echo $d->id; ?></td>
                  <td><?php echo $d->nama_model; ?></td>
                  <td><?php echo $d->stok; ?></td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>
                    <nobr>
                      <button type="button" class="btn btn-sm btn-warning" onclick="tampil_checkin(<?php echo $d->id; ?>)" data-dismiss="modal" data-toggle="modal" rel="tooltip" data-original-title="Barang Masuk"><i class="glyphicon glyphicon-save"></i> </button>
                      &nbsp;
                      <button type="button" class="btn btn-sm btn-danger" onclick="tampil_checkout(<?php echo $d->id; ?>)" data-dismiss="modal" data-toggle="modal" rel="tooltip" data-original-title="Barang Keluar"><i class="glyphicon glyphicon-open"></i> </button>
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
<!-- modalTambahBarang -->
<div id="modalTambahBarang" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Belum Ada Judul</h4>
      </div>
      <div class="box-body">
        <form id="formTambahBarang" action="#" method="post" class="form-horizontal">
            <input type="hidden" name="txt_id">
            <!-- model -->
            <div class="form-group ">
                <label for="model" class="col-md-3 control-label">Model Barang</label>
                <div class="col-md-7 required">

                  <select class="form-control select2" style="min-width:350px;" required name="opt_model" id="optModel">
                    <option></option>
                     <?php
                     if($d_model){
                       foreach($d_model as $d){
                         echo "<option value='$d->id'>$d->model</option>";
                        }
                      }
                    ?>
                  </select>
                </div>
            </div>
            <!-- stok -->
            <div class="form-group ">
                <label for="stok" class="col-md-3 control-label">Stok</label>
                <div class="col-md-7 col-sm-12 required">
                  <input type="text" name="txt_stok" class="form-control" placeholder="Jumlah Stok..." required onkeypress="return isNumber(event)"/>
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

<!-- modalCheckinBarang -->
<div id="modalCheckinBarang" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title2">Belum Ada Judul</h4>
      </div>
      <div class="box-body">
        <form id="formCheckIn" action="#" method="post" class="form-horizontal">
            <input type="hidden" name="txt_id">
            <!-- nama barang -->
            <div class="form-group ">
                <label for="namabarang" class="col-md-3 control-label">Nama Barang</label>
                <div class="col-md-7 col-sm-12 required">
                  <input type="text" name="txt_nama" class="form-control" disabled>
                </div>
            </div>
            <!-- qty-->
            <div class="form-group ">
                <label for="qty" class="col-md-3 control-label">Jumlah</label>
                <div class="col-md-7 col-sm-12 required">
                  <input type="text" name="txt_qty" class="form-control" placeholder="Quantity..." required onkeypress="return isNumber(event)"/>
                </div>
            </div>
            <!-- no_order-->
            <div class="form-group ">
                <label for="no_order" class="col-md-3 control-label">No Order</label>
                <div class="col-md-7 col-sm-12 required">
                  <input type="text" name="txt_no_order" class="form-control" placeholder="No Order..." required/>
                </div>
            </div>
            <!-- tgl_order-->
            <div class="form-group ">
                <label for="qty" class="col-md-3 control-label">Tanggal</label>
                <div class="col-md-7 col-sm-12 required">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="txt_tgl_order" class="form-control pull-right" id="datepickerIn" data-date-format="dd/mm/yyyy">
                  </div>
                </div>
            </div>
            <!-- hidden -->
            <div class="form-group ">
              <input type="hidden" name="txt_id_habispakai" value=""/>
              <input type="hidden" name="txt_stok" value=""/>
              <input type="hidden" name="txt_id_model" value=""/>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close icon-white"></i> Batal</button>
        <button type="submit" onclick="simpan_checkin()" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- modalCheckOutBarang -->
<div id="modalCheckOutBarang" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Belum Ada Judul</h4>
      </div>
      <div class="box-body">
        <form id="formCheckOut" action="#" method="post" class="form-horizontal">
            <input type="hidden" name="txt_id_out">
            <!-- nama barang -->
            <div class="form-group ">
                <label for="namabarang" class="col-md-3 control-label">Nama Barang</label>
                <div class="col-md-7 col-sm-12 required">
                  <input type="text" name="txt_nama_out" class="form-control" disabled>
                </div>
            </div>
            <!-- qty-->
            <div class="form-group ">
                <label for="qty" class="col-md-3 control-label">Jumlah</label>
                <div class="col-md-7 col-sm-12 required">
                  <input type="text" name="txt_qty_out" class="form-control" placeholder="Quantity..." required onkeypress="return isNumber(event)"/>
                </div>
            </div>
            <!-- no_order-->
            <div class="form-group ">
                <label for="no_order" class="col-md-3 control-label">No Order</label>
                <div class="col-md-7 col-sm-12 required">
                  <input type="text" name="txt_no_order_out" class="form-control" placeholder="No Order..." required/>
                </div>
            </div>
            <!-- tgl_order-->
            <div class="form-group ">
                <label for="qty" class="col-md-3 control-label">Tanggal</label>
                <div class="col-md-7 col-sm-12 required">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="txt_tgl_order_out" class="form-control pull-right" id="datepickerOut" data-date-format="dd/mm/yyyy">
                  </div>
                </div>
            </div>
            <!-- pengguna -->
            <div class="form-group ">
                <label for="pengguna" class="col-md-3 control-label">Pengguna</label>
                <div class="col-md-7 required">
                  <select class="form-control select2" style="min-width:350px;" required name="opt_pemakai" id="optPemakai">
                    <option></option>
                    <?php
                     if($d_pemakai){
                       foreach($d_pemakai as $d){
                         echo "<option value=$d->id>$d->nama</option>";
                        }
                      }
                    ?>
                  </select>
                </div>
            </div>
            <!-- hidden -->
            <div class="form-group ">
              <input type="hidden" name="txt_id_habispakai_out" value=""/>
              <input type="hidden" name="txt_stok_out" value=""/>
              <input type="hidden" name="txt_id_model_out" value=""/>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close icon-white"></i> Batal</button>
        <button type="submit" onclick="simpan_checkout()" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
