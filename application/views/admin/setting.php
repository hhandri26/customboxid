<!-- Admin Setting-->


<!--Modal ganti foto admin-->
<div class="modal fade" id="exampleModal22" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ganti foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--form-->
        <?php echo form_open_multipart('admin/edit_foto_admin/'); ?>
         <div class="form-group">
            <img class="img-thumbnail" width="200" height="200" id="profile-pre" 
              src="<?php echo base_url('assets/img/admin/'.$admin->foto);?>" alt="your image" /><br><br>
            <label for="gambar" class="col-form-label">foto admin</label>
            <input type="file" name="gambar" id="profile-id" >
            <input type="hidden" value ="<?php echo $admin->foto;?>" name="gambar2" >
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Ganti Gambar">
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('#exampleModal22').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipient = button.data('whatever')
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>


<!--Modal ganti username dan password-->
<div class="modal fade" id="exampleModal33" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ganti Username dan Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--form-->
        <?php echo form_open('admin/edit_username/'); ?>

          <label for="judul2" class="col-form-label">Nama</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control"  name="nama" required value="<?php echo $admin->nama;?>" >
          </div>

          <label for="judul2" class="col-form-label">Email Baru</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="email" class="form-control"  name="username" required value="<?php echo $admin->username;?>">
          </div>

          <label for="judul2" class="col-form-label">Password</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control"  name="password" required >
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Ganti password">
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('#exampleModal33').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipient = button.data('whatever')
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>

<!--Profile Admin-->
  <div class="row">
    <div class="col-md-3">
    <!--Profile Admin-->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" 
            src="<?php echo base_url('assets/img/admin/'.$admin->foto);?>" alt="User profile picture">

          <h3 class="profile-username text-center">admin</h3>

          <p class="text-muted text-center"><?php echo $admin->nama;?></p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Email</b> <br> <a class=""></a>
            </li>
          </ul>

         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal33" data-whatever="@getbootstrap">Ganti username dan password</button><br><br>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal22" data-whatever="@getbootstrap">Ganti Foto</button>
        </div>
      </div>
    </div>


<!-- modal ganti logo -->
<div class="modal fade" id="exampleModal34" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ganti foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--form-->
        <?php echo form_open_multipart('admin/ganti_logo/'); ?>
         <div class="form-group">
            <img class="img-thumbnail" width="200" height="200" id="profile-pre" 
              src="<?php echo base_url('assets/img/logo/'.$info->logo);?>" alt="your image" /><br><br>
            <label for="gambar" class="col-form-label">logo</label>
            <input type="file" name="gambar" id="profile-id" >
            <input type="hidden" value ="<?php echo $info->logo;?>" name="gambar2" >
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Ganti Gambar">
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('#exampleModal22').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipient = button.data('whatever')
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>

<!-- modal ganti logo browser -->
<div class="modal fade" id="exampleModal35" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ganti foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--form-->
        <?php echo form_open_multipart('admin/ganti_logo_browser/'); ?>
         <div class="form-group">
            <img class="img-thumbnail" width="200" height="200" id="profile-pre" 
              src="<?php echo base_url('assets/img/logo/'.$info->logo_browser);?>" alt="your image" /><br><br>
            <label for="gambar" class="col-form-label">logo</label>
            <input type="file" name="gambar" id="profile-id" >
            <input type="hidden" value ="<?php echo $info->logo_browser;?>" name="gambar2" >
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Ganti Gambar">
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('#exampleModal22').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipient = button.data('whatever')
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>


<!-- setting contact dan social media -->

    <div class="col-md-9">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab1" data-toggle="tab" class="fa fa-columns">Social Media</a></li>
          <li><a href="#tab2" data-toggle="tab" class="fa fa-list-ol">kontak</a></li>
          <li><a href="#tab3" data-toggle="tab" class="fa fa-list-ol">Heading dan footer</a></li>
          <li><a href="#tab4" data-toggle="tab" class="fa fa-list-ol">SEO</a></li>
        </ul>

        <div class="tab-content">
        <!--social media setting-->
          <div class="active tab-pane" id="tab1">
            <?php echo form_open('admin/edit_tab1/'); ?>
               <label for="facebook" class="col-form-label">Facebook</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-facebook-square"></i></span>
                  <input type="text" class="form-control"  name="facebook" required value="<?php echo $info->facebook;?>" >
                </div>

                <label for="instagram" class="col-form-label">Instagram</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                  <input type="text" class="form-control"  name="instagram" required value="<?php echo $info->instagram;?>" >
                </div>

                <label for="twitter" class="col-form-label">Tiwtter</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                  <input type="text" class="form-control"  name="twitter" required value="<?php echo $info->twitter;?>" >
                </div>

                 <div class="modal-footer">
                  <input type="submit" name="submit" class="btn btn-primary" value="Simpan Perubahan">
                </div>
            <?php echo form_close(); ?>
          </div>

        <!--Kontak Setting-->
        <div class="tab-pane" id="tab2">
          <?php echo form_open('admin/edit_tab2/'); ?>
             <label for="alamat" class="col-form-label">Alamat</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                <textarea type="text" class="form-control"  name="alamat"><?php echo $info->alamat;?></textarea>
              </div>

              <label for="google_maps" class="col-form-label">TITLE</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-star"></i></span>
                <textarea class="form-control"  name="title" required ><?php echo $info->title;?></textarea>
              </div>

              <label for="hp" class="col-form-label">No Telephone</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                  <input type="text" class="form-control"  name="hp" required value="<?php echo $info->hp;?>" >
                </div>

              <label for="email" class="col-form-label">Email</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <input type="text" class="form-control"  name="email" required value="<?php echo $info->email;?>" >
                </div>

              
              <label for="email" class="col-form-label">No rekening</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <input type="text" class="form-control"  name="no_rekening" required value="<?php echo $info->no_rekening;?>" >
                </div>

              <label for="email" class="col-form-label">Pesan Invoice</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <textarea class="form-control" name="pesan_invoice"><?php echo $info->pesan_invoice;?></textarea>
          
                </div>

              <label for="email" class="col-form-label">Pesan Vertifikasi</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <textarea class="form-control" name="pesan_vertifikasi"><?php echo $info->pesan_vertifikasi;?></textarea>
          
                </div>
              
              <label for="email" class="col-form-label">Kode Provinsi</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <input type="text" class="form-control"  name="id_provinsi" required value="<?php echo $info->id_provinsi;?>" >
                </div>
              
              <label for="email" class="col-form-label">Kode Kota</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <input type="text" class="form-control"  name="id_kota" required value="<?php echo $info->id_kota;?>" >
                </div>
              

             

               <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan Perubahan">
              </div>
          <?php echo form_close(); ?> 
        </div> 

         <div class="tab-pane" id="tab3">
          <?php echo form_open('admin/edit_tab3/'); ?>
             <label for="alamat" class="col-form-label">Copyright</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-copyright"></i></span>
                <textarea type="text" class="form-control"  name="copy_right"><?php echo $info->copy_right;?></textarea>
              </div>

              <label for="google_maps" class="col-form-label">Logo Profile</label>
              <div class="input-group">
                   <img class="profile-user-img img-responsive" 
            src="<?php echo base_url('assets/img/logo/'.$info->logo);?>" alt="Logo browser">
              </div>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal34" data-whatever="@getbootstrap">Ganti logo profile</button><br>
          

              <label for="hp" class="col-form-label">Logo Browser</label>
                <div class="input-group">
                   <img class="profile-user-img img-responsive" 
            src="<?php echo base_url('assets/img/logo/'.$info->logo_browser);?>" alt="Logo browser">
                </div>
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal35" data-whatever="@getbootstrap">Ganti logo browser</button><br>        

               <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan Perubahan">
              </div>
          <?php echo form_close(); ?> 
        </div>

        <div class="tab-pane" id="tab4">
          <?php echo form_open('admin/edit_tab4/'); ?>
             <label for="alamat" class="col-form-label">Description</label>
              <div class="input-group">
                <span class="input-group-addon"></span>
                <input type="text" class="form-control"  name="description" required value="<?php echo $seo->description;?>" >
              </div>

              <label for="google_maps" class="col-form-label">keywords</label>
              <div class="input-group">
                <span class="input-group-addon"></span>
                <input type="text" class="form-control"  name="keywords" required value="<?php echo $seo->keywords;?>" >
              </div>

              <label for="hp" class="col-form-label">author</label>
                <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input type="text" class="form-control"  name="author" required value="<?php echo $seo->author;?>" >
                </div>

              <label for="email" class="col-form-label">tag</label>
                <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input type="text" class="form-control"  name="tag" required value="<?php echo $seo->tag;?>" >
                </div>

             

               <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan Perubahan">
              </div>
          <?php echo form_close(); ?> 
        </div>  


      </div>
    </div>
  </div>
