function get_data_transfer() {
    var kode_transfer = $('#kode_invoice').val();
    var url_inv       =  $('#url_get_inv').val();
    $.ajax({
	    url: url_inv,
	    type: 'POST',
	    data: {kode_transfer : kode_transfer },
	    dataType: 'JSON',
 	    success: function (R) {
             if(R.pesan=='sukses'){
                $('#nama_inv').val(R.nama);
                $('#harga_inv').val(R.harga);
                $('#kode_invoice2').val(kode_transfer);
                $('#detail_transfer').show();
             }else{
                Alert("warning","Opps !! Nomor Invoice Tidak Di temukan !");
                $('#detail_transfer').hide();
             }

        }
    });
}