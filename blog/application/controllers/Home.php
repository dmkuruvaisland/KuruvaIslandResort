<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct () {
        parent::__construct();
        $this->load->model('blog_m');
    }
    
	
// 	public function index(){
	    
// 	    $this->data['canonical_url'] = base_url();
// 	    $this->data['og_type'] = 'website';
	    
// 	    $this->data['page_name']  = 'home';
// // 		$this->load->view('website/home', $this->data);
//         redirect(base_url('login/index'));
// 	}

	
	public function index($slug = ''){
	    
	   // if($_GET){
	   //     $search = $_GET['s'];
	   //     $this->db->select('*');
	   //     $this->db->from('blog');
	   //     $this->db->like('title' , $search);
	   //     $this->db->or_like('description' , $search);
	   //     $this->db->or_like('short_description' , $search);
	   //     $this->data['searchs'] = $this->db->get('')->result_array();
	   //    // log_message('error',print_r($this->data['searchs'],true));
	        
	   // }
	    
	    if(empty($slug)){
	        $this->db->order_by('id', 'DESC');
            $this->data['blogs'] = $this->blog_m->get()->result_array();
	       // $this->data['blogs'] = $this->blog_m->get()->result_array();
	        
    	    $this->data['canonical_url'] = base_url('blog');
    	    $this->data['og_type'] = 'article';
    	    $this->data['page_title'] = 'Blog';
    	    $this->data['page_name']  = 'blog';
    	    $this->load->view('website/index', $this->data);
	    }else{
	        $blog = $this->blog_m->getBlogBySlug($slug);
            $this->data['recent_blogs'] = $this->blog_m->get_recent_blogs($slug);
            
            if (!$blog) {
                show_404();
            }
            
            $this->data['blog'] = $blog;
            
            // Set metadata
            $this->data['canonical_url']  = base_url('blog-details/'.$slug);
            $this->data['og_image']       = base_url('');
            $this->data['og_type']        = 'article';
            // $this->data['og_description'] = $blog['meta_description'];
            $this->data['og_image']       = $blog['image'];
            $this->data['page_title']     = $blog['title'];
            // $this->data['page_name']      = 'blog-details';
            $this->load->view('website/blog-details', $this->data);
    	}
	   // $this->load->view('website/index', $this->data);
	}
	
// 	public function blog_details($slug = '') {
//         $blog = $this->blog_m->getBlogBySlug($slug);
//         // log_message('error','new' .print_r($this->db->last_query(),true));
//         $this->data['recent_blogs'] = $this->blog_m->get_recent_blogs($slug);
//         // log_message('error','new' .print_r($blog,true));
//         // log_message('error','new' .print_r($this->db->last_query(),true));
//         if (!$blog) {
//             show_404();
//         }
    
//         $this->data['blog'] = $blog;
    
//         // Set metadata
//         $this->data['canonical_url'] = base_url('blog-details/'.$slug);
//         $this->data['og_image'] = base_url('');
//         $this->data['og_type'] = 'article';
//         $this->data['page_title'] = 'Blog Details - ' . $blog['title'];
//         $this->data['page_name'] = 'blog-details';
    
//         // Load the view
//         $this->load->view('website/index', $this->data);
//     }


	
}
