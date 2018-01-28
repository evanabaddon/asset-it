<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header" style="padding-bottom: 40px;">
    <h1 class="pull-left">
      Ubah Kategori
    </h1>
    <div class="pull-right">
    <a href="<?php echo base_url('kategori')?>" class="btn btn-primary pull-right">Kembali</a>
    </div>
  </section>


  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>

            <div class="box-body">
              <form action="<?php echo base_url('kategori/update')?>" method="post" class="form-horizontal">
                  <!-- kategori -->
                  <div class="form-group ">
                      <label for="kategori" class="col-md-3 control-label">Nama Kategori</label>
                      <div class="col-md-7 col-sm-12 required">
                        <input type="text" value="<?php echo $d_kategori->kategori; ?>" name="txt_kategori" class="form-control" required>
                      </div>
                  </div>
                  <!-- tipe -->
                  <div class="form-group ">
                      <label for="tipe" class="col-md-3 control-label">Tipe</label>
                      <div class="col-md-7 required">
                          <select class="form-control select2" style="min-width:350px" required name="opt_tipe">
                            <?php
                             if($d_tipe){
                               foreach($d_tipe as $d){
                                 if($d_kategori->tipe==$d->id){echo "<option value='$d->id' selected='selected'>$d->tipe</option>";}
                                 else
                                 {echo "<option value='$d->id'>$d->tipe</option>";}
                              }
                            }
                            ?>

                          </select>
                      </div>
                  </div>
                  <div class="box-footer text-right">
                    <a class="btn btn-link" href="<?php echo base_url('kategori/tambah')?>"> Batal</a>
                    <button type="submit" name="btnSimpan" class="btn btn-success" data-toggle="modal" data-target=".bs-ubah"><i class="fa fa-check icon-white"></i> Simpan</button>
                  </div>
                  <input type="hidden" name="txt_id" value="<?php echo $d_kategori->id;?>"/>
                </form>
              </div>
          </div>
      </div> <!-- col -->
    </div><!-- row -->

  </div>
  <!-- /.content-wrapper-->
