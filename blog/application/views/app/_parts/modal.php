<script type="text/javascript">
	function show_ajax_modal(url, header)
	{
		// SHOWING AJAX PRELOADER IMAGE
		jQuery('#scrollable-modal .modal-body .modal-body-content').html('<div style="padding:40px; text-align:center;"><img src="https://i.stack.imgur.com/FhHRx.gif"></div>');
		jQuery('#scrollable-modal .modal-title').html('Loading...');
		// LOADING THE AJAX MODAL


		jQuery('#scrollable-modal').modal({backdrop: 'static', keyboard: false}).show();

		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
		$.ajax({
			url: url,
			success: function(response)
			{
				jQuery('#scrollable-modal .modal-body .modal-body-content').html(response);
				jQuery('#scrollable-modal .modal-title').html(header);
			}
		});
	}
	function show_large_modal(url, header)
	{
		// SHOWING AJAX PRELOADER IMAGE
		jQuery('#large-modal .modal-body .modal-body-content').html('<div style="padding:40px; text-align:center;"><img src="https://i.stack.imgur.com/FhHRx.gif"></div>');
		jQuery('#large-modal .modal-title').html('Loading...');
		// LOADING THE AJAX MODAL
		jQuery('#large-modal').modal({backdrop: 'static', keyboard: false}).show();

		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
		$.ajax({
			url: url,
			success: function(response)
			{
				jQuery('#large-modal .modal-body .modal-body-content').html(response);
				jQuery('#large-modal .modal-title').html(header);
			}
		});
	}
</script>

<!-- (Large Modal)-->
<div class="modal fade" id="large-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" style="width: 1900px!important;">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<div class="modal-body-content">

				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>

<!-- Scrollable modal -->
<div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body ml-2 mr-2">
				<div class="modal-body-content">

				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>

<script type="text/javascript">
	function confirm_modal(delete_url)
	{
		jQuery('#alert-modal').modal('show', {backdrop: 'static'});
		document.getElementById('update_link').setAttribute('href' , delete_url);
	}
</script>

<!-- Info Alert Modal -->
<div id="alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-body p-4">
				<div class="text-center">
					<i class="dripicons-information h1 text-info"></i>

					<h4 class="mt-2">Heads up!</h4>
					<div class="mt-2 mb-b text-danger p-2" style="font-size: 18px!important;">Are you sure?</div>
					<div class="p-1 mt-1 mb-3 bg-danger"><small>This Action Cannot be Undone!</small></div>
					<button type="button" class="btn btn-info my-2" data-dismiss="modal" style="width: 120px;">Cancel</button>
					<a href="#" id="update_link" class="btn btn-outline-danger my-2" style="width: 120px;">Continue</a>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<style>
	.modal-title{
		font-weight: bolder;
		color: rgba(0,0,0,0.62);
		font-size: 20px;
		text-transform: uppercase;
	}
</style>
