<?php $this->load->view($header); ?>
<section class="jarak">
    <h2 class="display-none" aria-hidden="true"></h2>
</section>
<section class="shop-details text-left">
    <h2 class="display-none" aria-hidden="true"></h2>
    <div class="container">
        <div class="row margin-80px-bottom">
            <div class="col-md-12 col-sm-12 shop_info wow fadeInRight animated text-left">
                <div class="quote">
                    <form action="<?php echo base_url('pesan-box-custom');?>" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <label for="size" class="textFieldLabel">Panjang*</label>
                                    <input id="x1" type="number" name="panjang" class="form-control" value="10" min="0" max="500">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <label for="size" class="textFieldLabel">Lebar*</label>
                                    <input id="x2" type="number" name="lebar" value="10" min="0" max="50" class="form-control">
                                </div> 
                                <div class="col-md-4 col-sm-4">
                                    <label for="size" class="textFieldLabel">Tinggi*</label>
                                    <input id="y" type="number" name="tinggi" value="10" min="0" max="50" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <label for="size" class="textFieldLabel">warna*</label>
                                    <input id="color" type="color" name="warna" value="#ff8d4b"  class="form-control">
                                </div>   
                                <div class="col-md-4 col-sm-4">
                                    <label for="size" class="textFieldLabel">Jumlah Pemesanan*</label>
                                    <select id="id_qty_custom" name="qty" class="textField">
                                    <option value="">- Pilih Quantity -</option>
                                        <?php foreach($qty as $row3){;?>
                                            <option value="<?php echo $row3->id;?>"><?php echo $row3->qty;?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <label for="size" class="textFieldLabel">Total Harga</label>
                                    <input type="text" id="harga" class="form-control" style="width:500px">
                                    <input type="hidden" id="harga_2" name="harga">
                                    <input type="hidden" id="berat" name="berat">
                                </div> 
                                <input type="hidden" value="<?php echo base_url('custombox/get_price');?>" id="url">                           
                            </div>
                        </div>
        
                        <div id="next" style="display:none">
                            <button class="btn btn-blue btn-medium text-extra-small display-inline-block margin-10px-left" type="submit">
                                Pesan sekarang
                            </button>
                        </div>
                    </form>
            
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url();?>assets/custom/js/3dbox.js"></script>
<?php $this->load->view($footer); ?>
