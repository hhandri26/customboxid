<script src="<?php echo base_url();?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url();?>assets/admin/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- datatable -->
<!-- Datatable js -->
<script src="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/datatables/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>assets/datatables/responsive.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/datatables/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url();?>assets/datatables/dataTables.colVis.js"></script>
<script src="<?php echo base_url();?>assets/datatables/dataTables.fixedColumns.min.js"></script>
<!-- init -->
<script src="<?php echo base_url();?>assets/datatables/jquery.datatables.init.js"></script>
<!-- summernote -->
<script src="<?php echo base_url();?>assets/summernote/summernote.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() 
    {
      $('.select2').select2();
      $('#summernote').summernote({
          height: 350,                 // set editor height
              minHeight: null,             // set minimum height of editor
              maxHeight: null,             // set maximum height of editor
              focus: false                 // set focus to editable area after initializing summernote
      });
    });

    // fungsi rupiah
    var rupiah = document.getElementById("rupiah");
    rupiah.addEventListener("keyup", function(e) {
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      rupiah.value = formatRupiah(this.value, "Rp. ");
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
      var number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
      }

      rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
      return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
    }
</script>



 
     


