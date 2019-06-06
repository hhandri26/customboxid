<a href="<?php echo base_url('admin/excel_orderan');?>"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Export Excel</button></a>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Orderan</h3>
  </div>
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="width: 5%;">No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>No HP</th>
          <th>Box</th>
          <th>Waktu</th>
          <th>Status</th>
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
          <td><?php echo $row->product ?></td>
          <td><?php echo $row->waktu ?></td>
          <td>
              <?php if($row->status =='1'){?>
                <button class="btn btn-danger">New Order</button>
              <?php }elseif($row->status=='2'){?>
                <button class="btn btn-warning">Progress</button>
              <?php }elseif($row->status=='3'){?>
                <button class="btn btn-info">Done</button>
              <?php }else{?>
                <button class="btn btn-danger">Reject</button>
              <?php };?>
          </td>
          <td>
            <a href="<?php echo base_url('admin/detail_orderan/'.$row->id); ?>" >
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