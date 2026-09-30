<div style="padding-bottom: 10px;">
    <a href="<?php rootURL("admin/rooms/"); ?>" class="btn btn-secondary btn-mini pull-left btn-flat">
        <i class="fas fa-arrow-circle-left"></i> Go Back
    </a>
    
     <a href="<?php
    rootURL("admin/rooms_photo/add_form/");
    ?>" class="btn btn-secondary btn-mini float-right btn-flat">
        <small><i class="fas fa-plus"></i></small> Add new
    </a>
</div>




    <!-- /.card-header -->
    <div class="card-body" style="background-color:white;">
        <div><?//=json_encode($list_all);?></div>
       <div class="row">
            <?php
            $cnt=1;
            if (isset($all_rooms))
            {
                foreach ($all_rooms as $i){
                    ?>
                        <div style="background-color:#e6e8eb; width:100%; padding:10px; margin-bottom:10px; margin-top:10px;">
                            <font><?=$i['title'];?></font>
                        </div>
                        
                            <?php
                        foreach ($list_all as $item){
                            if($i['id'] == $item['room_id'])
                            {
                            ?>
                            
                            <div class="col-md-2">
                            <div style="position:relative; font-size:30px;">
                               
                                <img style="width:100%;" src="<?=base_url($item['image']);?>">
                                
                                <a href="<?=base_url("admin/rooms_photo/delete/{$item['id']}/"); ?>" onclick="return confirm('Are you sure you want to delete')">
                                      <i style="position:absolute; right:16px; bottom:8px; color:red;" class="fa fa-minus-circle" aria-hidden="true"></i>
                                </a>
                                
                            </div>
                           </div>
                           
                            <?php
                            }
                        }
                        ?>
                        
                    <?php
                }
                $cnt++;
            }
            ?>
            </div>
    </div>
