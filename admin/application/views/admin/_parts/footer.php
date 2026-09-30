<?php base_path(); ?>
<div class="padding-20"></div>
</div>
<!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
	<div class="p-3">
		<h5>Title</h5>
		<p>Sidebar content</p>
	</div>
</aside>
<!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<div class="loading"></div>
<style>
    .loading{
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 1001;
        background: rgba(255, 255, 255, 1.0) url("<?php rootURL('assets/loader.gif') ?>") center no-repeat;
    }
</style>
<!-- REQUIRED SCRIPTS -->

<script>
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#img_show_div').attr('src', e.target.result).width(150).height(200);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
</script>

<!-- jQuery -->
<script src="<?php rootURL('assets/'); ?>plugins/jquery/jquery.min.js"></script>
<script src="<?php rootURL('assets/'); ?>plugins/toastr/toastr.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php rootURL('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php rootURL('assets/'); ?>plugins/select2/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="<?php rootURL('assets/'); ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php rootURL('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?php rootURL('assets/'); ?>dist/js/adminlte.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>-->

<script>
	$(document).ready(function() {
		// setTimeout( function(){
		// 	toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
		// }  , 500 );
		<?php show_alert(); ?>
	});
    $(function () {

		//Initialize Select2 Elements
		$('.select2').select2();
//Initialize Select2 Elements
		$('.select2bs4').select2({
			theme: 'bootstrap4'
		});
		//Datatables
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });


    function toggle_modal(modal_id) {
        $(modal_id).toggle();
    }
    function hide_loading() {
        $('.loading').hide();
    }
    function show_loading() {
        $('.loading').show();
    }
	function message_success(message) {
		toastr.success(message);
	}
	function message_error(message) {
		toastr.error(message);
	}
	function message_info(message) {
		toastr.info(message);
	}
</script>
</body>
</html>
