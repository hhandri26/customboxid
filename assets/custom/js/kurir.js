function getLokasi() {
    var $op = $("#sel1"), $op1 = $("#sel11");
    $.getJSON("product/provinsi", function(data){  
        $.each(data, function(i,field){  
            $op.append('<option value="'+field.province_id+'">'+field.province+'</option>'); 
            $op1.append('<option value="'+field.province_id+'">'+field.province+'</option>'); 
        });
    });
}

getLokasi();

$("#sel11").on("change", function(e){
    e.preventDefault();
    var option = $('option:selected', this).val();    
    $('#sel22 option:gt(0)').remove();
    $('#kurir').val('');
    if(option==='')
    {
        alert('null');    
        $("#sel22").prop("disabled", true);
        $("#kurir").prop("disabled", true);
    }
    else
    {        
        $("#sel22").prop("disabled", false);
        getKota1(option);
    }
});


$("#sel1").on("change", function(e){
        e.preventDefault();
        var option = $('option:selected', this).val();    
        $('#sel2 option:gt(0)').remove();
        $('#kurir').val('');
    if(option===''){
        alert('null');    
        $("#sel2").prop("disabled", true);
        $("#kurir").prop("disabled", true);
    }else{        
        $("#sel2").prop("disabled", false);
        getKota(option);
    }
});

$("#sel22").on("change", function(e){
    e.preventDefault();
    var option = $('option:selected', this).val();    
    $('#kurir').val('');
    if(option===''){
        alert('null');    
        $("#kurir").prop("disabled", true);
    }else{        
        $("#kurir").prop("disabled", false);    
    }
});


$("#kurir").on("change", function(e){
    e.preventDefault();
    var option  = $('option:selected', this).val();    
    var origin  = $("#sel2").val();
    var des     = $("#sel22").val();
    var qty     = $("#berat").val();
    if(qty==='0' || qty===''){
        alert('null');
    }
    else if(option===''){
        alert('null');        
    }else{                
        getOrigin(origin,des,qty,option);
    }
});


function getOrigin(origin,des,qty,cour) {
    var $op     = $("#hasil"); 
    var i, j, x = "";
    $.getJSON("product/tarif/"+origin+"/"+des+"/"+qty+"/"+cour, function(data){     
        $.each(data, function(i,field){  
            for(i in field.costs){
            x += "<div class='form-group'><label><b>" + field.costs[i].service + "</b> : "+field.costs[i].description+"</label>";
            for (j in field.costs[i].cost) {
            x += "<input type='radio' onclick='send_harga()' id='ongkir' name='ongkir' class='kurir_cs rcheck' value='"+field.costs[i].cost[j].value +"'>"+field.costs[i].cost[j].value+"</div>";
                } 
            }
            $op.html(x);
        });
    });
}


function getKota1(idpro) {
    var $op = $("#sel22"); 
        $.getJSON("product/kota/"+idpro, function(data){      
        $.each(data, function(i,field){  
        $op.append('<option value="'+field.city_id+'">'+field.type+' '+field.city_name+'</option>'); 
    });
});
}



function getKota(idpro) {
    var $op = $("#sel2"); 
    $.getJSON("kota/"+idpro, function(data){      
    $.each(data, function(i,field){  
        $op.append('<option value="'+field.city_id+'">'+field.type+' '+field.city_name+'</option>'); 
    });
    });
}
function send_harga(){
    var harga           = $("input[name='ongkir']:checked").val();
    var harga_barang    = $('#harga_barang').val();
    var total           = Number(harga) + Number(harga_barang);
    $('#harga_ongkir').val(convertToRupiah(harga));
    $('#total_harga').val(convertToRupiah(total));
    $('#total_harga2').val(total);
}
