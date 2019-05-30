<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Gambar Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--form-->
        <?php echo form_open_multipart('admin/edit_member_foto/'); ?>
         <div class="form-group">
          <img class="img-thumbnail" width="200" height="200" id="profile-pre" 
          src="<?php echo base_url('assets/img/member/'.$edit->foto);?>" alt="your image" /><br><br>
          <label for="gambar" class="col-form-label">Gambar Informasi</label>
          <input type="file" name="gambar" id="profile-id">
        </div>
        <input type="hidden" name="id" value="<?php echo $edit->id?>">
        <input type="hidden" name="gambar2" value="<?php echo $edit->foto?>">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Update Gambar">
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipient = button.data('whatever')
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
<section class="content">
  <div class="box box-default">
    <div class="box-body">
      <!--form-->
      <?php echo form_open('admin/edit_member_pro'); ?>
         <?php if($this->session->flashdata('info')): ?>
          <div id="error"><?php echo $this->session->flashdata('info'); ?></div>
        <?php endif; ?>

         <div class="form-group">
          <label for="gambar" class="col-form-label">Ganti Gambar</label><br>
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Ganti gambar</button>
        </div>

        <div class="form-group">
          <label for="judul" class="col-form-label">Nama</label>
          <input type="text" class="form-control"  name="nama" value="<?php echo $edit->nama ?>" required>
        </div>

         <div class="form-group">
            <label class="col-form-label">No Hp</label>
            <input type="text" name="hp" class="form-control" value="<?php echo $edit->hp ?>" required>
          </div>

          <div class="form-group">
            <label class="col-form-label">Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $edit->email ?>" required>
          </div>

          <div class="form-group">
            <label class="col-form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $edit->alamat ?>" required>
          </div>

          <div class="form-group">
            <label class="col-form-label">Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $edit->username ?>" readonly>
          </div>
           <input type="hidden" name="id" value="<?php echo $edit->id?>">

          <div class="form-group">
            <label class="col-form-label">Password</label>
            <input type="text" name="password" class="form-control" required>
          </div>


        <input type="hidden" name="id" value="<?php echo $edit->id; ?>">        
        <!--form-->
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn btn-primary" value="Update">
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</section>