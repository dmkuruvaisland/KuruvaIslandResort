<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */

class Services_m extends MY_Model
{
	protected string $_table_name = 'services';
	function __construct() {
		parent::__construct();
	}
	
	
	
	public function get_service_by_category(){
	    $categories = $this->service_category_m->get(NULL,['id as category_id','title as category'])->result_array();
	    foreach($categories as $key=> $category){
	        $categories[$key]['service'] = $this->services_m->get(['category_id' => $category['category_id']],['id as service_id','title as service', 'image'])->result_array();
	    }
	    
	    return $categories;
	}

}
