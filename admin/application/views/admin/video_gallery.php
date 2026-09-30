<div style="padding-bottom: 10px;">
    <a href="<?php rootURL("admin/video_gallery/"); ?>" class="btn btn-secondary btn-mini pull-left btn-flat">
        <i class="fas fa-arrow-circle-left"></i> Go Back
    </a>
    
    <a href="<?php
    rootURL("admin/video_gallery/add_form/");
    ?>" class="btn btn-secondary btn-mini float-right btn-flat">
        <small><i class="fas fa-plus"></i></small> Add new
    </a>
</div>




    <!-- /.card-header -->
    <div class="card-body" style="background-color:white;">
        <div><?//=json_encode($list_all);?></div>
        <div class="row">
          
                        <?php
                        foreach ($list_all as $item){

                            ?>
                            
                            <div class="col-md-2">
                                <div style="position:relative; font-size:20px; margin:10px;">
                                    
                                    <iframe width="170" height="100" src="https://www.youtube.com/embed/<?=$item['video'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    
                                        
                                    <a href="<?=base_url("admin/video_gallery/delete/{$item['id']}/"); ?>" onclick="return confirm('Are you sure you want to delete')">
                                          <i style="position:absolute; right:0px; bottom:8px; color:red;" class="fa fa-minus-circle" aria-hidden="true"></i>
                                    </a>
                                    
                                </div>
                            </div>
                           
                            <?php
                        }
                        ?>
            
        </div>
    </div>
