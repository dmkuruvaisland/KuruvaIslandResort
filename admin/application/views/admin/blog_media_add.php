<?php base_path(); ?>
<div style="padding-bottom: 10px;">
    <a href="<?php rootURL("admin/blog/"); ?>" class="btn btn-secondary btn-mini pull-left btn-flat">
        <i class="fas fa-arrow-circle-left"></i> Go Back
    </a>
</div>
<div class="card card-dark">
    <div class="card-header">
        <div class="row">
            <div class="form_title_custom">Add New Media</div>
        </div>
    </div>
    
    <div class="card-body">
        <form class="form-horizontal" action="<?=base_url('admin/blog_media/add/')?>" method="post" enctype="multipart/form-data">
            <div class="card-body" style="padding-top: 0px;">
                <div class="row col-12">
                   
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Select Blog</label>
                        <div class="col-sm-4">
                            <select type="text" class="form-control form-control-sm" id="blog" name="blog">
                                <?php
                                foreach($blogs as $i)
                                {
                                ?>
                                <option value="<?=$i['id'];?>"><?=$i['title'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Select type</label>
                        <div class="col-sm-4">
                            <select type="text" class="form-control form-control-sm" id="type" name="type" onchange="divshow(this.val)">
                                <option value="0">Select Type</option>
                                <option value="image">Image</option>
                                <option value="video">Video</option>
                            </select>
                        </div>
                    </div>
                    
                   
                    <div id="img_file_div" class="form-group col-12 row">
                        <label for="image" class="col-sm-2 col-form-label text-muted">Image</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control form-control-sm" id="image" name="image" onchange="readURL(this);">
                        </div>
                    </div>
                    
                    <div id="img_file_vid_div"  class="form-group col-12 row">
                        <label for="image" class="col-sm-2 col-form-label text-muted">Video Url</label>
                        <div class="col-sm-4">
                             <input type="text" class="form-control form-control-sm" id="video" name="video" placeholder="Video Url">
                        </div>
                    </div>
                    
                    <!--<div id="img_file_div" class="form-group col-12 row">-->
                    <!--    <label for="image" class="col-sm-2 col-form-label text-muted">Image</label>-->
                    <!--    <div class="col-sm-4">-->
                    <!--        <input type="file" class="form-control form-control-sm" id="image" name="image" onchange="readURL(this);">-->
                    <!--    </div>-->
                    <!--</div>-->
                    
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
    $("#img_file_div").hide();
    $("#img_file_vid_div").hide();
    
    $(document).ready(function(){
        $("#type").change(function(){
            var type = $("#type").val();        
            if(type == "image"){
                $("#img_file_div").show();
                $("#img_file_vid_div").hide();
            } else if(type == "video") {
                $("#img_file_div").hide();
                $("#img_file_vid_div").show();
            }else{
                $("#img_file_div").hide();
                $("#img_file_vid_div").hide();
            }
            
        });
    });

    
    // function divshow(){
    //     var aa = document.getElementById("type").value;
    //     // alert(aa);
    //     if(aa == "image")
    //     {
    //         document.getElementById("img_file_vid_div").style.display = "none";
    //         document.getElementById("img_file_div").style.display = "inline";
    //         document.getElementById("img_show_div").style.display = "inline";
    //     }
    //     else
    //     {
    //         document.getElementById("img_file_vid_div").style.display = "inline";
    //         document.getElementById("img_file_div").style.display = "none";
    //         document.getElementById("img_show_div").style.display = "none";
    //     }
    // }
</script>
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
