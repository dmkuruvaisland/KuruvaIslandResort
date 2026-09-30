<div class="card shadow-pro" style="background-color: rgba(245,241,241,0.55)">
    <div class="card-header p-2" style="background-color: #f0e3f8; border:0!important;color: #c24ae3; ">
        <h3 class="card-title" style="font-weight: 600!important;font-size: 15px;">
            <i class="bi bi-calendar-event-fill"></i>
            EVENTS REGISTRATIONS
        </h3>
    </div>
    <div class="card-body p-0">
        <?php
        if (isset($events)) {
            foreach ($events as $key => $item) {
                ?>
                <div style="padding: 10px!important; padding-bottom: 5px!important;">
                    <div class="shadow-sm bg-white">
                        <div class="pb-1">
                            <h3 class="bg-primary-lighten d-block w-100 p-2" style="font-size: 18px;"><?= $item['title']?></h3>
                        </div>
                        <div class="p-1 pb-2">
                            <span class="text-info"><b>Event date:</b></span> <?= date('d-M-Y', strtotime($item['event_start_date'])) ?>
                        </div>
                        <div class="p-2" style="background-color: rgba(168,189,218,0.2)">
                            <div class="pb-2">
                                Registration starts on: <b><?= date('d-M-Y', strtotime($item['registration_start_date'])) ?></b>
                            </div>
                            <div class="">
                                Registration closes on: <b><?= date('d-M-Y', strtotime($item['registration_end_date'])) ?></b>
                            </div>
                        </div>
                        <div class="p-3 pt-0" style="text-align: right">
                            <?php
                            if (is_event_registration_open($item['registration_status'], $item['registration_start_date'], $item['registration_end_date'])){
                                ?>
                                <a href="<?=base_url("app/school_events/events_registration/{$item['id']}")?>" class="btn btn-info" >
                                    Register for Event &nbsp;<i class="bi bi-arrow-right-circle"></i>
                                </a>
                                <?php
                            }else{
                                echo "<div class='bg-warning-lighten p-2 text-danger text-center'>Registration is not active.</div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>