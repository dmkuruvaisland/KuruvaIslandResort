<?php
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */
$id = $param1;
$edit_data = $this->status_m->get(['id' => $id])->row_array();
// log_message('error','edit_id: '.$id);
?>
<form class="form-horizontal" action="<?=base_url('app/status/change_status/'.$id)?>" method="post" enctype="multipart/form-data">
    <div class="row" style="margin: 0!important;">
		<div class="form-group col-12 p-0">
			<label for="title" class="col-sm-12 col-form-label text-muted">Title<span class="text-danger">*</span></label>
			<div class="col-sm-12">
				<input type="text" class="form-control" id="title" name="title" value="<?=$edit_data['title']?>" placeholder="Title" required readonly>
			</div>
		</div>
        
        
    	<div class="col-12" >
    		<button type="submit" name="add" value="Save" class="btn btn-primary btn-mini float-right" style="float: right!important;width: 120px;">
    			<small><i class="fa fa-check"></i></small> Save
    		</button>
    	</div>
    </div>	
</form>

