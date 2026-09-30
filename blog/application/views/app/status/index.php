<div class="container-fluid">
	<div style="padding-bottom: 10px;margin:14px;" class="clearfix shadow-pro p-2">
		<a href="<?= base_url("app/dashboard/index"); ?>" class="btn btn-outline-secondary btn-mini pull-left">
			<i class="fas fa-arrow-circle-left"></i> Go Back
		</a>
        <?php
        if (is_super_admin()){
            ?>
            <button onclick="show_large_modal('<?php echo site_url('app/modal/popup/get/'); ?>/?page_name=status/add', '<?= get_phrase('add_status'); ?>')"
                    class="btn btn-primary btn-mini float-right">
                <small><i class="fas fa-plus"></i></small> Add <?= $page_title ?? '' ?>
            </button>
            <?php
        }
        ?>

	</div>
	<div class="card card-primary row mt-3 shadow-sm" style="margin:14px;">
		<div class="card-header">
			<h3 class="card-title"><?= $page_title ?? '' ?></h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<!--<form action="" method="get">-->
			<!--	<div class="row mt-2">-->

			<!--		<div class="col-4 form-group p-2">-->
			<!--			<button type="submit" class="btn btn-secondary">-->
			<!--				<small><i class="bi bi-funnel-fill"></i></small> Filter-->
			<!--			</button>-->
			<!--		</div>-->

			<!--	</div>-->
			<!--</form>-->
			<table id="example1" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th>#</th>
					<th>Title</th>

                    <?php
                    if (is_super_admin()){
                        ?>
                        <th style="width: 55px;">Action</th>
                        <?php
                    }
                    ?>

				</tr>
				</thead>
				<tbody>
				<?php
				if (isset($list_items)) {
					foreach ($list_items as $key => $item) {
						?>
						<tr>
							<td><?= $key + 1 ?></td>
							<td><?= $item['title']?></td>

                            <?php
                            if (is_super_admin()){
                                ?>
                                <td>
                                    <button onclick="show_large_modal('<?= site_url('app/modal/popup/get/'.$item['id'].'/?page_name=status/edit'); ?>', '<?php echo get_phrase('update_status'); ?>')"
                                            class="btn btn-info btn-sm">
                                        <small><i class="fas fa-pencil-alt"></i></small>
                                    </button>
                                    <button onclick="confirm_modal('<?=base_url("app/status/delete/{$item['id']}/");?>')"
                                            class="btn btn-outline-danger btn-sm ">
                                        <small><i class="fas fa-trash"></i> </small>
                                    </button>
                                </td>
                                <?php
                            }
                            ?>

						</tr>
						<?php
					}
				}
				?>

				</tbody>

			</table>
		</div>
		<!-- /.card-body -->
		<div class="mobile card-body">
			<table id="example1" class="table table-bordered table-striped">
				<tbody>
				    <?php
    				if (isset($list_items)) {
    					foreach ($list_items as $key => $item) {
    						?>
				<tr>
					<th>#</th>
					<td><?= $key + 1 ?></td>
				</tr>
				<tr>
					<th>Title</th>
					<td><?= $item['title']?></td>
				</tr>
				<tr>

                    <?php
                    if (is_super_admin()){
                        ?>
                        <th style="width: 55px;">Action</th>
                        <td>
                            <button onclick="show_large_modal('<?= site_url('app/modal/popup/get/'.$item['id'].'/?page_name=status/edit'); ?>', '<?php echo get_phrase('update_status'); ?>')"
                                    class="btn btn-info btn-sm">
                                <small><i class="fas fa-pencil-alt"></i></small>
                            </button>
                            <button onclick="confirm_modal('<?=base_url("app/status/delete/{$item['id']}/");?>')"
                                    class="btn btn-outline-danger btn-sm ">
                                <small><i class="fas fa-trash"></i> </small>
                            </button>
                        </td>
                        <?php
                    }
                    ?>
                </tr>
				<tr style="background-color: #0038A7;">
                    <th></th>
                    <td></td>
                </tr>
                    <?php
					}
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<style>
    .mobile{
        display:none;
    }
    .card{
        overflow: scroll;
    }
    @media screen and (max-width:600px){
        /*.card{*/
        /*    overflow: scroll;*/
        /*}*/
        .card-body{
            display:none;
        }
        div.dt-buttons {
            float: none !important;
            text-align: left;
        }
        div.dataTables_wrapper div.dataTables_filter{
            text-align: left;
            margin-top: 35px;
        }
        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
            margin: 2px 0;
            white-space: nowrap;
            justify-content: start;
        }
        .main-sidebar{
            width: 55% !important;
        }
        .mobile{
            display:block;
        }
        div.dataTables_info {
            padding-top: 0.85em;
            white-space: nowrap;
        }
    }
</style>

