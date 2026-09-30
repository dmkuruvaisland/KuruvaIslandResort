<style>
    .table-form td{
        padding: 0!important;
    }
    .table-form th{
        padding: 5px!important;
        font-weight: 600!important;
        font-size: 14px!important;
    }
    .table-form-control{
        max-width: 50px!important;
        height: auto !important;
        padding: 5px!important;
        border: 1px solid #FFFFFF;
        color: rgba(25,25,25,0.81);
    }
    .table-form-control:focus{
        border: 1px solid #efefef;
        outline: none !important;
    }
    .max-width-700{
        max-width: 700px;
    }
    .input-group-text{
        font-size: 15px;
    }

    input[readonly] {
        background-color: rgb(245,243,243) !important;
    }
</style>
<div class="register-box" style="max-width: 900px!important;margin-top: 40px;">
    <!-- /.login-logo -->
    <div class="card shadow-none shadow-pro">
        <div class="card-body login-card-body">
            <div class="login-logo">
                <div class="p-2">
                    <img src="<?=base_url('assets/logo/logo.png')?>" alt="" style="width:180px;height:auto">
                </div>
            </div>
            <div class="p-2 text-center">
                <h2 style="font-weight: bold; font-size: 21px;text-transform: uppercase" class="text-primary">School Registration</h2>
                <hr>
            </div>
            <?php
            if (isset($error)){
            ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fas fa-ban"></i> <?php echo $error; ?>
            </div>
<?php } ?>