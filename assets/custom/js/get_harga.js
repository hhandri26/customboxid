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