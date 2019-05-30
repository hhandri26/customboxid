<?php if($this->session->flashdata('info')): ?>        
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Info!</h4>
        <?php echo $this->session->flashdata('info'); ?>
      </div>
    <?php endif; ?>
 <a href="<?php echo base_url('admin/excel_orderan');?>"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Export Excel</button></a>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Pesan Pengunjung</h3>
  </div>
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="width: 5%;">No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>No HP</th>
          <th>Pesanan</th>
          <th>Detail</th>
          <th>Waktu</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; foreach ($table as $row) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $row->nama ?></td>
          <td><?php echo $row->email ?></td>
          <td><?php echo $row->hp ?></td>
          <td><?php echo character_limiter($row->orderan,10) ?></td>
           <td><?php echo character_limiter($row->detail,10) ?></td>
          <td><?php echo $row->waktu ?></td>
          <td>
            <a href="<?php echo base_url('admin/baca_pesan/'.$row->id); ?>" >
               <button type="button" class="btn btn-outline-primary btn-sm">
                  <i class="fa fa-tripadvisor ">Lihat</i>
                </button>
            </a>
            <a href="<?php echo base_url('admin/del_pesan/'.$row->id); ?>" onclick="javascript: return confirm('Anda yakin hapus ?')">
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