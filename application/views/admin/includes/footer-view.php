<!-- basic scripts -->

<script src="<?= base_url(); ?>assets/zicros/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/eldarion-ajax.min.js"></script>

<script>
	var resizefunc = [];
	$(document).on('click','.delete',function(event){
		  event.preventDefault();
		  var url= $(this).attr('href');
		  swal({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, Continue!'
		  },function () {
			window.location.href = url;
		  })
		});
</script>
<script src="<?= base_url(); ?>assets/zicros/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
<!-- jQuery  -->
<script src="<?= base_url(); ?>assets/zicros/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/js/detect.js"></script>
<script src="<?= base_url(); ?>assets/zicros/js/fastclick.js"></script>
<script src="<?= base_url(); ?>assets/zicros/js/jquery.blockUI.js"></script>
<script src="<?= base_url(); ?>assets/zicros/js/waves.js"></script>
<script src="<?= base_url(); ?>assets/zicros/js/jquery.slimscroll.js"></script>
<script src="<?= base_url(); ?>assets/zicros/js/jquery.scrollTo.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/switchery/switchery.min.js"></script>

<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/jszip.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/dataTables.colVis.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/datatables/dataTables.fixedColumns.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- init -->
<script src="<?= base_url(); ?>assets/zicros/pages/jquery.datatables.init.js"></script>

<!-- App js -->
<script src="<?= base_url(); ?>assets/zicros/js/jquery.core.js"></script>
<script src="<?= base_url(); ?>assets/zicros/js/jquery.app.js"></script>

<!-- Tooltipster js -->
<script src="<?= base_url(); ?>assets/zicros/plugins/tooltipster/tooltipster.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/zicros/pages/jquery.tooltipster.js"></script>
