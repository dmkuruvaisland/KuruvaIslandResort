<div class="row text-center">
	<?php
        if (has_permission('branch_admin/index')){
            ?>
            
            <?php
        }



        if (has_permission('branch/index')){
            ?>
            
            <?php
        }
        
        if (has_permission('shipment/index')){
            ?>
            <!--<div class="col-12 col-md-2 col-lg-2 ">-->
            <!--    <a class="card shadow-pro ta_bg_color_1 header_box <?=$page_name == 'shipment/index' ? 'header_box_active' : ''?>" href="<?=base_url('app/shipment/index')?>">-->
            <!--        <div class="header_box_title">-->
            <!--            <i class="fas fa-ship"></i> SHIPMENT-->
            <!--        </div>-->
            <!--    </a>-->
            <!--</div>-->
            <?php
        }
        
        // if (has_permission('shipment_category/index')){
            ?>
            <!--<div class="col-12 col-md-2 col-lg-2">-->
            <!--    <a class="card shadow-pro ta_bg_color_1 header_box <?=$page_name == 'shipment_category/index' ? 'header_box_active' : ''?>" href="<?=base_url('app/shipment_category/index')?>">-->
            <!--        <div class="header_box_title">-->
            <!--            <i class="fas fa-ship"></i> SHIPMENT CATEGORY-->
            <!--        </div>-->
            <!--    </a>-->
            <!--</div>-->
            <?php
        // }

        // if (has_permission('programs/index')){
            ?>
            <!--<div class="col-12 col-md-2 col-lg-2">-->
            <!--    <a class="card shadow-pro ta_bg_color_6 header_box <?=$page_name == 'programs/index' ? 'header_box_active' : ''?>" href="<?=base_url('app/programs/index')?>">-->
            <!--        <div class="header_box_title">-->
            <!--            <i class="bi bi-list-stars"></i> PROGRAMS-->
            <!--        </div>-->
            <!--    </a>-->
            <!--</div>-->
            <?php
        // }

    ?>

</div>
