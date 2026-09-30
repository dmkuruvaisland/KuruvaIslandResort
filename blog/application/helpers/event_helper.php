<?php
if (!function_exists('is_event_registration_open')){
    function is_event_registration_open($reg_status, $reg_start_date, $reg_end_date): string {

        $school_id = get_school_id();
        if ($school_id == 1){
            return true;
        }

        $date_today = date('Y-m-d');
//        if ($reg_status == 1){
//            return true;
//        }else{
//            return false;
//        }
        if ($reg_start_date <= $date_today && $reg_end_date >= $date_today && $reg_status == 1){
            return true;
        }else{
            return false;
        }
    }
}


if (!function_exists('get_category_by_dob')){
    function get_category_by_dob($dob, $gender) {
        // convert dob to DateTime object
        $dob = DateTime::createFromFormat('Y-m-d', $dob);

        // define the category limits
        $under12Start = DateTime::createFromFormat('Y-m-d', '2012-01-01');
        $under14Start = DateTime::createFromFormat('Y-m-d', '2010-01-01');
        $under17Start = DateTime::createFromFormat('Y-m-d', '2007-01-01');

        // check dob against the category limits
        if ($gender == 'male'){
            if ($dob >= $under12Start) {
                return 'Under 12 Boys';
            } elseif ($dob >= $under14Start) {
                return 'Under 14 Boys';
            } elseif ($dob >= $under17Start) {
                return 'Under 17 Boys';
            } else {
                return '-';
            }
        }elseif ($gender == 'female'){
            if ($dob >= $under12Start) {
                return 'Under 12 Girls';
            } elseif ($dob >= $under14Start) {
                return 'Under 14 Girls';
            } elseif ($dob >= $under17Start) {
                return 'Under 17 Girls';
            } else {
                return '-';
            }
        }else{
            return '-';
        }

    }
}