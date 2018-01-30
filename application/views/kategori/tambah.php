<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header" style="padding-bottom: 40px;">
    <h1 class="pull-left">
      Tambah Kategori
    </h1>
    <div class="pull-right">
    <a href="<?php echo base_url('kategori')?>" class="btn btn-primary pull-right">Kembali</a>
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
              <form action="<?php echo base_url('kategori/submit')?>" method="post" class="form-horizontal">
                  <!-- kategori -->
                  <div class="form-group ">
                      <label for="kategori" class="col-md-3 control-label">Nama Kategori</label>
                      <div class="col-md-7 col-sm-12 required">
                        <input type="text" name="txt_kategori" class="form-control" required>
                      </div>
                  </div>
                  <!-- tipe -->
                  <div class="form-group ">
                      <label for="tipe" class="col-md-3 control-label">Tipe</label>
                      <div class="col-md-7 required">
                        <select class="form-control select2" style="min-width:350px;" required name="opt_tipe">
                          <?php
                           if($d_tipe){
                             foreach($d_tipe as $d){
                               echo "<option value='$d->id'>$d->tipe</option>";
                              }
                            }
                          ?>
                        </select>
                      </div>
                  </div>
                  <div class="box-footer text-right">
                    <a class="btn btn-link" href="<?php echo base_url('kategori/tambah')?>"> Batal</a>
                    <button type="submit" name="btnSimpan" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
                  </div>
                </form>
            </div>
        </div>
    </div> <!-- col -->
  </div><!-- row -->

</div>
<!-- /.content-wrapper-->
