<section id="investor" class="iq-news text-center">
    <h2 class="display-none no-padding no-margin" aria-hidden="true"></h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-10 col-sm-12 text-center center-col last-paragraph-no-margin">
                <div class="area-heading text-center margin-50px-bottom">
                    <h5 class="alt-font text-capitalize alt-font text-extra-dark-gray margin-20px-bottom font-weight-500 sm-width-100 xs-width-100">
                       Partner Kami</h5>
                </div>
            </div>
        </div>
        <div class="row iq-team2">
            <div class="owl-team owl-carousel owl-theme">
                <?php foreach ($table3 as $row) {?>
                <div class="team-blog padding-20px-bottom text-center item">
                    <div class="iq-image">
                        <img alt="investor" class="img-fluid text-center" src="<?php echo base_url('assets/img/web/'.$row->gambar);?>">
                    </div>
                    <div class="iq-font-blue iq-mt-20">
                        <div class="text-large text-extra-dark-gray margin-20px-top"><?php echo $row->deskripsi;?></div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>