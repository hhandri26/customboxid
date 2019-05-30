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
      <?php echo form_open('admin/edit_work_pro'); ?>
         <?php if($this->session->flashdata('info')): ?>
          <div id="error"><?php echo $this->session->flashdata('info'); ?></div>
        <?php endif; ?>
        <div class="form-group">
          <label for="judul" class="col-form-label">Icon</label>
          <input type="text" class="form-control"  name="gambar" value="<?php echo $work->gambar ?>" required>
        </div>

        <div class="form-group">
          <label for="judul" class="col-form-label">Judul heading</label>
          <input type="text" class="form-control"  name="title" value="<?php echo $work->title ?>" required>
        </div>

        <div class="form-group">
          <label for="isi" class="col-form-label">Isi heading</label><br>
          <textarea id="summernote" name="deskripsi" rows="10" cols="80" >
            <?php echo $work->deskripsi ?>
          </textarea>
        </div>

        <input type="hidden" name="id" value="<?php echo $work->id; ?>">        
        <!--form-->
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn btn-primary" value="Update">
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</section>