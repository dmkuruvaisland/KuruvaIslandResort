<?php
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */
?>
<form class="form-horizontal" action="<?=base_url('app/country/add/')?>" method="post" enctype="multipart/form-data">
	<div class="row" style="margin: 0!important;">
		<div class="form-group col-12 p-0">
			<label for="title" class="col-sm-12 col-form-label text-muted">Country <span class="text-danger">*</span></label>
			<div class="col-sm-12">
				<input type="text" class="form-control" id="title" name="title" value="" placeholder="Country" required>
			</div>
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

</script>
