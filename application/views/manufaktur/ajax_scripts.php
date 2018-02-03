<script>
  var save_method;
  var table;

  function tambah_manufaktur(){
    save_method = 'tambah';
    $('#form')[0].reset();
    $('.modal-title').text('Tambah manufaktur');
    $('#modalForm').modal('show');
  }

  function simpan_data(){
    var url;

    if(save_method =='tambah'){
      url = '<?php echo base_url() . 'manufaktur/tambah_manufaktur' ?>';
    } else{
      url = '<?php echo base_url() . 'manufaktur/update_manufaktur' ?>';
    }

    if($('#txt_manufaktur').val().length == 0)
    {
        alert('Tidak boleh kosong');
    }
    else {
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

  function ubah_manufaktur(id){
    save_method = 'update';
    $('#form')[0].reset();

    //load data ajax_scripts
    $.ajax({
      url: "<?php echo base_url() . 'manufaktur/ubah/';?>"+id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="txt_id"]').val(data.id);
        $('[name="txt_manufaktur"]').val(data.manufaktur);

        $('#modalForm').modal('show');
        $('.modal-title').text('Ubah manufaktur');
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert('Error get data from Ajax');
      }
    });
  }

  function hapus_manufaktur(id){
    if(confirm('Anda yakin akan menghapus data?')){
      $.ajax({
        url: "<?php echo base_url() . 'manufaktur/hapus_manufaktur/';?>"+id,
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
