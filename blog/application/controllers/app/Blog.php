<?php
/*
 * Copyright (c) 2023.
 * PRODUCT: ECOPEN
 * AUTHOR: TROGON MEDIA PVT LTD
 * WEBSITE: http://trogonmedia.com
 */
use PhpOffice\PhpSpreadsheet\IOFactory;
class Blog extends App_Controller{
	public function __construct () {
		parent::__construct();
		$this->load->model('blog_m');
	}

	public function index() {


        $this->data['list_items'] = $this->blog_m->get()->result_array();


		$this->data['page_title']   = 'Blog ';
		$this->data['id']    =  $blog_id;
		$this->data['page_name']    = 'blog/index';
		$this->load->view('app/index', $this->data);
	}

	public function add(){
		if ($this->input->post()){

                // insert to users table
                $blog = [
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description'),
                    'short_description' => $this->input->post('short_description'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_description' => $this->input->post('meta_description'),
                    'author_name' => $this->input->post('author_name'),
                    'slug' => $this->create_slug($this->input->post('title')),
                    'date' => date('Y-m-d H:i:s'),
                    'created_by' => get_user_id(),
                    'created_on' => date('Y-m-d H:i:s'),
                    // 'updated_on' => date('Y-m-d H:i:s'),
                ];
                $image = $this->upload_file('blog', 'image');
                if ($image!=false){
                    $blog['image'] = $image['file'];
                }
                
                 $this->blog_m->insert($blog);
    
                set_alert('message_success', 'Blog Added Successfully!');
		}
        redirect($_SERVER['HTTP_REFERER']);
	}
	
	public	function create_slug($string){
       $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
       return $slug;
    }

	public function edit($item_id){
		if ($this->input->post()){
		    
		    $shipment = $this->blog_m->get(['id' => $item_id])->row();
		    
                // update to users table
                $blog = [
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description'),
                    'short_description' => $this->input->post('short_description'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_description' => $this->input->post('meta_description'),
                    'author_name' => $this->input->post('author_name'),
                    'slug' => $this->create_slug($this->input->post('title')),
                    'updated_by' => get_user_id(),
                    'updated_on' => date('Y-m-d H:i:s'),
                ];
                
                $image = $this->upload_file('blog', 'image');
                if ($image!=false){
                    $blog['image'] = $image['file'];
                }
                
                
                $this->blog_m->update($blog,['id' => $item_id]);
                set_alert('message_success', 'Blog Updated Successfully!');
		}
        redirect($_SERVER['HTTP_REFERER']);
	}

	public function delete($item_id){
		if ($item_id > 0){
			$this->blog_m->delete(['id' => $item_id]);
			set_alert('message_success', 'Blog Deleted Successfully!');
		}
        redirect($_SERVER['HTTP_REFERER']);
	}
	
}
