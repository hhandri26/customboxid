<!-- start slider -->
<section class="fadeIn example no-padding no-transition" id="home">
    <h1 class="display-none no-padding no-margin" aria-hidden="true"></h1>
    <h2 class="display-none no-padding no-margin" aria-hidden="true"></h2>
    <article class="content"><h2 class="display-none no-padding no-margin" aria-hidden="true"></h2>
        <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
             data-alias="classic4export" data-source="gallery"
             style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- start revolution slider 5.4.1 fullwidth mode -->
            <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul><!-- slide  -->
                <?php foreach ($gambar as $row ) {?>
                    <li data-index="rs-3045" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                        data-masterspeed="200" data-thumb="<?php echo base_url('assets/img/web/'.$row->background);?>" data-rotate="0"
                        data-fstransition="fade" data-fsmasterspeed="100" data-fsslotamount="0"
                        data-saveperformance="off" data-title="" data-param1="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <div class="opacity-extra-medium bg-black position-relative z-index-1"></div>
                        <!-- main image -->
                        <img src="<?php echo base_url('assets/img/web/'.$row->background);?>" alt="Ocean" data-bgposition="center center"
                             data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg">
                        <!-- layer nr. 3 -->
                        
                        <!-- layer nr. 4 -->
                        <div class="tp-caption NotGeneric-SubTitle tp-resizeme "
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-15','-15','-15','-15']"
                             data-fontsize="['54','54','40','30']"
                             data-lineheight="['54','54','40','30']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                             data-textAlign="['center','center','center','center']"
                             style="z-index: 8; white-space: nowrap; font-family:'Raleway', sans-serif; !important; font-weight: 100;">
                            <h2 class="display-inline font-weight-400"><?php echo $row->title;?></h2>
                        </div>
                        <!-- layer nr. 5 -->
                        <div class="tp-caption NotGeneric-Title tp-resizeme font-weight-100"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['65','65','65','45']"
                             data-fontsize="['18','18','18','18']"
                             data-lineheight="['18','18','18','18']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":800,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                             data-textAlign="['center','center','center','center']"
                             style="z-index:99; white-space: nowrap; font-family:'Raleway', sans-serif; !important; font-weight: 200;letter-spacing:1px">
                            <?php echo $row->deskripsi;?>
                        </div>
                        
                        <!-- layer nr. 6 -->
                        <div class="tp-caption z-index-5"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['140','140','140','120']"
                             data-fontsize="['18','18','18','18']"
                             data-lineheight="['18','18','18','18']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                             data-textAlign="['center','center','center','center']"
                             style="z-index: 7; white-space: nowrap; font-family:'Raleway', sans-serif; !important; font-weight: 100;">
                            <a href="#product" class="btn btn-transparent-blue btn-large margin-10px-right">Lihat Product</a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <!-- end revolution slider -->
    </article>
    <!-- end slider -->
</section>
<!-- end slider -->