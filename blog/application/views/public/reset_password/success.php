<div class="login-box" style="max-width: 450px!important;">
	<!-- /.login-logo -->
	<div class="card shadow-none shadow-pro">
		<div class="card-body login-card-body">
			<div class="pt-4 pb-1">
				<h4 class="text-center text-success" style="font-weight: 600!important;">Registration Successful</h4>
				<div class="p-2 text-center1">
					<p class="mb-3 text-center text-gray-dark">Your registration has been successfully completed.</p>
					<hr>
					<ul style="margin: 0!important;padding-left: 10px!important;">
						<li>
							<p class="mb-1 text-blue" style="font-weight: 600">Admin login username and password has been send to the email - <?=$register['email'] ?? ''?>.</p>
						</li>
						<li>
							<p class="mb-1 text-secondary" style="font-weight: 600">You can now log-in to the school admin panel and register students for the events.</p>
						</li>
					</ul>
				</div>
			</div>
			<hr>
			<h6 class="card-subtitle mb-4 text-muted text-center">SCHOOL INFORMATION</h6>

			<p class="card-text">
				<strong>School Name:</strong> <span id="school-name"><?=$register['school_name'] ?? ''?></span>
			</p>

			<p class="card-text">
				<strong>Registration Number:</strong> <span id="registration-number"><?=$register['register_no'] ?? ''?></span>
			</p>

			<div class="text-center mt-4">
				<button onclick="switch_page('<?=base_url('login/index/')?>')"
						style="max-width: 200px;" class="btn btn-primary btn-block mx-auto">Login Now </button>
			</div>
		</div>
		<!-- /.login-card-body -->
	</div>
</div>
<!-- /.login-box -->
