<!-- contact-->
<section id="contact" class="btn-version">
    <div class="get-quote-section xs-text-center">
        <h2 class="display-none no-padding no-margin" aria-hidden="true">Hubungi Kami</h2>
        <div class="container">
            <div class="row clearfix">
                <!--Form Column-->
                <div class="col-sm-6 wow fadeInLeft" data-wow-duration=".5s">
                    <div class="sec-title margin-50px-bottom">
                        <h5 class="text-capitalize alt-font text-extra-dark-gray margin-20px-bottom font-weight-500 sm-width-100 xs-width-100">
                            Lets Get In Touch</h5>
                    </div>
                    <div class="row margin-15px-bottom">
                        <div class="col-sm-1 no-padding">
                            <div class="contact-icon text-blue">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <p class="text-small">
                                <?php echo $info->alamat;?>
                            </p>
                        </div>
                    </div>
                    <div class="row margin-15px-bottom">
                        <div class="col-sm-1 no-padding">
                            <div class="contact-icon text-green">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <?php echo $info->hp;?>
                        </div>
                    </div>
                    <div class="row margin-15px-bottom">
                        <div class="col-sm-1 no-padding">
                            <div class="contact-icon text-blue">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-sm-11 xs-margin-50px-bottom">
                            <p class="text-small"><?php echo $info->email?></p>
                        </div>
                    </div>
                </div>
                <div class="form-column col-sm-6 wow fadeInRight" data-wow-duration=".5s">
                    <div class="contact-form">
                    <?php if($this->session->flashdata('info')): ?>
                        <div class="alert success-border" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <i class="fa fa-thumbs-o-up"></i> <?php echo $this->session->flashdata('info'); ?>
                        </div>
                    <?php endif; ?>
                        <!--Title-->
                        <form class="form_class" action="<?php echo base_url('home/kirim_pesan');?>" method="POST">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form_inputs" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form_inputs" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form_inputs" name="hp" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 no-padding">
                                <div class="form-group">
                                <textarea name="pesan" id="message" class="form_inputs form_inputs_two" rows="6"
                                          cols="25" placeholder="Pesan Anda"></textarea>
                                </div>
                                <div class="button_div">
                                    <input type="submit" value="submit" class="btn btn-blue btn-large text-extra-small width-100">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact end -->

<!--footer Start-->
<footer class="bg-extra-dark-gray padding-30px-tb text-center">
    <div class="footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="medium-icon social-icon-style-3 social_icon list-inline margin-20px-top">
                    <a class="facebook text-white facebook-bg-hvr wow fadeInUp" data-wow-duration=".5s" href="#."><i class="fa fa-facebook"
                    aria-hidden="true"></i><span></span></a>
                    <a class="twitter text-white twitter-bg-hvr wow fadeInDown" data-wow-duration=".5s" href="#."><i class="fa fa-twitter"
                    aria-hidden="true"></i><span></span></a>
                    <a class="pinterest text-white pinterest-bg-hvr wow fadeInUp" data-wow-duration=".5s" href="#."><i class="fa fa-pinterest-p"
                    aria-hidden="true"></i><span></span></a>
                    <a class="google text-white google-bg-hvr wow fadeInDown" data-wow-duration=".5s" href="#."><i class="fa fa-google"
                    aria-hidden="true"></i><span></span></a>
                </div>
            </div>
        </div>
    </div>

</footer>
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>
<?php $this->load->view($script_bottom); ?>
</body>
</html>