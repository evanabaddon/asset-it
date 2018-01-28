<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" style="padding-bottom: 40px;">
    <h1 class="pull-left">
      Ubah pemakai
    </h1>
    <div class="pull-right">
    <a href="<?php echo base_url('pemakai')?>" class="btn btn-primary pull-right">Kembali</a>
    </div>
  </section>


  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>

            <div class="box-body">
              <form action="<?php echo base_url('pemakai/update')?>" method="post" class="form-horizontal">
                <!-- pemakai -->
                <div class="form-group ">
                    <label for="pemakai" class="col-md-3 control-label">Nama Pengguna</label>
                    <div class="col-md-7 col-sm-12 required">
                      <input type="text" name="txt_pemakai" class="form-control" value="<?php echo $d_pemakai->nama;?>" required>
                    </div>
                </div>
                <!-- departemen -->
                <div class="form-group ">
                    <label for="tipe" class="col-md-3 control-label">Departemen</label>
                    <div class="col-md-7 required">
                      <select class="form-control select2" style="min-width:350px;" required name="opt_departemen" id="optDepartemen">
                        <?php
                        if($d_departemen){
                          foreach($d_departemen as $d){
                            echo "serw";
                            if($d_pemakai->departemen==$d->id){echo "<option value='$d->id' selected='selected'>$d->departemen</option>";}
                            else
                            {echo "<option value='$d->id'>$d->departemen</option>";}
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
                        <?php
                        if($d_lokasi){
                          foreach($d_lokasi as $d){
                            echo "serw";
                            if($d_pemakai->lokasi==$d->id){echo "<option value='$d->id' selected='selected'>$d->lokasi</option>";}
                            else
                            {echo "<option value='$d->id'>$d->lokasi</option>";}
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
                      <input type="text" name="txt_no_telp" class="form-control" value="<?php echo $d_pemakai->no_telp;?>">
                    </div>
                </div>
                <div class="box-footer text-right">
                  <a class="btn btn-link" href="<?php echo base_url('pemakai/tambah')?>"> Batal</a>
                  <button type="submit" name="btnSimpan" class="btn btn-success" data-toggle="modal" data-target=".bs-ubah"><i class="fa fa-check icon-white"></i> Simpan</button>
                </div>
                  <input type="hidden" name="txt_id" value="<?php echo $d_pemakai->id;?>"/>
                </form>
              </div>
          </div>
      </div> <!-- col -->
    </div><!-- row -->

  </div>
  <!-- /.content-wrapper-->
