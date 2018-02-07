<script>

$('#optDepartemen').select2({placeholder: "Pilh Departemen...", width: '100%',  dropdownParent: $('#modalForm')});
$('#optLokasi').select2({placeholder: "Pilh Lokasi...", width: '100%', dropdownParent: $('#modalForm')});

  var save_method;
  var table;

  function tambah_pemakai(){
    save_method = 'tambah';
    $('#form')[0].reset();
    //tips biar select2 tereset
    $('[name="opt_lokasi"]').val(0).trigger('change');
    $('[name="opt_departemen"]').val(0).trigger('change');

    $('.modal-title').text('Tambah pemakai');
    $('#modalForm').modal('show');
  }

  function simpan_data(){
    var url, varOpt, validasiForm;
    validasiForm = false;

    if(save_method =='tambah'){
      url = '<?php echo base_url() . 'pemakai/tambah_pemakai' ?>';
    } else{
      url = '<?php echo base_url() . 'pemakai/update_pemakai' ?>';
    }
    
    if($('[name="txt_pemakai"]').val().length == 0)
    {
        alert('Nama tidak boleh kosong');
    }
    else {validasiForm=true;} 

    varOpt = $('#optDepartemen');
    if(!varOpt.select2('data')[0]) //memastikan option terpilih
    {
      alert('Pilih departemen dulu !');
      validasiForm=false;
    } 
    else {validasiForm=true;} 

    var varOpt = $('#optLokasi');
    if(!varOpt.select2('data')[0]) //memastikan option terpilih
    {
      alert('Pilih lokasi dulu !');
      validasiForm=false;
    }
    else {validasiForm=true;} 

    if(validasiForm){    
      $.ajax({
        url: url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data){
          $('#modalForm').modal('hide');
          location.reload();
        },
        error: function(jqXHR, textStatus, errorThrown){
          alert('Error menyimpan data');
        }
      });
    
    }
  }

  function ubah_pemakai(id){

    save_method = 'update';
    $('#form')[0].reset();

    //load data ajax_scripts
    $.ajax({
      url: "<?php echo base_url() . 'pemakai/ubah/';?>"+id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="txt_id"]').val(data.id);
        $('[name="txt_pemakai"]').val(data.nama);
        $('[name="opt_lokasi"]').val(data.lokasi).trigger('change');
        $('[name="opt_departemen"]').val(data.departemen).trigger('change');
        $('[name="txt_no_telp"]').val(data.no_telp);

        $('#modalForm').modal('show');
        $('.modal-title').text('Ubah pemakai');
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert('Error get data from Ajax');
      }
    });
  }

  function hapus_pemakai(id){
    if(confirm('Anda yakin akan menghapus data?')){
      $.ajax({
        url: "<?php echo base_url() . 'pemakai/hapus_pemakai/';?>"+id,
        type: "POST",
        dataType: "JSON",
        success: function(data){
          location.reload();
        },
        error: function(jqXHR, textStatus, errorThrown){
          alert('Error menghapus data');
        }
      })
    }
  }

</script>
