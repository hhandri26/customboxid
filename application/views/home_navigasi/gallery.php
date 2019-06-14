<?php $this->load->view($header); ?>
<section class="jarak">
    <h2 class="display-none" aria-hidden="true"></h2>
</section>
<section id="product" class="text-center">
    <div class="container">
      <div class="row">
            <div class="col-lg-9 col-md-10 col-sm-12 text-center center-col last-paragraph-no-margin">
                <div class="area-heading text-center margin-70px-bottom">
                    <h5 class="area-title text-capitalize alt-font text-extra-dark-gray margin-20px-bottom font-weight-500 sm-width-100 xs-width-100">
                    Gallery</h5>
                </div>
            </div>
        </div>
        <div class="row">

        <?php foreach ($data->result() as $row) {?>
            <div class="col-md-4 col-sm-4">
                <div class="shopping_box margin-30px-bottom">
                    <a href="" class="display-inline">
                        <div class="image position-relative">
                            <img src="<?php echo base_url('assets/img/gallery/'.$row->gambar);?>" alt="gambar" class="img-responsive border-radius">
                            <div class="overlay">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php }?>
            
        </div>
        <div class="row">
            <div class="container" style="text-align: center">
                <?php echo $pagination; ?>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view($footer); ?>