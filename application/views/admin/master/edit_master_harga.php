<form class="form-horizontal" action="<?php echo base_url('master/update_harga')?>" method="post" enctype="multipart/form-data" role="form">
    <div class="modal-body">
        <div class="form-group">
            <label class="col-lg-2 col-sm-3 control-label">Product</label>
            <div class="col-lg-9">
                <select require class="form-control select2" name="id_product" style="width: 100%;">
                    <option value="<?php echo $edit->id_product;?>"><?php echo $edit->product;?></option>
                    <?php foreach($product as $row){;?>
                        <option value="<?php echo $row->id;?>"><?php echo $row->title;?></option>
                    <?php }?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 col-sm-3 control-label">Ukuran</label>
            <div class="col-lg-9">
                <select require class="form-control select2" name="id_ukuran" style="width: 100%;">
                    <option value="<?php echo $edit->id_ukuran;?>"><?php echo $edit->ukuran;?></option>
                    <?php foreach($ukuran as $row2){;?>
                        <option value="<?php echo $row2->id;?>"><?php echo $row2->ukuran;?></option>
                    <?php }?>
                </select>
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
                <input type="text" class="form-control" id="rupiah" value="<?php echo $edit->harga;?>" name="harga">
                <input type="hidden" name="id" value="<?php echo $edit->id;?>">  
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
        
        <input type="submit" name="submit" class="btn btn-info" value="Ubah">
        <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
    </div>
</form>