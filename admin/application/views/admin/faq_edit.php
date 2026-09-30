<?php base_path(); ?>
<?php
if(isset($edit_data)){
    foreach($edit_data as $i)
    {
    ?>
    <div style="padding-bottom: 10px;">
        <a href="<?php rootURL("admin/faq/"); ?>" class="btn btn-secondary btn-mini pull-left btn-flat">
            <i class="fas fa-arrow-circle-left"></i> Go Back
        </a>
    </div>
    <div class="card card-dark">
        <div class="card-header">
            <div class="row">
                <div class="form_title_custom">EDIT - <?=strtoupper(get_phrase('faq'))?></div>
            </div>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="<?=base_url('admin/faq/edit/'.$i['id'].'/')?>" method="post" enctype="multipart/form-data">
                <div class="card-body" style="padding-top: 0px;">
                    <div class="row col-12">
                    <div class="form-group col-12 row">
                        <label for="title" class="col-sm-2 col-form-label text-muted">Question</label>
                        <div class="col-sm-10">
                            <textarea rows="5" class="form-control form-control-sm" id="title" name="title" required placeholder="Title"><?=$i['question'];?></textarea>
                        </div>
                    </div>
                    <div class="form-group col-12 row">
                        <label for="description" class="col-sm-2 col-form-label text-muted">Answer</label>
                        <div class="col-sm-10">
                            <textarea rows="10" class="form-control form-control-sm" id="description" name="description" required placeholder="Description"><?=$i['answer'];?></textarea>
                          <input type="text" id="idd" name="idd" value="<?=$i['id'];?>" hidden>
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
