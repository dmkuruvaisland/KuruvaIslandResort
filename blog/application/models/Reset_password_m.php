<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */

class Reset_password_m extends MY_Model
{
	/*
		| -----------------------------------------------------
		| PRODUCT NAME: 	ECOPEN
		| -----------------------------------------------------
		| AUTHOR:			TROGON MEDIA PVT LTD
		| -----------------------------------------------------
		| EMAIL:			mail@trogonmedia.com
		| -----------------------------------------------------
		| COPYRIGHT:		RESERVED BY TROGON MEDIA PVT LTD
		| -----------------------------------------------------
		| WEBSITE:			http://trogonmedia.com
		| -----------------------------------------------------
		*/
	protected string $_table_name = 'users';
	function __construct() {
		parent::__construct();
	}
	
    public function storeOTP($email, $otp) {
        $data = array(
            'otp' => $otp
        );
    
        $this->db->where('email', $email);
        $this->db->update('users', $data);
    }
    
    public function emailExists($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('users'); 
    
        if ($query->num_rows() > 0) {
            return true; 
        } else {
            return false; 
        }
    }

    
    public function checkOTP($email, $enteredOTP) {
        $this->db->where('email', $email);
        $this->db->where('otp', $enteredOTP);
        $query = $this->db->get('users'); 
    
        if ($query->num_rows() > 0) {
            
            // $this->db->where('email', $email);
            // $this->db->delete('reset_password_requests');
    
            return true; // OTP is correct
        } else {
            return false; 
        }
    }


}
