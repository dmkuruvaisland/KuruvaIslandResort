<?php
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */

defined('BASEPATH') OR exit('No direct script access allowed');

if (! function_exists('get_settings')) {
	function get_settings($key = '') {
		$CI	=&	get_instance();
		$CI->load->database();
		$CI->db->where('key', $key);
		return $CI->db->get('settings')->row('value');
	}
}

if (!function_exists('set_alert')){
	function set_alert($type, $message){
		$CI = & get_instance();
		$CI->session->set_flashdata('flash_type', $type);
		$CI->session->set_flashdata('flash_message', ucfirst($message));
	}
}

/**
 * REMOVE EXCEL ICON
 */
if (! function_exists('remove_excel_icon')) {
	function remove_excel_icon($string) {
		$string = str_replace("_x000d_", "<br>", $string);
		$string = str_replace("_x000D_", "<br>", $string);
		return $string;
	}
}


if (!function_exists('show_alert')){
	function show_alert(){
		$CI = & get_instance();
		if (isset($_SESSION['flash_message']) && isset($_SESSION['flash_type'])){
			$THE_MESSAGE = $CI->session->flashdata('flash_message');
			$THE_TYPE = $CI->session->flashdata('flash_type');
			echo "setTimeout( function(){";
			switch ($THE_TYPE){
				case 'message_success':
					echo "toastr.success('{$THE_MESSAGE}')";
					break;
				case 'message_error':
					echo "toastr.error('{$THE_MESSAGE}')";
					break;
				case 'message_warning':
					echo "toastr.warning('{$THE_MESSAGE}')";
					break;
				case 'message_info':
					echo "toastr.info('{$THE_MESSAGE}')";
					break;
				default:
					echo "toastr.info('{$THE_MESSAGE}')";
			}
			echo "}  , 300 );";
			unset($_SESSION['flash_message']);
			unset($_SESSION['flash_type']);
		}
	}

	// Send Email
	if (!function_exists('send_mail')){
		function send_mail($subject, $message, $email)
		{
			if(!empty($message) && !empty($subject) && !empty($email)){
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, "https://trogonmedia.com/send_email_api/iame_verification.php");
				curl_setopt($ch, CURLOPT_POST, 1);// set post data to true
				curl_setopt($ch, CURLOPT_POSTFIELDS,"message={$message}&subject={$subject}&email={$email}");   // post data
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$json = curl_exec($ch);
				curl_close ($ch);
				log_message('error', json_encode($json, JSON_PRETTY_PRINT));
			}
		}
	}
	
	
	
	if(!function_exists('get_institution_dividend')){
	    function get_institution_dividend($student_count)
		{
			if($student_count>=1 && $student_count<=99){
			    return 15;
			}else if($student_count>=100 && $student_count<=199){
			    return 16;
			}else if($student_count>=200 && $student_count<=299){
			    return 17;
			}else if($student_count>=300 && $student_count<=399){
			    return 18;
			}else if($student_count>=400 && $student_count<=499){
			    return 19;
			}else if($student_count>=500 && $student_count<=599){
			    return 20;
			}else if($student_count>=600 && $student_count<=699){
			    return 21;
			}else if($student_count>=700 && $student_count<=799){
			    return 22;
			}else if($student_count>=800 && $student_count<=899){
			    return 23;
			}else if($student_count>=900 && $student_count<=999){
			    return 24;
			}else if($student_count>=1000){
			    return 25;
			}
		}
	}
}
