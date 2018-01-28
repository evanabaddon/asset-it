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
                          <select class="select2 select2-cointainer select2-container--default" style="min-width:350px"  id="kat" name="opt_tipe" required>
                            <option value="" selected="selected"></option>
                            <option value="Asesoris">Asesoris</option>
                            <option value="Aset">Aset</option>
                            <option value="Habis Pakai">Habis Pakai</option>
                            <option value="Komponen">Komponen</option>
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
</form>

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>assets/plugins/select2/select2.min.js"></script>


<script>
  $(document).ready(function () {
    $("#kat").select2({
        placeholder: "Silahkan pilih..."
      });
  });
</script>
      </body>
      </html>
