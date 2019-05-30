<!--Header-->
<?php $this->load->view($header); ?>
 <section class="error-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <i class="fa fa-hand-peace-o"></i>
                    </div>
                    
                    <div class="col-sm-7">
                        <div class="error-info">
                            <h1 class="mb-30">Selamat !</h1>
                            <span class="error-sub"><?php echo $this->session->flashdata('info'); ?></span>

                            
                            <a href="<?php echo base_url('home');?>" class="btn btn-lg waves-effect waves-light" href="index.html">Kembali Ke Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php $this->load->view($footer); ?>