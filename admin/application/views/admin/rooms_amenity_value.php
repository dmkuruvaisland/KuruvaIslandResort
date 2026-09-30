<?php base_path(); ?>
<div style="padding-bottom: 10px;">
    <a href="<?php rootURL("admin/rooms_amenity/"); ?>" class="btn btn-secondary btn-mini pull-left btn-flat">
        <i class="fas fa-arrow-circle-left"></i> Go Back
    </a>
</div>
<div class="card card-dark">
    <div class="card-header">
        <div class="row">
            <div class="form_title_custom">Add New value </div>
        </div>
    </div>
    
    <div class="card-body">
        <form class="form-horizontal" action="<?=base_url('admin/rooms_amenity_value/add/')?>" method="post" enctype="multipart/form-data">
            <div class="card-body" style="padding-top: 0px;">
                <div class="row col-12">
                   
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Amenity</label>
                        <div class="col-sm-8">
                            <textarea rows="1" type="text" class="form-control form-control-sm" id="value" name="value" placeholder="Amenity"></textarea>
                            <input type="text" hidden name="room_id" id="room_id" value="<?=$_GET['rid'];?>">
                            <input type="text" hidden name="amenity_id" id="amenity_id" value="<?=$_GET['amid'];?>">
                        </div>
                    </div>
                  


                    <div class="col-12"  style="padding-right:20px;">
                        <button type="submit" name="add" value="Save" class="btn btn-primary float-right" style="float: right!important">
                            <small><i class="fa fa-check"></i></small> Save
                        </button>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </form>
        
        
         <br><br>
            <div>
            <table id="" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $cnt=1;
                foreach ($list_all_a as $i){
                    ?>
                    <tr>
                        <td><?=$cnt;?></td>
                        <td><?=$i['value'];?></td>
                    </tr>
                    <?php
                $cnt++;
            }
            ?>

            </tbody>

        </table>
            </div>
            
        
        
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

<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script type="text/javascript">
        $("textarea").each(function(){
    CKEDITOR.replace(this);
});
</script>
