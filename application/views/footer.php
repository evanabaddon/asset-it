    <footer class="main-footer hidden-print">
      <div class="pull-right hidden-xs">
        <b>Version</b> v1.1.9 - build 3124 (master)
        <a target="_blank" class="btn btn-default btn-xs" href="http://zdienos.com" rel="noopener">User's Manual</a>
        <a target="_blank" class="btn btn-default btn-xs" href="https://zdienos.com/support" rel="noopener">Report a Bug</a>
      </div>
      <a target="_blank" href="https://snipeitapp.com" rel="noopener">Trans Ass-IT</a> is a personal
        project, made with <i class="fa fa-heart" style="color: #a94442; font-size: 10px"></i> by <a href="https://twitter.com/zdienos" rel="noopener">@zdienos</a>.
    </footer>

<!-- Control Sidebar -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url();?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>



<script>
  //$(document).ready(function () {$("#kat").select2({placeholder: "Silahkan pilih..."});});
  $('.select2').select2();
  $('#optManufaktur').select2({placeholder: "Pilh Manufaktur..."});
  $('#optKategori').select2({placeholder: "Pilh Kategori..."});
  $('#optDepartemen').select2({placeholder: "Pilh Departemen..."});
  $('#optLokasi').select2({placeholder: "Pilh Lokasi..."});

  //$('.tooltip').tooltip();
  $("[rel='tooltip']").tooltip();

</script>

</body>
</html>
