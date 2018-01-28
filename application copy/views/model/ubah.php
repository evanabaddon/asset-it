<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" style="padding-bottom: 40px;">
    <h1 class="pull-left">
      Ubah model
    </h1>
    <div class="pull-right">
    <a href="<?php echo base_url('model')?>" class="btn btn-primary pull-right">Kembali</a>
    </div>
  </section>


  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>

            <div class="box-body">
              <form action="<?php echo base_url('model/update')?>" method="post" class="form-horizontal">
                  <!-- kategori -->
                  <div class="form-group ">
                      <label for="kategori" class="col-md-3 control-label">Nama model</label>
                      <div class="col-md-7 col-sm-12 required">
                        <input type="text" value="<?php echo $d_model->model; ?>" name="txt_model" class="form-control" required>
                      </div>
                  </div>
                  <div class="box-footer text-right">
                    <a class="btn btn-link" href="<?php echo base_url('model/tambah')?>"> Batal</a>
                    <button type="submit" name="btnSimpan" class="btn btn-success" data-toggle="modal" data-target=".bs-ubah"><i class="fa fa-check icon-white"></i> Simpan</button>
                  </div>
                  <input type="hidden" name="txt_id" value="<?php echo $d_model->id;?>"/>
                </form>
              </div>
          </div>
      </div> <!-- col -->
    </div><!-- row -->

  </div>
  <!-- /.content-wrapper-->
