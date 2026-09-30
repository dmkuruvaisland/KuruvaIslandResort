<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Get User IP Address
 */
if (!function_exists('get_client_ip')){
	// Function to get the client IP address
	function get_client_ip() {
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}
}

/*
 * Validate Login Attempt
 */
if (!function_exists('validate_login_attempt')){
	function validate_login_attempt(): bool {
		if($_SESSION['captcha']['verify']){
			$_SESSION['ip_address'] = get_client_ip();
			$_SESSION['attempt_count'] = $_SESSION['attempt_count'] > 0 ? $_SESSION['attempt_count'] + 1 : 1;
			return true;
		}
		if($_SESSION['ip_address'] == get_client_ip()){
			$_SESSION['ip_address'] = get_client_ip();
			$_SESSION['attempt_count'] = $_SESSION['attempt_count'] > 0 ? $_SESSION['attempt_count'] + 1 : 1;
			if($_SESSION['attempt_count'] > 3){
				return false;
			}else{
				return true;
			}
		}else{
			$_SESSION['ip_address'] = get_client_ip();
			$_SESSION['attempt_count'] = $_SESSION['attempt_count'] > 0 ? $_SESSION['attempt_count'] + 1 : 1;
			return true;
		}

	}
}


/*
 * Reset Login Attempt
 */
if (!function_exists('reset_login_attempt')){
	function reset_login_attempt() {
		unset($_SESSION['ip_address']);
		unset($_SESSION['attempt_count']);
		unset($_SESSION['captcha']);
	}
}

/*
 * Generate Captcha
 */
if (!function_exists('generate_captcha')){
	function generate_captcha() {
		$_SESSION['captcha']['value1'] 	= rand(10, 90);
		$_SESSION['captcha']['value2'] 	= rand(10, 90);
		$_SESSION['captcha']['answer'] 	= $_SESSION['captcha']['value1'] + $_SESSION['captcha']['value2'];
		$_SESSION['captcha']['label'] 	= md5(sha1($_SESSION['captcha']['value1'] + $_SESSION['captcha']['value2']));
		return $_SESSION['captcha'];
	}
}

/*
 * Validate Captcha
 */
if (!function_exists('validate_captcha')){
	function validate_captcha($user_captcha): bool {
		$_SESSION['attempt_count'] = $_SESSION['attempt_count'] ?? 0;
		if($_SESSION['attempt_count'] > 3){
			$_SESSION['captcha']['verify'] = $_SESSION['captcha']['answer'] == $user_captcha[$_SESSION['captcha']['label']];
			$return = $_SESSION['captcha']['verify'];
			if($return){
				reset_login_attempt();
			}
		}else{
			$return = true;
		}
		return $return;
	}
}

/*
 * Get User Role
 */
if (! function_exists('get_user_role_title')) {
	function get_user_role_title() {
		return $_SESSION['role_title'] ?? '';
	}
}

/*
 * Is Logged In
 */
if (! function_exists('check_login')) {
	function check_login($redirect = true): bool {
		if (isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0) {
			return TRUE;
		}else{
            if ($redirect){
                set_alert('message_error', 'Please login to continue!');
                redirect(base_url('login/index'));
            }
		}
		return FALSE;
	}
}
if (! function_exists('is_logged_in')) {
	function is_logged_in(): bool {
		if (isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0) {
			return TRUE;
		}else{
            return FALSE;
        }
	}
}

/*
 * Log Out
 */
if (! function_exists('logout')) {
	function logout(): void {
		$CI	=&	get_instance();
		$CI->session->sess_destroy();
		redirect(base_url('login/index/'));
	}
}

/*
 * Get User ID
 */
if (! function_exists('get_user_id')) {
	function get_user_id() {
		return $_SESSION['user_id'];
	}
}

/*
 * Get User Role ID
 */
if (! function_exists('get_role_id')) {
	function get_role_id() {
		return $_SESSION['role_id'];
	}
}

/*
 * Get Branch ID
 */
if (! function_exists('get_branch_id')) {
	function get_branch_id() {
		return $_SESSION['branch_id'] ?? 0;
	}
}

/*
 * Get Branch NAME
 */
if (! function_exists('get_branch_name')) {
	function get_branch_name() {
		$branch_id = get_branch_id();

        $CI	=&	get_instance();
        $CI->load->database();
        $CI->db->where('id', $branch_id);
        return $CI->db->get('branch')->row('title') ?? '';
	}
}

/*
 * Is Super Admin
 */
if (! function_exists('is_super_admin')) {
	function is_super_admin(): bool {
		return get_role_id() == 1;
	}
}

/*
 * Is Branch Admin
 */
if (! function_exists('is_branch_admin')) {
	function is_branch_admin(): bool {
		return get_role_id() == 2;
	}
}

/*
 * Is Sales Person
 */
if (! function_exists('is_sales_person')) {
	function is_sales_person(): bool {
		return get_role_id() == 3;
	}
}

/*
 * Is Agent
 */
if (! function_exists('is_agent')) {
	function is_agent(): bool {
		return get_role_id() == 4;
	}
}



/*
 * Check role permission
 */
if (! function_exists('check_role_permission')) {
	function check_role_permission($permission = '') {
		$role_id = get_role_id();
	}
}

/*
 * Has Permission
 */
if (! function_exists('has_permission')) {
	function has_permission($permission = '') {
		// check if super admin
		if (is_super_admin()){
            return has_permission_super_admin($permission);
		}elseif (is_branch_admin()){
			return has_permission_branch_admin($permission);
		}elseif (is_sales_person()){
			return has_permission_sales_person($permission);
		}elseif (is_agent()){
			return has_permission_agent($permission);
		}

	}
}

if (! function_exists('has_permission_branch_admin')) {
	function has_permission_branch_admin($permission = '') {
		$permissions = [
			'dashboard/index',
			'shipment/index',
			'status_change/index',
			'customer/index'
		];
        return in_array($permission, $permissions);
	}
}

if (! function_exists('has_permission_sales_person')) {
	function has_permission_sales_person($permission = '') {
		$permissions = [
			'booking/index',
		];
        return in_array($permission, $permissions);
	}
}

if (! function_exists('has_permission_agent')) {
	function has_permission_agent($permission = '') {
		$permissions = [
			'shipment/index',
			'shipment/shipment_status_change',
			'shipment/shipment_status_change_by_tracking_id',
		];
        return in_array($permission, $permissions);
	}
}

if (! function_exists('has_permission_super_admin')) {
	function has_permission_super_admin($permission = '') {
		$permissions = [
			'student/index',
			'teacher/index',
			'school_events/events',
			'escorting_staff/index',
			'event_results/index',
            'iset_exam/index',
		];
        return !in_array($permission, $permissions);
	}
}

if (! function_exists('get_academic_year_id')) {
	function get_academic_year_id() {
		return $_SESSION['academic_year_id'] ?? get_settings('academic_year_id');
	}
}

// check website permission
if (! function_exists('check_website_permission')) {
	function check_website_permission($school_category, $redirect = true) {
        return true;
	}
}


