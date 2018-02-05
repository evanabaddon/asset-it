<script>
  //$('#optTipe').select2({placeholder: "Pilh Tipe...", width: '100%', dropdownParent: $('#modalForm')});

  var save_method;
  var table;

  function tambah_kategori(){
    save_method = 'tambah';
    $('#form')[0].reset();
    $('[name="opt_tipe"]').val(0).trigger('change');

    $('.modal-title').text('Tambah kategori');
    $('#modalForm').modal('show');
  }

  function simpan_data(){
    var url;

    if(save_method =='tambah'){
      url = '<?php echo base_url() . 'kategori/tambah_kategori' ?>';
    } else{
      url = '<?php echo base_url() . 'kategori/update_kategori' ?>';
    }

    if($('[name="txt_kategori"]').val().length == 0)
    {
      alert('Nama kategori tidak boleh kosong');
    }
    else
    {
      //pastikan ada option yang dipilih
      var s = $('#optTipe');
      if(!s.select2('data')[0]) //memastikan option terpilih
      {
        alert('Pilih tipe kategori dulu !');
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

  function ubah_kategori(id){

    save_method = 'update';
    $('#form')[0].reset();

    //load data ajax_scripts
    $.ajax({
      url: "<?php echo base_url() . 'kategori/ubah/';?>"+id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="txt_id"]').val(data.id);
        $('[name="txt_kategori"]').val(data.kategori);
        $('[name="opt_tipe"]').val(data.tipe).trigger('change');

        $('#modalForm').modal('show');
        $('.modal-title').text('Ubah kategori');
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert('Error get data from Ajax');
      }
    });
  }

  function hapus_kategori(id){
    if(confirm('Anda yakin akan menghapus data?')){
      $.ajax({
        url: "<?php echo base_url() . 'kategori/hapus_kategori/';?>"+id,
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
