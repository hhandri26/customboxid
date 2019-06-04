<h3>heading deskripsi pekerjaan</h3>
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
      <td><?php echo $work_h->title ;?></td>
      <td><?php echo $work_h->deskripsi ;?></td>
      <td>
        <a href="<?php echo base_url('admin/edit_work_h/'); ?>" >
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
            <div class="box-header">
              <h3 class="box-title">work</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Icon</th>
                    <th>judul</th>
                    <th>deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($table as $row ) {?>
                  <tr>
                    <td><?php echo $no++ ;?></td>
                    <td><i class="fa <?php echo $row->gambar;?>" aria-hidden="true"></i></td>
                    <td><?php echo $row->title ;?></td>
                    <td><?php echo $row->deskripsi ;?></td>
                    <td>
                      <a href="<?php echo base_url('admin/edit_work/'.$row->id); ?>" >
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
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>

</div>

