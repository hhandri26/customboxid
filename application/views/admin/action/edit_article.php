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
        <?php echo form_open_multipart('admin_article/edit_gambar_article/'); ?>
         <div class="form-group">
          <img class="img-thumbnail" width="200" height="200" id="profile-pre" 
          src="<?php echo base_url('assets/img/article/'.$article_edit->foto);?>" alt="your image" /><br><br>
          <label for="gambar" class="col-form-label">Gambar Informasi</label>
          <input type="file" name="gambar" id="profile-id">
        </div>
        <input type="hidden" name="id" value="<?php echo $article_edit->id?>">
        <input type="hidden" name="gambar2" value="<?php echo $article_edit->foto?>">

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
      <?php echo form_open('admin_article/edit_article_pro'); ?>
         <?php if($this->session->flashdata('info')): ?>
          <div id="error"><?php echo $this->session->flashdata('info'); ?></div>
        <?php endif; ?>

         <div class="form-group">
          <label for="gambar" class="col-form-label">Ganti Gambar</label>
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Ganti gambar</button>
        </div>

        <div class="form-group">
            <label>katagori article</label>
            <select class="form-control select2" name="catagori">
            <option value="<?php echo $article_edit->catagori;?>"><?php echo $article_edit->catagori;?></option>
              <?php foreach ($all_catagori as $row) {?>
                <option value="<?php echo $row->catagori;?>"><?php echo $row->catagori;?></option>
              <?php }?>
            </select>
          </div>

         <div class="form-group">
            <label class="col-form-label">judul article</label>
            <input type="text" name="judul" class="form-control" required value="<?php echo $article_edit->judul;?>">
          </div>

          <div class="form-group">
            <label class="col-form-label">keywords</label>
            <input type="text" name="keywords" class="form-control" required value="<?php echo $article_edit->keywords;?>">
          </div>

           <div class="form-group">
            <label class="col-form-label">description</label>
            <input type="text" name="description" class="form-control" required value="<?php echo $article_edit->description;?>">
          </div>

        <div class="form-group">
          <label for="isi" class="col-form-label">Isi article</label><br>
          <textarea id="summernote" name="isi" rows="10" cols="80" >
            <?php echo $article_edit->isi ?>
          </textarea>
        </div>

        <input type="hidden" name="id" value="<?php echo $article_edit->id; ?>">        
        <!--form-->
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn btn-primary" value="Update">
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</section>