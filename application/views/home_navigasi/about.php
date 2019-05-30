
<!-- SECTION2 -->
<section class="our-services" id="services">
    <h2 class="display-none no-padding no-margin" aria-hidden="true"></h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-10 col-sm-12 text-center center-col last-paragraph-no-margin">
                <div class="area-heading text-center margin-70px-bottom">
                    <h5 class="area-title text-capitalize alt-font text-extra-dark-gray margin-20px-bottom font-weight-500 sm-width-100 xs-width-100">
                    <?php echo $work_h->title?></h5>
                </div>
            </div>
        </div>
        <div class="row">
          <?php foreach ($work as $row ) {?>
            <div class="col-md-4 col-sm-6">
                <div class="single-feature margin-lr-auto margin-50px-bottom wow fadeInLeft" data-wow-duration=".5s">
                    <div class="feature-icon text-green">
                        <i class="fa <?php echo $row->gambar;?>" aria-hidden="true"></i>
                    </div>
                    <div class="feature-content">
                        <div class="text-large text-extra-dark-gray margin-20px-bottom hvr-green"><?php echo $row->title;?></div>
                        <p><?php echo $row->deskripsi;?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="gradient-background xs-text-center bg-grd-blue">
    <h2 class="display-none no-padding no-margin" aria-hidden="true">Tentang Kami</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-md-6 xs-margin-30px-bottom padding-40px-right xs-padding-10px-lr">
                <?php echo $des1->deskripsi;?>
                <a href="#product"
                   class="btn btn-green btn-large text-extra-small margin-20px-top">Product</a>
            </div>
            <div class="col-sm-5 col-md-6 no-padding">
                <div class="video-img">
                    <img src="<?php echo base_url('assets/img/web/'.$des1->gambar)?>" alt="foto">
                </div>
            </div>
        </div>
    </div>
</section>

