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
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<!--<script src="--><?php //= base_url('assets/'); ?><!--plugins/jquery/jquery.min.js"></script>-->
<script src="<?= base_url('assets/'); ?>plugins/toastr/toastr.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/'); ?>plugins/select2/js/select2.full.min.js"></script>


<!-- AdminLTE App -->
<script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>-->



<script>
	$('#example1').dataTable( {
		"pageLength": 500,
		dom: 'Bfrtip',
		buttons: [
            'csv', 'excel',
            {
                extend: 'print',
                title: "<div style='font-size: 22px;text-align: center; font-weight: bold;'><img src='<?=base_url('assets/logo/logo.png')?>' style='width: 150px;height: auto;'></div><hr>",
                messageTop: '<span style="font-size:19px;font-weight:bold;color:#555;">' + document.title + '</span>',
                messageBottom: 'pinasexpressmarine.com', // Footer message
                customize: function ( win ) {
                    $(win.document.body) 
                        .find('.title')
                        .css('font-size', '20pt !important')
                        .css('color', 'red !important'); // changing the color to ensure the styles are applying

                    $(win.document.body)
                        .find('.message')
                        .css('font-size', '18pt !important')
                        .css('color', 'blue !important'); // changing the color to ensure the styles are applying
                }
            },
		]
	} );
    $('#example-basic').dataTable( {
		"pageLength": 50,
		dom: 'Bfrtip',
        buttons: [
        ]
	} );
	$('#example2').dataTable( {
		"pageLength": 500,
		dom: 'Bfrtip',
		buttons: [
			'csv', 'excel', 'print'
		],
        "initComplete": function(settings, json) {
            $('.dataTables_filter input[type="search"]').attr('placeholder','Enter search term here');
        }
	} );
</script>
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
		//Datatables
		$("#example3").DataTable({
			"responsive": true, "lengthChange": false, "autoWidth": false,
			"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
		}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		// $('#example2').DataTable({
		// 	"paging": true,
		// 	"lengthChange": false,
		// 	"searching": false,
		// 	"ordering": true,
		// 	"info": true,
		// 	"autoWidth": false,
		// 	"responsive": true,
		// });
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

	/**
	 * GENERATE URL SLUG
	 */
	function generate_url_slug(from_id, to_id) {
		var text = $("#"+from_id).val();
		text = text.toLowerCase()
			.replace(/ /g, '-')
			.replace(/[^\w-]+/g, '');
		$("#"+to_id).val(text);
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

    // Form submit action
	$("#ta_form").submit(function() {
        $('#submit_button').hide();
        $('#submit_button_loading').show();

	});

   

    // Check email duplication
    function check_email_duplication(email, user_id, email_field = '#email') {
        $.ajax({
            url: '<?=base_url('app/users/check_email_duplication/')?>',
            type: 'POST',
            data: {email: email, user_id: user_id},
            dataType: 'JSON',
            success: function(response) {
                if(response.status == 0) {
                   message_error(response.message);
                   $(email_field).val('');
                }
            },
            error: function() {
                alert("An error occurred while checking the email.");
            }
        });
    }

    // Check phone duplication
    function check_phone_duplication(phone, user_id, phone_field = '#phone') {
        $.ajax({
            url: '<?=base_url('app/users/check_phone_duplication/')?>',
            type: 'POST',
            data: {phone: phone, user_id: user_id},
            dataType: 'JSON',
            success: function(response) {
                if(response.status === 0) {
                   message_error(response.message);
                   $(phone_field).val('');
                }
            },
            error: function() {
                alert("An error occurred while checking the phone.");
            }
        });
    }

    // get sections by classes id
    function get_sections(classes_id, section_div = '#section_id'){
        $.ajax({
            type: 'GET',
            url: "<?=base_url('app/section/get_section_by_classes/?classes_id=')?>" + classes_id,
            dataType: "html",
            success: function (data) {
                $(section_div).html(data);
            }
        });
    }
    
    
    // get class section wise students list
    function get_student_by_section(section_id, students_div = '#students'){
        $.ajax({
            url: '<?=base_url('app/student/get_student_by_section/')?>',
            type: 'POST',
            data: {section_id: section_id},
            dataType: "html",
            success: function (data) {
                $(students_div).html(data);
            }
        });
    }

</script>
</body>
</html>
