<?php 
  $active = "class='active'";
  $class = 'active'; 
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <!-- seo -->
    <meta name="description" content="<?php echo $seo->description ?>">
    <meta name="keywords" content="<?php echo $seo->keywords ?>">
    <meta name="author" content="<?php echo $seo->author ?>">
    <title><?php echo $info->title;?></title>
    <!-- end seo -->
    <?php $this->load->view($script_top); ?>
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo/'.$info->logo_browser);?>">
    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90" class="round-version green-version">
<!-- start loader -->
<div id="loader">
    <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
    </div>
</div>
<!-- end loader -->

<!-- start header -->
<header class="header-with-topbar">
    <!-- topbar -->
    <div class="top-header-area bg-green">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 xs-no-padding-lr xs-text-center hidden-xs hidden-sm icon-social-small" aria-hidden="true">
                    <a href="#." class="text-link-white xs-width-100 margin-15px-right" title="Call">   
                        <i class="fa fa-phone text-white margin-5px-right icon-social-small margin-15px-right"></i>
                        <?php echo $info->hp?>
                    </a>
                    <a href="mailto:<?php echo $info->email?>" class="text-link-white xs-width-100" title="Mail">
                        <i class="fa fa-envelope-o text-white margin-5px-right icon-social-small"></i><?php echo $info->email?>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
    <!-- end topbar -->

    <!-- start navigation -->
    <nav class="navbar circle-navbar navbar-default bootsnav navbar-top header-light-transparent bg-transparent nav-box-width on no-full">
        <div class="container nav-header-container">
            <!-- start logo -->
            <div class="row">
                <div class="col-md-2 col-xs-5">
                    <a href="<?php echo base_url();?>" title="Logo" class="logo scroll">
                        <img src="<?php echo base_url('assets/img/logo/'.$info->logo);?>" class="logo-dark default" alt="logo">
                        <img src="<?php echo base_url('assets/img/logo/'.$info->logo);?>" alt="logo" class="logo-light">
                    </a>
                </div>
                <!-- end logo -->
                <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
                    <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                        <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                            <!-- start menu item -->
                            <li <?php echo ($nav == 'home')? $active :""; ?>>
                                <a href="<?php echo base_url();?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('home#product');?>">Product</a>
                            </li>
                            <li  <?php echo ($nav == 'gallery')? $active :""; ?>>
                                <a href="<?php echo base_url('gallery/home');?>">Gallery</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('home#faq');?>">Cara Pemesanan</a>
                            </li>
                            <li  <?php echo ($nav == 'custom_box')? $active :""; ?>>
                                <a href="<?php echo base_url('buat-custom-box');?>">Custom Box</a>
                            </li>
                            <li  <?php echo ($nav == 'bukti_transfer')? $active :""; ?>>
                                <a href="<?php echo base_url('upload-bukti-transfer');?>">Upload Bukti Transfer</a>
                            </li>

                            <li>
                                <a href="#contact" class="scroll">Kontak Kami</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
<!-- end header -->