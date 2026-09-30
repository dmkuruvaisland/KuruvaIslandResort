<?php
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */
$branches = $this->branch_m->get()->result_array();
$categories = $this->shipment_category_m->get()->result_array();
// log_message('error','$categories'.print_r($categories,true));
?>
<form class="form-horizontal" action="<?=base_url('app/shipment/add/')?>" method="post" enctype="multipart/form-data">
	<div class="row" style="margin: 0!important;">
		<div class="form-group col-12">
			<label for="title" class="col-sm-12 col-form-label text-muted">Title <span class="text-danger">*</span></label>
			<div class="col-sm-12">
				<input type="text" class="form-control" id="title" name="title" value="" placeholder="Title" required>
			</div>
		</div>
		<div class="form-group col-12">
			<label for="description" class="col-sm-12 col-form-label text-muted">Description <span class="text-danger">*</span></label>
			<div class="col-sm-12">
				<textarea class="form-control" id="description" name="description" value="" placeholder="Description" required></textarea>
			</div>
		</div>
		<div class="form-group col-12">
			<label for="shipment_address" class="col-sm-12 col-form-label text-muted">Shipment Address <span class="text-danger">*</span></label>
			<div class="col-sm-12">
				<input type="text" class="form-control" id="shipment_address" name="shipment_address" value="" placeholder="Shipment Address" required>
			</div>
		</div>
		<div class="row">
            <div class="form-group col-12 col-md-6" style="width: 640px;margin-left: 10px;margin-right: -16px;">
                <label for="branch_id_from" class="col-sm-12 col-form-label text-muted">Branch From <span class="text-danger">*</span></label>
                <div class="col-sm-12">
                    <select class="form-control select2" id="branch_id_from" name="branch_id_from" style="width:100%">
                        <option value="">Select Branch</option>
                        <?php
                            foreach ($branches as $branch){
                                echo "<option value=\"{$branch['id']}\">{$branch['title']}</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
        
            <div class="form-group col-12 col-md-6">
                <label for="branch_id_to" class="col-sm-12 col-form-label text-muted">Branch To <span class="text-danger">*</span></label>
                <div class="col-sm-12">
                    <select class="form-control select2" id="branch_id_to" name="branch_id_to" style="width:100%">
                        <option value="">Select Branch</option>
                        <?php
                            foreach ($branches as $branch){
                                echo "<option value=\"{$branch['id']}\">{$branch['title']}</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>

		
	</div>
		
	<div class="form-group col-12">
		<label for="shipment_category_id" class="col-sm-12 col-form-label text-muted">Shipment Category <span class="text-danger">*</span></label>
		<div class="col-sm-12">
			<select class="form-control select2" id="shipment_category_id" name="shipment_category_id" style="width:100%">
				<option value="">Select Category</option>
				<?php
					foreach ($categories as $category){
						echo "<option value=\"{$category['id']}\">{$category['title']}</option>";
					}
				?>
			</select>
		</div>
	</div>
		
	
	<div class="row">
        <div class="form-group col-12">
			<label for="tracking_code" class="col-sm-12 col-form-label text-muted">Tracking Code <span class="text-danger">*</span></label>
			<div class="col-sm-12">
				<input type="text" class="form-control" id="tracking_code" name="tracking_code" value="" placeholder="Tracking Code" required>
			</div>
		</div>
    </div>
    
    <div class="row">
        <div class="form-group col-12">
			<label for="remark" class="col-sm-12 col-form-label text-muted">Remark </label>
			<div class="col-sm-12">
				<input type="text" class="form-control" id="remark" name="remark" value="" placeholder="Remark" >
			</div>
		</div>
    </div>

	<div class="col-12" >
		<button type="submit" name="add" value="Save" class="btn btn-danger btn-mini float-right" style="float: right!important;width: 120px;">
			<small><i class="fa fa-check"></i></small> Save
		</button>
	</div>
</form>


<script type="application/javascript">
	$('.select2').select2();
	
    
    

</script>
