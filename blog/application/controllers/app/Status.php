<?php
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */
use PhpOffice\PhpSpreadsheet\IOFactory;
class Status extends App_Controller{
	public function __construct () {
		parent::__construct();
		$this->load->model('status_m');
	}

	public function index() {


        $this->data['list_items'] = $this->status_m->get()->result_array();

        // $shipment_title = $this->status_m->get(['id' => $shipment_id])->row()->title;

		$this->data['page_title']   = 'Status ';
		$this->data['id']    =  $status_id;
		$this->data['page_name']    = 'status/index';
		$this->load->view('app/index', $this->data);
	}

	public function add(){
		if ($this->input->post()){
		    
		    $newMob = $this->input->post('mob');
    
            // Check if the new mobile number already exists for a different customer
            $name_duplication = $this->status_m->get([
                'status.title' => $newName,
                'status.id !=' => $item_id  
            ])->num_rows();

            
            // $name_duplication = $this->status_m->get(['status.title' => $this->input->post('title')])->num_rows();

            if($name_duplication>0){
                set_alert('message_error', 'Status Category Already Exist!');
            }else {
                // insert to users table
                $status = [
                    'title' => $this->input->post('title'),
                    'created_by' => get_user_id(),
                    // 'updated_by' => get_user_id(),
                    'created_on' => date('Y-m-d H:i:s'),
                    // 'updated_on' => date('Y-m-d H:i:s'),
                ];
                 $this->status_m->insert($status);
    
                set_alert('message_success', 'Status Added Successfully!');
            }
		}
        redirect($_SERVER['HTTP_REFERER']);
	}

	public function edit($item_id){
		if ($this->input->post()){
		    
		    $shipment = $this->status_m->get(['id' => $item_id])->row();
		    
		   $newName = $this->input->post('title');
    
            // Check status already exists
            $name_duplication = $this->status_m->get([
                'status.title' => $newName,
                'status.id !=' => $item_id  
            ])->num_rows();
            
            if($name_duplication>0){
                set_alert('message_error', 'Status Already Exist!');
            }else {
                // update to status table
                $status = [
                    'title' => $this->input->post('title'),
                    'updated_by' => get_user_id(),
                    'updated_on' => date('Y-m-d H:i:s'),
                ];
                
                $this->status_m->update($status,['id' => $item_id]);
                set_alert('message_success', 'Status Updated Successfully!');
            }
		}
        redirect($_SERVER['HTTP_REFERER']);
	}

	public function delete($item_id){
		if ($item_id > 0){
			$this->status_m->delete(['id' => $item_id]);
			set_alert('message_success', 'Status Deleted Successfully!');
		}
        redirect($_SERVER['HTTP_REFERER']);
	}
	
}
