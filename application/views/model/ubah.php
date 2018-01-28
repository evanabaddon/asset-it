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
                <!-- model -->
                <div class="form-group ">
                    <label for="model" class="col-md-3 control-label">Nama model</label>
                    <div class="col-md-7 col-sm-12 required">
                      <input type="text" name="txt_model" class="form-control" value="<?php echo $d_model->model?>" required>
                    </div>
                </div>
                <!-- manufaktur -->
                <div class="form-group ">
                    <label for="tipe" class="col-md-3 control-label">Manufaktur</label>
                    <div class="col-md-7 required">
                      <select class="form-control select2" style="min-width:350px;" required name="opt_manufaktur">
                        <?php
                        if($d_manufaktur){
                          foreach($d_manufaktur as $d){
                            echo "serw";
                            if($d_model->manufaktur==$d->id){echo "<option value='$d->id' selected='selected'>$d->manufaktur</option>";}
                            else
                            {echo "<option value='$d->id'>$d->manufaktur</option>";}
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
                      <select class="form-control select2" style="min-width:350px;" required name="opt_kategori">
                        <?php
                        if($d_kategori){
                          foreach($d_kategori as $d){
                            if($d_model->kategori==$d->id){echo "<option value='$d->id' selected='selected'>$d->kategori</option>";}
                            else
                            {echo "<option value='$d->id'>$d->kategori</option>";}
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
                      <textarea style="resize:none;" rows="3" name="txt_catatan" class="form-control"><?php echo $d_model->catatan;?></textarea>
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
