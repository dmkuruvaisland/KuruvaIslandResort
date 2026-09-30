<style>
    /* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #008CBA;
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  border-radius:10px;
}
</style>
<?php base_path(); ?>
<?php
if(isset($edit_data)){
    foreach($edit_data as $i)
    {
    ?>
    
<form class="form-horizontal" action="<?=base_url('admin/static_data/edit/'.$i['id'])?>" method="post" enctype="multipart/form-data">

    
    <div class="card card-dark">
        <div class="card-header">
            <div class="row">
                <div class="form_title_custom">Home page</div>
            </div>
        </div>
        <div class="card-body">
                <div class="card-body" style="padding-top: 0px;">
                    <div class="row col-12">
                        
                      
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Phone</label>
                        <div class="col-sm-7">
                            <textarea rows="1" type="text" class="form-control form-control-sm" id="phone" name="phone" placeholder="Phone"><?=$edit_data[0]['phone'];?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Email</label>
                        <div class="col-sm-7">
                            <textarea rows="1" type="text" class="form-control form-control-sm" id="email" name="email" placeholder="Email"><?=$edit_data[0]['email'];?></textarea>
                        </div>
                    </div>
                    
                     <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Address</label>
                        <div class="col-sm-7">
                            <textarea rows="1" type="text" class="form-control form-control-sm" id="address" name="address" placeholder="Address"><?=$edit_data[0]['address'];?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Time</label>
                        <div class="col-sm-7">
                            <textarea rows="1" type="text" class="form-control form-control-sm" id="time" name="time" placeholder="Time"><?=$edit_data[0]['time'];?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Map</label>
                        <div class="col-sm-7">
                           <textarea rows="1" type="text" class="form-control form-control-sm" id="map" name="map" placeholder="Map"><?=$edit_data[0]['map'];?></textarea>
                        </div>
                    </div>
                   

                </div>
                <!-- /.card-body -->
           
        </div>
        <!-- /.card-body -->
    </div>
</div>

  <div class="card card-dark">
        <div class="card-header">
            <div class="row">
                <div class="form_title_custom">Social media</div>
            </div>
        </div>
        <div class="card-body">
                <div class="card-body" style="padding-top: 0px;">
                    <div class="row col-12">
                        
                      
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Facebook</label>
                        <div class="col-sm-7">
                           <textarea rows="1" type="text" class="form-control form-control-sm" id="fb" name="fb" placeholder="Facebook"><?=$edit_data[0]['fb'];?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Twitter</label>
                        <div class="col-sm-7">
                            <textarea rows="1" type="text" class="form-control form-control-sm" id="twit" name="twit" placeholder="Twitter"><?=$edit_data[0]['twit'];?></textarea>
                        </div>
                    </div>
                    
                     <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Youtube</label>
                        <div class="col-sm-7">
                            <textarea rows="1" type="text" class="form-control form-control-sm" id="yout" name="yout" placeholder="YouTube"><?=$edit_data[0]['yout'];?></textarea>
                        </div>
                    </div>
                    
                     <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Instagram</label>
                        <div class="col-sm-7">
                            <textarea rows="1" type="text" class="form-control form-control-sm" id="insta" name="insta" placeholder="Instagram"><?=$edit_data[0]['insta'];?></textarea>
                        </div>
                    </div>
                   

                </div>
                <!-- /.card-body -->
           
        </div>
        <!-- /.card-body -->
    </div>
</div>


    <div style="padding: 30px!important;"></div>
    <?php
}
}
?>

<button class="open-button">Update</button>

 </form>


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