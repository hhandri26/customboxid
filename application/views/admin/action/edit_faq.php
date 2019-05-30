<section class="content">
  <div class="box box-default">
    <div class="box-body">
<?php echo form_open('admin/edit_faq_pro/'); ?>
      <div class="form-group">
        <label for="judul" class="col-form-label">Question</label>
        <input type="text" class="form-control"  name="question" required value="<?php echo $faq->question;?>">
      </div>

      <div class="form-group">
        <label for="isi" class="col-form-label">Answer</label>
         <input type="text" class="form-control"  name="answer" required value="<?php echo $faq->answer;?>">
      </div>
      <input type="hidden" name="id" value="<?php echo $faq->id;?>">
      
    </div>

     <div class="modal-footer">
          <input type="submit" name="submit" class="btn btn-primary" value="Update">
        </div>
<?php echo form_close(); ?>
</div>
</section>