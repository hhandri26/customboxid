 <!-- modal tambah product -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah FAQ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--form-->
      <?php echo form_open_multipart('gallery/add_new/'); ?>

        <div class="form-group">
          <img class="img-thumbnail" width="200" height="200" id="profile-pre" 
          src="<?php echo base_url('assets/img/df.jpg');?>" alt="your image" /><br><br>
          <label for="gambar" class="col-form-label">Gambar partners</label>
          <input type="file" name="gambar" id="profile-id">
        </div>

        <div class="form-group">
          <label for="isi" class="col-form-label">deskripsi</label>
           <input type="text" class="form-control"  name="deskripsi" required>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Tambah">
      </div>
    <?php echo form_close(); ?>
    </div>
  </div>
</div>
<div class="">
      <div class="box">
      <a href="javascript:;" class="add-modal btn btn-info btn-sm" data-toggle ="modal" data-target="#exampleModal">
          <i class="fa fa-plus"></i>
      </a>
            <div class="box-header">
              <h3 class="box-title">table partners</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>gambar</th>
                    <th>deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($table as $row ) {?>
                  <tr>
                    <td><?php echo $no++ ;?></td>
                     <td><img src="<?php echo base_url('assets/img/gallery/'.$row->gambar);?>" height="100" width="100"></td>
                    <td><?php echo $row->title ;?></td>
                    <td>
                     
                       <a href="<?php echo base_url('gallery/del_gallery/'.$row->id.'/'.$row->gambar);?>" onclick="javascript: return confirm('Anda yakin hapus ?')"  >
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
