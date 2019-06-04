<!--Header-->
<?php $this->load->view($header); ?>
<section class="jarak">
    <h2 class="display-none" aria-hidden="true"></h2>
</section>
<section id="shop" class="shop-details text-left">
    <h2 class="display-none" aria-hidden="true"></h2>
    <div class="container">
        <div class="row margin-80px-bottom">
            <div class="col-md-5 col-sm-5 wow fadeInLeft animated">
                <div class="image-zoom">
                    <img src="<?php echo base_url('assets/img/product/'.$detail->gambar);?>" alt="gambar box">
                </div>
            </div>
            <div class="col-md-7 col-sm-7 shop_info wow fadeInRight animated text-left">
                <h6 class="text-uppercase alt-font text-extra-gray margin-20px-bottom font-weight-500 sm-width-100 xs-width-100 xs-margin-30px-top">
                    <?php echo $detail->title;?>
                </h6>
                
                <p class="margin-15px-bottom">
                    <?php echo $detail->deskripsi;?>
                </p>
                <div class="quote">
                    <form action="<?php echo base_url('pesan-box');?>" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <label for="size" class="textFieldLabel">Select a size*</label>
                                    <select id="id_ukuran" name="id_ukuran" class="textField" require>
                                        <option value="">- Pilih Ukuran -</option>
                                        <?php foreach($ukuran as $row2){;?>
                                            <option value="<?php echo $row2->id;?>"><?php echo $row2->ukuran;?></option>
                                        <?php }?>
                                    </select>
                                </div> 
                                <div class="col-md-3 col-sm-4">
                                    <label for="size" class="textFieldLabel">Jumlah Pemesanan*</label>
                                    <select id="id_qty" name="id_qty" class="textField">
                                    <option value="">- Pilih Quantity -</option>
                                        <?php foreach($qty as $row3){;?>
                                            <option value="<?php echo $row3->id;?>"><?php echo $row3->qty;?></option>
                                        <?php }?>
                                    </select>

                                </div>
                                <input type="hidden" value="<?php echo $id_product;?>" id="id_product" name="id_product">
                                <input type="hidden" value="<?php echo base_url('product/get_price');?>" id="url">                           
                            </div>
                        </div>
                        
                        <div class="share clearfix padding-10px-tb margin-30px-bottom">
                            <p class="pull-left no-margin"><strong>Total Harga:</strong></p>
                            <div class="small-icon social-icon-style-10 social_icon list-inline">
                                <ul class="extra-small-icon no-margin-bottom">
                                    <a class="text-dark-gray facebook-bg-hvr" href="#">
                                        <input type="text" id="harga" class="form-control" style="width:500px">
                                    </a>
                                    
                                </ul>
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
<!-- footer -->
<?php $this->load->view($footer); ?>