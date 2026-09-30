<?php
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 * FILE PATH: application/controllers/app/Dashboard.php
 */

class Dashboard extends App_Controller{
	public function __construct () {
		parent::__construct();
	   
    }

	public function index() {
		$this->data['chart_data']   = $this->_chart_data();
// 		$branch_id = get_branch_id();
//         $branch_name = $this->branch_m->get(['id' => $branch_id])->row()->title;
		
		$this->data['page_title']   = 'Dashboard';
		$this->data['page_name']    = 'dashboard/index';
		$this->load->view('app/index', $this->data);
	}

    private function _chart_data(): array {
        return [
            // 'student_count' => $this->_chart_student_count(),
            // 'school_count' => $this->_chart_school_count(),
        ];
    }

    

    public function under_construction(){
        $this->data['page_title']   = 'Dashboard';
        $this->data['page_name']    = 'dashboard/under_construction';
        $this->load->view('app/index', $this->data);
    }
}
