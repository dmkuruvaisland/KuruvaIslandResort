
<div style="padding-bottom: 10px;" class="clearfix">
 
     <a href="<?php
    rootURL("admin/package/add_form/");
    ?>" class="btn btn-secondary btn-mini float-right  btn-flat">
        <small><i class="fas fa-plus"></i></small> Add new
    </a>
</div>


    <!-- /.card-header -->
    <div class="card-body" style="background-color:white;">

           <div style="background-color:#e6e8eb; width:100%; padding:10px; margin-bottom:10px; margin-top:10px; text-align:center;">
                            <font>Packages</font>
                        </div>
                        
                        <div>
                         <table id="" class="table table-bordered table-striped" style="width:100%;">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Package name</th>
                                    <th>Yacht</th>
                                    <th>Price</th>
                                    <th>Duration</th>
                                    <th>Timing</th>
                                    <th>Capacity</th>
                                    <th>Remark</th>
                                    <th style="width: 150px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $cnt=1;
                            // echo json_encode($list_all);
                                if (isset($list_all)){
                                    foreach ($list_all as $item){
                                        ?>
                                        <tr>
                                            <td><?=$cnt;?></td>
                                            <td><?=$item['package_name'];?></td>
                                            <td style="text-align:center;">
                                                <img src="<?=base_url().$item['image'];?>" style="width:120px;">
                                                </br>
                                                <?=$item['y_name'];?>
                                            </td>
                                            <td><?=$item['price'];?></td>
                                            <td><?=$item['duration'];?></td>
                                            <td><?=$item['timing'];?></td>
                                            <td><?=$item['capacity'];?></td>
                                            <td><?=$item['remark'];?></td>
                                            <td>
                                                 <a href="<?=base_url("admin/package/edit_form/{$item['id']}/"); ?>" class="btn btn-info btn-sm">
                                                    <small><i class="fas fa-pencil-alt"></i></small> Edit
                                                </a>
                            
                                                <a href="<?=base_url("admin/package/delete/{$item['id']}/"); ?>"
                                                   onclick="return confirm('Are you sure you want to delete')" class="btn btn-danger btn-sm">
                                                    <small><i class="fas fa-trash"></i> Delete</small>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    $cnt++;
                                }
                                ?>
                    
                                </tbody>
                    
                            </table>
                        </div>
    </div>
