  <?php if($this->session->flashdata('info')): ?>        
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Info!</h4>
    <?php echo $this->session->flashdata('info'); ?>
  </div>
<?php endif; ?>
 
  <div class="col-md-6">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <img class="img-responsive pad" src="<?php echo base_url('assets/img/web/'.$des1->gambar);?>" alt="Photo" width="200" height="100">

              <p><?php echo $des1->title ?></p>
              <p><?php echo $des1->deskripsi ?> </p>

              <a href="<?php echo base_url('home');?>" target="_blank" >
                 <button type="button" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-tripadvisor ">Lihat</i>
                  </button>
              </a>
              
              <a href="<?php echo base_url('admin/edit_des1/');?>" >
                 <button type="button" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-edit ">Edit</i>
                  </button>
              </a>
            </div>
          </div>
        </div>


