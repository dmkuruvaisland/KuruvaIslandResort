<aside class="main-sidebar sidebar-dark-primary elevation-pro" >
	<!-- Sidebar -->
	<div class="sidebar">
		<div class="text-center">
			<a href="<?=base_url('admin/dashboard/')?>">
				<img src="<?=base_url('assets')?>/logo/trogon_logo.png" style="width:100%;max-width: 140px;height: auto; margin-bottom: -10px;margin-top:10px;" alt="">
			</a>
		</div>

		<?php
		$page_name = $page_name ?? '';
		?>
		<!-- Sidebar Menu -->
		<nav class="mt-4">
			<div class="text-center p-2">
				<div><img src="<?=base_url('assets/logo/user_icon.png')?>" class="profile_picture_list" style="width: 50px;height: 50px;"></div>
				<?php
                    if (is_branch_admin()) {
                        echo '<b>Branch Admin</b>';
                        echo '<div class="text-primary bg-primary-lighten p-2" style="border-radius: 3px;line-height: 0.8em;"><small>'.$branch_name.'</small></div>';
                    }elseif (is_super_admin()) {
                        echo '<b>Super Admin</b>';
                    }elseif (is_sales_person()){
                        echo '<b>Sales Person</b>';
                    }elseif (is_agent()){
                        echo '<b>Agent</b>';
                    }
                ?>
			</div>
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item <?=$page_name=='dashboard/index' ? 'menu-open' : ''?>" style="margin-top: 15px;">
					<a href="<?= base_url(); ?>" class="nav-link "
					   style="background-color: #e4efea!important;color: #000!important;">
                        <i class="nav-icon bi bi-browser-safari"></i>
						<p>
                            HOME PAGE
						</p>
					</a>
				</li>
                <li class="nav-item <?=$page_name=='dashboard/index' ? 'menu-open' : ''?>" >
                    <a href="<?= base_url('app/dashboard/index'); ?>" class="nav-link "
                       style="background-color: #c9ddf6!important;color: #000!important;">
                        <i class="nav-icon bi bi-speedometer2"></i>
                        <p>
                            DASHBOARD
                        </p>
                    </a>
                </li>
				<?php
					if (isset($menu)){
						foreach ($menu['parent'] as $parent_menu){
							if ($parent_menu['link'][0]=='#'){
								$tree_view = in_array($page_name, $parent_menu['child_pages']) ? 'menu-open' : '';
								if (has_permission($parent_menu['link'])){
									?>
									<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
										<li class="nav-item has-treeview <?=$tree_view?>">
											<a href="#" class="nav-link ">
												<i class="nav-icon <?=$parent_menu['icon']?>"></i>
												<p>
													<?=$parent_menu['title']?>
													<i class="right fas fa-angle-left"></i>
												</p>
											</a>
											<ul class="nav nav-treeview">
												<?php
												foreach ($menu['child'][$parent_menu['id']] as $child_menu){
													if (has_permission($child_menu['link'])){
														?>
														<li class="nav-item">
															<a href="<?= base_url("app/{$child_menu['link']}"); ?>" class="nav-link <?=$page_name == $child_menu['link'] ? 'active' : ''?>">
																<i class="nav-icon <?=$child_menu['icon']?>"></i>
																<p><?=$child_menu['title']?></p>
															</a>
														</li>
														<?php
													}
												}
												?>

											</ul>
										</li>
									</ul>
									<?php
								}
							}else{
								if (has_permission($parent_menu['link'])){
									?>
									<li class="nav-item">
										<a href="<?= base_url("app/{$parent_menu['link']}"); ?>" class="nav-link <?=$page_name == $parent_menu['link'] ? 'active' : ''?>">
											<i class="nav-icon <?=$parent_menu['icon']?>"></i>
											<p><?=$parent_menu['title']?></p>
										</a>
									</li>
									<?php
								}
							}
						}
					}
				?>


				<?php
				// if (has_permission('settings')) {
				// 	$settings = ['academic_year/index', 'permission/index', 'permission_roles/index', 'menu/index',
				// 			'menu_roles/index', 'district/index', 'state/index', 'country/index'];
				// 	$tree_view = in_array($page_name, $settings) ? 'menu-open' : '';
					?>
					<!--<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">-->
					<!--	<li class="nav-item has-treeview <?=$tree_view?>">-->
					<!--		<a href="#" class="nav-link ">-->
					<!--			<i class="nav-icon bi bi-gear-fill"></i>-->
					<!--			<p>-->
					<!--				Settings-->
					<!--				<i class="right fas fa-angle-left"></i>-->
					<!--			</p>-->
					<!--		</a>-->
							<!--<ul class="nav nav-treeview">-->
							    
							    <?php
								//if (has_permission('status')) {
									?>
									<!--<li class="nav-item">-->
									<!--	<a href="<?= base_url('app/status/index'); ?>" class="nav-link <?=$page_name == 'status/index' ? 'active' : ''?>">-->
									<!--		<i class="nav-icon bi bi-check-circle"></i>-->
									<!--		<p>Status</p>-->
									<!--	</a>-->
									<!--</li>-->
									<?php
								//}
								?>
								
								<?php
								// if (has_permission('permission')) {
									?>
									<!--<li class="nav-item">-->
									<!--	<a href="<?= base_url('app/permission/index'); ?>" class="nav-link <?=$page_name == 'permission/index' ? 'active' : ''?>">-->
									<!--		<i class="nav-icon bi bi-shield-shaded"></i>-->
									<!--		<p>Permission</p>-->
									<!--	</a>-->
									<!--</li>-->
									<?php
								// }
								?>

								<?php
								// if (has_permission('permission_roles')) {
									?>
									<!--<li class="nav-item">-->
									<!--	<a href="<?= base_url('app/permission_roles/index/'); ?>" class="nav-link <?=$page_name == 'permission_roles/index' ? 'active' : ''?>">-->
									<!--		<i class="nav-icon bi bi-person-check-fill"></i>-->
									<!--		<p>Permission ROLES</p>-->
									<!--	</a>-->
									<!--</li>-->
									<?php
								// }
								?>

								<?php
								//if (has_permission('menu')) {
									?>
									<!--<li class="nav-item">-->
									<!--	<a href="<?= base_url('app/menu/index'); ?>" class="nav-link <?=$page_name == 'menu/index' ? 'active' : ''?>">-->
									<!--		<i class="nav-icon bi bi-list"></i>-->
									<!--		<p>Menu</p>-->
									<!--	</a>-->
									<!--</li>-->
									<?php
								//}
								?>


					<!--		</ul>-->

					<!--	</li>-->
					<!--</ul>-->
					<?php
				// }
				?>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>

<style>
     @media screen and (max-width:600px){
         .profile_picture_list{
             width: 50px;
             height: 50px;
         }
     }
</style>
