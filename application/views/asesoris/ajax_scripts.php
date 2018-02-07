<script>
//$('#optManufaktur').select2({placeholder: "Pilh Manufaktur...", width: '100%',  dropdownParent: $('#modalForm')});
//$('#optKategori').select2({placeholder: "Pilh Kategori...", width: '100%', dropdownParent: $('#modalForm')});
  $('#optModel').select2({placeholder: "Pilh Model...", width: '100%', dropdownParent: $('#modalTambahBarang')});
  //$("#monthPeriod").datepicker( {
  //format: "mm-yyyy",
  //  startView: "months",
  //  minViewMode: "months"
  //});
//$('#datepickerIn').datepicker('setDate','1d');
//$('#datepickerOut').datepicker('setDate','1d');

  var save_method;
  var table;

  function tambah_barang(){
    save_method = 'tambah';
    $('#formTambahBarang')[0].reset();
    //tips biar select2 tereset
    $('#optModel').val(0).trigger('change');

    $('.modal-title').text('Tambah Barang');
    $('#modalTambahBarang').modal('show');
  }

  function simpan_data(){
    var url;

    if(save_method =='tambah'){
      url = '<?php echo base_url() . 'asesoris/tambah_model' ?>';
    } 
    //pastikan ada option yang dipilih
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
    var url;
    $('#formCheckIn')[0].reset();
    //kenapa init di sini? karena ada reset di atasnya, dan juga karena di init ulang,
    //maka yang ada di footer_js, sudah tertimpa di sini
    $('#datepickerIn').datepicker({
      'setDate':'1d', //tanggal hari ini
      autoclose: true,
      locale: 'no',
      format: 'yyyy-mm-dd'
    });



    $.ajax({
      url: "<?php echo base_url() . 'asesoris/tampilcheck/';?>"+id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        //console.log(data['d_model'].model); //perhartikan ini baik2, dari hasil console bisa dilihat
        $('[name="txt_nama"]').val(data['d_model'].model);
        $('[name="txt_id_asesoris"]').val(data['d_asesoris'].id);
        $('[name="txt_stok"]').val(data['d_asesoris'].stok);
        $('[name="txt_id_model"]').val(data['d_model'].id);

        $('.modal-title2').text('CheckIn Barang');
        $('#modalCheckinBarang').modal('show');
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert('Error get data from Ajax');
      }
    });
  }

  function simpan_checkin(){
    var url;

    url = '<?php echo base_url() . 'asesoris/checkin' ?>';
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

    function tampil_checkout(id){
      var url;
      $('#formCheckOut')[0].reset();
      //kenapa init di sini? karena ada reset di atasnya, dan juga karena di init ulang,
      //maka yang ada di footer_js, sudah tertimpa di sini
      $('#datepickerOut').datepicker({
        'setDate':'1d', //tanggal hari ini
        autoclose: true,
        locale: 'no',
        format: 'yyyy-mm-dd'
      });


      $.ajax({
        url: "<?php echo base_url() . 'asesoris/tampilcheck/';?>"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data){
          //console.log(data['d_model'].model); //perhartikan ini baik2, dari hasil console bisa dilihat
          $('[name="txt_nama_out"]').val(data['d_model'].model);
          $('[name="txt_id_asesoris_out"]').val(data['d_asesoris'].id);
          $('[name="txt_stok_out"]').val(data['d_asesoris'].stok);
          $('[name="txt_id_model_out"]').val(data['d_model'].id);
          //$('[name="opt_pemakai"]').val(data.pemakai).trigger('change');
          //stok_awal= $('[name="txt_stok"]').val().text;
          //$stok_awal = (data['d_asesoris'].stok);
          //alert ($stok_awal);

          $('.modal-title').text('CheckOut Barang');
          $('#modalCheckOutBarang').modal('show');

        },
        error: function(jqXHR, textStatus, errorThrown){
          alert('Error get data from Ajax');
        }
      });
    }

    function simpan_checkout(){
      var url, stok_awal, qty_keluar, stok_akhir;

      url = '<?php echo base_url() . 'asesoris/checkout' ?>';

        if($('[name="txt_qty_out"]').val().length == 0) //memastikan qty terisi
        {
            alert('Jumlah (quantity) harus diisi !');
        }
        else
        {
          if($('#optPemakai').val().length == 0) //memastikan qty terisi
          {
              alert('Pilih pengguna dulu !');
          }
          else
          {
            //cek stok yang keluar < stok_awal
            stok_awal = $('[name="txt_stok_out"]').val();
            qty_keluar= $('[name="txt_qty_out"]').val();
            stok_akhir= stok_awal - qty_keluar;

            if(stok_akhir < 0) {
              alert("Jumlah barang keluar lebih banyak dari stok!");
            } else {
              $.ajax({
                url: url,
                type: "POST",
                data: $('#formCheckOut').serialize(),
                dataType: "JSON",
                success: function(data){
                  //console.log(data);
                  $('#modalCheckOutBarang').modal('hide');
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


</script>
