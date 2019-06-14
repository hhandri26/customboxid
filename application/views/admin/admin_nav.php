<?php 
  $active = "class='active'";
  $class = 'active'; 
?>
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active">
      <a href="">
        <i class="fa fa-home"></i> <span>Dashboard</span>
      </a>
      <ul class="treeview-menu <?php echo ($nav_top == 'dashboard')? $class :""; ?>">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'home')? $active :""; ?>>
          <a href="<?php echo base_url('admin/home/'.$admin->level);?>">
        <i class="fa fa-home"></i> home</a></li>
      </ul>
    </li>
    <li class="treeview <?php echo ($nav_top == 'front')? $class :""; ?>">
      <a href="#">
        <i class="fa fa-desktop"></i>
        <span>Front Design</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" >

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'heading')? $active :""; ?>>
          <a href="<?php echo base_url('admin/heading');?>"><i class="fa fa-ellipsis-v"></i> slideshow</a>
        </li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'deskripsi1')? $active :""; ?>>
          <a href="<?php echo base_url('admin/deskripsi1');?>"><i class="fa fa-ellipsis-v"></i> Deskripsi tentang kami</a>
        </li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'about')? $active :""; ?>>
          <a href="<?php echo base_url('admin/about');?>"><i class="fa fa-ellipsis-v"></i>Tentang Kami</a>
        </li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'faq')? $active :""; ?>>
          <a href="<?php echo base_url('admin/faq');?>"><i class="fa fa-ellipsis-v"></i> Faq</a>
        </li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'partners')? $active :""; ?>>
          <a href="<?php echo base_url('admin/partners');?>"><i class="fa fa-ellipsis-v"></i> Partners</a>
        </li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'gallery')? $active :""; ?>>
          <a href="<?php echo base_url('gallery');?>"><i class="fa fa-ellipsis-v"></i> Gallery</a>
        </li>

      </ul>
    </li>

    <li class="treeview <?php echo ($nav_top == 'master')? $class :""; ?>">
      <a href="#">
        <i class="fa fa-gear"></i>
        <span>Master</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'product')? $active :""; ?>>
          <a href="<?php echo base_url('master/product');?>"><i class="fa fa-ellipsis-v"></i>Master Produk</a>
        </li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'ukuran')? $active :""; ?>>
          <a href="<?php echo base_url('master/ukuran');?>"><i class="fa fa-ellipsis-v"></i>Master ukuran</a>
        </li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'qty')? $active :""; ?>>
          <a href="<?php echo base_url('master/qty');?>"><i class="fa fa-ellipsis-v"></i>Master Qty</a>
        </li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'harga')? $active :""; ?>>
          <a href="<?php echo base_url('master/harga');?>"><i class="fa fa-ellipsis-v"></i>Master Harga</a>
        </li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'box_custom')? $active :""; ?>>
          <a href="<?php echo base_url('master/box_custom');?>"><i class="fa fa-ellipsis-v"></i>Box Custom</a>
        </li>
      </ul>
    </li>

    <!-- orderan -->
    <li class="treeview <?php echo ($nav_top == 'orderan')? $class :""; ?>">
      <a href="#">
        <i class="fa fa-envelope-o"></i>
        <span>Orderan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'orderan')? $active :""; ?>>
          <a href="<?php echo base_url('admin/orderan');?>"><i class="fa fa-copy"></i> Table </a>
        </li>
      </ul>
    </li>

    <!-- setting & Contact -->
    <li class="treeview <?php echo ($nav_top == 'setting')? $class :""; ?>">
      <a href="#">
        <i class="fa fa-gears"></i>
        <span>Setting & contact</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'setting')? $active :""; ?>>
          <a href="<?php echo base_url('admin/setting');?>"><i class="fa fa-copy"></i> Table </a>
        </li>
      </ul>
    </li>

</ul>