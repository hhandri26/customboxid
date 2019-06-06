<?php $this->load->view($header); ?>
<section class="jarak">
    <h2 class="display-none" aria-hidden="true"></h2>
</section>
<section id="shop-cart" class="shop padding-80px-tb">
    <h2 class="display-none" aria-hidden="true"></h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">
                <div class="totals padding-15px-all xs-padding-5px-all sm-margin-20px-bottom">
                    <h6 class="area-title text-capitalize alt-font text-extra-dark-gray margin-20px-bottom font-weight-500 sm-width-100 xs-width-100">Informasi Pelanggan</h6>
                        <?php if($this->session->flashdata('sukses')): ?>        
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-check"></i> Info!</h4>
                                <?php echo $this->session->flashdata('sukses'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if($this->session->flashdata('gagal')): ?>  
                            <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-ban"></i> opps!</h4>
                            <?php echo $this->session->flashdata('gagal'); ?>
                            </div>
                        <?php endif; ?>
                
                        <div class="form-group">
                            <input type="text" class="form-control" name="kode_invoice" id="kode_invoice" placeholder="Masukkan Nomor Invoice" required="">
                            <input type="hidden" id="url_get_inv" value="<?php echo base_url('product/get_data_inv');?>">
                            <button class="btn btn-info" onclick="get_data_transfer()">Cari</button>
                            <br>
                        </div>
                        <div id="detail_transfer" style="display:none">
                            <?php echo form_open_multipart('product/upload_bukti_transfer'); ?>
                                <div class="form-group">
                                    <label class="select"> Nama
                                        <input type="text" class="form-control" id="nama_inv" name="nama" readonly="" >
                                        <input type="hidden" name="kode_invoice2" id="kode_invoice2">
                                    </label>
                                </div>
                                
                                <div class="form-group">
                                    <label class="select"> Total Harga
                                        <input type="text" class="form-control" id="harga_inv" name="harga" readonly="" >
                                    </label>
                                </div>
                                <div class="form-group">
                                    <img class="img-thumbnail" width="200" height="200" id="profile-pre" 
                                    src="<?php echo base_url('assets/img/df.jpg');?>" alt="your image" /><br><br>
                                    <label for="gambar" class="col-form-label">Upload Gambar</label>
                                    <input type="file" name="gambar" id="profile-id" >
                                    <input type="hidden" value ="" name="gambar" >
                                </div>
                                <input type="submit" class="btn btn-info" name="submit" value="Upload">
                            <?php echo form_close(); ?>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view($footer); ?>