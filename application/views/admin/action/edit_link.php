<section class="content">
  <div class="box box-default">
    <div class="box-body">
      <!--form-->
      <?php echo form_open('admin/edit_link_pro'); ?>
         <?php if($this->session->flashdata('info')): ?>
          <div id="error"><?php echo $this->session->flashdata('info'); ?></div>
        <?php endif; ?>

        <div class="form-group">
          <label for="judul" class="col-form-label">Nama</label>
          <input type="text" class="form-control"  name="nama" value="<?php echo $mockup->nama ?>" required>
        </div>

        <div class="form-group">
          <label for="link" class="col-form-label">Link</label><br>
          <input type="text" class="form-control"  name="link" value="<?php echo $mockup->link ?>" required>
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