<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */

class Modal extends App_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		/*cache control*/
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        
        $this->load->model('country_m');
		$this->load->model('user_role_m');
		$this->load->model('users_m');
		$this->load->model('status_m');
		$this->load->model('blog_m');
		
	}

	function popup($page_name = 'get' , $param1 = '' , $param2 = '' , $param3 = '', $param4 = '', $param5 = '', $param6 = '', $param7 = '')
	{
		if ($page_name == 'get'){
			$page_name = $this->input->get('page_name');
		}
		$page_data['param1']		=	$param1;
		$page_data['param2']		=	$param2;
		$page_data['param3']		=	$param3;
		$page_data['param4']		=	$param4;
		$page_data['param5']		=	$param5;
		$page_data['param6']		=	$param6;
		$page_data['param7']		=	$param7;
		$this->load->view( 'app/'.$page_name.'.php' ,$page_data);
	}
}
