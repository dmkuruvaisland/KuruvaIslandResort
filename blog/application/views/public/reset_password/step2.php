<div class="login-box" style="max-width: 360px!important;">
    <!-- /.login-logo -->
    <div class="card shadow-none shadow-pro">
        <div class="card-body login-card-body">
            <div class="login-logo">
                <div class="p-2">
                    <img src="<?=base_url('assets/website')?>/images/logo.png" alt="" style="width:150px;height:auto">
                </div>
            </div>
            <p class="login-box-msg" style="font-size: 15px;">Enter Your 6-Digit OTP</p>
            <?php
            if (isset($error)){
                ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fas fa-ban"></i> <?php echo $error; ?>
                </div>
            <?php } ?>

            <form action="" method="post">
                <div class="input-group mb-3">
                    <input value="" type="text" class="form-control" name="otp" placeholder="Enter OTP" required maxlength="6">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="bi bi-key"></i>
                        </div>
                    </div>
                </div>
                
                
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block" name="submit">
                            <i class="bi bi-box-arrow-in-right"></i> Verify OTP
                        </button>
                        <div class="p-2 text-center">
                            <small></small>
                        </div>
                        
                    </div>
                    <!-- /.col -->
                </div>
                <div class="p-1"></div>
                <hr>
                <div class="text-muted text-center">
                    <small>PINAS EXPRESS CARGO</small>
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
