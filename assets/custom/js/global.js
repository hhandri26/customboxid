function convertToRupiah(angka)
    {
        var rupiah = '';		
        var angkarev = angka.toString().split('').reverse().join('');
        for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
        return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
    }
    
$(document).ready(function() 
{
    $('.select2').select2();
    $('#summernote').summernote({
        height: 350,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
    });
});

function readURL(input) { 
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#profile-pre').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#profile-id").change(function(){
    readURL(this);
});

var url     = $("#url_gallery").val();
var gallery = function(page){
                $("#loader").show();
                $("#load_more").show();
                $.ajax({
                    url:  url+"gallery/get_gallery",
                    type:'GET',
                    data: {page:page}
                }).done(function(response){
                    $("#gallery").append(response);
                    $("#loader").hide();
                    $('#load_more').data('val', ($('#load_more').data('val')+1));
                    //scroll();
                    if(response == ""){
                        $("#load_more").hide();
                    }
                });
            };      