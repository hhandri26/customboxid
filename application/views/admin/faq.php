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
      <?php echo form_open('admin/add_faq/'); ?>
        <div class="form-group">
          <label for="judul" class="col-form-label">Question</label>
          <input type="text" class="form-control"  name="question" required>
        </div>

        <div class="form-group">
          <label for="isi" class="col-form-label">Answer</label>
           <input type="text" class="form-control"  name="answer" required>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Tambah faq">
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
              <h3 class="box-title">table product</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>question</th>
                    <th>answer</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($table as $row ) {?>
                  <tr>
                    <td><?php echo $no++ ;?></td>
                    <td><?php echo $row->question ;?></td>
                    <td><?php echo $row->answer ;?></td>
                    <td>
                      <a href="<?php echo base_url('admin/edit_faq/'.$row->id); ?>" >
                         <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="fa fa-edit ">Edit</i>
                          </button>
                      </a>
                       <a href="<?php echo base_url('admin/del_faq/'.$row->id);?>" onclick="javascript: return confirm('Anda yakin hapus ?')"  >
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
