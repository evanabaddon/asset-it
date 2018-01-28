<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header" style="padding-bottom: 40px;">
    <h1 class="pull-left">
      Tambah model
    </h1>
    <div class="pull-right">
    <a href="<?php echo base_url('model')?>" class="btn btn-primary pull-right">Kembali</a>
    </div>
  </section>

  <?php echo $this->session->flashdata('psn_sukses');?>
  <?php
    if($this->session->flashdata('psn_sukses')){
  ?>
    <div class="alert alert-success">
      <?php echo $this->session->flashdata('psn_sukses');?>
    </div>
  <?php
  }
  ?>

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <div class="box-body">
              <form action="<?php echo base_url('model/submit')?>" method="post" class="form-horizontal">
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
                  <div class="box-footer text-right">
                    <a class="btn btn-link" href="<?php echo base_url('model/tambah')?>"> Batal</a>
                    <button type="submit" name="btnSimpan" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
                  </div>
                </form>
            </div>
        </div>
    </div> <!-- col -->
  </div><!-- row -->

</div>
<!-- /.content-wrapper-->
