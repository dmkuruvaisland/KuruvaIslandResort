<?php base_path(); ?>
<?php
if(isset($edit_data)){
    foreach($edit_data as $i)
    {
    ?>
    <div style="padding-bottom: 10px;">
        <a href="<?php rootURL("admin/meta_data/"); ?>" class="btn btn-secondary btn-mini pull-left btn-flat">
            <i class="fas fa-arrow-circle-left"></i> Go Back
        </a>
    </div>
    
    <div class="card card-dark">
        <div class="card-header">
            <div class="row">
                <div class="form_title_custom">Page - <?=strtoupper(get_phrase('meta_data'))?></div>
            </div>
        </div>
        <div class="card-body">
            <?php $i['id'] = $i['id'] ?? '' ?>
            <form class="form-horizontal" action="<?=base_url('admin/meta_data/edit_dynamic/'.$i['id'].'/')?>" method="post" enctype="multipart/form-data">
                <div class="card-body" style="padding-top: 0px;">
                    <div class="row col-12">
                        
                      <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Select Page</label>
                        <div class="col-sm-7">
                            <select class="form-control form-control-sm" id="pageid" name="pageid">
                                <?php
                                 foreach ($dynamic_data as $i){
                                  ?>
                                  <option value="<?=$i['id'];?>"><?=$i['page'];?></option>
                                  <?php
                                 }
                                ?>
                            
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Title</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="title" name="title" placeholder="Meta title">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Description</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="description" name="description" placeholder="Meta description">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Keywords</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="keywords" name="keywords" placeholder="Meta Keywords">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Copyright</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="copyright" name="copyright" placeholder="Meta copyright">
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
                <th>Page</th>
                <th>Title</th>
                <th>Description</th>
                <th>Keywords</th>
                <th>Copyright</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $cnt=1;
                foreach ($dynamic_data as $i){
                    ?>
                    <tr>
                        <td><?=$i['page'];?></td>
                        <td><?=$i['title'];?></td>
                        <td><?=$i['description'];?></td>
                        <td><?=$i['keywords'];?></td>
                        <td><?=$i['copyright'];?></td>
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
    
    
    <div class="card card-dark">
        <div class="card-header">
            <div class="row">
                <div class="form_title_custom">Common - <?=strtoupper(get_phrase('meta_data'))?></div>
            </div>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="<?=base_url('admin/meta_data/edit/'.$i['id'].'/')?>" method="post" enctype="multipart/form-data">
                <div class="card-body" style="padding-top: 0px;">
                    <div class="row col-12">
                        
                      
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Title</label>
                        <div class="col-sm-7">
                            <input value="<?=$edit_data[0]['title'];?>" type="text" class="form-control form-control-sm" id="title" name="title" placeholder="Title">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Description</label>
                        <div class="col-sm-7">
                            <input value="<?=$edit_data[0]['description'];?>" type="text" class="form-control form-control-sm" id="description" name="description" placeholder="Description">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">Robots</label>
                        <div class="col-sm-7">
                            <input value="<?=$edit_data[0]['robots'];?>" type="text" class="form-control form-control-sm" id="robots" name="robots" placeholder="Robots">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">og:locale</label>
                        <div class="col-sm-7">
                            <input value="<?=$edit_data[0]['og_locale'];?>" type="text" class="form-control form-control-sm" id="og_locale" name="og_locale" placeholder="og:locale">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">og:type</label>
                        <div class="col-sm-7">
                            <input value="<?=$edit_data[0]['og_type'];?>" type="text" class="form-control form-control-sm" id="og_type" name="og_type" placeholder="og:type">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">og:title</label>
                        <div class="col-sm-7">
                            <input value="<?=$edit_data[0]['og_title'];?>" type="text" class="form-control form-control-sm" id="og_title" name="og_title" placeholder="og:title">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">og:description</label>
                        <div class="col-sm-7">
                            <input value="<?=$edit_data[0]['og_description'];?>" type="text" class="form-control form-control-sm" id="og_description" name="og_description" placeholder="og:description">
                        </div>
                    </div>
                    
                     <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">og:url</label>
                        <div class="col-sm-7">
                            <input value="<?=$edit_data[0]['og_url'];?>" type="text" class="form-control form-control-sm" id="og_url" name="og_url" placeholder="og:url">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">og:site_name</label>
                        <div class="col-sm-7">
                            <input value="<?=$edit_data[0]['og_site_name'];?>" type="text" class="form-control form-control-sm" id="og_site_name" name="og_site_name" placeholder="og:site_name">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">og:image</label>
                        <div class="col-sm-7">
                            <input value="<?=$edit_data[0]['og_image'];?>" type="text" class="form-control form-control-sm" id="og_image" name="og_image" placeholder="og:image">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">og:article_publisher</label>
                        <div class="col-sm-7">
                            <input value="<?=$edit_data[0]['article_publisher'];?>" type="text" class="form-control form-control-sm" id="article_publisher" name="article_publisher" placeholder="article_publisher">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">og:article_author</label>
                        <div class="col-sm-7">
                            <input value="<?=$edit_data[0]['article_author'];?>" type="text" class="form-control form-control-sm" id="article_author" name="article_author" placeholder="article_author">
                        </div>
                    </div>
                    
                    <div class="form-group col-12 row">
                        <label for="date" class="col-sm-2 col-form-label text-muted">og:article_modified_time</label>
                        <div class="col-sm-7">
                            <input value="<?=$edit_data[0]['article_modified_time'];?>" type="text" class="form-control form-control-sm" id="article_modified_time" name="article_modified_time" placeholder="article_modified_time">
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
