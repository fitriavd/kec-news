<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
<!-- page script -->
<script>
$(function() {
    $("#example1").DataTable();
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
    });
});
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
<script type="text/javascript">
$.toast({
    heading: 'Error',
    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
    showHideTransition: 'slide',
    icon: 'error',
    hideAfter: false,
    position: 'bottom-right',
    bgColor: '#FF4859'
});
</script>
<?php elseif($this->session->flashdata('msg')=='warning'):?>
<script type="text/javascript">
$.toast({
    heading: 'Warning',
    text: "Gambar yang Anda masukan terlalu besar.",
    showHideTransition: 'slide',
    icon: 'warning',
    hideAfter: false,
    position: 'bottom-right',
    bgColor: '#FFC017'
});
</script>
<?php elseif($this->session->flashdata('msg')=='success'):?>
<script type="text/javascript">
$.toast({
    heading: 'Success',
    text: "Pengguna Berhasil disimpan ke database.",
    showHideTransition: 'slide',
    icon: 'success',
    hideAfter: false,
    position: 'bottom-right',
    bgColor: '#7EC857'
});
</script>
<?php elseif($this->session->flashdata('msg')=='info'):?>
<script type="text/javascript">
$.toast({
    heading: 'Info',
    text: "Pengguna berhasil di update",
    showHideTransition: 'slide',
    icon: 'info',
    hideAfter: false,
    position: 'bottom-right',
    bgColor: '#00C9E6'
});
</script>
<?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
<script type="text/javascript">
$.toast({
    heading: 'Success',
    text: "Pengguna Berhasil dihapus.",
    showHideTransition: 'slide',
    icon: 'success',
    hideAfter: false,
    position: 'bottom-right',
    bgColor: '#7EC857'
});
</script>
<?php elseif($this->session->flashdata('msg')=='show-modal'):?>
<script type="text/javascript">
$('#ModalResetPassword').modal('show');
</script>
<?php else:?>

<?php endif;?>
</body>

</html>