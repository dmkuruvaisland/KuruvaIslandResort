<div class="loading">
	<div class="loading_data">
		<div class="d-block">
		</div>
	</div>
</div>
<style>
	.loading{
		display: none;
		position: fixed;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		z-index: 1001;
		background: rgba(255, 255, 255, 1.0) url("<?= base_url('assets/loader.gif') ?>") center no-repeat;
	}
	.loading_data{
		margin-top: 35vh;
		text-align: center;
	}
	.loading img{
		position: relative;
		animation: flip 2s infinite linear;
		transform-style: preserve-3d;
	}

	@keyframes flip {
		0% {
			transform: perspective(800px) rotateY(0deg);
		}
		50% {
			transform: perspective(800px) rotateY(180deg);
		}
		100% {
			transform: perspective(800px) rotateY(360deg);
		}
	}
	/**
	   Toast Color
	*/
	.toast-top-full-width{
		margin-top: 75px;
	}
	.toast{
		padding-top: 13px!important;
		padding-bottom: 13px!important;
		border: 0px !important;
		border-radius: 100px!important;
	}
	.toast-info{
		background-color: #0d6efd!important;
	}
</style>

<script src="<?= base_url('assets/'); ?>plugins/toastr/toastr.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/'); ?>plugins/select2/js/select2.full.min.js"></script>


<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		// setTimeout( function(){
		// 	toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
		// }  , 500 );
		<?php show_alert(); ?>
	});

	//Initialize Select2 Elements
	$('.select2').select2();


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

	/*
		Switch Page
	 */
	function switch_page(page_url, keep_history = false ,timeOut = 400) {
		show_loading();
		window.setTimeout(function(){
			hide_loading();
			if(keep_history===false){
				window.location.replace(page_url);
			}else{
				window.location.href = page_url;
			}
		}, timeOut);
	}
</script>
</body>
</html>
