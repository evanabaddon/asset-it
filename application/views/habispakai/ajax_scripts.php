<script>

//$('#optManufaktur').select2({placeholder: "Pilh Manufaktur...", width: '100%',  dropdownParent: $('#modalForm')});
//$('#optKategori').select2({placeholder: "Pilh Kategori...", width: '100%', dropdownParent: $('#modalForm')});
  $('#optModel').select2({placeholder: "Pilh Modessl...", width: '100%', dropdownParent: $('#modalTambahBarang')});

  var save_method;
  var table;

  function tambah_barang(){
    save_method = 'tambah';
    $('#formTambahBarang')[0].reset();
    //tips biar select2 tereset
    //$('[name="optManufaktur"]').val(0).trigger('change');
    //$('[name="opt_Model"]').val(0).trigger('change');
    $('#optModel').val(0).trigger('change');

    $('.modal-title').text('Tambah Barang');
    $('#modalTambahBarang').modal('show');
  }

  function simpan_data(){
    var url;

    if(save_method =='tambah'){
      url = '<?php echo base_url() . 'habispakai/tambah_model' ?>';
    } else{
      url = '<?php echo base_url() . 'model/update_model' ?>';
    }
    //pastikan ada option yang dipilih
    //var s = $('#optModel');
    //if(s.select2('data') && !!s.select2('data')[0]){
  //      alert('Helloo');
    //}
    var s = $('#optModel');
    if(!s.select2('data')[0]){ //memastikan option terpilih
        alert('Pilih model dulu !');
    }
    else {
      if($('[name="txt_stok"]').val().length == 0) //memastikan stok terisi
      {
          alert('Stok harus diisi !');
      }
      else {
        $.ajax({
          url: url,
          type: "POST",
          data: $('#formTambahBarang').serialize(),
          dataType: "JSON",
          success: function(data){
            $('#modalTambahBarang').modal('hide');
            location.reload();
          },
          error: function(jqXHR, textStatus, errorThrown){
            alert('Error menyimpan data');
            console.log(data);
          }
        });
      } //stok if
    } //option if
  }

  function tampil_checkin(id){
    //save_method = 'checkin';
    //$('#form2')[0].reset();
    //tips biar select2 tereset
    //$('[name="optManufaktur"]').val(0).trigger('change');
    //$('[name="opt_Model"]').val(0).trigger('change');
    //$('#optModel').val(0).trigger('change');
    $.ajax({
      url: "<?php echo base_url() . 'habispakai/masuk/';?>"+id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        //console.log(data['d_model'].model); //perhartikan ini baik2, dari hasil console bisa dilihat
        $('[name="txt_nama"]').val(data['d_model'].model);
        $('[name="txt_id_habispakai"]').val(data['d_habispakai'].id);
        $('[name="txt_stok"]').val(data['d_habispakai'].stok);
        $('[name="txt_id_model"]').val(data['d_model'].id);

        $('.modal-title2').text('Checkin Barang');
        $('#modalCheckinBarang').modal('show');
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert('Error get data from Ajax');
      }
    });
  }

  function simpan_checkin(){
    var url;

    url = '<?php echo base_url() . 'habispakai/checkin' ?>';
    

      if($('[name="txt_qty"]').val().length == 0) //memastikan qty terisi
      {
          alert('Jumlah (quantity) harus diisi !');
      }
      else {
        $.ajax({
          url: url,
          type: "POST",
          data: $('#formCheckIn').serialize(),
          dataType: "JSON",
          success: function(data){
            $('#modalCheckinBarang').modal('hide');
            location.reload();
          },
          error: function(jqXHR, textStatus, errorThrown){
            alert('Error menyimpan data');
          }
        });
      } //stok if
    
  }



</script>
