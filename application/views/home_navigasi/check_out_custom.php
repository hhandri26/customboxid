<!--Header-->
<?php $this->load->view($header); ?>
<section class="jarak">
    <h2 class="display-none" aria-hidden="true"></h2>
</section>
<style>
.kurir_cs{
    float:right;
    widht:300px;
}

</style>
<section id="shop-cart" class="shop padding-80px-tb">
    <h2 class="display-none" aria-hidden="true"></h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 cart_table wow fadeInUp animated margin-50px-bottom">
                <div class="table-responsive">
                    <table class="table table-bordered border-radius">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th class="text-center">Ukuran</th>
                            <th class="text-center">Jumlah Box</th>
                            <th class="text-center"> Warna</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="product-name">
                                    <h6 class="text-large no-margin text-extra-dark-gray">
                                        Custom Box
                                    </h6>
                                </div>
                            </td>
                            <td>
                                <h6 class="text-large no-margin text-center text-green">
                                    <?php echo $panjang."Cm X".$lebar."Cm X".$tinggi."Cm";?>
                                </h6>
                            </td>
                            <td>
                                <h6 class="text-large no-margin text-center text-green">
                                    <?php echo $qty->qty;?>
                                </h6>
                            </td>
                            <td>
                                <h6 class="text-large no-margin text-center text-green">
                                    <input type="color" value="<?php echo $warna;?>" readonly="">
                                </h6>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="apply_coupon sm-margin-20px-top clearfix">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 coupon text-right xs-margin-10px-top xs-text-left">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 wow fadeInLeft animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">
                <div class="totals padding-15px-all xs-padding-5px-all sm-margin-20px-bottom">
                    <h6 class="area-title text-capitalize alt-font text-extra-dark-gray margin-20px-bottom font-weight-500 sm-width-100 xs-width-100">Informasi Pelanggan</h6>
                    <form class="total_form" action="<?php echo base_url('product/order_request');?>" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="hp" placeholder="Nomor Telpon" required="">
                        </div>
                        <div class="form-group">
                            <label class="select">
                                <select name="country" id="sel11" required="">
                                    <option>Provinsi</option>
                                </select>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="select">
                                <select name="state" id="sel22" required="">
                                    <option>Kota / Kabupaten</option>
                                </select>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="select">
                                <select name="kurir" id="kurir" required="">
                                    <option value=""> Pilih Kurir</option>
                                    <option value="jne">JNE</option>
                                    <option value="tiki">TIKI</option>
                                    <option value="pos">POS Indonesia</option>
                                </select>
                            </label>
                        </div>
                        <div id="hasil">
                        </div>
                        <input type="hidden" value="<?php echo $berat;?>" id="berat">
                        <input type="hidden" value="<?php echo $info->id_provinsi;?>" id="sel1">
                        <input type="hidden" value="<?php echo $info->id_kota;?>" id="sel2">
                        <input type="hidden" value="<?php echo $harga;?>" id="harga_barang" name="harga_barang">
                        <input type="hidden" value="Custom" name="product">
                        <input type="hidden" value="<?php echo $panjang."Cm X".$lebar."Cm X".$tinggi."Cm";?>" name="ukuran">
                        <input type="hidden" value="<?php echo  $qty->qty;?>" name="qty">
                        <input type="hidden" name="total_harga2" id="total_harga2">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Alamat Lengkap" name="alamat_lengkap" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Detail" name="detail" required=""></textarea>
                        </div>
                        <input type="submit" class="btn btn-green btn-medium text-extra-small display-inline-block" value="Lanjut Pembayaran">
                    </form>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight animated">
                <div class=" totals padding-15px-all xs-padding-5px-all padding-65px-bottom xs-padding-5px-bottom">
                    <h6 class="area-title text-capitalize alt-font text-extra-dark-gray margin-20px-bottom font-weight-500 sm-width-100 xs-width-100">Cart Total:</h6>
                    <table class="table table-responsive heading_space">
                        <tbody>
                        <tr>
                            <td>Harga Barang:</td> 
                            <td class="text-green text-right">
                                <input type="text" id="harga" value="<?php echo "Rp " . number_format($harga,2,',','.');?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>Ongkos Kirim:</td>
                            <td class="text-green text-right">
                                <input type="text" id="harga_ongkir" readonly>
                            </td> 
                        </tr>
                        <tr>
                            <td>Total:</td> 
                            <td class="text-right">
                                <input type="text" id="total_harga" readonly>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view($footer); ?>