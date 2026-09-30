<?php
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */
$menu_id = $param1;
$edit_data = $this->menu_m->get(['id' => $menu_id])->row_array();
$parent_items = $this->menu_m->get(['parent' => 0])->result_array();
//$icons = $this->db->get('icons')->result_array();
$icons = [];
?>
<form class="form-horizontal" action="<?=base_url('app/menu/edit/'.$menu_id)?>" method="post" enctype="multipart/form-data">
	<div class="row" style="margin: 0!important;">
		<div class="form-group col-12">
			<label for="title" class="col-sm-12 col-form-label text-muted">Menu Title <span class="text-danger">*</span></label>
			<div class="col-sm-12">
				<input type="text" class="form-control" id="title" name="title" value="<?=$edit_data['title']?>" placeholder="Menu Title" required>
			</div>
		</div>
		<div class="form-group col-12">
			<label for="link" class="col-sm-12 col-form-label text-muted">Menu Link <span class="text-danger">*</span></label>
			<div class="col-sm-12">
				<input type="text" class="form-control" id="link" name="link" value="<?=$edit_data['link']?>" placeholder="Menu Link" required>
			</div>
		</div>
		<div class="form-group col-12">
			<label for="priority" class="col-sm-12 col-form-label text-muted">Priority <span class="text-danger">*</span></label>
			<div class="col-sm-12">
				<input type="number" class="form-control" id="priority" name="priority" value="<?=$edit_data['priority']?>" placeholder="Priority" required>
			</div>
		</div>
		<div class="form-group col-12">
			<label for="parent" class="col-sm-12 col-form-label text-muted">Parent <span class="text-danger">*</span></label>
			<div class="col-sm-12">
				<select class="form-control d-block select2" id="parent" name="parent" required>
					<option value="0">Parent Menu</option>
					<?php
					foreach ($parent_items as $parent_item) {
						$selected = $edit_data['parent'] == $parent_item['id'] ? 'selected' : '';
						echo "<option value='{$parent_item['id']}' {$selected}>{$parent_item['title']}</option>";
					}
					?>
				</select>
			</div>
		</div>
	</div>

	<div class="form-group col-12">
		<label for="icon" class="col-sm-12 col-form-label text-muted">Icon <span class="text-danger">*</span></label>
		<div class="col-sm-12">
			<input type="text" value="<?=$edit_data['icon']?>" id="icon" class="form-control" placeholder="Icon" required>
		</div>
	</div>

	<div class="col-12" >
		<button type="submit" name="add" value="Save" class="btn btn-primary btn-mini float-right" style="float: right!important;width: 120px;">
			<small><i class="fa fa-check"></i></small> Save
		</button>
	</div>
</form>


<script type="application/javascript">
	$('.select2').select2();
	function formatText (icon) {
		return $('<span><i class="fas ' + $(icon.element).data('icon') + '"></i> ' + icon.text + '</span>');
	};

	$('.select2-icon').select2({
		width: "100%",
		templateSelection: formatText,
		templateResult: formatText
	});
</script>
