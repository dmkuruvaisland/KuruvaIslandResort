<div style="padding-bottom: 10px;">
    <a href="<?php rootURL("admin/packages/"); ?>" class="btn btn-secondary btn-mini pull-left btn-flat">
        <i class="fas fa-arrow-circle-left"></i> Go Back
    </a>
    
     <a href="<?php
    rootURL("admin/package_facility/add_form/");
    ?>" class="btn btn-secondary btn-mini float-right btn-flat">
        <small><i class="fas fa-plus"></i></small> Add new
    </a>
</div>


    <!-- /.card-header -->
    <div class="card-body" style="background-color:white;">

            <?php
            $cnt=1;
            if (isset($all_package))
            {
                foreach ($all_package as $i){
                    ?>
                        <div style="background-color:#e6e8eb; width:100%; padding:10px; margin-bottom:10px; margin-top:10px;">
                            <font><?=$i['title'];?></font>
                        </div>
                        
                        <div>
                         <table id="" class="table table-bordered table-striped" style="width:100%;">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Facility</th>
                                    <th style="width: 150px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $cnt=1;
                                if (isset($list_all)){
                                    foreach ($list_all as $item){
                                        if($i['id'] == $item['package_id'])
                                        {
                                        ?>
                                        <tr>
                                            <td><?=$cnt;?></td>
                                            <td><?=$item['facility'];?></td>
                                            <td>
                                                <a href="<?=base_url("admin/package_facility/delete/{$item['id']}/"); ?>"
                                                   onclick="return confirm('Are you sure you want to delete')" class="btn btn-danger btn-sm">
                                                    <small><i class="fas fa-trash"></i> Delete</small>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        $cnt++;
                                        }
                                        
                                    }
                                    
                                }
                                ?>
                    
                                </tbody>
                    
                            </table>
                        </div>
                        
                    <?php
                }
                $cnt++;
            }
            ?>
    </div>
