<?php
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */

class Reset_password extends Frontend_Controller{
	public function __construct () {
		parent::__construct();
		$this->load->model('users_m');
		$this->load->model('reset_password_m');
	}

	
	public function index() {
        redirect('reset_password/step_1');
	}
	
	public function step_1() {
        $this->data['page_title'] = 'Reset Password';
        // log_message('error','email - '.print_r($_POST,true));
    
        if ($_POST) {
            
            $email = $this->input->post('email');
            // log_message('error','email - '.print_r($email,true));
            $email_exist = $this->reset_password_m->emailExists($email);
            // log_message('error','email exist - '.print_r($this->db->last_query(),true));
            if ($email_exist) {
    
                $otp = sprintf("%05d", mt_rand(1, 99999));
                // log_message('error','otp - '.print_r($otp,true));
    
                $this->reset_password_m->storeOTP($email, $otp);
    
                $this->sendOTPByEmail($email, $otp);
    
                
            } else {
                $this->data['error_message'] = 'Email not found in the database.';
            }
        }
    
        $this->data['page_name'] = 'reset_password/step1';
        $this->load->view('public/index', $this->data);
    }
    
    private function sendOTPByEmail($otp, $email){
    
        if (!empty($otp)) {
            $data = [
                'email' => $email,
                'otp' => $otp
            ];
    
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://trogonmedia.com/send_email_api/pinasexpress.php");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
    
            if ($response === false) {
                echo "Error occurred while sending the email.";
            } else {
                redirect('reset_password/step_2?email=' . urlencode($email));
            }
        } else {
            echo "Please fill in all the required fields.";
        }
    }



	
	public function step_2() {
        $this->data['page_title'] = 'Verify OTP';
    
        // Get the email from the query parameters
        $email = $this->input->get('email');
    
        if ($this->input->post('submit')) {
            $enteredOTP = $this->input->post('otp');
    
            if ($this->reset_password_m->checkOTP($email, $enteredOTP)) {
                redirect('reset_password/step_3');
            } else {
                // OTP is incorrect, show an error message
                $this->data['error_message'] = 'Invalid OTP. Please try again.';
            }
        }
    
        $this->data['page_name'] = 'reset_password/step2';
        $this->load->view('public/index', $this->data);
    }

	
	public function step_3() {
        
		$this->data['page_title']   = 'Reset Password';
		$this->data['page_name']    = 'reset_password/step3';
		$this->load->view('public/index', $this->data);
	}
	


    //  Registration Success Message
	public function reset_success(){
		if ($this->input->get('success')){
			$school_id = $this->input->get('success');
			$school_id = base64_decode($school_id);
			// get school details
		
			$this->data['page_title']   = 'Registration Success';
			$this->data['page_name']    = 'register_school/success';
			$this->load->view('public/index', $this->data);
		}else{
			redirect('login/index');
		}
	}


}
