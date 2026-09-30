<div class="login-box" style="max-width: 360px!important;">
	<!-- /.login-logo -->
	<div class="card shadow-none shadow-pro">
		<div class="card-body login-card-body">
			<div class="login-logo">
				<div class="p-2">
					<img src="<?=base_url('assets')?>/logo/trogon_logo.png" alt="" style="width:150px;height:auto">
				</div>
			</div>
			<p class="login-box-msg" style="font-size: 15px;">Log in to start your session</p>
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
					<input value="" type="text" class="form-control" name="username" placeholder="Username" required>
					<div class="input-group-append">
						<div class="input-group-text">
							<i class="bi bi-person-circle"></i>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input value="" type="password" class="form-control" name="password" placeholder="Password" required>
					<div class="input-group-append">
						<div class="input-group-text">
							<i class="bi bi-lock-fill"></i>
						</div>
					</div>
				</div>
				<?php
				if(isset($show_captcha) && $show_captcha && isset($captcha)){
					?>
					<div class="input-group mb-3" >
						<div class="input-group-prepend">
							<div class="input-group-text" style="background-color: #dedede; color:#111;">
								<span><?=strip_tags($captcha['value1'].' + '.$captcha['value2']);?> = </span>
							</div>
						</div>
						<input value="" type="number" class="form-control" name="<?=strip_tags($captcha['label']);?>" placeholder="Your Answer" style="" required>
						<div class="input-group-append">
							<div class="input-group-text" style="background-color: #dedede">
								<span>*</span>
							</div>
						</div>
					</div>
					<?php
				}
				?>
				<div class="row">
					<!-- /.col -->
					<div class="col-12">
						<button type="submit" class="btn btn-success btn-block" name="submit">
							<i class="bi bi-box-arrow-in-right"></i> Log In
						</button>
						<div class="p-2 text-center">
							<small></small>
						</div>
						<!--<div class="text-center">-->
						<!--	<a href="<?=base_url('reset_password/index/')?>" >-->
						<!--		</i> Reset Password-->
						<!--	</a>-->
						<!--</div>-->
					</div>
					<!-- /.col -->
				</div>
				<div class="p-1"></div>
				<hr>
				<div class="text-muted text-center">
					<small>TROGON MEDIA PVT LTD</small>
				</div>
			</form>
		</div>
		<!-- /.login-card-body -->
	</div>
</div>
<!-- /.login-box -->
