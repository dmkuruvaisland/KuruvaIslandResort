<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */


if ( ! function_exists('get_user_role'))
{
	function get_user_role($user_id = '', $type = "") {
		$CI	=&	get_instance();
		$CI->load->database();
        $role_id	=	$CI->db->get_where('users' , array('id' => $user_id))->row()->role_id;
        if ($type == "user_role") {
            return	$CI->db->get_where('role' , array('id' => $role_id))->row()->role;
        }else {
            return $role_id;
        }
	}
}


if ( ! function_exists('is_user'))
{
	function is_user(): bool {
		return $_SESSION['user_login'] == true;
	}
}

if ( ! function_exists('get_user_id'))
{
	function get_user_id(): bool {
		return is_user() ? $_SESSION['logged_user_id'] : false;
	}
}




// ------------------------------------------------------------------------
/* End of file user_helper.php */
/* Location: ./system/helpers/user_helper.php */
