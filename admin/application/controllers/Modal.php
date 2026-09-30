<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 *  @author   : Creativeitem
 *  date    : 14 september, 2017
 *  Ekattor School Management System Pro
 *  http://codecanyon.net/user/Creativeitem
 *  http://support.creativeitem.com
 */
class Modal extends CI_Controller {


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
    }

    function popup($page_name = '' , $param1 = '' , $param2 = '', $param3 = '', $param4 = '', $param5 = '', $param6 = '')
    {
        $logged_in_user_role 		        =   'admin';
        $page_data['params']['param1']		=	$param1;
        $page_data['params']['param2']		=	$param2;
        $page_data['params']['param3']		=	$param3;
        $page_data['params']['param4']		=	$param4;
        $page_data['params']['param5']		=	$param5;
        $page_data['params']['param6']		=	$param6;
        $this->load->view( $logged_in_user_role.'/'.$page_name.'.php' ,$page_data);
    }
}
