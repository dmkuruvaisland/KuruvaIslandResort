<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Kuruva Island - Admin | Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="<?php rootURL('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- icheck bootstrap -->
      <link rel="stylesheet" href="<?php rootURL('assets/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php rootURL('assets/'); ?>dist/css/adminlte.css">
      <link rel="stylesheet" href="<?php rootURL('assets/'); ?>dist/css/custom.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <style>
         .login-box, .register-box {
         width: 100%;
         }.col-md-6.frm {
  background-color:#eceaea85;
  padding: 220px 60px 276px 60px;
         }
         .col-md-6.log {
  padding: 220px 60px 276px 60px;         }
         .login-box-msg, .register-box-msg {
         margin: 0;
         padding: 0 20px 20px;
         text-align: center;
         color: #0c322cd6;
         text-transform: uppercase;
         font-weight: bold;
         }
         .btn-primary {
         color: #ffffff;
         background-color: #0E332D;
         border-color: #0E332D;
         box-shadow: none;
         border-radius: 21px;
         }
         .btn-primary:hover{
         color:  #0E332D;
         background-color: #F7BA6A;
         border-color:  #F7BA6A;
         box-shadow: none;
         border-radius: 21px;
         }
         .fas.fa-envelope {
  color: #0e332d;
}.fas.fa-lock {
  color: #0e332d;
}
      </style>
   </head>
   <body class="">
      <div class="">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 log">
                  <div class="login-logo">
                     <a href="<?=base_url(); ?>">
                        <!--<div class="btn btn-secondary btn-flat padding-20 btn-block">Bellvery</div>-->
                        <img alt="Logo" src="<?php rootURL('images/logo.png'); ?>" width="250px">
                     </a>
                  </div>
                  <p class="login-box-msg">Sign in to start your session</p>
                  <?php
                     if (isset($error)){
                     ?>
                  <div class="alert alert-danger alert-dismissible">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <i class="icon fas fa-ban"></i> <?php echo $error; ?>
                  </div>
                  <?php } ?>
               </div>
               <div class="col-md-6 frm">
                  <form action="" method="post">
                     <div class="input-group mb-3">
                        <input value="" type="text" class="form-control" name="username" placeholder="Username" required>
                        <div class="input-group-append">
                           <div class="input-group-text">
                              <span class="fas fa-envelope"></span>
                           </div>
                        </div>
                     </div>
                     <div class="input-group mb-3">
                        <input value="" type="password" class="form-control" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                           <div class="input-group-text">
                              <span class="fas fa-lock"></span>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                           <input type="submit" class="btn btn-primary btn-block" name="submit" value="Sign In">
                        </div>
                        <!-- /.col -->
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <!-- /.login-logo -->
      </div>
      <!-- /.login-box -->
      <!-- jQuery -->
      <script src="<?php rootURL('assets/'); ?>plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="<?php rootURL('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="<?php rootURL('assets/'); ?>dist/js/adminlte.min.js"></script>
   </body>
</html>
