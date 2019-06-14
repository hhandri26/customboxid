<!--Header-->
<?php $this->load->view($header); ?>
<section class="jarak">
    <h2 class="display-none" aria-hidden="true"></h2>
</section>
<section id="home" class="no-padding parallax mobile-height wow fadeIn"
         style="background-image: url(<?php echo base_url('assets/img/error-page.jpg');?>); background-position: 0px 0px; visibility: visible; animation-name: fadeIn;">
            <h2 style="display: none" aria-hidden="true">Finza</h2>
            <div class="opacity-extra-medium bg-black"></div>
            <div class="container position-relative full-screen" style="min-height: 794px;">
                <div class="slider-typography text-center">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle">
                            <div class="width-100">
                                <div>
                                    <span class="title-extra-large text-blue font-weight-700 display-block margin-30px-bottom xs-margin-10px-bottom">404!</span>
                                    <span class="title-extra-large text-blue font-weight-700 display-block margin-30px-bottom xs-margin-10px-bottom"><?php echo $this->session->flashdata('info'); ?></span>
                                    <h6 class="text-uppercase text-white font-weight-600 alt-font display-block margin-5px-bottom">
                                        Page Not Found</h6>
                                        <a href="<?php echo base_url('home');?>" class="btn btn-lg waves-effect waves-light" href="index.html">Kembali Ke Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
<?php $this->load->view($footer); ?>