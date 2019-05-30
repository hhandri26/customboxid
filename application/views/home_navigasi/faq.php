<section id="faq" class="padding-80px-tb">
    <h2 style="display: none" aria-hidden="true"></h2>
    <div class="container">
    <div class="row">
        <div class="center-col">
            <div class="sec-title margin-50px-bottom">
                <h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 sm-width-100 xs-width-100">
                    Cara Pembelian  <span class="text-blue"> dan Order</span></h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="center-col">
            <!-- start accordion -->
            <div class="panel-group accordion-style2" id="accordion-main">
                <!-- start tab content -->
                <?php $no=1; foreach ($table2 as $row) {?>
                <div class="panel panel-default">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main"
                       href="#collapse<?php echo $row->id;?>">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <span class="alt-font font-weight-600 text-blue tab-tag"><?php echo $no++;?></span>
                                <span class="text-extra-dark-gray xs-width-80 display-inline-block"><?php echo $row->question ;?></span>
                                <i class="fa fa-angle-down pull-right text-blue"></i>
                            </div>
                        </div>
                    </a>
                    <div id="collapse<?php echo $row->id;?>" class="panel-collapse collapse">
                        <div class="panel-body">
                        <?php echo $row->answer;?>
                        </div>
                    </div>
                </div>
                <?php }?>
                <!-- end tab content -->
                
            </div>
            <!-- end accordion -->
        </div>
    </div>
    </div>
</section>
