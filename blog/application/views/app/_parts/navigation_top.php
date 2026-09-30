<style>
    @media screen and (min-width: 987px) {
        .main-header{
            /*margin-left: 280px !important;*/
            /* Add any other styles you want to apply */
        }
    }
</style>
<nav class="main-header navbar navbar-expand navbar-dark" style="background-color: #28a745;" >
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
		</li>

		<li class="nav-item d-none d-sm-inline-block">
            <div class="text-white p-2 rounded text-center" style="background-color: #2ebf4f; width: 160px;font-size: 16px;">
                <?=date('M-d, <b>g:i A</b>')?>
            </div>
		</li>
        <?php
            if (has_permission('dashboard/index')){
                ?>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?=base_url()?>" class="nav-link">
                        <i class="bi bi-browser-safari"></i> HOME
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?=base_url('app/dashboard/index')?>" class="nav-link">
                        <i class="bi bi-speedometer2"></i> DASHBOARD
                    </a>
                </li>
                <?php
            }

            // if (has_permission('school/index')){
                ?>
                <!--<li class="nav-item d-none d-sm-inline-block">-->
                <!--    <a href="<?=base_url('app/school/index')?>" class="nav-link">-->
                <!--        <i class="bi bi-buildings"></i> SCHOOLS-->
                <!--    </a>-->
                <!--</li>-->
                <?php
            // }


        ?>





	</ul>


	<ul class="navbar-nav ml-auto">
		<li class="nav-item d-sm-inline-block">
			<a href="<?= base_url('app/notification/index/'); ?>" class="nav-link">
				<i class="bi bi-bell-fill"></i>
			</a>
		</li>
		<li class="nav-item d-sm-inline-block">
			<a href="<?= base_url('app/profile/index/'); ?>" class="nav-link">
				<i class="bi bi-person-fill"></i>
			</a>
		</li>
		<li class="nav-item d-sm-inline-block">
			<div onclick="switch_page('<?= base_url('login/logout/'); ?>')" class="nav-link">
				<i class="bi bi-box-arrow-right"></i> Logout</div>
		</li>
	</ul>


</nav>
