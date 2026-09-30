<style>.sidebar .nav-link:hover {
  background: #123630;
}.sidebar li i {
  font-size: 20px;
  margin-right: 20px;
  color: #F4B769;
  max-width: 50px;
}

.sidebar li h4 {
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 600;
}
a {
  color: #21433C;
  text-decoration: none;
  background-color: transparent;
}
.btn.btn-flat {
  border-radius: 0;
  border-width: 1px;
  box-shadow: none;
  background-color: transparent;
  color: #1f413b;
}

.btn.btn-flat:hover {
  border-radius: 0;
  border-width: 1px;
  box-shadow: none;
  background-color: #f4b769;
  color: #21433C;
}
.card-dark:not(.card-outline) .card-header {
  background-color: #0d342e;
}
.page-item.active .page-link {
  z-index: 1;
  color: #ffffff;
  background-color: #0D342E;
  border-color: #0D342E;
}
</style>
<div style="padding-bottom: 10px;" class="clearfix">

    <a  href="<?php rootURL("admin/blog/add_form/"); ?>" class="btn btn-secondary btn-mini float-right btn-flat">
        <small><i class="fas fa-plus"></i></small> Add new
    </a>
    
    <a style="margin-right:5px;" href="<?php rootURL("admin/blog_media/"); ?>" class="btn btn-secondary btn-mini float-right btn-flat">
       Show Media
    </a>
    
</div>

<div class="card card-dark row">
    <div class="card-header">
        <h3 class="card-title">Blog</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div><?//=json_encode($list_all);?></div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                 <th>Permalink</th>
                <th>Title</th>
                <th>Description</th>
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
                        <td><?=$item['perma'];?></td>
                        <td><?=$item['title'];?></td>
                        <td><?=$item['description'];?></td>
                        <td>
                            <a href="<?=base_url("admin/blog/edit_form/{$item['id']}/"); ?>" class="btn btn-info btn-sm">
                                <small><i class="fas fa-pencil-alt"></i></small> Edit
                            </a>
                            <a href="<?=base_url("admin/blog/delete/{$item['id']}/"); ?>"
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
    <!-- /.card-body -->
</div>
