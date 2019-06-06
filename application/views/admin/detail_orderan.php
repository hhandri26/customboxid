<div class="box-body no-padding">
  <div class="mailbox-read-info">
    <h5>Detail Pesanan
    <span class="mailbox-read-time pull-right"><?php echo $baca->waktu ?></span></h5>

  </div>

  <div class="mailbox-controls with-border text-center">
  </div>

  <div class="mailbox-read-message">
    <?php echo form_open_multipart('admin/status_orderan/'); ?>
        <div class="form-group">
          <label for="judul" class="col-form-label">Nama</label>
          <input type="text" class="form-control"  name="nama" value="<?php echo $baca->nama ?>" readonly="">
        </div>
        <div class="form-group">
          <label for="judul" class="col-form-label">Email</label>
          <input type="text" class="form-control"  name="email" value="<?php echo $baca->email ?>" readonly="">
        </div>
        <div class="form-group">
          <label for="judul" class="col-form-label">No Tlpn</label>
          <input type="text" class="form-control"  name="hp" value="<?php echo $baca->hp ?>" readonly="">
        </div>
        <div class="form-group">
          <label for="judul" class="col-form-label">Nomor Pemesanan</label>
          <input type="text" class="form-control"  name="no_pemesanan" value="<?php echo $baca->no_pemesanan ?>" readonly="">
        </div>
        <div class="form-group">
          <label for="judul" class="col-form-label">Box</label>
          <input type="text" class="form-control"  name="product" value="<?php echo $baca->product ?>" readonly="">
        </div>
        <div class="form-group">
          <label for="judul" class="col-form-label">Detail</label>
          <textarea class="form-control" name="detail" readonly=""><?php echo $baca->detail ?></textarea>
        </div>
        <div class="form-group">
          <label for="judul" class="col-form-label">Alamat</label>
          <textarea class="form-control" name="alamat" readonly=""><?php echo $baca->alamat_lengkap ?></textarea>
        </div>
        <div class="form-group">
          <label for="judul" class="col-form-label">Kurir</label>
          <input type="text" class="form-control"  name="kurir" value="<?php echo $baca->kurir ?>" readonly="">
        </div>
        <div class="form-group">
          <label for="judul" class="col-form-label">Ongkos Kirim</label>
          <input type="text" class="form-control"  name="ongkir" value="<?php echo "Rp " . number_format($baca->ongkir,2,',','.');?>" readonly="">
        </div>
        <div class="form-group">
          <label for="judul" class="col-form-label">Harga Box</label>
          <input type="text" class="form-control"  name="harga" value="<?php echo "Rp " . number_format($baca->harga,2,',','.');?>" readonly="">
        </div>
        <div class="form-group">
          <label for="judul" class="col-form-label">Total harga</label>
          <input type="text" class="form-control"  name="total_harga" value="<?php echo "Rp " . number_format($baca->total_harga,2,',','.');?>" readonly="">
        </div>
        <?php if($baca->bukti_transfer==''){?>
          <div class="form-group">
            <a href="#" class="btn btn-danger">Bukti Transfer Belum Dikirim</a>
          </div>
        <?php }else{?>
          <img class="img-thumbnail" width="200" height="200" id="profile-pre" 
          src="<?php echo base_url('assets/img/bukti_transfer/'.$baca->bukti_transfer);?>" alt="your image" /><br><br>
          <label for="gambar" class="col-form-label">Bukti Transfer</label>
        <?php }?>
        <div class="form-group">
          <select class="form-control" name="status" require>
            <option value="">Pilih status</option>
            <option value="1">Orderan Baru</option>
            <option value="2">Progress</option>
            <option value="3">Selesai</option>
            <option value="4">Reject</option>
          </select>
        </div>
        <input type="hidden" name="id" value="<?php echo $baca->id;?>">
        <div class="form-group">
          <input type="submit" class="btn btn-info" name="submit" value="Konfirmasi">
        </div>


    <?php echo form_close(); ?>
  </div>
</div>