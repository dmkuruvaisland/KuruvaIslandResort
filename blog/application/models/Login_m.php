<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */

class Login_m extends MY_Model
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
	function __construct() {
		parent::__construct();

	}

	public function login($data): array {
        // H3 FIX: replaced broken sha1() with password_verify() + bcrypt
        // Legacy sha1 hashes are auto-migrated to bcrypt on successful login.
        $result = $this->db->get_where('admin', ['username' => $data['username']]);

        // Early exit if user not found — proceed to captcha/attempt logic below
        if ($result->num_rows() > 0) {
            $row = $result->row();
            $storedHash = $row->password;
            $inputPass  = $data['password'];

            // Check if stored hash is a legacy sha1 (exactly 40 hex chars)
            $isSha1 = (bool) preg_match('/^[0-9a-f]{40}$/i', $storedHash);

            $passwordValid = false;
            if ($isSha1) {
                // Legacy path: compare against sha1
                $passwordValid = hash_equals($storedHash, sha1($inputPass));
                if ($passwordValid) {
                    // Auto-migrate to bcrypt
                    $bcryptHash = password_hash($inputPass, PASSWORD_BCRYPT);
                    $this->db->where('id', $row->id);
                    $this->db->update('admin', ['password' => $bcryptHash]);
                }
            } else {
                // Modern path: bcrypt via password_verify
                $passwordValid = password_verify($inputPass, $storedHash);
            }

            if (!$passwordValid) {
                // Reset $result to appear as zero rows so the logic below returns "Invalid"
                $result = $this->db->get_where('admin', ['username' => $data['username'], 'id' => -1]);
            }
        }
		if(!validate_captcha($data)){
			return ['status' => false, 'message' => 'Captcha verification failed!', 'show_captcha' => true, 'captcha' => generate_captcha()];
		}else{
			if(validate_login_attempt()){
				if ($result->num_rows() > 0) {
					reset_login_attempt();
					return ['status' => true, 'message' => $result->row_array(), 'show_captcha' => false];
				} else {
					return ['status' => false, 'message' => 'Invalid login credentials!', 'show_captcha' => false];
				}
			}else{
				return ['status' => false, 'message' => 'Too many attempts,<br> complete captcha to continue!', 'show_captcha' => true, 'captcha' => generate_captcha()];
			}
		}
	}



}
