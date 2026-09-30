<?php
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 * FILE PATH: application/controllers/app/Dashboard.php
 */

class Menu extends App_Controller{
	public function __construct () {
		parent::__construct();
		$this->load->model('menu_m');
	}

	public function index() {
		$this->data['list_items']   = $this->menu_m->get()->result_array();
		$this->data['page_title']   = 'Menu';
		$this->data['page_name']    = 'menu/index';
		$this->load->view('app/index', $this->data);
	}

	public function add(){
		if ($this->input->post()){
			$data = [
				'title' => $this->input->post('title'),
				'link' => $this->input->post('link'),
				'icon' => $this->input->post('icon'),
				'parent' => $this->input->post('parent'),
				'priority' => $this->input->post('priority'),
				'created_on' => date('Y-m-d H:i:s'),
				'updated_on' => date('Y-m-d H:i:s'),
			];
			$this->menu_m->insert($data);
			set_alert('message_success', 'Menu Added Successfully!');
			redirect('app/menu/index');
		}
	}

	public function edit($item_id){
		if ($this->input->post()){
			$data = [
				'title' => $this->input->post('title'),
				'link' => $this->input->post('link'),
				'icon' => $this->input->post('icon'),
				'parent' => $this->input->post('parent'),
				'priority' => $this->input->post('priority'),
				'updated_on' => date('Y-m-d H:i:s'),
			];
			$this->menu_m->update($data, ['id' => $item_id]);
			set_alert('message_success', 'Menu Updated Successfully!');
			redirect('app/menu/index');
		}
	}
}
