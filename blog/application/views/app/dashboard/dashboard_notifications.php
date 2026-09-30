<div class="card card-primary shadow-pro">
    <div class="card-header p-2" style="background-color: #d2f6ec; border:0!important;color: #2ab685; ">
        <h3 class="card-title" style="font-weight: 600!important;font-size: 15px;">
            <i class="bi bi-bell-fill"></i>
            NOTIFICATIONS
        </h3>
    </div>

    <div class="card-body p-2">
        <?php
        if (isset($notifications)){
            foreach($notifications as $notification){
                $color = get_notification_color($notification['notification_type']);
                ?>
                <div class="callout callout-<?=$color;?> shadow-sm p-3">
                    <h5><?=$notification['title']?></h5>
                    <p><?=$notification['content']?></p>

                    <a href="<?=$notification['button_link']?>" style="text-decoration:none" class="btn btn-outline-<?=$color;?> btn-sm btn-round btn-block">
                        <?=$notification['button_text']?>
                    </a>
                </div>
                <?php
            }
        }
        ?>
    </div>

</div>