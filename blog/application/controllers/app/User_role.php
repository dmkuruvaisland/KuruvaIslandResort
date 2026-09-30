<?php
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */

class User_role extends App_Controller{
	public function __construct () {
		parent::__construct();
		$this->load->model('user_role_m');
	}

	public function index() {
		$this->data['list_items']   = $this->user_role_m->get()->result_array();
		$this->data['page_title']   = 'User Role';
		$this->data['page_name']    = 'user_role/index';
		$this->load->view('app/index', $this->data);
	}

	public function add(){
		if ($this->input->post()){
			$data = [
				'title' => $this->input->post('title'),
				'remarks' => $this->input->post('remarks'),
				'created_by' => get_user_id(),
				'updated_by' => get_user_id(),
				'created_on' => date('Y-m-d H:i:s'),
				'updated_on' => date('Y-m-d H:i:s'),
				'deleted_on' => date('Y-m-d H:i:s'),
			];
			$this->user_role_m->insert($data);
			set_alert('message_success', 'User Role Added Successfully!');
		}
		redirect('app/user_role/index');
	}

	public function edit($item_id){
		if ($this->input->post()){
			$data = [
				'title' => $this->input->post('title'),
				'remarks' => $this->input->post('remarks'),
				'updated_by' => get_user_id(),
				'updated_on' => date('Y-m-d H:i:s'),
			];
			$this->user_role_m->update($data, ['id' => $item_id]);
			set_alert('message_success', 'User Role Updated Successfully!');
		}
		redirect('app/user_role/index');
	}

	public function delete($item_id){
		if ($item_id > 0){
			$this->user_role_m->delete(['id' => $item_id]);
			set_alert('message_success', 'User Role Deleted Successfully!');
		}
		redirect('app/user_role/index');
	}
}
