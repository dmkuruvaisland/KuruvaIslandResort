<?php base_path(); ?>
<?php
if(isset($edit_data)){
    foreach($edit_data as $i)
    {
    ?>
    <div style="padding-bottom: 10px;">
        <a href="<?php rootURL("admin/package/"); ?>" class="btn btn-secondary btn-mini pull-left btn-flat">
            <i class="fas fa-arrow-circle-left"></i> Go Back
        </a>
    </div>
    <div class="card card-dark">
        <div class="card-header">
            <div class="row">
                <div class="form_title_custom">Edit - <?=strtoupper(get_phrase('package'))?></div>
            </div>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="<?=base_url('admin/package/edit/'.$i['id'].'/')?>" method="post" enctype="multipart/form-data">
                <div class="card-body" style="padding-top: 0px;">
                    <div class="row col-12">
                        
                        
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Select yacht</label>
                        <div class="col-sm-4">
                            <select type="text" class="form-control form-control-sm" id="yatch" name="yatch">
                                <?php
                                foreach($yatch_list as $i)
                                {
                                ?>
                                <option <?php if($i['id'] == $edit_data[0]['yatch_id']){ echo "selected"; } ?> value="<?=$i['id'];?>"><?=$i['name'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Package name</label>
                        <div class="col-sm-7">
                           <textarea rows="1" type="text" class="form-control form-control-sm" id="pack_name" name="pack_name" placeholder="Package name"><?=$edit_data[0]['package_name'];?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Price</label>
                        <div class="col-sm-7">
                            <textarea rows="1" type="number" class="form-control form-control-sm" id="price" name="price" placeholder="Price"><?=$edit_data[0]['price'];?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Duration</label>
                        <div class="col-sm-7">
                            <textarea rows="1" type="text" class="form-control form-control-sm" id="duration" name="duration" placeholder="Duration"><?=$edit_data[0]['duration'];?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Timing</label>
                        <div class="col-sm-7">
                            <textarea rows="1" type="text" class="form-control form-control-sm" id="timing" name="timing" placeholder="Timing"><?=$edit_data[0]['timing'];?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Capacity</label>
                        <div class="col-sm-7">
                            <textarea rows="1" type="text" class="form-control form-control-sm" id="capacity" name="capacity" placeholder="Capacity"><?=$edit_data[0]['capacity'];?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Remark</label>
                        <div class="col-sm-7">
                            <textarea rows="1" type="text" class="form-control form-control-sm" id="remark" name="remark" placeholder="Remark"><?=$edit_data[0]['remark'];?></textarea>
                            <input hidden value="<?=$edit_data[0]['id'];?>" type="text" id="idd" name="idd">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <?//=json_encode($edit_data);?>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                        <img id="img_show_div" style="width:100px;" src="<?=base_url().$edit_data[0]['image'];?>">
                        </div>
                    </div>
                    <div class="form-group col-12 row">
                        <label for="image" class="col-sm-2 col-form-label text-muted">Image</label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control form-control-sm" id="image" name="image" onchange="readURL(this);">
                        </div>
                    </div>
                    
                        <div class="col-12"  style="padding-right:20px;">
                            <button type="submit" name="edit" value="Save" class="btn btn-primary float-right" style="float: right!important">
                                <small><i class="fa fa-check"></i></small> Save
                            </button>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <div style="padding: 30px!important;"></div>
    <?php
}
}
?>


<script>
    function onTimeChange(time_id, label_id) {
        var inputEle = document.getElementById(time_id);

        var timeSplit = inputEle.value.split(':'),
            hours,
            minutes,
            meridian;
        hours = timeSplit[0];
        minutes = timeSplit[1];
        if (hours > 12) {
            meridian = 'PM';
            hours -= 12;
        } else if (hours < 12) {
            meridian = 'AM';
            if (hours == 0) {
                hours = 12;
            }
        } else {
            meridian = 'PM';
        }
        $('#' + label_id).text(hours + ':' + minutes + ' ' + meridian);
    }
</script>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    // $("textarea").jqte();
        $("textarea").each(function(){
    CKEDITOR.replace(this);
});
</script>