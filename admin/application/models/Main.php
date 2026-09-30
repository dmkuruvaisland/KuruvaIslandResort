<?php
class Main extends CI_Model
{



// --------------------------------------
//  public function get_home_banner(){
//         return $this->db->get('home_banner')->result_array();
//     }
   public function update_popup_data(){
       log_message('error','------anz222---'.$this->input->post('did'));
        $data['link'] 	= $this->input->post('link');
        $data['image'] 	= $this->input->post('image');
        
         $file_upload = $this->upload_file('homepage_popup', 'image');
		if($file_upload!= false){
			$data['image'] = $file_upload['file'];
		}
        
        $this->db->where('id', $this->input->post('did'));
		$this->db->update('homepage_popup', $data);
    }
     public function fet_popup_metadata(){
        
        return $this->db->get('homepage_popup')->result_array();
    }
// --------------------
    public function update_home_banner(){
        $data['title'] 	= $this->input->post('title');
        $data['sub_title'] 	= $this->input->post('sub_title');
        $data['button_name'] 	= $this->input->post('button_name');
		$file_upload = $this->upload_file('events', 'image');
		if($file_upload!= false){
			$data['image'] = $file_upload['file'];
		}


        $this->db->where('id', $this->input->post('idd'));
		$this->db->update('home_banner', $data);
    }
    
    public function add_home_banner(){
        $data['title'] 	= $this->input->post('title');
        $data['sub_title'] 	= $this->input->post('sub_title');
        $data['button_name'] 	= $this->input->post('button_name');
        
        $file_upload = $this->upload_file('home_banner', 'image');
		if($file_upload!= false){
			$data['image'] = $file_upload['file'];
		}
		
		$this->db->insert('home_banner', $data);
    }
    
    public function get_home_banner(){
        return $this->db->get('home_banner')->result_array();
    }
    
    public function get_home_pagepopup(){
        return $this->db->get('homepage_popup')->result_array();
    }
    
    public function delete_home_banner($id){
        $this->db->where('id',$id);
        $this->db->delete('home_banner');
        log_message("error",$this->db->last_query());
        return true;
    }
    public function get_home_banner_single($id){
        $this->db->where('id',$id);
        return $this->db->get('home_banner')->result_array();
    }
    
    // ---------------------------
    
    
    
 public function get_dynamic_metadata_bypage($key){
        $this->db->where('page',$key);
        return $this->db->get('dynamic_meta')->result_array();
    }
    
    // ---------------------------
     public function update_dynamic_meta_data(){
        $data['title'] 	= $this->input->post('title');
        $data['description'] 	= $this->input->post('description');
        $data['keywords'] 	= $this->input->post('keywords');
        $data['copyright'] 	= $this->input->post('copyright');
        
        $this->db->where('id', $this->input->post('pageid'));
		$this->db->update('dynamic_meta', $data);
    }
     public function fet_dynamic_metadata(){
        return $this->db->get('dynamic_meta')->result_array();
    }
 public function get_metadata(){
        return $this->db->get('meta')->result_array();
    }
    //  public function get_static_data(){
    //     return $this->db->get('static_data')->result_array();
    // }
 public function get_meta_data(){
        return $this->db->get('meta')->result_array();
    }
    public function update_meta_data(){
        $data['title'] 	= $this->input->post('title');
        $data['description'] 	= $this->input->post('description');
        $data['robots'] 	= $this->input->post('robots');
        $data['og_locale'] 	= $this->input->post('og_locale');
        $data['og_type'] 	= $this->input->post('og_type');
        $data['og_title'] 	= $this->input->post('og_title');
        $data['og_description'] 	= $this->input->post('og_description');
        $data['og_url'] 	= $this->input->post('og_url');
        $data['og_site_name'] 	= $this->input->post('og_site_name');
        $data['og_image'] 	= $this->input->post('og_image');
        $data['article_publisher'] 	= $this->input->post('article_publisher');
        $data['article_author'] 	= $this->input->post('article_author');
        $data['article_modified_time'] 	= $this->input->post('article_modified_time');

		$this->db->update('meta', $data);
    }
// -----------------
// ----------------------------------anz--admin- start--------------------------------
    public function add_subscription($email){
        $data['email'] 	= $email;
        $this->db->insert('subscription', $data);
    }
    
    // ---------------------------------------
public function update_blog(){
     if(empty($this->input->post('date')))
     {
        $data['title'] 	        = $this->input->post('title');
        $data['perma'] 	        = $this->input->post('perma');
        $data['description'] 	= $this->input->post('description');
        $data['content'] 	    = $this->input->post('blog_content');

		$file_upload = $this->upload_file('blog', 'image');
		if($file_upload!= false){
			$data['image'] = $file_upload['file'];
		}

     }
     else
     {
        $data['date'] 			= $this->input->post('date');
        $data['title'] 	        = $this->input->post('title');
        $data['perma'] 	        = $this->input->post('perma');
        $data['description'] 	= $this->input->post('description');
        $data['content'] 	    = $this->input->post('blog_content');

		$file_upload = $this->upload_file('blog', 'image');
		if($file_upload!= false){
			$data['image'] = $file_upload['file'];
		}
          log_message("error","anzz-- is not empty.........");
     }

        $this->db->where('id', $this->input->post('idd'));
		$this->db->update('blog', $data);
    }
    public function add_blog(){
        $data['date'] 			= $this->input->post('date');
        $data['title'] 	        = $this->input->post('title');
        $data['perma'] 	        = $this->input->post('perma');
        $data['description'] 	= $this->input->post('description');
        $data['content'] 	= $this->input->post('blog_content');

		$file_upload = $this->upload_file('blog', 'image');
		if($file_upload!= false){
			$data['image'] = $file_upload['file'];
		}

		$this->db->insert('blog', $data);
    }
    
    public function get_blog(){
        $this->db->order_by('date','DESC');
        return $this->db->get('blog')->result_array();
    }
    
     public function get_blog_rand(){
         $this->db->order_by('id', 'RANDOM');
        return $this->db->get('blog')->result_array();
    }
    
    public function delete_blog($id){
        $this->db->where('id',$id);
        $this->db->delete('blog');
        log_message("error",$this->db->last_query());
        return true;
    }
    public function get_blog_single($id){
        $this->db->where('id',$id);
        return $this->db->get('blog')->result_array();
    }
    public function get_blog_single_media($id){
        $this->db->where('blog',$id);
        return $this->db->get('blog_media')->result_array();
    }
    
      public function get_blog_single_by_slug($slug){
        $this->db->where('perma',$slug);
        return $this->db->get('blog')->result_array();
    }
     public function get_blog_media(){
        return $this->db->get('blog_media')->result_array();
    }
    
         public function add_blog_media() {
        $data['blog'] 	= $this->input->post('blog');
        $data['type'] 	= $this->input->post('type');
        $data['video'] 	= $this->input->post('video');

		$file_upload = $this->upload_file('blog', 'image');
		if($file_upload!= false){
			$data['image'] = $file_upload['file'];
		}

		$this->db->insert('blog_media', $data);
    }
    
  
    
    public function delete_blog_media($id){
        $this->db->where('id',$id);
        $this->db->delete('blog_media');
        return true;
    }
    
  
// --------------------------------------------------------------------
 public function update_faq(){
        $data['question'] 	= $this->input->post('title');
        $data['answer'] 		= $this->input->post('description');

        $this->db->where('id', $this->input->post('idd'));
		$this->db->update('faq', $data);
    }
 public function add_faq(){
        $data['question'] 	= $this->input->post('title');
        $data['answer'] 		= $this->input->post('description');
		$this->db->insert('faq', $data);
    }
    
    public function get_faq(){
        return $this->db->get('faq')->result_array();
    }
    public function delete_faq($id){
        $this->db->where('id',$id);
        $this->db->delete('faq');
        log_message("error",$this->db->last_query());
        return true;
    }
    public function get_faq_single($id){
        $this->db->where('id',$id);
        return $this->db->get('faq')->result_array();
    }
// -------------------------
public function add_contact($name,$email,$subject,$message){
        $data['name'] 	= $name;
        $data['email'] 	= $email;
        $data['mobile'] 	= $subject;
        $data['message'] 	= $message;
        
        $this->db->insert('contact_form', $data);
    }
    
    // ---------------------------------------
    
 public function add_package_facility(){
        $data['facility'] 	= $this->input->post('facility');
        $data['package_id'] 	= $this->input->post('package_id');
		
		$this->db->insert('package_facility', $data);
    }
     public function get_package_facility(){
        return $this->db->get('package_facility')->result_array();
    }
     public function delete_package_facility($id){
        $this->db->where('id',$id);
        $this->db->delete('package_facility');
        log_message("error",$this->db->last_query());
        return true;
    }
// ----------------
 public function get_packages_amenity_value2($rid,$amid){
         $this->db->where('package_id',$rid);
         $this->db->where('amenity_id',$amid);
         return $this->db->get('packages_amenity_value')->result_array();
    }
 public function add_packages_amenity_value(){
        $data['amenity_id'] 	= $this->input->post('amenity_id');
        $data['package_id'] 	= $this->input->post('package_id');
        $data['value'] 	= $this->input->post('value');
		
		$this->db->insert('packages_amenity_value', $data);
    }
     public function get_packages_amenity_value(){
        return $this->db->get('packages_amenity_value')->result_array();
    }
     public function delete_packages_amenity_value($id){
        $this->db->where('id',$id);
        $this->db->delete('packages_amenity_value');
        log_message("error",$this->db->last_query());
        return true;
    }
// -------------------------------------------
 public function add_package_amenity(){
        $data['amenity'] 	= $this->input->post('amenity');
        $data['package_id'] 	= $this->input->post('package_id');
		
		$this->db->insert('package_amenity', $data);
    }
     public function get_package_amenity(){
        return $this->db->get('package_amenity')->result_array();
    }
     public function delete_package_amenity($id){
        $this->db->where('id',$id);
        $this->db->delete('package_amenity');
        log_message("error",$this->db->last_query());
        return true;
    }
// ----------------
 public function update_packages(){
         $data['title'] 	= $this->input->post('title');
        $data['perma'] 	= $this->input->post('perma');
        $data['content'] 	= $this->input->post('content');
        $data['book_now_section'] 	= $this->input->post('book_now_section');
        $data['meta_title'] 	= $this->input->post('meta_title');
        $data['meta_description'] 	= $this->input->post('meta_description');
        $data['meta_keyword'] 	= $this->input->post('meta_keyword');
        $data['meta_copyright'] 	= $this->input->post('meta_copyright');


        $this->db->where('id', $this->input->post('idd'));
		$this->db->update('packages', $data);
    }
 public function add_packages(){
        $data['title'] 	= $this->input->post('title');
        $data['perma'] 	= $this->input->post('perma');
        $data['content'] 	= $this->input->post('content');
        $data['book_now_section'] 	= $this->input->post('book_now_section');
        $data['meta_title'] 	= $this->input->post('meta_title');
        $data['meta_description'] 	= $this->input->post('meta_description');
        $data['meta_keyword'] 	= $this->input->post('meta_keyword');
        $data['meta_copyright'] 	= $this->input->post('meta_copyright');
     
		$this->db->insert('packages', $data);
    }
    
    public function get_packages(){
        return $this->db->get('packages')->result_array();
    }
    public function delete_packages($id){
        $this->db->where('id',$id);
        $this->db->delete('packages');
        log_message("error",$this->db->last_query());
        return true;
    }
    public function get_packages_single($id){
        $this->db->where('id',$id);
        return $this->db->get('packages')->result_array();
    }
    public function get_packages_single_by_slug($slug){
        $this->db->where('perma',$slug);
        return $this->db->get('packages')->result_array();
    }
    
    public function get_packages_single_amenity($id){
        $this->db->where('package_id',$id);
        return $this->db->get('package_amenity')->result_array();
    }
     public function get_packages_single_amenity_values($rid){
        $this->db->where('package_id',$rid);
        return $this->db->get('packages_amenity_value')->result_array();
    }
    
        public function get_packages_single_features($id){
        $this->db->where('package_id',$id);
        return $this->db->get('package_facility')->result_array();
    }
    
    // --------------------------------------
    
 public function get_rooms_amenity_value2($rid,$amid){
         $this->db->where('room_id',$rid);
         $this->db->where('amenity_id',$amid);
         return $this->db->get('rooms_amenity_value')->result_array();
    }
 public function add_rooms_amenity_value(){
        $data['amenity_id'] 	= $this->input->post('amenity_id');
        $data['room_id'] 	= $this->input->post('room_id');
        $data['value'] 	= $this->input->post('value');
		
		$this->db->insert('rooms_amenity_value', $data);
    }
     public function get_rooms_amenity_value(){
        return $this->db->get('rooms_amenity_value')->result_array();
    }
     public function delete_rooms_amenity_value($id){
        $this->db->where('id',$id);
        $this->db->delete('rooms_amenity_value');
        log_message("error",$this->db->last_query());
        return true;
    }
    
    public function get_rooms_single_media($id){
        $this->db->where('room_id',$id);
        return $this->db->get('rooms_photo')->result_array();
    }
     public function get_rooms_single_amenity($id){
        $this->db->where('room_id',$id);
        return $this->db->get('rooms_amenity')->result_array();
    }
     public function get_rooms_single_amenity_values($rid){
        $this->db->where('room_id',$rid);
        return $this->db->get('rooms_amenity_value')->result_array();
    }
// ----------------
 public function add_rooms_amenity(){
        $data['amenity'] 	= $this->input->post('amenity');
        $data['room_id'] 	= $this->input->post('room_id');
		
		$this->db->insert('rooms_amenity', $data);
    }
     public function get_rooms_amenity(){
        return $this->db->get('rooms_amenity')->result_array();
    }
     public function delete_rooms_amenity($id){
        $this->db->where('id',$id);
        $this->db->delete('rooms_amenity');
        log_message("error",$this->db->last_query());
        return true;
    }
// ----------------
 public function add_rooms_photo(){
        $data['room_id'] 	= $this->input->post('room_id');
        $file_upload = $this->upload_file('rooms', 'image');
		if($file_upload!= false){
			$data['image'] = $file_upload['file'];
		}
		
		$this->db->insert('rooms_photo', $data);
    }
     public function get_rooms_photo(){
        return $this->db->get('rooms_photo')->result_array();
    }
     public function delete_rooms_photo($id){
        $this->db->where('id',$id);
        $this->db->delete('rooms_photo');
        log_message("error",$this->db->last_query());
        return true;
    }
// ----------------
 public function update_rooms(){
         $data['title'] 	= $this->input->post('title');
        $data['perma'] 	= $this->input->post('perma');
        $data['description'] 	= $this->input->post('description');
        $data['brochure_url'] 	= $this->input->post('brochure_url');
        $data['youtube_video_id'] 	= $this->input->post('youtube_video_id');
        $data['meta_title'] 	= $this->input->post('meta_title');
        $data['meta_description'] 	= $this->input->post('meta_description');
        $data['meta_keyword'] 	= $this->input->post('meta_keyword');
        $data['meta_copyright'] 	= $this->input->post('meta_copyright');


        $this->db->where('id', $this->input->post('idd'));
		$this->db->update('rooms', $data);
    }
 public function add_rooms(){
        $data['title'] 	= $this->input->post('title');
        $data['perma'] 	= $this->input->post('perma');
        $data['description'] 	= $this->input->post('description');
        $data['brochure_url'] 	= $this->input->post('brochure_url');
        $data['youtube_video_id'] 	= $this->input->post('youtube_video_id');
        $data['meta_title'] 	= $this->input->post('meta_title');
        $data['meta_description'] 	= $this->input->post('meta_description');
        $data['meta_keyword'] 	= $this->input->post('meta_keyword');
        $data['meta_copyright'] 	= $this->input->post('meta_copyright');
     
		$this->db->insert('rooms', $data);
    }
    
    public function get_rooms(){
        return $this->db->get('rooms')->result_array();
    }
    public function delete_rooms($id){
        $this->db->where('id',$id);
        $this->db->delete('rooms');
        log_message("error",$this->db->last_query());
        return true;
    }
    public function get_rooms_single($id){
        $this->db->where('id',$id);
        return $this->db->get('rooms')->result_array();
    }
    public function get_rooms_single_by_slug($slug){
        $this->db->where('perma',$slug);
        return $this->db->get('rooms')->result_array();
    }
    
    
    // public function get_rooms_photo_single($id){
    //     $this->db->where('rooms_id',$id);
    //     return $this->db->get('rooms_photos')->result_array();
    // }
    // public function get_rooms_facility_single($id){
    //     $this->db->where('rooms_id',$id);
    //     return $this->db->get('rooms_facility')->result_array();
    // }
    // public function get_rooms_specific_single($id){
    //     $this->db->where('rooms_id',$id);
    //     return $this->db->get('rooms_specification')->result_array();
    // }
// ------




// ----------------dawood
 public function add_photo_gallery(){
        $file_upload = $this->upload_file('photo_gallery', 'image');
		if($file_upload!= false){
			$data['image'] = $file_upload['file'];
			$this->db->insert('photo_gallery', $data);
		}
		
    }
     public function get_photo_gallery(){
        return $this->db->get('photo_gallery')->result_array();
    }
     public function delete_photo_gallery($id){
        $this->db->where('id',$id);
        $this->db->delete('photo_gallery');
        log_message("error",$this->db->last_query());
        return true;
    }
// ----------------
// --------------------
     public function add_video_gallery() {
        $data['video'] 	= $this->input->post('video');
        
         $file_upload = $this->upload_file('thumbnail', 'thumbnail');
		if($file_upload!= false){
			$data['thumbnail'] = $file_upload['file'];
// 			$this->db->insert('video_gallery', $data);
		}

		$this->db->insert('video_gallery', $data);
    }
    
    public function get_video_gallery(){
        return $this->db->get('video_gallery')->result_array();
    }
    
    public function delete_video_gallery($id){
        $this->db->where('id',$id);
        $this->db->delete('video_gallery');
        return true;
    }
    
    
//      public function add_thumbnail(){
//         $file_upload = $this->upload_file('thumbnail', 'thumbnail');
// 		if($file_upload!= false){
// 			$data['thumbnail'] = $file_upload['file'];
// 			$this->db->insert('video_gallery', $data);
// 		}
		
//     }
    // -----------------------------------------
// ----------------------------------anz--admin- start--------------------------------



    // INSTAGRAM POST
    
    public function add_instagram_post(){
        
        $file_upload = $this->upload_file('instagram_post', 'image');
		if($file_upload!= false){
			$data['post'] = $file_upload['file'];
		}
		
        $data['created_date'] 	= date('Y-m-d H:i:s');
        
		$this->db->insert('instagram_post', $data);
    }
    
    public function update_instagram_post($param2){
        
        $file_upload = $this->upload_file('instagram_post', 'image');
		if($file_upload!= false){
			$data['post'] = $file_upload['file'];
		}

        $this->db->where('id', $param2);
		$this->db->update('instagram_post', $data);
    }
    

    public function get_instagram_posts(){
        return $this->db->get('instagram_post')->result_array();
    }
    
    public function delete_instagram_post($id){
        $this->db->where('id',$id);
        $this->db->delete('instagram_post');
        return true;
    }
    
    public function get_instagram_post_single($id){
        $this->db->where('id',$id);
        return $this->db->get('instagram_post')->row_array();
    }



































//  public function get_faqs(){
//         return $this->db->get('faq')->result_array();
//     }
// // ----------------------------------anz--admin- start--------------------------------
//     public function update_home_banner(){
//         $data['title'] 	= $this->input->post('title');
//         $data['sub_title'] 	= $this->input->post('sub_title');
//         $data['button_name'] 	= $this->input->post('button_name');
// 		$file_upload = $this->upload_file('events', 'image');
// 		if($file_upload!= false){
// 			$data['image'] = $file_upload['file'];
// 		}


//         $this->db->where('id', $this->input->post('idd'));
// 		$this->db->update('home_banner', $data);
//     }
    
//     public function add_home_banner(){
//         $data['title'] 	= $this->input->post('title');
//         $data['sub_title'] 	= $this->input->post('sub_title');
//         $data['button_name'] 	= $this->input->post('button_name');
        
//         $file_upload = $this->upload_file('home_banner', 'image');
// 		if($file_upload!= false){
// 			$data['image'] = $file_upload['file'];
// 		}
		
// 		$this->db->insert('home_banner', $data);
//     }
    
//     public function get_home_banner(){
//         return $this->db->get('home_banner')->result_array();
//     }
//     public function delete_home_banner($id){
//         $this->db->where('id',$id);
//         $this->db->delete('home_banner');
//         log_message("error",$this->db->last_query());
//         return true;
//     }
//     public function get_home_banner_single($id){
//         $this->db->where('id',$id);
//         return $this->db->get('home_banner')->result_array();
//     }
//     // ---------------------------
//  public function get_static_data(){
//         return $this->db->get('static_data')->result_array();
//     }
//     public function update_static_data(){
//         $data['phone'] 	= $this->input->post('phone');
//         $data['email'] 	= $this->input->post('email');
//         $data['address'] 	= $this->input->post('address');
//         $data['time'] 	= $this->input->post('time');
//         $data['map'] 	= $this->input->post('map');
        
//         $data['fb'] 	= $this->input->post('fb');
//         $data['twit'] 	= $this->input->post('twit');
//         $data['yout'] 	= $this->input->post('yout');
//         $data['insta'] 	= $this->input->post('insta');

// 		$this->db->update('static_data', $data);
//     }
//     // ---------------------
//  public function add_comment($comment,$name,$email,$bid){
//         $data['blog_id'] 	= $bid;
//         $data['name'] 	= $name;
//         $data['email'] 	= $email;
//         $data['comment'] 	= $comment;
        
//         $this->db->insert('blog_comments', $data);
//     }
// // --------------------
//  public function get_dynamic_metadata_bypage($key){
//         $this->db->where('page',$key);
//         return $this->db->get('dynamic_meta')->result_array();
//     }
// // --------------------
//      public function add_blog_media() {
//         $data['blog'] 	= $this->input->post('blog');
//         $data['type'] 	= $this->input->post('type');
//         $data['video'] 	= $this->input->post('video');

// 		$file_upload = $this->upload_file('blog', 'image');
// 		if($file_upload!= false){
// 			$data['image'] = $file_upload['file'];
// 		}

// 		$this->db->insert('blog_media', $data);
//     }
    
//     public function get_blog_media(){
//         return $this->db->get('blog_media')->result_array();
//     }
    
//     public function delete_blog_media($id){
//         $this->db->where('id',$id);
//         $this->db->delete('blog_media');
//         return true;
//     }
    
//     // -----------------------------------------

// ------------------Events----------------------
    
    public function add_events(){
        $data['title'] 	= $this->input->post('title');
        $data['description'] 	= $this->input->post('description');
        
        $file_upload = $this->upload_file('events', 'image');
		if($file_upload!= false){
			$data['image'] = $file_upload['file'];
		}
		
		$this->db->insert('events', $data);
    }
    
    public function update_events(){
        $data['title'] 	= $this->input->post('title');
        $data['description'] 	= $this->input->post('description');
		$file_upload = $this->upload_file('events', 'image');
		if($file_upload!= false){
			$data['image'] = $file_upload['file'];
		}


        $this->db->where('id', $this->input->post('idd'));
		$this->db->update('events', $data);
    }
    
    public function delete_events($id){
        $this->db->where('id',$id);
        $this->db->delete('events');
        log_message("error",$this->db->last_query());
        return true;
    }
    
    public function get_events(){
        return $this->db->get('events')->result_array();
    }
    
    public function get_events_single($id){
        $this->db->where('id',$id);
        return $this->db->get('events')->result_array();
    }
//     // ---------------------------
//      public function update_dynamic_meta_data(){
//         $data['title'] 	= $this->input->post('title');
//         $data['description'] 	= $this->input->post('description');
        
//         $this->db->where('id', $this->input->post('pageid'));
// 		$this->db->update('dynamic_meta', $data);
//     }
//      public function fet_dynamic_metadata(){
//         return $this->db->get('dynamic_meta')->result_array();
//     }
//  public function get_metadata(){
//         return $this->db->get('meta')->result_array();
//     }
//     //  public function get_static_data(){
//     //     return $this->db->get('static_data')->result_array();
//     // }
//  public function get_meta_data(){
//         return $this->db->get('meta')->result_array();
//     }
//     public function update_meta_data(){
//         $data['title'] 	= $this->input->post('title');
//         $data['description'] 	= $this->input->post('description');
//         $data['robots'] 	= $this->input->post('robots');
//         $data['og_locale'] 	= $this->input->post('og_locale');
//         $data['og_type'] 	= $this->input->post('og_type');
//         $data['og_title'] 	= $this->input->post('og_title');
//         $data['og_description'] 	= $this->input->post('og_description');
//         $data['og_url'] 	= $this->input->post('og_url');
//         $data['og_site_name'] 	= $this->input->post('og_site_name');
//         $data['og_image'] 	= $this->input->post('og_image');
//         $data['article_publisher'] 	= $this->input->post('article_publisher');
//         $data['article_author'] 	= $this->input->post('article_author');
//         $data['article_modified_time'] 	= $this->input->post('article_modified_time');

// 		$this->db->update('meta', $data);
//     }
// // -----------------
//  public function add_package(){
//         $data['price'] 	= $this->input->post('price');
//         $data['duration'] 	= $this->input->post('duration');
//         $data['timing'] 	= $this->input->post('timing');
//         $data['package_name'] 	= $this->input->post('pack_name');
//         $data['capacity'] 	= $this->input->post('capacity');
//         $data['remark'] 	= $this->input->post('remark');
//         $data['yatch_id'] 	= $this->input->post('yatch');
        
//         $file_upload = $this->upload_file('package', 'image');
// 		if($file_upload!= false){
// 			$data['image'] = $file_upload['file'];
// 		}
		
// 		$this->db->insert('package', $data);
//     }
//     public function update_package(){
//         $data['price'] 	= $this->input->post('price');
//         $data['duration'] 	= $this->input->post('duration');
//         $data['timing'] 	= $this->input->post('timing');
//         $data['package_name'] 	= $this->input->post('pack_name');
//         $data['capacity'] 	= $this->input->post('capacity');
//         $data['remark'] 	= $this->input->post('remark');
//         $data['yatch_id'] 	= $this->input->post('yatch');
        
//         $file_upload = $this->upload_file('package', 'image');
// 		if($file_upload!= false){
// 			$data['image'] = $file_upload['file'];
// 		}

//         $this->db->where('id', $this->input->post('idd'));
// 		$this->db->update('package', $data);
//     }
//      public function get_package(){
//         return $this->db->query('SELECT package.*,yatch.name as y_name,yatch.image as y_img,yatch.perma as perma FROM package,yatch WHERE package.yatch_id=yatch.id')->result_array();
//     }
//      public function get_package_single($pid){
//         return $this->db->query('SELECT package.*,yatch.name as y_name,yatch.image as y_img,yatch.perma as perma FROM package,yatch WHERE package.yatch_id=yatch.id AND package.id='.$pid)->result_array();
//     }
//      public function delete_package($id){
//         $this->db->where('id',$id);
//         $this->db->delete('package');
//         log_message("error",$this->db->last_query());
//         return true;
//     }
// // ----------------
//  public function add_yatch_facility(){
//         $data['facility'] 	= $this->input->post('facility');
//         $data['yatch_id'] 	= $this->input->post('yatch');
		
// 		$this->db->insert('yatch_facility', $data);
//     }
//      public function get_yatch_facility(){
//         return $this->db->get('yatch_facility')->result_array();
//     }
//      public function delete_yatch_facility($id){
//         $this->db->where('id',$id);
//         $this->db->delete('yatch_facility');
//         log_message("error",$this->db->last_query());
//         return true;
//     }
// // ----------------
//  public function add_yatch_specification(){
//         $data['specification'] 	= $this->input->post('spec');
//         $data['value'] 	= $this->input->post('val');
//         $data['yatch_id'] 	= $this->input->post('yatch');
		
// 		$this->db->insert('yatch_specification', $data);
//     }
//      public function get_yatch_specification(){
//         return $this->db->get('yatch_specification')->result_array();
//     }
//      public function delete_yatch_specification($id){
//         $this->db->where('id',$id);
//         $this->db->delete('yatch_specification');
//         log_message("error",$this->db->last_query());
//         return true;
//     }
// // ----------------
//  public function add_yatch_photos(){
//         $data['yatch_id'] 	= $this->input->post('yatch');
//         $file_upload = $this->upload_file('yatch', 'image');
// 		if($file_upload!= false){
// 			$data['image'] = $file_upload['file'];
// 		}
		
// 		$this->db->insert('yatch_photos', $data);
//     }
//      public function get_yatch_photos(){
//         return $this->db->get('yatch_photos')->result_array();
//     }
//      public function delete_yatch_photos($id){
//         $this->db->where('id',$id);
//         $this->db->delete('yatch_photos');
//         log_message("error",$this->db->last_query());
//         return true;
//     }
    
// // ------------------------------------anz admin--END-----------------------------








//     /**
//      * Product variant
//      */
//     public function add_product_variant(){
//         $data['title'] 			= $this->input->post('title');
//         $data['product_id'] 	= $this->input->post('product_id');
//         $data['mrp_price'] 		= $this->input->post('mrp_price');
//         $data['sale_price'] 	= $this->input->post('sale_price');
//         $data['offer_price'] 	= $this->input->post('offer_price');
//         $data['hotel_price'] 	= $this->input->post('hotel_price');
//         $data['base_variant'] 	= $this->input->post('base_variant') == 1 ? 1 : 0;
// 		$data['net_weight'] 	= $this->input->post('net_weight');
// 		$data['gross_weight'] 	= $this->input->post('gross_weight');

// 		$file_upload = $this->upload_file('product', 'product_variant_image');
// 		if($file_upload!= false){
// 			$data['product_variant_image'] = $file_upload['file'];
// 		}

// 		$this->db->insert('product_variant', $data);
//     }
//     public function edit_product_variant($product_variant_id){
// 		$data['title'] 			= $this->input->post('title');
// 		$data['mrp_price'] 		= $this->input->post('mrp_price');
// 		$data['sale_price'] 	= $this->input->post('sale_price');
// 		$data['offer_price'] 	= $this->input->post('offer_price');
//         $data['hotel_price'] 	= $this->input->post('hotel_price');
// 		$data['base_variant'] 	= $this->input->post('base_variant') == 1 ? 1 : 0;
// 		$data['net_weight'] 	= $this->input->post('net_weight');
// 		$data['gross_weight'] 	= $this->input->post('gross_weight');

// 		$file_upload = $this->upload_file('product', 'product_variant_image');
// 		if($file_upload!= false){
// 			$data['product_variant_image'] = $file_upload['file'];
// 		}
//         $this->db->where('id', $product_variant_id);
//         $this->db->update('product_variant', $data);
//     }
//     public function delete_product_variant($product_variant_id){
//         $this->db->where('id', $product_variant_id);
//         $this->db->delete('product_variant');
//     }
//     public function get_product_variant_single($product_variant_id){
//         $this->db->where('id', $product_variant_id);
//         return $this->db->get('product_variant')->row_array();
//     }
//     public function get_product_variant(){
//         return $this->db->get('product_variant')->result_array();
//     }
//     public function get_product_variant_by_product_id($product_id){
//         $this->db->where('product_id', $product_id);
//         return $this->db->get('product_variant')->result_array();
//     }

//     /**
//      * Time Slot
//      */
//     public function add_time_slot(){
//         $data['from_time'] 	= $this->input->post('from_time');
//         $data['to_time'] 	= $this->input->post('to_time');
//         $data['datetime'] 	= date('Y-m-d H:i:s');

//         $this->db->insert('time_slot', $data);
//     }
//     public function edit_time_slot($time_slot_id){
//         $data['from_time'] 	= $this->input->post('from_time');
//         $data['to_time'] 	= $this->input->post('to_time');

//         $this->db->where('id', $time_slot_id);
//         $this->db->update('time_slot', $data);
//     }
//     public function delete_time_slot($time_slot_id){
//         $this->db->where('id', $time_slot_id);
//         $this->db->delete('time_slot');
//     }
//     public function get_time_slot_single($time_slot_id){
//         $this->db->where('id', $time_slot_id);
//         return $this->db->get('time_slot')->row_array();
//     }
//     public function get_time_slot(){
//         return $this->db->get('time_slot')->result_array();
//     }




    //adeeb
    /**
     * File uploading function
     */
    public function upload_file($upload_folder, $file_name, $full_url = true, $month_year = true)
    {
        $this->load->library('upload');
        $configUpload = '';
        if (isset($_FILES[$file_name]['name'])) {
            $fileExt = pathinfo($_FILES[$file_name]['name'], PATHINFO_EXTENSION);

            if($fileExt == 'pdf'){
                $return['file_type'] = 'pdf';
            }else{
                $return['file_type'] = 'image';
            }
            //UPLOAD FILE
            if($month_year){
                $uploadPath = 'uploads/' . $upload_folder . '/' . date("mY");
            }else{
                $uploadPath = 'uploads/' . $upload_folder;
            }
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, TRUE);
            }
            $configUpload = array(
                'upload_path' => $uploadPath,
                'allowed_types' => 'jpg|jpeg|png|gif|pdf|pptx|ppt|doc|docx|html|htm|ods|xls|xlsx|webp',
                'encrypt_name' => true
            );
            $this->upload->initialize($configUpload);
            if (!$this->upload->do_upload($file_name)) {
                log_message('error',$this->upload->display_errors());
                return false;

            } else {
                $data['file'] = array('upload_data' => $this->upload->data());
                if($full_url == true && $month_year == true){
                    $return['file'] = $uploadPath . "/" . $data['file']['upload_data']['file_name'];
                }elseif ($full_url == false && $month_year == true){
                    $return['file'] =  date("mY") . "/" . $data['file']['upload_data']['file_name'];
                }else{
                    $return['file'] = $data['file']['upload_data']['file_name'];
                }
                return $return;
            }
        } else {
            return false;
        }
    }
    
    
    public function upload_gallery_file($upload_folder, $file_name, $full_url = true, $month_year = true)
    {
        $this->load->library('upload');
        $configUpload = '';
        if (isset($_FILES[$file_name]['name'])) {
            $fileExt = pathinfo($_FILES[$file_name]['name'], PATHINFO_EXTENSION);

            if($fileExt == 'pdf'){
                $return['file_type'] = 'pdf';
            }else{
                $return['file_type'] = 'image';
            }
            //UPLOAD FILE
            
            $uploadPath = 'uploads/' . $upload_folder;
            
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, TRUE);
            }
            $configUpload = array(
                'upload_path' => $uploadPath,
                'allowed_types' => 'jpg|jpeg|png|gif|pdf|pptx|ppt|doc|docx|html|htm|ods|xls|xlsx|webp',
                'encrypt_name' => true
            );
            $this->upload->initialize($configUpload);
            if (!$this->upload->do_upload($file_name)) {
                // log_message('error',$this->upload->display_errors());
                return false;

            } else {
                $data['file'] = array('upload_data' => $this->upload->data());
                if($full_url == true){
                    $return['file'] = $uploadPath . "/" . $data['file']['upload_data']['file_name'];
                }elseif ($full_url == false){
                    $return['file'] =  $data['file']['upload_data']['file_name'];
                }else{
                    $return['file'] = $data['file']['upload_data']['file_name'];
                }
                return $return;
            }
        } else {
            return false;
        }
    }

}
