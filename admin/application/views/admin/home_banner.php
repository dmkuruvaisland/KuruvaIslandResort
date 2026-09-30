<div style="padding-bottom: 10px;" class="clearfix">

    
    <a style="margin-right:5px;" href="<?php
    rootURL("admin/home_banner/add_form/");
    ?>" class="btn btn-secondary btn-mini float-right btn-flat">
        <small><i class="fas fa-plus"></i></small> Add new
    </a>
    
</div>






<div class="card card-dark row">
    <div class="card-header">
        <h3 class="card-title">Events</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div><?//=json_encode($list_all);?></div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Sub title</th>
                <th>Button Name</th>
                <th style="width: 150px;">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $cnt=1;
            if (isset($list_all)){
                foreach ($list_all as $item){
                    ?>
                    <tr>
                        <td><?=$cnt;?></td>
                        <td><img style="width:100px;" src="<?=base_url($item['image']);?>"></td>
                        <td><?=$item['title'];?></td>
                        <td><?=$item['sub_title'];?></td>
                        <td><?=$item['button_name'];?></td>
                        <td>
                            <a href="<?=base_url("admin/home_banner/edit_form/{$item['id']}"); ?>" class="btn btn-info btn-sm">
                                <small><i class="fas fa-pencil-alt"></i></small> Edit
                            </a>
                            <a href="<?=base_url("admin/home_banner/delete/{$item['id']}"); ?>"
                               onclick="return confirm('Are you sure you want to delete')" class="btn btn-danger btn-sm">
                                <small><i class="fas fa-trash"></i> Delete</small>
                            </a>
                        </td>
                    </tr>
                    <?php
                    $cnt++;
                }
                
            }
            ?>

            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>
