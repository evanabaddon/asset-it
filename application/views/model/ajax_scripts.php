<script>

$('#optManufaktur').select2({placeholder: "Pilh Manufaktur...", width: '100%',  dropdownParent: $('#modalForm')});
$('#optKategori').select2({placeholder: "Pilh Kategori...", width: '100%', dropdownParent: $('#modalForm')});

  var save_method;
  var table;

  function tambah_model(){
    save_method = 'tambah';
    $('#form')[0].reset();
    //tips biar select2 tereset
    $('[name="optManufaktur"]').val(0).trigger('change');
    $('[name="optKategori"]').val(0).trigger('change');

    $('.modal-title').text('Tambah model');
    $('#modalForm').modal('show');
  }

  function simpan_data(){
    var url;

    if(save_method =='tambah'){
      url = '<?php echo base_url() . 'model/tambah_model' ?>';
    } else{
      url = '<?php echo base_url() . 'model/update_model' ?>';
    }

    if($('[name="txt_model"]').val().length == 0)
    {
      alert('Nama model tidak boleh kosong');
    }
    else
    {
      //pastikan ada option yang dipilih
      if($('#optManufaktur').val().length == 0) //bingung juga dengan validasi model ini, bisa kalo pake length, tapi kalo pake data[0] tidak bisa, sementara di file lain bisa
      {
        alert('Pilih manufaktur dulu !');
      }
      else
      {
        //pastikan ada option yang dipilih
        if($('#optKategori').val().length == 0) //memastikan qty terisi
        {
          alert('Pilih kategori dulu !');
        }
        else
        {
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
    }
  }

  function ubah_model(id){

    save_method = 'update';
    $('#form')[0].reset();

    //load data ajax_scripts
    $.ajax({
      url: "<?php echo base_url() . 'model/ubah/';?>"+id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="txt_id"]').val(data.id);
        $('[name="txt_model"]').val(data.model);
        $('[name="opt_manufaktur"]').val(data.manufaktur).trigger('change');
        $('[name="opt_kategori"]').val(data.kategori).trigger('change');
        $('[name="txt_catatan"]').val(data.catatan);

        $('#modalForm').modal('show');
        $('.modal-title').text('Ubah model');
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert('Error get data from Ajax');
      }
    });
  }

  function hapus_model(id){
    if(confirm('Anda yakin akan menghapus data?')){
      $.ajax({
        url: "<?php echo base_url() . 'model/hapus_model/';?>"+id,
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
