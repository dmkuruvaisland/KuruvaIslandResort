<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
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
	public array $data = array();

	public function __construct() {
		parent::__construct();
		ini_set('display_errors', 1);

		$this->load->library('session');
	}

	public function upload_file_multiple($upload_folder, $file_name, $full_url = true): array {
		$count_files = count($_FILES[$file_name]['name']);
		$return = [];
		if($count_files > 0){
			//UPLOAD FILE
			$uploadPath = 'uploads/' . $upload_folder . '/' . date("m-Y").'/'. date('W');
			if (!is_dir($uploadPath)) {
				mkdir($uploadPath, 0777, TRUE);
			}

			for($i=0; $i<$count_files; $i++){
				$return[$i]['file'] = '';
				$return[$i]['status'] = false;
				$return[$i]['file_type'] = '';
				if (isset($_FILES[$file_name]['name'][$i])) {

					$fileExt = pathinfo($_FILES[$file_name]['name'][$i], PATHINFO_EXTENSION);
					if($fileExt == 'pdf'){
						$return[$i]['file_type'] = 'pdf';
					}elseif ($fileExt == 'mp3' || $fileExt == 'ogg' || $fileExt == 'aac' || $fileExt == 'wav' || $fileExt == 'm4a' || $fileExt == 'wma'){
						$return[$i]['file_type'] = 'audio';
					}else{
						$return[$i]['file_type'] = 'image';
					}

					$_FILES['file_a']['name']     = $_FILES[$file_name]['name'][$i];
					$_FILES['file_a']['type']     = $_FILES[$file_name]['type'][$i];
					$_FILES['file_a']['tmp_name'] = $_FILES[$file_name]['tmp_name'][$i];
					$_FILES['file_a']['error']     = $_FILES[$file_name]['error'][$i];
					$_FILES['file_a']['size']     = $_FILES[$file_name]['size'][$i];


					$configUpload = array(
						'upload_path' => $uploadPath,
						'allowed_types' => '*',
						'encrypt_name' => true
					);
					$this->load->library('upload', $configUpload);
					if (!$this->upload->do_upload('file_a')) {
						log_message('error',$this->upload->display_errors());
						unset($return[$i]);
					} else {
						$data['file'] = array('upload_data' => $this->upload->data());

						if($full_url == true){
							$return[$i]['file'] = $uploadPath . "/" . $data['file']['upload_data']['file_name'];
						}else{
							$return[$i]['file'] = date("mY") . '/' . date('W').'/'. $data['file']['upload_data']['file_name'];
						}

						$return[$i]['status'] = true;
					}
				}
			}
		}
		return $return;
	}

	public function upload_file($upload_folder, $file_name, $full_url = true) {
		log_message('error', print_r($_FILES, true));
		if (isset($_FILES[$file_name]['name'])) {
			$fileExt = pathinfo($_FILES[$file_name]['name'], PATHINFO_EXTENSION);

			if($fileExt == 'pdf'){
				$return['file_type'] = 'pdf';
			}elseif($fileExt == 'mp3' || $fileExt == 'aac'){
				$return['file_type'] = 'audio';
			}else{
				$return['file_type'] = 'image';
			}
			//UPLOAD FILE
			$uploadPath = 'uploads/' . $upload_folder . '/' . date("mY");
			if (!is_dir($uploadPath)) {
				mkdir($uploadPath, 0777, TRUE);
			}
			$configUpload = array(
				'upload_path' => $uploadPath,
				'allowed_types' => '*',
				'encrypt_name' => true
			);
			$this->load->library('upload', $configUpload);
			if (!$this->upload->do_upload($file_name)) {
				$error = array('error' => $this->upload->display_errors());
				log_message('error', print_r($error, true));
				return false;
			} else {
				$data['file'] = array('upload_data' => $this->upload->data());

				if($full_url){
					$return['file'] = $uploadPath . "/" . $data['file']['upload_data']['file_name'];
				}else{
					$return['file'] =  date("mY") . '/' . date('W').'/'. $data['file']['upload_data']['file_name'];
				}
				return $return;
			}
		} else {
			return false;
		}
	}

	/**
	 * Trim JSON
	 */
	public function trim_and_return_json($untrimmed_array) {
		$trimmed_array = array();
		if (sizeof($untrimmed_array) > 0) {
			foreach ($untrimmed_array as $row) {
				if ($row != "") {
					$trimmed_array[] = $row;
				}
			}
		}
		return json_encode($trimmed_array);
	}

}

class App_Controller extends MY_Controller {
	public array $data;

	public function __construct () {
		parent::__construct();

		$this->load->model('menu_m');

		//check admin login
		$this->check_login();

		// get menu
		$this->data['menu'] = $this->menu_m->get_side_menu();

		// check permission
		$method = $this->router->fetch_method();
		$class = $this->router->fetch_class();
	}

	// Check Login
	public function check_login() {
		check_login();
	}

	
}

class Frontend_Controller extends MY_Controller {
	public function __construct () {
		parent::__construct();
		$this->load->library('session');
		//loading models
//		$this->load->model('login_m');
	}
}





