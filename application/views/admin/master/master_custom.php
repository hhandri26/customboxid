<a href="javascript:;" class="add-modal btn btn-info btn-sm" data-toggle ="modal" data-target="#add-tb">
     <i class="fa fa-plus"></i>
</a>
<!-- modal add -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="add-tb" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Tambah Harga</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('master/add_custom_box')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-3 control-label">Luas</label>
                        <div class="col-lg-9">
                           <input type="text" name="luas" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-3 control-label">Quantity</label>
                        <div class="col-lg-9">
                            <select require class="form-control select2" name="id_qty" style="width: 100%;">
                                <option value="">- Pilih Quantity -</option>
                                <?php foreach($qty as $row3){;?>
                                    <option value="<?php echo $row3->id;?>"><?php echo $row3->qty;?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-3 control-label">Harga</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="rupiah" name="harga"> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-3 control-label">Berat</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="berat" name="berat">
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="submit" class="btn btn-info" value="Tambah">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
            <th>No</th>
            <th>Dimensi</th>
            <th>Quantity</th>
            <th>Harga</th>
            <th>Berat</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($table as $row ) {?>
            <tr>
            <td><?php echo $no++ ;?></td>
            <td><?php echo $row->luas ;?></td>
            <td><?php echo $row->qty ;?></td>
            <td><?php echo "Rp " . number_format($row->harga,2,',','.') ;?></td>
            <td><?php echo $row->berat ;?></td>
            <td>
                <a href ="<?php echo base_url('master/edit_master_custom/'.$row->id);?>" class="btn btn-info btn-sm">
                    <i class="glyphicon glyphicon-pencil"></i> 
                </a>

                <a href ="<?php echo base_url('master/delete_custom_box/'.$row->id);?>" onclick="javascript: return confirm('Anda yakin hapus ?')" class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i> 
                </a>
            </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<script src="<?php echo base_url();?>assets/custom/js/master_harga.js"></script>