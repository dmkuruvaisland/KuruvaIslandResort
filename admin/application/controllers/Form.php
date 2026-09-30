<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends MY_Controller {

    public function __construct () {
        parent::__construct();
        $this->load->model('form_m');
    }
        
        
        //  public function index(){
        
//         $this->data['blogs'] = $this->blog_m->get()->result_array();
// 	    $this->data['page_name']  = 'blog';
// 		$this->load->view('website/blog', $this->data);
//   }
  
//  public function booking_form(){
//         // $this->data['page_name']  = 'booking_form';
// 		$this->load->view('website/booking_form', $this->data);
//   }

// 	public function index(){
// 	        $this->data['blogs'] = $this->blog_m->get()->result_array();
            
//             // Set metadata
//             $this->data['canonical_url']  = base_url('website/blog-details/'.$slug);
//             $this->data['og_image']       = base_url('assets/website/images/home-about.jpg');
//             $this->data['og_type']        = 'article';
//             $this->data['og_description'] = $blog['meta_description'];
//             $this->data['og_image']       = $blog['image'];
//             $this->data['page_title']     = $blog['title'];
//             $this->data['page_name']      = 'website/blog-details';
	    
// 	    $this->load->view('website/blog', $this->data);
// 	}
	
// 	public function blog_details($slug = ''){
// 	    $blog = $this->blog_m->getBlogBySlug($slug);
//         // $this->data['blogs'] = $this->blog_m->get_recent_blogs($slug);
//         // log_message("error","cgsacg ".print_r($this->db->last_query(),true));
//         $this->load->view('website/blog-details', $blog);
// 	}

// 	public function index() {
	    
// 	    $this->data['blogs']   = $this->blog_m->get()->result_array();
// 		$this->data['page_title'] = 'Glog';
// 		$this->data['page_name']  = 'website/blog';
		
// 		$this->load->view('website/blog', $this->data);
// 	}
    public function booking_form_submittion(){
        // Collect form input
	    $name = $this->input->post('name');
	    $email = $this->input->post('email');
	    $number = $this->input->post('number');
	    $subject = $this->input->post('subject');
	    $message = $this->input->post('message');
	    $recaptchaResponse = $this->input->post('g-recaptcha-response');

	    // Verify reCAPTCHA
	    $secretKey = '6Les00oqAAAAACqQH08EaCG1YrM-YxpaxHz5kOPM'; // Replace with your secret key
	    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}");
	    $responseData = json_decode($verifyResponse);
	    
	    if($responseData->success) {
	        // reCAPTCHA verification success
	        
	        // Insert to 'contact_form' table
	        $user = [
	            'name'       => $name,
	            'email'      => $email,
	            'number'     => $number,
	            'subject'    => $subject,
	            'message'    => $message,
	            'created_on' => date('Y-m-d H:i:s'),
	        ];
	        
	        $insert_id = $this->db->insert('contact_form', $user);
	        
	        if($insert_id) {
	            // Send confirmation email
	            $this->send_mail($name, $email, $number, $subject, $message);
	        }
	        
	        // Redirect on success
	        redirect('https://kuruvaislandresort.com/thanks');
	    } else {
	        // reCAPTCHA verification failed
	        redirect('https://kuruvaislandresort.com/error');
	    }
    }
    
    public function send_mail($name, $email, $number, $subject, $message) {
        $body = "<!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <title>Contact Form</title>
        </head>
        <body style=\"font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333; padding: 20px;\">
            <div style=\"max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);\">
                <h2 style=\"text-align: center; color: #333;\">Contact Form</h2>
                <p>Dear Admin,</p>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Phone:</strong> $number</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Subject:</strong> $subject</p>
                <p><strong>Message:</strong> $message</p>
            </div>
        </body>
        </html>";
        
        send_email($name, $email, $body);
    }
}
