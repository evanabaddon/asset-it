<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header" style="padding-bottom: 40px;">
    <h1 class="pull-left">
      Barang Masuk
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
            <?php echo $d_model->model; ?>
              <form action="<?php echo base_url('habispakai/checkin')?>" method="post" class="form-horizontal">                
                  <!-- nama barang -->
                  <div class="form-group ">
                      <label for="namabarang" class="col-md-3 control-label">Nama Barang</label>
                      <div class="col-md-7 col-sm-12 required">
                        <input type="text" name="txt_nama" class="form-control" value="<?echo $d_model->model; ?>">
                      </div>
                  </div>
                  <!-- qty-->
                  <div class="form-group ">
                      <label for="qty" class="col-md-3 control-label">Jumlah</label>
                      <div class="col-md-7 col-sm-12 required">
                        <input type="text" name="txt_qty" class="form-control" placeholder="Quantity..." required/>
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
                          <input type="text" name="txt_tgl" class="form-control pull-right" id="datepicker">
                        </div>
                      </div>
                  </div>                                   
                  <div class="box-footer text-right">                    
                    <button type="submit" name="btnSimpan" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>                    
                  </div>
                  <input type="hidden" name="txt_id" value="<?php echo $d_habispakai->id;?>"/>
                </form>
            </div>
        </div>
    </div> <!-- col -->
  </div><!-- row -->

</div>
<!-- /.content-wrapper-->
