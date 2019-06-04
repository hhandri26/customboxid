<section id="product" class="text-center">
    <div class="container">
      <div class="row">
            <div class="col-lg-9 col-md-10 col-sm-12 text-center center-col last-paragraph-no-margin">
                <div class="area-heading text-center margin-70px-bottom">
                    <h5 class="area-title text-capitalize alt-font text-extra-dark-gray margin-20px-bottom font-weight-500 sm-width-100 xs-width-100">
                    <?php echo $product_h->title;?></h5>
                    <p class="width-75 margin-lr-auto md-width-90 xs-width-100 xs-margin-30px-bottom">
                    <?php echo $product_h->deskripsi;?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
        <?php foreach ($table as $row) {?>
            <div class="col-md-4 col-sm-4">
                <div  class="shopping_box margin-30px-bottom">
                    <a href="<?php echo base_url('detail-box/'.$row->id);?>" class="display-inline"><div class="image position-relative">
                        <img src="<?php echo base_url('assets/img/product/'.$row->gambar);?>" alt="Finza" class="img-responsive border-radius">
                        <div class="overlay">
                        </div>
                    </div>
                    </a>
                    <div class="shop_content text-center padding-5px-all margin-10px-top">
                        <a href="<?php echo base_url('detail-box/'.$row->id);?>" class="text-large text-extra-dark-gray">
                          <?php echo $row->title;?>
                        </a>
                        <div class="shop-rating text-yellow margin-10px-tb">
                        </div>
                        <a class="btn btn-blue btn-medium text-extra-small margin-10px-bottom"
                           href="<?php echo base_url('detail-box/'.$row->id);?>">View Details</a>
                    </div>
                </div>
            </div>
        <?php }?>
        </div>
    </div>
</section>