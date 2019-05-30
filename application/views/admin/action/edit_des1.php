<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">edit Gambar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--form-->
        <?php echo form_open_multipart('admin/edit_gambar_des1/'); ?>
         <div class="form-group">
          <img class="img-thumbnail" width="200" height="200" id="profile-pre" 
          src="<?php echo base_url('assets/img/web/'.$edit_head_id->gambar);?>" alt="your image" /><br><br>
          <label for="gambar" class="col-form-label">Gambar Informasi</label>
          <input type="file" name="gambar" id="profile-id">
        </div>
        <input type="hidden" name="id" value="<?php echo $edit_head_id->id?>">
        <input type="hidden" name="gambar2" value="<?php echo $edit_head_id->gambar?>">

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
      <?php echo form_open('admin/edit_des1_pro'); ?>
         <?php if($this->session->flashdata('info')): ?>
          <div id="error"><?php echo $this->session->flashdata('info'); ?></div>
        <?php endif; ?>

         <div class="form-group">
          <label for="gambar" class="col-form-label">Ganti Gambar</label>
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Ganti gambar</button>
        </div>

        <div class="form-group">
          <label for="judul" class="col-form-label">Judul heading</label>
          <input type="text" class="form-control"  name="title" value="<?php echo $edit_head_id->title ?>" required>
        </div>

        <div class="form-group">
          <label for="isi" class="col-form-label">Isi heading</label><br>
          <textarea id="summernote" name="deskripsi" rows="10" cols="80" >
            <?php echo $edit_head_id->deskripsi ?>
          </textarea>
        </div>

        <input type="hidden" name="id" value="<?php echo $edit_head_id->id; ?>">        
        <!--form-->
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn btn-primary" value="Update">
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</section>