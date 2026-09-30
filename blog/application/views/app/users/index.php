<div class="container-fluid">
	<div style="padding-bottom: 10px;margin:14px;" class="clearfix shadow-pro p-2">
		<a href="<?= base_url("app/dashboard/index"); ?>" class="btn btn-outline-secondary btn-mini pull-left">
			<i class="fas fa-arrow-circle-left"></i> Go Back
		</a>
        <?php
        if (is_super_admin()){
            ?>
            
            <button onclick="show_large_modal('<?php echo site_url('app/modal/popup/get/'); ?>/?page_name=users/add', '<?= get_phrase('add_users'); ?>')"
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
			<form action="" method="get">
				<div class="row mt-2">

					<div class="col-4 form-group p-2">
						<button type="submit" class="btn btn-secondary">
							<small><i class="bi bi-funnel-fill"></i></small> Filter
						</button>
					</div>

				</div>
			</form>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Branch</th>
					<th>Username</th>

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
							<th><?= $item['name']?></th>
							<th><?= $item['phone']?></th>
							<th><?= $item['email']?></th>
							<th><?= $branch[$item['branch_id']]?></th>
							<th><?= $item['username']?></th>

                            <?php
                            if (is_super_admin()){
                                ?>
                                <td>
                                    <button onclick="show_large_modal('<?= site_url('app/modal/popup/get/'.$item['id'].'/?page_name=users/edit'); ?>', '<?php echo get_phrase('update_users'); ?>')"
                                            class="btn btn-info btn-sm">
                                        <small><i class="fas fa-pencil-alt"></i></small>
                                    </button>
                                    <button onclick="confirm_modal('<?=base_url("app/users/delete/{$item['id']}/");?>')"
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
	</div>
</div>


<style>
    .card{
        overflow: scroll;
    }
    
    @media screen and (max-width:600px){
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
    }
</style>
