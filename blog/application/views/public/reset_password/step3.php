<div class="login-box" style="max-width: 360px!important;">
    <!-- /.login-logo -->
    <div class="card shadow-none shadow-pro">
        <div class="card-body login-card-body">
            <div class="login-logo">
                <div class="p-2">
                    <img src="<?=base_url('assets/website')?>/images/logo.png" alt="" style="width:150px;height:auto">
                </div>
            </div>
            <p class="login-box-msg" style="font-size: 15px;">Reset Your Password</p>
            <?php
            if (isset($error)){
                ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fas fa-ban"></i> <?php echo $error; ?>
                </div>
            <?php } ?>
            <div class="p-2 text-center text-danger" id="passwordMessage">
                <!-- This will display the password mismatch message -->
            </div>

            <form action="" method="post" id="changePasswordForm">
                <div class="input-group mb-3">
                    <input value="" type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password" required>

                    <div class="input-group-append">
                        <a class="btn btn-outline-secondary" type="button" id="showPasswordToggle1">
                            <i class="bi bi-eye"></i>
                        </a>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input value="" type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>

                    <div class="input-group-append">
                        <a class="btn btn-outline-secondary" type="button" id="showPasswordToggle2">
                            <i class="bi bi-eye"></i>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block" name="submit">
                            <i class="bi bi-box-arrow-in-right"></i> Reset Password
                        </button>

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

<script>
    $(document).ready(function() {
        // Function to check if the passwords match using Ajax
        function checkPasswordMatch() {
            // Get the entered passwords
            var newPassword = $("#new_password").val();
            var confirmPassword = $("#confirm_password").val();

            // Check if the passwords match
            if (newPassword !== confirmPassword) {
                $("#passwordMessage").html("Passwords do not match.");
                $("#new_password").addClass("is-invalid");
                $("#confirm_password").addClass("is-invalid");
            } else {
                $("#passwordMessage").html(""); // Clear the message if passwords match
                $("#new_password").removeClass("is-invalid");
                $("#confirm_password").removeClass("is-invalid");
            }
        }

        // Trigger password mismatch check when either password field changes
        $("#new_password, #confirm_password").on("input", function() {
            checkPasswordMatch();
        });

        // Show/hide password functionality for "New Password" field
        $("#showPasswordToggle1").click(function() {
            var newPasswordInput = $("#new_password");
            var icon = $(this).find("i");

            if (newPasswordInput.attr("type") === "password") {
                newPasswordInput.attr("type", "text");
                icon.removeClass("bi-eye").addClass("bi-eye-slash");
            } else {
                newPasswordInput.attr("type", "password");
                icon.removeClass("bi-eye-slash").addClass("bi-eye");
            }
        });

        // Show/hide password functionality for "Confirm Password" field
        $("#showPasswordToggle2").click(function() {
            var confirmPasswordInput = $("#confirm_password");
            var icon = $(this).find("i");

            if (confirmPasswordInput.attr("type") === "password") {
                confirmPasswordInput.attr("type", "text");
                icon.removeClass("bi-eye").addClass("bi-eye-slash");
            } else {
                confirmPasswordInput.attr("type", "password");
                icon.removeClass("bi-eye-slash").addClass("bi-eye");
            }
        });

        // Rest of your existing code...

    });
</script>

