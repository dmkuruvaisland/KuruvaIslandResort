<?php base_path(); ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Kuruva Island</title>

    
    
    <script src="https://kit.fontawesome.com/8345fc4cab.js" crossorigin="anonymous"></script>
    <!-- Font Awesome Icons -->

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php rootURL('assets/'); ?>plugins/select2/css/select2.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php rootURL('assets/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?php rootURL('assets/'); ?>plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php rootURL('assets/'); ?>dist/css/adminlte.css">
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">-->
    <link rel="stylesheet" href="<?php rootURL('assets/'); ?>dist/css/custom.css?v=123">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    
    
     <style>
    
    
    
        .main-header .navbar-nav{
            margin-right:auto;
        }
    
    
        .sidebar{
            padding-top:25px;
        }
        .sidebar li{
            transition:all 500ms ease-in;
        }
        .sidebar li i{
            font-size:20px;
            margin-right:20px;
            color:#00B1D1;
            max-width:50px;
        }
        .sidebar li h4{
            font-size:18px;
        }
        .sidebar .nav-link{
            background:#f8f8f8;
            border-radius:30px;
        }
        .sidebar .nav-link:hover{
            background:#00B1D1;
        }
        
        .sidebar .nav-link:hover h4,
        .sidebar .nav-link:hover h4 i{
            color:#fff;
        }
        .menu_open{
            
        }
    </style>
    
    
    
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
      <nav class="main-header navbar navbar-expand">
        <!-- Left navbar links -->
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block ">
                <a href="<?php rootURL('admin/dashboard/'); ?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php rootURL('admin/logout/'); ?>" class="nav-link">Logout</a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4" style="background-color:#fff;box-shadow: 0 0 3px rgba(36, 39, 44, 0.15) !important;">
        <!-- Brand Logo -->
        <a href="<?php rootURL('admin/dashboard/'); ?>" class="brand-link padding-5 text-center">
            <span class="brand-text font-weight-light">
                <img src="<?php rootURL('admin/'); ?>images/logo.png" style="width:150px;">
            </span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <?php
                $page_name = $page_name ?? '';
            ?>
            <!-- Sidebar user panel (optional) -->
            <!--<div class="user-panel mt-3 pb-3 mb-3 d-flex">-->
            <!--	<div class="image">-->
            <!--		<img src="<?php rootURL('assets/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
            <!--	</div>-->
            <!--	<div class="info">-->
            <!--		<a href="#" class="d-block">ADMIN PANEL</a>-->
            <!--	</div>-->
            <!--</div>-->

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    
                    <li class="nav-item mb-1 <?php echo  $page_name == 'blog' ?'menu-open' : ''?>" style="background-color:#FFFFFF01;">
                        <a href="<?php rootURL('admin/blog/'); ?>" class="nav-link">
                            
                            <h4><i class="fa-solid fa-globe"></i> &nbsp;&nbsp;Blog</h4>
                        </a>
                    </li>
                    
                     <li class="nav-item mb-1 <?php echo  $page_name == 'blog' ?'menu-open' : ''?>" style="background-color:#FFFFFF01;">
                        <a href="<?php rootURL('admin/photo_gallery/'); ?>" class="nav-link">
                            
                            <h4><i class="fa fa-image"></i> &nbsp;&nbsp;Photo Gallery</h4>
                        </a>
                    </li>
                    
                     <li class="nav-item mb-1 <?php echo  $page_name == 'blog' ?'menu-open' : ''?>" style="background-color:#FFFFFF01;">
                        <a href="<?php rootURL('admin/video_gallery/'); ?>" class="nav-link">
                            
                            <h4><i class="fa fa-file-video-o"></i> &nbsp;&nbsp;Video Gallery</h4>
                        </a>
                    </li>
                    
                    <li class="nav-item mb-1 <?php echo  $page_name == 'events' ?'menu-open' : ''?>" style="background-color:#FFFFFF01;">
                        <a href="<?php rootURL('admin/events/'); ?>" class="nav-link">
                            
                            <h4><i class="fa-solid fa-champagne-glasses"></i> &nbsp;&nbsp;Events</h4>
                        </a>
                    </li>
                    
                   
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
