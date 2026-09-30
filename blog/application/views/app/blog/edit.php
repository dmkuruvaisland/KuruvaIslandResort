<?php
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */
$id = $param1;
$edit_data = $this->blog_m->get(['id' => $id])->row_array();
// log_message('error','edit_id: '.$id);
?>
<form class="form-horizontal" action="<?=base_url('app/blog/edit/'.$id)?>" method="post" enctype="multipart/form-data">
    <div class="row" style="margin: 0!important;">
		<div class="form-group col-12 p-0">
			<label for="title" class="col-sm-12 col-form-label text-muted">Title<span class="text-danger">*</span></label>
			<div class="col-sm-12">
				<input type="text" class="form-control" id="title" name="title" value="<?=$edit_data['title']?>" placeholder="Title" required>
			</div>
		</div>
		
		<div class="form-group col-12 p-0">
			<label for="author_name" class="col-sm-12 col-form-label text-muted">Author Name<span class="text-danger">*</span></label>
			<div class="col-sm-12">
				<input type="text" class="form-control" id="author_name" name="author_name" value="<?=$edit_data['author_name']?>" placeholder="Author Name" required>
			</div>
		</div>
		
		<div class="form-group col-12 p-0">
            <label for="description" class="col-sm-12 col-form-label text-muted">Description<span class="text-danger">*</span></label>
            <div class="col-sm-12">
                <textarea class="form-control" id="description" name="description" placeholder="Description" required><?=$edit_data['description']?></textarea>
            </div>
        </div>
		
		<div class="form-group col-12 p-0">
            <label for="short_description" class="col-sm-12 col-form-label text-muted" >Short Description<span class="text-danger">*</span></label>
            <div class="col-sm-12">
                <textarea class="form-control" id="short_description" name="short_description" placeholder="Short Description" required><?=$edit_data['short_description']?></textarea>
            </div>
        </div>
        
        <div class="form-group col-12 p-0">
            <label for="meta_title" class="col-sm-12 col-form-label text-muted" >Meta Title<span class="text-danger">*</span></label>
            <div class="col-sm-12">
                <textarea class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title" required><?=$edit_data['meta_title']?></textarea>
            </div>
        </div>
        
        <div class="form-group col-12 p-0">
            <label for="meta_description" class="col-sm-12 col-form-label text-muted" >Meta Description<span class="text-danger">*</span></label>
            <div class="col-sm-12">
                <textarea class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description" required><?=$edit_data['meta_description']?></textarea>
            </div>
        </div>
		
		<div class="form-group col-12 row">
            <div class="col-sm-3">
            <img id="img_show_div" style="width:100px;" src="<?=base_url().$edit_data['image'];?>">
            </div>
        </div>
		
		<div class="form-group col-12 p-0">
			<label for="image" class="col-sm-12 col-form-label text-muted">Image</label>
			<div class="col-sm-12">
				<input type="file" class="form-control" id="image" name="image" title="upload blog image" >
			</div>
		</div>
		
        
        
    	<div class="col-12" >
    		<button type="submit" name="add" value="Save" class="btn btn-primary btn-mini float-right" style="float: right!important;width: 120px;">
    			<small><i class="fa fa-check"></i></small> Save
    		</button>
    	</div>
    </div>	
</form>

<script>
    // CKEDITOR.replace('description');
    // CKEDITOR.replace('short_description');
</script>