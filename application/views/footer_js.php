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

<!-- bootstrap datepicker -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url();?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>



<script>
  function isNumber(evt) {
      evt = (evt) ? evt : window.event;
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57)) {
          alert("Harus berupa angka!");
          return false;
      }
      return true;
  }

  $('.select2').select2({width: '100%', dropdownParent: $('#modalForm')});
  $('#optManufaktur').select2({placeholder: "Pilh Manufaktur...", width: '100%'});
  $('#optKategori').select2({placeholder: "Pilh Kategori...", width: '100%'});
  $('#optDepartemen').select2({placeholder: "Pilh Departemen...", width: '100%'});
  $('#optLokasi').select2({placeholder: "Pilh Lokasi...", width: '100%'});
  $('#optModel').select2({placeholder: "Pilh Model...", width: '100%'});
  $('#optTipe').select2({placeholder: "Pilh Tipe...", width: '100%'});
  $('#optPemakai').select2({placeholder: "Pilh Pengguna...", width: '100%'});

  //Date picker
  $('#datepicker').datepicker({
      autoclose: true,
      locale: 'no',
      format: 'yyyy-mm-dd'
    })


  //$('.tooltip').tooltip();
  $("[rel='tooltip']").tooltip();

  //dataTables
  $('#dataTable').DataTable()

</script>
