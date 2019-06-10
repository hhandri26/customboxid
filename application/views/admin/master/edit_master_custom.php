<div class="modal-header">
    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
    <h4 class="modal-title">Ubah Custom Box</h4>
</div>
<form class="form-horizontal" action="<?php echo base_url('master/update_custom_box')?>" method="post" enctype="multipart/form-data" role="form">
    <div class="modal-body">
        
        <div class="form-group">
            <label class="col-lg-2 col-sm-3 control-label">Luas</label>
            <div class="col-lg-9">
                <input type="text" name="luas" value="<?php echo $edit->luas;?>" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 col-sm-3 control-label">Quantity</label>
            <div class="col-lg-9">
                <select require class="form-control select2" name="id_qty" style="width: 100%;">
                        <option value="<?php echo $edit->id_qty;?>"><?php echo $edit->qty;?></option>
                    <?php foreach($qty as $row3){;?>
                        <option value="<?php echo $row3->id;?>"><?php echo $row3->qty;?></option>
                    <?php }?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 col-sm-3 control-label">Harga</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="rupiah" name="harga" value="<?php echo $edit->harga;?>">
                <input type="hidden" value="<?php echo $edit->id;?>" name="id"> 
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 col-sm-3 control-label">Berat</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="berat" name="berat" value="<?php echo $edit->berat;?>">
                
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="submit" name="submit" class="btn btn-info" value="Update">
    </div>
</form>
<script src="<?php echo base_url();?>assets/custom/js/master_harga.js"></script>