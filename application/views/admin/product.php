
<!-- modal tambah product -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--form-->
      <?php echo form_open_multipart('master/add_product/'); ?>
        <div class="form-group">
            <img class="img-thumbnail" width="200" height="200" id="profile-pre" 
              src="<?php echo base_url('assets/img/df.jpg');?>" alt="your image" /><br><br>
            <label for="gambar" class="col-form-label">gambar slideshow</label>
            <input type="file" name="gambar" id="profile-id" >
            <input type="hidden" value ="" name="gambar" >
        </div>
        <div class="form-group">
          <label for="judul" class="col-form-label">Judul Product</label>
          <input type="text" class="form-control"  name="title" required>
        </div>

        <div class="form-group">
          <label for="isi" class="col-form-label">Deskripsi Product</label><br>
          <textarea id="summernote" name="deskripsi" rows="10" cols="80" required>
            
          </textarea>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Tambah Product">
      </div>
    <?php echo form_close(); ?>
    </div>
  </div>
</div>


<h3>heading deskripsi Product</h3>
<table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>judul</th>
      <th>deskripsi</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td><?php echo $product_h->title ;?></td>
      <td><?php echo $product_h->deskripsi ;?></td>
      <td>
        <a href="<?php echo base_url('master/edit_product_h/'); ?>" >
           <button type="button" class="btn btn-outline-primary btn-sm">
              <i class="fa fa-edit ">Edit</i>
            </button>
        </a>
         <a href="<?php echo base_url('home');?>" target="_blank" >
           <button type="button" class="btn btn-outline-primary btn-sm">
              <i class="fa fa-tripadvisor ">Lihat</i>
            </button>
        </a>
      </td>
    </tr>
  </tbody>
</table>


   
    <!-- table work -->

<div class="">
      <div class="box">
        <a href="javascript:;" class="add-modal btn btn-info btn-sm" data-toggle ="modal" data-target="#exampleModal">
            <i class="fa fa-plus"></i>
        </a>
            <div class="box-header">
              <h3 class="box-title">table product</h3>
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>judul</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($table as $row ) {?>
                  <tr>
                    <td><?php echo $no++ ;?></td>
                    <td><img src="<?php echo base_url('assets/img/product/'.$row->gambar);?>" alt="Finza" style="height:150px;widht:150px;"></td>
                    <td><?php echo $row->title ;?></td>
                    <td>
                      <a href="<?php echo base_url('master/edit_product/'.$row->id); ?>" >
                         <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="fa fa-edit ">Edit</i>
                          </button>
                      </a>
                       <a href="<?php echo base_url('master/del_product/'.$row->id);?>" onclick="javascript: return confirm('Anda yakin hapus ?')"  >
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

