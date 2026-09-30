<div class="p-2">
    <div class="register-box" style="min-width: 900px!important;margin-top: 40px;">
        <!-- /.login-logo -->
        <div class="card shadow-none shadow-pro">
            <div class="card-body login-card-body">
                <h2 class="text-center bg-primary p-2" style="font-size: 25px;font-weight: 600!important;">Registration Preview</h2>
                <div class="login-logo">
                    <div class="p-2">
                        <img src="<?=base_url('assets/logo/logo.png')?>" alt="" style="width:180px;height:auto">
                    </div>
                </div>
                <?php
                    if (isset($edit_data) && isset($classes_list)){
                        ?>
                        <div class="pt-4 pb-1">
                            <div class="p-1">
                                <h4 class="bg-primary-lighten p-3 text-primary" style="font-size: 20px;">
                                    Basic Details
                                    <a href="<?=base_url('register_school/step_1/')?>" class="btn btn-info btn-sm float-right"><i class="bi bi-pencil"></i> Edit details</a>
                                </h4>
                            </div>
                            <div class="p-1">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Country</th>
                                        <td><?=$edit_data['school']->country_title?></td>
                                    </tr>
                                    <tr>
                                        <th>State</th>
                                        <td><?=$edit_data['school']->state_title?></td>
                                    </tr>
                                    <tr>
                                        <th>District</th>
                                        <td><?=$edit_data['school']->district_title?></td>
                                    </tr>
                                    <tr>
                                        <th>School name</th>
                                        <td><?=$edit_data['school']->title?></td>
                                    </tr>
                                    <tr>
                                        <th>Category</th>
                                        <td><?=$edit_data['school']->category_title?></td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td><?=$edit_data['school']->phone?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?=$edit_data['school']->email?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="pt-4 pb-1">
                            <div class="p-1">
                                <h4 class="bg-primary-lighten p-3 text-primary" style="font-size: 20px;">
                                    Stream, Affiliation & Student Count Details
                                    <a href="<?=base_url('register_school/step_2/')?>" class="btn btn-info btn-sm float-right"><i class="bi bi-pencil"></i> Edit details</a>
                                </h4>
                            </div>
                            <div class="p-1">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Stream Followed by the School</th>
                                        <td><?=strtoupper($edit_data['school']->stream_followed)?></td>
                                    </tr>
                                    <tr>
                                        <th>Do you have affiliated?</th>
                                        <td><?=$edit_data['school']->is_affiliated == 1 ? 'YES' : 'NO'?></td>
                                    </tr>
                                    <tr>
                                        <th> School Affiliation No</th>
                                        <td><?=$edit_data['school']->affiliation_no?></td>
                                    </tr>
                                    <tr>
                                        <th>Grades up to which school is functioning</th>
                                        <td><?=$classes_list[$edit_data['school']->grade_upto] == 'LKG' || $classes_list[$edit_data['school']->grade_upto] == 'UKG' ? 'KG' : $classes_list[$edit_data['school']->grade_upto]?></td>
                                    </tr>
                                </table>
                                <br>
                                <table class="table table-bordered">
                                    <tr>
                                        <th colspan="16">
                                            <h6 class="card-subtitle p-2 text-muted text-center">STUDENT COUNT INFORMATION</h6>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Grade</th>
                                        <?php
                                            foreach ($classes_list as $classes_id => $classes){
                                                echo "<th>{$classes}</th>";
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th>Boys</th>
                                        <?php
                                        foreach ($classes_list as $classes_id => $classes){
                                            echo "<td>{$edit_data['student_count']['class_count']['boys'][$classes_id]}</td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th>Girls</th>
                                        <?php
                                        foreach ($classes_list as $classes_id => $classes){
                                            echo "<td>{$edit_data['student_count']['class_count']['girls'][$classes_id]}</td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <?php
                                        foreach ($classes_list as $classes_id => $classes){
                                            echo "<td>{$edit_data['student_count']['class_count']['total'][$classes_id]}</td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th>Total Students</th>
                                        <th colspan="15">
                                            <?=$edit_data['student_count']['total_count']?>
                                        </th>
                                    </tr>
                                </table>
                                <br>
                                <hr>
                                <br>
                                <table class="table table-bordered">
                                    <tr>
                                        <th colspan="2">
                                            <h6 class="card-subtitle p-2 text-muted text-center">STAFF COUNT INFORMATION</h6>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Staff Type</th>
                                        <th>Count</th>
                                    </tr>
                                    <tr>
                                        <th>Moral Education Teachers</th>
                                        <td><?=$edit_data['staff_count']['staffs'][1]?></td>
                                    </tr>
                                    <tr>
                                        <th>KG Teachers</th>
                                        <td><?=$edit_data['staff_count']['staffs'][2]?></td>
                                    </tr>
                                    <tr>
                                        <th>Teachers (Std)</th>
                                        <td><?=$edit_data['staff_count']['staffs'][3]?></td>
                                    </tr>
                                    <tr>
                                        <th>Non -Teaching Staffs</th>
                                        <td><?=$edit_data['staff_count']['staffs'][4]?></td>
                                    </tr>
                                    <tr>
                                        <th>Total Staff Count</th>
                                        <th colspan="15">
                                            <?=$edit_data['staff_count']['total_count'] ?? 0?>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="pt-4 pb-1">
                            <div class="p-1">
                                <h4 class="bg-primary-lighten p-3 text-primary" style="font-size: 20px;">
                                    Committee, Contact Details
                                    <a href="<?=base_url('register_school/step_3/')?>" class="btn btn-info btn-sm float-right"><i class="bi bi-pencil"></i> Edit details</a>
                                </h4>
                            </div>
                            <div class="p-1">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Name of the Trust/Society/Committee Running the school</th>
                                        <td colspan="3"><?=$edit_data['school']->committee_name?></td>
                                    </tr>
                                    <tr>
                                        <th>-</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                    </tr>
                                    <tr>
                                        <th>Chairman </th>
                                        <td><?=$edit_data['school_contacts'][1]['contact_name'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][1]['contact_phone'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][1]['contact_email'] ?? ''?></td>
                                    </tr>
                                    <tr>
                                        <th>General Secretary</th>
                                        <td><?=$edit_data['school_contacts'][2]['contact_name'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][2]['contact_phone'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][2]['contact_email'] ?? ''?></td>
                                    </tr>
                                    <tr>
                                        <th>Treasurer</th>
                                        <td><?=$edit_data['school_contacts'][3]['contact_name'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][3]['contact_phone'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][3]['contact_email'] ?? ''?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="4" style="text-align: center">CONTACT DETAILS</th>
                                    </tr>
                                    <tr>
                                        <th>Manager</th>
                                        <td><?=$edit_data['school_contacts'][4]['contact_name'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][4]['contact_phone'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][4]['contact_email'] ?? ''?></td>
                                    </tr>
                                    <tr>
                                        <th>Principal </th>
                                        <td><?=$edit_data['school_contacts'][5]['contact_name'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][5]['contact_phone'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][5]['contact_email'] ?? ''?></td>
                                    </tr>
                                    <tr>
                                        <th>Administrative Officer </th>
                                        <td><?=$edit_data['school_contacts'][6]['contact_name'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][6]['contact_phone'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][6]['contact_email'] ?? ''?></td>
                                    </tr>
                                    <tr>
                                        <th>IAME School Coordinator </th>
                                        <td><?=$edit_data['school_contacts'][7]['contact_name'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][7]['contact_phone'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][7]['contact_email'] ?? ''?></td>
                                    </tr>
                                    <tr>
                                        <th>ISET Coordinator</th>
                                        <td><?=$edit_data['school_contacts'][8]['contact_name'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][8]['contact_phone'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][8]['contact_email'] ?? ''?></td>
                                    </tr>
                                    <tr>
                                        <th>HOD – Moral Education</th>
                                        <td><?=$edit_data['school_contacts'][9]['contact_name'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][9]['contact_phone'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][9]['contact_email'] ?? ''?></td>
                                    </tr>
                                    <tr>
                                        <th>Physical Education Teacher</th>
                                        <td><?=$edit_data['school_contacts'][10]['contact_name'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][10]['contact_phone'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][10]['contact_email'] ?? ''?></td>
                                    </tr>
                                    <tr>
                                        <th>KG Head</th>
                                        <td><?=$edit_data['school_contacts'][11]['contact_name'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][11]['contact_phone'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][11]['contact_email'] ?? ''?></td>
                                    </tr>
                                    <tr>
                                        <th>Store Incharge</th>
                                        <td><?=$edit_data['school_contacts'][12]['contact_name'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][12]['contact_phone'] ?? ''?></td>
                                        <td><?=$edit_data['school_contacts'][12]['contact_email'] ?? ''?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <?php
                            if ($edit_data['school']->category_id != 3 && $edit_data['school']->category_id != 4) {
                                ?>
                                <div class="pt-4 pb-1">
                                    <div class="p-1">
                                        <h4 class="bg-primary-lighten p-3 text-primary" style="font-size: 20px;">
                                            Subject Teachers
                                            <a href="<?=base_url('register_school/step_4/')?>" class="btn btn-info btn-sm float-right"><i class="bi bi-pencil"></i> Edit details</a>
                                        </h4>
                                    </div>
                                    <div class="p-1">
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <th>-</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                            </tr>
                                            <tr>
                                                <th>English </th>
                                                <td><?=$edit_data['school_contacts'][13]['contact_name'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][13]['contact_phone'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][13]['contact_email'] ?? ''?></td>
                                            </tr>
                                            <tr>
                                                <th>Mathematics </th>
                                                <td><?=$edit_data['school_contacts'][14]['contact_name'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][14]['contact_phone'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][14]['contact_email'] ?? ''?></td>
                                            </tr>
                                            <tr>
                                                <th>EVS </th>
                                                <td><?=$edit_data['school_contacts'][15]['contact_name'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][15]['contact_phone'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][15]['contact_email'] ?? ''?></td>
                                            </tr>
                                            <tr>
                                                <th>IT </th>
                                                <td><?=$edit_data['school_contacts'][16]['contact_name'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][16]['contact_phone'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][16]['contact_email'] ?? ''?></td>
                                            </tr>
                                            <tr>
                                                <th>Malayalam  </th>
                                                <td><?=$edit_data['school_contacts'][17]['contact_name'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][17]['contact_phone'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][17]['contact_email'] ?? ''?></td>
                                            </tr>
                                            <tr>
                                                <th>Hindi  </th>
                                                <td><?=$edit_data['school_contacts'][18]['contact_name'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][18]['contact_phone'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][18]['contact_email'] ?? ''?></td>
                                            </tr>
                                            <tr>
                                                <th>Science  </th>
                                                <td><?=$edit_data['school_contacts'][19]['contact_name'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][19]['contact_phone'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][19]['contact_email'] ?? ''?></td>
                                            </tr>
                                            <tr>
                                                <th>SS </th>
                                                <td><?=$edit_data['school_contacts'][20]['contact_name'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][20]['contact_phone'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][20]['contact_email'] ?? ''?></td>
                                            </tr>
                                            <tr>
                                                <th>GK </th>
                                                <td><?=$edit_data['school_contacts'][21]['contact_name'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][21]['contact_phone'] ?? ''?></td>
                                                <td><?=$edit_data['school_contacts'][21]['contact_email'] ?? ''?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <?php
                            }
                    }
                ?>
                <hr>


                <div class="text-center mt-4 mb-4 pb-4">
                    <form action="" method="post" class="preview_form">
                        <input type="hidden" name="action_school_id" value="<?=$edit_data['school']->id ?? 0;?>">
                        <button type="submit" style="max-width: 200px;" class="btn btn-primary btn-block mx-auto" id="register_button" onclick="hide_submit()">
                            Complete Registration <i class="bi bi-arrow-right-circle"></i>
                        </button>

                        <button class="btn btn-primary btn-block mx-auto" id="register_button_loading" type="button" style="max-width: 200px;display: none" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                    </form>
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</div>

<script type="text/javascript">
    function hide_submit(){
        $('#register_button').hide();
        $('#register_button_loading').show();
    }
</script>