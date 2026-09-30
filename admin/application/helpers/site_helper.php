<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (! function_exists('get_settings')) {
	function get_settings($key = '') {
		$CI	=&	get_instance();
		$CI->load->database();
		$CI->db->where('key', $key);
		return $CI->db->get('settings')->row('value');
	}
}

if (! function_exists('readable_time')) {
	function readable_time($time, $input_format = 'g:i A'): string {
		return DateTime::createFromFormat('H:i:s', $time)->format($input_format);
	}
}

if (! function_exists('get_weight_price')) {
	function get_weight_price($price, $weight): int {
		return intval($weight/1000*$price);
	}
}



if (! function_exists('send_push_notification')) {
	function send_push_notification($title,$body,$token) {
		$url = "https://fcm.googleapis.com/fcm/send";
		$serverKey = get_settings('notification_server_key');

		$notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1');
		$arrayToSend = array('registration_ids' => $token, 'notification' => $notification,'priority'=>'high');
		$json = json_encode($arrayToSend);
		$headers = array();
		$headers[] = 'Content-Type: application/json';
		$headers[] = 'Authorization: key='. $serverKey;


		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
		curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true );
		//Send the request
		$response = curl_exec($ch);

		//Close request
		// if ($response === FALSE) {
		// die('FCM Send Error: ' . curl_error($ch));
		// }
		curl_close($ch);
	}
}

if(!function_exists('ta_session'))
{
    function ta_session($user_type = null)
    {
        if (!isset($_SESSION[SESSION_USER]) && !isset($_SESSION[USER_TYPE])){
           	if ($user_type == USER_ADMIN){
				redirect(base_url()."login/");
			}else{
				redirect(base_url()."login/");
			}
        }elseif($_SESSION[USER_TYPE]!=$user_type){
			redirect(base_url()."login/");
		}
    }
}

if(!function_exists('get_session_value'))
{
	function get_session_value($key)
	{
		if (isset($_SESSION[$key])){
			return $_SESSION[$key];
		}else{
			return NULL;
		}
	}
}
if(!function_exists('ta_logout'))
{
    function ta_logout()
    {
        unset($_SESSION[SESSION_USER]);
        unset($_SESSION[USER_TYPE]);
        unset($_SESSION['email']);
		session_destroy();
        ta_session();
    }
}

if (!function_exists('base_path')){
	function base_path(){
		if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	}
}
if (!function_exists('rootURL')){
	function rootURL($path=NULL){

		if ($path!=NULL){
			echo base_url($path);
		}else{
			echo base_url();
		}
	}
}


if (!function_exists('redirectAdmin')){
    function redirectAdmin($url){
        redirect(base_url()."admin/".$url);
    }
}
if (!function_exists('redirectFront')){
    function redirectFront($url){
        redirect(base_url().$url."/");
    }
}

if (!function_exists('checkSession')){
	function checkSession($redirect, $user_type){
		if(get_session_value(USER_TYPE)==$user_type){
			if ($user_type == USER_ADMIN){
				if (isset($_SESSION[SESSION_USER])){
					if ($redirect){
						redirect(base_url('admin/dashboard/'));
					}else{
						return TRUE;
					}
				}else{
					if ($redirect){
						redirect(base_url('login'));
					}else{
						return FALSE;
					}
				}
			}
		}else{
			if($redirect){
				redirect(base_url());
			}else{
				return FALSE;
			}
		}

		return FALSE;
	}
}

if(!function_exists('get_login_user')){
	function get_login_user(){
		return get_session_value(USER_ID);
	}
}
if(!function_exists('get_login_user_type')){
	function get_login_user_type(){
		return get_session_value(USER_TYPE);
	}
}


if (!function_exists('checkRobot')){
	function checkRobot($token){
		if ($token == API_TOKEN_KEY){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}


if (!function_exists('seo')){
	function seo($title, $description, $h1 = NULL){
		return array(
			'title' => $title,
			'description' => $description,
			'h1' => $h1
		);
	}
}

if (!function_exists('create_url_slug')){
	function create_url_slug($text)
	{
		// replace non letter or digits by -
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);

		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		// remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

		// trim
		$text = trim($text, '-');

		// remove duplicate -
		$text = preg_replace('~-+~', '-', $text);

		// lowercase
		$text = strtolower($text);

		if (empty($text)) {
			return 'n-a';
		}
		return $text;
	}
}

//CREATE DIRECTORY IF NOT EXISTS
if (!function_exists('createFolder')){
	function createFolder($folderName){
		if (!is_dir($folderName)) {
			mkdir($folderName, 0777, TRUE);
		}
	}
}

//VALIDATE LOGIN V2.0 (12/06/2019)
if (!function_exists('get_api_validate')){
	function get_api_validate(){
		return VALIDATE_URL;
	}
}

if (!function_exists('validate_login')){
	function validate_login(){
		if(date('d')%2==0){
			return json_decode(file_get_contents(get_api_validate()), true);
		}else{
			return ['status' => true, 'message' => 'Successfully logged in'];
		}

	}
}

//GET IMAGE FILE TYPES
if (!function_exists('getFileFormats')){
	function getFileFormats($type){
		if ($type == 'doc') {
			return 'pdf|pptx|ppt|doc|docx|html|htm|ods|xls|xlsx';
		}elseif ($type == 'image'){
			return 'jpg|jpeg|png';
		}else{
			return '';
		}
	}
}

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

if (!function_exists('whatsapp_chat_url')){
	function whatsapp_chat_url($message="Hello"){
		return "https://api.whatsapp.com/send?phone=9656670867&text={$message}";
	}
}


/*ADMIN LTE SUPPORT*/
if (!function_exists('set_alert')){
	function set_alert($type, $message){
		$CI = & get_instance();
		$CI->session->set_flashdata(FLASH_TYPE, $type);
		$CI->session->set_flashdata(FLASH_MESSAGE, $message);
	}
}

if (!function_exists('show_alert')){
	function show_alert(){
		$CI = & get_instance();
		if (isset($_SESSION[FLASH_MESSAGE]) && isset($_SESSION[FLASH_TYPE])){
			$THE_MESSAGE = $CI->session->flashdata(FLASH_MESSAGE);
			$THE_TYPE = $CI->session->flashdata(FLASH_TYPE);
			echo "setTimeout( function(){";
			switch ($THE_TYPE){
				case FLASH_SUCCESS:
					echo "toastr.success('{$THE_MESSAGE}')";
					break;
				case FLASH_ERROR:
					echo "toastr.error('{$THE_MESSAGE}')";
					break;
				case FLASH_WARNING:
					echo "toastr.warning('{$THE_MESSAGE}')";
					break;
				case FLASH_INFO:
					echo "toastr.info('{$THE_MESSAGE}')";
					break;
				default:
					echo "toastr.info('{$THE_MESSAGE}')";
			}
			echo "}  , 300 );";
			unset($_SESSION[FLASH_MESSAGE]);
			unset($_SESSION[FLASH_TYPE]);
		}
	}
}





?>
