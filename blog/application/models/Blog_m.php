<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */

class Blog_m extends MY_Model
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
	protected string $_table_name = 'blog';
	function __construct() {
		parent::__construct(); 
	}
	
	public function getBlogBySlug($slug) {
        $this->db->where('perma', $slug);
        
        $query = $this->db->get('blog'); 
        
        if ($query->num_rows() === 1) {
            return $query->row_array();
        } else {
            return null;
        }
    }
    
    public function get_recent_blogs($slug) {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('perma !=', $slug);
        $this->db->limit('8');
        $this->db->order_by('id DESC'); 
        
        $query = $this->db->get()->result_array();
        
        return $query;
    }
    

}
