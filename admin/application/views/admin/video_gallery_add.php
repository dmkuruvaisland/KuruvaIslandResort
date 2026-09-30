<?php base_path(); ?>
<div style="padding-bottom: 10px;">
    <a href="<?php rootURL("admin/video_gallery/"); ?>" class="btn btn-secondary btn-mini pull-left btn-flat">
        <i class="fas fa-arrow-circle-left"></i> Go Back
    </a>
</div>
<div class="card card-dark">
    <div class="card-header">
        <div class="row">
            <div class="form_title_custom">Add New Video</div>
        </div>
    </div>
    
    <div class="card-body">
        <form class="form-horizontal" action="<?=base_url('admin/video_gallery/add/')?>" method="post" enctype="multipart/form-data">
            <div class="card-body" style="padding-top: 0px;">
                <div class="row col-12">
                 
                    
                   
                 
                    
                    <div id="img_file_vid_div"  class="form-group col-12 row">
                        <label for="image" class="col-sm-2 col-form-label text-muted">Youtube Video ID</label>
                        <div class="col-sm-4">
                             <input type="text" class="form-control form-control-sm" id="video" name="video" placeholder="Youtube video ID ex : 5E59UlVD4-8">
                        </div>
                    </div>
                    
                    <div id="img_file_div" class="form-group col-12 row">
                        <label for="image" class="col-sm-2 col-form-label text-muted">Thumbnail</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control form-control-sm" id="thumbnail" name="thumbnail" onchange="readURL(this);">
                        </div>
                    </div>
                    
                    <!--<div style="display:none;" id="img_file_vid_div" class="form-group col-12 row">-->
                    <!--    <label for="image" class="col-sm-2 col-form-label text-muted">Video Url</label>-->
                    <!--    <div class="col-sm-4">-->
                    <!--        <input type="text" class="form-control form-control-sm" id="video" name="video" placeholder="Video Url">-->
                    <!--    </div>-->
                    <!--</div>-->


                    <div class="col-12"  style="padding-right:20px;">
                        <button type="submit" name="add" value="Save" class="btn btn-primary float-right" style="float: right!important">
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
