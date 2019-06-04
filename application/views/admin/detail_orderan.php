<div class="box-body no-padding">
  <div class="mailbox-read-info">
    <h5>From : <?php echo $baca->email ?><br>
        Order:<?php echo $baca->orderan ?>
    <span class="mailbox-read-time pull-right"><?php echo $baca->waktu ?></span></h5>

  </div>

  <div class="mailbox-controls with-border text-center">
    <a href="mailto:<?php echo $baca->email?>">
      <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Balas Pesan">
        <i class="fa fa-reply"></i>
      </button>
    </a>
     <a href="mailto:<?php echo $baca->email?>">
      <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Hapus Pesan">
        <i class="fa fa-trash-o"></i>
      </button>
    </a>
  </div>

  <div class="mailbox-read-message">
  <p><?php echo $baca->detail ?></p>


  </div>
</div>