<?php
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */

class Country extends App_Controller{
	public function __construct () {
		parent::__construct();
		$this->load->model('country_m');
	}

	public function index() {
		$this->data['list_items']   = $this->country_m->get()->result_array();
		$this->data['page_title']   = 'Country';
		$this->data['page_name']    = 'country/index';
		$this->load->view('app/index', $this->data);
	}

	public function add(){
		if ($this->input->post()){
			$data = [
				'title' => $this->input->post('title'),
				'created_by' => get_user_id(),
				'updated_by' => get_user_id(),
				'created_on' => date('Y-m-d H:i:s'),
				'updated_on' => date('Y-m-d H:i:s'),
			];
			$this->country_m->insert($data);
			set_alert('message_success', 'Country Added Successfully!');
		}
		redirect('app/country/index');
	}

	public function edit($item_id){
		if ($this->input->post()){
			$data = [
				'title' => $this->input->post('title'),
				'updated_by' => get_user_id(),
				'updated_on' => date('Y-m-d H:i:s'),
			];
			$this->country_m->update($data, ['id' => $item_id]);
			set_alert('message_success', 'Country Updated Successfully!');
		}
		redirect('app/country/index');
	}

	public function delete($item_id){
		if ($item_id > 0){
			$this->country_m->delete(['id' => $item_id]);
			set_alert('message_success', 'Country Deleted Successfully!');
		}
		redirect('app/country/index');
	}
}
