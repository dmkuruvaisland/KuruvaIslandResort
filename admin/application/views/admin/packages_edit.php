<?php base_path(); ?>
<?php
if(isset($edit_data)){
    foreach($edit_data as $i)
    {
    ?>
    <div style="padding-bottom: 10px;">
        <a href="<?php rootURL("admin/packages/"); ?>" class="btn btn-secondary btn-mini pull-left btn-flat">
            <i class="fas fa-arrow-circle-left"></i> Go Back
        </a>
    </div>
    <div class="card card-dark">
        <div class="card-header">
            <div class="row">
                <div class="form_title_custom">EDIT - <?=strtoupper(get_phrase('packages'))?></div>
            </div>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="<?=base_url('admin/packages/edit/'.$i['id'].'/')?>" method="post" enctype="multipart/form-data">
                <div class="card-body" style="padding-top: 0px;">
                    <div class="row col-12">
                        
                        <div class="form-group col-12 row">
                        <label for="title" class="col-sm-2 col-form-label text-muted">Perma link</label>
                        <div class="col-sm-10">
                            <input rows="1" class="form-control form-control-sm" id="perma" name="perma" required placeholder="Perma link" value="<?=$i['perma'];?>">
                        
                        </div>
                        </div>
                    
                    
                <div class="form-group col-12 row">
                        <label for="title" class="col-sm-2 col-form-label text-muted">Package Name</label>
                        <div class="col-sm-10">
                            <!--<textarea class="form-control form-control-sm" id="title" name="title" required placeholder="Package name"><?=$i['title'];?></textarea>-->
                              <input hidden id="idd" name="idd" value="<?=$i['id'];?>">
                             <input type="text" class="form-control form-control-sm" id="title" name="title" placeholder="Package name"  value="<?=$i['title'];?>" required>
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="description" class="col-sm-2 col-form-label text-muted">Content</label>
                        <div class="col-sm-9">
                            <textarea rows="5" class="form-control form-control-sm" id="content" name="content" required placeholder="Content"><?=$i['content'];?></textarea>
                            <!--<input type="text" class="form-control form-control-sm" id="description" name="description" placeholder="Description" required>-->
                        </div>
                    </div>
                    
                      <div class="form-group col-12 row">
                        <label for="" class="col-sm-2 col-form-label text-muted">Book now section</label>
                        <div class="col-sm-9">
                            <textarea rows="5" class="form-control form-control-sm" id="book_now_section" name="book_now_section" required placeholder="Book now section"><?=$i['book_now_section'];?></textarea>
                            <!--<input type="text" class="form-control form-control-sm" id="description" name="description" placeholder="Description" required>-->
                        </div>
                    </div>
                    
                    
                      <div style="border-bottom:1px solid grey; width:100%; margin-top:40px; margin-bottom:40px;"></div>
                    
                    
                    <div class="form-group col-12 row">
                        <label for="title" class="col-sm-2 col-form-label text-muted">Meta Title</label>
                        <div class="col-sm-10">
                            <!--<textarea rows="1" class="form-control form-control-sm" id="title" name="title" required placeholder="Room name"></textarea>-->
                            <input type="text" class="form-control form-control-sm" id="meta_title" name="meta_title" placeholder="Meta Title"  value="<?=$i['meta_title'];?>">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="title" class="col-sm-2 col-form-label text-muted">Meta Description</label>
                        <div class="col-sm-10">
                            <!--<textarea rows="1" class="form-control form-control-sm" id="title" name="title" required placeholder="Room name"></textarea>-->
                            <input type="text" class="form-control form-control-sm" id="meta_description" name="meta_description" placeholder="Meta Description"  value="<?=$i['meta_description'];?>">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="title" class="col-sm-2 col-form-label text-muted">Meta Keywords</label>
                        <div class="col-sm-10">
                            <!--<textarea rows="1" class="form-control form-control-sm" id="title" name="title" required placeholder="Room name"></textarea>-->
                            <input type="text" class="form-control form-control-sm" id="meta_keyword" name="meta_keyword" placeholder="Meta Keywords"  value="<?=$i['meta_keyword'];?>">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="title" class="col-sm-2 col-form-label text-muted">Meta CopyRight</label>
                        <div class="col-sm-10">
                            <!--<textarea rows="1" class="form-control form-control-sm" id="title" name="title" required placeholder="Room name"></textarea>-->
                            <input type="text" class="form-control form-control-sm" id="meta_copyright" name="meta_copyright" placeholder="Meta CopyRight"  value="<?=$i['meta_copyright'];?>">
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
  $("textarea").each(function(){
        CKEDITOR.replace(this);
  });
</script>