<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'libraries/phpqrcode/qrlib.php';

/**
 * Class Admin
 * Author: Adeeb C
 * Date: 2021 July
 * *****************
 * Website: https://adeeb.in
 * Notes: Please do not re-use this code. Respect our work.
 */
class Admin extends Admin_Controller
{
    private $data = [];

    function __construct() {
        parent::__construct();
        ta_session(USER_ADMIN);
        // $this->load->model('data_db');
        // $this->load->model('account_db');
        $this->load->model('main');

    }
    
    
    
// -------------------------------------anz-start-----------------------------------------------------
public function homepage_popup($param1 = '', $param2 = '') {
        $this->data = [];
       if ($param1 == 'edit_dynamic') {
            $this->main->update_popup_data();
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/homepage_popup/'.$this->input->post('product_id')), 'refresh');
        }else {

            $aa = $this->data['popup_data'] 	= $this->main->fet_popup_metadata();
            log_message('error','------anz---'.json_encode($aa));
            $this->data['page_name'] 	= 'homepage_popup';
        }
        $this->load->view('admin/index', $this->data);
    }
// ---------------------
  public function meta_data($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'edit') {
            $this->main->update_meta_data();
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/meta_data/'.$this->input->post('product_id')), 'refresh');
        }else if ($param1 == 'edit_dynamic') {
            $this->main->update_dynamic_meta_data();
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/meta_data/'.$this->input->post('product_id')), 'refresh');
        }else {
        
            $this->data['dynamic_data'] 	= $this->main->fet_dynamic_metadata();
            $this->data['edit_data'] 	= $this->main->get_meta_data();
            $this->data['page_name'] 	= 'meta_data';
        }
        $this->load->view('admin/index', $this->data);
    }
// ---------------------
    public function blog($param1 = '', $param2 = '') {

        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_blog();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/blog/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->update_blog();
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/blog/'.$this->input->post('product_id')), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_blog($param2);
            redirect(base_url('admin/blog/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'blog_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] 	= 'blog_edit';
            $this->data['edit_data'] 	= $this->main->get_blog_single($param2);

        }else{
            $this->data['list_all'] = $this->main->get_blog();
            $this->data['page_name'] 	= 'blog';
        }
        $this->load->view('admin/index', $this->data);
    }
    
     public function blog_media($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_blog_media();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/blog_media/'), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            $this->main->delete_blog_media($param2);
            redirect(base_url('admin/blog_media/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['blogs'] 	= $this->main->get_blog();
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'blog_media_add';
        }else{
            $this->data['all_blogs'] = $this->main->get_blog();
            $this->data['list_all'] = $this->main->get_blog_media();
            $this->data['page_name'] 	= 'blog_media';
        }
        $this->load->view('admin/index', $this->data);
    }
    // ---------------------------------------------------------------
    public function faq($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_faq();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/faq/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->update_faq();
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/faq/'.$this->input->post('product_id')), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_faq($param2);
            redirect(base_url('admin/faq/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'faq_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] 	= 'faq_edit';
            $this->data['edit_data'] 	= $this->main->get_faq_single($param2);

        }else{
            $this->data['list_all'] = $this->main->get_faq();
            $this->data['page_name'] 	= 'faq';
        }
        $this->load->view('admin/index', $this->data);
    }
    // ---------------------------------------------------------------------
    public function package_facility($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_package_facility();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/package_facility/'), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_package_facility($param2);
            redirect(base_url('admin/package_facility/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['package_list'] = $this->main->get_packages();
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'package_facility_add';
        }else{
            $this->data['all_package'] = $this->main->get_packages();
            $this->data['list_all'] = $this->main->get_package_facility();
            $this->data['page_name'] 	= 'package_facility';
        }
        $this->load->view('admin/index', $this->data);
    }
// -------------------------
    public function packages_amenity_value($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_packages_amenity_value();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/packages_amenity_value?pid='.$_POST['package_id'].'&amid='.$_POST['amenity_id']), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_packages_amenity($param2);
            redirect(base_url('admin/packages_amenity_value?pid='.$_POST['package_id'].'&amid='.$_POST['amenity_id']), 'refresh');
        }else{
            $this->data['list_all_a'] = $this->main->get_packages_amenity_value2($_GET['pid'],$_GET['amid']);
            // log_message("error","anz------".$this->db->last_query());
            $this->data['page_name'] 	= 'packages_amenity_value';
        }
        $this->load->view('admin/index', $this->data);
    }
// -------------------------
   public function package_amenity($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_package_amenity();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/package_amenity/'), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_package_amenity($param2);
            redirect(base_url('admin/package_amenity/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['package_list'] = $this->main->get_packages();
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'packages_amenity_add';
        }else{
            $this->data['all_package'] = $this->main->get_packages();
            $this->data['list_all'] = $this->main->get_package_amenity();
            $this->data['page_name'] 	= 'packages_amenity';
        }
        $this->load->view('admin/index', $this->data);
    }
// -------------------------
public function packages($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_packages();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/packages/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->update_packages();
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/packages/'.$this->input->post('product_id')), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_packages($param2);
            redirect(base_url('admin/packages/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'packages_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] 	= 'packages_edit';
            $this->data['edit_data'] 	= $this->main->get_packages_single($param2);
        }else{
            $this->data['list_all'] = $this->main->get_packages();
            $this->data['page_name'] 	= 'packages';
        }
        $this->load->view('admin/index', $this->data);
    }
// -----------------------------------------

    public function rooms_amenity_value($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_rooms_amenity_value();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/rooms_amenity_value?rid='.$_POST['room_id'].'&amid='.$_POST['amenity_id']), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_rooms_amenity($param2);
            redirect(base_url('admin/rooms_amenity_value?rid='.$_POST['room_id'].'&amid='.$_POST['amenity_id']), 'refresh');
        }else{
            $this->data['list_all_a'] = $this->main->get_rooms_amenity_value2($_GET['rid'],$_GET['amid']);
            // log_message("error","anz------".$this->db->last_query());
            $this->data['page_name'] 	= 'rooms_amenity_value';
        }
        $this->load->view('admin/index', $this->data);
    }
// -------------------------
    public function rooms_amenity($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_rooms_amenity();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/rooms_amenity/'), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_rooms_amenity($param2);
            redirect(base_url('admin/rooms_amenity/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['rooms_list'] = $this->main->get_rooms();
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'rooms_amenity_add';
        }else{
            $this->data['all_rooms'] = $this->main->get_rooms();
            $this->data['list_all'] = $this->main->get_rooms_amenity();
            $this->data['page_name'] 	= 'rooms_amenity';
        }
        $this->load->view('admin/index', $this->data);
    }
// -------------------------
    public function rooms_photo($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_rooms_photo();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/rooms_photo/'), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_rooms_photo($param2);
            redirect(base_url('admin/rooms_photo/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['rooms_list'] = $this->main->get_rooms();
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'rooms_photo_add';
        }else{
            $this->data['all_rooms'] = $this->main->get_rooms();
            $this->data['list_all'] = $this->main->get_rooms_photo();
            $this->data['page_name'] 	= 'rooms_photo';
        }
        $this->load->view('admin/index', $this->data);
    }
// -----------------------------------
    public function rooms($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_rooms();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/rooms/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->update_rooms();
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/rooms/'.$this->input->post('product_id')), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_rooms($param2);
            redirect(base_url('admin/rooms/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'rooms_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] 	= 'rooms_edit';
            $this->data['edit_data'] 	= $this->main->get_rooms_single($param2);
        }else{
            $this->data['list_all'] = $this->main->get_rooms();
            $this->data['page_name'] 	= 'rooms';
        }
        $this->load->view('admin/index', $this->data);
    }
// -----------------------------------------
       public function photo_gallery($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_photo_gallery();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/photo_gallery/'), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_photo_gallery($param2);
            redirect(base_url('admin/photo_gallery/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['page_name'] 	= 'photo_gallery_add';
        }else{
            $this->data['list_all'] = $this->main->get_photo_gallery();
            $this->data['page_name'] 	= 'photo_gallery';
        }
        $this->load->view('admin/index', $this->data);
    }
    
    
    
public function video_gallery($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_video_gallery();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/video_gallery/'), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            $this->main->delete_video_gallery($param2);
            redirect(base_url('admin/video_gallery/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['page_name'] 	= 'video_gallery_add';
        }else{
            $this->data['list_all'] = $this->main->get_video_gallery();
            $this->data['page_name'] 	= 'video_gallery';
        }
        $this->load->view('admin/index', $this->data);
    }
 // -------------------------------------anz-END-----------------------------------------------------   
    
    
    
    //INSTAGRAM POST
    
    public function instagram_post($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_instagram_post();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/instagram_post/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->update_instagram_post($param2);
            log_message("error","sdcfd".print_r($this->db->last_query(),true));
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/instagram_post/'), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_instagram_post($param2);
            redirect(base_url('admin/instagram_post/'), 'refresh');
        }elseif ($param1 == 'add_form') {
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'instagram_post_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] 	= 'instagram_post_edit';
            $this->data['edit_data'] 	= $this->main->get_instagram_post_single($param2);
        }else{
            $this->data['list_all'] = $this->main->get_instagram_posts();
            $this->data['page_name'] 	= 'instagram_post';
        }
        $this->load->view('admin/index', $this->data);
    }
    
    
// --------------------------------------------------------------------------------------------------------
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
// -------------------------------------anz-END-----------------------------------------------------
public function home_banner($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_home_banner();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/home_banner/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->update_home_banner();
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/home_banner/'.$this->input->post('product_id')), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_home_banner($param2);
            redirect(base_url('admin/home_banner/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'home_banner_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] 	= 'home_banner_edit';
            $this->data['edit_data'] 	= $this->main->get_home_banner_single($param2);

        }else{
            $this->data['list_all'] = $this->main->get_home_banner();
            $this->data['page_name'] 	= 'home_banner';
        }
        $this->load->view('admin/index', $this->data);
    }

// -------------------------
 public function static_data($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'edit') {
            $this->main->update_static_data();
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/static_data/'.$this->input->post('product_id')), 'refresh');
        }else {
            $this->data['edit_data'] 	= $this->main->get_static_data();
            $this->data['page_name'] 	= 'static_data';
        }
        $this->load->view('admin/index', $this->data);
    }
// ---------------------
//   public function meta_data($param1 = '', $param2 = '') {
//         $this->data = [];
//         if ($param1 == 'edit') {
//             $this->main->update_meta_data();
//             set_alert(FLASH_SUCCESS, 'Updated successfully!');
//             redirect(base_url('admin/meta_data/'.$this->input->post('product_id')), 'refresh');
//         }else if ($param1 == 'edit_dynamic') {
//             $this->main->update_dynamic_meta_data();
//             set_alert(FLASH_SUCCESS, 'Updated successfully!');
//             redirect(base_url('admin/meta_data/'.$this->input->post('product_id')), 'refresh');
//         }else {
        
//             $this->data['dynamic_data'] 	= $this->main->fet_dynamic_metadata();
//             $this->data['edit_data'] 	= $this->main->get_meta_data();
//             $this->data['page_name'] 	= 'meta_data';
//         }
//         $this->load->view('admin/index', $this->data);
//     }
// ------------------------
public function events($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_events();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/events/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->update_events();
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/events/'.$this->input->post('product_id')), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_events($param2);
            redirect(base_url('admin/events/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'events_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] 	= 'events_edit';
            $this->data['edit_data'] 	= $this->main->get_events_single($param2);

        }else{
            $this->data['list_all'] = $this->main->get_events();
            $this->data['page_name'] 	= 'events';
        }
        $this->load->view('admin/index', $this->data);
    }

// -------------------------
   public function package($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_package();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/package/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->update_package();
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/package/'.$this->input->post('product_id')), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_package($param2);
            redirect(base_url('admin/package/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['yatch_list'] = $this->main->get_yatch();
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'package_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['yatch_list'] = $this->main->get_yatch();
            // $this->data['product_id'] 	= $param2;
            $this->data['edit_data'] 	= $this->main->get_package_single($param2);
            
            $this->data['page_name'] 	= 'package_edit';
        }else{
            $this->data['list_all'] = $this->main->get_package();
            $this->data['page_name'] 	= 'package';
        }
        $this->load->view('admin/index', $this->data);
    }
// -------------------------
    public function yatch_facility($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_yatch_facility();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/yatch_facility/'), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_yatch_facility($param2);
            redirect(base_url('admin/yatch_facility/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['yatch_list'] = $this->main->get_yatch();
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'yatch_facility_add';
        }else{
            $this->data['all_yatch'] = $this->main->get_yatch();
            $this->data['list_all'] = $this->main->get_yatch_facility();
            $this->data['page_name'] 	= 'yatch_facility';
        }
        $this->load->view('admin/index', $this->data);
    }
// -------------------------
    public function yatch_specification($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_yatch_specification();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/yatch_specification/'), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_yatch_specification($param2);
            redirect(base_url('admin/yatch_specification/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['yatch_list'] = $this->main->get_yatch();
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'yatch_specification_add';
        }else{
            $this->data['all_yatch'] = $this->main->get_yatch();
            $this->data['list_all'] = $this->main->get_yatch_specification();
            $this->data['page_name'] 	= 'yatch_specification';
        }
        $this->load->view('admin/index', $this->data);
    }
// -------------------------
    public function yatch_photos($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_yatch_photos();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/yatch_photos/'), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_yatch_photos($param2);
            redirect(base_url('admin/yatch_photos/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['yatch_list'] = $this->main->get_yatch();
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'yatch_photos_add';
        }else{
            $this->data['all_yatch'] = $this->main->get_yatch();
            $this->data['list_all'] = $this->main->get_yatch_photos();
            $this->data['page_name'] 	= 'yatch_photos';
        }
        $this->load->view('admin/index', $this->data);
    }
// -------------------------
    public function yatch($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_yatch();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/yatch/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->update_yatch();
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/yatch/'.$this->input->post('product_id')), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            log_message("error",$param2);
            $this->main->delete_yatch($param2);
            redirect(base_url('admin/yatch/'.$this->input->get('id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            // $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'yatch_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] 	= 'yatch_edit';
            $this->data['edit_data'] 	= $this->main->get_yatch_single($param2);
        }else{
            $this->data['list_all'] = $this->main->get_yatch();
            $this->data['page_name'] 	= 'yatch';
        }
        $this->load->view('admin/index', $this->data);
    }
    

    // -------------------------------------anz---END---------------------------------------------------

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


    //DASHBOARD
    public function dashboard() {
        $this->data['page_name'] = 'dashboard';
        $this->load->view('admin/index', $this->data);
    }

    //DASHBOARD
    public function index() {
        redirect('admin/dashboard');
    }

	public function user() {
		$this->data['users'] = $this->data_db->get_users()->result();
		$this->data['page_name'] = 'user_list';
		$this->load->view('admin/index', $this->data);
	}


    public function contact_details() {


        $query = $this->db->get("contact_details");
        $this->data['records'] = $query->result();
        $this->data['page_name'] = 'contact_details';
        $this->load->view('admin/index', $this->data);
    }


    function contact_details_action() {


        $sId = $this->input->post('cid');

        $param['phone'] = $this->input->post('phone');
        $param['address'] = $this->input->post('address');
        $param['about_us'] = $this->input->post('about');
        $param['email'] = $this->input->post('email');
        $param['website'] = $this->input->post('url');
        $param['instagram'] = $this->input->post('insta');
        $param['fb'] = $this->input->post('fb');
        $param['twitter'] = $this->input->post('twitter');
        $param['whatsapp_booking'] = $this->input->post('whatsapp');


        if (empty($sId)) {


            if ($this->main->insert($param, "contact_details")) {
                set_alert(FLASH_SUCCESS, "Contact Details Added");
                redirect(site_url('admin/contact_details'));
            } else {
                set_alert(FLASH_ERROR, 'Failed to add Contact Details');
            }
        } else {


            if ($this->main->update($param, 'contact_details', ['id' => $sId])) {
                set_alert(FLASH_SUCCESS, "Contact Details Edited");
                redirect(site_url('admin/contact_details'));
            } else {
                set_alert(FLASH_ERROR, 'Failed to edit Contact Details');
            }

        }


    }


    public function distributor() {


        $this->data['records'] = $this->main->getDistributors();
        $this->data['page_name'] = 'distributor_list';
        $this->load->view('admin/index', $this->data);
    }

    public function add_distributor($id = '') {


        $query = $this->db->get("panchayath");
        $this->data['panchayath'] = $query->result();

        //$this->data['panchayath']=$this->main->getDetailedData('*','panchayath',array('type'=>'panchayath'));


        if ($id != '') {

            $this->data['records'] = $this->main->getDistributorDetails($id);


        }


        $this->data['page_name'] = 'add_distributor';
        $this->load->view('admin/index', $this->data);


    }

    function distributor_action() {

        $this->load->library('form_validation');


        $this->form_validation->set_rules('distributor', 'Distributor', 'required');
        $this->form_validation->set_rules('panchayath', 'Panchayath', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');


        if (!$this->form_validation->run()) {


            $errors = $this->form_validation->error_array();
            $res = ["res" => 0, "errors" => $errors];


        } else {


            $sId = $this->input->post('cid');

            $param['name'] = $this->input->post('distributor');
            $param['panchayath_id'] = $this->input->post('panchayath');
            $param['phone'] = $this->input->post('phone');
            $param['role_id'] = '2';


            $phone = $this->input->post('phone');


            if (empty($sId)) {


                if ($this->main->check_phone_duplicate($phone) == false) {

                    if ($this->main->insert($param, "users")) {
                        $res = ["res" => 1, "msg" => 'Panchayath Head Added'];
                    } else {
                        $res = ["res" => 0, "msg" => 'Failed to add Panchayath Head'];
                    }
                } else {
                    $res = ["res" => 0, "msg" => 'Phone no already exist'];
                }
            } else {


                if ($this->main->check_phone_duplicate($phone, $sId) == false) {


                    if ($this->main->update($param, 'users', ['id' => $sId])) {
                        $res = ["res" => 2, "msg" => 'Panchayath Head Edited'];
                    } else {
                        $res = ["res" => 0, "msg" => 'Failed to edit Panchayath Head'];
                    }
                } else {
                    $res = ["res" => 0, "msg" => 'Phone no already exist'];
                }

            }


        }
        echo json_encode($res);
    }

    function distributor_delete($id) {


        if (!empty($id)) {

            if ($this->main->delete('users', ['id' => $id])) {
                set_alert(FLASH_SUCCESS, "Panchayath Head Deleted");

                redirect(site_url('admin/distributor'));
            } else {
                set_alert(FLASH_ERROR, 'Failed to delete Panchayath Head');
            }
        } else
            $res = ["res" => 0, 'msg' => 'Id not found'];
        echo json_encode($res);
    }

    public function ward() {


        $this->data['records'] = $this->main->getWard();
        $this->data['page_name'] = 'ward_list';
        $this->load->view('admin/index', $this->data);
    }

    public function add_ward($id = '') {


        $query = $this->db->get("panchayath");
        $this->data['panchayath'] = $query->result();

        //$this->data['panchayath']=$this->main->getDetailedData('*','panchayath',array('type'=>'panchayath'));


        if ($id != '') {

            $this->data['records'] = $this->main->getWardDetails($id);


        }


        $this->data['page_name'] = 'add_ward';
        $this->load->view('admin/index', $this->data);


    }

    public function ajax_get_ward_by_panchayath($panchayath_id = "") {
        $wards = $this->main->get_ward(['panchayath_id' => $panchayath_id]);
        echo "<option value=\"0\">All ward</option>";
        foreach ($wards as $ward) {
            echo "<option value=\"{$ward['id']}\">{$ward['ward']}</option>";
        }

    }

    function ward_action() {

        $this->load->library('form_validation');


        $this->form_validation->set_rules('ward', 'Ward', 'required');
        $this->form_validation->set_rules('panchayath', 'Panchayath', 'required');


        if (!$this->form_validation->run()) {


            $errors = $this->form_validation->error_array();
            $res = ["res" => 0, "errors" => $errors];


        } else {


            $sId = $this->input->post('cid');

            $param['ward'] = $this->input->post('ward');
            $param['panchayath_id'] = $this->input->post('panchayath');


            if (empty($sId)) {


                if ($this->main->insert($param, "ward"))
                    $res = ["res" => 1, "msg" => 'Ward Added'];
                else
                    $res = ["res" => 0, "msg" => 'Failed to add Ward'];
            } else {


                if ($this->main->update($param, 'ward', ['id' => $sId]))
                    $res = ["res" => 2, "msg" => 'Ward Edited'];
                else
                    $res = ["res" => 0, "msg" => 'Failed to edit Ward'];

            }


        }
        echo json_encode($res);
    }

    function ward_delete($id) {


        if (!empty($id)) {

            if ($this->main->delete('ward', ['id' => $id])) {
                set_alert(FLASH_SUCCESS, "Ward Deleted");

                redirect(site_url('admin/ward'));
            } else {
                set_alert(FLASH_ERROR, 'Failed to delete ward');
            }
        } else
            $res = ["res" => 0, 'msg' => 'Id not found'];
        echo json_encode($res);
    }




    public function add_user($id = '') {


        $this->data['panchayath'] = $this->main->getDetailedData('*', 'panchayath', ['type' => 'panchayath']);


        if ($id != '') {

            $this->data['records'] = $this->main->getUserDetails($id);


        }


        $this->data['page_name'] = 'add_user';
        $this->load->view('admin/index', $this->data);


    }

    function user_action() {

        $this->load->library('form_validation');


        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
        $this->form_validation->set_rules('ward', 'ward', 'required');
        $this->form_validation->set_rules('panchayath', 'Panchayath', 'required');


        if (!$this->form_validation->run()) {


            $errors = $this->form_validation->error_array();
            $res = ["res" => 0, "errors" => $errors];


        } else {


            $sId = $this->input->post('cid');
            $param['name'] = $this->input->post('name');
            $param['ward_id'] = $this->input->post('ward');
            $param['phone'] = $this->input->post('phone');
            $param['panchayath_id'] = $this->input->post('panchayath');
            $param['role_id'] = '4';
            $phone = $this->input->post('phone');


            if (empty($sId)) {
                if ($this->main->check_phone_duplicate($phone) == false) {

                    if ($this->main->insert($param, "users")) {
                        $res = ["res" => 1, "msg" => 'User Added'];
                    } else {
                        $res = ["res" => 0, "msg" => 'Failed to add User'];
                    }
                } else {
                    $res = ["res" => 0, "msg" => 'Phone no already existing'];
                }
            } else {

                if ($this->main->check_phone_duplicate($phone, $sId) == false) {


                    if ($this->main->update($param, 'users', ['id' => $sId])) {
                        $res = ["res" => 2, "msg" => 'User Edited'];
                    } else {
                        $res = ["res" => 0, "msg" => 'Failed to edit User'];
                    }

                } else {
                    $res = ["res" => 0, "msg" => 'Phone no already existing'];
                }


            }
            echo json_encode($res);
        }
    }

    function user_delete($id) {


        if (!empty($id)) {

            if ($this->main->delete('users', ['id' => $id])) {
                set_alert(FLASH_SUCCESS, "user Deleted");

                redirect(site_url('admin/user'));
            } else {
                set_alert(FLASH_ERROR, 'Failed to delete user');
            }
        } else
            $res = ["res" => 0, 'msg' => 'Id not found'];


    }

    // public function category() {
    //     $query = $this->db->get("category");
    //     $this->data['records'] = $query->result();
    //     $this->data['page_name'] = 'category_list';
    //     $this->load->view('admin/index', $this->data);
    // }

    public function add_category($id = '') {


        if ($id != '') {

            $this->data['records'] = $this->main->getDetailedData('*', 'category', ['id' => $id]);

        }
        $this->data['page_name'] = 'add_category';
        $this->load->view('admin/index', $this->data);


    }

    function category_action() {

        $this->load->library('form_validation');


        $this->form_validation->set_rules('category', 'Category Name', 'required');
        if (!$this->form_validation->run()) {


            $errors = $this->form_validation->error_array();
            $res = ["res" => 0, "errors" => $errors];


        } else {


            $sId = $this->input->post('cid');

            $param['category'] = $this->input->post('category');


            if (empty($sId)) {


                if ($this->main->insert($param, "category"))
                    $res = ["res" => 1, "msg" => 'Category Added'];
                else
                    $res = ["res" => 0, "msg" => 'Failed to add category'];
            } else {


                if ($this->main->update($param, 'category', ['id' => $sId]))
                    $res = ["res" => 2, "msg" => 'Category Edited'];
                else
                    $res = ["res" => 0, "msg" => 'Failed to edit Category'];

            }


        }
        echo json_encode($res);
    }

    function category_delete($id) {


        if (!empty($id)) {

            if ($this->main->delete('category', ['id' => $id])) {
                set_alert(FLASH_SUCCESS, "Category Deleted");

                redirect(site_url('admin/category'));
            } else {
                set_alert(FLASH_ERROR, 'Failed to delete category');
            }
        } else
            $res = ["res" => 0, 'msg' => 'Id not found'];
        echo json_encode($res);
    }

    // public function product() {
    //     $this->data['records'] = $this->main->getProduct();
    //     $this->data['page_name'] = 'product_list';
    //     $this->load->view('admin/index', $this->data);
    // }

    public function product_add($id = '') {
        if($this->input->post()){
            if ($this->main->add_product()) {
                set_alert(FLASH_SUCCESS, "Item added successfully");
            }
            redirect(site_url('admin/product'), 'refresh');
        }
        $this->data['category'] = $this->main->get_categories();
        $this->data['page_name'] = 'product_add';
        $this->load->view('admin/index', $this->data);
    }
    
   
    function product_delete($id) {


        if (!empty($id)) {

            if ($this->main->delete('product', ['id' => $id])) {
                set_alert(FLASH_SUCCESS, "Product Deleted");

                redirect(site_url('admin/product'));
            } else {
                set_alert(FLASH_ERROR, 'Failed to delete product');
            }
        } else
            $res = ["res" => 0, 'msg' => 'Id not found'];
        echo json_encode($res);
    }

    function product_add_action() {
        if ($this->main->AddProduct()) {
            set_alert(FLASH_SUCCESS, "Item Added");
        }
        redirect(site_url('admin/product'), 'refresh');
    }
    
    /**
     * Category
     */
    public function category($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_category();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/category/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->edit_category($param2);
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/category/'), 'refresh');
        }elseif ($param1 == 'delete') {
            $this->main->delete_category($param2);
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            redirect(base_url('admin/category/'), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['page_name'] = 'category_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] = 'category_edit';
            $this->data['edit_data'] = $this->main->get_category_single($param2);
        }else{
            $this->data['category_list'] 	= $this->main->get_category_all();
            $this->data['page_name'] 		= 'category_list';
        }
        $this->load->view('admin/index', $this->data);
    }
    

    /**
     * Products
     */
    public function product($param1 = '', $param2 = '') {
        $this->data = [];
		$this->data['category'] 	= array_column($this->main->get_categories(), 'category', 'id');
		$this->data['taxes'] = $this->main->get_taxes()->result_array();
        if ($param1 == 'add') {
            $this->main->add_product();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/product/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->edit_product($param2);
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/product/'), 'refresh');
        }elseif ($param1 == 'delete') {
            $this->main->delete_product($param2);
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            redirect(base_url('admin/product/'), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['page_name']	= 'product_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] 	= 'product_edit';
            $this->data['edit_data'] 	= $this->main->get_product_single($param2);
            $this->data['product_variant_price'] = [];
        }else{
            $this->data['product_list'] = $this->main->get_product_all($param1);
            $this->data['page_name'] 	= 'product_list';
        }
        $this->load->view('admin/index', $this->data);
    }

    /**
     * Product variant
     */
    public function product_variant($param1 = '', $param2 = '') {

        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_product_variant();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/product_variant/'.$this->input->post('product_id')), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->edit_product_variant($param2);
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/product_variant/'.$this->input->post('product_id')), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            $this->main->delete_product_variant($param2);
            redirect(base_url('admin/product_variant/'.$this->input->get('product_id')), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['product_id'] 	= $param2;
            $this->data['page_name'] 	= 'product_variant_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] 	= 'product_variant_edit';
            $this->data['edit_data'] 	= $this->main->get_product_variant_single($param2);
			$this->data['product'] 		= $this->main->get_product_single($this->data['edit_data']['product_id']);

		}else{
			$this->data['product'] 		= $this->main->get_product_single($param1);
            $this->data['page_name'] 	= 'product_variant';
            $this->data['list_all'] 	= $this->main->get_product_variant_by_product_id($param1);
        }
        $this->load->view('admin/index', $this->data);
    }

    /**
     * Coupon code
     */
    public function coupon_code($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            if($this->main->check_coupon_code_duplicate($this->input->post('coupon_code'))){
                set_alert(FLASH_ERROR, 'Coupon code already exists!');
            }else{
                $this->main->add_coupon_code();
                set_alert(FLASH_SUCCESS, 'Added successfully!');
            }
            redirect(base_url('admin/coupon_code/'), 'refresh');
        }elseif ($param1 == 'edit') {
            if($this->main->check_coupon_code_duplicate($this->input->post('coupon_code'), $param2)){
                set_alert(FLASH_ERROR, 'Coupon code already exists!');
            }else{
                $this->main->edit_coupon_code($param2);
                set_alert(FLASH_SUCCESS, 'Updated successfully!');
            }
            redirect(base_url('admin/coupon_code/'), 'refresh');
        }elseif ($param1 == 'delete') {
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            $this->main->delete_coupon_code($param2);
            redirect(base_url('admin/coupon_code/'), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['page_name'] = 'coupon_code_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] = 'coupon_code_edit';
            $this->data['edit_data'] = $this->main->get_coupon_code_single($param2);
        }else{
            $this->data['page_name'] = 'coupon_code';
            $this->data['users']    = $this->main->getUsers();
            $this->data['list_all'] = $this->main->get_coupon_code();
        }
        $this->load->view('admin/index', $this->data);
    }

    /**
     * TIME SLOT
     */
    /**
     * Product variant
     */






    public function recipe() {


        $query = $this->db->get("recipe");
        $this->data['records'] = $query->result();
        $this->data['page_name'] = 'recipe_list';
        $this->load->view('admin/index', $this->data);
    }

    public function add_recipe($id = '') {


        if ($id != '') {

            $this->data['records'] = $this->main->getDetailedData('*', 'recipe', ['id' => $id]);
        }


        $this->data['page_name'] = 'add_recipe';
        $this->load->view('admin/index', $this->data);


    }

    function recipe_delete($id) {


        if (!empty($id)) {

            if ($this->main->delete('recipe', ['id' => $id])) {
                set_alert(FLASH_SUCCESS, "Recipe Deleted");

                redirect(site_url('admin/recipe'));
            } else {
                set_alert(FLASH_ERROR, 'Failed to delete recipe');
            }
        } else
            set_alert(FLASH_ERROR, 'Id not found');

    }

    function recipe_add_action() {
        if ($this->main->AddRecipe()) {
            set_alert(FLASH_SUCCESS, "Recipe Added");
        }
        redirect(site_url('admin/recipe'), 'refresh');
    }


    public function our_videos() {


        $query = $this->db->get("our_videos");
        $this->data['records'] = $query->result();
        $this->data['page_name'] = 'video_list';
        $this->load->view('admin/index', $this->data);
    }

    public function add_video($id = '') {


        if ($id != '') {

            $this->data['records'] = $this->main->getDetailedData('*', 'our_videos', ['id' => $id]);
        }


        $this->data['page_name'] = 'add_video';
        $this->load->view('admin/index', $this->data);


    }

    function video_delete($id) {


        if (!empty($id)) {

            if ($this->main->delete('our_videos', ['id' => $id])) {
                set_alert(FLASH_SUCCESS, "Video Deleted");

                redirect(site_url('admin/our_videos'));
            } else {
                set_alert(FLASH_ERROR, 'Failed to delete video');
            }
        } else
            set_alert(FLASH_ERROR, 'Id not found');

    }

    function video_add_action() {
        if ($this->main->AddVideo()) {
            set_alert(FLASH_SUCCESS, "Video Added");

        }

        redirect(site_url('admin/our_videos'), 'refresh');
    }


    public function banner() {


        // $query = $this->db->get("banner"); 
        $this->data['records'] = $this->main->getDetailedData('*', 'banner');
        $this->data['page_name'] = 'banner_list';
        $this->load->view('admin/index', $this->data);
    }

    public function add_banner() {

        $this->data['page_name'] = 'add_banner';
        $this->load->view('admin/index', $this->data);


    }

    public function edit_status($id = '') {


        if ($this->main->update(['status' => '0'], 'banner', ['id' => $id])) {
            set_alert(FLASH_SUCCESS, "Deactivated");
        }
        redirect(site_url('admin/banner'), 'refresh');


    }
    
    public function edit_status_active($id = '') {


        if ($this->main->update(['status' => '1'], 'banner', ['id' => $id])) {
            set_alert(FLASH_SUCCESS, "Activated");
        }
        redirect(site_url('admin/banner'), 'refresh');


    }


    public function edit_banner($id = '') {


        if ($id != '') {

            $this->data['records'] = $this->main->getDetailedData('*', 'banner', ['id' => $id]);

        }


        $this->data['page_name'] = 'edit_banner';
        $this->load->view('admin/index', $this->data);


    }

    function banner_add_action() {
        if ($this->main->AddBanner()) {
            set_alert(FLASH_SUCCESS, "Banner Added");
        }
        redirect(site_url('admin/banner'), 'refresh');
    }

    function banner_edit_action($id) {
        if ($this->main->EditBanner($id)) {
            set_alert(FLASH_SUCCESS, "Banner Edited");
        }
        redirect(site_url('admin/banner'), 'refresh');
    }

    function banner_delete($id) {


        if (!empty($id)) {

            if ($this->main->delete('banner', ['id' => $id])) {
                set_alert(FLASH_SUCCESS, "Banner Deleted");

                redirect(site_url('admin/banner'));
            } else {
                set_alert(FLASH_ERROR, 'Failed to delete banner');
            }
        } else
            $res = ["res" => 0, 'msg' => 'Id not found'];
        echo json_encode($res);
    }


    public function order() {
        $date = date('Y-m-d');
		redirect(site_url("admin/order_filter_report/?filter_date={$date}"));
        $this->data['records'] = $this->main->getOrderDetails($date);
        $this->data['page_name'] = 'order_list';
        $this->load->view('admin/index', $this->data);
    }



    public function order_pending() {

        $this->data['records'] = $this->main->getNewOrderDetails();
        $this->data['page_name'] = 'order_list';
        $this->load->view('admin/index', $this->data);
    }

    public function order_filter_report() {
        $this->data['from_date'] 	= $this->input->get('from_date') ?? date('Y-m-d');
        $this->data['to_date'] 	= $this->input->get('to_date') ?? date('Y-m-d');
        $this->data['time_slot_id'] 	= $this->input->get('time_slot_id') ?? 0;

		$this->data['time_slots'] = $this->data_db->get_time_slot_text();

        $generate_qrcode 		= $this->input->get('generate_qrcode') ?? 0;
        $change_order_status 	= $this->input->get('change_order_status') ?? 0;
		$orders_items_sticker 	= $this->input->get('orders_items_sticker') ?? 0;

        if($generate_qrcode==1){
            redirect(base_url("admin/orders_bill_generate/?".$_SERVER['QUERY_STRING']));
//            set_alert(FLASH_SUCCESS, 'Orders processed successfully!');
        }
		if($orders_items_sticker==1){
             redirect(base_url("admin/orders_items_sticker/?".$_SERVER['QUERY_STRING']));
 //            set_alert(FLASH_SUCCESS, 'Orders processed successfully!');
         }
        if($change_order_status == 1){
            $from_status = $this->input->get('from_status');
            $to_status = $this->input->get('to_status');
            $this->main->change_order_status_by_date($this->data['filter_date'], $to_status, $from_status, $this->data['time_slot_id']);
            set_alert(FLASH_SUCCESS, 'Orders status changed successfully!');
            redirect(base_url("admin/order_filter_report/".$_SERVER['QUERY_STRING']));
//   
        }

        if($this->input->post('delivery_user_id')){
            $this->db->where('id', $this->input->post('order_id'));
            $this->db->update('orders', ['delivery_user_id' => $this->input->post('delivery_user_id')]);
        }

        $this->data['records']['pending'] = $this->main->getOrderDetails($this->data['from_date'], $this->data['to_date'], 'pending', $this->data['time_slot_id']);
        $this->data['records']['processing'] = $this->main->getOrderDetails($this->data['from_date'], $this->data['to_date'], 'processing', $this->data['time_slot_id']);
        $this->data['records']['delivered'] = $this->main->getOrderDetails($this->data['from_date'], $this->data['to_date'], 'delivered', $this->data['time_slot_id']);
        $this->data['records']['cancelled'] = $this->main->getOrderDetails($this->data['from_date'], $this->data['to_date'], 'cancelled', $this->data['time_slot_id']);
        $this->data['page_name'] = 'order_list';
        $this->load->view('admin/index', $this->data);
    }

    public function orders_qr_code(){
        $this->data['filter_date'] = $this->input->get('filter_date') ?? date('Y-m-d');

        $orders = $this->main->getOrderDetails($this->data['filter_date'], 'pending');
        $this->main->change_order_status_by_date($this->data['filter_date'], 'processing', 'pending');


        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => [100, 75],
            'margin_left' => 4,
            'margin_right' => 4,
            'margin_top' => 1,
            'margin_bottom' => 2,
        ]);

        foreach ($orders as $order){
            $order->qr_code = base_url($this->generate_qrcode($order->order_no, 'orders'));
            
            $items = $this->data_db->get_order_items($order->order_id);
            $items_count = count($items);
            foreach ($items as $key => $item) {
                $weight = $this->data_db->get_product_variant_price($item['product_id'], $item['variant_id']);
                $net_weight = $item['quantity_no'] . ' x '.$weight['net_weight'].'gm';
                $gross_weight = $item['quantity_no'] . ' x '.$weight['gross_weight'].'gm';
                $weight = '(Gross weight: ' . $gross_weight.' & Net weight: '.$net_weight.')';
                $order->order_items[]= $item['quantity_no'] . ' x ' . $item['product']." ({$item['product_variant_title']}) ".$weight;
//                if($key+1!=$items_count){ $order->order_items .= ', ';}
            }
            $order->payment_method = $order->payment_method==1 ? 'PAID' : 'COD';
            $array['item'] = $order;
            $mpdf->AddPage();
            $html = $this->load->view('pdf/pdf_order_qr_code',$array,true);
            $mpdf->WriteHTML($html);
        }

//        $mpdf->Output($pdf_url,'F');
        $mpdf->Output();
    }

	public function orders_bill_generate(){
        $this->data['from_date'] 		= $this->input->get('from_date') ?? date('Y-m-d');
        $this->data['to_date'] 		= $this->input->get('to_date') ?? date('Y-m-d');
		$this->data['time_slot_id'] 	= $this->input->get('time_slot_id') ?? 0;


		$orders = $this->main->getOrderDetails($this->data['from_date'],$this->data['to_date'], 'processing', $this->data['time_slot_id']);
        // $this->main->change_order_status_by_date($this->data['filter_date'], 'processing', 'pending');


        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => [80, 290],
            'margin_left' => 2,
            'margin_right' => 10,
            'margin_top' => 0,
            'margin_bottom' => 4,
        ]);

        foreach ($orders as $order){
            $order->qr_code = base_url($this->generate_qrcode($order->order_no, 'orders'));

            $items = $this->data_db->get_order_items($order->order_id);
            $items_count = count($items);
            foreach ($items as $key => $item) {
				$weight 		= $this->data_db->get_product_variant_price($item['product_id'], $item['variant_id']);
				$net_weight 	= $item['quantity_no'] . ' x '.$weight['net_weight'].'gm';
				$gross_weight 	= $item['quantity_no'] . ' x '.$weight['gross_weight'].'gm';
				$weight 		= 'Gross weight: ' . $gross_weight.' & Net weight: '.$net_weight;

				$order_item = [];
				$order_item['item_title'] 		= $item['product']." - {$item['product_variant_title']}";
				$order_item['weight'] 			= $weight;
				$order_item['quantity_no'] 		= $item['quantity_no'];
				$order_item['product_price'] 	= $item['product_price'];
				$order_item['total_amount'] 	= $item['total_amount'];



                $order->order_items[]= $order_item;
            }
            $order->payment_method = $order->payment_method==1 ? 'PAID' : 'COD';
            $array['item'] = $order;
            $mpdf->AddPage();
            $html = $this->load->view('pdf/pdf_orders_bill',$array,true);
            $mpdf->WriteHTML($html);
        }

//        $mpdf->Output($pdf_url,'F');
        $mpdf->Output();
    }

	public function orders_form_generate(){
		$time_slots = $this->data_db->get_time_slot_text();

        $orders = $this->main->single_getOrderDetails($this->input->get('order_id'));
		$order_status = $this->db->get_where('orders', ['id' => $this->input->get('order_id')])->row()->order_status;
		if($order_status=='pending'){
			$this->data_db->change_order_status($this->input->get('order_id'), 'processing');
		}


        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => [80, 160],
            'margin_left' => 2,
            'margin_right' => 10,
            'margin_top' => 0,
            'margin_bottom' => 4,
        ]);

        foreach ($orders as $order){

            $items = $this->data_db->get_order_items($order->order_id);
            $items_count = count($items);
            foreach ($items as $key => $item) {
				$weight 		= $this->data_db->get_product_variant_price($item['product_id'], $item['variant_id']);
				$net_weight 	= $item['quantity_no'] . ' x '.$weight['net_weight'].'gm';
				$gross_weight 	= $item['quantity_no'] . ' x '.$weight['gross_weight'].'gm';
				$weight 		= 'Gross weight: ' . $gross_weight.' & Net weight: '.$net_weight;

				$order_item = [];
				$order_item['item_title'] 		= $item['product']." - {$item['product_variant_title']}";
				$order_item['weight'] 			= $weight;
				$order_item['quantity_no'] 		= $item['quantity_no'];
				$order_item['product_price'] 	= $item['product_price'];
				$order_item['total_amount'] 	= $item['total_amount'];



                $order->order_items[]= $order_item;
            }
            $order->payment_method = $order->payment_method==1 ? 'PAID' : 'COD';
            $array['item'] = $order;
			$array['time_slot'] = $time_slots[$order->time_slot_id];
            $mpdf->AddPage();
            $html = $this->load->view('pdf/pdf_order_form',$array,true);
            $mpdf->WriteHTML($html);
        }

//        $mpdf->Output($pdf_url,'F');
        $mpdf->Output();
    }

	public function orders_items_sticker(){

		if($this->input->get('order_id') > 0){
			$orders = $this->main->single_getOrderDetails($this->input->get('order_id'));
		}else{
			$this->data['time_slot_id'] 	= $this->input->get('time_slot_id') ?? 0;

			$this->data['from_date'] = $this->input->get('from_date') ?? date('Y-m-d');
			$this->data['to_date'] = $this->input->get('to_date') ?? date('Y-m-d');

			$orders = $this->main->getOrderDetails($this->data['from_date'],$this->data['to_date'], 'pending', $this->data['time_slot_id']);
		}
//		$this->main->change_order_status_by_date($this->data['filter_date'], 'processing', 'pending');


		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [58, 38],
			'margin_left' => 5,
			'margin_right' => 4,
			'margin_top' => 5,
			'margin_bottom' => 5,
		]);

		foreach ($orders as $key1 => $order){

			$items = $this->data_db->get_order_items($order->order_id);
			foreach ($items as $key => $item) {
				if($key>2){continue;}
				$weight 	= $this->data_db->get_product_variant_price($item['product_id'], $item['variant_id']);

				$net_weight 	= $item['quantity_no'] . ' x '.$weight['net_weight'].'gm';
				$gross_weight 	= $item['quantity_no'] . ' x '.$weight['gross_weight'].'gm';
				$weight 		= '(Gross weight: ' . $gross_weight.' & Net weight: '.$net_weight.')';

				$array['net_weight'] 	= $net_weight;
				$array['gross_weight'] 	= $gross_weight;
				$array['weight'] 		= $weight;
				$array['order_no'] 		= $order->order_no;
				$array['item_title'] 	= $item['product']." ({$item['product_variant_title']}) ";

				$mpdf->AddPage();
				$html = $this->load->view('pdf/pdf_order_items_sticker', $array, true);
				$mpdf->WriteHTML($html);
			}
// 			$mpdf->WriteHTML('');
// 			$mpdf->AddPage();
            
		}

//        $mpdf->Output($pdf_url,'F');
		$mpdf->Output();
	}


    public function order_details() {
        $id = $this->input->post('id');
        if (!empty($id)) {

            $cat = $this->main->GetOrderItemDetails($id);


            if (!empty($cat)) {

                print('<table class="table table-stripped singlesearch" id="singlesearch">');
                print('<tr>');
                print('<td>Product</td>');
                print('<td>Quantity</td>');
                print('<td>Unit</td>');
                print('<td>Product Price</td>');
                print('<td>Total Amount</td>');
                print('</tr>');
                foreach ($cat as $r) {
                    print('<tr>');
                    print('<td>' . $r->product . ' (' . $r->title . ')' .  '</td>');
                    print('<td>' . $r->quantity_no . '</td>');
                    print('<td>' . $r->unit_text . '</td>');
                    print('<td>' . $r->product_price . '</td>');
                    print('<td>' . $r->total_amount . '</td>');
                    print('</tr>');
                }

                print('</tr>');
            }
        }
    }

    public function change_order_status() {
        $id = $_GET["id"];
        $value = $_GET["val"];
		$this->data_db->change_order_status($id, $value);
    }

    public function panchayath_report() {

        $query = $this->db->get("panchayath");
        $this->data['panchayath'] = $query->result();
        $this->data['page_name'] = 'panchayath_report';
        $this->load->view('admin/index', $this->data);

    }


    public function ajax_get_head_by_panchayath($panchayath_id = "") {
        $records = $this->main->ajax_get_head_by_panchayath($panchayath_id);
        echo "<thead><tr>";
        echo "<th>No</th><th>Name</th><th>Phone</th><th>Panchayath</th><th>Ward</th><th>Details</th></tr></thead><tbody>";
        $i = 1;
        foreach ($records as $index => $r) {


            echo "<tr><td>$i</td>";
            echo "<td>$r->name</td>";
            echo "<td>$r->phone</td>";
            echo "<td>$r->panchayath_id</td>";
            echo "<td>$r->ward_id</td>";
            echo "<td><a href='".base_url('admin/panchayath_head_report_details/'.$r->user_id)."' class='btn btn-primary'>Details</a> </td></tr>";
            $i = $i + 1;
        }
        echo "</tbody>";

    }

    public function ward_report($id = "") {

        $query = $this->db->get("panchayath");
        $this->data['panchayath'] = $query->result();
        $this->data['page_name'] = 'ward_report';
        $this->load->view('admin/index', $this->data);

    }


    public function ajax_get_ward($panchayath_id = "") {
        $records = $this->main->getDetailedData('*', 'ward', ['panchayath_id' => $panchayath_id]);
        //$records=$this->main->getWardReport($panchayath_id);
        echo "<thead><tr>";
        echo "<th>No</th><th>Ward</th><th>DDP</th><th></th></tr></thead><tbody>";
        $i = 1;
        foreach ($records as $index => $r) {
            $id = $r->id;
            $rs = $this->main->getWardReport($panchayath_id, $id);

            echo "<tr><td>$i</td>";
            echo "<td>$r->ward</td>";
            echo "<td>$rs->name</td>";
            echo "<td><a href='".base_url('admin/ward_order_details/'.$id)."' class='btn btn-primary'>Details</a></td>";
            $i = $i + 1;
        }
        echo "</tbody>";

    }


    public function ddp_report() {

        $query = $this->db->get("panchayath");
        $this->data['panchayath'] = $query->result();
        $id = $this->input->get('panchayath');
        $ward = $this->input->get('ward');
        $this->data['records'] = $this->main->getDDPReport($id, $ward);
        $this->data['page_name'] = 'ddp_report';
        $this->load->view('admin/index', $this->data);

    }


    public function user_report() {

        $query = $this->db->get("panchayath");
        $this->data['panchayath'] = $query->result();
        $id = $this->input->post('panchayath');
        $ward = $this->input->post('ward');
        $this->data['records'] = $this->main->getUserReport($id, $ward);
        $this->data['page_name'] = 'user_report';
        $this->load->view('admin/index', $this->data);

    }


    //NOTIFICATIONS
    public function notification($param1 = "", $param2 = "") {

        if ($param1 == 'notify') {


            $this->db->select('notification_token')
                ->from('users');


            $users = $this->db->get()->result_array();


            $token = [];
            $token = array_column($users, 'notification_token');

            $data["title"] = $this->input->post('title');
            $data["description"] = $this->input->post('description');

            $this->db->insert("notification", $data);

            send_push_notification($this->input->post('title'), $this->input->post('description'), $token);

            redirect(site_url('admin/notification'), 'refresh');
        }

        if ($param1 === 'delete') {
            $this->main->delete_notification($param2);
            redirect(site_url('admin/notification'), 'refresh');
        }
        $page_data['page_name'] = 'notification';
        $page_data['page_title'] = "Notification";
        $page_data['notifications'] = $this->main->get_notifications();
        $this->load->view('admin/index', $page_data);

    }


    public function notification_form($param1 = "") {
        // if ($this->session->userdata('admin_login') != true) {
        //   redirect(site_url('login'), 'refresh');
        // }

        if ($param1 == 'add_notification') {
            $page_data['page_name'] = 'notification_add';
            $this->load->view('admin/index', $page_data);

        } elseif ($param1 == 'edit_notification') {
            $page_data['page_name'] = 'notification_edit';
            $page_data['page_title'] = get_phrase('edit_notification');
            $this->load->view('admin/index', $page_data);
        }
    }









    /*
     * ################ ADEEB ####################
     */

	public function purchase($param1 = '', $param2 = '') {
		$this->data['categories'] = $this->main->get_categories(['id', 'category']);
		$this->data['suppliers_list'] = $this->main->get_suppliers()->result_array();

		if ($param1 == 'add') {
			if ($this->input->post()) {
				$postData = $this->input->post();
				$response = $this->main->create_purchase($postData);
				if ($response['status'] == true) {
					set_alert(FLASH_SUCCESS, $response['message']);
					redirect(base_url('admin/purchase/'));
				} else {
					set_alert(FLASH_ERROR, $response['message']);
				}

			}
			$this->data['page_name'] = 'purchase/purchase_add';
		} elseif ($param1 == 'edit') {
			if ($param2 != '') {
				if ($this->input->post()) {
					$postData = $this->input->post();
					$response = $this->main->edit_purchase($postData, $param2);
					if ($response['status'] == true) {
						set_alert(FLASH_SUCCESS, $response['message']);
						redirect(base_url('admin/purchase/'));
					} else {
						set_alert(FLASH_ERROR, $response['message']);
					}
				}
				$this->data['edit_data'] = $this->main->get_pucrhase_by_id($param2);
				$this->data['page_name'] = 'purchase/purchase_edit';
			}
		} elseif ($param1 == 'delete') {
			if ($param2 != '') {
				$response = $this->main->delete_pucrhase($param2);
				if ($response['status'] == true) {
					set_alert(FLASH_SUCCESS, $response['message']);
					redirect(base_url('admin/purchase/'));
				} else {
					set_alert(FLASH_ERROR, $response['message']);
				}
			}
		} elseif ($param1 == '') {
			$this->data['page_name'] = 'purchase/purchase_report';
		}
		$this->data['menu_name'] = 'purchase';
		$this->load->view('admin/index', $this->data);
	}

    public function make_order($param1 = '', $param2 = '') {
		$this->data['products'] = $this->db->get('product')->result_array();
		$this->data['hotel_users'] = $this->main->get_hotel_user();

		if ($param1 == 'add') {
			if ($this->input->post()) {
				$postData = $this->input->post();
				$this->main->create_manual_order($postData);
                set_alert(FLASH_SUCCESS, 'Order created successfully!');
                redirect(base_url('admin/make_order/add/'));

			}
			$this->data['page_name'] = 'make_order_add';
		} elseif ($param1 == 'delete') {
			if ($param2 != '') {
				$response = $this->main->delete_pucrhase($param2);
				if ($response['status'] == true) {
					set_alert(FLASH_SUCCESS, $response['message']);
					redirect(base_url('admin/make_order/'));
				} else {
					set_alert(FLASH_ERROR, $response['message']);
				}
			}
		} elseif ($param1 == '') {
			$this->data['page_name'] = 'make_order';
		}
		$this->data['menu_name'] = 'purchase';
		$this->load->view('admin/index', $this->data);
	}

    public function stock_management($param1 = '', $param2 = '') {
		$this->data['categories'] 		= $this->main->get_categories(['id', 'category']);
		$this->data['suppliers_list'] 	= $this->main->get_suppliers()->result_array();
		$this->data['products_list'] 	= $this->main->get_products();

        if ($param1 == 'add') {
            if ($this->input->post()) {
                if ($this->main->add_stock() != false) {
                    set_alert(FLASH_SUCCESS, 'Stock Added Successfully');
                } else {
                    set_alert(FLASH_ERROR, 'Something went wrong!');
                }
            }
			redirect(base_url('admin/stock_management/'));
        } elseif ($param1 == 'edit') {
            if ($param2 != '') {
                if ($this->input->post()) {
                    $postData = $this->input->post();
                    $response = $this->main->edit_supplier($postData, $param2);
                    if ($response['status'] == true) {
                        set_alert(FLASH_SUCCESS, $response['message']);
                        redirect(base_url('admin/suppliers/'));
                    } else {
                        set_alert(FLASH_ERROR, $response['message']);
                    }
                }
                $this->data['edit_data'] = $this->main->get_supplier_by_id($param2);
                $this->data['page_name'] = 'supplier_edit';
            }
        } elseif ($param1 == 'delete') {
            if ($param2 != '') {
                $response = $this->main->delete_supplier($param2);
                if ($response['status'] == true) {
                    set_alert(FLASH_SUCCESS, $response['message']);
                    redirect(base_url('admin/suppliers/'));
                } else {
                    set_alert(FLASH_ERROR, $response['message']);
                }
            }
        } elseif ($param1 == 'stock_quantity_edit') {
            $this->data['edit_data'] = $this->main->get_stock_by_id($param2);
            $this->data['page_name'] = 'stock/stock_quantity_edit';
        } elseif ($param1 == 'stock_quantity_update') {
            if ($this->main->edit_stock($param2) != false) {
                set_alert(FLASH_SUCCESS, 'Stock Updated Successfully');
                $this->data['page_name'] = 'stock/stock_list';
                redirect(base_url('admin/stock_management/'));
            } else {
                set_alert(FLASH_ERROR, 'Something went wrong!');
            }
        } elseif ($param1 == 'delete_stock') {
            if ($this->main->delete_stock($param2) != false) {
                set_alert(FLASH_SUCCESS, 'Stock Deleted Successfully');
                redirect(base_url('admin/stock_management/'));
            } else {
                set_alert(FLASH_ERROR, 'Something went wrong!');
            }
        } elseif ($param1 == '') {
            $this->data['page_name'] = 'stock/stock_list';
        }
        $this->data['menu_name'] = 'suppliers';
        $this->load->view('admin/index', $this->data);
    }

    /**
     * STOCK ADJUSTMENT
     */
    public function stock_adjustment($param1 = '', $param2 = '') {
        if ($param1 == 'add') {
            $data = [
                'product_id' 		=> trim($this->input->post('product_id')),
                'quantity' 		    => trim($this->input->post('quantity')),
                'type' 			    => trim($this->input->post('type')),
                'remarks' 		    => trim($this->input->post('remarks')),
                'datetime' 			=> date('Y-m-d H:i:s'),
            ];

            if($this->data_db->add_stock_adjustment($data)){
                set_alert(FLASH_SUCCESS, 'Stock updated successfully!');
            }else{
                set_alert(FLASH_ERROR, 'Something went wrong!');
            }
            redirect(base_url('admin/stock_adjustment/'.$data['product_id']), 'refresh');

        }elseif ($param1 == 'edit') {
            $data = [
                'quantity' 		    => trim($this->input->post('quantity')),
                'type' 			    => trim($this->input->post('type')),
                'remarks' 		    => trim($this->input->post('remarks')),
                'datetime' 			=> date('Y-m-d H:i:s'),
            ];

            if($this->data_db->update_stock_adjustment($data, ['id' => $param2])){
                set_alert(FLASH_SUCCESS, 'Stock updated successfully!');
            }else{
                set_alert(FLASH_ERROR, 'Something went wrong!');
            }
            redirect(base_url('admin/stock_adjustment/'.$this->input->post('product_id').'/'), 'refresh');

        }elseif ($param1 == 'delete') {

            $product_id = $this->data_db->get_stock_adjustment(['id' => $param2])->row()->product_id;

            if($this->data_db->delete_stock_adjustment(['id' => $param2])){
                set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            }else{
                set_alert(FLASH_ERROR, 'Something went wrong!');
            }
            redirect(base_url('admin/stock_adjustment/'.$product_id.'/'), 'refresh');

        }else{
            if($param1>0){
                $this->data['page_title'] 		= 'Stock Adjustment';
                $this->data['list_items'] 		= $this->data_db->get_stock_adjustment(['product_id' => $param1])->result_array();
                $this->data['product_item'] 	= $this->db->get_where('product', ['id' => $param1], ['product', 'id'])->row();
                $this->data['page_name'] 		= 'stock_adjustment';
            }else{
                redirect(base_url('admin/stock_adjustment/'), 'refresh');
            }
        }
        $this->load->view('admin/index', $this->data);
    }


    public function stock_report($param1 = '', $param2 = '') {
        $this->data['categories'] = $this->main->get_categories(['id', 'category']);
        $this->data['page_name'] = 'stock/stock_report';
        $this->load->view('admin/index', $this->data);
    }

	public function item_report($param1 = '', $param2 = '') {
		$this->data['page_name'] = 'report/item_report';
		$this->load->view('admin/index', $this->data);
	}

    public function order_report($param1 = '', $param2 = '') {
        $this->data['categories'] = $this->main->get_categories(['id', 'category']);

        $this->data['page_name'] = 'stock/order_report';
        $this->load->view('admin/index', $this->data);
    }
	public function purchase_report($param1 = '', $param2 = '') {
        $this->data['suppliers'] = $this->main->get_suppliers()->result_array();

        $this->data['page_name'] = 'report/purchase_report';
        $this->load->view('admin/index', $this->data);
    }
    public function supplier_report($param1 = '', $param2 = '') {
        $this->data['suppliers'] = $this->main->get_suppliers()->result_array();
        $this->data['page_name'] = 'stock/supplier_report';
        $this->load->view('admin/index', $this->data);
    }


    //PROFILE
    public function profile() {
        if (isset($_POST[edit])) {
            $postData = $this->input->post();
            $response = $this->data_db->update_profile($postData);
            if ($response['status'] == true) {
                set_alert(FLASH_SUCCESS, $response['message']);
                redirect(base_url('admin/dashboard/'));
            } else {
                set_alert(FLASH_ERROR, $response['message']);
            }
        }
        if (isset($_POST['update_version_code'])) {
            $postData = $this->input->post();
            $response = $this->data_db->update_version_code($postData);
            if ($response['status'] == true) {
                set_alert(FLASH_SUCCESS, $response['message']);
                redirect(base_url('admin/dashboard/'));
            } else {
                set_alert(FLASH_ERROR, $response['message']);
            }
        }
        if (isset($_POST['open_close_time'])) {
            $response = $this->data_db->update_closing_time($this->input->post());
            if ($response['status'] == true) {
                set_alert(FLASH_SUCCESS, $response['message']);
                redirect(base_url('admin/dashboard/'));
            } else {
                set_alert(FLASH_ERROR, $response['message']);
            }
        }
        $this->data['edit_data'] = $this->data_db->get_profile();
        $this->data['edit_settings'] = $this->data_db->get_settings();
        $this->data['page_name'] = 'profile';
        $this->load->view('admin/index', $this->data);
    }

    //LOGOUT
    public function logout() {
        ta_logout();
    }


    //AJAX
    public function ajax_assign_delivery_partner(){
        if($this->input->post()){
            $order_id           = $this->input->post('order_id');
            $delivery_boy_id    = $this->input->post('delivery_boy_id');
        }
    }
    public function ajax_get_products_by_category($category_id) {
        $products = $this->main->get_products(['id', 'product'], ['category_id' => $category_id]);

        echo "<option value=\"\">Select Item</option>";
        foreach ($products as $product) {
            echo "<option value=\"{$product['id']}\">{$product['product']}</option>";
        }
    }

	public function ajax_get_product_variants_by_product_id($product_id) {
		$product_variants = $this->main->get_product_variant_by_product_id($product_id);
		echo "<option value=\"\">Select Item</option>";
		foreach ($product_variants as $product_variant) {
			echo "<option value=\"{$product_variant['id']}\">{$product_variant['title']}</option>";
		}
	}

    public function ajax_get_product_variant_details() {
        $product_id = $this->input->post('product_id');
        $variant_id = $this->input->post('variant_id');

        $product_variant_price = $this->data_db->get_product_variant_price($product_id, $variant_id);
        $item['gross_weight'] 	= $product_variant_price['gross_weight'];
        $item['sale_price'] 	= $product_variant_price['sale_price'];
        $item['offer_price'] 	= $product_variant_price['offer_price'] > 0 ? $product_variant_price['offer_price'] : $product_variant_price['sale_price'];
        echo json_encode($item);
	}

    
    public function ajax_get_product_varient_by_product($product_id) {
        $products = $this->main->get_product_varient($product_id);
        echo "<option value=\"\">Select Item</option>";
        foreach ($products as $product) {
            echo "<option value=\"{$product['id']}\">{$product['title']}</option>";
        }
    }

    public function ajax_get_order_report() {
        if ($this->input->post()) {
            $this->data['data']= $this->input->post();
            $this->data['order_report'] = $this->account_db->get_order_report($this->input->post());
            echo $this->load->view('admin/stock/order_report_data', $this->data, true);
        }
    }
    public function ajax_get_supplier_report() {
        if ($this->input->post()) {
            $this->data['data']= $this->input->post();
            $this->data['supplier_report'] = $this->account_db->get_supplier_report($this->input->post());
            echo $this->load->view('admin/stock/supplier_report_data', $this->data, true);
        }
    }
    public function ajax_get_purchase_report() {
        if ($this->input->post()) {
			$this->data['suppliers'] = array_column($this->main->get_suppliers()->result_array(), 'name', 'id');
            $this->data['data'] = $this->input->post();
            $this->data['purchase_report'] = $this->account_db->get_purchase_report($this->input->post());
            echo $this->load->view('admin/report/purchase_report_data', $this->data, true);
        }
    }
	public function ajax_get_stock_list(){
		if ($this->input->post()) {
			$this->data['data']			= $this->input->post();
			$this->data['stock_list'] 	= $this->main->get_stock_list();
			echo $this->load->view('admin/stock/stock_list_data', $this->data, true);
		}
	}
    public function ajax_get_stock_report() {
        if ($this->input->post()) {
            $this->data['data']= $this->input->post();
            $this->data['stock_report'] = $this->account_db->get_stock_report_new($this->input->post());
            echo $this->load->view('admin/stock/stock_report_data', $this->data, true);
        }
    }

	public function ajax_get_item_report() {
        if ($this->input->post()) {
            $this->data['data']= $this->input->post();
            $this->data['item_report'] = $this->account_db->get_item_report($this->input->post());
            echo $this->load->view('admin/report/item_report_data', $this->data, true);
        }
    }
	public function pdf_item_report() {
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
//          'format' => [100, 75],
			'margin_left' => 4,
			'margin_right' => 4,
			'margin_top' => 1,
			'margin_bottom' => 2,
		]);

		$this->data['item_report'] = $this->account_db->get_item_report($this->input->get());
		$mpdf->AddPage();
		$html = $this->load->view('pdf/pdf_item_report', $this->data, true);
		$mpdf->WriteHTML($html);

//        $mpdf->Output($pdf_url,'F');
		$mpdf->Output();
	}

    public function ajax_add_product_to_purchase() {
        $this->data['products_list'] = $this->main->get_products(['id', 'product']);
        echo $this->load->view('admin/server/add_product_to_purchase', $this->data, true);
    }


    public function test_qrcode() {
        echo base_url($this->generate_qrcode('789456', 'orders'));
    }

    /**
     * PRIVATE FUNCTIONS
     */
    private function generate_qrcode($qr_content, $folder) {
        // outputs image directly into browser, as PNG stream
//        QRcode::png($qr_content);
        // how to save PNG codes to server

        $tempDir = 'uploads/qrcode/' . $folder . '/' . date('m-Y') . '/';
        if (!is_dir($tempDir)) {
            mkdir($tempDir, 0777, true);
        }

//        $qr_content = 'This Goes From File';

        // we need to generate filename somehow,
        // with md5 or with database ID used to obtains $codeContents...
        $fileName = date('Ymdhis').$qr_content . '.png';

        $pngAbsoluteFilePath = $tempDir . $fileName;
        $urlRelativeFilePath = $tempDir . $fileName;

        // generating
        if (!file_exists($pngAbsoluteFilePath)) {
            QRcode::png($qr_content, $pngAbsoluteFilePath);
        }
        return $pngAbsoluteFilePath;
    }

    
    public function user_report_details($user_id){
        $this->data['page_name'] = 'report/user_order_report';
        $this->data['user_id'] = $user_id;
        $this->load->view('admin/index', $this->data);
    }
    
    public function ajax_get_user_order_report() {
        if ($this->input->post()) {
            $this->data['user_purchase_report'] = $this->account_db->get_user_order_report($this->input->post());
            $this->data['user_purchase_count'] = count($this->data['user_purchase_report']);
            $this->data['user_purchase_amount'] = $this->account_db->get_user_order_report_amount($this->input->post());
            echo $this->load->view('admin/report/user_order_report_data', $this->data, true);
        }
    }
    
    public function ajax_get_ward_by_panchayath_all($panchayath_id = "") {
        $wards = $this->main->get_ward(['panchayath_id' => $panchayath_id]);
        echo "<option value=\"0\">All ward</option>";
        foreach ($wards as $ward) {
            echo "<option value=\"{$ward['id']}\">{$ward['ward']}</option>";
        }

    }
    
    public function ddp_report_details($user_id)
    {
        $this->data['all_assigened_ward'] = $this->main->get_ward_by_user($user_id);
        $this->data['page_name'] = 'report/ddp_order_report';
        $this->data['user_id'] = $user_id;
        $this->load->view('admin/index', $this->data);

    }
    public function ajax_get_ddp_order_report() {
        if ($this->input->post()) {
            $user_id = $this->input->post('user_id');
            $from_date = $this->input->post('from_date');
            $to_date = $this->input->post('to_date');
            if($this->input->post('ward_id') == 0){
                $ward_id = array_column($this->data_db->user_assigned_list($user_id), 'ward_id');
            }else{
                $ward_id = [$this->input->post('ward_id')];
            }

            $user = $this->data_db->get_user($user_id);
            $this->data['name'] = $user['name'];
            $this->data['phone'] = $user['phone'];
            $this->data['from_date'] = $from_date;
            $this->data['to_date'] = $to_date;
            $this->data['user_id'] = $user_id;
            $this->data['ward_id'] = $ward_id;
            $this->data['ward_id_item'] = $this->input->post('ward_id');
            if(count($ward_id) > 0){
                $this->data['total_customers'] = $this->data_db->get_total_customers_count_by_ddp($user_id, $ward_id) ?? 0;
                $this->data['total_delivery'] = $this->data_db->get_total_delivery_count_by_ddp($user_id, $ward_id, $from_date, $to_date) ?? 0;
                $this->data['total_order_amount'] = $this->data_db->get_total_order_amount_by_ddp($user_id, $ward_id, $from_date, $to_date) ?? 0;
                $this->data['total_order_list'] = $this->data_db->get_total_order_list_by_ddp($user_id, $ward_id, $from_date, $to_date) ?? 0;

                $this->data['total_collected_amount'] = $this->data_db->get_total_collected_amount_by_ddp($user_id, $from_date, $to_date) ?? 0;
                $this->data['total_transferred_amount'] = $this->data_db->get_total_transferred_amount_by_ddp($user_id) ?? 0;
                $this->data['daily_collection'] = $this->data_db->get_daily_collection_ddp($user_id, $from_date, $to_date) ?? 0;
            }else{
                $this->data['total_customers'] = 0;
                $this->data['total_delivery'] = 0;
                $this->data['total_order_amount'] = 0;
                $this->data['total_order_list'] = [];
            }

            echo $this->load->view('admin/report/ddp_order_report_data', $this->data, true);
        }
    }

    public function panchayath_head_report_details($user_id)
    {
        $this->data['page_name'] = 'report/panchayath_head_report';
        $this->data['user_id'] = $user_id;
        $this->load->view('admin/index', $this->data);

    }
    public function ajax_get_panchayath_head_order_report() {
        if ($this->input->post()) {
            $user_id = $this->input->post('user_id');
            $from_date = $this->input->post('from_date');
            $to_date = $this->input->post('to_date');

            $user = $this->data_db->get_user($user_id);
            $this->data['name'] = $user['name'];
            $this->data['phone'] = $user['phone'];

            $this->data['ddp_list'] = $this->data_db->get_total_ddp_list_by_panchayath($user['panchayath_id']);

            $this->data['total_customers'] = $this->data_db->get_total_customers_count_by_panchayath($user['panchayath_id']) ?? 0;
//            $this->data['total_ddp'] = $this->data_db->get_total_ddp_count_by_panchayath($user['panchayath_id']) ?? 0;
            $this->data['total_ddp'] = count($this->data['ddp_list']);
            $this->data['total_ward'] = $this->main->get_ward_by_panchayath_id($user['panchayath_id'])->num_rows() ?? 0;
            $this->data['total_order_count'] = $this->data_db->get_total_order_count_by_panchayath($user['panchayath_id'], $from_date, $to_date) ?? 0;
            $this->data['total_order_count_cod'] = $this->data_db->get_total_order_count_by_panchayath($user['panchayath_id'], $from_date, $to_date, 2) ?? 0;
            $this->data['total_order_count_online'] = $this->data_db->get_total_order_count_by_panchayath($user['panchayath_id'], $from_date, $to_date, 1) ?? 0;
            $this->data['total_order_amount'] = $this->data_db->get_total_order_amount_by_panchayath($user['panchayath_id'], $from_date, $to_date) ?? 0;
            $this->data['total_order_amount_cod'] = $this->data_db->get_total_order_amount_by_panchayath($user['panchayath_id'], $from_date, $to_date, 2) ?? 0;
            $this->data['total_order_amount_online'] = $this->data_db->get_total_order_amount_by_panchayath($user['panchayath_id'], $from_date, $to_date, 1) ?? 0;
            $this->data['total_amount_collected'] = $this->data_db->get_total_amount_colected_by_panchayath($user_id, $from_date, $to_date) ?? 0;
            $this->data['total_amount_transffered'] = $this->data_db->get_total_amount_transffered($user_id, $from_date, $to_date) ?? 0;
            $this->data['balance_amount'] = $this->data['total_amount_collected'] - $this->data['total_amount_transffered'];
            $this->data['user_id'] = $user_id;
            echo $this->load->view('admin/report/panchayath_head_report_data', $this->data, true);
        }
    }

    public function ward_order_details($ward_id)
    {
        $this->data['page_name'] = 'report/ward_order_report';
        $this->data['ward_id'] = $ward_id;
        $this->load->view('admin/index', $this->data);

    }
    
    public function ajax_get_ward_order_report() {
        if ($this->input->post()) {
            $ward_id = $this->input->post('ward_id');
            $from_date = $this->input->post('from_date');
            $to_date = $this->input->post('to_date');
            $this->data['from_date'] =  $from_date ;
            $this->data['to_date'] =  $to_date;
            $this->data['ward_id'] =  $ward_id;
            $this->data['order_list'] = $this->data_db->get_total_order_by_ward($ward_id,$from_date, $to_date);
            $this->data['total_customers'] = $this->data_db->get_total_customers_count_by_ward($ward_id) ?? 0;
            $this->data['total_order_count'] = $this->data_db->get_total_order_count_by_ward($ward_id, $from_date, $to_date) ?? 0;
            $this->data['total_order_amount'] = $this->data_db->get_total_order_amount_by_ward($ward_id,$from_date, $to_date) ?? 0;
            echo $this->load->view('admin/report/ward_order_report_data', $this->data, true);
        }
    }
    
    public function collect_amount_by_ph($user_id)
    {
        $this->data['page_name'] = 'report/collect_amount_by_panchayath_head';
        $this->data['user_id'] = $user_id;
        $this->load->view('admin/index', $this->data);

    }
    
    public function add_collected_amount_by_panchayath_head()
    {
        $user_id = $this->input->post('user_id');
        $data['amount'] = $this->input->post('amount');
        $data['from_user_id'] = $user_id;
        $data['from_user_role'] = 2;
        $data['to_user_id'] = 0;
        $data['to_user_role'] = 1;
        $data['type'] = 'collect';
        $data['date'] = $this->input->post('user_id');
        $data['datetime'] = date('Y-m-d H:i:s');
        if($this->data_db->create_transaction($data)>0)
        {
            set_alert(FLASH_SUCCESS, 'Amount collected successfully!');
            redirect(base_url('admin/panchayath_head_report_details/' . $user_id), 'refresh');
        }
    }

    public function pdf_test_get(){
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => [100, 75],
            'margin_left' => 3,
            'margin_right' => 3,
            'margin_top' => 3,
            'margin_bottom' => 3,
        ]);

        $data = [
            [
                'QR_Code',
                'Adeeb C',
                '+91 9656670867',
                'Ward 12, Nenmanda Panchayath',
                'Ward 12, Nenmanda Panchayath, Ward 12, Nenmanda Panchayath',
                'Hari Kottakkal'
            ],
            [
                'QR_Code',
                'Adeeb C',
                '+91 9656670867',
                'Ward 12, Nenmanda Panchayath',
                'Ward 12, Nenmanda Panchayath, Ward 12, Nenmanda Panchayath',
                'Hari Kottakkal'
            ],
            [
                'QR_Code',
                'Adeeb C',
                '+91 9656670867',
                'Ward 12, Nenmanda Panchayath',
                'Ward 12, Nenmanda Panchayath, Ward 12, Nenmanda Panchayath',
                'Hari Kottakkal'
            ],
            [
                'QR_Code',
                'Adeeb C',
                '+91 9656670867',
                'Ward 12, Nenmanda Panchayath',
                'Ward 12, Nenmanda Panchayath, Ward 12, Nenmanda Panchayath',
                'Hari Kottakkal'
            ],

        ];
        foreach ($data as $item){
            $array['item'] = $item;
            $mpdf->AddPage();
            $html = $this->load->view('pdf/test',$array,true);
            $mpdf->WriteHTML($html);
        }

//        $mpdf->Output($pdf_url,'F');
        $mpdf->Output();
    }
    public function change_order_status_bulk(){
        $this->db->where('date(`order_date`)', '2021-11-10');
        $this->db->where('order_status', 'processing');
        $this->db->update('orders', ['order_status' => 'pending']);
    }
    
    public function stock_edit($product_price_id)
    {
        $this->data['product_price'] = $this->main->get_product_price($product_price_id);
        $this->data['stock'] = $this->main->get_product_stock_by_purchase($this->data['product_price']['purchase_id'], $this->data['product_price']['product_id']);
        $this->data['page_name'] = 'stock/stock_edit';
        $this->data['product_price_id'] = $product_price_id;
        $this->load->view('admin/index', $this->data);
    }
    
    public function stock_update($purchase_id)
    {
        $this->data['details'] = $this->main->update_stock_details($purchase_id);
        redirect(base_url('admin/stock_management/'), 'refresh');
    }
    
    
    public function order_pdf_generator() {
        log_message('error', print_r(unserialize(urldecode($_GET['ward_id'])), true));
        $this->data['from_date'] = $this->input->get('from_date') ?? date('Y-m-d');
        $this->data['to_date'] = $this->input->get('to_date') ?? date('Y-m-d');
        $this->data['order_status'] = $this->input->get('order_status') ?? 0;

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
//            'format' => [100, 75],
            'margin_left' => 4,
            'margin_right' => 4,
            'margin_top' => 1,
            'margin_bottom' => 2,
        ]);

        $this->data['orders'] = $this->main->getOrderDetails($this->data['from_date'],$this->data['to_date'], $this->data['order_status']);
        // $this->data['orders'] = $this->sort_order_array_by_ward($this->data['orders']);
        log_message('error', json_encode($this->data['orders']));
        $mpdf->AddPage();
        $html = $this->load->view('pdf/pdf_orders', $this->data, true);
        $mpdf->WriteHTML($html);

//        $mpdf->Output($pdf_url,'F');
        $mpdf->Output();
    }
    
    
    public function order_pdf_genertor_filter_report() {
        $this->data['panchayath'] = $this->main->get_panchayath();
        $this->data['filter_date'] = $this->input->get('filter_date') ?? date('Y-m-d');
        $this->data['panchayath_id'] = $this->input->get('panchayath_id') ?? 0;
        $this->data['ward_id'] = $this->input->get('ward_id') ?? 0;

        $generate_qrcode = $this->input->get('generate_qrcode') ?? 0;

        $change_order_status = $this->input->get('change_order_status') ?? 0;
        if($generate_qrcode==1){
            redirect(base_url("admin/orders_qr_code/?filter_date={$this->data['filter_date']}"));
//            set_alert(FLASH_SUCCESS, 'Orders processed successfully!');
        }

//        if($change_order_status == 1){
//            $from_status = $this->input->get('from_status');
//            $to_status = $this->input->get('to_status');
//            $this->main->change_order_status_by_date($this->data['filter_date'], $to_status, $this->data['panchayath_id'], $this->data['ward_id'], $from_status);
//            set_alert(FLASH_SUCCESS, 'Orders status changed successfully!');
//            redirect(base_url("admin/order_filter_report/?filter_date={$this->data['filter_date']}"));
////
//        }

        $this->data['records']['pending'] = $this->main->getOrderDetails($this->data['filter_date'], 'pending', $this->data['panchayath_id'], $this->data['ward_id']);
        $this->data['records']['processing'] = $this->main->getOrderDetails($this->data['filter_date'], 'processing', $this->data['panchayath_id'], $this->data['ward_id']);
        $this->data['records']['delivered'] = $this->main->getOrderDetails($this->data['filter_date'], 'delivered', $this->data['panchayath_id'], $this->data['ward_id']);
        $this->data['records']['cancelled'] = $this->main->getOrderDetails($this->data['filter_date'], 'cancelled', $this->data['panchayath_id'], $this->data['ward_id']);
        $this->data['page_name'] = 'order_pdf_generator';
        $this->load->view('admin/index', $this->data);
    }
    
    public function pdf() {
        $this->data['panchayath'] = $this->main->get_panchayath();
        $this->data['filter_date'] = "2021-11-11" ?? date('Y-m-d'); //$this->input->get('filter_date') ?? date('Y-m-d');
        $this->data['panchayath_id'] = $this->input->get('panchayath_id') ?? 0;
        $this->data['ward_id'] = $this->input->get('ward_id') ?? 0;
        $this->data['order_status'] = $this->input->get('order_status') ?? 0;


        $aa = $this->data['records']['pending'] = $this->main->getOrderDetails($this->data['filter_date'], 'pending', $this->data['panchayath_id'], $this->data['ward_id']);
        $this->data['page_name'] = 'order_list';
        // $this->load->view('admin/index', $this->data);
        
        
        
        
        
        
        // ----------------------------------------------------------------------------------
        
        
        $html .= '
        hi....
        ';
        
        
        
        // ----------------------------------------------------------------------------------------------------------------
              require('TCPDF/tcpdf.php');
                $tcpdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
                // set default monospaced font
                $tcpdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
                // set title of pdf
                $tcpdf->SetTitle('Invoice');
                // set margins
                $tcpdf->SetMargins(10, 10, 10, 10);
                $tcpdf->SetHeaderMargin(PDF_MARGIN_HEADER);
                $tcpdf->SetFooterMargin(PDF_MARGIN_FOOTER);
                // set header and footer in pdf
                $tcpdf->setPrintHeader(false);
                $tcpdf->setPrintFooter(false);
                $tcpdf->setListIndentWidth(3);
                // set auto page breaks
                $tcpdf->SetAutoPageBreak(TRUE, 11);
                // set image scale factor
                $tcpdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
                $tcpdf->AddPage();
                $tcpdf->SetFont('times', '', 10.5);
                $tcpdf->writeHTML($html);
                
                $naming="testt.pdf";
                
            //     // $naming=$i['invoice_no'].".pdf";
                
            //     //Close and output PDF document
                // $tcpdf->Output($naming, 'D');
                
                ob_end_clean();
                
            $tcpdf->Output($naming, 'D');
        // ----------------------------------------------------------------------------------------------------------------
        
        
    }
    
    
    public function ddp_report_pdf_generator() {
        $this->data['user_id'] = $this->input->get('user_id') ?? 0;
        $this->data['from_date'] = $this->input->get('from_date') ?? date('Y-m-d');
        $this->data['to_date'] = $this->input->get('to_date') ?? date('Y-m-d');
        if($this->input->get('ward_id') == 0){
                $ward_id = array_column($this->data_db->user_assigned_list($this->data['user_id']), 'ward_id');
            }else{
                $ward_id = [$this->input->get('ward_id')];
            }
        
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
//          'format' => [100, 75],
            'margin_left' => 4,
            'margin_right' => 4,
            'margin_top' => 1,
            'margin_bottom' => 2,
        ]);

        $this->data['order_list'] = $this->data_db->get_total_order_list_by_ddp($this->data['user_id'], $ward_id,$this->data['from_date'], $this->data['to_date']);
        $mpdf->AddPage();
        $html = $this->load->view('pdf/pdf_ddp_report', $this->data, true);
        $mpdf->WriteHTML($html);

//        $mpdf->Output($pdf_url,'F');
        $mpdf->Output();
    }
    
    public function order_report_pdf_generator() {
        $this->data['order_date'] = $this->input->get('order_date') ?? date('Y-m-d');
        $this->data['category_id'] = $this->input->get('category_id') ?? 0;
        $this->data['product_id'] = $this->input->get('product_id') ?? 0;
        $this->data['product_varient_id'] = $this->input->get('product_varient_id') ?? 0;

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
//          'format' => [100, 75],
            'margin_left' => 4,
            'margin_right' => 4,
            'margin_top' => 1,
            'margin_bottom' => 2,
        ]);
        
        $this->data['order_report'] = $this->account_db->get_order_report($this->input->get());
        $this->data['order_report'] = $this->sort_order_array_by_ward($this->data['order_report']);
        $mpdf->AddPage();
        $html = $this->load->view('pdf/pdf_order_report', $this->data, true);
        $mpdf->WriteHTML($html);

//        $mpdf->Output($pdf_url,'F');
        $mpdf->Output();
    }
    
    public function supplier_report_pdf_generator() {
        $this->data['purchase_date'] = $this->input->get('purchase_date') ?? date('Y-m-d');
        $this->data['supplier_id'] = $this->input->get('supplier_id') ?? 0;

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
//          'format' => [100, 75],
            'margin_left' => 4,
            'margin_right' => 4,
            'margin_top' => 1,
            'margin_bottom' => 2,
        ]);
        
        $this->data['supplier_report'] = $this->account_db->get_supplier_report($this->input->get());
        $mpdf->AddPage();
        $html = $this->load->view('pdf/pdf_supplier_report', $this->data, true);
        $mpdf->WriteHTML($html);

//        $mpdf->Output($pdf_url,'F');
        $mpdf->Output();
    }
    
    public function stock_report_pdf_generator() {
        $this->data['category_id'] = $this->input->get('category_id') ?? 0;

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
//          'format' => [100, 75],
            'margin_left' => 4,
            'margin_right' => 4,
            'margin_top' => 1,
            'margin_bottom' => 2,
        ]);
        
        $this->data['stock_report'] = $this->account_db->get_stock_report_new($this->input->get());
        $mpdf->AddPage();
        $html = $this->load->view('pdf/pdf_stock_report', $this->data, true);
        $mpdf->WriteHTML($html);

//        $mpdf->Output($pdf_url,'F');
        $mpdf->Output();
    }
    
    public function purchase_report_pdf_generator() {
        $this->data['purchase_date'] = $this->input->get('purchase_date') ?? date('Y-m-d');
        $this->data['category_id'] = $this->input->get('category_id') ?? 0;
        $this->data['product_id'] = $this->input->get('product_id') ?? 0;

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
//          'format' => [100, 75],
            'margin_left' => 4,
            'margin_right' => 4,
            'margin_top' => 1,
            'margin_bottom' => 2,
        ]);
        
        $this->data['purchase_report'] = $this->account_db->get_stock_report($this->input->get());
        $mpdf->AddPage();
        $html = $this->load->view('pdf/pdf_purchase_report', $this->data, true);
        $mpdf->WriteHTML($html);

//        $mpdf->Output($pdf_url,'F');
        $mpdf->Output();
    }
    
    public function ward_order_report_pdf_generator() {
        $this->data['from_date'] = $this->input->get('from_date') ?? date('Y-m-d');
        $this->data['to_date'] = $this->input->get('to_date') ?? date('Y-m-d');
        $this->data['ward_id'] = $this->input->get('ward_id') ?? 0;
        
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
//          'format' => [100, 75],
            'margin_left' => 4,
            'margin_right' => 4,
            'margin_top' => 1,
            'margin_bottom' => 2,
        ]);

        $this->data['order_list'] = $this->data_db->get_total_order_by_ward($this->data['ward_id'],$this->data['from_date'], $this->data['to_date']);
        $mpdf->AddPage();
        $html = $this->load->view('pdf/pdf_ward_order_report', $this->data, true);
        $mpdf->WriteHTML($html);

//        $mpdf->Output($pdf_url,'F');
        $mpdf->Output();
    }
    private function sort_order_array_by_ward($array){
        $is_stock = array_column($array, 'ward_name');
        array_multisort($is_stock, SORT_ASC, $array);
        return $array;
    }
    
    public function overall_report() {
        $this->data['items'] = $this->main->get_items();
        $this->data['page_name'] = 'report/overall_report';
        $this->load->view('admin/index', $this->data);

    }

    public function ajax_get_overall_report() {
        if ($this->input->post()) {
            $from_date = $this->input->post('from_date');
            $to_date = $this->input->post('to_date');
            $product = $this->input->post('product_id');
            $this->data['from_date'] = $from_date;
            $this->data['to_date'] = $to_date;
            $this->data['product_id'] = $product;

            $this->data['total_customers'] = $this->data_db->get_total_customers_count_by_panchayath(0) ?? 0;
            $this->data['total_order_count'] = $this->data_db->get_total_order_count_by_panchayath(0, $from_date, $to_date, $product) ?? 0;
            $this->data['total_order_count_cod'] = $this->data_db->get_total_order_count_by_panchayath(0, $from_date, $to_date, $product, 2) ?? 0;
            $this->data['total_order_count_online'] = $this->data_db->get_total_order_count_by_panchayath(0, $from_date, $to_date,$product, 1) ?? 0;
            $this->data['total_order_amount'] = $this->data_db->get_total_order_amount_by_panchayath(0, $from_date, $to_date,$product) ?? 0;
            $this->data['total_order_amount_cod'] = $this->data_db->get_total_order_amount_by_panchayath(0, $from_date, $to_date,$product, 2 ) ?? 0;
            $this->data['total_order_amount_online'] = $this->data_db->get_total_order_amount_by_panchayath(0, $from_date, $to_date,$product, 1) ?? 0;

            $this->data['panchayath'] = $this->main->get_panchayath();
            foreach($this->data['panchayath'] as $key => $panchayath){
                $this->data['panchayath'][$key]['panchayath_name'] = $panchayath['title'];
                $this->data['panchayath'][$key]['total_customers'] = $this->data_db->get_total_customers_count_by_panchayath($panchayath['id']) ?? 0;
                $this->data['panchayath'][$key]['total_ddp'] = count($this->data_db->get_total_ddp_list_by_panchayath($panchayath['id'])) ?? 0;

                $this->data['panchayath'][$key]['total_ward'] = $this->main->get_ward_by_panchayath_id($panchayath['id'])->num_rows() ?? 0;
                $this->data['panchayath'][$key]['total_order_count'] = $this->data_db->get_total_order_count_by_panchayath($panchayath['id'], $from_date, $to_date,$product) ?? 0;
                $this->data['panchayath'][$key]['total_order_count_cod'] = $this->data_db->get_total_order_count_by_panchayath($panchayath['id'], $from_date, $to_date,$product, 2) ?? 0;
                $this->data['panchayath'][$key]['total_order_count_online'] = $this->data_db->get_total_order_count_by_panchayath($panchayath['id'], $from_date, $to_date,$product, 1) ?? 0;
                $this->data['panchayath'][$key]['total_order_amount'] = $this->data_db->get_total_order_amount_by_panchayath($panchayath['id'], $from_date, $to_date,$product) ?? 0;
                $this->data['panchayath'][$key]['total_order_amount_cod'] = $this->data_db->get_total_order_amount_by_panchayath($panchayath['id'], $from_date, $to_date, $product, 2) ?? 0;
                $this->data['panchayath'][$key]['total_order_amount_online'] = $this->data_db->get_total_order_amount_by_panchayath($panchayath['id'], $from_date, $to_date, $product, 1) ?? 0;
            }

            echo $this->load->view('admin/report/overall_report_data', $this->data, true);
        }
    }

    public function overall_pdf_generator() {
        $from_date = $this->input->get('from_date');
        $to_date = $this->input->get('to_date');
        $product = $this->input->get('product_id');

        $this->data['total_customers'] = $this->data_db->get_total_customers_count_by_panchayath(0) ?? 0;
        $this->data['total_order_count'] = $this->data_db->get_total_order_count_by_panchayath(0, $from_date, $to_date,$product) ?? 0;
        $this->data['total_order_count_cod'] = $this->data_db->get_total_order_count_by_panchayath(0, $from_date, $to_date, $product, 2) ?? 0;
        $this->data['total_order_count_online'] = $this->data_db->get_total_order_count_by_panchayath(0, $from_date, $to_date, $product, 1) ?? 0;
        $this->data['total_order_amount'] = $this->data_db->get_total_order_amount_by_panchayath(0, $from_date, $to_date, $product) ?? 0;
        $this->data['total_order_amount_cod'] = $this->data_db->get_total_order_amount_by_panchayath(0, $from_date, $to_date, $product, 2) ?? 0;
        $this->data['total_order_amount_online'] = $this->data_db->get_total_order_amount_by_panchayath(0, $from_date, $to_date, $product, 1) ?? 0;

        $this->data['panchayath'] = $this->main->get_panchayath();
        foreach($this->data['panchayath'] as $key => $panchayath){
            $this->data['panchayath'][$key]['panchayath_name'] = $panchayath['title'];
            $this->data['panchayath'][$key]['total_customers'] = $this->data_db->get_total_customers_count_by_panchayath($panchayath['id']) ?? 0;
            $this->data['panchayath'][$key]['total_ddp'] = count($this->data_db->get_total_ddp_list_by_panchayath($panchayath['id'])) ?? 0;

            $this->data['panchayath'][$key]['total_ward'] = $this->main->get_ward_by_panchayath_id($panchayath['id'])->num_rows() ?? 0;
            $this->data['panchayath'][$key]['total_order_count'] = $this->data_db->get_total_order_count_by_panchayath($panchayath['id'], $from_date, $to_date, $product) ?? 0;
            $this->data['panchayath'][$key]['total_order_count_cod'] = $this->data_db->get_total_order_count_by_panchayath($panchayath['id'], $from_date, $to_date, $product, 2) ?? 0;
            $this->data['panchayath'][$key]['total_order_count_online'] = $this->data_db->get_total_order_count_by_panchayath($panchayath['id'], $from_date, $to_date, $product, 1) ?? 0;
            $this->data['panchayath'][$key]['total_order_amount'] = $this->data_db->get_total_order_amount_by_panchayath($panchayath['id'], $from_date, $to_date, $product) ?? 0;
            $this->data['panchayath'][$key]['total_order_amount_cod'] = $this->data_db->get_total_order_amount_by_panchayath($panchayath['id'], $from_date, $to_date, $product, 2) ?? 0;
            $this->data['panchayath'][$key]['total_order_amount_online'] = $this->data_db->get_total_order_amount_by_panchayath($panchayath['id'], $from_date, $to_date, $product, 1) ?? 0;

        }

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
//            'format' => [100, 75],
            'margin_left' => 4,
            'margin_right' => 4,
            'margin_top' => 1,
            'margin_bottom' => 2,
        ]);
        $mpdf->AddPage();
        $html = $this->load->view('pdf/pdf_overall_report', $this->data, true);
        $mpdf->WriteHTML($html);

//        $mpdf->Output($pdf_url,'F');
        $mpdf->Output();
    }

//    public function update_quantity_report111() {
//        $order_items = $this->db->get('order_items')->result_array();
//        foreach($order_items as $item){
//            $data['quantity'] = $item['quantity_no'] * $item['unit_value'];
//            $this->db->where('id', $item['id']);
//            $this->db->update('order_items', $data);
//        }
//    }


    public function order_overview_report($param1 = '', $param2 = '') {
        $this->data['page_name'] = 'stock/order_overview_report';
        $this->load->view('admin/index', $this->data);
    }
    
    
     public function ajax_get_order_overview_report() {
        if ($this->input->post()) {
            $this->data['data']= $this->input->post();
            $date = $this->data['data']['order_date'];
            $this->data['order_report'] = $this->account_db->get_product_data($date);
            echo $this->load->view('admin/stock/order_overview_report_data', $this->data, true);
        }
    }
    
    public function order_overview_report_pdf_generator() {
        $this->data['order_date'] = $this->input->get('order_date') ?? date('Y-m-d');

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
//          'format' => [100, 75],
            'margin_left' => 4,
            'margin_right' => 4,
            'margin_top' => 1,
            'margin_bottom' => 2,
        ]);
        $this->data['order_report'] = $this->account_db->get_product_data($this->data['order_date']); 
        $mpdf->AddPage();
        $html = $this->load->view('pdf/pdf_order_overview_report', $this->data, true);
        $mpdf->WriteHTML($html);

//        $mpdf->Output($pdf_url,'F');
        $mpdf->Output();
    }
    
    
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
 //#######################    By theresa      ###################//
 

    /***    Delivery Boy   ***/

    public function delivery_boy($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_delivery_boy();
            redirect(base_url('admin/delivery_boy/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->edit_delivery_boy($param2);
            redirect(base_url('admin/delivery_boy/'), 'refresh');
        }elseif ($param1 == 'delete') {
            $this->main->delete_delivery_boy($param2);
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            redirect(base_url('admin/delivery_boy/'), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['page_name'] = 'delivery_boy_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] = 'delivery_boy_edit';
            $this->data['edit_data'] = $this->main->get_delivery_boy_single($param2);
        }else{
            $this->data['delivery_boys'] = $this->main->getDeliveryBoy($param1);
            $this->data['page_name'] = 'delivery_boy_list';
        }
        $this->load->view('admin/index', $this->data);
    }

    /***    Hotels  ***/

    public function hotel_user($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_hotel_user();
            redirect(base_url('admin/hotel_user/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->edit_hotel_user($param2);
            redirect(base_url('admin/hotel_user/'), 'refresh');
        }elseif ($param1 == 'delete') {
            $this->main->delete_hotel_user($param2);
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            redirect(base_url('admin/hotel_user/'), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['page_name'] = 'hotel_user_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] = 'hotel_user_edit';
            $this->data['edit_data'] = $this->main->get_hotel_user_single($param2);
        }else{
            $this->data['hotel_users'] = $this->main->get_hotel_user($param1);
            $this->data['page_name'] = 'hotel_user_list';
        }
        $this->load->view('admin/index', $this->data);
    }
    
    /***    Delivery Boy   ***/
    
    /***    Supplier   ***/

    public function supplier($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_suppliers();
            redirect(base_url('admin/supplier/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->edit_suppliers($param2);
            redirect(base_url('admin/supplier/'), 'refresh');
        }elseif ($param1 == 'delete') {
            $this->main->delete_suppliers($param2);
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            redirect(base_url('admin/supplier/'), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['page_name'] = 'supplier_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] = 'supplier_edit';
            $this->data['edit_data'] = $this->main->get_supplier_single($param2);
        }else{
            $this->data['suppliers'] = $this->main->get_suppliers()->result_array();
            $this->data['page_name'] = 'supplier_list';
        }
        $this->load->view('admin/index', $this->data);
    }
    /***    Supplier   ***/

	/***    Agent   ***/

    public function agent($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_agent();
            redirect(base_url('admin/agent/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->edit_agent($param2);
            redirect(base_url('admin/agent/'), 'refresh');
        }elseif ($param1 == 'delete') {
            $this->main->delete_agent($param2);
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            redirect(base_url('admin/agent/'), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['page_name'] = 'agent_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] = 'agent_edit';
            $this->data['edit_data'] = $this->main->get_agent_single($param2);
        }else{
            $this->data['agents'] = $this->main->get_agents()->result_array();
            $this->data['page_name'] = 'agent';
        }
        $this->load->view('admin/index', $this->data);
    }
    /***    Agent   ***/
    
    
    /***    public users   ***/
    public function users($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_users();
            redirect(base_url('admin/users/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->edit_users($param2);
            redirect(base_url('admin/users/'), 'refresh');
        }elseif ($param1 == 'delete') {
            $this->main->delete_users($param2);
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            redirect(base_url('admin/users/'), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['page_name'] = 'users_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] = 'users_edit';
            $this->data['edit_data'] = $this->main->get_single_users($param2);
        }else{
            $this->data['users'] = $this->main->getUsers($param1);
            $this->data['page_name'] = 'users_list';
        }
        $this->load->view('admin/index', $this->data);
    }
    
    

    /*** product specs items   ***/
    public function product_specs_items($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_product_specs_items();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/product_specs_items/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->edit_product_specs_items($param2);
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/product_specs_items/'), 'refresh');
        }elseif ($param1 == 'delete') {
            $this->main->delete_product_specs_items($param2);
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            redirect(base_url('admin/product_specs_items/'), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['page_name'] = 'product_specs_items_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] = 'product_specs_items_edit';
            $this->data['edit_data'] = $this->main->get_single_product_specs_items($param2);
        }else{
            $this->data['product_specs_items'] = $this->main->getProductSpecsItems($param1);
            $this->data['page_name'] = 'product_specs_items_list';
        }
        $this->load->view('admin/index', $this->data);
    }
    
    
    
    /*** product_specs   ***/
    public function product_specs($param1 = '', $param2 = '') {
        $this->data = [];
        $this->data['products_list'] 	= $this->main->get_products();
        $this->data['product_specs_item_list'] 	= $this->main->get_product_specs_items();

        if ($param1 == 'add') {
            $this->main->add_product_specs();
            redirect(base_url('admin/product_specs/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->edit_product_specs($param2);
            redirect(base_url('admin/product_specs/'), 'refresh');
        }elseif ($param1 == 'delete') {
            $this->main->delete_product_specs($param2);
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            redirect(base_url('admin/product_specs/'), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['page_name'] = 'product_specs_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] = 'product_specs_edit';
            $this->data['edit_data'] = $this->main->get_single_product_specs($param2);
        }else{
            $this->data['product_specs'] = $this->main->getProductSpecs($param1);
            $this->data['page_name'] = 'product_specs_list';
        }
        $this->load->view('admin/index', $this->data);
    }
    
    
    
    /*** secondary banner   ***/
    public function secondary_banner($param1 = '', $param2 = '') {

        if ($param1 == 'add') {
            $this->main->add_secondary_banner();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/secondary_banner/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->edit_secondary_banner($param2);
            set_alert(FLASH_SUCCESS, 'Updated successfully!');
            redirect(base_url('admin/secondary_banner/'), 'refresh');
        }elseif ($param1 == 'activate_secondary_banner') {
            $this->main->activate_secondary_banner($param2);
            set_alert(FLASH_SUCCESS, 'Activated successfully!');
            redirect(base_url('admin/secondary_banner/'), 'refresh');
        }elseif ($param1 == 'deactivate_secondary_banner') {
            $this->main->deactivate_secondary_banner($param2);
            set_alert(FLASH_SUCCESS, 'Deactivated successfully!');
            redirect(base_url('admin/secondary_banner/'), 'refresh');
        }elseif ($param1 == 'delete') {
            $this->main->delete_secondary_banner($param2);
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            redirect(base_url('admin/secondary_banner/'), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['page_name'] = 'secondary_banner_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] = 'secondary_banner_edit';
            $this->data['records'] = $this->main->get_single_secondary_banner($param2);
        }else{
            $this->data['banners'] = $this->main->getSecondaryBanner($param1);
            $this->data['page_name'] = 'secondary_banner_list';
        }
        $this->load->view('admin/index', $this->data);
    }
    
    
    // public function return_purchase($id){
    //     $products = $this->main->get_purchase_product($id);
    //     foreach($products as $key=> $product){
    //         $product_id[$key] = $product['product_id'];
    //         $quantity = $this->main->get_purchase_product_quantity($id,$product_id);
            
    //         foreach($quantity as $key=> $value){
    //             $qty[$key] = $value['quantity'];
    //             $data['purchase_id'] = $id;
    //             $data['product_id'] = $product_id;
    //             $data['quantity'] = $qty;
    //             $data['datetime'] = date('Y-m-d H:i:s');
    //             $this->main->return_purchase($data);
    //             set_alert(FLASH_SUCCESS, 'PurchaseReturn successfully!');
    //             redirect(base_url('admin/purchase/'), 'refresh');
    //         }
    //     }
    // }
    
    
    // public function pincodes(){
    //     if ($param1 == 'add') {
    //         $this->main->add_pincode();
    //         set_alert(FLASH_SUCCESS, 'Added successfully!');
    //         redirect(base_url('admin/pincodes/'), 'refresh');
    //     }elseif ($param1 == 'delete') {
    //         $this->main->delete_pincode($param2);
    //         set_alert(FLASH_SUCCESS, 'Deleted successfully!');
    //         redirect(base_url('admin/pincodes/'), 'refresh');
    //     }elseif ($param1 == 'add_form') {
    //         $this->data['page_name'] = 'pincode_add';
    //     }else{
    //         $this->data['pincodes'] = $this->main->getPincodes($param1);
    //         $this->data['page_name'] = 'pincode_list';
    //     }
    //     $this->load->view('admin/index', $this->data);
    // }
    
    /*** secondary banner   ***/
    public function pincodes($param1 = '', $param2 = '') {

        if ($param1 == 'add') {
            $this->main->add_pincode();
            set_alert(FLASH_SUCCESS, 'Added successfully!');
            redirect(base_url('admin/pincodes/'), 'refresh');
        }elseif ($param1 == 'delete') {
            $this->main->delete_pincode($param2);
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            redirect(base_url('admin/pincodes/'), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['page_name'] = 'pincode_add';
        }else{
            $this->data['pincodes'] = $this->main->getPincodes();
            $this->data['page_name'] = 'pincode_list';
        }
        $this->load->view('admin/index', $this->data);
    }
    
    public function update_purchase($id)
    {
        $this->main->update_single_purchase($id);
        set_alert(FLASH_SUCCESS, 'Updated successfully!');
        redirect(base_url('admin/purchase/'), 'refresh');
    }
    
     public function return_purchase()
     {
        $this->main->return_purchase_product();
        set_alert(FLASH_SUCCESS, 'Added successfully!');
        redirect(base_url('admin/purchase/'), 'refresh');
    }
    
    
    public function purchase_return_report($param1 = '', $param2 = '') {
		$this->data['categories'] 		= $this->main->get_categories(['id', 'category']);
		$this->data['suppliers_list'] 	= $this->main->get_suppliers()->result_array();
		$this->data['products_list'] 	= $this->main->get_products();

		if($param1 == 'delete' && $param2 > 0){
			$this->db->where('id', $param2);
			$this->db->delete('purchase_return');
			set_alert(FLASH_SUCCESS, 'Deleted successfully!');
			redirect(base_url('admin/purchase_return_report/'), 'refresh');
		}

        $this->data['page_name'] = 'purchase/purchase_return_report';
        $this->data['menu_name'] = 'purchase return';
        $this->load->view('admin/index', $this->data);
    }
    
    public function ajax_get_purchase_return_report() {
        if ($this->input->post()) {
            $this->data['to_date'] = $this->input->post('to_date');
            $this->data['from_date'] = $this->input->post('from_date');
            $this->data['product_id'] = $this->input->post('product_id');


			$this->data['purchase_return'] = $this->main->get_purchase_return_details($this->data['from_date'], $this->data['to_date'], $this->data['product_id']);

            echo $this->load->view('admin/purchase/purchase_return_report_data', $this->data, true);
        }
    }
    
    public function purchase_return_pdf_generator() {
        $return_date = $this->input->get('return_date');
        $product_id = $this->input->get('product_id');

        $this->data['purchase_return'] = $this->main->get_purchase_return_details($return_date,$product_id);

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
//            'format' => [100, 75],
            'margin_left' => 4,
            'margin_right' => 4,
            'margin_top' => 1,
            'margin_bottom' => 2,
        ]);
        $mpdf->AddPage();
        $html = $this->load->view('pdf/pdf_purchase_return_report', $this->data, true);
        $mpdf->WriteHTML($html);

//        $mpdf->Output($pdf_url,'F');
        $mpdf->Output();
    }


	public function sales_item_report($param1 = '', $param2 = '') {
		$this->data['products_list'] 	= $this->main->get_products();

        $this->data['page_name'] = 'report/sales_item_report';
        $this->data['menu_name'] = 'sales return';
        $this->load->view('admin/index', $this->data);
    }

    public function ajax_get_sales_item_report() {
        if ($this->input->post()) {
            $this->data['to_date'] = $this->input->post('to_date');
            $this->data['from_date'] = $this->input->post('from_date');
            $this->data['product_id'] = $this->input->post('product_id');


			$this->data['sales_item_report'] = $this->main->ajax_get_sales_item_report($this->data['from_date'], $this->data['to_date'], $this->data['product_id']);

            echo $this->load->view('admin/report/sales_item_report_data', $this->data, true);
        }
    }

    public function sales_item_report_pdf_generator() {
        $return_date = $this->input->get('return_date');
        $product_id = $this->input->get('product_id');

        $this->data['purchase_return'] = $this->main->get_purchase_return_details($return_date,$product_id);

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
//            'format' => [100, 75],
            'margin_left' => 4,
            'margin_right' => 4,
            'margin_top' => 1,
            'margin_bottom' => 2,
        ]);
        $mpdf->AddPage();
        $html = $this->load->view('pdf/pdf_purchase_return_report', $this->data, true);
        $mpdf->WriteHTML($html);

//        $mpdf->Output($pdf_url,'F');
        $mpdf->Output();
    }
    
    /***    Taxes   ***/

    public function taxes($param1 = '', $param2 = '') {
        $this->data = [];
        if ($param1 == 'add') {
            $this->main->add_taxes();
            redirect(base_url('admin/taxes/'), 'refresh');
        }elseif ($param1 == 'edit') {
            $this->main->edit_taxes($param2);
            redirect(base_url('admin/taxes/'), 'refresh');
        }elseif ($param1 == 'delete') {
            $this->main->delete_taxes($param2);
            set_alert(FLASH_SUCCESS, 'Deleted successfully!');
            redirect(base_url('admin/taxes/'), 'refresh');
        }elseif ($param1 == 'add_form') {
            $this->data['page_name'] = 'taxes_add';
        }elseif ($param1 == 'edit_form') {
            $this->data['page_name'] = 'taxes_edit';
            $this->data['edit_data'] = $this->main->get_tax_single($param2);
        }else{
            $this->data['taxes'] = $this->main->get_taxes()->result_array();
            $this->data['page_name'] = 'taxes_list';
        }
        $this->load->view('admin/index', $this->data);
    }
    /***    Taxes   ***/

    
    public function user_export(){
       $this->data['users'] = $this->main->get_all_users();
        log_message("error","theresa".print_r($this->db->last_query(),true));
        log_message("error","theresa".print_r($this->data['users'],true));
        $file_name = "uploads/users.csv";
        $fp = fopen($file_name, 'w');
        fputcsv($fp, ['No', 'Name', 'Phone', 'Full Address']);

        foreach($this->data['users'] as $key=> $users){
            $row['No'] = $key+1;
            $row['Name'] = $users['name'];
            $row['Phone'] = $users['phone'];
            $row['Full Address'] = $users['full_address'];
            fputcsv($fp, $row);
        }
        fclose($fp);
        
        redirect(base_url('uploads/users.csv'));

        $this->data['page_name'] = 'users_list';
        $this->load->view('admin/index', $this->data);
	}
	
	
	
	
	
	
// 	public function processCSV() {
//         $file_path = 'uploads/CSV/new_redirect_sheet.csv';
//         $file = fopen($file_path, 'r');
        
//         if ($file !== false) {
//             // Initialize an empty array to store rows of data
//             $rows = [];
        
//             while (($data = fgetcsv($file)) !== false) {
//               // Process each row of data from the CSV file
//               $rows[] = $data; // Add the current row to the array
//             }
        
//             fclose($file);
            
//             // Iterate over the rows array row by row
//             $domain = 'https://www.kuruvaislandresort.com';
//             $redirects = [];
//             foreach ($rows as $key => $row) {
                 
//                 if($key > 0){
                    
//                     $trimmed_address = str_replace($domain, '', $row['0']);
//                     $string = 'Redirect 301'." ".$trimmed_address." ".$row['1'];
//                     $redirects[] = $string;
                
//                 }
                
//             }
           
//         //   $address = 
//           log_message('error',print_r($redirects,true));
//             // foreach ($redirects as $redirect) {
//             //     echo $redirect . PHP_EOL;
//             // }
            
//         }
      
//     }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

}
