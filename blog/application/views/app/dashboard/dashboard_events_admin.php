<?php
    if (is_super_admin() && isset($events)) {
        ?>
        <div class="p-2">
            <div class="bg-white  shadow-pro text-center">
                <?php
                    foreach ($events as $event) {
                        ?>
                        <div class="d-inline-block p-2">
                            <a class="btn btn-outline-info" href="<?=base_url('app/events/overview/'.$event['id'].'/')?>">
                                <?=$event['title']?>
                            </a>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
        <?php
    }
?>