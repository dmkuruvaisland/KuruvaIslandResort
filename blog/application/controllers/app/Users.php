<?php
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */

class Users extends App_Controller{
    public function __construct () {
        parent::__construct();
        $this->load->model('users_m');
        $this->load->model('branch_m');
    }
    
    
    public function index() {


        $this->data['list_items'] = $this->users_m->get(['role_id' => '2'])->result_array();
        $this->data['branch']     = array_column($this->branch_m->get()->result_array(),'title','id');

        // $branch_title = $this->users_m->get(['id' => $branch_id])->row()->title;

		$this->data['page_title']   = 'Staff ';
		$this->data['id']    =  $users_id;
		$this->data['page_name']    = 'users/index';
		$this->load->view('app/index', $this->data);
	}

	public function add(){
		if ($this->input->post()){

            
            $name_duplication = $this->users_m->get(['users.name' => $this->input->post('name')])->num_rows();

            if($name_duplication>0){
                set_alert('message_error', 'This Staff Already Exist!');
            }else {
                // insert to users table
                $staff = [
                    'name' => $this->input->post('name'),
                    'created_by' => get_user_id(),
                    'updated_by' => get_user_id(),
                    'created_on' => date('Y-m-d H:i:s'),
                    'updated_on' => date('Y-m-d H:i:s'),
                ];
                 $this->users_m->insert($staff);
    
                set_alert('message_success', 'Staff Added Successfully!');
            }
		}
        redirect($_SERVER['HTTP_REFERER']);
	}

	public function edit($item_id){
		if ($this->input->post()){
		    
		    $staff = $this->users_m->get(['id' => $item_id])->row();
		    
		   // duplication of name checking
        //   $name_duplication = $this->users_m->get(['users.name' => $this->input->post('name')])->num_rows();
            
            // if($name_duplication>0){
            //     set_alert('message_error', 'This Staff Already Exist!');
            // }else {
                // update to users table
                $staff = [
                    'name' => $this->input->post('name'),
                    'updated_by' => get_user_id(),
                    'updated_on' => date('Y-m-d H:i:s'),
                ];
                
                $this->users_m->update($staff,['id' => $item_id]);
                set_alert('message_success', 'Staff Updated Successfully!');
            // }
		}
        redirect($_SERVER['HTTP_REFERER']);
	}

	public function delete($item_id){
		if ($item_id > 0){
			$this->users_m->delete(['id' => $item_id]);
			set_alert('message_success', 'Branch Deleted Successfully!');
		}
        redirect($_SERVER['HTTP_REFERER']);
	}


    // check if email is unique
    public function check_email_duplication() {
        $response = ['status' => 0, 'message' => 'Something went wrong!'];
        if($this->input->post('email')) {
            $user_id = $this->input->post('user_id');
            if(intval($user_id) > 0) {
                $user = $this->users_m->get(['id!=' => $user_id, 'email' => $this->input->post('email')]);
            } else {
                $user = $this->users_m->get(['email' => $this->input->post('email')]);
            }
            if ($user->num_rows() > 0){
                $response = ['status' => 0, 'message' => 'Email is already used!'];
            }else{
                $response = ['status' => 1, 'message' => 'Success'];
            }
        }
        echo json_encode($response);
    }

    // check if phone is unique
    public function check_phone_duplication() {
        $response = ['status' => 0, 'message' => 'Something went wrong!'];
        if($this->input->post('phone')) {
            $user_id = $this->input->post('user_id');
            if(intval($user_id) > 0) {
                $user = $this->users_m->get(['id!=' => $user_id, 'phone' => $this->input->post('phone')]);
            } else {
                $user = $this->users_m->get(['phone' => $this->input->post('phone')]);
            }
            if ($user->num_rows() > 0){
                $response = ['status' => 0, 'message' => 'Phone number is already used!'];
            }else{
                $response = ['status' => 1, 'message' => 'Success'];
            }
        }
        echo json_encode($response);
    }
}
