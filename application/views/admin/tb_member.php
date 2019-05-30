<!-- modal tambah product -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--form-->
      <?php echo form_open_multipart('admin/add_member/'); ?>

        <div class="form-group">
          <img class="img-thumbnail" width="200" height="200" id="profile-pre" 
          src="<?php echo base_url('assets/img/df.jpg');?>" alt="your image" /><br><br>
          <label for="gambar" class="col-form-label">Foto Member</label>
          <input type="file" name="gambar" id="profile-id" required>
        </div>

          <div class="form-group">
            <label class="col-form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
          </div>

           <div class="form-group">
            <label class="col-form-label">No Hp</label>
            <input type="text" name="hp" class="form-control" required>
          </div>

           <div class="form-group">
            <label class="col-form-label">Email</label>
            <input type="text" name="email" class="form-control" required>
          </div>

           <div class="form-group">
            <label class="col-form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
          </div>

            <div class="form-group">
            <label class="col-form-label">Username</label>
            <input type="text" name="username" class="form-control" required>
          </div>

            <div class="form-group">
            <label class="col-form-label">Password</label>
            <input type="text" name="password" class="form-control" required>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Tambah member">
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
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Tambah Member</button>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Table Member</h3>
  </div>
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="width: 5%;">No</th>
          <th>Foto</th>
          <th>Nama</th>
          <th>Email</th>
          <th>No HP</th>
          <th>Alamat</th>
          <th>Username</th>
          <th>Tanggal</th>
          <th style="width: 20%;">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; foreach ($table as $row) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><img src="<?php echo base_url('assets/img/member/'.$row->foto);?>" width="50" class="img-circle"></td>
          <td><a href="<?php echo base_url('member/home/'.$row->username.'/'.$row->uniq);?>" target="_blank"><?php echo $row->nama ?></a></td>
          <td><?php echo $row->email ?></td>
          <td><?php echo $row->hp ?></td>
          <td><?php echo character_limiter($row->alamat,10) ?></td>
           <td><?php echo $row->username ?></td>
          <td><?php echo $row->tgl ?></td>
          <td>
            <a href="<?php echo base_url('admin/edit_member/'.$row->id); ?>" >
               <button type="button" class="btn btn-outline-primary btn-sm">
                  <i class="fa fa-edit ">Edit</i>
                </button>
            </a>

             <a href="<?php echo base_url('admin/cetak_member/'.$row->id); ?>" >
               <button type="button" class="btn btn-outline-primary btn-sm">
                  <i class="fa fa-pdf ">Cetak</i>
                </button>
            </a>

            <a href="<?php echo base_url('admin/del_member/'.$row->id.'/'.$row->foto); ?>" onclick="javascript: return confirm('Anda yakin hapus ?')">
              <button type="button" class="btn btn-outline-primary btn-sm">
                <i class="fa fa-trash">HAPUS</i>
              </button>
             </a>
          </td>
        </tr>
     <?php }?>
      </tbody>
    </table>
  </div>
</div>