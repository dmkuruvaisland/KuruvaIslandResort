<?php base_path(); ?>
<?php
if(isset($popup_data)){
    foreach($popup_data as $i)
    {
    ?>
    <div style="padding-bottom: 10px;">
        <a href="<?php rootURL("admin/homepage_popup/"); ?>" class="btn btn-secondary btn-mini pull-left btn-flat">
            <i class="fas fa-arrow-circle-left"></i> Go Back
        </a>
    </div>
    
    <div class="card card-dark">
        <div class="card-header">
            <div class="row">
                <div class="form_title_custom">Page - <?=strtoupper(get_phrase('homepage_popup'))?></div>
            </div>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="<?=base_url('admin/homepage_popup/edit_dynamic/'.$i['id'].'/')?>" method="post" enctype="multipart/form-data">
                <div class="card-body" style="padding-top: 0px;">
                    <div class="row col-12">
                        
                
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Link</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="link" name="link" placeholder="Link">
                            <input hidden type="text" class="form-control form-control-sm" id="did" name="did" value="<?=$i['id'];?>">
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
                                <small><i class="fa fa-check"></i></small> Update
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
                <th>Imag</th>
                <th>Link</th>
                <!--<th>ON/OFF</th>-->
            </tr>
            </thead>
            <tbody>
            <?php
            $cnt=1;
                foreach ($popup_data as $i){
                    ?>
                    <tr>
                        <td><img style="height:100px;" src="<?=base_url().$i['image'];?>"></td>
                        <td><?=$i['link'];?></td>
                        <!--<td>-->
                            <!-- Default checked -->
                        <!--    <div class="custom-control custom-switch">-->
                        <!--      <input type="checkbox" class="custom-control-input" name="customSwitch1" id="customSwitch1" >-->
                        <!--      <label class="custom-control-label" for="customSwitch1"></label>-->
                        <!--    </div>-->
                        <!--</td>-->
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
    
    <!----------------------------------------------------------------------------------------------------------------->
    
    
  
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
