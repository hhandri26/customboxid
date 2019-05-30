<section class="content">
  <div class="box box-default">
    <div class="box-body">
      <!--form-->
      <?php echo form_open('admin/edit_mockupd_pro'); ?>
         <?php if($this->session->flashdata('info')): ?>
          <div id="error"><?php echo $this->session->flashdata('info'); ?></div>
        <?php endif; ?>

        <div class="form-group">
          <label for="judul" class="col-form-label">icon</label>
          <input type="text" class="form-control"  name="icon" value="<?php echo $mockup->icon ?>" required>
        </div>

        <div class="form-group">
          <label for="judul" class="col-form-label">judul</label>
          <input type="text" class="form-control"  name="judul" value="<?php echo $mockup->judul ?>" required>
        </div>

        <div class="form-group">
          <label for="isi" class="col-form-label">Deskripsi</label><br>
          <textarea id="summernote" name="deskripsi" rows="10" cols="80" >
            <?php echo $mockup->deskripsi ?>
          </textarea>
        </div>

        <input type="hidden" name="id" value="<?php echo $mockup->id; ?>">        
        <!--form-->
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn btn-primary" value="Update">
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</section>