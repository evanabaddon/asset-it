<!-- Content Header (Page header) -->
<section class="content-header" style="padding-bottom: 30px;">
  <h1 class="pull-left">
    Manufaktur
  </h1>
  <div class="pull-right">
  <a href="<?php echo base_url('manufaktur/tambah')?>" class="btn btn-primary pull-right">Tambah Manufaktur</a>
  <button id="btnAdd" class="btn btn-success">Add New</button>
  </div>
</section>

<!-- Main content -->
<section class="content">

  <div class="box">
    <div class="box-body">
      <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <td>ID</td>
                  <td>Manufaktur (Merek)</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody id="showdata">
              </tbody>
          </table>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- ./box-body -->
  </div>
</section>
<!-- /.content -->

</div>
<!-- /.content-wrapper
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 1.2.0
  </div>
  <strong>Copyright &copy; 2016-2018 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
  reserved.
</footer> -->


<footer class="main-footer hidden-print">
      <div class="pull-right hidden-xs">
        <b>Version</b> v1.1.9 - build 3124 (master)
        <a target="_blank" class="btn btn-default btn-xs" href="http://zdienos.com" rel="noopener">User's Manual</a>
        <a target="_blank" class="btn btn-default btn-xs" href="https://zdienos.com/support" rel="noopener">Report a Bug</a>
      </div>
      <a target="_blank" href="https://snipeitapp.com" rel="noopener">Trans Ass-IT</a> is an personal
        project, made with <i class="fa fa-heart" style="color: #a94442; font-size: 10px"></i> by <a href="https://twitter.com/zdienos" rel="noopener">@zdienos</a> under the <a href="https://www.gnu.org/licenses/agpl-3.0.en.html" rel="noopener">AGPL3 license</a>.
    </footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Recent Activity</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

              <p>Will be 23 on April 24th</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-user bg-yellow"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

              <p>New phone +1(800)555-1234</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

              <p>nora@example.com</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-file-code-o bg-green"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

              <p>Execution time 5 seconds</p>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

      <h3 class="control-sidebar-heading">Tasks Progress</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Custom Template Design
              <span class="label label-danger pull-right">70%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Update Resume
              <span class="label label-success pull-right">95%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-success" style="width: 95%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Laravel Integration
              <span class="label label-warning pull-right">50%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Back End Framework
              <span class="label label-primary pull-right">68%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

    </div>
    <!-- /.tab-pane -->
    <!-- Stats tab content -->
    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
    <!-- /.tab-pane -->
    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
      <form method="post">
        <h3 class="control-sidebar-heading">General Settings</h3>

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Report panel usage
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Some information about this general settings option
          </p>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Allow mail redirect
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Other sets of options are available
          </p>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Expose author name in posts
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Allow the user to show his name in blog posts
          </p>
        </div>
        <!-- /.form-group -->

        <h3 class="control-sidebar-heading">Chat Settings</h3>

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Show me as online
            <input type="checkbox" class="pull-right" checked>
          </label>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Turn off notifications
            <input type="checkbox" class="pull-right">
          </label>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Delete chat history
            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
          </label>
        </div>
        <!-- /.form-group -->
      </form>
    </div>
    <!-- /.tab-pane -->
  </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>


<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data</h4>
      </div>
      <div class="modal-body">
      <form id="myForm" class="form-horizontal" action="" method="post">
        <div class="form-group">
            <label for="id" class="label-control col-md-2">ID</label>
            <div class="col-md-8">
              <input type="text" name="txt_id" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="manufaktur" class="label-control col-md-2">Manufaktur</label>
            <div class="col-md-8">
              <input type="text" name="txt_manufaktur" class="form-control">
            </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnSave"class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script type="text/javascript" src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>

 <script>
 $(function(){

   tampilManufaktur();

   //add new
   $('#btnAdd').click(function(){
     $('#myModal').modal('show');
     $('#myForm').attr('action','<?php echo base_url(); ?>manufaktur/tambahManufaktur');
   });

   $('#btnSave').click(function(){
     var url = $('#myForm').attr('action');
     var data= $('#myForm').serialize();
     //validate myForm
     var manufaktur = $('input[name=txt_manufaktur]');
     var result = '';
     if(manufaktur.val()==''){
       manufaktur.parent().parent().addClass('has-error');
     }else{
       manufaktur.parent().parent().removeClass('has-error');
       result +='1';
     }
     if(result=='1'){
       $.ajax({
         type: 'ajax',
         method: 'post',
         url: url,
         data: data,
         async: false,
         dataType: 'json',
         success: function(response){
           //if(response.success){
             $('#myModal').modal('hide');
             $('#myForm')[0].reset();
             tampilManufaktur();
           //}else{
           //   alert('Error');
           //}
         },
         error: function(){
           alert('Gagal menambahkan data');

         }
       })
     }

   });
   //functions
   function tampilManufaktur(){
     $.ajax({
       type: 'ajax',
       url: '<?php echo base_url() ?>manufaktur/ambilmanufaktur',
       async: false,
       dataType: 'json',
       success: function(data) {
         var html = '';
         var i;
         for(i=0; i<data.length; i++){
           html += '<tr>' +
                   '<td>'+data[i].id+'</td>'+
                   '<td>'+data[i].manufaktur+'</td>'+
                   '</tr>';
         }
         $('#showdata').html(html);
       },
       error: function(){
           alert('Tidak bisa mengambil data');
       }
     })
   }
 });
 </script>
