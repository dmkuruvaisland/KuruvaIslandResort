<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Class Welcome
 * Author: Adeeb C
 * Date: 2021 April
 * *****************
 * Website: https://adeeb.in
 * Notes: Please do not re-use this code. Respect our work.
 */
class Welcome extends Public_Controller {
	public $data = [];
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Data_db');
		$this->load->model('Main');
        $this->data['rooms'] = $this->main->get_rooms();
        $this->data['packages'] = $this->main->get_packages();
        $this->data['metadata'] = $this->main->get_metadata();
//         $this->data['static_data'] = $this->main->get_static_data();
//         $this->data['events'] = $this->main->get_events();

	}
	
	
	
// -----------------------anz----------------------------
public function site_map(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('site_map');
    $this->data['page_name'] = 'site_map';

		$this->load->view('front/index',$this->data);
}

// ------------------------------------------
public function resort_near_nagerhole(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('resort_near_nagerhole');
    $this->data['page_name'] = 'resort_near_nagerhole';

		$this->load->view('front/index',$this->data);
}

// ------------------------------------------

// public function resort_near_kabini(){
//     $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('resort_near_kabini');
//     $this->data['page_name'] = 'resort_near_kabini';

// 		$this->load->view('front/index',$this->data);
// }

public function resort_in_kabini(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('resort_near_kabini');
    $this->data['page_name'] = 'resort_near_kabini';

		$this->load->view('front/index',$this->data);
}

// ------------------------------------------

public function privacypolicy(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('privacypolicy');
    $this->data['page_name'] = 'privacypolicy';

		$this->load->view('front/index',$this->data);
}

// ------------------------------------------

public function blog_details($slug=null){

        $bdata = $this->data['blog_details'] 	= $this->main->get_blog_single_by_slug($slug);
        $this->data['photos'] 	= $this->main->get_blog_single_media($bdata[0]['id']);
        
        $this->data['page_name'] = 'blog_details';
  
	$this->load->view('front/index', $this->data);
}
// ------------------------------------------

// public function event_details($slug=null){

//         $bdata = $this->data['event_details'] 	= $this->main->get_event_single_by_slug($slug);
//         $this->data['photos'] 	= $this->main->get_event_single_media($bdata[0]['id']);
        
//         $this->data['page_name'] = 'event_details';
  
// 	$this->load->view('front/index', $this->data);
// }

// ------------------------------------------
public function packages($slug=null){
    // if($slug==null){
    //     // $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('blog');
    //     // $this->data['blogs'] 	= $this->main->get_blog();
    //     // $this->data['blogss'] 	= $this->main->get_blog_rand();
    //     $this->data['page_name'] = 'home';
    // }else{
        $bdata = $this->data['package_details'] 	= $this->main->get_packages_single_by_slug($slug);
        $this->data['amenity'] 	= $this->main->get_packages_single_amenity($bdata[0]['id']);
        $this->data['amenity_values'] 	= $this->main->get_packages_single_amenity_values($bdata[0]['id']);
        $this->data['features'] 	= $this->main->get_packages_single_features($bdata[0]['id']);

        // $aa = [
        //     "title" => $bdata[0]['title'],
        //     "description" => $bdata[0]['description'],
        //     ];
        
        // $this->data['dyn_meta'] = [$aa];
        
        // // echo json_encode([$aa]);
        
        $this->data['page_name'] = 'package';
        
        
    // }
	$this->load->view('front/index', $this->data);
}
// -----------------------------------------------
public function rooms($slug=null){
    // if($slug==null){
    //     // $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('blog');
    //     // $this->data['blogs'] 	= $this->main->get_blog();
    //     // $this->data['blogss'] 	= $this->main->get_blog_rand();
    //     $this->data['page_name'] = 'home';
    // }else{
        $bdata = $this->data['rooms_details'] 	= $this->main->get_rooms_single_by_slug($slug);
        
        // log_message("error",'arsh------------------'.print_r($bdata,true));
        
       $testttt =  $this->data['photos'] 	= $this->main->get_rooms_single_media($bdata[0]['id']);
        
        //  log_message("error",'arsh------------------'.json_encode($testttt));
         
        $amn = $this->data['amenity'] 	= $this->main->get_rooms_single_amenity($bdata[0]['id']);
        $this->data['amenity_values'] 	= $this->main->get_rooms_single_amenity_values($bdata[0]['id']);
     
        // $aa = [
        //     "title" => $bdata[0]['title'],
        //     "description" => $bdata[0]['description'],
        //     ];
        
        // $this->data['dyn_meta'] = [$aa];
        
        // // echo json_encode([$aa]);
        
        $this->data['page_name'] = 'room';
        
        
    // }
	$this->load->view('front/index', $this->data);
}

public function subscription(){
    // log_message('error', print_r($_POST, true));
    $email = $_REQUEST['email'];
    
    
    if($email == "")
    {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        set_alert(FLASH_ERROR, 'Subscription Failed!');
        
    }
    else
    {
        $this->main->add_subscription($email);
        header('location:'.base_url()."contact");
        set_alert(FLASH_SUCCESS, 'Successfully subscribed!');
    
    }
}

public function contact_message(){
    log_message('error', print_r($_POST, true));
    $name = $_REQUEST['name'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];
    $message = $_REQUEST['message'];
    
    
    if($name == "" && $email == "" && $mobile == "" && $message == "")
    {
        //         //   if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
        //     // }
        
        set_alert(FLASH_ERROR, 'Submission Failed!');
        
    }
    else
    {
        $this->main->add_contact($name." ".$lname,$email,$mobile,$message);
        header('location:'.base_url()."contact");
        
        set_alert(FLASH_SUCCESS, 'Successfully Submitted!');
        
    }
    
     
}

public function index(){
    $this->data['home_banners'] = $this->main->get_home_banner();
    $this->data['home_pagepopup'] = $this->main->get_home_pagepopup();
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('home');
    $this->data['page_name'] = 'home';
    $this->load->view('front/index',$this->data);
}

public function home1(){
    $this->data['home_banners'] = $this->main->get_home_banner();
    $this->data['home_pagepopup'] = $this->main->get_home_pagepopup();
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('home');
    $this->data['page_name'] = 'home1';
    $this->load->view('front/index',$this->data);
}

// public function rooms(){
//     $this->data['page_name'] = 'room';

// 		$this->load->view('front/index',$this->data);
// }

public function treatment(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('treatment');
    $this->data['page_name'] = 'ayurvedic_treatment';

		$this->load->view('front/index',$this->data);
}

public function treatment_details(){
    $this->data['page_name'] = 'ayurvedic_treatment_detail';

		$this->load->view('front/index',$this->data);
}

public function spa(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('spa');
    $this->data['page_name'] = 'spa';
	$this->load->view('front/index',$this->data);
}

public function contact(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('contact');
    $this->data['page_name'] = 'contact';
	$this->load->view('front/index',$this->data);
}

public function faq(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('faq');
    $this->data['page_name'] = 'faq';
    $this->data['faqs'] 	= $this->main->get_faq();
	$this->load->view('front/index',$this->data);
}

public function overview(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('overview');
    $this->data['page_name'] = 'about_resort';

		$this->load->view('front/index',$this->data);
}

public function blog(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('blog');
    $this->data['page_name'] = 'blog';
    $this->data['blogs'] 	= $this->main->get_blog();

		$this->load->view('front/index',$this->data);
}

public function wayanad(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('wayanad');
    $this->data['page_name'] = 'wayanad';

		$this->load->view('front/index',$this->data);
}

public function thingstodo(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('thingstodo');
    $this->data['page_name'] = 'things-to-do';

		$this->load->view('front/index',$this->data);
}

public function facilities(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('facilities');
    $this->data['page_name'] = 'facilities';

		$this->load->view('front/index',$this->data);
}

public function amenities(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('amenities');
    $this->data['page_name'] = 'aminities';

		$this->load->view('front/index',$this->data);
}

public function placetovisit(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('placestovisit');
    $this->data['page_name'] = 'place-to-visit';

		$this->load->view('front/index',$this->data);
}

public function muthanga(){
    $this->data['page_name'] = 'muthanga';
	$this->load->view('front/index',$this->data);
}


public function caves(){
    $this->data['page_name'] = 'caves';
	$this->load->view('front/index',$this->data);
}

public function thamarasseri_churam(){
    $this->data['page_name'] = 'thamarasseri-churam';
	$this->load->view('front/index',$this->data);
}


public function kuruva_dweep(){
    $this->data['page_name'] = 'kuruva-dweep';
	$this->load->view('front/index',$this->data);
}

public function pantom_rock(){
    $this->data['page_name'] = 'pantom-rock';
	$this->load->view('front/index',$this->data);
}

public function pookode_lake(){
    $this->data['page_name'] = 'pookode-lake';
	$this->load->view('front/index',$this->data);
}

public function pakshi_pathalam(){
    $this->data['page_name'] = 'pakshi-pathalam';
	$this->load->view('front/index',$this->data);
}

public function chembra_peak(){
    $this->data['page_name'] = 'chembra-peak';
	$this->load->view('front/index',$this->data);
}


public function dining(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('dining');
    $this->data['page_name'] = 'dining';
	$this->load->view('front/index',$this->data);
}


public function stay(){
    $this->data['page_name'] = 'stay';
	$this->load->view('front/index',$this->data);
}

public function swimming_pool(){
    $this->data['page_name'] = 'swimming-pool';
	$this->load->view('front/index',$this->data);
}

public function indoor_play_area(){
    $this->data['page_name'] = 'indoor-play-area';
	$this->load->view('front/index',$this->data);
}


public function kids_play_area(){
    $this->data['page_name'] = 'kids-play-area';
	$this->load->view('front/index',$this->data);
}


public function river_side_trekking(){
    $this->data['page_name'] = 'river-side-trekking';
	$this->load->view('front/index',$this->data);
}

public function trekking(){
    $this->data['page_name'] = 'trekking';
	$this->load->view('front/index',$this->data);
}

public function flower_bed(){
    $this->data['page_name'] = 'flower-bed';
	$this->load->view('front/index',$this->data);
}

public function dinner(){
    $this->data['page_name'] = 'dinner';
	$this->load->view('front/index',$this->data);
}

public function offroad_drive(){
    $this->data['page_name'] = 'offroad-drive';
	$this->load->view('front/index',$this->data);
}

public function wild_life_safari(){
    $this->data['page_name'] = 'wild-life-safari';
	$this->load->view('front/index',$this->data);
}

public function barbecue(){
    $this->data['page_name'] = 'barbecue';
	$this->load->view('front/index',$this->data);
}

public function campfire(){
    $this->data['page_name'] = 'campfire';
	$this->load->view('front/index',$this->data);
}

public function experiences(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('experiences');
    $this->data['page_name'] = 'testimonials';

		$this->load->view('front/index',$this->data);
}
public function photogallery(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('photogallery');
    $this->data['list_all'] = $this->main->get_photo_gallery();
    
    $this->data['page_name'] = 'photo-gallery';

		$this->load->view('front/index',$this->data);
}
public function videogallery(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('videogallery');
    $this->data['list_all'] = $this->main->get_video_gallery();
    
    $this->data['page_name'] = 'video-gallery';

		$this->load->view('front/index',$this->data);
}

public function nearbydestination(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('nearbydestination');
    $this->data['page_name'] = 'near-by-destination';
    $this->load->view('front/index',$this->data);
    
}
public function covidupdate(){
    $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('covid19update');
    $this->data['page_name'] = 'covid19-update';

		$this->load->view('front/index',$this->data);
}
// -----------------------anz-  END---------------------------------



// public function blog_comment(){
    
//     $comment = $_POST['commentt'];
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $bid = $_POST['bid'];
    
    
//     if($comment != "" && $name != "" && $email != "" && $bid != "")
//     {
//         $this->main->add_comment($comment,$name,$email,$bid);
//         header('location:'.base_url()."contact");
//     }
//     else
//     {
//         //   if (isset($_SERVER["HTTP_REFERER"])) {
//         header("Location: " . $_SERVER["HTTP_REFERER"]);
//     // }
//     }
    
     
// }


// public function packages(){
//     $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('package');
//         $this->data['page_name'] = 'packages';
//         $this->data['package'] 	= $this->main->get_package();
// 		$this->load->view('front/index',$this->data);
// }
// public function blog($slug=null){
//     if($slug==null){
//         $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('blog');
//         $this->data['blogs'] 	= $this->main->get_blog();
//         $this->data['blogss'] 	= $this->main->get_blog_rand();
//         $this->data['page_name'] = 'blog';
//     }else{
//         $bdata = $this->data['blog_details'] 	= $this->main->get_blog_single_by_slug($slug);
//         $this->data['media'] 	= $this->main->get_blog_single_media($bdata[0]['id']);
//         $this->data['blogss'] 	= $this->main->get_blog_rand();
     
//         $aa = [
//             "title" => $bdata[0]['title'],
//             "description" => $bdata[0]['description'],
//             ];
        
//         $this->data['dyn_meta'] = [$aa];
        
//         // echo json_encode([$aa]);
        
//         $this->data['page_name'] = 'blog_details';
//     }
// 	$this->load->view('front/index', $this->data);
// }


// public function yacht($slug=null){
//      if($slug!=null)
//      { 
//             $this->data['page_name'] = 'yatch_details';
//             $this->data['package'] 	= $this->main->get_package();
//             $ydata = $this->data['y_data'] 	= $this->main->get_yatch_single_by_slug($slug);
            
//             log_message("error","anz---222-".json_encode($ydata[0]['id']));
            
//             $this->data['y_photos'] 	= $this->main->get_yatch_photo_single($ydata[0]['id']);
//             $this->data['y_facility'] 	= $this->main->get_yatch_facility_single($ydata[0]['id']);
//             $this->data['y_specification'] 	= $this->main->get_yatch_specific_single($ydata[0]['id']);
            
//             log_message("error","anz----".json_encode($ydada));
            
             
//             $aa = [
//             "title" => $ydata[0]['name'],
//             "description" => $ydata[0]['description'],
//             ];
            
//             $this->data['dyn_meta'] = [$aa];
            
//             // echo json_encode([$aa]);
//      }
        
// 		$this->load->view('front/index',$this->data);
// }




// public function yacht($slug=null){
    
    
//         $this->data['page_name'] = 'yatch_details';
//         $this->data['package'] 	= $this->main->get_package();
//         $ydata = $this->data['y_data'] 	= $this->main->get_yatch_single_by_slug($slug);
        
//         $this->data['y_photos'] 	= $this->main->get_yatch_photo_single($ydata['id']);
//         $this->data['y_facility'] 	= $this->main->get_yatch_facility_single($ydata['id']);
//         $this->data['y_specification'] 	= $this->main->get_yatch_specific_single($ydata['id']);
        
         
//         $aa = [
//         "title" => $ydata[0]['name'],
//         "description" => $ydata[0]['description'],
//         ];
        
//         $this->data['dyn_meta'] = [$aa];
        
//         // echo json_encode([$aa]);
        
    
// 	$this->load->view('front/index', $this->data);
// }




// public function blog_details(){
    
//       $bdata = $this->data['blog_details'] 	= $this->main->get_blog_single($_GET['bid']);
//       $this->data['media'] 	= $this->main->get_blog_single_media($_GET['bid']);
//       $this->data['blogss'] 	= $this->main->get_blog_rand();
     
//     $aa = [
//         "title" => $bdata[0]['title'],
//         "description" => $bdata[0]['description'],
//         ];
        
//         $this->data['dyn_meta'] = [$aa];
        
//         // echo json_encode([$aa]);
        
 
//     $this->data['page_name'] = 'blog_details';
        
// 	$this->load->view('front/index', $this->data);
// }
// public function contact(){
//     $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('contact');
//     $this->data['page_name'] = 'contact';
// 	$this->load->view('front/index', $this->data);
// }

// public function faq(){
//     $this->data['dyn_meta'] = $this->main->get_dynamic_metadata_bypage('faq');
//     $this->data['page_name'] = 'faq';
//     $this->data['faqs'] 	= $this->main->get_faqs();
// 	$this->load->view('front/index', $this->data);
// }



// public function yacht_rent(){
//         $this->data['page_name'] = 'yacht-rent';
// 		$this->load->view('front/index', $this->data);
// }
// public function yacht_tour(){
//         $this->data['page_name'] = 'yacht-tour';
// 		$this->load->view('front/index', $this->data);
// }
// public function sport_fishing(){
    
//     $this->data['page_name'] = 'Sport-fishing';
// 	$this->load->view('front/index', $this->data);
	
// }
// public function dinner_cruise(){
    
//     $this->data['page_name'] = 'dinner-cruise';
// 	$this->load->view('front/index', $this->data);
// }
// public function jetski(){
    
//     $this->data['page_name'] = 'jetski';
// 	$this->load->view('front/index', $this->data);
// }
// ----------------------------anz END--------------------------

	
	

	/**
	 * HOME PAGE
	 */
// 	public function index(){

// 		$this->data['data']['banners'] 				= $this->data_db->banner_get();
// 		$this->data['data']['banners_secondary'] 	= $this->data_db->secondary_banner_get();
// 		$this->data['data']['categories'] 			= $this->data_db->get_categories();
// 		$this->data['data']['category_name'] 		= array_column($this->data['data']['categories'], 'category', 'id');
// 		$this->data['data']['products'] 			= $this->data_db->product_data($this->data_db->get_product_all(), get_user_id());
// 		$this->data['data']['popular_products'] 	= $this->data_db->product_data($this->data_db->popular_item_get(), get_user_id());
// 		$this->data['page_name'] 					= 'home';
// 		$this->load->view('front/home');
// 	}

	/**
	 * PRODUCTS LIST PAGE
	 */
// 	public function products(){
// 		$list_type	= $this->input->get('list');

// 		if($list_type == 'suggested'){
// 			$products 		= $this->data_db->popular_item_get();
// 		}elseif($list_type == 'popular'){
// 			$products 		= $this->data_db->popular_item_get();
// 		}elseif($list_type == 'category' && $this->input->get('category_id')){
// 			$products 		= $this->data_db->get_product_all(['category_id' => $this->input->get('category_id')]);
// 		}elseif($list_type == 'search'){
// 			$this->db->like('product.product', $this->input->get('search_key'));
// 			$products 		= $this->data_db->get_product_all();
// 		}else{
// 			$products 		= $this->data_db->get_product_all();
// 		}

// 		$this->data['data']['categories'] 			= $this->data_db->get_categories();
// 		$this->data['data']['category_name'] 		= array_column($this->data['data']['categories'], 'category', 'id');
// 		$this->data['data']['products'] 			= $this->data_db->product_data($products, get_user_id());
// 		$this->data['data']['total_count'] 			= count($products) ?? 0;
// 		$this->data['data']['per_page'] 			= $this->data['data']['total_count'];
// 		$this->data['page_name'] 					= 'product_list';
// 		$this->load->view('front/index', $this->data);
// 	}
// 	public function product_details(){
// 		if(!is_user()){
// 			set_alert(FLASH_WARNING, "Please login to continue!");
// 			redirect(base_url('?ask_login=1'));
// 		}
// 		$product_id 	= $this->input->get('product_id');
// 		$product		= $this->data_db->get_product_single($product_id);

// 		if(empty($product)){
// 			redirect(base_url('products/'));
// 		}

// 		$this->data['data']['product'] 			= $this->data_db->set_product_data($product);
// 		$this->data['data']['product_specs'] 	= $this->data_db->get_product_specs($product_id);;
// 		$this->data['data']['product_variants'] = $this->data_db->get_product_variant($product_id);

// 		foreach($this->data['data']['product_variants'] as $key => $product_variant){
// 			$this->data['data']['product_variants'][$key] = $this->data_db->set_product_variant_data($product_variant, $this->data['data']['product']['product_image']);
// 		}

// 		$related_products 						= $this->data_db->get_product_all(['category_id' => $this->data['data']['product']['product_id']]);
// 		$this->data['data']['related_products']	= $this->data_db->product_data($related_products, get_user_id());

// 		$this->data['page_name']				= 'product_single';
// //		echo json_encode($this->data['data']['product_variants'] );
// 		$this->load->view('front/index', $this->data);
// 	}
// 	public function cart(){
// 		if(!is_user()){
// 			set_alert(FLASH_WARNING, "Please login to continue!");
// 			redirect(base_url('?ask_login=1'));
// 		}
// 		$this->data['data']['cart'] = $this->data_db->cart_data(get_user_id());
// 		if(count($this->data['data']['cart']['products'])==0){
// 			set_alert(FLASH_WARNING, "Cart is empty!");
// 			redirect(base_url());
// 		}
// 		$this->data['page_name'] 	= 'cart';
// 		$this->load->view('front/index', $this->data);
// 	}
// 	public function checkout(){
// 		if(!is_user()){
// 			set_alert(FLASH_WARNING, "Please login to continue!");
// 			redirect(base_url('?ask_login=1'));
// 		}
// 		$this->data['data']['cart'] 			= $this->data_db->cart_data(get_user_id());
// 		if(count($this->data['data']['cart']['products'])==0){
// 			set_alert(FLASH_WARNING, "Cart is empty!");
// 			redirect(base_url());
// 		}
// 		$this->data['data']['address_list'] 	= $this->data_db->address_data(get_user_id());
// 		$this->data['page_name'] 	= 'checkout';
// 		$this->load->view('front/index', $this->data);
// 	}
// 	public function my_orders(){
// 		if(!is_user()){
// 			set_alert(FLASH_WARNING, "Please login to continue!");
// 			redirect(base_url('?ask_login=1'));
// 		}
// 		$orders 							= $this->data_db->get_orders(get_user_id());
// 		$this->data['data']['my_orders'] 	= $this->data_db->get_orders_list_data($orders);
// 		$this->data['page_name'] 			= 'my_orders';
// 		$this->load->view('front/index', $this->data);
// 	}

// 	public function register(){
// 		redirect(base_url('?ask_login=1'));
// 	}


// 	/**
// 	 * STATIC PAGES
// 	 */
// 	public function about_us(){
// 		$this->data['page_name'] 	= 'page_about';
// 		$this->load->view('front/index', $this->data);
// 	}

// 	public function contact_us(){
// 		$this->data['page_name'] 	= 'page_contact';
// 		$this->load->view('front/index', $this->data);
// 	}

// 	public function privacy(){
// 		$this->data['page_name'] 	= 'page_privacy';
// 		$this->load->view('front/index', $this->data);
// 	}

// 	public function terms(){
// 		$this->data['page_name'] 	= 'page_terms';
// 		$this->load->view('front/index', $this->data);
// 	}

// 	public function faq(){
// 		$this->data['page_name'] 	= 'page_faq';
// 		$this->load->view('front/index', $this->data);
// 	}

// 	public function shipping_policy(){
// 		$this->data['page_name'] 	= 'page_shipping_policy';
// 		$this->load->view('front/index', $this->data);
// 	}

// 	public function cancel_refund_policy(){
// 		$this->data['page_name'] 	= 'page_cancel_refund_policy';
// 		$this->load->view('front/index', $this->data);
// 	}

// 	/**
// 	 * PRODUCTS
// 	 */


	public function login(){
		if($this->input->post('submit') != NULL ){
			$postData = $this->input->post();
			$response = $this->Data_db->login_admin($postData);
			if ($response['status'] == true){
				$this->session->set_userdata(SESSION_USER, $response['message']['username']);
				$this->session->set_userdata(USER_TYPE, USER_ADMIN);
				checkSession(FALSE, USER_ADMIN);
				set_alert(FLASH_SUCCESS, '<b>Welcome back!</b>,<br> Successfully logged in!');
				redirect(base_url('admin/dashboard/'));
			}else{
				$this->data['error'] = $response['message'];
			}
		}

		$this->data[USER_TYPE] = USER_ADMIN;

		$this->load->view('login', $this->data);
	}
    public function logout()
    {
        ta_logout();
    }




}
