<?php
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */

class Login extends Frontend_Controller{
	public function __construct () {
		parent::__construct();
		$this->load->model('users_m');
		$this->load->model('login_m');

	}

	/*
	 * Login
	 */
	public function index() {
	    redirect(base_url());
        if (is_logged_in()){
            redirect('app/dashboard/index');
        }
		if ($this->input->post()){
			$post_data = $this->input->post();
			$response =	$this->login_m->login($post_data);
			if ($response['status']){
				$this->session->set_userdata('user_id', $response['message']['id']);
				$this->session->set_userdata('user_name', $response['message']['name']);
				$this->session->set_userdata('role_id', $response['message']['role_id']);
				$this->session->set_userdata('role_title', $this->db->get_where('user_roles', ['id' => $response['message']['role_id']])->row())->title;
				$this->session->set_userdata('branch_id', $response['message']['branch_id'] ?? 0);
				
				$this->session->set_userdata('expire_on', date('2030-12-31 12:10:12'));

				check_login();

				set_alert('message_success', "<b>Welcome back {$response['message']['name']}!</b>,<br> Successfully logged in!");

				//check force password change
				if($response['message']['last_password_date'] < date('Y-m-d')){
					$this->session->set_userdata('ask_password_change', 1);
				}else{
					$this->session->set_userdata('ask_password_change', 0);
				}

				redirect(base_url('app/dashboard/index'));
			}else{
				$this->data['error']        = $response['message'];
				$this->data['show_captcha'] = $response['show_captcha'];
				$this->data['captcha']      = $response['captcha'];
			}
		}
		$this->data['page_title']   = 'Login';
		$this->data['page_name']    = 'login/index';
		$this->load->view('public/index', $this->data);
	}

	/*
	 * Logout
	 */
	public function logout(){
		logout();
	}
}
