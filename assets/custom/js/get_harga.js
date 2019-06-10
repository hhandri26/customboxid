$("#id_qty").on('change',function (event) {
    var id_ukuran = $('#id_ukuran').val();
    var id_qty    = $('#id_qty').val();
    var id_product= $('#id_product').val();
    var url       = $('#url').val();
    $.ajax({
	    url: url,
	    type: 'POST',
	    data: {
                id_ukuran   : id_ukuran,
                id_qty      : id_qty, 
                id_product  : id_product 
        },
	    dataType: 'JSON',
 	    success: function (R) {
             if(R.pesan=='sukses'){
                $('#harga').val(R.harga);
                $('#next').show();
             }else{
                Alert("warning","Opps !! Harga belum kami siapkan");
                $('#next').hide();
             }

        }
    });
});

$("#id_qty_custom").on('change',function (event) {
   var panjang = $('#x1').val();
   var lebar   = $('#x2').val();
   var tinggi  = $('#y').val();
   var warna   = $('#color').val();
   var luas    = Number(panjang)*Number(lebar)*Number(tinggi);
   var url     = $('#url').val();
   var id_qty  = $('#id_qty_custom').val();
   $.ajax({
      url: url,
      type: 'POST',
      data: {
               luas        : luas,
               id_qty      : id_qty
       },
      dataType: 'JSON',
       success: function (R) {
            if(R.pesan=='sukses'){
               $('#harga').val(R.harga);
               $('#harga_2').val(R.r_harga);
               $('#berat').val(R.berat);
               $('#next').show();
            }else{
               Alert("warning","Opps !! Harga belum kami siapkan");
               $('#next').hide();
            }

       }
   });
});