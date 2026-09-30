<div class="container-fluid">
	<div style="padding-bottom: 10px;margin:14px;" class="clearfix shadow-pro p-2">
		<a href="<?= base_url("app/dashboard/index"); ?>" class="btn btn-outline-secondary btn-mini pull-left">
			<i class="fas fa-arrow-circle-left"></i> Go Back
		</a>
		<!--<button onclick="show_ajax_modal('<?php echo site_url('app/modal/popup/get/'); ?>/?page_name=menu/add', '<?= get_phrase('add_menu'); ?>')"-->
		<!--        class="btn btn-primary btn-mini float-right">-->
		<!--    <small><i class="fas fa-plus"></i></small> Add <?= $page_title ?? '' ?>-->
		<!--</button>-->
	</div>
	<div class="card card-primary row mt-3 shadow-sm" style="margin:14px;">
		<div class="card-header">
			<h3 class="card-title"><?= $page_title ?? '' ?></h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Link</th>
					<th>Icon</th>
					<th>Priority</th>
					<!--<th style="width: 55px;">Action</th>-->
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
							<td><?= $item['link']?></td>
							<td>
								<i class="<?= $item['icon']?>"></i>
							</td>
							<td><?= $item['priority']?></td>
							<!--<td>-->
							<!--	<button onclick="show_ajax_modal('<?= site_url('app/modal/popup/get/'.$item['id'].'/?page_name=menu/edit'); ?>', '<?php echo get_phrase('update_menu'); ?>')"-->
							<!--			class="btn btn-info btn-sm">-->
							<!--		<small><i class="fas fa-pencil-alt"></i></small>-->
							<!--	</button>-->
							<!--	<button onclick="confirm_modal('<?=base_url("app/menu/delete/{$item['id']}/");?>')" class="btn btn-outline-danger btn-sm">-->
							<!--		<small><i class="fas fa-trash"></i> </small>-->
							<!--	</button>-->
							<!--</td>-->
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
					<th>Link</th>
					<td><?= $item['link']?></td>
				</tr>
				<tr>
					<th>Icon</th>
					<td>
						<i class="<?= $item['icon']?>"></i>
					</td>
				</tr>
				<tr>
					<th>Priority</th>
					<td><?= $item['priority']?></td>
				</tr>
				<tr>
				<tr style="background-color: #0038A7;">
                    <th></th>
                    <td></td>
                </tr>
					<!--<th style="width: 55px;">Action</th>-->
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
            display: none;
        }
     .card{
        overflow: scroll;
        }
    @media screen and (max-width:600px) and (min-width: 200px){
        .card-body{
            display:none;
        }
        .card{
            overflow: scroll;
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
            display: block;
        }
    }
</style>
