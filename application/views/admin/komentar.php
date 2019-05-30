<?php if($this->session->flashdata('info')): ?>        
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Info!</h4>
        <?php echo $this->session->flashdata('info'); ?>
      </div>
    <?php endif; ?>

<div class="">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">table komentar</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 15%;">nama</th>
                    <th style="width: 15%;">waktu</th>
                    <th style="width: 40%;">isi komentar</th>
                    <th style="width: 25%;">aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($table as $row ) {?>
                  <tr>
                    <td><?php echo $no++ ;?></td>
                    <td><a href="<?php echo base_url('article/single_art/'.$row->id_forum);?>" target="_blank"><?php echo $row->nama ;?></a></td>
                    <td><?php echo $row->waktu ;?></td>
                    <td><?php echo $row->isi ;?></td>

                    <td>
                       <a href="<?php echo base_url('admin_article/del_komentar/'.$row->id);?>" onclick="javascript: return confirm('Anda yakin hapus ?')"  >
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
