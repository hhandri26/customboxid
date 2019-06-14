<!--Header-->
<?php $this->load->view($header); ?>
<section class="jarak">
    <h2 class="display-none" aria-hidden="true">Finza</h2>
</section>
<section id="shop-cart" class="shop padding-80px-tb">
    <h2 class="display-none" aria-hidden="true"></h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeInRight animated">
                    <div class=" totals padding-15px-all xs-padding-5px-all padding-65px-bottom xs-padding-5px-bottom">
                        <h6 class="area-title text-capitalize alt-font text-extra-dark-gray margin-20px-bottom font-weight-500 sm-width-100 xs-width-100">
                            <?php echo $info->pesan_invoice;?>
                        </h6>
                        <table class="table table-responsive heading_space">
                            <tbody>
                            <tr>
                                <td>Kode Transfer:</td> 
                                <td class="text-green text-right">
                                    <input type="text" id="harga" value="<?php echo $data2['no_pemesanan'];?>" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Harga:</td>
                                <td class="text-green text-right">
                                    <input type="text" id="harga_ongkir" value="<?php echo "Rp " . number_format($data2['total_harga'],2,',','.');?>" readonly>
                                </td> 
                            </tr>
                            <tr>
                                <td>Nomor rekening:</td> 
                                <td class="text-right">
                                    <input type="text" id="total_harga" value="<?php echo $info->no_rekening;?>" readonly>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view($footer); ?>