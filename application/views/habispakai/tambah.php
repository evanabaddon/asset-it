<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header" style="padding-bottom: 40px;">
    <h1 class="pull-left">
      Tambah Item (Stok Awal)
    </h1>
    <div class="pull-right">
    <a href="<?php echo base_url('habispakai')?>" class="btn btn-primary pull-right">Kembali</a>
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
              <form action="<?php echo base_url('habispakai/submit')?>" method="post" class="form-horizontal">                
                  <!-- model -->                
                  <div class="form-group ">
                      <label for="tipe" class="col-md-3 control-label">Model</label>
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
                        <input type="text" name="txt_stok" class="form-control" placeholder="Jumlah Stok">
                      </div>
                  </div>                  
                  <div class="box-footer text-right">
                    <a class="btn btn-link" href="<?php echo base_url('pemakai/tambah')?>"> Batal</a>
                    <button type="submit" name="btnSimpan" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
                  </div>
                </form>
            </div>
        </div>
    </div> <!-- col -->
  </div><!-- row -->

</div>
<!-- /.content-wrapper-->
