<?php
require APPPATH . '/libraries/TokenHandler.php';
//include Rest Controller library
require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller
{
    protected $token;
	/**
	 * @var array|false
	 */
	private $token_data;
	/**
	 * @var TokenHandler
	 */
	private $tokenHandler;

	public function __construct() {
        parent::__construct();
        ini_set('display_errors', 1);
        header('Content-Type: application/json');
        $this->load->database();
        $this->load->model('data_db');
        $this->load->model('main');
		
		$this->tokenHandler = new TokenHandler();
		$this->token_data = $this->token_data();

        // creating object of TokenHandler class at first
        
        log_message('error', "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
        log_message('error', json_encode($_REQUEST));
    }


	public function register_user_post() {

		if ($this->main->check_phone_duplicate($this->input->post('phone')) == false) {
			$user_id = $this->data_db->register_user();
			if ($user_id > 0) {

				//REWARD USER FREE COINS
				$reward_wallet = [
					'user_id' 		=> $user_id,
					'amount' 		=> get_settings('reward_new_user_amount'),
					'reward_type ' 	=> 1, //new_user
					'datetime' 		=> date('Y-m-d H:i:s')
				];
				$this->data_db->reward_user_wallet($reward_wallet);
				//END OF REWARD USER FREE COINS

				$phone 	= $this->input->post('phone');
				$phone2 = $this->input->post('code') . $phone;
				$otp 	= rand(1000, 9999);
				$this->data_db->update_otp($user_id, $otp);
				//send SMS
				$this->sms_api('+' . $phone2, $otp);
				$response = ['status' => 1, 'message' => 'Success', 'data' => ['user_id' => $user_id]];
			} else {
				$response = ['status' => 0, 'message' => 'Failed!', 'data' => []];
			}
		} else {
			$response = ['status' => 0, 'message' => 'Phone no already exists!', 'data' => []];
		}
		$this->response($response, REST_Controller::HTTP_OK);
	}

    public function login_get() {
        $phone 	= $this->input->get('phone');
        $phone2 = $this->input->get('code') . $phone;
        $result = $this->data_db->login_get($phone, $phone2);
        if ($result->num_rows() > 0) {
            $user = $result->row_array();
            if($phone == '9946801100'){
                $otp = 1234;
            }else{
                $otp = rand(1000, 9999);
            }
            
            $this->data_db->update_otp($user['id'], $otp);
            //send SMS
            $this->sms_api('+' . $phone2, $otp);

            $response = ['status' => 1, 'message' => 'Success', 'data' => $user];
        } else {
            $response = ['status' => 0, 'message' => 'Please Register First!', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    public function verify_otp_get() {
        $user_id = $this->input->get('user_id');
        $otp = $this->input->get('otp');

        $result = $this->data_db->verify_otp($user_id, $otp);

        if ($result->num_rows() > 0) {
            $user = $result->row_array();
            $user ['user_id'] = $user['id'];
            //generating token
            $user['token'] = $this->tokenHandler->GenerateToken($user);
			$this->session->set_userdata('user_login', TRUE);
			$this->session->set_userdata('logged_user_id', $user['id']);
			$this->session->set_userdata('auth_token', $user['token']);

            $response = ['status' => 1, 'message' => 'Success', 'data' => $user];
        } else {
            $response = ['status' => 0, 'message' => 'OTP does not matches!', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

	public function get_district_get(){
		$district = $this->data_db->get_district();
		$response = ['status' => 1, 'message' => 'Success', 'data' => $district];
		$this->response($response, REST_Controller::HTTP_OK);
	}

    public function userdata_get() {
        if ($this->token_data != false) {
			$data 		= $this->data_db->get_user_by_id($this->token_data['id']);
            $response 	= ['status' => 1, 'message' => 'Success', 'data' => $data];
        } else {
            $response 	= ['status' => 0, 'message' => 'Failed!', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }
	public function userdata_by_user_id_get() {
        if ($this->token_data != false) {
			$data 		= $this->data_db->get_user_by_id($this->input->get('user_id'));
            $response 	= ['status' => 1, 'message' => 'Success', 'data' => $data];
        } else {
            $response 	= ['status' => 0, 'message' => 'Failed!', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

	public function homepage_data_get() {
		$user_id = $this->token_data != false ? $this->token_data['id'] : 0;

		$data = [
			'banners' 			=> $this->banners_data($this->data_db->banner_get()),
			'banners_secondary' => $this->secondary_banners_data($this->data_db->secondary_banner_get()),
			'categories' 		=> $this->get_categories_data($this->data_db->get_categories()),
			'contact_details'	=> $this->data_db->contact_get(),
			'products' 			=> $this->data_db->product_data($this->data_db->get_product_all(), $user_id),
			'popular_products' 	=> $this->data_db->product_data($this->data_db->popular_item_get(), $user_id),
		];

		$response = ['status' => 1, 'message' => 'Success', 'data' => $data];
		$this->response($response, REST_Controller::HTTP_OK);
	}

	private function secondary_banners_data($secondary_banners): array {
		foreach ($secondary_banners as $key => $row2) {
			$secondary_banners[$key]['id'] 		= $row2["id"];
			$secondary_banners[$key]['banner'] 	= base_url() . "uploads/secondary_banner/" . $row2["banner"];
			$secondary_banners[$key]['status'] 	= $row2["status"];
		}
		return $secondary_banners;
	}

	private function banners_data($banners): array {
		foreach ($banners as $key => $row) {
			$banners[$key]['id'] 		= $row["id"];
			$banners[$key]['banner'] 	= base_url() . "uploads/banner/" . $row["banner"];
			$banners[$key]['status'] 	= $row["status"];
		}
		return $banners;
	}



	private function get_categories_data($categories): array {
		foreach ($categories as $key => $category){
			$categories[$key]['image'] = base_url('uploads/category/'.$category['image']);
		}
		return $categories;
	}


	public function category_wise_products_get()
	{
		$user_id 		= $this->token_data != false ? $this->token_data['id'] : 0;
		$category_id	= $this->input->get('category_id');
		$products		= $this->data_db->product_data($this->data_db->get_product_all(['category_id' => $category_id]), $user_id);

		$response = ['status' => 1, 'message' => 'Success', 'data' => $products];

		$this->response($response, REST_Controller::HTTP_OK);
	}

	public function product_list_get(){
		$user_id 		= $this->token_data != false ? $this->token_data['id'] : 0;
		$product_list 	= $this->data_db->product_data($this->data_db->get_product_all(), $user_id);
		$response 		= ['status' => 1, 'message' => 'Success', 'data' => $product_list];
		$this->response($response, REST_Controller::HTTP_OK);
	}


	/**
	 * FAVORITES - USER BOOKMARKS
	 */
	public function add_to_favourite_get(){
		$auth_token = $this->input->get('auth_token');
		$token_data = $this->token_data_get($auth_token);
		if ($token_data != false) {
			$data = [
				'user_id' => $this->input->get('user_id'),
				'product_id' => $this->input->get('product_id')
			];
			$this->data_db->add_to_favourite($data);
			$response = ['status' => 1, 'message' => 'Added successfully!', 'data' => []];
		}else{
			$response = ['status' => 0, 'message' => 'Authentication failed!', 'data' => []];
		}
		$this->response($response, REST_Controller::HTTP_OK);
	}

	public function remove_from_favourite_get(){
		$auth_token = $this->input->get('auth_token');
		$token_data = $this->token_data_get($auth_token);
		if ($token_data != false) {
			$user_id = $this->input->get('user_id');
			$product_id = $this->input->get('product_id');
			$this->data_db->remove_from_favourite($user_id, $product_id);
			$response = ['status' => 1, 'message' => 'Removed successfully!', 'data' => []];
		}else{
			$response = ['status' => 0, 'message' => 'Authentication failed!', 'data' => []];
		}
		$this->response($response, REST_Controller::HTTP_OK);
	}

	public function favourite_products_get(){
		if ($this->token_data != false) {
			$products = $this->data_db->product_data($this->data_db->favourite_products($this->token_data['id']), $this->token_data['id']);
			$response = ['status' => 1, 'message' => 'Success!', 'data' => $products];
		}else{
			$response = ['status' => 0, 'message' => 'Authentication failed!', 'data' => []];
		}
		$this->response($response, REST_Controller::HTTP_OK);
	}

	public function get_agent_users_get(){
		if ($this->token_data != false) {
			$agent = $this->db->get_where('users', ['id' => $this->token_data['id']])->row();
			if($agent->role_id == 4){
				$agent_users = $this->data_db->get_agent_users($this->token_data['id']);
				$response = ['status' => 1, 'message' => 'Success', 'data' => $agent_users];
			}else{
				$response = ['status' => 0, 'message' => 'Permission denied!', 'data' => []];
			}
		}else{
			$response = ['status' => 0, 'message' => 'Authentication failed', 'data' => []];
		}
		$this->response($response, REST_Controller::HTTP_OK);
	}





    public function get_products_get() {
        $item_array = [];
        $products = $this->data_db->item_get();
        foreach ($products as $key => $row) {
            $item_array[$key] = $this->data_db->set_product_data($row);
        }
        $response = ['status' => 1, 'message' => 'Success', 'data' => $item_array];
        $this->response($response, REST_Controller::HTTP_OK);
    }


    public function product_variant_get(){
        $product_id 	= $this->input->get('product_id');
        $product 		= $this->data_db->set_product_data($this->data_db->get_product_single($product_id));

        $product['product_specs'] 	= $this->data_db->get_product_specs($product_id);;
        $product['product_variant'] = $this->data_db->get_product_variant($product_id);

        foreach($product['product_variant'] as $key => $product_variant){
            $product['product_variant'][$key] = $this->data_db->set_product_variant_data($product_variant, $product['product_image']);
        }
        $response = ['status' => 1, 'message' => 'Success', 'data' => [$product]];
        $this->response($response, REST_Controller::HTTP_OK);
    }


    public function add_ward_by_distributor_post() {
        $auth_token = $this->input->post('auth_token');
        $token_data = $this->token_data_get($auth_token);
        $response = [];
        if ($token_data != false) {
            if ($token_data['role_id'] == '2') {
                if ($this->data_db->add_ward($this->input->post('ward'), $this->input->post('panchayath_id'), $token_data['id']) > 0) {
                    $response = ['status' => 1, 'message' => 'Success', 'data' => []];
                } else {
                    $response = ['status' => 0, 'message' => 'Failed!', 'data' => []];
                }
            }
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    public function add_agent_by_distributor_post() {
        $auth_token = $this->input->post('auth_token');
        $token_data = $this->token_data_get($auth_token);
        $response = [];

        if ($token_data != false) {
            if ($token_data['role_id'] == '2') {
                $data = [
                    'name' => $this->input->post('agent'),
                    'phone' => $this->input->post('phone'),
                    'panchayath_id' => $this->input->post('panchayath_id'),
                    'ward_id' => $this->input->post('ward'),
                    'role_id' => 3,
                    'added_by' => $token_data['id'],
                ];
                $user_id = $this->data_db->add_agent($data);
                if ($user_id > 0) {
                    $aasign = [
                        'panchayath_id' => $data['panchayath_id'],
                        'ward_id' => $data['ward_id'],
                        'user_id' => $user_id,
                    ];
                    $this->data_db->assign_user($aasign);
                    $response = ['status' => 1, 'message' => 'Success', 'data' => []];
                } else {
                    $response = ['status' => 0, 'message' => 'Failed!', 'data' => []];
                }
            }
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }


    public function add_notification_token_get() {
        $auth_token = $this->input->get('auth_token');
        $token_data = $this->token_data_get($auth_token);
        $notification_token = $this->input->get('token');
        $response = [];
        if ($token_data != false) {
            if ($token_data['id'] > 0) {
                if ($this->data_db->add_notification_token($token_data['id'], $notification_token) == true) {
                    $response = ['status' => true, 'message' => 'Success', 'data' => []];
                } else {
                    $response = ['status' => false, 'message' => 'something went wrong', 'data' => []];
                }
            }
        } else {
            $response = ['status' => true, 'message' => 'Success', 'data' => []];
        }
        return $this->set_response($response, REST_Controller::HTTP_OK);
    }


    public function get_notification_get() {
        $notification = $this->data_db->notification_get();
        // $response = ['status'=> 1, 'message'=>'Success', 'data'=> $notification];
        $response = $notification;
        $this->response($response, REST_Controller::HTTP_OK);
    }


    public function add_dynamic_link_get() {
        $auth_token = $this->input->get('auth_token');
        $token_data = $this->token_data_get($auth_token);
        $dynamic_link = $this->input->get('dynamic_link');
        $response = [];
        if ($token_data != false) {
            if ($token_data['id'] > 0) {
                if ($this->data_db->add_dynamic_link($token_data['id'], $dynamic_link) == true) {
                    $response = ['status' => true, 'message' => 'Success', 'data' => []];
                } else {
                    $response = ['status' => false, 'message' => 'something went wrong', 'data' => []];
                }
            }
        } else {
            $response = ['status' => true, 'message' => 'Success', 'data' => []];
        }
        return $this->set_response($response, REST_Controller::HTTP_OK);
    }


    public function add_user_post() {

        $auth_token = $this->input->post('auth_token');
        $token_data = $this->token_data_get($auth_token);
        $response = [];

        if ($token_data != false) {
            if ($token_data['role_id'] == '2') {
                if ($this->main->check_phone_duplicate($this->input->post('phone')) == false) {
                    if ($this->data_db->add_user($this->input->post('user'), $this->input->post('phone'), $this->input->post('panchayath_id'), $this->input->post('ward'), $token_data['id']) > 0) {
                        $response = ['status' => 1, 'message' => 'Success', 'data' => ''];
                    } else {
                        $response = ['status' => 0, 'message' => 'Failed!', 'data' => []];
                    }
                } else {
                    $response = ['status' => 0, 'message' => 'Phone no already exisiting', 'data' => []];

                }
            } elseif ($token_data['role_id'] == '3') {
                if ($this->main->check_phone_duplicate($this->input->post('phone')) == false) {
                    if ($this->data_db->add_user($this->input->post('user'), $this->input->post('phone'), $this->input->post('panchayath_id'), $this->input->post('ward'), $token_data['id']) > 0) {
                        $response = ['status' => 1, 'message' => 'Success', 'data' => ''];
                    } else {
                        $response = ['status' => 0, 'message' => 'Failed!', 'data' => []];
                    }
                } else {
                    $response = ['status' => 0, 'message' => 'Phone no already exisiting', 'data' => []];

                }
            }
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    /**
     * User address
     */
    public function add_address_post(){
        $auth_token = $this->input->post('auth_token');
        $token_data = $this->token_data_get($auth_token);

        if ($token_data != false) {
            $address = [
                'user_id' => $token_data['id'],
                'house_no' => $this->input->post('house_no'),
                'street' => $this->input->post('street'),
                'landmark' => $this->input->post('landmark'),
                'pincode' => $this->input->post('pincode'),
                'city' => $this->input->post('city'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'full_address' => $this->input->post('full_address'),
                'address_type' => strtolower($this->input->post('address_type')),
            ];
            if($this->data_db->add_address($address)){
                $response = ['status' => 1, 'message' => 'Success', 'data' => []];
            }else{
                $response = ['status' => 0, 'message' => 'Something went wrong', 'data' => []];
            }
        }else{
            $response = ['status' => 0, 'message' => 'Authentication failed', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    public function edit_address_post(){
        $auth_token = $this->input->post('auth_token');
        $token_data = $this->token_data_get($auth_token);

        if ($token_data != false) {
            $address_id = $this->input->post('address_id');
            $address = [
                'house_no' => $this->input->post('house_no'),
                'street' => $this->input->post('street'),
                'landmark' => $this->input->post('landmark'),
                'pincode' => $this->input->post('pincode'),
                'city' => $this->input->post('city'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'full_address' => $this->input->post('full_address'),
                'address_type' => strtolower($this->input->post('address_type')),
            ];
            if($this->data_db->edit_address($address, $address_id)){
                $response = ['status' => 1, 'message' => 'Success', 'data' => []];
            }else{
                $response = ['status' => 0, 'message' => 'Something went wrong', 'data' => []];
            }
        }else{
            $response = ['status' => 0, 'message' => 'Authentication failed', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    public function delete_address_post(){
        $auth_token = $this->input->post('auth_token');
        $token_data = $this->token_data_get($auth_token);
		$address_id = $this->input->post('address_id');

        if ($token_data != false && $address_id!=9999) {
            if($this->data_db->delete_address($address_id)){
                $response = ['status' => 1, 'message' => 'Success', 'data' => []];
            }else{
                $response = ['status' => 0, 'message' => 'Something went wrong', 'data' => []];
            }
        }else{
            $response = ['status' => 0, 'message' => 'Authentication failed', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    public function get_address_by_user_get(){

        if ($this->token_data != false) {
            $address_list = $this->data_db->address_data($this->token_data['id']);
            $response = ['status' => 1, 'message' => 'Success', 'data' => $address_list];
        }else{
            $response = ['status' => 0, 'message' => 'Authentication failed', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

	/**
	 * User address by agent
	 */
	public function add_address_agent_post(){
        $auth_token = $this->input->post('auth_token');
        $user_id = $this->input->post('user_id');
        $token_data = $this->token_data_get($auth_token);

        if ($token_data != false) {
            $address = [
                'user_id' => $user_id,
                'house_no' => $this->input->post('house_no'),
                'street' => $this->input->post('street'),
                'landmark' => $this->input->post('landmark'),
                'pincode' => $this->input->post('pincode'),
                'city' => $this->input->post('city'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'full_address' => $this->input->post('full_address'),
                'address_type' => strtolower($this->input->post('address_type')),
            ];
            if($this->data_db->add_address($address)){
                $response = ['status' => 1, 'message' => 'Success', 'data' => []];
            }else{
                $response = ['status' => 0, 'message' => 'Something went wrong', 'data' => []];
            }
        }else{
            $response = ['status' => 0, 'message' => 'Authentication failed', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    public function edit_address_agent_post(){
        $auth_token = $this->input->post('auth_token');
		$user_id = $this->input->post('user_id');
        $token_data = $this->token_data_get($auth_token);

        if ($token_data != false) {
            $address_id = $this->input->post('address_id');
            $address = [
                'house_no' => $this->input->post('house_no'),
                'street' => $this->input->post('street'),
                'landmark' => $this->input->post('landmark'),
                'pincode' => $this->input->post('pincode'),
                'city' => $this->input->post('city'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'full_address' => $this->input->post('full_address'),
                'address_type' => strtolower($this->input->post('address_type')),
            ];
            if($this->data_db->edit_address($address, $address_id)){
                $response = ['status' => 1, 'message' => 'Success', 'data' => []];
            }else{
                $response = ['status' => 0, 'message' => 'Something went wrong', 'data' => []];
            }
        }else{
            $response = ['status' => 0, 'message' => 'Authentication failed', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    public function delete_address_agent_post(){
        $user_id = $this->input->post('user_id');
        $auth_token = $this->input->post('auth_token');
        $token_data = $this->token_data_get($auth_token);
		$address_id = $this->input->post('address_id');

        if ($token_data != false && $address_id!=9999) {
            if($this->data_db->delete_address($address_id)){
                $response = ['status' => 1, 'message' => 'Success', 'data' => []];
            }else{
                $response = ['status' => 0, 'message' => 'Something went wrong', 'data' => []];
            }
        }else{
            $response = ['status' => 0, 'message' => 'Authentication failed', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    public function get_address_by_user_agent_get(){
		$user_id = $this->input->get('user_id');
        if ($this->token_data != false) {
            $address_list = $this->data_db->address_data($user_id);
            $response = ['status' => 1, 'message' => 'Success', 'data' => $address_list];
        }else{
            $response = ['status' => 0, 'message' => 'Authentication failed', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }




    /**
     * Cart
     */
    public function cart_get() {
        if ($this->token_data != false) {
            $response = ['status' => 1, 'message' => 'Success', 'data' => $this->data_db->cart_data($this->token_data['id'])];
        }else{
			$response = ['status' => 0, 'message' => 'Authentication failed', 'data' => []];
		}
        $this->response($response, REST_Controller::HTTP_OK);
    }
	public function cart_agent_get() {
        if ($this->token_data != false) {
			$agent = $this->db->get_where('users', ['id' => $this->token_data['id']])->row();
			if($agent->role_id == 4){
				$user_id = $this->input->get('user_id');
				$response = ['status' => 1, 'message' => 'Success', 'data' => $this->data_db->cart_data($user_id)];
			}else{
				$response = ['status' => 0, 'message' => 'Authentication failed', 'data' => []];
			}
        }else{
			$response = ['status' => 0, 'message' => 'Authentication failed', 'data' => []];
		}
        $this->response($response, REST_Controller::HTTP_OK);
    }
    
    
     /**
     * Pincodes
     */
    public function available_pincodes_get() {
        
// 		$response = [
// 		    '673018',
// 		    '673032',
// 		    '673001',
// 		    '673020'
// 		];
		
		$response = array_column($this->data_db->get_pincodes(), 'pincode');

        $this->response($response, REST_Controller::HTTP_OK);
    }
    
    
    public function add_cart_get() {
        $response = [];
        if ($this->token_data() != false) {
            $data['user_id'] 		= $this->token_data['id'];
            $data['product_id'] 	= $this->input->get('product_id');
            $data['variant_id'] 	= $this->input->get('variant_id') ?? 0;
			$data['quantity'] 		= $this->input->get('quantity');
			$product_variant_price 	= $this->data_db->get_product_variant_price($data['product_id'], $data['variant_id']);

			$unit_value 			= $this->main->convert_unit_value($product_variant_price['gross_weight']);
			$data['quantity_no'] 	= $data['quantity'] / $unit_value;

			if ($this->data_db->add_cart($data) != false) {
				$response = ['status' => 1, 'message' => 'Success', 'data' => $this->data_db->cart_data($this->token_data['id'])];
			} else {
				$response = ['status' => 0, 'message' => 'No stock available!', 'data' => $this->data_db->cart_data($this->token_data['id'])];
			}

        }else{
			$response = ['status' => 0, 'message' => 'Authentication Failed!', 'data' => []];
		}

        $this->response($response, REST_Controller::HTTP_OK);
    }

	public function add_cart_agent_get() {
        $response = [];
        if ($this->token_data() != false) {
            $data['user_id'] 		= $this->input->get('user_id');
            $data['product_id'] 	= $this->input->get('product_id');
            $data['variant_id'] 	= $this->input->get('variant_id') ?? 0;
			$data['quantity'] 		= $this->input->get('quantity');
			$product_variant_price 	= $this->data_db->get_product_variant_price($data['product_id'], $data['variant_id']);

			$unit_value 			= $this->main->convert_unit_value($product_variant_price['gross_weight']);
			$data['quantity_no'] 	= $data['quantity'] / $unit_value;

			if ($this->data_db->add_cart($data) != false) {
				$response = ['status' => 1, 'message' => 'Success', 'data' => $this->data_db->cart_data($data['user_id'])];
			} else {
				$response = ['status' => 0, 'message' => 'No stock available!', 'data' => $this->data_db->cart_data($data['user_id'])];
			}

        }else{
			$response = ['status' => 0, 'message' => 'Authentication Failed!', 'data' => []];
		}

        $this->response($response, REST_Controller::HTTP_OK);
    }

    public function remove_item_from_cart_get() {
        $response = [];
        if ($this->token_data != false) {
            $product_id = $this->input->get('product_id');
            $variant_id = $this->input->get('variant_id');
            if ($this->data_db->remove_cart($this->token_data['id'], $product_id, $variant_id) != false) {
                $response = ['status' => 1, 'message' => 'Success', 'data' => $this->data_db->cart_data($this->token_data['id'])];
            } else {
                $response = ['status' => 0, 'message' => 'Failed!', 'data' => []];
            }
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

	public function remove_item_from_cart_agent_get() {
        $response = [];
        if ($this->token_data != false) {
            $user_id = $this->input->get('user_id');
            $product_id = $this->input->get('product_id');
            $variant_id = $this->input->get('variant_id');
            if ($this->data_db->remove_cart($user_id, $product_id, $variant_id) != false) {
                $response = ['status' => 1, 'message' => 'Success', 'data' => $this->data_db->cart_data($user_id)];
            } else {
                $response = ['status' => 0, 'message' => 'Failed!', 'data' => []];
            }
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    public function remove_cart_get() {
        $response = [];
        if ($this->token_data != false) {
            $product_id = $this->input->get('product_id');
            $variant_id = $this->input->get('variant_id');
            if ($this->data_db->remove_cart($this->token_data['id'], $product_id, $variant_id) != false) {
                $response = ['status' => 1, 'message' => 'Success', 'data' => $this->data_db->cart_data($this->token_data['id'])];
            } else {
                $response = ['status' => 0, 'message' => 'Failed!', 'data' => []];
            }
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

	public function remove_cart_agent_get() {
        $response = [];
        if ($this->token_data != false) {
            $user_id 	= $this->input->get('user_id');
            $product_id = $this->input->get('product_id');
            $variant_id = $this->input->get('variant_id');
            if ($this->data_db->remove_cart($user_id, $product_id, $variant_id) != false) {
                $response = ['status' => 1, 'message' => 'Success', 'data' => $this->data_db->cart_data($user_id)];
            } else {
                $response = ['status' => 0, 'message' => 'Failed!', 'data' => []];
            }
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }




    
    private function user_list_order_status($users): array {
        foreach ($users as $key => $user){
            $users[$key]['is_ordered'] = $this->data_db->get_user_order_status($user['id']);
            $users[$key]['is_ordered_text'] = $users[$key]['is_ordered'] ? 'Ordered' : 'Not Ordered';
        }
        return $users;
    }




    


    /**
     * WALLET
    */
    public function get_wallet_get(){
        $auth_token = $this->input->get('auth_token');
        $token_data = $this->token_data_get($auth_token);
        if ($token_data != false) {
            $user_id = $this->input->get('user_id') ? $this->input->get('user_id'): $token_data['id'];
            $wallet['daily_collection'] = "₹ ".number_format($this->data_db->get_daily_collection_ddp($user_id) ?? 0, 2);
            $wallet['wallet_order'] = "₹ ".number_format($this->data_db->get_wallet_amount($user_id, 'order') ?? 0, 2);
            $wallet['wallet_delivery'] = "₹ ".number_format($this->data_db->get_wallet_amount($user_id, 'delivery') ?? 0, 2);
            $wallet['transactions'] = $this->data_db->get_wallet_transactions($user_id);
            foreach($wallet['transactions'] as $key => $transaction){
                $wallet['transactions'][$key]['amount'] = "₹ ".$transaction['amount'];
                $wallet['transactions'][$key]['reward_type'] = ucfirst($transaction['reward_type']);
                $wallet['transactions'][$key]['datetime'] = DateTime::createFromFormat('Y-m-d H:i:s', $transaction['datetime'])->format('d-m-Y h:i A');
            }

            $response = ['status' => 1, 'message' => 'Success', 'data' => $wallet];
        }else{
            $response = ['status' => 0, 'message' => 'Success', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    public function user_wallet_get(){
        $auth_token = $this->input->get('auth_token');
        $token_data = $this->token_data_get($auth_token);
        if ($token_data != false) {
            $wallet = [
                'amount_total'      => $this->data_db->get_wallet_total($token_data['id']),
                'amount_used'       =>  $this->data_db->get_wallet_used($token_data['id']),
                'amount_balance'    =>  $this->data_db->get_wallet_balance($token_data['id']),
                'transaction_total' => $this->data_db->get_wallet_used($token_data['id']),
            ];

            $wallet['transactions'] = [];

            $response = ['status' => 1, 'message' => 'Success', 'data' => $wallet];
        }else{
            $response = ['status' => 0, 'message' => 'Success', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }






    /**
     * Payment & Ordering
     */


	public function save_payment_info_get() {
		$token_data 			= $this->token_data();
        $razorpay_payment_id    = $this->input->get('razorpayPaymentID');
        $user_id                = $this->input->get('user_id') > 0 ? $this->input->get('user_id') : $token_data['id'];
        $response               = [];

        if ($token_data != false) {
            $cart_data = $this->data_db->cart_data($user_id);

            $time_slot = $this->main->get_time_slot_single($this->input->get('slot_id'));

			if($this->input->get('is_applied_coin')){
				$coins_applied = $cart_data['coins_applicable'];
			}else{
				$coins_applied = $this->input->get('final_amount') < $cart_data['cart_total_price'] ? $cart_data['coins_applicable'] : 0;
			}

			$address = $this->db->get_where('address', ['id' => $this->input->get('address_id')])->row_array();

            //creating order
            $order = [
                'user_id'               => $user_id,
                'order_no'              => $this->data_db->generate_order_no(),
                'delivery_charge'       => $cart_data['delivery_charge'],
                'item_amount'           => $cart_data['cart_item_total_price'],
                'amount'                => $cart_data['cart_item_total_price'] + $cart_data['delivery_charge'] - $coins_applied,
                'coupon_saved_amount'   => $this->input->get('coupon_applied_id') > 0 ? $this->data_db->get_coupon_applied(['id' => $this->input->get('coupon_applied_id'), 'status' => 'pending'])->row()->amount : null,
                'coupon_applied_id'     => $this->input->get('coupon_applied_id') > 0 ? $this->input->get('coupon_applied_id') : null,
                'coins_applied'         => $coins_applied,
                'razorpay_payment_id'   => $this->input->get('payment_method') == 1 ? $razorpay_payment_id : null,
                'order_status'          => 'pending',
                'payment_status'        => $this->input->get('payment_method') == 1 ? 'completed' : 'pending',
                'payment_method'        => $this->input->get('payment_method'),
                'address'               => $this->db->get_where('address', ['id' => $this->input->get('address_id')])->row()->full_address,
                'address_id'            => $this->input->get('address_id'),
                'time_slot_id'          => $this->input->get('slot_id'),
                'time_slot'             => $time_slot['from_time'].' to '.$time_slot['to_time'],
                'time_slot_date'        => $this->input->get('time_slot_date'),
				'latitude'				=> $address['latitude'],
				'longitude'				=> $address['longitude'],
                'created_by'            => $token_data['id'],
                'created_by_role'       => $token_data['role_id'],
                'order_date'            => date('Y-m-d H:i:s'),
            ];
            $order_id = $this->data_db->create_order($order);

            if($order['coupon_applied_id'] > 0){
                $this->data_db->update_applied_coupon_status($order['coupon_applied_id'], ['status' => 'completed', 'order_id' => $order_id]);
            }


            if ($order_id > 0) {
                $order_items = [];
                foreach ($cart_data['products'] as $item) {
                    //create order items
                    $order_items[] = [
                        'order_id'      => $order_id,
                        'product_id'    => $item['product_id'],
                        'variant_id'    => $item['variant_id'],
                        'quantity'      => $item['quantity'],
                        'quantity_no'   => $item['quantity_no'],
                        'product_price' => $item['item_purchase_price'],
                        'total_amount'  => $item['item_total_price'],
                        'unit_text'     => $item['unit_text'],
                        'unit_value'    => $item['unit_value'],
                    ];
                }
                if ($this->data_db->create_order_items($order_items)) {
                    $this->data_db->clear_cart($user_id);
                    $response = ['status' => 1, 'message' => 'Order created successfully!', 'data' => []];
                } else {
                    $response = ['status' => 0, 'message' => 'Failed to create order!', 'data' => []];
                }
            } else {
                $response = ['status' => 0, 'message' => 'Failed to create order!', 'data' => []];
            }
        } else {
            $response = ['status' => 0, 'message' => 'Failed!', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    /**
     * Apply Coupon codes
     */
    public function apply_coupon_code_get() {
        $token_data = $this->token_data();
        $response = [];
        if ($token_data != false) {
            $coupon_code = trim($this->input->get('coupon_code'));
            $coupon_code_details = $this->data_db->get_coupon_code_details($coupon_code);
            $coupon_code = $coupon_code_details->row();

            if($coupon_code_details->num_rows() > 0){
                $this->data_db->clear_reserved_coupon_code($token_data['id']);
                if($coupon_code_details->quantity > 0 && !($this->data_db->coupon_code_applied_count($coupon_code->id) < $coupon_code->quantity)){
                    $response = ['status' => 0, 'message' => 'Coupon code expired!', 'data' => []];
                }else{
                    if($coupon_code_details->quantity_user > 0 && !($this->data_db->coupon_code_applied_count($coupon_code->id, $token_data['id']) < $coupon_code->quantity_user)){
                        $response = ['status' => 0, 'message' => 'Coupon already applied!', 'data' => []];
                    }else{
                        $cart_data          = $this->data_db->cart_data($token_data['id']);
                        $cart_amount        = $cart_data['cart_total_price'];
                        $discount_percent   = $coupon_code->amount;
                        $discount_amount    = $cart_amount * $discount_percent/ 100;
                        $apply_coupon = [
                            'user_id'   => $token_data['id'],
                            'coupon_id' => $coupon_code->id,
                            'amount'    => round($discount_amount),
                            'status'    => 'pending',
                            'datetime'  => date('Y-m-d H:i:s'),
                        ];
                        $data['coupon_applied_id']  = $this->data_db->apply_coupon_code($apply_coupon);
                        $data['applied_amount']     = $apply_coupon['amount'];

                        $response = ['status' => 1, 'message' => 'Success!', 'data' => $data];
                    }

                }

            }else{
                $response = ['status' => 0, 'message' => 'Coupon code is invalid!', 'data' => []];
            }
        }else{
            $response = ['status' => 0, 'message' => 'Authentication failed', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }



    public function my_orders_get() {
        $auth_token = $this->input->get('auth_token');
        $token_data = $this->token_data_get($auth_token);
        $user_id = $this->input->get('user_id') > 0 ? $this->input->get('user_id') : $token_data['id'];
        $my_orders = [];
        if ($token_data != false) {
            $orders = $this->data_db->get_orders($user_id);
            $my_orders = $this->data_db->get_orders_list_data($orders);
        }
        $this->response($my_orders, REST_Controller::HTTP_OK);
    }
    
    public function delivery_boy_orders_get() {
        $auth_token = $this->input->get('auth_token');
        $token_data = $this->token_data_get($auth_token);
        $my_orders = [];
        if ($token_data != false) {
            $user_id    = $token_data['id'];
            $orders     = $this->data_db->get_delivery_orders($user_id);
            $my_orders  = $this->data_db->get_orders_list_data($orders);
        }
        $this->response($my_orders, REST_Controller::HTTP_OK);
    }
    

    public function change_order_status_get() {
        $response = [];
		$token_data = $this->token_data();
        if ($token_data != false) {
            $is_qr = $this->input->get('is_qr');
			$order_id = $this->input->get('order_id');
			$order_id = $is_qr > 0 ? $this->db->get_where('orders', ['order_no' => $order_id])->row()->id : $order_id;

			$status = strtolower($this->input->get('status'));
            $delivery_user_id = $token_data['id'];
//            $remarks = 'Order cancelled by user!';

			//check if order already in process
			$order = $this->data_db->get_single_order($order_id);

			if($status=='cancelled' && $order['status'] =='pending'){
				$response = ['status' => 0, 'message' => 'Order already in processing!'];

			}else{
				$this->data_db->change_order_status($order_id, $status, $delivery_user_id);
				$response = ['status' => 1, 'message' => 'Status update successfully!'];
			}
        } else {
            $response = ['status' => 0, 'message' => 'Authentication failed!'];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    //DDP DELIVERY REPORT
    public function ddp_delivery_report_get(){
        $response = [];
        $auth_token = $this->input->get('auth_token');
        $token_data = $this->token_data_get($auth_token);
        if ($token_data != false) {
            $user_id = $this->input->get('user_id');
            $report['success_orders'] = $this->data_db->orders_count_by_delivery_user($user_id, 'delivered');
            $report['amount_total'] = $this->data_db->orders_amount_total_by_delivery_user($user_id, 'delivered');;
            $report['amount_collected'] = 100;
            $report['amount_pending'] = $report['amount_total'] - $report['amount_collected'];
            
            $orders = $this->data_db->get_orders_by_delivery_user($user_id);
//            get_orders_list_data
            $report['orders'] = $this->data_db->get_orders_list_data($orders);
            
            $response = ['status' => 1, 'message' => 'Status update successfully!', 'data' => $report];
        } else {
            $response = ['status' => 0, 'message' => 'Something went wrong!'];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    /*
     * Orders by DDP
     */
    public function orders_by_ddp_get() {
        $auth_token = $this->input->get('auth_token');
        $token_data = $this->token_data_get($auth_token);
        if ($token_data != false) {
            $user_id = $this->input->get('user_id');
            if($this->input->get('date') != 0){
                $order_date = DateTime::createFromFormat('d-m-Y', $this->input->get('date'))->format('Y-m-d');
            }else{
                $order_date = 0;
            }
            $orders = $this->data_db->get_orders_list_data($this->data_db->get_orders_by_delivery_user_ward($user_id, $order_date));

            $orders_array = [
                'pending' => [],
                'processing' => [],
                'delivered' => [],
            ];
            foreach($orders as $order){
                if(strtolower($order['order_status']) == 'pending'){
                    $orders_array['pending'][] = $order;
                }elseif (strtolower($order['order_status']) == 'processing'){
                    $orders_array['processing'][] = $order;
                }elseif (strtolower($order['order_status']) == 'delivered'){
                    $orders_array['delivered'][] = $order;
                }
            }
            $response = ['status' => 1, 'message' => 'Success', 'data' => $orders_array];
        }else{
            $response = ['status' => 0, 'message' => 'Authentication token error!', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    /**
     * Make payment
     */
    public function ddp_make_payment_post(){
        $auth_token = $this->input->post('auth_token');
        $token_data = $this->token_data_get($auth_token);
        if ($token_data != false) {
            $data = [
                'amount' => $this->input->post('amount'),
                'from_user_id' => $token_data['id'],
                'from_user_role' => 2,
                'to_user_id' => $this->input->post('user_id'),
                'to_user_role' => 3,
                'type' => 'make_payment',
                'date' => DateTime::createFromFormat('d-m-Y', $this->input->post('date'))->format('Y-m-d'),
                'datetime' => date('Y-m-d H:i:s'),
            ];
            if($this->data_db->create_transaction($data)>0){
                $response = ['status' => 1, 'message' => 'Success', 'data' => []];
            }else{
                $response = ['status' => 0, 'message' => 'Something went wrong!', 'data' => []];
            }
        }else{
            $response = ['status' => 0, 'message' => 'Authentication token error!', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    /**
     * Collect payment
     */
    public function ph_collect_payment_post(){
        $auth_token = $this->input->post('auth_token');
        $token_data = $this->token_data_get($auth_token);
        if ($token_data != false) {
            $data = [
                'amount' => $this->input->post('amount'),
                'from_user_id' => $this->input->post('user_id'),
                'from_user_role' => 3,
                'to_user_id' => $token_data['id'],
                'to_user_role' => 2,
                'type' => 'collect',
                'date' => DateTime::createFromFormat('d-m-Y', $this->input->post('date'))->format('Y-m-d'),
                'datetime' => date('Y-m-d H:i:s'),
            ];
            if($this->data_db->create_transaction($data)>0){
                $response = ['status' => 1, 'message' => 'Success', 'data' => []];
            }else{
                $response = ['status' => 0, 'message' => 'Something went wrong!', 'data' => []];
            }
        }else{
            $response = ['status' => 0, 'message' => 'Authentication token error!', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }









    public function daily_collection_by_ddp_get(){
        $auth_token = $this->input->get('auth_token');
        $token_data = $this->token_data_get($auth_token);
        if ($token_data != false) {
            $user_id = $this->input->get('user_id') ? $this->input->get('user_id'): $token_data['id'];
            $report['total_collection'] = "₹ ".$this->data_db->get_total_collected_amount_by_ddp($user_id) ?? 0;
            $report['total_transferred'] = "₹ ".$this->data_db->get_total_transferred_amount_by_ddp($user_id) ?? 0;
            $report['balance_collection'] = "₹ ".$this->data_db->get_daily_collection_ddp($user_id) ?? 0;
            $report['transactions'] = $this->data_db->get_transactions_list($user_id);
            foreach($report['transactions'] as $key => $transaction){
                $report['transactions'][$key]['amount'] = "₹ ".$transaction['amount'];
                $report['transactions'][$key]['datetime'] = DateTime::createFromFormat('Y-m-d H:i:s', $transaction['datetime'])->format('d-m-Y h:i A');
                $report['transactions'][$key]['user_name'] = ucfirst($transaction['name']);
            }
            

            $response = ['status' => 1, 'message' => 'Success', 'data' => $report];
        }else{
            $response = ['status' => 0, 'message' => 'Success', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }

    /**
     * DDP ASSIGN TO WARD
    */
    public function ddp_assign_ward_get(){
        $response = [];
        $auth_token = $this->input->get('auth_token');
        $token_data = $this->token_data_get($auth_token);
        if ($token_data != false) {
            $data = [
                'user_id' => $this->input->get('user_id'),
                'panchayath_id' => $this->input->get('panchayath_id'),
                'ward_id' => $this->input->get('ward_id')
            ];
            $response = $this->data_db->assign_user($data);
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }
    public function ddp_assign_ward_list_get(){
        $response = [];
        $auth_token = $this->input->get('auth_token');
        $token_data = $this->token_data_get($auth_token);
        if ($token_data != false) {
            $assign_list = $this->data_db->user_assigned_list($this->input->get('user_id'));
            $response = ['status' => 1, 'message' => 'Success!', 'data' => $assign_list];
        }else{
            $response = ['status' => 0, 'message' => 'Authentication error!', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }
    public function delete_assign_ward_get(){
        $auth_token = $this->input->get('auth_token');
        $token_data = $this->token_data_get($auth_token);
        if ($token_data != false) {
            $this->data_db->delete_user_assign($this->input->get('assign_id'));
            $response = ['status' => 1, 'message' => 'Success!', 'data' => []];
        }else{
            $response = ['status' => 0, 'message' => 'Authentication error!', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }


    /**
     * Report
     */
    //DDP REPORT
    public function ddp_report_get() {
        $auth_token = $this->input->get('auth_token');
        $token_data = $this->token_data_get($auth_token);
        if ($token_data != false) {
            $user_id = $this->input->get('user_id');
            $from_date = $this->input->get('from_date');
            $to_date = $this->input->get('to_date');
            $user = $this->data_db->get_user($user_id);

            if($this->input->get('ward_id') == 0){
                $ward_id = array_column($this->data_db->user_assigned_list($user_id), 'ward_id');
            }else{
                $ward_id = [$this->input->get('ward_id')];
            }

            $data['name'] = $user['name'];
            $data['phone'] = $user['phone'];
            $data['total_customers'] = $this->data_db->get_total_customers_count_by_ddp($user_id, $ward_id) ?? 0;
            $data['total_delivery'] = $this->data_db->get_total_delivery_count_by_ddp($user_id, $ward_id, $from_date, $to_date) ?? 0;
            $data['total_order_amount'] = $this->data_db->get_total_order_amount_by_ddp($user_id, $ward_id, $from_date, $to_date) ?? 0;
            $response = ['status' => 1, 'message' => 'Success!', 'data' => $data];
        }else{
            $response = ['status' => 0, 'message' => 'Authentication error!', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }
    public function test_api_get(){
        $data['name'] = 'Adeeb C';
        $data['phone'] = '9656670867';
        $data['total_customers'] = 1568;
        $data['total_delivery'] = 5687;
        $data['total_order_amount'] = 8975;
        $response = ['status' => 1, 'message' => 'Success!', 'data' => $data];
        $this->response($response, REST_Controller::HTTP_OK);
    }

	/**
	 * REFERRAL LINK
	 */
	public function update_referral_code_get(){
		if ($this->token_data() != false) {
			$update_data['invited_by'] 		= $this->input->get('invited_by');
			$update_data['dynamic_link'] 	= $this->input->get('dynamic_link');
			$this->data_db->update_user($update_data, ['id' => $this->token_data['id']]);

			$response = ['status' => 1, 'message' => 'Success!', 'data' => []];

		}else{
			$response = ['status' => 0, 'message' => 'Authentication Failed!', 'data' => []];
		}

		$this->response($response, REST_Controller::HTTP_OK);
	}







    public function sort_product_array_by_stock_status($array){
        $is_stock = array_column($array, 'is_stock');
        array_multisort($is_stock, SORT_DESC, $array);
        return $array;
    }




    private function upload_files($array, $files): array {
        $config = [
            'upload_path' => $array['path'],
            'allowed_types' => 'jpg|jpeg|png|pdf',
            'overwrite' => 1,
        ];

        $this->load->library('upload', $config);

        $response = [];

        foreach ($files['file']["name"] as $key => $image) {
            $_FILES['file[]']['name'] = $files['file']['name'][$key];
            $_FILES['file[]']['type'] = $files['file']['type'][$key];
            $_FILES['file[]']['tmp_name'] = $files['file']['tmp_name'][$key];
            $_FILES['file[]']['error'] = $files['file']['error'][$key];
            $_FILES['file[]']['size'] = $files['file']['size'][$key];

            $fileName = $array['id1'] . '_' . $array['id2'] . '_' . md5($image . date('Y-m-d H:i:s'));
            $config['file_name'] = $fileName;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('file[]')) {
                $upload_data = $this->upload->data();
                $response[] = $fileName . $upload_data['file_ext'];
            } else {
                return $this->upload->display_errors('');
            }

        }
        return $response;
    }

    //SEND SMS
    public function sms_api($phno, $message) {
        $message = urlencode($message);
        $fields = [
            'username' => 'prism',
            'password' => 'stallion123',
            'sendername' => 'IAMSTUDY',
            'mobileno' => $phno,
            'message' => $message,
        ];
        $url = "https://2factor.in/API/V1/5f32c941-ad59-11ea-9fa5-0200cd936042/SMS/$phno/$message/IAMSTUDY";
        // $url = "sms.sangamamonline.in/httpapi/smsapi?uname=prism&password=stallion123&sender=ALPHAA&receiver=$phno&route=TA&msgtype=1&sms=$message";
        //open connection
        $ch = curl_init();

        //set options
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-type: multipart/form-data"]);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //needed so that the $result=curl_exec() output is the file and isn't just true/false

        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);

        //write to file
        $fp = fopen('uploads/result.txt', 'w');  //make sure the directory markdown.md is in and the result.pdf will go to has proper permissions
        fwrite($fp, $result);
        fclose($fp);
        //echo "sms sent successfully";
        // echo $message;
        //echo $phno;
    }

    private function token_data_get($auth_token) {
        //$received_Token = $this->input->request_headers('Authorization');
        // return $this->tokenHandler->DecodeToken($auth_token);
        if (isset($auth_token) && $auth_token != 'token') {
            try {
                return $this->tokenHandler->DecodeToken($auth_token);
            } catch (Exception $e) {
                echo 'catch';
                http_response_code('401');
                echo json_encode(["status" => false, "message" => $e->getMessage()]);
                return false;
            }
        } else {
            return false;
        }
    }

    public function test_api_notification_get(){
        $this->data_db->send_notification('Hello test', 'This is a test notification');
    }
    
    public function ddp_latest_order_get(){
        $auth_token = $this->input->get('auth_token');
        $token_data = $this->token_data_get($auth_token);
        if ($token_data != false) {
            $order_details = $this->data_db->get_last_delivered_order_by_ddp($token_data['id']);
            $order_details = $this->data_db->get_orders_list_data($order_details);
            $response = ['status' => 1, 'data' =>$order_details];
        }else{
            $response = ['status' => 0, 'message' => 'Authentication error!', 'data' => []];
        }
        $this->response($response, REST_Controller::HTTP_OK);
    }


    public function app_version_get()
    {
        $app_version = $this->input->get('app_version');
        if($this->input->get('platform')=='ios') {
			$current_version = $this->data_db->app_version_ios();
        }else{
			$current_version = $this->data_db->app_version_android();
		}
        $response['android_url'] 	= 'https://play.google.com/store/apps/details?id=com.trogon.bellvery.bellvery&hl=en_IN';
        $response['ios_url'] 		= 'https://apps.apple.com/in/app/bellvery/id1610113328';
        $response['status'] = version_compare($current_version, $app_version) == 1 ? 1 : 0;
        $this->response($response, REST_Controller::HTTP_OK);
    }
    

    public function cron_delete_cart_daily(){
        if(date('H')=='00'){
            $this->data_db->clear_cart();
        }
    }


	private function generate_token($user): string {
		return $this->tokenHandler->GenerateToken($user);
	}
	private function token_data() {
		if(!empty($this->session->userdata('auth_token'))){
			$auth_token = $this->session->userdata('auth_token');
		}else{
			$auth_token = $this->input->method() == 'post' ? $this->input->post('auth_token') : $this->input->get('auth_token');
		}


		if (!empty($auth_token) && $auth_token != 'token') {
			try {
				return $this->tokenHandler->DecodeToken($auth_token);
			} catch (Exception $e) {
				echo 'catch';
				http_response_code('401');
				echo json_encode(["status" => false, "message" => $e->getMessage()]);
				return false;
			}
		} else {
			return false;
		}
	}
}
