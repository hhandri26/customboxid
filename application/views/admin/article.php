 <!-- modal tambah product -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--form-->
      <?php echo form_open_multipart('admin_article/add_article/'); ?>

        <div class="form-group">
          <img class="img-thumbnail" width="200" height="200" id="profile-pre" 
          src="<?php echo base_url('assets/img/df.jpg');?>" alt="your image" /><br><br>
          <label for="gambar" class="col-form-label">Gambar article</label>
          <input type="file" name="gambar" id="profile-id">
        </div>

         <div class="form-group">
            <label>katagori article</label>
            <select class="form-control select2" name="catagori">
              <?php foreach ($all_catagori as $row) {?>
                <option value="<?php echo $row->catagori;?>"><?php echo $row->catagori;?></option>
              <?php }?>
            </select>
          </div>

          <div class="form-group">
            <label class="col-form-label">judul article</label>
            <input type="text" name="judul" class="form-control" required>
          </div>

           <div class="form-group">
            <label class="col-form-label">keywords</label>
            <input type="text" name="keywords" class="form-control" required>
          </div>

           <div class="form-group">
            <label class="col-form-label">description</label>
            <input type="text" name="description" class="form-control" required>
          </div>

           <div class="form-group">
            <label class="col-form-label">isi article</label>
            <textarea id="summernote" name="isi" rows="10" cols="80" required>
              
            </textarea>  
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Tambah article">
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



 <?php if($this->session->flashdata('info')): ?>        
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Info!</h4>
        <?php echo $this->session->flashdata('info'); ?>
      </div>
    <?php endif; ?>

<div class="">
      <div class="box">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Tambah article</button>
            <div class="box-header">
              <h3 class="box-title">table article</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 20%;">gambar</th>
                    <th style="width: 15%;">judul</th>
                    <th style="width: 30%;">isi</th>
                    <th style="width: 5%;">jumlah komentar</th>
                    <th style="width: 15%;">aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($table as $row ) {?>
                  <tr>
                    <td><?php echo $no++ ;?></td>
                     <td><img src="<?php echo base_url('assets/img/article/'.$row->foto);?>" height="100" width="100"></td>
                    <td><a href="<?php echo base_url('article/single_art/'.$row->id.'/'.$row->judul);?>" target="_blank"><?php echo $row->judul ;?></a></td>
                    <td><?php echo strip_tags(word_limiter($row->isi,20))?></td>
                    <td><?php echo $row->jumlah_komentar ;?></td>
                    <td>
                       <a href="<?php echo base_url('admin_article/edit_article/'.$row->id); ?>" >
                         <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="fa fa-edit ">Edit</i>
                          </button>
                      </a>

                       <a href="<?php echo base_url('admin_article/del_article/'.$row->id.'/'.$row->foto);?>" onclick="javascript: return confirm('Anda yakin hapus ?')"  >
                         <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="fa fa-trash">Hapus</i>
                          </button>
                      </a>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>

</div>
