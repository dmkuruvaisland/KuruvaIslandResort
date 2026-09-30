<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title> <?=$page_title ?? ''?> - <?=get_settings('system_name')?></title>

    <link rel="icon" href="<?=base_url('assets')?>/logo/favicon.png" type="image/x-icon" />

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css"/>


	<!-- Select2 -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/select2/css/select2.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/toastr/toastr.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.css">
	<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">-->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/custom.css?v=<?=rand()?>">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <!-- DataTables -->
    <script src="<?= base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/jszip/jszip.min.js"></script>


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    
	<!-- Navbar -->
	<?php include_once 'navigation_top.php'?>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<?php include_once 'navigation_side.php'?>


	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">

			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->
		<!-- Main content -->
		<div class="content" style="margin-top: -14px;">
			<div class="container-fluid">
				<?php include_once 'navigation_easy.php'?>
			</div><!-- /.container-fluid -->
		</div>


<style>
    @media screen and (min-width: 987px) {
        .content-wrapper{
            margin-left: 280px !important;
            /* Add any other styles you want to apply */
        }
    }
    
    /*@media screen and (max-width:991px){*/
    /*    .wrapper{*/
    /*        width:fit-content;*/
    /*    }*/
    /*}*/
</style>