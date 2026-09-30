<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */

class Menu_m extends MY_Model
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
	protected string $_table_name = 'menu';
	function __construct() {
		parent::__construct();
	}

	/*
	 * Get Side Manu
	 */
	public function get_side_menu() {
		$role_id = get_role_id();
		$parent_array = [];
		$child_array = [];

		// get menu items
        $this->db->order_by('priority', 'asc');
		$menu = parent::get()->result_array();

		// push menu items to array
		foreach ($menu as $menu_item){
			if ($menu_item['parent'] == 0){
				$parent_array[] = $menu_item;
			}else{
				$child_array[$menu_item['parent']][] = $menu_item;
			}
		}

		// set page name for menu tree open
		foreach ($parent_array as $key => $parent){
			if (isset($child_array[$parent['id']])){
				$parent_array[$key]['child_pages'] = array_column($child_array[$parent['id']], 'link');
			}
		}
		return [
			'parent' => $parent_array,
			'child' => $child_array
		];
	}

}
